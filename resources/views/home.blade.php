<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Level up your knowledge for your favorite framework with random documentation discoveries">
    <meta name="keywords"
        content="documentation, framework, knowledge, learning, random, discover, explore, laravel, filamentphp, livewire">

    <!-- Title -->
    <title>DocExplorer - Level up your knowledge for your favorite framework with random documentation discoveries.
    </title>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body
    class="antialiased bg-background text-white font-press-start leading-relaxed h-screen overflow-hidden flex items-center justify-center text-center bg-[radial-gradient(circle_at_25px_25px,rgba(255,255,255,0.15)_2%,transparent_0),radial-gradient(circle_at_75px_75px,rgba(255,255,255,0.15)_2%,transparent_0)] bg-[length:100px_100px] bg-[position:0_0] bg-fixed">
    <div class="max-w-[750px] mx-auto px-6 flex flex-col items-center justify-center min-h-screen">
        <livewire:discover-documentation />
    </div>

    <!-- GitHub Link -->
    <a href="https://github.com/CodeWithDennis/docexplorer" target="_blank" rel="noopener"
        class="fixed bottom-4 right-4 p-2 hover:bg-white/20 transition-all duration-300 [image-rendering:pixelated] [clip-path:polygon(0_10px,10px_0,calc(100%_-_10px)_0,100%_10px,100%_calc(100%_-_10px),calc(100%_-_10px)_100%,10px_100%,0_calc(100%_-_10px))]">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"
            style="image-rendering: pixelated;">
            <path fill-rule="evenodd"
                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                clip-rule="evenodd"></path>
        </svg>
    </a>

    <!-- Scripts -->
    @livewireScripts
</body>

</html>
