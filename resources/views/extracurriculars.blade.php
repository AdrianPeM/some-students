<x-app-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/views/extracurriculars/extracurriculars.css') }}">
    </x-slot>

    <x-slot name="header">
        <h2 class="font-bold text-3xl text-gray-900">
            {{ __('Actividades extraescolares') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col p-6 bg-white border-b border-gray-200">
                    <x-controls.accordion id='1' title="Primer Accordeon">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, repellendus saepe ex quas accusamus earum doloremque voluptatem inventore? Hic et dolorum consequatur ea mollitia repellat nulla optio voluptatibus, eligendi blanditiis?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, repellendus saepe ex quas accusamus earum doloremque voluptatem inventore? Hic et dolorum consequatur ea mollitia repellat nulla optio voluptatibus, eligendi blanditiis?</p>
                    </x-controls.accordion>

                    <x-controls.accordion id='2' title="Segundo Accordeon">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, repellendus saepe ex quas accusamus earum doloremque voluptatem inventore? Hic et dolorum consequatur ea mollitia repellat nulla optio voluptatibus, eligendi blanditiis?</p>
                    </x-controls.accordion>

                    <x-controls.modal id='1' title="Mi modal" class="p-4 bg-gray-600">
                        Modal 1
                        <x-slot name="content">
                            <div class="flex flex-col bg-gray-300">
                                <div class="h-16 w-16 bg-red-300 rounded m-2"></div>
                                <div class="h-16 w-16 bg-red-300 rounded m-2"></div>
                                <div class="h-16 w-16 bg-red-300 rounded m-2"></div>
                            </div>
                        </x-slot>
                        <x-slot name="footer">
                            <x-button data-type="close-modal" data-close="overlay-modal-1" variant="outlined">Cancel</x-button>
                            <x-button class="ml-4">Save</x-button>
                        </x-slot>
                    </x-controls.modal>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
