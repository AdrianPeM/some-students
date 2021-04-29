<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Servicio Social') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col p-6 bg-white border-b border-gray-200">
                    <div>
                        {{count($socialService) > 0 ? $socialService:'Aun no registras tu servicio social' }}
                        @if (count($socialService) == 0)
                            <div>Registrar servicio</div>
                        @endif
                    </div>
                    <div>
                        {{count($socialServiceReports) > 0 ? $socialServiceReports:'Aun no registras reportes' }}
                        @if (count($socialServiceReports) == 0)
                            <div>Registrar reporte</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
