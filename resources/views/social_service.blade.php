<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-primary">
            {{ __('Servicio Social') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col bg-white">
                    <div>
                        @unless($socialService)
                            <div class="flex flex-col p-2 sm:p-6 bg-white border border-gray-lightest shadow sm:rounded-lg mb-4">
                                <div class="text-center">
                                    <p class="text-gray-light py-5">
                                        Aún no registras tu servicio social
                                    </p>
                                    <div class="py-5">
                                        <a href="{{ route('servicio_social_registro') }}"><x-button>Registrar servicio social</x-button></a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="flex flex-col p-2 sm:p-6 bg-white border border-gray-lightest shadow sm:rounded-lg mb-4">
                                <div class="flex items-center justify-between">
                                    <p class="mb-4 text-lg font-bold">Información de servicio social</p>
                                    <div class="flex items-center justify-end">
                                        <x-controls.edit-button url='{{ route("servicio_social.edit",  $socialService) }}'></x-controls.edit-button>
                                        <x-controls.delete-button url="{{ route('servicio_social.destroy', $socialService) }}"></x-controls.delete-button>
                                    </div>
                                </div>
                                <div class="leading-8">
                                    <div>
                                        <div>
                                            <div class="flex justify-center">
                                                <div class="text-right px-4">
                                                    <p class="font-bold">Fecha de inicio: </p>
                                                    <p class="font-bold">Dependencia: </p>
                                                    <p class="font-bold">Programa: </p>
                                                </div>
                                                <div class="px-4 text-left text-gray">
                                                    <p>{{ date('d F Y', strtotime($socialService->start_date)) }}</p>
                                                    <p>{{ $socialService->organization }}</p>
                                                    <p>{{ $socialService->program }}</p>
                                                </div>
                                            </div>
                                            <x-controls.progress-bar total="500" id="socialServiceProgress" progress="{{ $socialService->accum_hours }}">
                                            </x-controls.progress-bar>
                                            <div class="flex justify-center py-4">
                                                <div class="flex px-12">
                                                    <div class="flex items-center">
                                                        <div class="px-4 text-right">
                                                            <p class="font-bold">Horas acumuladas: </p>
                                                            <p class="font-bold">Horas restantes: </p>
                                                        </div>
                                                        <div class="px-4 text-gray">
                                                            <p><span class="accum_hours">{{ $socialService->accum_hours }} </span> horas</p>
                                                            <p><span class="remain_hours">{{ 500-$socialService->accum_hours }} </span> horas</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="flex px-12 items-center">
                                                    <form novalidate="">
                                                        <input type="hidden" id="accumHours" class="accum_hours" value="{{ $socialService->accum_hours }}">
                                                        <div class="flex items-center">
                                                            <div class="px-4 mx-4">
                                                                <input type="hidden" id="addHours" class="add_hours" name="add_hours" value="{{ $socialService->hours_add }}">
                                                                <x-button color="indigo" type="button" id="AddHours">
                                                                    Agregar horas
                                                                </x-button>
                                                            </div>
                                                            <div class="px-4 mx-4">
                                                                <input type="hidden" id="removeHours" name="remove_hours" value="{{ $socialService->hours_add }}">
                                                                <x-button color="red" type="button" id="RemoveHours">
                                                                    Eliminar horas
                                                                </x-button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <hr class="my-4 border-gray-light">
                                        <div class="mt-6">
                                            <div class="flex items-center justify-between">
                                                <h5 class = "font-bold text-xl mb-3">Reportes</h5>
                                                @if(count($socialServiceReports) != 0)
                                                    <div class="flex items-center justify-end">
                                                        <x-controls.add-button url="{{ route('servicio_social_reporte_registro') }}">Nuevo reporte</x-controls.add-button>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="flex justify-center">
                                                <x-controls.alert type="secondary">
                                                    Aún no es tiempo de llenar y entregar reportes
                                                </x-controls.alert>
                                            </div>
                                            <div>
                                                <div class="text-center">
                                                    <div class="text-gray-light pt-12">
                                                        {{count($socialServiceReports) > 0 ? '':'Aun no registras reportes' }}
                                                    </div>
                                                </div>
                                                @if(count($socialServiceReports) == 0)
                                                    <div class="text-center">
                                                        <div class="py-10">
                                                            <a href="{{ route('servicio_social_reporte_registro') }}"><x-button color="indigo">Registrar reporte</x-button></a>
                                                        </div>
                                                    </div>
                                                @else

                                                @php
                                                    $accumulatedHours = 0
                                                @endphp
                                                    @foreach ($socialServiceReports as $report)
                                                    @php
                                                        $accumulatedHours += $report->hours
                                                    @endphp
                                                        <x-controls.card title="Reporte {{ $report->report_number }}" editUrl="{{ route('servicio_social_reporte.edit',  $report) }}"
                                                            deleteUrl="{{ route('servicio_social_reporte.destroy', $report) }}">
                                                            <x-slot name="content">
                                                                <div class="flex justify-center">
                                                                    <div class="px-4 text-right">
                                                                        <p class="font-bold">Tipo de reporte: </p>
                                                                        {{-- <p class="font-bold">Numero de reporte: </p> --}}
                                                                        <p class="font-bold">Periodo de realización: </p>
                                                                        <p class="font-bold">Total horas reporte: </p>
                                                                        <p class="font-bold">Horas acumuladas: </p>
                                                                    </div>
                                                                    <div class="px-4 text-gray">
                                                                        <p>{{ $report->report_type }}</p>
                                                                        {{-- <p>{{ $report->report_number }}</p> --}}
                                                                        <p>{{ date('d F Y', strtotime($report->start_date)) }} -
                                                                            {{ date('d F Y', strtotime($report->end_date)) }}</p>
                                                                        <p>{{ $report->hours.' horas' }}</p>
                                                                        <p>{{ $accumulatedHours }} horas</p>
                                                                    </div>
                                                                </div>
                                                            </x-slot>
                                                        </x-controls.card>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
