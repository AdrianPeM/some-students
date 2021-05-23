<div class="flex">
    <div class="flex flex-col flex-1">
        <div class="flex justify-center p-1">
            <p class="font-bold">Horas acumuladas:</p>
            <p class="ml-2">{{$accumulatedHours}}</p>
        </div>
        <div class="flex justify-center p-1">
            <p class="font-bold">Horas restantes:</p>
            <p class="ml-2">{{$remainingHours}}</p>
        </div>
    </div>

    <x-controls.add-button url="{{route('actividades_complementarias.registro', array(), false)}}"></x-controls.add-button>
</div>

<x-controls.progress-bar id="complementaryActivitiesProgress" total="60" :progress="$accumulatedHours" my="0" class="mt-4">
</x-controls.progress-bar>

<hr class="text-gray-lightest my-4">

@foreach ($complementaryActivities as $activity)
    <div class="flex w-full max-w-xl m-auto my-2 p-1 sm:p-4 border border-gray-lightest shadow rounded-lg">
        <div class="flex flex-col flex-1">
            <div class="flex p-1">
                <p class="font-bold">Nombre:</p>
                <p class="ml-2">{{$activity->name}}</p>
            </div>
            <div class="flex p-1">
                <p class="font-bold">Periodo:</p>
                <p class="ml-2">{{$activity->period}}</p>
            </div>
            <div class="flex p-1">
                <p class="font-bold">Fecha de entrega:</p>
                <p class="ml-2">{{$activity->revision_date}}</p>
            </div>
            <div class="flex p-1">
                <p class="font-bold">Horas:</p>
                <p class="ml-2">{{$activity->hours}}</p>
            </div>
        </div>
        <div class="flex flex-col p-1">
            <x-controls.edit-button url="{{ route('actividades_complementarias.edit', $activity) }}"></x-controls.edit-button>
            <x-controls.delete-button url="{{ route('actividades_complementarias.destroy', $activity) }}"></x-controls.delete-button>
        </div>
    </div>
@endforeach
