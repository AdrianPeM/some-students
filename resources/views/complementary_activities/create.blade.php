<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-dark">
            {{ __('Registrar Actividad Complementaria') }}
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden">
                <div class="flex flex-col p-6 sm:px-12 bg-white border border-gray-lightest rounded-lg">
                    <form id="complementaryActivity-form-create" method="POST"
                        action="{{route('actividades_complementarias', array(), false)}}">
                        @csrf
                        <div class="grid sm:grid-cols-2 gap-6 py-3">
                            <div class="col-span-1">
                                <label for="name" class="block font-medium">Nombre de la actividad <span class="text-red font-bold text-xl">*</span></label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:border-gray-light rounded-md">
                                @error('name')
                                    <p class="text-red">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-span-1">
                                <label for="period" class="block font-medium">Periodo <span class="text-red font-bold text-xl">*</span></label>
                                <x-select name="period">
                                    <x-slot name="content">
                                        <option value="Enero - Junio" name="period" {{old('period') == 'Enero-Junio' ? 'selected':''}} >Enero - Junio</option>
                                        <option value="Agosto - Diciembre" name="period" {{old('period') == 'Agosto-Diciembre' ? 'selected':''}} >Agosto - Diciembre</option>
                                    </x-slot>
                                </x-select>
                                @error('period')
                                    <p class="text-red">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-span-1">
                                <label for="revision_date" class="block font-medium">Fecha de revisión <span class="text-red font-bold text-xl">*</span></label>
                                <input type="date" name="revision_date" id="revision_date" value="{{ old('revision_date') }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:text-sm border-gray-light rounded-md">
                                @error('revision_date')
                                    <p class="text-red">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-span-1">
                                <label for="hours" class="block font-medium">Horas <span class="text-red font-bold text-xl">*</span></label>
                                <input type="number" name="hours" id="hours" value="{{ old('hours') }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:border-gray-light rounded-md">
                                @error('hours')
                                    <p class="text-red">{{$message}}</p>
                                @enderror
                            </div>
                            <button class="hidden"></button>
                        </div>
                    </form>

                    <div class="px-4 py-3 bg-gray-50 text-center sm:text-right sm:px-6">
                        <a href="{{ url()->previous() }}">
                            <x-button variant="outlined">Cancelar</x-button>
                        </a>
                        <x-button class="ml-2" data-type="submit-form-btn"
                            data-target-form="complementaryActivity-form-create">Guardar</x-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
