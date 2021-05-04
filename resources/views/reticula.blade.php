<x-app-layout>
    @if (session()->has('subjectStatusUpdated'))
        <?php $toast = session('subjectStatusUpdated')?>
        <x-controls.toast :toast="$toast"></x-controls.toast>
    @endif
    <x-slot name="styles">
        <link name="styles" rel="stylesheet" href="{{ asset('css/views/reticula/reticula.css') }}">
    </x-slot>

    <x-slot name="header">
        <h2 class="font-bold text-3xl text-gray-900">
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
        <script src="{{ asset('js/views/reticula/reticula.js') }}" defer></script>
    </x-slot>
</x-app-layout>
