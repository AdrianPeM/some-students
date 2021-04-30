<x-app-layout>
    <x-slot name="styles">
        <link name="styles" rel="stylesheet" href="{{ asset('css/views/dashboard/dashboard.css') }}">
    </x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reticula') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col p-6 bg-white border-b border-gray-200">
                    @include('subjects')
                </div>
            </div>
        </div>
    </div>

    <x-slot name="scripts">
        <script src="{{ asset('js/views/dashboard/dashboard.js') }}" defer></script>
    </x-slot>
</x-app-layout> 
