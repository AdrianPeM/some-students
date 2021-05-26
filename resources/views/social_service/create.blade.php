<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-dark">
            {{ __('Registrar Servicio Social') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden">
                <div class="flex flex-col p-6 sm:px-12 bg-white border border-gray-lightest rounded-lg">
                    <form method="POST" id="social-service-form" action="{{ route('servicio_social') }}">
                        @csrf
                        <div class="grid sm:grid-cols-2 pt-6 gap-6">
                            <div class="col-span-1">
                                <label for="start_date" class="block font-medium">Fecha de inicio <span class="text-red font-bold text-xl">*</span></label>
                                <input type="date" name="start_date" id="start_date" value="{{ old('start_date') }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:text-sm border-gray-light rounded-md">
                                @error('start_date')
                                    <p class="text-red">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-span-1">
                                <label for="organization" class="block font-medium">Dependencia</label>
                                <input type="text" name="organization" id="organization" value="{{ old('organization') }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:border-gray-light rounded-md">
                                @error('organization')
                                    <p class="text-red">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-span-1">
                                <label for="program" class="block font-medium">Programa</label>
                                <input type="text" name="program" id="program" value="{{ old('program') }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:border-gray-light rounded-md">
                                @error('program')
                                    <p class="text-red">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <x-controls.alert type="primary">
                                    Si ya estas realizando tu servicio social, registra los reportes entregados hasta este momento.
                                </x-controls.alert>
                            </div>

                            {{-- <div class="col-span-1">
                                <label for="hours_add" class="block font-medium">Horas estandar <span class="text-red font-bold text-xl">*</span></label>
                                <input type="number" name="hours_add" id="hours_add" value="{{ old('hours_add') }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:border-gray-light rounded-md">
                                @error('hours_add')
                                    <p class="text-red">{{$message}}</p>
                                @enderror
                            </div> --}}

                            <div class="sm:col-span-2">
                                <p class="block font-medium">Agregar reporte <button type="button" id="AddReport" class="ml-2 focus:outline-none transform transition hover:scale-120"><i class="fas fa-plus-square text-2xl text-green hover:text-green-light"></i></button></p>
                            </div>

                            @error('start_period')
                                    <p class="text-red">{{$message}}</p>
                            @enderror
                            @error('end_period')
                                    <p class="text-red">{{$message}}</p>
                            @enderror
                            @error('bimester_total_hours')
                                    <p class="text-red">{{$message}}</p>
                            @enderror
                            @error('acummulated_hours')
                                    <p class="text-red">{{$message}}</p>
                            @enderror

                            <div class="sm:col-span-2" id="ReportsDiv">
                            </div>
                        </div>
                        <button class="hidden"></button>
                    </form>
                    <div class="px-4 py-5 bg-gray-50 text-right sm:px-6">
                        <a href="{{ url()->previous() }}">
                            <x-button variant="outlined">Cancelar</x-button>
                        </a>
                        <x-button class="ml-2" data-type="submit-form-btn"
                            data-target-form="social-service-form">Guardar</x-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
