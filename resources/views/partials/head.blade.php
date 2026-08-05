@props([
    'title' => config('app.name', 'Laravel'),
    'description' => 'Deskripsi default aplikasi Anda.',
    'keywords' => 'laravel, web application, seo',
    'robots' => 'index, follow',
    'image' => asset('images/default-og.jpg'),
])

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Basic SEO --}}
    <title>{{ $title }} | {{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="robots" content="{{ $robots }}">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:image" content="{{ $image }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="{{ $image }}">

    {{-- Default Organization Schema (Global) --}}
    <x-json-ld :data="[
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => config('app.name'),
        'url' => url('/'),
        'logo' => asset('images/logo.png'),
    ]" />

    {{-- Stack untuk Schema Dinamis per Halaman --}}
    @stack('schema')

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    {{-- Assets (Vite) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Additional Head Scripts/Styles --}}
    {{ $head ?? '' }}

    @livewireStyles
</head>
