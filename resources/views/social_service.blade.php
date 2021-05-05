<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-dark">
            {{ __('Servicio Social') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col p-6 bg-white">
                    <div>
                        {{count($socialService) > 0 ? $socialService:'Aun no registras tu servicio social' }}
                        @if (count($socialService) == 0)
                            <div>Registrar servicio</div>
                        @else
                        @endif
                        <div class="leading-8">
                            <div>
                                <div>
                                    <div class="flex justify-center">
                                        <div class="text-right px-4">
                                            <p>Fecha de inicio: </p>
                                            <p>Dependencia: </p>
                                            <p>Programa: </p>
                                        </div>
                                        <div class="px-4 text-gray-600">
                                            <p>10 de Febrero del 2020</p>
                                            <p>Instituto Tecnologico de Ciudad Juarez</p>
                                            <p>Apoyo a instituciones del sector educativo</p>
                                        </div>
                                    </div>
                                    <div class="justify-center px-20 my-4">
                                        <div class="pt-1">
                                            <div class="flex mb-2 items-center justify-between">
                                                <div>
                                                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-green-600 bg-green-200">
                                                    En progreso
                                                </span>
                                                </div>
                                                <div class="text-right">
                                                <span class="text-xs font-semibold inline-block text-green-600">
                                                    30%
                                                </span>
                                                </div>
                                            </div>
                                            <div class="overflow-hidden h-5 mb-4 text-xs flex rounded bg-green-200">
                                                <div style="width:30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-center py-4">
                                        <div class="flex px-12">
                                            <div class="flex">
                                                <div class="px-4">
                                                    <p>Clases cursadas: </p>
                                                    <p>Clases restantes: </p>
                                                </div>
                                                <div class="px-4 text-gray-600">
                                                    <p>130 horas</p>
                                                    <p>370 horas</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex px-12">
                                            <div class="flex items-center">
                                                <div class="px-4 mx-8">
                                                    <button type="submit" class="btn btn-primary">
                                                        Agregar horas
                                                    </button>
                                                </div>
                                                <div class="px-4 mx-8">
                                                    <button type="submit" class="btn btn-danger">
                                                        Eliminar horas
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <div class="mt-6">
                                    <h5 class = "font-bold text-xl mb-3">Reportes</h5>
                                    <div class="flex justify-center">
                                        <div class="alert alert-secondary border-radius-1 col-md-6">
                                            Aún no es tiempo de llenar y entregar reportes
                                        </div>
                                    </div>
                                    <div class="mt-4 px-7">
                                        <h6 class="font-bold text-lg">Reporte 1</h6>
                                        <div>
                                            <div class="flex justify-center">
                                                <div class="px-4 text-right">
                                                    <p>Numero de reporte: </p>
                                                    <p>Periodo de realización: </p>
                                                    <p>Total horas bimestre: </p>
                                                    <p>Horas acumuladas: </p>
                                                    <p>Tipo de reporte: </p>
                                                </div>
                                                <div class="px-4 text-gray-600">
                                                    <p>1</p>
                                                    <p>10/02/2020 - 10/04/2020</p>
                                                    <p>100 horas</p>
                                                    <p>100 horas</p>
                                                    <p>Bimestral</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
