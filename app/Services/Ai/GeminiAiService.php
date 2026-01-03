<?php

namespace App\Services\Ai;

use App\Models\Event;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GeminiAiService implements AiServiceInterface
{
    protected string $apiKey;
    // Switching to the standard Google Assistant/Generative Language API endpoint
    // compatible with GEMINI_API_KEY
    protected string $baseUrl = 'https://aiplatform.googleapis.com/v1/publishers/google/models/gemini-2.5-flash-lite:generateContent';

    public function __construct()
    {
        $this->apiKey = config('services.gemini.api_key');
    }

    public function analyzeEvent(Event $event): array
    {
        $prompt = $this->preparePrompt($event);
        
        try {
            // User requested structure: URL?key={API_KEY}
            $url = "{$this->baseUrl}?key={$this->apiKey}";

            $response = Http::timeout(60)->withHeaders([
                'Content-Type' => 'application/json'
            ])->post($url, [
                'contents' => [
                    [
                        'role' => 'user',
                        'parts' => [
                            ['text' => $prompt]
                        ]
                    ]
                ],
                'generationConfig' => [
                    'temperature' => 0.2,
                    'topK' => 40,
                    'topP' => 0.95,
                    'maxOutputTokens' => 1024,
                    'responseMimeType' => 'application/json',
                ]
            ]);

            if ($response->failed()) {
                Log::error('Gemini API Error: ' . $response->body());
                throw new \Exception('Yapay zeka servisine bağlanılamadı: ' . $response->status());
            }

            $result = $response->json();
            
            // Extract content from response
            if (isset($result['candidates'][0]['content']['parts'][0]['text'])) {
                 $text = $result['candidates'][0]['content']['parts'][0]['text'];
                 $text = str_replace(['```json', '```'], '', $text);
                 return json_decode($text, true);
            }

            throw new \Exception('AI yanıtı beklenmedik formatta.');

        } catch (\Exception $e) {
            Log::error('AI Analysis Exception: ' . $e->getMessage());
            throw $e;
        }
    }

    protected function preparePrompt(Event $event): string
    {
        $responses = $event->responses()->with(['province', 'district'])->get();
        
        $participantsData = $responses->map(function ($response) {
            return [
                'name' => $response->name ?? 'Anonim',
                'location' => $response->province ? ($response->province->name . '/' . $response->district->name) : $response->location_answer,
                'available_dates' => $response->selected_dates,
                'available_times' => $response->selected_times,
            ];
        })->toJson();

        $eventInfo = "Etkinlik: {$event->title}\n" .
                     "Açıklama: {$event->description}\n" .
                     "Konum Modu: {$event->location_mode}\n" .
                     "Tarih Aralığı: {$event->start_date->format('Y-m-d')} - {$event->end_date->format('Y-m-d')}";

        return <<<PROMPT
Sen profesyonel bir etkinlik planlama asistanısın. Görevin, aşağıdaki katılımcı verilerini analiz ederek en ideal buluşma noktasını, tarihini ve saatini belirlemektir.

VERİLER:
$eventInfo

KATILIMCILAR:
$participantsData

KRİTİK KURALLAR:
1. KONUM SEÇİMİ (ÇOK ÖNEMLİ):
   - Asla "Merkezi bir ilçe", "Ortak nokta" veya "İstanbul" gibi genel cevaplar verme.
   - MUTLAKA "Beşiktaş", "Kadıköy", "Mecidiyeköy", "Alsancak", "Kızılay" gibi GERÇEK ve SPESİFİK bir ilçe veya semt adı ver.
   - Ulaşım ağlarını (Metro, Metrobüs, Marmaray, Vapur) düşün. Katılımcıların dağılımına göre herkesin en makul sürede ulaşabileceği transfer noktalarını seç (Örn: Beylikdüzü ve Pendik'teki kişiler için Söğütlüçeşme veya Mecidiyeköy gibi).
   - "common" modunda ise, tüm katılımcıların ağırlık merkezini bul ve oradaki en popüler/merkezi semti yaz.

2. TARİH VE SAAT:
   - Katılımın en yüksek olacağı kesişim kümesini bul.
   - Eğer tam çakışma yoksa, çoğunluğun uyduğu en iyi alternatifi seç.

3. AÇIKLAMA:
   - Neden bu konumu ve saati seçtiğini, ulaşım kolaylığına ve katılımcı dağılımına atıfta bulunarak ikna edici şekilde açıkla.

ÇIKTI FORMATI (JSON):
{
    "suggested_location": "İlçe/Semt Adı (Örn: Kadıköy)",
    "suggested_date": "YYYY-MM-DD",
    "suggested_time": "HH:MM",
    "reasoning": "Seçim nedeni açıklaması..."
}

Sadece saf JSON döndür. Markdown formatlama kullanma.
PROMPT;
    }
}
