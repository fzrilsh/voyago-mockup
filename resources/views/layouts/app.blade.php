<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Voyago - Travel Website' }}</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance('light')
</head>
<body class="antialiased bg-white text-zinc-900">
    {{ $slot }}
    
    @fluxScripts
</body>
</html>
