<x-layouts.app title="Buluşuyoruz - Topluluklar Kolayca Buluşsun">

    <!-- Hero Section -->
    <section class="min-h-[70vh] flex flex-col items-center justify-center text-center relative max-w-4xl mx-auto">
        
        <!-- Abstract Decoration -->
        <div class="absolute inset-0 pointer-events-none opacity-30">
            <svg class="w-full h-full" viewBox="0 0 800 600" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="100" cy="100" r="40" fill="#2563EB" fill-opacity="0.1" />
                <circle cx="700" cy="500" r="60" fill="#22C55E" fill-opacity="0.1" />
                <path d="M600 100 Q 400 300 200 100" stroke="#F59E0B" stroke-width="2" stroke-dasharray="10 10" stroke-opacity="0.2" fill="none"/>
            </svg>
        </div>

        <div class="space-y-6 animate-[fadeInUp_0.8s_ease-out_forwards]">
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight leading-[1.1] text-slate-900">
                Topluluklar <br/>
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary">
                    Kolayca Buluşsun
                </span>
            </h1>

            <p class="text-lg md:text-xl text-slate-500 font-medium max-w-xl mx-auto leading-relaxed">
                Karmaşık formlar yok. Gereksiz detaylar yok. <br class="hidden md:block"/> Sadece toplanın, planlayın ve buluşun.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center pt-8">
                <a href="{{ route('events.create') }}" class="btn-primary">
                    Etkinlik Oluştur
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                </a>
                <a href="#nasil-calisir" class="btn-secondary">
                    Nasıl Çalışır?
                </a>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-24" id="nasil-calisir">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-4">Nasıl Çalışır?</h2>
            <p class="text-lg text-slate-500 max-w-2xl mx-auto">Üç basit adımda toplulukları bir araya getirin</p>
        </div>

        <div class="space-y-24">
            
            <!-- Step 1: Create Event -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg">1</span>
                        <h3 class="text-2xl md:text-3xl font-bold text-slate-900">Etkinlik Oluşturun</h3>
                    </div>
                    <p class="text-slate-500 text-lg leading-relaxed mb-6">
                        Etkinliğinize bir isim verin, tarih aralığı belirleyin ve konum modunu seçin. 
                        Katılımcılarınız için özel bir link otomatik olarak oluşturulacak.
                    </p>
                    <ul class="space-y-3 text-slate-600">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Sade ve hızlı form
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Paylaşılabilir benzersiz link
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Esnek tarih aralığı seçimi
                        </li>
                    </ul>
                </div>
                <div class="order-1 lg:order-2">
                    <!-- Event Creation Form Mockup -->
                    <div class="glass rounded-2xl p-8 shadow-xl relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-primary to-secondary"></div>
                        <h4 class="text-lg font-bold text-slate-800 mb-6 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                            Yeni Etkinlik
                        </h4>
                        <div class="space-y-4">
                            <div>
                                <label class="text-sm font-medium text-slate-600 mb-1 block">Etkinlik Adı</label>
                                <div class="input-field bg-white/50">Haftalık Kahvaltı Buluşması</div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="text-sm font-medium text-slate-600 mb-1 block">Başlangıç</label>
                                    <div class="input-field bg-white/50 text-sm">10 Ocak 2026</div>
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-slate-600 mb-1 block">Bitiş</label>
                                    <div class="input-field bg-white/50 text-sm">20 Ocak 2026</div>
                                </div>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-slate-600 mb-1 block">Konum Modu</label>
                                <div class="flex gap-2">
                                    <span class="px-4 py-2 rounded-lg bg-primary text-white text-sm font-medium">Ortak Konum Bul</span>
                                    <span class="px-4 py-2 rounded-lg bg-slate-100 text-slate-600 text-sm font-medium">Yer Öner</span>
                                </div>
                            </div>
                            <div class="pt-2">
                                <div class="btn-primary w-full justify-center pointer-events-none">Etkinlik Oluştur</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2: Collect Responses -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-10 h-10 rounded-full bg-secondary text-white flex items-center justify-center font-bold text-lg">2</span>
                        <h3 class="text-2xl md:text-3xl font-bold text-slate-900">Cevapları Kabul Edin</h3>
                    </div>
                    <p class="text-slate-500 text-lg leading-relaxed mb-6">
                        Etkinlik linkini paylaşın. Katılımcılar konumlarını, uygun tarihlerini ve saat aralıklarını seçsin.
                        Tüm tercihler otomatik olarak toplanır.
                    </p>
                    <ul class="space-y-3 text-slate-600">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            İl/İlçe bazlı konum seçimi
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Çoklu tarih ve saat seçimi
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Gerçek zamanlı katılımcı takibi
                        </li>
                    </ul>
                </div>
                <div class="order-1">
                    <!-- Response Form Mockup -->
                    <div class="glass rounded-2xl p-8 shadow-xl">
                        <h4 class="text-lg font-bold text-slate-800 mb-6">Nerede Yaşıyorsun?</h4>
                        <div class="space-y-4">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="text-sm font-medium text-slate-600 mb-1 block">İl</label>
                                    <div class="input-field bg-white/50">İstanbul</div>
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-slate-600 mb-1 block">İlçe</label>
                                    <div class="input-field bg-white/50">Kadıköy</div>
                                </div>
                            </div>
                            
                            <div>
                                <label class="text-sm font-medium text-slate-600 mb-2 block">Uygun Tarihler</label>
                                <div class="flex flex-wrap gap-2">
                                    <span class="w-12 h-14 rounded-xl bg-secondary text-white flex flex-col items-center justify-center text-sm font-bold">
                                        <span class="text-[10px] opacity-70">Oca</span>
                                        <span>10</span>
                                    </span>
                                    <span class="w-12 h-14 rounded-xl bg-slate-100 text-slate-600 flex flex-col items-center justify-center text-sm font-bold">
                                        <span class="text-[10px] opacity-70">Oca</span>
                                        <span>11</span>
                                    </span>
                                    <span class="w-12 h-14 rounded-xl bg-secondary text-white flex flex-col items-center justify-center text-sm font-bold">
                                        <span class="text-[10px] opacity-70">Oca</span>
                                        <span>12</span>
                                    </span>
                                    <span class="w-12 h-14 rounded-xl bg-slate-100 text-slate-600 flex flex-col items-center justify-center text-sm font-bold">
                                        <span class="text-[10px] opacity-70">Oca</span>
                                        <span>13</span>
                                    </span>
                                    <span class="w-12 h-14 rounded-xl bg-secondary text-white flex flex-col items-center justify-center text-sm font-bold">
                                        <span class="text-[10px] opacity-70">Oca</span>
                                        <span>14</span>
                                    </span>
                                </div>
                            </div>
                            
                            <div>
                                <label class="text-sm font-medium text-slate-600 mb-2 block">Uygun Saatler</label>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-2 rounded-lg bg-primary text-white text-sm font-medium">12:00</span>
                                    <span class="px-3 py-2 rounded-lg bg-primary text-white text-sm font-medium">13:00</span>
                                    <span class="px-3 py-2 rounded-lg bg-slate-100 text-slate-600 text-sm font-medium">14:00</span>
                                    <span class="px-3 py-2 rounded-lg bg-primary text-white text-sm font-medium">15:00</span>
                                    <span class="px-3 py-2 rounded-lg bg-slate-100 text-slate-600 text-sm font-medium">16:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3: AI Decision -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-10 h-10 rounded-full bg-gradient-to-r from-teal-500 to-emerald-500 text-white flex items-center justify-center font-bold text-lg">3</span>
                        <h3 class="text-2xl md:text-3xl font-bold text-slate-900">AI ile Buluşma Planı</h3>
                    </div>
                    <p class="text-slate-500 text-lg leading-relaxed mb-6">
                        Yapay zeka tüm katılımcıların tercihlerini analiz eder. Ulaşım mesafelerini, 
                        kesişen tarihleri ve saatleri hesaplayarak en optimal buluşma planını önerir.
                    </p>
                    <ul class="space-y-3 text-slate-600">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Gemini AI destekli analiz
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Ulaşım mesafesi optimizasyonu
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Detaylı açıklama ve mantık
                        </li>
                    </ul>
                </div>
                <div class="order-1 lg:order-2">
                    <!-- AI Result Card Mockup -->
                    <div class="glass rounded-2xl overflow-hidden shadow-xl">
                        <div class="bg-gradient-to-r from-teal-500 to-emerald-500 p-6 text-white text-center">
                            <div class="flex items-center justify-center gap-2 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                                    <path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"/>
                                    <path d="M19 10v2a7 7 0 0 1-14 0v-2"/>
                                    <line x1="12" x2="12" y1="19" y2="22"/>
                                </svg>
                                <span class="font-bold">Yapay Zeka Önerisi</span>
                            </div>
                            <h4 class="text-2xl font-extrabold">Buluşma Planlandı! ✨</h4>
                        </div>
                        <div class="p-6 space-y-4">
                            <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-xl">
                                <div class="w-12 h-12 rounded-full bg-teal-100 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs text-slate-400 font-bold uppercase">Konum</p>
                                    <p class="text-lg font-bold text-slate-800">Kadıköy</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="p-4 bg-slate-50 rounded-xl">
                                    <p class="text-xs text-slate-400 font-bold uppercase">Tarih</p>
                                    <p class="text-lg font-bold text-slate-800">12 Ocak 2026</p>
                                </div>
                                <div class="p-4 bg-slate-50 rounded-xl">
                                    <p class="text-xs text-slate-400 font-bold uppercase">Saat</p>
                                    <p class="text-lg font-bold text-slate-800">13:00</p>
                                </div>
                            </div>
                            <div class="p-4 bg-gradient-to-r from-teal-50 to-emerald-50 rounded-xl border border-teal-100">
                                <p class="text-sm text-slate-600 italic">"Kadıköy, tüm katılımcılar için metro ve vapurla kolayca ulaşılabilir. 12 Ocak tüm katılımcıların ortak müsait olduğu gün, 13:00 ise en çok tercih edilen saat."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- CTA Card -->
        <div class="mt-24">
            <div class="glass rounded-3xl p-8 md:p-12 relative overflow-hidden">
                <!-- Background decoration -->
                <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-secondary/5"></div>
                <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-primary/10 to-transparent rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-gradient-to-tr from-secondary/10 to-transparent rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
                
                <div class="relative grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <!-- Left: Text Content -->
                    <div class="text-center lg:text-left">
                        <h3 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                            Karmaşık Planlamalara Son!
                        </h3>
                        <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                            WhatsApp gruplarında saatlerce yer-zaman tartışmak yerine, 
                            <span class="font-bold text-primary">yapay zeka</span> sizin için en optimal buluşma planını oluştursun.
                        </p>
                        <ul class="space-y-3 text-slate-600 mb-8">
                            <li class="flex items-center gap-3 justify-center lg:justify-start">
                                <span class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                <span>30 saniyede etkinlik oluştur</span>
                            </li>
                            <li class="flex items-center gap-3 justify-center lg:justify-start">
                                <span class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                <span>Herkesin tercihini tek linkte topla</span>
                            </li>
                            <li class="flex items-center gap-3 justify-center lg:justify-start">
                                <span class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                <span>AI ile en iyi yeri ve zamanı bul</span>
                            </li>
                        </ul>
                        <a href="{{ route('events.create') }}" class="btn-primary text-lg px-8 py-4 inline-flex shadow-xl shadow-primary/30 hover:shadow-primary/50 transition-shadow">
                            Ücretsiz Etkinlik Oluştur
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    </div>
                    
                    <!-- Right: Stats/Social Proof -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="glass p-6 rounded-2xl text-center bg-white/60">
                            <div class="text-4xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary mb-2">🎯</div>
                            <p class="text-2xl font-bold text-slate-800">%95</p>
                            <p class="text-sm text-slate-500">Daha Hızlı Planlama</p>
                        </div>
                        <div class="glass p-6 rounded-2xl text-center bg-white/60">
                            <div class="text-4xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary mb-2">🤖</div>
                            <p class="text-2xl font-bold text-slate-800">Gemini AI</p>
                            <p class="text-sm text-slate-500">Akıllı Analiz</p>
                        </div>
                        <div class="glass p-6 rounded-2xl text-center bg-white/60">
                            <div class="text-4xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary mb-2">📍</div>
                            <p class="text-2xl font-bold text-slate-800">81 İl</p>
                            <p class="text-sm text-slate-500">Konum Desteği</p>
                        </div>
                        <div class="glass p-6 rounded-2xl text-center bg-white/60">
                            <div class="text-4xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary mb-2">⚡</div>
                            <p class="text-2xl font-bold text-slate-800">Anında</p>
                            <p class="text-sm text-slate-500">Sonuç Al</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
