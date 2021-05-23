<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/views/extracurriculars/extracurriculars.css') }}">
    </x-slot>

    <x-slot name="header">
        <h2 class="font-bold text-3xl text-primary">
            {{ __('Extraescolares') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-primary">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col bg-white">
                    @unless ($currentExtracurricular)
                        <div class="flex flex-col p-2 sm:p-6 bg-white border border-gray-lightest shadow sm:rounded-lg mb-4">
                            <div class="text-center">
                                <p class="text-gray-light py-5">
                                    Aún no registras actividades extraescolares
                                </p>
                                <div class="py-5">
                                    <a href="{{ route('extraescolares.registro') }}"><x-button>Registrar Actividad Extraescolar</x-button></a>
                                </div>
                            </div>
                        </div>
                    @else
                    <div class="flex flex-col p-2 sm:p-6 bg-white border border-gray-lightest shadow sm:rounded-lg mb-4">
                        @include('layouts.extracurriculars.current_extracurricular')

                        @if (count($coursedExtracurriculars) > 0)
                            <hr class="text-gray-lightest my-4">
                            @include('layouts.extracurriculars.coursed_extracurriculars')
                        @endunless
                    </div>
                    @endunless
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
