<div class="flex flex-col max-w-full">
    @php
        $sections = ['Información general'=>true, 'Materias'=>false, 'Creditos'=>false, 'Horario'=>false]
    @endphp
    <x-controls.tab :sections="$sections">
        <div class="px-2 py-5 sm:px-6">
            {{-- Seccion Horario --}}
            <div class="flex flex-col" data-tab-section="Horario" data-type="tab-section">
                <p class="text-xl font-bold mb-4">Horario</p>
                <div class="grid gap-2 md:gap-x-8 lg:gap-x-10 w-100 px-100">
                    @if (count($generalInfo->schedule) > 0)
                        <p class="font-bold">Clave</p>
                        <p class="font-bold">Nombre</p>
                        <p class="font-bold">Creditos</p>
                        <hr class="text-gray-light col-span-3">
                        @foreach ($generalInfo->schedule as $subject)
                            @php
                                $scheduleCredits = $scheduleCredits ?? 0;
                                $scheduleCredits += $subject->credits;
                            @endphp
                            <p>{{$subject->key}}</p>
                            <p>{{$subject->name}}</p>
                            <p>{{$subject->credits}}</p>
                        @endforeach
                    @else
                        <p>Actualmente no estas cursando ninguna materia</p>
                    @endif
                    <hr class="text-gray-light col-span-3">
                    <p class="font-bold col-span-3 mt-3">Total de creditos: <span class="font-normal">{{$scheduleCredits ?? 0}}</span></p>
                </div>
            </div>
            {{-- <hr class="text-gray-lightest my-4"> --}}
            {{-- Seccion Informacion general --}}
            <div class="flex flex-col" data-tab-section="Información general" data-type="tab-section">
                <p class="text-xl font-bold mb-4">Información general</p>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 lg:gap-4">
                    <div class="flex flex-col">
                        <p class="font-bold">Carrera</p>
                        <p class="">{{$generalInfo->career}}</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold">Especialidad</p>
                        <p class="">{{$generalInfo->specialty}}</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold">Semestre actual</p>
                        <p class="">{{$generalInfo->semester}}</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold">Creditos acumulados</p>
                        <p class="">{{$generalInfo->accumulatedCredits}}</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold">Creditos restantes</p>
                        <p class="">{{$generalInfo->remainingCredits}}</p>
                    </div>
                </div>
            </div>
            {{-- <hr class="text-gray-lightest my-4"> --}}
            {{-- Seccion Materias --}}
            <div class="flex flex-col" data-tab-section="Materias" data-type="tab-section">
                <p class="text-xl font-bold mb-4">Materias</p>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 lg:gap-4">
                    <div class="flex flex-col">
                        <p class="font-bold">Total de materias</p>
                        <p class="">{{$generalInfo->totalSubjects}}</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold">Materias cursadas</p>
                        <p class="">{{$generalInfo->coursedSubjects ?? '0'}}</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold">Materias restantes</p>
                        <p class="">{{$generalInfo->remainingSubjects ?? '0'}}</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold">Materias activas sin cursar</p>
                        <p class="">{{$generalInfo->unlockedSubjects ?? '0'}}</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold">Materias cursando</p>
                        <p class="">{{$generalInfo->coursingSubjects ?? '0'}}</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold">Materias bloqueadas</p>
                        <p class="">{{$generalInfo->blockedSubjects ?? '0'}}</p>
                    </div>
                </div>
            </div>
            {{-- <hr class="text-gray-lightest my-4"> --}}
            {{-- Seccion Creditos --}}
            <div class="flex flex-col" data-tab-section="Creditos" data-type="tab-section">
                <p class="text-xl font-bold mb-4">Creditos</p>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 lg:gap-4">
                    <div class="flex flex-col">
                        <p class="font-bold">Total de créditos</p>
                        <p class="">{{$generalInfo->totalCredits}}</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold">Estructura genérica</p>
                        <p class="">{{$generalInfo->genericStructure}}</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold">Residencias</p>
                        <p class="">{{$generalInfo->residencesCredits}}</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold">Servicio social</p>
                        <p class="">{{$generalInfo->socialServiceCredits}}</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold">Otros</p>
                        <p class="">{{$generalInfo->otherCredits}}</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="font-bold">Especialidad</p>
                        <p class="">{{$generalInfo->specialtyCredits}}</p>
                    </div>
                </div>
            </div>
        </div>
    </x-controls.tab>
</div>
