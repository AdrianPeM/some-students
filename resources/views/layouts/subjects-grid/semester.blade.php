<x-controls.modal id='semester-{{$index}}' title="Semestre {{$index}}" class="cursor-pointer justify-center">
    <p class="text-base font-bold text-center border-b-2 {{$semester == $index ? 'border-blue-light':'border-transparent'}}
        hover:border-blue-light transition duration-150">
        Semestre {{$index}}
    </p>
    <x-slot name="content">
        <div class="flex flex-col flex-1 text-base text-gray">
            @if ($semester >= $index)
                <div class="mb-4">
                        @if ($semester == $index)
                            <p class="text-blue mb-2">Estas cursando este semestre</p>
                            @else
                            <p class="mb-2">No estas cursando este semestre</p>
                            <form action="{{route('update_semester', array(), false)}}" 
                                method="POST" id="semester-form-{{$index}}-prev">
                                @csrf
                                <input type="hidden" name="sn" value="{{$index}}">
                            </form>
                        @endif
                        <p>
                            Selecciona el estatus para actualizar todas las materias de este semestre<br>
                            Solo serán actualizadas las materias desbloqueadas
                        </p>
                </div>
                <form action="{{route('update_semester', array(), false)}}" method="POST" id="semester-form-{{$index}}">
                    @csrf
                    <input type="hidden" name="ss" value="{{$index}}">
                    <div class="flex  items-center gap-2">
                        <input type="radio" id="sem-completed-{{$index}}" name="status" value="completed">
                        <label for="sem-completed-{{$index}}">Cursada</label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input type="radio" id="sem-studying-{{$index}}" name="status" value="studying">
                        <label for="sem-studying-{{$index}}">Cursando</label>
                    </div>
                    <div class="flex items-center gap-2">
                        <input type="radio" id="sem-active-{{$index}}" name="status" value="active">
                        <label for="sem-active-{{$index}}">Sin cursar</label>
                    </div>
                </form>
            @else
                <form action="{{route('update_semester', array(), false)}}" method="POST" id="semester-form-{{$index}}">
                    @csrf
                    <input type="hidden" name="sn" value="{{$index}}">
                </form>
                <div class="mb-4">
                    <p class="mb-2">No estas cursando este semestre</p>
                    <p>Oprime <strong>Cambiar semestre</strong> para cambiar a este semestre.</p>
                </div>
            @endif
        </div>
    </x-slot>
    <x-slot name="footer">
        <x-button data-type="close-modal" data-close="overlay-modal-semester-{{$index}}" variant="outlined">Cerrar</x-button>
        @if ($semester > $index)
            <x-button class="ml-3 -mr-1.5" color="secondary" data-type="submit-form-btn" data-target-form="semester-form-{{$index}}-prev">
                Cambiar semestre
            </x-button>
        @endif
        <x-button class="ml-2" data-type="submit-form-btn" data-target-form="semester-form-{{$index}}">
            {{$semester >= $index ? 'Guardar': 'Cambiar semestre'}}
        </x-button>
    </x-slot>
</x-controls.modal>