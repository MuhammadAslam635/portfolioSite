<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') ?? 'Muhammad Aslam - Backend Developer' }}</title>
    <link rel="icon" href="{{ asset('assets/logo.png') }}" sizes="any">
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset('assets/logo.png') }}">
    @vite(["resources/css/base.css","resources/js/app.js"])
    @fluxAppearance
</head>

<body class="overflow-hidden">
    <!-- Theme Transition Overlay -->
    <div class="theme-transition" id="themeTransition"></div>

    <!-- Matrix Background Effect -->
    <div class="matrix-bg" id="matrix-bg"></div>

    <x-navigate />

    <x-mobileNavigate />

    {{ $slot }}
    <!-- Footer -->
    <x-footer />

    @stack('js')
    @fluxScripts

</body>

</html>
