<x-layouts.app title="Buluşuyoruz - Topluluklar Kolayca Buluşsun" full-width="true">

    <!-- Hero Section -->
    <section class="min-h-[70vh] flex flex-col items-center justify-center text-center relative max-w-4xl mx-auto px-6">
        
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
    <section class="py-24 max-w-7xl mx-auto px-6" id="nasil-calisir">
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

    </section>

    <!-- SEO Section 1: AI Capabilities -->
    <section class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-0 right-0 w-96 h-96 bg-primary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-secondary/5 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 relative">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6">
                    AI Destekli Etkinlik Planlama
                </h2>
                <p class="text-lg text-slate-600 leading-relaxed mb-8">
                    Buluşuyoruz, sıradan bir <strong>etkinlik planlama uygulaması</strong> değildir. Gelişmiş <strong>yapay zeka etkinlik takvimi</strong> özelliklerimiz sayesinde, grubunuz için en ideal zamanı ve mekanı saniyeler içinde belirleriz.
                    <strong>AI ile buluşma planlama</strong> süreci, tüm katılımcıların uygunluk durumunu analiz eder ve herkesi mutlu edecek ortak noktayı bulur.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                        <div class="text-primary mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-slate-900 mb-2">Akıllı Analiz</h3>
                        <p class="text-sm text-slate-500">
                            <strong>Yapay zeka ile etkinlik tarihi belirleme</strong> algoritmamız, yüzlerce olasılığı değerlendirir.
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                        <div class="text-secondary mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-slate-900 mb-2">Konum Önerisi</h3>
                        <p class="text-sm text-slate-500">
                            Trafik, mesafe ve ulaşım kolaylığını hesaplayan <strong>topluluk buluşma yer önerisi</strong> sistemimiz devrede.
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                        <div class="text-purple-500 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-slate-900 mb-2">Zaman Tasarrufu</h3>
                        <p class="text-sm text-slate-500">
                            <strong>En iyi buluşma saatini AI ile bul</strong>, tartışma ve kararsızlığı ortadan kaldır.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SEO Section 2: For Communities -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary/20 to-secondary/20 rounded-[2rem] transform rotate-3 scale-105 blur-xl"></div>
                    <div class="relative bg-slate-900 rounded-[2rem] p-8 md:p-12 text-white overflow-hidden">
                        <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-primary rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
                        <div class="absolute bottom-0 left-0 -ml-16 -mb-16 w-64 h-64 bg-secondary rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
                        <h3 class="text-2xl font-bold mb-6">Topluluk Liderleri İçin</h3>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3">
                                <span class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center">✓</span>
                                <span>Hızlı etkinlik oluşturma</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center">✓</span>
                                <span>Sınırsız katılımcı desteği</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center">✓</span>
                                <span>Detaylı katılım raporları</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6">
                        Topluluklar İçin Neden Buluşuyoruz?
                    </h2>
                    <p class="text-lg text-slate-600 mb-6">
                        Modern bir <strong>topluluk buluşma platformu</strong> olarak, liderlerin yükünü hafifletiyoruz. İster profesyonel bir network, ister hobi grubu olun, <strong>topluluk etkinliği oluştur</strong> süreci hiç bu kadar akıcı olmamıştı.
                    </p>
                    <p class="text-lg text-slate-600 mb-8">
                        <strong>Çevrimiçi etkinlik planlama</strong> araçlarının karmaşıklığından uzak, sonuca odaklı arayüzümüzle tanışın. 
                        <strong>AI ile grup etkinliği yönetimi</strong>, katılımcılarınızın memnuniyetini artırırken sizin operasyonel yükünüzü sıfıra indirir.
                    </p>
                    <a href="{{ route('events.create') }}" class="text-primary font-bold hover:text-primary-dark inline-flex items-center gap-2 group">
                        Topluluğunuzu Bir Araya Getirin
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SEO Section 3: Availability Analysis -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    En Uygun Tarihi ve Saati Otomatik Bul
                </h2>
                <p class="text-lg text-slate-600">
                    Artık "Hangi gün buluşalım?" sorularına son. <strong>Çoğunlukla uygun tarih bulma tool</strong> özelliklerimizle anında karar verin.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Katılımcı Uygunluk Analizi</h3>
                    <p class="text-slate-600">
                        Her bir üyenizin müsaitlik durumunu detaylıca işleriz. <strong>Katılımcı uygun tarih analizi</strong> raporlarımız size en yüksek katılımı garanti eder.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">En İyi Buluşma Saati</h3>
                    <p class="text-slate-600">
                        Sabah kahvaltısı mı, akşam yemeği mi? <strong>En iyi buluşma saati belirleme</strong> modülümüz, grubunuzun ritmine en uygun saati önerir.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Grup Etkinliği Seçimi</h3>
                    <p class="text-slate-600">
                        <strong>Grup etkinliği tarih seçimi</strong> artık bir kriz değil, keyifli bir süreç. Tek link paylaşın, gerisini bize bırakın.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SEO Section 4: Location & Problem Solving -->
    <section class="py-24 bg-white relative">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-6">
                Konum ve Zaman Karmaşasına Son
            </h2>
            <p class="text-lg text-slate-600 mb-12">
                "Nerede buluşalım?" sorusu tarihe karışıyor. <strong>Kolay topluluk etkinlik planlama aracı</strong> olarak, 
                şehrinizdeki en popüler ve ulaşılabilir noktaları analiz ediyoruz. Katılımcılarınızın konumlarına göre orta noktayı buluyor,
                trafik ve ulaşım verilerini kullanarak en mantıklı <strong>topluluk buluşma yer önerisi</strong>ni sunuyoruz.
            </p>
            
            <div class="glass p-8 rounded-3xl border border-slate-200 bg-slate-50/50">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div>
                        <div class="text-3xl font-extrabold text-primary mb-2">81</div>
                        <div class="text-sm font-bold text-slate-500 uppercase tracking-wider">İl Desteği</div>
                    </div>
                    <div>
                        <div class="text-3xl font-extrabold text-secondary mb-2">∞</div>
                        <div class="text-sm font-bold text-slate-500 uppercase tracking-wider">Sınırsız Plan</div>
                    </div>
                    <div>
                        <div class="text-3xl font-extrabold text-primary mb-2">100%</div>
                        <div class="text-sm font-bold text-slate-500 uppercase tracking-wider">Ücretsiz</div>
                    </div>
                    <div>
                        <div class="text-3xl font-extrabold text-secondary mb-2">7/24</div>
                        <div class="text-sm font-bold text-slate-500 uppercase tracking-wider">AI Aktif</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </section>

    <!-- SEO Section 5: FAQ Section -->
    <section class="py-24 bg-slate-50 border-t border-slate-200">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4">
                    Sıkça Sorulan Sorular
                </h2>
                <p class="text-lg text-slate-600">
                    Buluşuyoruz platformu hakkında merak ettiğiniz detaylar ve etkinlik planlama ipuçları.
                </p>
            </div>

            <div class="space-y-4" x-data="{ active: null }">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                    <button @click="active === 1 ? active = null : active = 1" class="w-full flex items-center justify-between p-6 text-left focus:outline-none bg-white hover:bg-slate-50 transition-colors">
                        <h3 class="text-lg font-bold text-slate-900 flex items-center gap-3">
                            <span class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center text-sm flex-shrink-0">1</span>
                            Buluşuyoruz ile Nasıl Etkinlik Oluşturulur?
                        </h3>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-slate-400 transform transition-transform duration-300" :class="active === 1 ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="active === 1" x-collapse>
                        <div class="px-6 pb-6 pt-0 space-y-4 text-slate-600 leading-relaxed text-sm md:text-base border-t border-slate-50 mt-2">
                            <p>
                                Buluşuyoruz platformunda <strong>etkinlik oluşturmak</strong> son derece basittir ve üyelik gerektirmez. Ana sayfadaki "Etkinlik Oluştur" butonuna tıklayarak süreci başlatabilirsiniz. İlk adımda etkinliğinize akılda kalıcı bir isim verin ve açıklama ekleyin. Ardından, katılımcıların seçmesi için uygun bir tarih aralığı belirleyin. Örneğin, "gelecek hafta sonu" veya "önümüzdeki 15 gün" gibi geniş aralıklar, herkesin ortak bir gün bulma şansını artırır.
                            </p>
                            <p>
                                Konum belirleme aşamasında iki farklı mod sunuyoruz: <strong>"Ortak Konum Bul"</strong> modu, katılımcıların yaşadıkları ilçeleri girmesini ister ve sistem herkesin orta noktasını hesaplar. <strong>"Yer Öner"</strong> modu ise etkinliğin yapılacağı ilçeyi sizin seçmenize olanak tanır.
                            </p>
                            <p>
                                Son olarak, oluşturduğunuz etkinlik için size özel bir link üretilir. Bu linki WhatsApp, Telegram veya E-posta yoluyla arkadaşlarınızla, iş arkadaşlarınızla veya topluluk üyelerinizle paylaşın. Herkesin hesabı olması gerekmez; linke tıklayan herkes saniyeler içinde ankete katılabilir.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                    <button @click="active === 2 ? active = null : active = 2" class="w-full flex items-center justify-between p-6 text-left focus:outline-none bg-white hover:bg-slate-50 transition-colors">
                        <h3 class="text-lg font-bold text-slate-900 flex items-center gap-3">
                            <span class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center text-sm flex-shrink-0">2</span>
                            Katılımcılar Nasıl Cevap Gönderir?
                        </h3>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-slate-400 transform transition-transform duration-300" :class="active === 2 ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="active === 2" x-collapse>
                        <div class="px-6 pb-6 pt-0 space-y-4 text-slate-600 leading-relaxed text-sm md:text-base border-t border-slate-50 mt-2">
                            <p>
                                Katılımcılarınız, onlarla paylaştığınız etkinlik linkine tıkladıklarında, mobil uyumlu ve kullanıcı dostu bir arayüzle karşılaşırlar. İlk ekranda isimlerini (veya takma adlarını) girerek işleme başlarlar. Herhangi bir şifre veya kayıt işlemi gerekmediği için katılım oranları oldukça yüksektir.
                            </p>
                            <p>
                                Daha sonra, bulundukları ili ve ilçeyi seçerler. Bu veri, yapay zeka tarafından <strong>en uygun buluşma yerini</strong> hesaplamak için kullanılır. Konum bilgisinin ardından, etkinlik sahibi tarafından belirlenen tarih aralığı içindeki günleri görürler. Takvim üzerinde kendilerine uygun olan günleri işaretleyebilirler.
                            </p>
                            <p>
                                Zaman seçimi adımında ise, seçilen günler için spesifik saat aralıklarını (Örn: 19:00 - 22:00) belirtebilirler. İşlem tamamlandığında, yanıtları anlık olarak sisteme işlenir ve etkinlik sahibinin panelinde görünür hale gelir. Katılımcılar istedikleri zaman linke tekrar girerek tercihlerini güncelleyebilirler.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                    <button @click="active === 3 ? active = null : active = 3" class="w-full flex items-center justify-between p-6 text-left focus:outline-none bg-white hover:bg-slate-50 transition-colors">
                        <h3 class="text-lg font-bold text-slate-900 flex items-center gap-3">
                            <span class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center text-sm flex-shrink-0">3</span>
                            Planlama ve Sonuçlandırma Nasıl Yapılır?
                        </h3>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-slate-400 transform transition-transform duration-300" :class="active === 3 ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="active === 3" x-collapse>
                        <div class="px-6 pb-6 pt-0 space-y-4 text-slate-600 leading-relaxed text-sm md:text-base border-t border-slate-50 mt-2">
                            <p>
                                Etkinlik sahibi olarak, dashboard (yönetim paneli) üzerinden tüm katılımcıların yanıtlarını gerçek zamanlı olarak takip edebilirsiniz. Kimlerin cevap verdiği, hangi günlerin popüler olduğu ve katılımcıların lokasyon dağılımı grafiklerle sunulur. Yeterli sayıda katılımcı yanıt verdiğinde, <strong>"AI ile Analiz Et"</strong> butonunu kullanarak yapay zekayı devreye sokabilirsiniz.
                            </p>
                            <p>
                                Gemini AI teknolojimiz, tüm verileri saniyeler içinde işler. Katılımcıların maksimum sayıda uygun olduğu (kesişim kümesi en büyük olan) günü ve saati belirler. Ayrıca, herkesin ulaşım mesafesini optimize ederek en merkezi ve popüler semti (Örn: Kadıköy, Beşiktaş, Kızılay) önerir.
                            </p>
                            <p>
                                AI'nın önerisini inceledikten sonra etkinliği "Kesinleştir" butonuna basarak tamamlayabilirsiniz. Kesinleşen etkinlik bilgileri (Tarih, Saat, Konum) etkinlik sayfasına sabitlenir ve linke tıklayan herkes artık planın son halini görür. Böylece yüzlerce mesajlaşma trafiğine girmeden demokratik ve akıllı bir planlama yapılmış olur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SEO Section 6: New CTA Section -->
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-slate-900">
            <div class="absolute inset-0 bg-gradient-to-br from-primary/20 to-secondary/20 opacity-30"></div>
        </div>
        <div class="max-w-5xl mx-auto px-4 relative z-10 text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6">
                Ücretsiz ve Kolay Etkinlik Oluştur
            </h2>
            <p class="text-xl text-slate-300 max-w-2xl mx-auto mb-10 leading-relaxed">
                Hemen şimdi <strong>ücretsiz etkinlik oluşturma linki</strong> alın ve topluluğunuzu organize etmeye başlayın.
                Türkiye'nin en gelişmiş <strong>kolay topluluk etkinlik planlama aracı</strong> sizi bekliyor.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('events.create') }}" class="px-8 py-4 bg-white text-slate-900 rounded-xl font-bold text-lg hover:bg-slate-50 transition-colors shadow-lg shadow-white/10 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Hemen Etkinlik Oluştur
                </a>
                <span class="text-slate-400 text-sm font-medium px-4">Kredi kartı gerekmez. Üyelik zorunlu değil.</span>
            </div>
        </div>
    </section>

</x-layouts.app>
