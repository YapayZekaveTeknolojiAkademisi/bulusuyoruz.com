<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
        <meta name="apple-mobile-web-app-title" content="Bulşuyoruz" />
        <link rel="manifest" href="/site.webmanifest" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased h-screen flex flex-col justify-center items-center relative overflow-hidden bg-slate-50">
        
        <!-- Decorative Gradient Background -->
        <div class="absolute inset-0 z-[-1] overflow-hidden pointer-events-none">
            <div class="absolute top-[-20%] left-[-20%] w-[70%] h-[70%] bg-blue-100 rounded-full blur-[100px] opacity-60"></div>
            <div class="absolute bottom-[-20%] right-[-20%] w-[70%] h-[70%] bg-green-100 rounded-full blur-[100px] opacity-60"></div>
        </div>

        <div class="w-full sm:max-w-md px-6 py-4">
            <div class="flex flex-col items-center mb-6">
                <a href="/" class="text-3xl font-extrabold tracking-tight text-slate-900 group">
                    <span class="text-primary group-hover:opacity-80 transition-opacity">Buluş</span>uyoruz.
                </a>
            </div>

            <div class="glass px-10 py-12 rounded-2xl shadow-2xl border-white/40">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
