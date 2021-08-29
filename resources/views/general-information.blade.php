<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-primary">
            {{ __('Información General') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-white overflow-hidden border border-gray-lightest shadow sm:rounded-lg">
                <div class="flex flex-col bg-white">
                    @php
                        $sections = ['Extraescolares'=>true, 'Actividades Complementarias'=>false,
                                'Servicio Social'=>false, 'Residencias'=>false];
                    @endphp
                    <x-controls.tab :sections="$sections" class="overflow-auto">
                        <div class="px-2 py-5 sm:px-6">
                            {{-- Seccion Horario --}}
                            <div class="flex flex-col" data-tab-section="Extraescolares" data-type="tab-section">
                                {!!$generalInformation["extraescolares"][0]->content!!}
                            </div>
                            <div class="flex flex-col" data-tab-section="Actividades Complementarias" data-type="tab-section">
                                {!!$generalInformation["actividades complementarias"][0]->content!!}
                            </div>
                            <div class="flex flex-col" data-tab-section="Servicio Social" data-type="tab-section">
                                {!!$generalInformation["servicio social"][0]->content!!}
                            </div>
                            <div class="flex flex-col" data-tab-section="Residencias" data-type="tab-section">
                                {!!$generalInformation["residencias"][0]->content!!}
                            </div>
                        </div>
                    </x-controls.tab>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
