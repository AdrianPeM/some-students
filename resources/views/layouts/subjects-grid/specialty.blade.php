<div class="flex flex-col max-w-full">
    <p class="text-xl font-bold mb-2">Especialidades de {{$generalInfo->career}}</p>
    <p class="mb-2">
        Si aun no has seleccionado alguna especialidad, en este apartado puedes consultar informacion general
        de cada especialidad para que selecciones la que mas te interese.
    </p>
    <div class="flex">
        @foreach ($specialties as $specialtyObj)
            <x-controls.modal id="specialty-{{$specialtyObj['id']}}" :title="$specialtyObj['specialty']" class="m-auto p-2 sm:p-4 rounded bg-gray-600">
                <x-button variant="outlined">
                    {{$specialtyObj['specialty']}}
                </x-button>
                <x-slot name="content">
                    <div class="flex flex-col-reverse sm:flex-row gap-2 mb-3">
                        <div class="flex flex-col text-left m-3">
                            {!!$specialtyObj['description']!!}
                        </div>
                        <img src="{{ $specialtyObj['img_path'] }}" alt="Imagen de la especialidad {{ $specialtyObj['specialty'] }}"
                         class="m-3 w-full max-w-md md:w-80 object-contain">
                    </div>
                    <div class="flex flex-col items-center mb-3">
                        <p class="font-bold mb-2">Materias obligatorias</p>
                        @foreach ($specialtyObj['subjects'] as $subject)
                            <p>{{$subject->required == 1 ? $subject->name:''}}</p>
                        @endforeach
                        <p class="font-bold mb-2 mt-4">Materias optativas</p>
                        @foreach ($specialtyObj['subjects'] as $subject)
                            <p>{{$subject->required == 0 ? $subject->name:''}}</p>
                        @endforeach
                    </div>
                </x-slot>

                {{-- <x-slot name="footer">
                    <x-button data-type="close-modal" data-close="overlay-modal-1" variant="outlined">Cerrar</x-button>
                </x-slot> --}}

            </x-controls.modal>
        @endforeach
    </div>
    <hr class="text-gray-lightest my-4">
    <p class="text-xl font-bold mt-4 mb-2">Selección de especialidad</p>
    @php
        $specialtySelected = auth()->user()->specialty
    @endphp
    {!!$specialtySelected ? "<p>Actualmente tienes seleccionada la especialidad <b>$specialtySelected->name</b></p>":''!!}
    <form action="{{route( $specialtySelected ? 'remove_specialty':'select_specialty', array(), false)}}" method="POST">
        @csrf
        @unless ($specialtySelected)
        <x-select name="specialty" class="w-auto">
            <x-slot name="content">
                @foreach ($specialties as $specialtyObj)
                    <option value="{{$specialtyObj['id']}}" name="specialty" {{old('specialty') == $specialtyObj['id'] ? 'selected':''}} >
                        {{$specialtyObj['specialty']}}
                    </option>
                @endforeach
            </x-slot>
        </x-select>

        @endunless
        <x-button class="mt-6">
            {{$specialtySelected ? 'Cambiar especialidad':'Guardar'}}
        </x-button>
    </form>
</div>
