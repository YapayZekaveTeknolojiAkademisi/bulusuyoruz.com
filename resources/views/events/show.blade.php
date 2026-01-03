<x-layouts.app :title="$viewModel->event->title">
    <div class="py-12">
        <div class="max-w-4xl mx-auto px-6">
            <div class="mb-6 text-center">
                 <h1 class="font-bold text-2xl text-slate-800">
                    {{ $viewModel->event->title }}
                </h1>
            </div>

            <div class="grid gap-6">
                <!-- Global Info Badge (Visible to All) -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 text-slate-600 text-sm font-medium bg-slate-50 p-4 rounded-xl inline-flex mx-auto border border-slate-200 mb-6">
                    <div class="flex items-center gap-2">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-primary">
                          <rect width="18" height="18" x="3" y="4" rx="2" ry="2"/>
                          <line x1="16" x2="16" y1="2" y2="6"/>
                          <line x1="8" x2="8" y1="2" y2="6"/>
                          <line x1="3" x2="21" y1="10" y2="10"/>
                        </svg>
                        {{ $viewModel->formattedDateRange() }}
                    </div>
                    <div class="hidden sm:block text-slate-300">|</div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-primary">
                          <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                          <circle cx="12" cy="10" r="3"/>
                        </svg>
                        {{ $viewModel->event->location_mode === 'common' ? 'Ortak Konum' : 'Öneri Konum' }}
                    </div>
                </div>

                @if($viewModel->isOwner())

                    @if($viewModel->event->status === 'completed' && $viewModel->event->result)
                         <!-- AI RESULT DISPLAY -->
                         @include('events.partials.ai-result-card')
                         
                         <!-- Owner Actions (Edit, Recalculate, Reactivate) -->
                        <div class="glass p-8 rounded-2xl text-center mt-6" x-data="{ 
                            recalcLoading: false, 
                            reactivateLoading: false,
                            showRecalcConfirm: false,
                            showReactivateConfirm: false
                        }">
                            <h3 class="text-lg font-bold text-slate-900 mb-4">Başka bir planın mı var?</h3>
                             
                             <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mt-4 flex-wrap">
                                
                                <!-- Recalculate AI Button -->
                                <button @click="showRecalcConfirm = true"
                                        :disabled="recalcLoading"
                                        :class="{ 'opacity-75 cursor-wait': recalcLoading }"
                                        class="inline-flex items-center gap-2 text-sm font-bold text-teal-600 bg-teal-50 hover:bg-teal-100 py-3 px-6 rounded-xl transition-colors border border-teal-200">
                                    <template x-if="!recalcLoading">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/>
                                              <path d="M3 3v5h5"/>
                                              <path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16"/>
                                              <path d="M16 16l5 5v-5"/>
                                            </svg>
                                            Konumu Tekrar Hesapla
                                        </div>
                                    </template>
                                    <template x-if="recalcLoading">
                                        <div class="flex items-center gap-2">
                                            <svg class="animate-spin h-4 w-4 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                            </svg>
                                            Hesaplanıyor...
                                        </div>
                                    </template>
                                </button>

                                <!-- Reactivate Button -->
                                <button @click="showReactivateConfirm = true"
                                        :disabled="reactivateLoading"
                                        :class="{ 'opacity-75 cursor-wait': reactivateLoading }"
                                        class="inline-flex items-center gap-2 text-sm font-bold text-amber-600 bg-amber-50 hover:bg-amber-100 py-3 px-6 rounded-xl transition-colors border border-amber-200">
                                    <template x-if="!reactivateLoading">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                              <circle cx="9" cy="7" r="4"/>
                                              <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                              <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                            </svg>
                                            Yanıt Almaya Devam Et
                                        </div>
                                    </template>
                                    <template x-if="reactivateLoading">
                                        <div class="flex items-center gap-2">
                                            <svg class="animate-spin h-4 w-4 text-amber-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                            </svg>
                                            Açılıyor...
                                        </div>
                                    </template>
                                </button>

                                <!-- Manual Edit Button -->
                                <a href="{{ route('events.edit', $viewModel->event->slug) }}" class="inline-flex items-center gap-2 text-sm font-medium text-slate-500 hover:text-primary transition-colors py-3 px-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                      <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/>
                                      <path d="m15 5 4 4"/>
                                    </svg>
                                    Etkinliği Kendin Düzenle
                                </a>
                            </div>

                            <!-- Recalculate Confirmation Modal -->
                            <template x-teleport="body">
                                <div x-show="showRecalcConfirm" x-cloak 
                                     class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/50 backdrop-blur-sm"
                                     x-transition:enter="transition ease-out duration-200"
                                     x-transition:enter-start="opacity-0"
                                     x-transition:enter-end="opacity-100"
                                     x-transition:leave="transition ease-in duration-150"
                                     x-transition:leave-start="opacity-100"
                                     x-transition:leave-end="opacity-0">
                                    <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-md mx-4" @click.away="showRecalcConfirm = false">
                                        <div class="text-center">
                                            <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-teal-600">
                                                  <path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/>
                                                  <path d="M3 3v5h5"/>
                                                  <path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16"/>
                                                  <path d="M16 16l5 5v-5"/>
                                                </svg>
                                            </div>
                                            <h4 class="text-xl font-bold text-slate-900 mb-2">Konumu Tekrar Hesapla?</h4>
                                            <p class="text-slate-500 mb-6">Yapay zeka mevcut yanıtları yeniden analiz edecek. Bu işlem birkaç saniye sürebilir.</p>
                                            <div class="flex gap-3">
                                                <button @click="showRecalcConfirm = false" class="flex-1 py-3 px-4 rounded-xl border border-slate-200 text-slate-600 font-medium hover:bg-slate-50 transition-colors">
                                                    İptal
                                                </button>
                                                <form action="{{ route('events.finalize', $viewModel->event->slug) }}" method="POST" class="flex-1" @submit="recalcLoading = true; showRecalcConfirm = false">
                                                    @csrf
                                                    <button type="submit" class="w-full py-3 px-4 rounded-xl bg-teal-500 text-white font-bold hover:bg-teal-600 transition-colors">
                                                        Evet, Hesapla
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>

                            <!-- Reactivate Confirmation Modal -->
                            <template x-teleport="body">
                                <div x-show="showReactivateConfirm" x-cloak 
                                     class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/50 backdrop-blur-sm"
                                     x-transition:enter="transition ease-out duration-200"
                                     x-transition:enter-start="opacity-0"
                                     x-transition:enter-end="opacity-100"
                                     x-transition:leave="transition ease-in duration-150"
                                     x-transition:leave-start="opacity-100"
                                     x-transition:leave-end="opacity-0">
                                    <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-md mx-4" @click.away="showReactivateConfirm = false">
                                        <div class="text-center">
                                            <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-amber-600">
                                                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                                  <circle cx="9" cy="7" r="4"/>
                                                  <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                                  <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                                </svg>
                                            </div>
                                            <h4 class="text-xl font-bold text-slate-900 mb-2">Yanıt Almaya Devam Et?</h4>
                                            <p class="text-slate-500 mb-6">Etkinlik tekrar aktif olacak ve katılımcılar yeni yanıtlar gönderebilecek. Mevcut sonuç görünmez olacak.</p>
                                            <div class="flex gap-3">
                                                <button @click="showReactivateConfirm = false" class="flex-1 py-3 px-4 rounded-xl border border-slate-200 text-slate-600 font-medium hover:bg-slate-50 transition-colors">
                                                    İptal
                                                </button>
                                                <form action="{{ route('events.reactivate', $viewModel->event->slug) }}" method="POST" class="flex-1" @submit="reactivateLoading = true; showReactivateConfirm = false">
                                                    @csrf
                                                    <button type="submit" class="w-full py-3 px-4 rounded-xl bg-amber-500 text-white font-bold hover:bg-amber-600 transition-colors">
                                                        Evet, Aktif Et
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    @else
                        <!-- Status/Summary Card (Owner Only - Active) -->
                        <div class="glass p-8 rounded-2xl text-center relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-500 to-green-500"></div>

                            <!-- EXISTING STATUS CARD -->
                            @if(session('success'))
                            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-green-600">
                                  <path d="M20 6 9 17l-5-5"/>
                                </svg>
                            </div>

                            <h1 class="text-3xl font-bold text-slate-900 mb-2">Harika! 🎉</h1>
                            <p class="text-slate-600 mb-8 max-w-lg mx-auto">
                                Etkinliğin başarıyla oluşturuldu. Şimdi arkadaşlarınla paylaş ve ne zaman buluşacağınıza karar verin.
                            </p>
                            @else
                            <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-primary">
                                  <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                                </svg>
                            </div>

                            <h1 class="text-3xl font-bold text-slate-900 mb-2">Etkinlik Durumu 📊</h1>
                            <p class="text-slate-600 mb-8 max-w-lg mx-auto">
                                Katılımcıların durumunu buradan takip edebilirsin. Henüz paylaşmadıysan linki göndererek arkadaşlarını davet et.
                            </p>
                            
                            <!-- AI FINALIZE BUTTON WITH LOADER -->
                            @if($viewModel->responsesCount() > 0)
                            <div class="mb-6" x-data="{ loading: false }">
                                <form action="{{ route('events.finalize', $viewModel->event->slug) }}" method="POST" @submit="loading = true">
                                    @csrf
                                    <button type="submit" 
                                            :disabled="loading"
                                            :class="{ 'opacity-75 cursor-wait': loading, 'hover:scale-105 hover:shadow-xl': !loading }"
                                            class="bg-gradient-to-r from-teal-500 to-emerald-500 text-white font-bold py-3 px-8 rounded-full shadow-lg transition-all flex items-center justify-center gap-2 mx-auto min-w-[280px]">
                                        
                                        <template x-if="!loading">
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                                                  <path d="M12 2a3 3 0 0 1 3 3v7a3 3 0 0 1-3 3"/>
                                                  <path d="M19 10v2a7 7 0 0 1-14 0v-2"/>
                                                  <line x1="12" x2="12" y1="19" y2="22"/>
                                                </svg>
                                                <span>Yapay Zeka ile Kararlaştır</span>
                                            </div>
                                        </template>

                                        <template x-if="loading">
                                            <div class="flex items-center gap-2">
                                                <svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                                </svg>
                                                <span>Analiz Ediliyor...</span>
                                            </div>
                                        </template>
                                    </button>
                                     <p x-show="!loading" class="text-xs text-slate-400 mt-2">Gemini AI yanıtları analiz edip en uygun yeri belirler.</p>
                                     <p x-show="loading" class="text-xs text-teal-600 mt-2 font-medium animate-pulse">En uygun buluşma planı oluşturuluyor, lütfen bekleyin...</p>
                                </form>
                            </div>
                            @endif

                            @endif

                            <div class="mt-4">
                                <a href="{{ route('events.edit', $viewModel->event->slug) }}" class="inline-flex items-center gap-2 text-sm font-medium text-slate-500 hover:text-primary transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                      <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/>
                                      <path d="m15 5 4 4"/>
                                    </svg>
                                    Etkinliği Düzenle
                                </a>
                            </div>
                        </div>
                    @endif

                    <!-- Owner Actions: Share Link -->
                    <div class="glass p-8 rounded-2xl">
                        <h3 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-primary">
                              <circle cx="18" cy="5" r="3"/>
                              <circle cx="6" cy="12" r="3"/>
                              <circle cx="18" cy="19" r="3"/>
                              <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"/>
                              <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"/>
                            </svg>
                            Paylaşma Linki
                        </h3>
                        <p class="text-slate-600 text-sm mb-4">Bu linki arkadaşlarına göndererek etkinliğe katılmalarını sağla.</p>
                        
                        <div class="flex items-center gap-2" x-data="{ copied: false }">
                            <input type="text" readonly value="{{ $viewModel->shareUrl() }}" class="input-field bg-white text-slate-500 select-all" />
                            <button @click="navigator.clipboard.writeText('{{ $viewModel->shareUrl() }}'); copied = true; setTimeout(() => copied = false, 2000)" 
                                    class="btn-primary py-3 px-6 whitespace-nowrap min-w-[140px]">
                                <span x-show="!copied" class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                      <rect width="14" height="14" x="8" y="8" rx="2" ry="2"/>
                                      <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/>
                                    </svg> 
                                    Kopyala
                                </span>
                                <span x-show="copied" class="flex items-center gap-2" x-cloak>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                                      <path d="M20 6 9 17l-5-5"/>
                                    </svg> 
                                    Kopyalandı
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- Responses Section (Owner View) -->
                    <div class="glass p-8 rounded-2xl">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-bold text-slate-900 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-primary">
                                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                  <circle cx="9" cy="7" r="4"/>
                                  <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                  <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                                Katılımcılar
                            </h3>
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-xs font-bold">
                                {{ $viewModel->responsesCount() }} Yanıt
                            </span>
                        </div>

                        @if($viewModel->responsesCount() > 0)
                            <div class="space-y-4">
                                @foreach($viewModel->event->responses as $response)
                                    <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                                        <div class="flex items-center gap-3 mb-3">
                                            <div class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center text-slate-500 font-bold shrink-0">
                                                {{ substr($response->user ? $response->user->name : ($response->ip_address ?? 'A'), 0, 1) }}
                                            </div>
                                            <div>
                                                <div class="font-medium text-slate-900">{{ $response->user ? $response->user->name : 'Anonim Katılımcı' }}</div>
                                                <div class="text-xs text-slate-500">{{ $response->created_at->diffForHumans() }}</div>
                                            </div>
                                        </div>

                                        <!-- Response Details -->
                                        <div class="grid gap-2 text-sm pl-13">
                                            @if($response->province && $response->district)
                                            <div class="flex items-start gap-2 text-slate-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-slate-400 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                                <span>{{ $response->province->name }} / {{ $response->district->name }}</span>
                                            </div>
                                            @endif
                                            
                                            <div class="flex items-start gap-2 text-slate-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-slate-400 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                <span>{{ $viewModel->formatResponseDates($response) }}</span>
                                            </div>

                                            <div class="flex items-start gap-2 text-slate-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-slate-400 mt-0.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                <span>{{ $viewModel->formatResponseTimes($response) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-8">
                                <div class="bg-slate-50 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 text-slate-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8">
                                      <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                      <circle cx="9" cy="7" r="4"/>
                                      <line x1="17" x2="22" y1="8" y2="13"/>
                                      <line x1="22" x2="17" y1="8" y2="13"/>
                                    </svg>
                                </div>
                                <p class="text-slate-500 font-medium">Henüz kimse katılmadı.</p>
                                <p class="text-slate-400 text-sm mt-1">Link paylaşarak arkadaşlarını davet et!</p>
                            </div>
                        @endif
                    </div>
                    
                    {{-- Owner self-participation feature - temporarily disabled
                    <div class="flex justify-center mt-4">
                         <a href="#" class="text-primary hover:underline text-sm font-medium">
                            Kendin de yanıt eklemek ister misin?
                        </a>
                    </div>
                    --}}

                @else
                    <!-- NON-OWNER VIEW -->
                     @if($viewModel->event->status === 'completed' && $viewModel->event->result)
                         @include('events.partials.ai-result-card')
                     @else
                        @include('events.partials.participate-form')
                     @endif
                @endif

            </div>
        </div>
    </div>
</x-layouts.app>
