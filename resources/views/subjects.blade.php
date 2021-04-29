    <div class="subjects-container flex mx-auto max-w-full gap-x-2 text-xs overflow-x-auto">
        @for ($i = 1; $i <= $subjectsObj->semesters; $i++)
            <div class="subjects-column flex flex-col justify-start gap-y-2">
                @foreach ($subjectsObj->{$i} as $subject)
                    <x-subjects-grid.subject :subject="$subject" :id="$subject->id" :name="$subject->name" :status="$subject->status()->status"/>
                @endforeach
            </div>
        @endfor
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', () =>{
            const subjBtn = document.querySelectorAll('.subj-btn')
            const closeBtn = document.querySelectorAll('.close-modal')

            const toggleModal = element => {
                document.getElementById(`overlay-${element.dataset["id"]}`).classList.toggle('hidden')
                document.getElementById(`overlay-${element.dataset["id"]}`).classList.toggle('flex')
            }
            
            Array.from(subjBtn).map( element => {
                element.addEventListener('click', function(event) {toggleModal(this)})
            })
            Array.from(closeBtn).map( element => {
                element.addEventListener('click', function(event) {toggleModal(this)})
            })
        })
    </script>
