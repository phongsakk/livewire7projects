<div>
    <div class="flex flex-col items-center">
        <div class="flex p-16 mx-auto justify-center items-center gap-4">
            <input type="number" wire:model.lazy="number1" placeholder="Number 1">
            <select class="w24" wire:model.lazy="action">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>%</option>
            </select>
            <input type="number" wire:model.lazy="number2" placeholder="Number 2">
            <button
                class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 disabled:cursor-not-alowed disabled:bg-opacity-90 rounded text-white"
                wire:click="calculate" @disabled($disabled)> = </button>
        </div>
        <p class="text-3xl">Result is : {{ $result }}</p>
    </div>
</div>
