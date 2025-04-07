<div>
    <button wire:click="getRandomLink"
        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
        Get Random Documentation
    </button>

    @if ($link)
        <div class="mt-4">
            <a href="{{ $link->url }}" target="_blank"
                class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433]">
                <span>{{ $link->title }}</span>
                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="w-2.5 h-2.5">
                    <path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor"
                        stroke-linecap="square" />
                </svg>
            </a>
            <p class="mt-1 text-sm text-[#706f6c] dark:text-[#A1A09A]">
                Framework: {{ $link->framework->label() }}
            </p>
        </div>
    @endif
</div>
