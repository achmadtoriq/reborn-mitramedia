<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="title" content="@yield('meta-title')">
        <meta name="description" content="@yield('meta-desc')">

        <title>@yield('title')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body>
        @livewire('components.header')
        {{ $slot }}
    </body>
</html>
