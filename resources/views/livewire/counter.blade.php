<div class="border border-gray-500 p-3 bg-green-100 rounded">
    <h4 class="text-center">Counter component</h4>
    <span class="bg-white block p-4 text-center border-2 boder-black my-4 ">{{$count}}</span>

    <div class="text-right">

        <button wire:click="increment"
                class="rounded text-white shadow bg-red-500 hover:bg-red-600 p-2 inline">+</button>
        <button wire:click="decrement"
                class="rounded text-white shadow bg-blue-500 p-2 inline hover:bg-blue-600">-</button>

        <button wire:click="setZero"
                class="rounded text-white shadow bg-yellow-300 p-2 inline hover:bg-yellow-400">RESET</button>
    </div>


</div>
