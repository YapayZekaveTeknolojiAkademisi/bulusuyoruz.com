<header class="w-full flex items-center justify-between px-6 py-6 md:px-12 max-w-7xl mx-auto z-50 relative" x-data="{ mobileOpen: false, profileOpen: false }">
    <!-- Logo -->
    <a href="/" class="text-2xl font-bold tracking-tight text-slate-900 group">
        <span class="text-primary group-hover:opacity-80 transition-opacity">{{ config('app.name', 'Buluşuyoruz') }}</span>
    </a>
    
    <!-- Desktop Navigation -->
    <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-600">
        <a href="{{ route('events.create') }}" class="hover:text-primary transition-colors">Etkinlik Oluştur</a>
        <a href="{{ url('/') }}#nasil-calisir" class="hover:text-primary transition-colors">Nasıl Çalışır?</a>

        @auth
            <!-- User Dropdown -->
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" @click.outside="open = false" class="flex items-center gap-2 hover:text-slate-900 transition-colors focus:outline-none">
                    <span>{{ Auth::user()->name }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 transition-transform duration-200" :class="{'rotate-180': open}">
                        <path d="m6 9 6 6 6-6"/>
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <div x-show="open" 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="absolute right-0 mt-2 w-48 bg-white/80 backdrop-blur-md border border-white/40 rounded-xl shadow-lg py-1 z-50 origin-top-right"
                     style="display: none;">
                    
                    <div class="px-4 py-3 border-b border-gray-100">
                        <p class="text-sm font-semibold text-slate-900">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-slate-500 truncate">{{ Auth::user()->email }}</p>
                    </div>

                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-primary transition-colors">
                        Dashboard
                    </a>
                    <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-primary transition-colors">
                        Profil
                    </a>

                    <form method="POST" action="{{ route('logout') }}" class="border-t border-gray-100">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors">
                            Çıkış Yap
                        </button>
                    </form>
                </div>
            </div>
        @else
            <!-- Guest Actions -->
            <div class="flex items-center gap-4">
                <a href="{{ route('login') }}" class="text-slate-600 hover:text-primary transition-colors">Giriş Yap</a>
                <a href="{{ route('register') }}" class="btn-primary py-2 px-4 shadow-none">Kayıt Ol</a>
            </div>
        @endauth
    </nav>

    <!-- Mobile Menu Button (Hamburger) -->
    <div class="md:hidden flex items-center gap-4">
        @auth
           <!-- Mobile Profile Button with Dropdown -->
           <div class="relative">
               <button @click="profileOpen = !profileOpen" class="w-8 h-8 bg-blue-100 text-primary rounded-full flex items-center justify-center font-bold text-xs focus:outline-none">
                    {{ substr(Auth::user()->name, 0, 1) }}
               </button>
               
               <!-- Mobile Profile Dropdown -->
               <div x-show="profileOpen" 
                    @click.outside="profileOpen = false"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute right-0 mt-2 w-48 bg-white border border-gray-100 rounded-xl shadow-lg py-1 z-50"
                    style="display: none;">
                    
                    <div class="px-4 py-3 border-b border-gray-100">
                        <p class="text-sm font-semibold text-slate-900">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-slate-500 truncate">{{ Auth::user()->email }}</p>
                    </div>

                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
                        Dashboard
                    </a>
                    <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
                        Profil
                    </a>

                    <form method="POST" action="{{ route('logout') }}" class="border-t border-gray-100">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                            Çıkış Yap
                        </button>
                    </form>
                </div>
           </div>
        @else
            <a href="{{ route('login') }}" class="text-sm font-medium text-primary">Giriş</a>
        @endauth

        <!-- Mobile Menu Trigger -->
        <button @click="mobileOpen = !mobileOpen" class="text-slate-600 hover:text-slate-900 focus:outline-none">
            <svg x-show="!mobileOpen" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="4" x2="20" y1="12" y2="12"/>
                <line x1="4" x2="20" y1="6" y2="6"/>
                <line x1="4" x2="20" y1="18" y2="18"/>
            </svg>
            <svg x-show="mobileOpen" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;">
                <line x1="18" x2="6" y1="6" y2="18"/>
                <line x1="6" x2="18" y1="6" y2="18"/>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu Panel -->
    <div x-show="mobileOpen" 
         @click.outside="mobileOpen = false"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="absolute top-full left-0 right-0 bg-white border-t border-gray-100 shadow-lg md:hidden z-50"
         style="display: none;">
        <nav class="flex flex-col p-4 space-y-2">
            <a href="{{ route('events.create') }}" class="px-4 py-3 text-slate-700 hover:bg-slate-50 rounded-lg font-medium">
                Etkinlik Oluştur
            </a>
            <a href="{{ url('/') }}#nasil-calisir" class="px-4 py-3 text-slate-700 hover:bg-slate-50 rounded-lg font-medium">
                Nasıl Çalışır?
            </a>
            @guest
                <div class="pt-2 border-t border-gray-100 mt-2">
                    <a href="{{ route('login') }}" class="block px-4 py-3 text-slate-700 hover:bg-slate-50 rounded-lg font-medium">
                        Giriş Yap
                    </a>
                    <a href="{{ route('register') }}" class="block px-4 py-3 text-primary hover:bg-blue-50 rounded-lg font-medium">
                        Kayıt Ol
                    </a>
                </div>
            @endguest
        </nav>
    </div>
</header>
