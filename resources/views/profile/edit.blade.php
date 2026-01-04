<x-layouts.app title="Profil">
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6 space-y-12">
            
            <!-- Header -->
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-slate-900">Profil Ayarları</h1>
                    <p class="text-slate-500 mt-2">Hesap bilgilerinizi ve tercihlerinizi yönetin.</p>
                </div>
            </div>

            <div class="space-y-8">
                
                <!-- Profile Info -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 space-y-8">
                    <div class="flex items-center gap-4 mb-6 text-primary">
                        <div class="p-3 bg-primary/10 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-slate-900">Kişisel Bilgiler</h2>
                    </div>
                    @include('profile.partials.update-profile-information-form')
                </div>

                <!-- Password Update -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
                     <div class="flex items-center gap-4 mb-6 text-secondary">
                        <div class="p-3 bg-secondary/10 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-slate-900">Güvenlik</h2>
                    </div>
                    @include('profile.partials.update-password-form')
                </div>

                <!-- Delete Account -->
                <div class="bg-red-50 p-8 rounded-2xl border border-red-100">
                    <div class="flex items-center gap-4 mb-6 text-red-600">
                        <div class="p-3 bg-red-100 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-red-700">Hesabı Sil</h2>
                    </div>
                    @include('profile.partials.delete-user-form')
                </div>

            </div>
        </div>
    </div>
</x-layouts.app>
