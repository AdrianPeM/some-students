<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GeneralInformation;

class GeneralInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralInformation::truncate();

        GeneralInformation::insert([
            [
                'type' => 'extraescolares',
                'content' => '<p class="text-2xl font-bold mb-6">Extraescolares</p>
                <p class="font-bold">¿Qué es?<p>
                <p class="mt-4">Tiene como objetivo fomentar la participación del alumno en actividades cívicas, culturales, deportivas y recreativas que contribuyan a su formación integral y proyectarla a la comunidad.</p>
                <p class="mt-4">La actividad extraescolar es obligatoria a partir del año 2009, siendo un prerrequisito para cumplir otros trámites como el servicio social.</p>
                <p class="mt-4">El Instituto Tecnologico de Ciudad Juarez cuenta con espacios adecuados para la practica de diferentes disciplinas :</p>
                <ul class="mt-4" style="list-style:unset; margin:unset; padding: revert;"><li class="mt-4">Deportivas</li><ul style="list-style:unset; margin:unset; padding: revert;"><li>Acondicionamiento físico</li><li>Ajedrez</li><li>Atletismo</li><li>Basquetbol (Fem. y Var.)</li><li>Béisbol</li><li>Futbol Americano</li><li>Futbol Soccer (Fem. y Var.)</li><li>Judo</li><li>Natación</li><li>Tenis de Mesa</li><li>Voleibol (Fem. y Var.)</li></ul><li class="mt-4">Cívicas</li><ul style="list-style:unset; margin:unset; padding: revert;"><li>Banda de Guerra</li><li>Escolta de Bandera</li></ul>
                <li class="mt-4">Culturales</li><ul style="list-style:unset; margin:unset; padding: revert;"><li>Cine-Club</li><li>Danza Folklórica</li><li>Declamación</li><li>Dibujo Artístico</li><li>Escultura</li><li>Grupo Musical de Danza</li><li>Oratoria</li><li>Rondalla</li><li>Taller de Lectura</li><li>Teatro</li></ul></ul>
                <p class="mt-4">Además, se parte de las liebres del Tecnológico de Juárez y representa orgullosamente a tu institución en las diversas actividades y eventos cívicos, culturales, deportivos y recreativos donde se participa, como:</p>
                <ul class="mt-4" style="list-style:unset; margin-top: 1rem; padding: revert;"><li>Eventos Prenacionales y Nacionales Deportivos de los Institutos Tecnológicos.</li>
                <li>Universiadas Estatales, Regionales y Nacionales.</li>
                <li>Intramuros y ligas deportivas.</li>
                <li>Programas "Martes de las Artes" y "Jueves Culturales" del ITCJ.</li>
                <li>Encuentros Nacionales de Bandas de Guerra y Escoltas de Bandera de los Institutos Tecnológicos.</li>
                <li>Festivales Nacionales de Arte y Cultura de los Institutos Tecnológicos.</li></ul>
                <p class="font-bold mt-4">¿Cómo realizarlo?</p>
                <p class="mt-4">Es recomendable que acredites tus actividades extraescolares en los primeros semestres y no lo aplaces.</p>
                <p class="mt-4">Es necesario realizar dos semestres de actividades, puedes hacerlo en diferentes actividades o en la misma.</p>
                <p class="mt-4">En el siguiente <a class="underline text-secondary" href="http://extraescolaresitcj.net/Home" target="_blank">enlace</a> puedes ver las actividades disponibles para registrarte.</p>
                <p class="mt-4"><a class="underline text-secondary" href="https://www.facebook.com/Deportes-y-Actividades-Culturales-del-ITCJ-331746827282526" target="_blank">Deportes y actividades culturales del ITCJ</a> en Facebook.</p>
                <p class="font-bold mt-4">Al concluir</p>
                <p class="mt-4">Al finalizar el semestre el encargado de la actividad te entregará una constancia de aprobación del semestre.</p>
                <p class="mt-4">Una vez completados los dos semestres debes entregar las dos constancias en la oficina de ____ para que se haga captura de tu acreditación de actividades extraescolares.</p>
                '
            ], [
                'type' => 'actividades complementarias',
                'content' => '<p class="text-2xl font-bold mb-6">Actividades complementarias</p>
                <p class="font-bold">¿Qué es?<p>
                <p class="mt-4">Son todas aquellas actividades que realiza el estudiante en beneficio de su formación integral con el objetivo de complementar sus competencias profesionales.</p>
                <p class="mt-4">Las actividades complementarias pueden ser: tutorías, actividades extraescolares, proyectos de investigación, participación en eventos académicos, productividad laboral, emprendedurismo, fomento a la lectura, construcción de prototipos y desarrollo tecnológico, conservación al medio ambiente y participación en ediciones, o aquellas que defina el comité académico.</p>
                <p class="mt-4"><b>Puntos importantes</b></p>
                <ul class="list-decimal pl-4 mt-4">
                <li>Las actividades complementarias se anuncian a través de los departamentos correspondientes, de acuerdo a su Programa Institucional de Innovación y Desarrollo.</li>
                <li>Para cada una de las actividades complementarias autorizadas por el plantel, no deben de tener más de 2 créditos.</li>
                <li>La Lengua Extranjera no es actividad complementaria.</li>
                <li>Para que se acredite una actividad complementaria es indispensable que se cubran el 100% de las evidencias y el Departamento responsable de la actividad expedirá la constancia de acreditación, quién entregará original al Departamento de Servicios Escolares.</li>
                </ul>
                <p class="mt-4">Para la acreditación de actividades complementarias es indispensable curir el 100% de las evidencias, el Departamento responsable de la actividad expedira la constancia de acreditacion, a su vez entregara al Departamento de Servicios escolares.</p>
                <p class="mt-4">Las actividades cursadas deben ser firmadas y aprobadas por el encargado, o segun sea el caso acudir al Departamento correspondiente.</p>
                <p class="mt-4">Si asistes a conferencias tu profesor puede aprobar la asistencia a la actividad, o puedes buscar a un responsable que pueda validar tu asistencia.</p>
                <p class="mt-4">Para la acreditación de tus actividades complementarias deber tener copia de tu karnet y entregar el original en el departamento de tu carrera.</p>
                <p class="mt-4"><b>Valor curricular:</b> 5 créditos (cada crédito equivale a 20 horas)</p>
                <p><b>Periodo de realizacion:</b> Dentro de los primeros 6 semestres</p>
                <p><b>Total de horas a cumplir:</b> 100 horas</p>
                '
            ], [
                'type' => 'servicio social',
                'content' => '<p class="text-2xl font-bold mb-2 mb-6">Servicio social<p>
                <p class="font-bold">¿Qué es?<p>
                <p class="mt-4">El presente lineamiento está fundamentado en el Capítulo VII, artículo 53, 55 y 91
                de la Ley reglamentaria del artículo 5 de la Constitución de los Estados Unidos
                Mexicanos. Última Reforma DOF 19-08-2010, y Capítulo I, artículo 3, fracción III,
                Capítulo II, artículo 9, artículo 10 y artículo 11, fracción II, del Reglamento para la
                Prestación del Servicio Social de los Estudiantes de las Instituciones de Educación
                Superior en la República Mexicana. D.O.F. 30 de marzo de 1981.</p>
                <p class="mt-4">Se entiende por servicio social el trabajo de carácter temporal y obligatorio, que
                institucionalmente presten y ejecuten los estudiantes en beneficio de la sociedad.</p>
                <p class="mt-4">Los estudiantes de los Institutos Tecnológicos del SNEST prestarán el servicio
                social, para cumplir con los créditos del plan de estudios.</p>
                <p class="mt-4">La prestación del Servicio Social puede realizarse en dependencias públicas,
                gubernamentales, no gubernamentales, organismos privados que cuenten con
                programas de asistencia social y desarrollo comunitario establecidos en el Plan
                Nacional de Desarrollo 2007-2012.</p>
                <p class="mt-4">El Servicio Social tiene un valor de 10 créditos en los planes de estudio diseñados
                por competencias profesionales y será sujeto a evaluación por parte de la
                dependencia en donde se preste el servicio para asignar una valoración numérica.
                </p>
                <p class="font-bold mt-4">Requisitos</p>
                <ul class="list-disc pl-4 mt-4">
                <li>Tener aprobado el 70% de los creditos</li>
                <li>La duración del Servicio Social es no menor de 6 meses ni mayor de 2 años.</li>
                </ul>
                <p class="font-bold mt-4">Proceso de Realización</p>
                <ul class="list-disc pl-4 mt-4">
                <li>El estudiante es responsable de solicitar la realización del servicio social, en el Departamento de Gestión Tecnológica y Vinculación o el departamento correspondiente</li>
                <li>Si realizas el servicio social de forma externa debes entregar a la dependencia la carta de presentación emitida por el Departamento de Gestión Tecnológica y Vinculación.</li>
                <li>El responsable del programa de servicio social evaluará al prestador, de manera bimestral en el Formato de Evaluación del Servicio Social, que el prestador entregará al Departamento de Gestión Tecnológica y Vinculación</li>
                <li>Entrega al Departamento de Gestión Tecnológica y Vinculación el formato de Evaluación de Servicio Social en un plazo no mayor de 20 días hábiles, después de haber concluido el mismo, de lo contrario es susceptible de no acreditarlo</li>
                <li>Al finalizar el Servicio Social entregará la carta de terminación de servicio social al Departamento de Gestión Tecnológica y Vinculación para integrarlo a su expediente quien emitirá la constancia de liberación con la calificación correspondiente y la turnará al Departamento de Servicios Escolares.</li>
                </ul>
                '
            ], [
                'type' => 'residencias',
                'content' => '<p class="text-2xl font-bold mb-6">Residencias</p>
                <p class="font-bold">¿Qué es?<p>
                <p class="mt-4">Puedes ver el proceso completo en el siguiente <a class="underline text-secondary" href="https://residencia.serviciosysistemasit.com/" target="_blank">enlace</a>.</p>
                <p class="mt-4">Es una estrategia educativa de carácter curricular, que permite al estudiante emprender un proyecto teórico-práctico, analítico, reflexivo, crítico y profesional; para resolver un problema específico de la realidad social y productiva, para fortalecer y aplicar sus competencias profesionales.</p>
                <p class="mt-4">La residencia profesional se podrá acreditar mediante la realización de proyectos internos o externos con carácter local, regional, nacional o internacional, en cualquiera de los siguientes ámbitos:</p>
                <p class="mt-4">a) Sectores social, productivo de bienes y servicios</p>
                <p>b) Innovación y Desarrollo Tecnológico</p>
                <p>c) Investigación</p>
                <p>d) Diseño y/o construcción de equipo</p>
                <p>e) Evento Nacional de Innovación Tecnológica participantes en la etapa nacional</p>
                <p>f) Veranos científicos o de investigación</p>
                <p>g) Proyectos propuestos por la academia que cuente con la autorización del Departamento Académico</p>
                <p>h) Entre otros. </p>
                <p class="mt-4"><b>Opciones para selección de proyecto de residencias</b></p>
                <ol class="list-decimal pl-4 mt-4">
                <li>Selección en un banco de proyectos de residencias relativos a su carrera o interdisciplinarios. </li>
                <li><b>Propuesta de un proyecto</b> por parte del estudiante al coordinador de carrera para que sea avalado por la academia y autorización el Departamento Académico.</li>
                <li>En el caso de que el estudiante sea trabajador de alguna empresa, organismo o dependencia <b>podrá proponer su propio proyecto de residencia profesional</b>a la División de Estudios Profesionales para que sea autorizado por el Jefe de Departamento Académico.</li>
                </ol>
                <p class="font-bold mt-4">Requisitos para iniciar residencias</p>
                <ul class="list-disc pl-4 mt-4">
                <li>Tener acreditado el servicio social.</li>
                <li>Tener acreditado las <b>actividades complementarias</b>.</li>
                <li>Tener aprobado al menos el <b>80%</b> de créditos de su plan de estudio. </li>
                <li>No contar con ninguna asignatura en condiciones de <b>"Curso Especial"</b>. </li>
                </ul>
                <p class="mt-4"><b>Puntos importantes</b></p>
                <ul class="list-disc pl-4 mt-4">
                <li>El proyecto de residencia profesional podrá realizarse de manera individual, grupal o interdisciplinaria; dependiendo de los requerimientos y las características del proyecto de la empresa, organismo o dependencia.</li>
                <li>La asignación de proyectos de residencia profesional, se debe realizar en periodos previos a la elección de la carga académica del inicio al periodo escolar y sólo podrá autorizarse en periodos intermedios si la empresa, organismo o dependencia demanda la participación de residentes, siempre y cuando se tenga el tiempo suficiente para no afectar su desempeño y se cuenta con asesor interno disponible que tenga las competencias profesionales acordes al proyecto que se le asigne para atender la demanda.</li>
                <li>En caso de cancelación de residencia profesional debe comunicar a la División de Estudios Profesionales, al Departamento de Gestión Tecnológica y Vinculación o el correspondiente en los Institutos Tecnológicos Descentralizados, así como al Departamento de Servicios Escolares.</li>
                <li>En el caso de que se requiera cursar la residencia profesional por segunda ocasión y existen causas justificadas fuera del alcance del residente, será necesario proponer una segunda asignación de proyecto de residencia profesional.</li>
                </ul>
                <p class="mt-4"><b>Finalización de residencias</b></p>
                <p class="mt-4">Se considerará que una residencia profesional se ha concluido cuando el residente entregue a la División Estudios Profesionales la siguiente documentación:<p>
                <ul class="list-disc pl-4 mt-4">
                <li>Formato de evaluación del proyecto firmado por los asesores interno(s) y externo(s).</li
                <li>Copia digital de su informe técnico.</li>
                <li>Copia del acta de calificación de residencia profesional emitida por el Departamento de Servicios Escolares.</li>
                </ul>
                <p class="mt-4"><b>Valor curricular:</b> 10 créditos</p>
                <p><b>Duración:</b> 4 meses (mínimo) y 6 meses (máximo)</p>
                <p><b>Total de horas a cumplir:</b> 500 horas</p>
                <p class="mt-4"><b>Estructura del anteproyecto</b></p>
                <p>El documento del anteproyecto debe estructurarse de la siguiente manera: </p>
                <p>a) Nombre y objetivo del proyecto </p>
                <p>b) Justificación </p>
                <p>c) Cronograma preliminar de actividades </p>
                <p>d) Descripción detallada de las actividades</p>
                <p>e) Lugar donde se realizará el proyecto </p>
                <p>f) Información sobre la empresa, organismo o dependencia para la que se desarrollará el proyecto. </p>
                <p class="mt-4"><b>Estructura del informe técnico</b></p>
                <p>El documento del informe técnico debe estructurarse de la siguiente manera: </p>
                <p>a) Portada </p>
                <p>b) Justificación</p>
                <p>c) Objetivos </p>
                <p>d) Problemas a resolver, priorizándolos </p>
                <p>e) Procedimiento y descripción de las actividades realizadas </p>
                <p>f) Resultados, planos, gráficas, prototipos, maquetas, programas, entre otros </p>
                <p>g) Conclusiones y recomendaciones </p>
                <p>h) Competencias desarrolladas y/o aplicadas </p>
                <p>i) Referencias bibliográficas y virtuales. </p>
                '
            ]
        ]);
    }
}
