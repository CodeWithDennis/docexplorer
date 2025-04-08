<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Level up your Laravel knowledge with random documentation discoveries">

    <title>DocExplorer</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body
    class="antialiased bg-background text-white font-press-start leading-relaxed h-screen overflow-hidden flex items-center justify-center text-center bg-[radial-gradient(circle_at_25px_25px,rgba(255,255,255,0.15)_2%,transparent_0),radial-gradient(circle_at_75px_75px,rgba(255,255,255,0.15)_2%,transparent_0)] bg-[length:100px_100px] bg-[position:0_0] bg-fixed">
    <div class="max-w-[750px] mx-auto px-6 flex flex-col items-center justify-center min-h-screen">
        <livewire:documentation-links.random />
    </div>

    @livewireScripts
</body>

</html>
