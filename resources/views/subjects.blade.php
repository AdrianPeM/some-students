    <div class="subjects-container flex mx-auto max-w-full gap-x-2 text-xs overflow-x-auto">
        @for ($i = 1; $i <= $subjectsObj->semesters; $i++)
            <div class="subjects-column flex flex-col justify-start gap-y-2">
                <x-controls.modal id='{{$i}}' title="Semestre {{$i}}" class="cursor-pointer justify-center">
                    <p class="text-base font-bold text-center border-b-2 {{$semester == $i ? 'border-blue-400':'border-transparent'}}">Semestre {{$i}}</p>
                    <x-slot name="content">
                        <div class="flex flex-col flex-1 text-base">
                            <div class="flex  items-center gap-2">
                                <input type="radio" id="completed" name="status" value="completed">
                                <label for="completed">Cursada</label>
                            </div>
                            <div class="flex items-center gap-2">
                                <input type="radio" id="studying" name="status" value="studying">
                                <label for="studying">Cursando</label>
                            </div>
                            <div class="flex items-center gap-2">
                                <input type="radio" id="active" name="status" value="active">
                                <label for="active">Sin cursar</label>
                            </div>
                        </div>
                    </x-slot>
                    <x-slot name="footer">
                        <x-button data-type="close-modal" data-close="overlay-modal-{{$i}}" variant="outlined">Cancel</x-button>
                        <x-button class="ml-4">Save</x-button>
                    </x-slot>
                </x-controls.modal>
                
                @foreach ($subjectsObj->{$i} as $subject)
                    <x-subjects-grid.subject :subject="$subject" :status="$subject->status"/>
                @endforeach
            </div>
        @endfor
    </div>