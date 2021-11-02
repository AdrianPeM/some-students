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
                                'Servicio Social'=>false, 'Residencias'=>false, 'Contacto ITCJ'=>false];
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
                            <div class="flex flex-col" data-tab-section="Contacto ITCJ" data-type="tab-section">
                                <p class="text-2xl font-bold mb-6">Contactos ITCJ</p>
                                <p class="mt-4">Estos son algunos de los correos de los diferentes departamentos que hay en el ITCJ.</p>
                                <p class="mt-4"></p>
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="text-left">Departamento</th>
                                            <th class="text-left">Responsable</th>
                                            <th class="text-left">Correo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Planeacion, programacion y presupuestacion</td>
                                            <td>Daniel Renteria Barraza</td>
                                            <td>jefatura_pl@itcj.edu.mx</td>
                                        </tr>
                                        <tr>
                                            <td>Comunicacion y Difusion</td>
                                            <td>Norberto Lopez Garza</td>
                                            <td>jefatura_cyd@itcj.edu.mx</td>
                                        </tr>
                                        <tr>
                                            <td>Servicios Escolares</td>
                                            <td>Maria Magdalena Gomez Garcia</td>
                                            <td>jefatura_se@itcj.edu.mx</td>
                                        </tr>
                                        <tr>
                                            <td>Gestion Tecnologica y Vinculacion</td>
                                            <td>Maria Magdalena Gomez Garcia</td>
                                            <td>jefatura_gtyv@itcj.edu.mx</td>
                                        </tr>
                                        <tr>
                                            <td>Act Extraescolares</td>
                                            <td>Luis Esteban Villareal Perez</td>
                                            <td>jefatura_ext@itcj.edu.mx</td>
                                        </tr>
                                        <tr>
                                            <td>Centro de Informacion (Biblioteca)</td>
                                            <td>Jessika Elvira Martinez Urias</td>
                                            <td>jefatura_ci@itcj.edu.mx</td>
                                        </tr>
                                        <tr>
                                            <td>Economico Administrativo</td>
                                            <td>Claudia Cervantes Montoya</td>
                                            <td>jefatura_cead@itcj.edu.mx</td>
                                        </tr>
                                        <tr>
                                            <td>Ciencias Basicas</td>
                                            <td>Anselmo Meza Galvan</td>
                                            <td>jefatura_cbas@itcj.edu.mx</td>
                                        </tr>
                                        <tr>
                                            <td>Metal-Mecanica</td>
                                            <td>Pedro Valentin Gutierrez</td>
                                            <td>jefatura_mm@itcj.edu.mx</td>
                                        </tr>
                                        <tr>
                                            <td>Electrica y Electronica</td>
                                            <td>Francisco Castañeda Fierro</td>
                                            <td>jefatura_eem@itcj.edu.mx</td>
                                        </tr>
                                        <tr>
                                            <td>Desarrollo Academico</td>
                                            <td>Erika Gisela Cruz Verde</td>
                                            <td>jefatura_da@itcj.edu.mx</td>
                                        </tr>
                                        <tr>
                                            <td>Sistemas y Computacion</td>
                                            <td>Elisa Dania Molina Portillo</td>
                                            <td>jefatura_syc@itcj.edu.mx</td>
                                        </tr>
                                        <tr>
                                            <td>Ingenieria Industrial</td>
                                            <td>Tomas F. Limones Meraz</td>
                                            <td>jefatura_ii@itcj.edu.mx</td>
                                        </tr>
                                        <tr>
                                            <td>Division de Estudios Profesionales</td>
                                            <td>Yadira Dozal Assmar</td>
                                            <td>jefatura_dep@itcj.edu.mx</td>
                                        </tr>
                                        <tr>
                                            <td>Posgrado e Investigacion</td>
                                            <td>Lizzete Alvarado Tarango</td>
                                            <td>jefatura_depi@itcj.edu.mx</td>
                                        </tr>
                                        <tr>
                                            <td>Recursos Humanos</td>
                                            <td>Anilu Flores Regalado</td>
                                            <td>jefatura_rh@itcj.edu.mx</td>
                                        </tr>
                                        <tr>
                                            <td>Recursos Financieros</td>
                                            <td>Genoveva Cruz Hernandez</td>
                                            <td>jefatura_rf@itcj.edu.mx</td>
                                        </tr>
                                        <tr>
                                            <td>Recursos Materiales y Servicios</td>
                                            <td>Jose Alanis Villaseñor</td>
                                            <td>jefatura_rmys@itcj.edu.mx</td>
                                        </tr>
                                        <tr>
                                            <td>Mantenimiento y Equipo</td>
                                            <td>Hector Alfredo Sanchez Sanchez</td>
                                            <td>jefatura_mantto@itcj.edu.mx</td>
                                        </tr>
                                        <tr>
                                            <td>Centro de Computo</td>
                                            <td>Jose Hilario Partida Torres</td>
                                            <td>jefatura_cc@itcj.edu.mx</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </x-controls.tab>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
