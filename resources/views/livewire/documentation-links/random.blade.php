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
        <div
            class="transition-all duration-300 border-4 border-[#ff6b6b] bg-[#16213e] p-6 mb-8 w-full flex flex-col items-center justify-center [clip-path:polygon(0_10px,10px_0,calc(100%_-_10px)_0,100%_10px,100%_calc(100%_-_10px),calc(100%_-_10px)_100%,10px_100%,0_calc(100%_-_10px))]">
            <div class="p-6 flex flex-col items-center justify-center w-full">
                <div class="mt-4">
                    <a href="{{ $link->url }}" target="_blank"
                        class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-laravel">
                        <span>{{ $link->title }}</span>
                        <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5">
                            <path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor"
                                stroke-linecap="square" />
                        </svg>
                    </a>
                    <p class="mt-1 text-sm text-muted">
                        Framework: {{ $link->framework->label() }}
                    </p>
                </div>
            </div>
        </div>
    @endif
</div>
