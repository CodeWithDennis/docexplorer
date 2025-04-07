<div>
    <div
        class="transition-all duration-300 border-4 border-[#ff6b6b] bg-[#16213e] p-6 mb-8 w-full flex flex-col items-center justify-center [clip-path:polygon(0_10px,10px_0,calc(100%_-_10px)_0,100%_10px,100%_calc(100%_-_10px),calc(100%_-_10px)_100%,10px_100%,0_calc(100%_-_10px))]">
        <div class="p-6 flex flex-col items-center justify-center w-full">
            <button wire:click="getRandomLink"
                class="inline-block w-full py-[15px] px-4 bg-gradient-to-r from-red-500 to-red-600 text-white font-press-start text-[0.75rem] uppercase tracking-[1px] font-bold text-center shadow-[0_4px_6px_rgba(220,38,38,0.2)] transition-all duration-300 ease-in-out cursor-pointer select-none [clip-path:polygon(0_10px,10px_0,calc(100%_-_10px)_0,100%_10px,100%_calc(100%_-_10px),calc(100%_-_10px)_100%,10px_100%,0_calc(100%_-_10px))]">
                Get Random Documentation
            </button>
        </div>
    </div>

    @if ($link)
        <h2 class="text-[0.6rem] mb-[25px] text-muted leading-[1.8] w-full text-center">DISCOVERED DOCUMENTATION</h2>
        <div
            class="transition-all duration-300 border-4 border-[#ff6b6b] bg-[#16213e] p-6 mb-8 w-full flex flex-col items-center justify-center [clip-path:polygon(0_10px,10px_0,calc(100%_-_10px)_0,100%_10px,100%_calc(100%_-_10px),calc(100%_-_10px)_100%,10px_100%,0_calc(100%_-_10px))]">
            <div class="p-4 w-full flex flex-col items-center">
                <h3 class="text-[0.8rem] mb-2 text-white font-bold text-center">{{ $link->title }}</h3>
                <p class="text-[0.7rem] mb-3 text-muted">{{ $link->framework->label() }}</p>
                <a href="{{ $link->url }}" target="_blank"
                    class="inline-block py-2 px-4 bg-gradient-to-r from-red-500 to-red-600 text-white font-press-start text-[0.7rem] uppercase tracking-[1px] font-bold text-center shadow-[0_4px_6px_rgba(220,38,38,0.2)] transition-all duration-300 ease-in-out cursor-pointer select-none [clip-path:polygon(0_10px,10px_0,calc(100%_-_10px)_0,100%_10px,100%_calc(100%_-_10px),calc(100%_-_10px)_100%,10px_100%,0_calc(100%_-_10px))]">OPEN
                    DOCUMENTATION →</a>
            </div>
        </div>
    @endif
</div>
