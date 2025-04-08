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
        <div class="animate-float flex flex-col items-center justify-center w-full">
            <h1
                class="text-[2.3rem] mb-[6px] bg-gradient-to-r from-red-500 to-red-600 bg-clip-text text-transparent font-bold leading-tight w-full">
                LARAVEL
            </h1>
            <h2 class="text-[1rem] mb-[18px] bg-white bg-clip-text text-transparent font-bold w-full">
                DOCEXPLORER
            </h2>
            <p class="text-[0.85rem] mb-[28px] text-gray-400 leading-[1.8] w-full">
                Level up your Laravel knowledge with random documentation discoveries!
            </p>
        </div>

        <livewire:documentation-links.random />
    </div>

    @livewireScripts
</body>

</html>
