<x-app-layout>
    @if (session()->has('subjectStatusUpdated'))
        <?php $toast = session('subjectStatusUpdated')?>
        <x-controls.toast :toast="$toast"></x-controls.toast>
    @endif
    <x-slot name="styles">
        <link name="styles" rel="stylesheet" href="{{ asset('css/views/reticula/reticula.css') }}">
        <style>
            .tab-option.active {
                background: white;
            }
            .tab-option.active:hover {
                color: currentColor;
            }
        </style>
    </x-slot>

    <x-slot name="header">
        <h2 class="font-bold text-3xl text-primary">
            {{ __('Reticula') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-primary">
            {{-- Reticula de materias --}}
            <div class="bg-white overflow-hidden border border-gray-lightest shadow sm:rounded-lg mb-4">
                <div class="flex flex-col px-2 py-4 sm:p-6 bg-white">
                    @include('components.subjects-grid.subjects')
                </div>
            </div>
            {{-- Informacion general --}}
            <div class="bg-white overflow-hidden border border-gray-lightest shadow sm:rounded-lg mb-4">
                {{-- <div class="flex flex-col px-2 py-4 sm:p-6 bg-white"> --}}
                <div class="flex flex-col bg-white">
                    @include('components.subjects-grid.general_info')
                </div>
            </div>
            {{-- Especialidad --}}
            <div class="bg-white overflow-hidden border border-gray-lightest shadow sm:rounded-lg">
                <div class="flex flex-col px-2 py-4 sm:p-6 bg-white">
                    @include('components.subjects-grid.specialty')
                </div>
            </div>
        </div>
    </div>

    <x-slot name="scripts">
        <script src="{{ asset('js/views/reticula/reticula.js') }}" defer></script>
    </x-slot>
</x-app-layout>
