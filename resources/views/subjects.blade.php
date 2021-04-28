<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Servicio Social') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($subjects as $subject)
                        {{-- <p>{{$subject->name}}</p> --}}
                        <x-subjects-grid.subject :id="$subject->id" :name="$subject->name" :status="$subject->status()->status"/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <button id="click">Click me</button>

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
</x-app-layout>
