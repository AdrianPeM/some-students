<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-dark">
            {{ __('Actividades Complementarias') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col p-2 sm:p-6 bg-white">
                    @unless (count($complementaryActivities) > 0)
                        <div class="flex flex-col p-2 sm:p-6 bg-white border border-gray-lightest shadow sm:rounded-lg mb-4">
                            <div class="text-center">
                                <p class="text-gray-light">
                                    Aun no registras Actividades Complementarias
                                </p>
                                <div class="py-12">
                                    <a href="{{ route('actividades_complementarias.registro', array(), false) }}"><x-button>Registrar Nueva Actividad</x-button></a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="flex flex-col p-2 sm:p-6 bg-white border border-gray-lightest shadow sm:rounded-lg mb-4">
                            @include('layouts.complementary_activities.coursed-activities')
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
