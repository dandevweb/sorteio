<div>

    <form action="" wire:submit='save'>

        <div>
            <x-input-label>Nome</x-input-label>
            <x-text-input type="text" name="name" wire:model.lazy='form.name' />
            @error('form.name')
                <div class="text-sm font-bold text-red-100">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <x-input-label>E-mail</x-input-label>
            <x-text-input type="text" name="email" wire:model.live='form.email' />
            @error('form.email')
                <div class="text-sm font-bold text-red-100">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <x-input-label>Github</x-input-label>
            <x-text-input type="text" name="github" wire:model='form.github' />
            @error('form.github')
                <div class="text-sm font-bold text-red-100">{{ $message }}</div>
            @enderror
        </div>

        <x-primary-button type="submit">
            Save
        </x-primary-button>
    </form>

</div>
