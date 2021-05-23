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
                        @if(count($socialService) <= 0)
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
                                        <x-controls.edit-button url='{{ route("servicio_social.edit",  $socialService[0]) }}'></x-controls.edit-button>
                                        <x-controls.delete-button url="{{ route('servicio_social.destroy', $socialService[0]) }}"></x-controls.delete-button>
                                    </div>
                                </div>
                                <div class="leading-8">
                                    <div>
                                        <div>
                                            <div class="flex justify-center">
                                                <div class="text-right px-4">
                                                    <p>Fecha de inicio: </p>
                                                    <p>Dependencia: </p>
                                                    <p>Programa: </p>
                                                </div>
                                                <div class="px-4 text-left text-gray">
                                                    <p>{{ date('d F Y', strtotime($socialService[0]->start_date)) }}</p>
                                                    <p>{{ $socialService[0]->organization }}</p>
                                                    <p>{{ $socialService[0]->program }}</p>
                                                </div>
                                            </div>
                                            <x-controls.progress-bar total="500" id="socialServiceProgress" progress="{{ $socialService[0]->accum_hours }}">
                                            </x-controls.progress-bar>
                                            <div class="flex justify-center py-4">
                                                <div class="flex px-12">
                                                    <div class="flex items-center">
                                                        <div class="px-4 text-right">
                                                            <p>Horas acumuladas: </p>
                                                            <p>Horas restantes: </p>
                                                        </div>
                                                        <div class="px-4 text-gray">
                                                            <p><span class="accum_hours">{{ $socialService[0]->accum_hours }} </span> horas</p>
                                                            <p><span class="remain_hours">{{ 500-$socialService[0]->accum_hours }} </span> horas</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex px-12 items-center">
                                                    <form novalidate="">
                                                        <input type="hidden" id="accumHours" class="accum_hours" value="{{ $socialService[0]->accum_hours }}">
                                                        <div class="flex items-center">
                                                            <div class="px-4 mx-4">
                                                                <input type="hidden" id="addHours" class="add_hours" name="add_hours" value="{{ $socialService[0]->hours_add }}">
                                                                <x-button color="indigo" type="button" id="AddHours">
                                                                    Agregar horas
                                                                </x-button>
                                                            </div>
                                                            <div class="px-4 mx-4">
                                                                <input type="hidden" id="removeHours" name="remove_hours" value="{{ $socialService[0]->hours_add }}">
                                                                <x-button color="red" type="button" id="RemoveHours">
                                                                    Eliminar horas
                                                                </x-button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
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
                                                    @foreach ($socialServiceReports as $socialServiceReport)
                                                        <x-controls.card title="Reporte {{ $socialServiceReport->report_number }}" editUrl="{{ route('servicio_social_reporte.edit',  $socialServiceReport) }}"
                                                            deleteUrl="{{ route('servicio_social_reporte.destroy', $socialServiceReport) }}">
                                                            <x-slot name="content">
                                                                <div class="flex justify-center">
                                                                    <div class="px-4 text-right">
                                                                        <p>Numero de reporte: </p>
                                                                        <p>Periodo de realización: </p>
                                                                        <p>Total horas bimestre: </p>
                                                                        <p>Horas acumuladas: </p>
                                                                        <p>Tipo de reporte: </p>
                                                                    </div>
                                                                    <div class="px-4 text-gray">
                                                                        <p>{{ $socialServiceReport->report_number }}</p>
                                                                        <p>{{ (is_null($socialServiceReport->start_date) ? 'sin especificar' : date('d F Y', strtotime($socialServiceReport->start_date))) }} -
                                                                            {{ (is_null($socialServiceReport->end_date) ? 'sin especificar' : date('d F Y', strtotime($socialServiceReport->end_date))) }}</p>
                                                                        <p>{{ (is_null($socialServiceReport->hours) ? 'sin especificar' : ''.$socialServiceReport->hours.' horas' ) }}</p>
                                                                        <p>{{ $socialService[0]->accum_hours }} horas</p>
                                                                        <p>{{ $socialServiceReport->report_type }}</p>
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
