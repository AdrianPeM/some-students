<div class="flex flex-col mx-auto max-w-full">
    <div class="subjects-container flex gap-x-2 text-xs overflow-x-auto">
        {{-- {!!session('infoSubjStatus') ?? ''!!} --}}
        @for ($index = 1; $index <= $subjectsObj->semesters; $index++)
            <div class="subjects-column flex flex-col justify-start gap-y-2">
                @include('components.subjects-grid.semester')
                @foreach ($subjectsObj->{$index} as $subject)
                    <x-subjects-grid.subject :subject="$subject" :status="$subject->status"/>
                @endforeach
            </div>
        @endfor
    </div>
    <div class="flex mt-4 gap-x-4">
        <div class="flex flex-col items-start">
            <div class="flex items-center mb-2">
                <div class="w-6 h-6 bg-gray-lightest mr-2 hover:bg-gray-light"></div>
                <p>Bloqueada</p>
            </div>
            <div class="flex items-center mb-2">
                <div class="w-6 h-6 bg-blue-lightest mr-2 hover:bg-blue-light"></div>
                <p>Desbloqueada</p>
            </div>
            <div class="flex items-center mb-2">
                <div class="w-6 h-6 bg-purple-lightest mr-2 hover:bg-purple-light"></div>
                <p>Cursando</p>
            </div>
        </div>
        <div class="flex flex-col items-start">
            <div class="flex items-center mb-2">
                <div class="w-6 h-6 bg-green-lightest mr-2 hover:bg-green-light"></div>
                <p>Cursada</p>
            </div>
            <div class="flex items-center mb-2">
                <div class="w-6 h-6 bg-yellow-lightest mr-2 hover:bg-yellow-light"></div>
                <p>Reprobada</p>
            </div>
            <div class="flex items-center mb-2">
                <div class="w-6 h-6 bg-red-lightest mr-2 hover:bg-red-light"></div>
                <p>Curso Especial</p>
            </div>
        </div>
    </div>
</div>