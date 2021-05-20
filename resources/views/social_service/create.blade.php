<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-dark">
            {{ __('Registrar Servicio Social') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden">
                <div class="flex flex-col px-12 bg-white">
                    <form method="POST" action="{{ route('servicio_social') }}" class="border border-gray-lightest rounded-lg">
                        @csrf
                        <div class="px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-2 gap-6">
                                <div class="col-span-1">
                                    <label for="fecha_inicio" class="block font-medium">Fecha de inicio <span class="text-red font-bold text-xl">*</span></label>
                                    <input type="date" name="fecha_inicio" id="fecha_inicio" value="{{ old('fecha_inicio') }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:text-sm border-gray-light rounded-md">
                                    @error('fecha_inicio')
                                        <p class="text-red">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="col-span-1">
                                    <label for="dependencia" class="block font-medium">Dependencia</label>
                                    <input type="text" name="dependencia" id="dependencia" value="{{ old('dependencia') }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:border-gray-light rounded-md">
                                    @error('dependencia')
                                        <p class="text-red">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="col-span-1">
                                    <label for="programa" class="block font-medium">Programa</label>
                                    <input type="text" name="programa" id="programa" value="{{ old('programa') }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:border-gray-light rounded-md">
                                    @error('programa')
                                        <p class="text-red">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="col-span-2">
                                    <x-controls.alert type="primary">
                                        Si ya estas realizando tu servicio social, registra las horas acumuladas y los reportes entregados hasta este momento.
                                    </x-controls.alert>
                                </div>

                                <div class="col-span-1">
                                    <label for="horas_estandar" class="block font-medium">Horas estandar <span class="text-red font-bold text-xl">*</span></label>
                                    <input type="number" name="horas_estandar" id="horas_estandar" value="{{ old('horas_estandar') }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:border-gray-light rounded-md">
                                    @error('horas_estandar')
                                        <p class="text-red">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="col-span-1">
                                    <label for="horas_acumuladas" class="block font-medium">Horas acumuladas</label>
                                    <input type="number" name="horas_acumuladas" id="horas_acumuladas" value="{{ old('horas_acumuladas') }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:border-gray-light rounded-md">
                                    @error('horas_acumuladas')
                                        <p class="text-red">{{$message}}</p>
                                    @enderror
                                </div>


                                <div class="col-span-2">
                                    <p class="block font-medium">Agregar reporte <button type="button" id="AddReport" class="ml-2 focus:outline-none transform transition hover:scale-120"><i class="fas fa-plus-square text-2xl text-green focus:text-green-dark"></i></button></p>
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

                                <div class="col-span-2" id="ReportsDiv">
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <a><x-button color="indigo" type="submit">Guardar</x-button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
