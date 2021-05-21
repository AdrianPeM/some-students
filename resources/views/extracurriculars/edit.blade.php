<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-dark">
            {{ __('Registrar Actividad Extraescolar') }}
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden">
                <div class="flex flex-col p-6 sm:px-12 bg-white border border-gray-lightest rounded-lg">
                    <form id="extracurricular-form-{{$extracurricular->id}}" method="POST" 
                        action="{{route('extraescolares.update', $extracurricular, false)}}">
                        @method('PUT')
                        @csrf
                        <div class="grid grid-cols-2 gap-6 py-3">
                            <div class="col-span-1">
                                <label for="name" class="block font-medium">Nombre de la actividad <span class="text-red font-bold text-xl">*</span></label>
                                <input type="text" name="name" id="name" value="{{ old('name', $extracurricular->name) }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:border-gray-light rounded-md">
                                @error('name')
                                    <p class="text-red">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-span-1">
                                <label for="number" class="block font-medium">Número de extraescolar <span class="text-red font-bold text-xl">*</span></label>
                                <input type="number" name="number" id="number" value="{{ old('number', $extracurricular->number) }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:border-gray-light rounded-md">
                                @error('number')
                                    <p class="text-red">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-span-1">
                                <label for="taken_classes" class="block font-medium">Clases Tomadas <span class="text-red font-bold text-xl">*</span></label>
                                <input type="number" name="taken_classes" id="taken_classes" value="{{ old('taken_classes', $extracurricular->taken_classes) }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:border-gray-light rounded-md">
                                @error('taken_classes')
                                    <p class="text-red">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-span-1">
                                <label for="total_classes" class="block font-medium">Clases Totales <span class="text-red font-bold text-xl">*</span></label>
                                <input type="number" name="total_classes" id="total_classes" value="{{ old('total_classes', $extracurricular->total_classes) }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:border-gray-light rounded-md">
                                @error('total_classes')
                                    <p class="text-red">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-span-1">
                                <label for="start_date" class="block font-medium">Fecha de inicio <span class="text-red font-bold text-xl">*</span></label>
                                <input type="date" name="start_date" id="start_date" value="{{ old('start_date', $extracurricular->start_date) }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:text-sm border-gray-light rounded-md">
                                @error('start_date')
                                    <p class="text-red">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-span-1">
                                <label for="end_date" class="block font-medium">Fecha de finalizacion <span class="text-red font-bold text-xl">*</span></label>
                                <input type="date" name="end_date" id="end_date" value="{{ old('end_date', $extracurricular->end_date) }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:text-sm border-gray-light rounded-md">
                                @error('end_date')
                                    <p class="text-red">{{ __($message) }}</p>
                                @enderror
                            </div>
                            <button class="hidden"></button>
                        </div>
                    </form>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <a href="{{ url()->previous() }}">
                            <x-button variant="outlined">Cancelar</x-button>
                        </a>
                        <x-button class="ml-2" data-type="submit-form-btn" 
                            data-target-form="extracurricular-form-{{$extracurricular->id}}">Guardar</x-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>