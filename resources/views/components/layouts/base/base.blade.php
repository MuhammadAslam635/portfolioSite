<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') ?? 'Muhammad Aslam - Backend Developer' }}</title>
    <link rel="icon" href="{{ asset('assets/logo.jpeg') }}" sizes="any">
    <link rel="icon" href="{{ asset('assets/logo.jpeg') }}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset('assets/logo.jpeg') }}">
    @vite(["resources/css/base.css","resources/js/app.js"])
  
    @stack('css')
    @fluxAppearance
</head>

<body class="min-h-screen">
    <!-- Theme Transition Overlay -->
    <div class="theme-transition" id="themeTransition"></div>

    <!-- Matrix Background Effect -->
    <div class="matrix-bg" id="matrix-bg"></div>

    <!-- Navigation Component -->
    <x-navigate />
    <x-mobileNavigate />

    <!-- Main Content -->
    <main class="relative z-10">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-footer />

    @stack('js')
    @fluxScripts

    

</body>

</html>