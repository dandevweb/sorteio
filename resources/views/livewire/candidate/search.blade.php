<div class="text-white">

    <div>
        <x-input-label>Search</x-input-label>
        <x-text-input type="text" name="search" wire:model.live='search' />
    </div>

    <div class="text-violet-600">
        {{ $search }}

    </div>
    @foreach ($this->candidates as $candidate)
        <div>
            {{ $candidate->name }}
        </div>
    @endforeach

</div>
