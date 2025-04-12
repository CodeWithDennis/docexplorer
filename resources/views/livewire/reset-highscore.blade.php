<div x-data="{ showConfirm: false }">
    <button @click="showConfirm = true"
        class="inline-block py-1.5 px-3 bg-transparent border-2 border-[{{ $selectedFramework->color() }}] text-[{{ $selectedFramework->color() }}] font-press-start text-[0.65rem] uppercase tracking-[1px] font-bold text-center transition-all duration-300 ease-in-out cursor-pointer select-none hover:bg-[{{ $selectedFramework->color() }}] hover:text-white [clip-path:polygon(0_10px,10px_0,calc(100%_-_10px)_0,100%_10px,100%_calc(100%_-_10px),calc(100%_-_10px)_100%,10px_100%,0_calc(100%_-_10px))]">
        RESET HIGHSCORE
    </button>

    <div x-show="showConfirm" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-95"
        class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50">
        <div
            class="bg-[#16213e] p-7 max-w-[450px] rounded-lg border-4 border-[{{ $selectedFramework->color() }}] [clip-path:polygon(0_10px,10px_0,calc(100%_-_10px)_0,100%_10px,100%_calc(100%_-_10px),calc(100%_-_10px)_100%,10px_100%,0_calc(100%_-_10px))]">
            <h3 class="text-white font-bold mb-5">Reset Highscore?</h3>
            <p class="text-gray-400 text-xs mb-6">Are you sure you want to reset your highscore for
                {{ $selectedFramework->label() }}?</p>
            <div class="flex gap-5">
                <button @click="showConfirm = false"
                    class="flex-1 py-2 px-4 bg-transparent border-2 border-[{{ $selectedFramework->color() }}] text-[{{ $selectedFramework->color() }}] font-press-start text-[0.75rem] uppercase tracking-[1px] font-bold text-center transition-all duration-300 ease-in-out cursor-pointer select-none hover:bg-[{{ $selectedFramework->color() }}] hover:text-white [clip-path:polygon(0_10px,10px_0,calc(100%_-_10px)_0,100%_10px,100%_calc(100%_-_10px),calc(100%_-_10px)_100%,10px_100%,0_calc(100%_-_10px))]">
                    CANCEL
                </button>
                <button wire:click="resetHighscore" @click="showConfirm = false"
                    class="flex-1 py-2 px-4 bg-[{{ $selectedFramework->color() }}] text-white font-press-start text-[0.75rem] uppercase tracking-[1px] font-bold text-center transition-all duration-300 ease-in-out cursor-pointer select-none hover:bg-opacity-90 [clip-path:polygon(0_10px,10px_0,calc(100%_-_10px)_0,100%_10px,100%_calc(100%_-_10px),calc(100%_-_10px)_100%,10px_100%,0_calc(100%_-_10px))]">
                    CONFIRM
                </button>
            </div>
        </div>
    </div>
</div>
