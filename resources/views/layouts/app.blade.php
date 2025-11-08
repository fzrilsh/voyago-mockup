<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Title & Description -->
    <title>{{ $title ?? 'Voyago - Discover Amazing Tours & Travel Experiences' }}</title>
    <meta name="description" content="{{ $description ?? 'Book unforgettable tours and travel experiences with Voyago. Explore top destinations, activities, and cultural experiences around the world.' }}">
    <meta name="keywords" content="travel, tours, activities, booking, vacation, adventure, cultural experiences">
    <meta name="author" content="Voyago">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? 'Voyago - Discover Amazing Tours & Travel Experiences' }}">
    <meta property="og:description" content="{{ $description ?? 'Book unforgettable tours and travel experiences with Voyago. Explore top destinations, activities, and cultural experiences around the world.' }}">
    <meta property="og:image" content="{{ $image ?? asset('logo.png') }}">
    <meta property="og:site_name" content="Voyago">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $title ?? 'Voyago - Discover Amazing Tours & Travel Experiences' }}">
    <meta property="twitter:description" content="{{ $description ?? 'Book unforgettable tours and travel experiences with Voyago. Explore top destinations, activities, and cultural experiences around the world.' }}">
    <meta property="twitter:image" content="{{ $image ?? asset('logo.png') }}">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance('light')
</head>
<body class="antialiased bg-white text-zinc-900">
    {{ $slot }}
    
    @fluxScripts
</body>
</html>
