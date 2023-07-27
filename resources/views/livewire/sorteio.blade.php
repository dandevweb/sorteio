<div>
    <div class="p-10 font-bold text-center text-green-700 bg-green-200 border-2 border-green-600 rounded">

        <span wire:stream='winner'>

            {{ $winner }}

        </span>
    </div>

    <button wire:click='run'
        class="w-full py-5 font-bold text-center uppercase rounded bg-slate-800 text-slate-500 hover:bg-slate-800">
        SORTEAR
    </button>
</div>
