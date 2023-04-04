<div class="p-16 flex justify-center gap-6 items-center">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <button wire:click="increment" class="pointer-events-auto rounded-md bg-indigo-600 px-3 py-2 text-[0.8125rem] font-semibold leading-5 text-white hover:bg-indigo-500">
        +
    </button>
    <span>{{ $count }}</span>
    <button wire:click="decrement" class="pointer-events-auto rounded-md bg-indigo-600 px-3 py-2 text-[0.8125rem] font-semibold leading-5 text-white hover:bg-indigo-500">
        -
    </button>
</div>
