<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="canonical" href="{{ url()->current() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="@yield('meta-title')">
    <meta name="description" content="@yield('meta-desc')">

    <link rel="icon" href="{{ asset('assets/favicon.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico')}}" type="image/x-icon">

    <title>@yield('title')</title>

    <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"></noscript>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js" defer></script>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/tracking-mitra.js'])
    @livewireStyles
    @stack('custom-scripts')
</head>

<body>
    @livewire('components.header')
    {{ $slot }}
    <x-footer/>
</body>

</html>
