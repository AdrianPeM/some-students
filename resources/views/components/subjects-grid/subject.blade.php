@php
    $color = $statusColor();
    $statusText = $statusWord();

    $competenciesStr = $subject->competencies;
    $competenciesArr = preg_split('/<ul>/i', $competenciesStr);
    $newCompetenciesArr = [];
    foreach ($competenciesArr as $competencie) {
        $newCompetencie = str_replace('</ul>','',$competencie);
        array_push($newCompetenciesArr, $newCompetencie);
    }

    $radioArray = ['completed' => 'Cursada', 'studying' => 'Cursando', 'active' => 'Sin cursar'];

    if($status == 'second' || $status == 'special') {
        $status = 'active';
    }

@endphp
<div class="subj-btn flex items-center justify-center text-center transition-all ease-in-out
        bg-{{$color}}-lightest text-{{$color}} p-2 rounded cursor-pointer w-24 h-24 hover:bg-{{$color}}-light"
        data-subj-modal-btn="open-modal" data-subj-modal-id="subj-overlay-{{$subject->id}}">
    <p>
        {{$subject->name}}
    </p>
</div>

<div class="fixed fade top-0 left-0 w-full h-full bg-black z-50 bg-opacity-50 hidden" id="subj-overlay-{{$subject->id}}">
    <div style="max-height: 80vh;"
        class="modal-header flex flex-col p-2 m-auto rounded max-w-4xl max-h-xl bg-white">
        <div class="flex justify-between border-b-2 p-2 border-gray-light">
            <div class="flex items-end">
                <p class="text-2xl font-bold">{{$subject->name}} -</p>
                <p class="text-lg text-{{$color}}">&nbsp;{{ $statusText }}</p>
            </div>
            <i class="far fa-times-circle text-2xl cursor-pointer hover:text-gray-light hover:scale-120 rounded-full close-modal transform transition-all ease-in-out"
                data-subj-modal-btn="close-modal" data-subj-modal-id="subj-overlay-{{$subject->id}}"></i>
        </div>
        <div class="modal-content flex flex-col p-2 overflow-y-auto h-full">
            <div class="flex text-base px-4">
                <div class="flex flex-col flex-1">
                    @if ($status != 'blocked')
                        <form action="{{route('update_subject_status',array(),false)}}" method="POST" id="subj-form-{{$subject->id}}">
                            @foreach ($radioArray as $radioStatus => $statusWord)
                                @csrf
                                <input type="hidden" name="id" value="{{$subject->id}}">
                                <div class="flex  items-center gap-2">
                                    <input type="radio" id="{{$radioStatus}}-{{$subject->id}}" name="status"
                                        value="{{$radioStatus}}" {{$radioStatus == $status ? 'checked':''}}>
                                    <label for="{{$radioStatus}}-{{$subject->id}}">{{$statusWord}}</label>
                                </div>
                            @endforeach
                        </form>
                    @else
                        <p class="bold text-lg">Aun no puedes cursar esta materia</p>
                    @endif
                </div>
                <div class="flex flex-col flex-1">
                    <p class="font-bold">Materias requeridas</p>
                    @if (count($subject->pendantChains) > 0)
                        @foreach ($subject->pendantChains as $chain)
                            <p>{{$chain->name}}</p>
                        @endforeach
                    @else
                        <p>No hay materias requeridas</p>
                    @endif
                </div>
            </div>
            <div class="flex flex-col">
                <x-controls.accordion id='subj-accordion-1' title="Competencias a desarrollar" class="order-2">
                    <ul class="list-inside">
                        {!! next($newCompetenciesArr) !!}
                    </ul>
                </x-controls.accordion>
                <x-controls.accordion id='subj-accordion-2' title="Competencias previas" class="order-3">
                    <ul class="list-inside">
                        {!! next($newCompetenciesArr) !!}
                    </ul>
                </x-controls.accordion>
                <x-controls.accordion id='subj-accordion-3' title="Temas de unidades" class="order-1">
                    <ul>
                        {!! next($newCompetenciesArr) !!}
                    </ul>
                </x-controls.accordion>
            </div>
        </div>
        <div class="modal-footer p-2 flex justify-end">
            <x-button variant="outlined" data-subj-modal-btn="close-modal" data-subj-modal-id="subj-overlay-{{$subject->id}}">Cerrar</x-button>
            @if ($status != 'blocked')
                <x-button class="ml-4" data-type="submit-form-btn" data-target-form="subj-form-{{$subject->id}}">Guardar</x-button>
            @endif
        </div>
    </div>
</div>

