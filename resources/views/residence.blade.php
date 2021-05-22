<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-dark">
            {{ __('Residencias') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col p-6 bg-white">
                    <div>
                        {{$residence ?? 'No hay registro de residencias' }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
