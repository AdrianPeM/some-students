<div class="flex flex-col">
    <p class="mb-4 text-lg font-bold">Extraescolares cursadas</p>
    @foreach ($coursedExtracurriculars as $extracurricular)
        <div class="flex w-full max-w-xl m-auto my-2 p-1 sm:p-4 border border-gray-lightest shadow rounded-lg">
            <div class="flex flex-col flex-1">
                <div class="flex p-1">
                    <p class="font-bold">Numero de extraescolar:</p>
                    <p class="ml-2">{{$extracurricular->number}}</p>
                </div>
                <div class="flex p-1">
                    <p class="font-bold">Actividad:</p>
                    <p class="ml-2">{{$extracurricular->name}}</p>
                </div>
                <div class="flex p-1">
                    <p class="font-bold">Periodo de realizacion:</p>
                    <p class="ml-2">
                        {{date('d F Y', strtotime($extracurricular->start_date))}} - 
                        {{date('d F Y', strtotime($extracurricular->end_date))}}
                    </p>
                </div>
            </div>
            <div class="flex flex-col p-1">
                <x-controls.edit-button url="{{ route('extraescolares.edit',  $extracurricular) }}"></x-controls.edit-button>
                <x-controls.delete-button url="{{ route('extraescolares.destroy', $extracurricular) }}"></x-controls.delete-button>
            </div>
        </div>
    @endforeach
</div>