<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-dark">
            {{ __('Actualización de Servicio Social') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden">
                <div class="flex flex-col p-6 sm:px-12 bg-white border border-gray-lightest rounded-lg">
                    <form method="POST" id="social-service-form-{{$socialService->id}}" action="{{ route("servicio_social_update", $socialService->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="grid sm:grid-cols-2 pt-6 gap-6">
                            <div class="col-span-1">
                                <label for="start_date" class="block font-medium">Fecha de inicio <span class="text-red font-bold text-xl">*</span></label>
                                <input type="date" name="start_date" id="start_date" value="{{ old('start_date', $socialService->start_date) }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:text-sm border-gray-light rounded-md">
                                @error('start_date')
                                    <p class="text-red">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-span-1">
                                <label for="organization" class="block font-medium">Dependencia</label>
                                <input type="text" name="organization" id="organization" value="{{ old('organization', $socialService->organization) }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:border-gray-light rounded-md">
                                @error('organization')
                                    <p class="text-red">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-span-1">
                                <label for="program" class="block font-medium">Programa</label>
                                <input type="text" name="program" id="program" value="{{ old('program', $socialService->program) }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:border-gray-light rounded-md">
                                @error('program')
                                    <p class="text-red">{{$message}}</p>
                                @enderror
                            </div>

                            {{-- <div class="col-span-1">
                                <label for="hours_add" class="block font-medium">Horas estandar <span class="text-red font-bold text-xl">*</span></label>
                                <input type="number" name="hours_add" id="hours_add" value="{{ old('hours_add', $socialService->hours_add) }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:border-gray-light rounded-md">
                                @error('hours_add')
                                    <p class="text-red">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-span-1">
                                <label for="accum_hours" class="block font-medium">Horas acumuladas</label>
                                <input type="number" name="accum_hours" id="accum_hours" value="{{ old('accum_hours', $socialService->accum_hours) }}" class="mt-1 focus:ring-indigo focus:border-indigo block w-full shadow-sm sm:border-gray-light rounded-md">
                                @error('accum_hours')
                                    <p class="text-red">{{$message}}</p>
                                @enderror
                            </div> --}}
                            <button class="hidden"></button>
                        </div>
                    </form>
                    <div class="px-4 py-5 bg-gray-50 text-right sm:px-6">
                        <a href="{{ url()->previous() }}">
                            <x-button variant="outlined">Cancelar</x-button>
                        </a>
                        <x-button class="ml-2" data-type="submit-form-btn"
                            data-target-form="social-service-form-{{$socialService->id}}">Guardar</x-button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
