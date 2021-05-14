<div class="flex flex-col max-w-full">
    <p class="text-xl font-bold mb-2">Especialidades de {{$generalInfo->career}}</p>
    <p class="mb-2">
        Si aun no has seleccionado alguna especialidad, en este apartado puedes consultar informacion general
        de cada especialidad para que selecciones la que mas te interese.
    </p>
    <div class="flex">
        @foreach ($specialties as $specialtyObj)
            <x-controls.modal id="specialty-{{$specialtyObj['id']}}" :title="$specialtyObj['specialty']" class="m-auto p-2 sm:p-4 rounded bg-gray-600">
                <x-button>
                    {{$specialtyObj['specialty']}}
                </x-button>
                <x-slot name="content">
                    <div class="flex flex-col-reverse sm:flex-row gap-2">
                        <div class="flex flex-col text-sm text-justify mb-2">
                            {!!$specialtyObj['description']!!}
                        </div>
                        <img src="https://www.plm.automation.siemens.com/media/global/es/is-820219790-640x360_tcm54-49149.jpg" alt="" 
                         class="w-full max-w-md md:w-80 object-contain">
                    </div>
                    <div class="flex flex-col text-sm mb-2">
                        <p class="text-base font-bold">Materias obligatorias</p>
                        @foreach ($specialtyObj['subjects'] as $subject)
                            <p>{{$subject->required == 1 ? $subject->name:''}}</p>
                        @endforeach
                        <p class="text-base font-bold">Materias optativas</p>
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
        <x-button class="mt-2">
            {{$specialtySelected ? 'Cambiar especialidad':'Guardar'}}
        </x-button>
    </form>
</div>