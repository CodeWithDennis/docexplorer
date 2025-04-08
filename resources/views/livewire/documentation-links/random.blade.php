<div class="max-w-[550px] w-full mx-auto">
    <div
        class="w-full transition-all duration-300 border-4 border-[#ff2d20] bg-[#16213e] mb-9 flex flex-col items-center justify-center [clip-path:polygon(0_10px,10px_0,calc(100%_-_10px)_0,100%_10px,100%_calc(100%_-_10px),calc(100%_-_10px)_100%,10px_100%,0_calc(100%_-_10px))]">
        <div class="p-6 flex flex-col items-center justify-center w-full">
            <div class="flex justify-between w-full mb-4">
                <div class="text-left">
                    <p class="text-[0.65rem] text-gray-400 mb-1">STREAK</p>
                    <p class="text-[1.25rem] text-[#ff2d20] font-bold">{{ $streak }}</p>
                </div>
                <div class="text-right">
                    <p class="text-[0.65rem] text-gray-400 mb-1">HIGH SCORE</p>
                    <p class="text-[1.25rem] text-[#ff2d20] font-bold">{{ $highScore }}</p>
                </div>
            </div>
            <div class="flex w-full gap-2 mb-4">
                <button wire:click="getRandomLink"
                    class="inline-block flex-1 py-[16px] px-4 bg-gradient-to-r from-[#ff2d20] to-[#ff2d20] text-white font-press-start text-[0.65rem] uppercase tracking-[1px] font-bold text-center shadow-[0_4px_6px_rgba(255,45,32,0.2)] transition-all duration-300 ease-in-out cursor-pointer select-none [clip-path:polygon(0_10px,10px_0,calc(100%_-_10px)_0,100%_10px,100%_calc(100%_-_10px),calc(100%_-_10px)_100%,10px_100%,0_calc(100%_-_10px))]">
                    Discover
                </button>
                <button wire:click="resetHighScore"
                    class="inline-block py-[16px] px-2 bg-transparent border border-[#ff2d20] text-[#ff2d20] font-press-start text-[0.55rem] uppercase tracking-[1px] font-bold text-center transition-all duration-300 ease-in-out cursor-pointer select-none hover:bg-[#ff2d20] hover:text-white [clip-path:polygon(0_10px,10px_0,calc(100%_-_10px)_0,100%_10px,100%_calc(100%_-_10px),calc(100%_-_10px)_100%,10px_100%,0_calc(100%_-_10px))]">
                    Reset
                </button>
            </div>
        </div>
    </div>

    @if ($link)
        <h2 class="text-[0.65rem] mb-[28px] text-gray-400 leading-[1.8] w-full text-center">
            DISCOVERED DOCUMENTATION
        </h2>
        <div
            class="transition-all duration-300 border-4 border-[#ff2d20] bg-[#16213e] p-7 mb-9 flex flex-col items-center justify-center [clip-path:polygon(0_10px,10px_0,calc(100%_-_10px)_0,100%_10px,100%_calc(100%_-_10px),calc(100%_-_10px)_100%,10px_100%,0_calc(100%_-_10px))]">
            <div class="p-4 w-full flex flex-col items-center relative">
                <div class="absolute top-0 right-0 flex items-center">
                    <x-heroicon-s-eye class="h-4 w-4 text-muted" />
                    <span class="text-[0.75rem] text-muted ml-1">{{ $link->discoveries_count }}</span>
                </div>

                <div class="w-full max-w-[90%] overflow-hidden mb-2" wire:key="title-{{ $link->id }}">
                    <h3 class="text-[0.85rem] text-white font-bold text-center break-words hyphens-auto max-w-full">
                        {{ $link->title }}
                    </h3>
                </div>
                <p class="text-[0.75rem] mb-3 text-gray-400">{{ $link->category }}</p>
                <a href="{{ $link->url }}" target="_blank"
                    class="inline-block py-2 px-4 bg-transparent border-2 border-[#ff2d20] text-[#ff2d20] font-press-start text-[0.75rem] uppercase tracking-[1px] font-bold text-center transition-all duration-300 ease-in-out cursor-pointer select-none hover:bg-[#ff2d20] hover:text-white [clip-path:polygon(0_10px,10px_0,calc(100%_-_10px)_0,100%_10px,100%_calc(100%_-_10px),calc(100%_-_10px)_100%,10px_100%,0_calc(100%_-_10px))] group">
                    OPEN DOCUMENTATION <span class="inline-block animate-arrow-move">→</span>
                </a>
            </div>
        </div>
    @endif
</div>
