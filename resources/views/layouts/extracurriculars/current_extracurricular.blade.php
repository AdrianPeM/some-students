<p class="mb-4 text-lg font-bold">Extraescolar actual</p>
<div class="flex">
    <div class="flex flex-col flex-1">
        <div class="flex p-1">
            <p class="flex-1 font-bold text-right">Numero de extraescolar:</p>
            <p class="flex-1 ml-2">{{$currentExtracurricular->number}}</p>
        </div>
        <div class="flex p-1">
            <p class="flex-1 font-bold text-right">Actividad:</p>
            <p class="flex-1 ml-2">{{$currentExtracurricular->name}}</p>
        </div>
        <div class="flex p-1">
            <p class="flex-1 font-bold text-right">Clases tomadas:</p>
            <p class="flex-1 ml-2">{{$currentExtracurricular->taken_classes}}</p>
        </div>
        <div class="flex p-1">
            <p class="flex-1 font-bold text-right">Clases totales:</p>
            <p class="flex-1 ml-2">{{$currentExtracurricular->total_classes}}</p>
        </div>
        <div class="flex p-1">
            <p class="flex-1 font-bold text-right">Fecha de inicio:</p>
            <p class="flex-1 ml-2">{{ __(date('d F Y', strtotime($currentExtracurricular->start_date)))}}</p>
        </div>
        <div class="flex p-1">
            <p class="flex-1 font-bold text-right">Fecha de fin aproximada:</p>
            <p class="flex-1 ml-2">{{ date('d F Y', strtotime($currentExtracurricular->end_date))}}</p>
        </div>
    </div>
    <div class="flex flex-col p-1">
        <x-controls.add-button url="{{ route('extraescolares.registro') }}"></x-controls.add-button>
        <x-controls.edit-button url="{{ route('extraescolares.edit',  $currentExtracurricular) }}"></x-controls.edit-button>
        <x-controls.delete-button url="{{ route('extraescolares.destroy', $currentExtracurricular, false)}}"></x-controls.delete-button>
    </div>
</div>

<x-controls.progress-bar id="currExtracurricularProgress-{{$currentExtracurricular->number}}" 
    :total="$currentExtracurricular->total_classes" 
    :progress="$currentExtracurricular->taken_classes">
</x-controls.progress-bar>