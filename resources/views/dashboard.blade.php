<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex flex-col mx-auto max-w-7xl sm:px-6 lg:px-8 gap-y-8">

            {{-- <livewire:candidate.create /> --}}
            {{-- <livewire:candidate.search /> --}}

            <div class="overflow-hidden text-white bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <livewire:sorteio lazy />
            </div>
        </div>
    </div>
</x-app-layout>
