<div class="relative" x-data="{ open: false }">
    <button @click="open = !open"
        class="flex items-center space-x-1 text-[{{ $selectedFramework->color() }}] text-[0.65rem] uppercase tracking-[1px] font-bold">
        <span>{{ $selectedFramework->label() }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <div x-show="open" @click.away="open = false"
        class="absolute right-0 mt-2 w-48 bg-[#16213e] border border-[{{ $selectedFramework->color() }}] rounded-md shadow-lg z-10 [clip-path:polygon(0_10px,10px_0,calc(100%_-_10px)_0,100%_10px,100%_calc(100%_-_10px),calc(100%_-_10px)_100%,10px_100%,0_calc(100%_-_10px))]">
        <div class="py-1">
            @foreach ($frameworks as $framework)
                <button wire:click="switchFramework('{{ $framework->value }}'); open = false"
                    class="block w-full text-left px-4 py-2 text-[0.65rem] text-gray-300 hover:bg-[{{ $framework->color() }}] hover:text-white"
                    data-pan="switch-{{ $framework->value }}-btn">
                    {{ $framework->label() }}
                </button>
            @endforeach
        </div>
    </div>
</div>
