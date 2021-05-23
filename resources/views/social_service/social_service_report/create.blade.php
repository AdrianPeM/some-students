<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-dark">
            {{ __('Nuevo reporte de Servicio Social') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden">
                <div class="flex flex-col px-12 bg-white border border-gray-lightest rounded-lg">
                    <form method="POST" id="social-service-report-form" action="{{ route('servicio_social_reporte') }}">
                        @csrf
                        <div class="px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-2 gap-6">
                                <div class="col-span-2" id="ReportsDiv">
                                    <div class="text-left grid grid-cols-2 gap-6 mb-10 report">
                                        <div>
                                            <label for="start_period" class="block font-medium">Inicio de periodo <span class="text-red font-bold text-xl">*</span></label>
                                            <input type="date" name="start_period" id="start_period" value="{{ old('start_period') }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:text-sm border-gray-light rounded-md">
                                            @error('start_period')
                                                <p class="text-red">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="end_period" class="block font-medium">Termino de periodo <span class="text-red font-bold text-xl">*</span></label>
                                            <input type="date" name="end_period" id="end_period" value="{{ old('end_period') }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:text-sm border-gray-light rounded-md">
                                            @error('end_period')
                                                <p class="text-red">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="bimester_total_hours" class="block font-medium">Total horas bimestre <span class="text-red font-bold text-xl">*</span></label>
                                            <input type="number" name="bimester_total_hours" id="bimester_total_hours" value="{{ old('bimester_total_hours') }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:text-sm border-gray-light rounded-md">
                                            @error('bimester_total_hours')
                                                <p class="text-red">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="report_type" class="block font-medium">Tipo de reporte <span class="text-red font-bold text-xl">*</span></label>
                                            <select name="report_type" id="report_type" value="{{ old('report_type') }}" class="mt-1 block w-full py-2 px-3 border border-gray-light bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo focus:border-indigo sm:text-sm">
                                                <option>Bimestral</option>
                                                <option>Final</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="px-4 py-5 bg-gray-50 text-right sm:px-6">
                        <a href="{{ url()->previous() }}">
                            <x-button variant="outlined">Cancelar</x-button>
                        </a>
                        <x-button class="ml-2" data-type="submit-form-btn"
                            data-target-form="social-service-report-form">Guardar</x-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
