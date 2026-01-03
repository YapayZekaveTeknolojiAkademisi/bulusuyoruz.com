<div class="glass p-8 rounded-2xl text-center relative overflow-hidden mb-6">
    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-teal-400 to-emerald-500"></div>
    
    <!-- AI RESULT DISPLAY -->
    <div class="w-20 h-20 bg-gradient-to-tr from-emerald-100 to-teal-100 rounded-full flex items-center justify-center mx-auto mb-6 relative shadow-sm">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-10 h-10 text-teal-600">
            <path d="M12 2a3 3 0 0 1 3 3v7a3 3 0 0 1-3 3"/>
            <path d="M19 10v2a7 7 0 0 1-14 0v-2"/>
            <line x1="12" x2="12" y1="19" y2="22"/>
        </svg>
        <div class="absolute -top-1 -right-1 bg-teal-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow-sm">AI</div>
    </div>

    <h1 class="text-3xl font-bold text-slate-800 mb-2">Buluşma Planlandı! ✨</h1>
    <p class="text-slate-500 mb-8 max-w-lg mx-auto">
        Yapay zeka tüm yanıtları analiz etti ve en uygun planı oluşturdu.
    </p>

    <div class="bg-white border border-slate-200 rounded-2xl p-6 text-left shadow-sm mb-6 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-emerald-400 to-teal-500"></div>
        <div class="space-y-6 pl-2">
            <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-teal-50 flex items-center justify-center shrink-0 text-teal-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    </svg>
                </div>
                <div>
                    <p class="text-xs font-bold text-teal-600 uppercase tracking-widest mb-1">Buluşma Yeri</p>
                    <p class="font-bold text-xl text-slate-800">{{ $viewModel->event->result->suggested_location }}</p>
                </div>
            </div>
            
            <div class="w-full h-px bg-slate-100"></div>

            <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-teal-50 flex items-center justify-center shrink-0 text-teal-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <p class="text-xs font-bold text-teal-600 uppercase tracking-widest mb-1">Tarih & Saat</p>
                    <p class="font-bold text-xl text-slate-800">
                        {{ $viewModel->event->result->suggested_date->translatedFormat('d F Y') }} <span class="text-slate-400 font-normal mx-1">|</span> {{ $viewModel->event->result->suggested_time }}
                    </p>
                </div>
            </div>

            <div class="bg-slate-50 rounded-xl p-4 border border-slate-100">
                <div class="flex items-center gap-2 mb-2 text-slate-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                    <span class="text-xs font-bold uppercase tracking-wide">AI Açıklaması</span>
                </div>
                <p class="text-sm text-slate-600 italic leading-relaxed">"{{ $viewModel->event->result->reasoning }}"</p>
            </div>
        </div>
    </div>
</div>
