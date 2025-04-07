<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Explorer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/retro.css') }}">
</head>

<body class="antialiased">
    <div class="container">
        <div class="float-animation">
            <h1 class="retro-title">LARAVEL</h1>
            <h2 class="retro-subtitle">DOCEXPLORER</h2>
            <p class="retro-text">Level up your Laravel knowledge with random documentation discoveries!</p>
        </div>
        <div class="game-card pixel-corners">
            <div class="p-6">
                <livewire:documentation-links.random />
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>
