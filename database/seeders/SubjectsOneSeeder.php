<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Specialty;
use App\Models\Subject;

class SubjectsOneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialty = Specialty::create([
            'name' => 'Desarrollo de Software Avanzado',
            'career_id' => '1',
            'img_path' => '/images/specialties/softwareDevelopment.jpg',
            'description' => '<p>Esta especialidad se enfoca en el desarrollo de software que utiliza tecnologías y
            técnicas que han emergido en los últimos años, las cuales permiten desarrollar
            software óptimo, escalable, mantenible, multiplataforma y seguro.</p>
            <p>En esta especialidad aprenderás a no solo desarrollar software para computadoras personales, sino también para dispositivos móviles; aprenderás la Arquitectura Orientada a Servicios, que te
            permitirá desarrollar aplicaciones escalables y óptimas; aprenderás a utilizar herramientas de Análisis Inteligente de Datos, las cuales
            te permitirán descubrir patrónes y tendencias en grandes grupos de datos; aprenderás a integrar diferentes tecnologías emergentes para
            la creación de infraestructuras gestionadas en la nube y la utilización de servicios web.</p>'
        ]);

        $specialty = Specialty::create([
            'name' => 'Seguridad Informática y Redes',
            'career_id' => '1',
            'img_path' => '/images/specialties/networks.jpg',
            'description' => '<p>Esta especialidad se enfoca en las redes de computadoras y la seguridad dentro de los sistemas de información. Estas ramas son importantes ya
            que prácticamente las redes mantienen a todo el mundo conectado y la seguridad en estas redes es vital hoy en dia
           para proteger la información y mantenerla íntegra.</p>'
        ]);

        $subject = Subject::create([
            'key' => '1EA',
            'name' => 'Calculo Diferencial',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '1',
            'competencies' => '<ul>
            <li>Plantea y resuelve problemas utilizando las definiciones de límite y derivada de funciones de una variable para la elaboración de modelos matemáticos aplicados.</li>
                </ul><ul>
                <li>Utiliza la aritmética para realizar operaciones.</li>
                <li>Emplea el álgebra para simplificar expresiones.</li>
                <li>Resuelve ecuaciones y sistemas de ecuaciones.</li>
                <li>Utiliza la trigonometría para resolver problemas.</li>
                <li>Describe las ecuaciones de los principales lugares geométricos.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Números reales.</li>
                <li><strong>Unidad 2.</strong> Funciones.</li>
                <li><strong>Unidad 3.</strong> Límites y continuidad.</li>
                <li><strong>Unidad 4.</strong> Derivadas.</li>
                <li><strong>Unidad 5.</strong> Aplicaciones de la derivada.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '2EA',
            'name' => 'Fundamentos de Programación',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '1',
            'competencies' => '<ul>
            <li>Aplica algoritmos y lenguajes de programación para diseñar e implementar soluciones a problemáticas del entorno.</li>
                </ul><ul>
                <li>Ninguna.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Diseño algorítmico.</li>
                <li><strong>Unidad 2.</strong> Introducción a la programación.</li>
                <li><strong>Unidad 3.</strong> Control de flujo.</li>
                <li><strong>Unidad 4.</strong> Organización de datos.</li>
                <li><strong>Unidad 5.</strong> Modularidad.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '3EA',
            'name' => 'Taller de Ética',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '1',
            'competencies' => '<ul>
            <li>Desarrolla conciencia sobre el significado y sentido de la Ética para orientar su comportamiento en el contexto social y profesional.</li>
            <li>Reflexiona sobre el significado de la Ética y sus implicaciones en el comportamiento para orientar su práctica en los diversos ámbitos y contextos.</li>
            <li>Relaciona la ética con el desarrollo de la ciencia y la tecnología para determinar sus implicaciones sociales.</li>
            <li>Adquiere el compromiso al proponer soluciones a problemas mediante la aplicación de la ética profesional, para contribuir a la mejora de los ámbitos del desempeño humano.</li>
            <li>Fundamente la práctica ética del ejercicio profesional en la toma de decisiones para la solución de problemas en las instituciones y organizaciones.</li>
                </ul><ul>
                <li>No aplica por el momento por la dificultad para evaluarlas al inicio.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> El sentido de aprender sobre ética.</li>
                <li><strong>Unidad 2.</strong> La ética en la ciencia y la tecnología.</li>
                <li><strong>Unidad 3.</strong> Ética en el ejercicio de la profesión.</li>
                <li><strong>Unidad 4.</strong> La ética en las instituciones y organizaciones.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '4EA',
            'name' => 'Matemáticas Discretas',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '1',
            'competencies' => '<ul>
            <li>Comprende y aplica los conceptos básicos de lógica matemática, relaciones, grafos y árboles para aplicarlos a modelos que resuelvan problemas computacionales.</li>
                </ul><ul>
                <li>Ninguna.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Sistemas numéricos.</li>
                <li><strong>Unidad 2.</strong> Conjuntos y relaciones.</li>
                <li><strong>Unidad 3.</strong> Lógica matemática.</li>
                <li><strong>Unidad 4.</strong> Algebra booleana.</li>
                <li><strong>Unidad 5.</strong> Teoría de grafos.</li>
                <li><strong>Unidad 6.</strong> Árboles y redes.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '5EA',
            'name' => 'Taller de Administración',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '1',
            'competencies' => '<ul>
            <li>Comprender y aplicar los principios generales de la administración y su proceso en las estructuras y funciones fundamentales de las organizaciones acorde a las necesidades de la misma, para contribuir sustantivamente con los procesos de planeación y toma de decisiones, con una visión crítica del contexto empresarial.</li>
                </ul><ul>
                <li>Compromiso ético.</li>
                <li>Habilidades para la comprensión de la lectura y redacción de textos.</li>
                <li>Capacidad para trabajar en equipo.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción.</li>
                <li><strong>Unidad 2.</strong> Administración y el entorno en las empresas.</li>
                <li><strong>Unidad 3.</strong> Toma de decisiones.</li>
                <li><strong>Unidad 4.</strong> Mecánica del proceso administrativo.</li>
                <li><strong>Unidad 5.</strong> Dinámica del proceso administrativo.</li>
                <li><strong>Unidad 6.</strong> Administración de proyectos.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '6EA',
            'name' => 'Fundamentos de Investigación',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '1',
            'competencies' => '<ul>
            <li>Aplica los elementos de la investigación documental para elaborar escritos académicos de su entorno profesional.</li>
                </ul><ul>
                <li>No aplica.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Conceptos básicos de fundamentos de investigación como proceso de construcción social.</li>
                <li><strong>Unidad 2.</strong> Herramientas de la comunicación oral y escrita en la investigación documental.</li>
                <li><strong>Unidad 3.</strong> Estudio del desarrollo de su profesión y su estado actual.</li>
                <li><strong>Unidad 4.</strong> Proceso de elaboración de una investigación documental.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '7EA',
            'name' => 'Tutorias',
            'credits' => '1',
            'career_id' => '1',
            'semester' => '1',
            'competencies' => '<ul>
            <li>Contribuir a mejorar el rendimiento académico de los estudiantes y coadyuvar en el logro de su formación integral, buscando incidir en la disminución de los índices de reprobación, de deserción y de rezago, para favorecer la eficiencia terminal.</li>
                </ul>
                <ul>
                    <li>No aplica.</li>
                </ul>
                <ul>
                <p><strong>Metas cualitativas</strong></p>
                <li>Conocer diversas formas de resolver sus problemas dentro del contexto escolar.</li>
                <li>Comprender las características del plan de estudios y las opciones de trayectoria.</li>
                <li>Adquirir técnicas adecuadas de lectura y comprensión.</li>
                <li>Desarrollar estrategias de estudio.</li>
                <li>Superar dificultades en el aprendizaje y en el rendimiento académico.</li>
                <li>Adaptarse e integrarse a la universidad y al ambiente escolar.</li>
                <li>Diseñar la trayectoria curricular más adecuada, de acuerdo con los recursos, capacidades y expectativas personales, familiares y del Instituto.</li>
                <li>Seleccionar actividades extraescolares que pueden mejorar su formación.</li>
                <li>Recibir retroalimentación en aspectos relacionados con su estabilidad emocional y su actitud como futuro profesional de la carrera.</li>
                <li>Conocer los apoyos y beneficios que puede obtener de las diversas instancias.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '1EB',
            'name' => 'Calculo Integral',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '2',
            'competencies' => '<ul>
            <li>Aplica la definición de integral y las técnicas de integración para resolver problemas de ingeniería.</li>
                </ul><ul>
                <li>Plantea y resuelve problemas utilizando las definiciones de límite y derivada de funciones de una variable para la elaboración de modelos matemáticos aplicados.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Teorema fundamental del cálculo.</li>
                <li><strong>Unidad 2.</strong> Métodos de integración e integral indefinida.</li>
                <li><strong>Unidad 3.</strong> Aplicaciones de la integral.</li>
                <li><strong>Unidad 4.</strong> Series.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '2EB',
            'name' => 'Programación Orientada a Objetos',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '2',
            'competencies' => '<ul>
            <li>Aplica el paradigma orientado a objetos para el desarrollo de aplicaciones que solucionen problemas del entorno.</li>
                </ul><ul>
                <li>Aplica las herramientas básicas de programación orientada a objetos, para modelar y desarrollar soluciones a diversos problemas del mundo real</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Entorno de desarrollo.</li>
                <li><strong>Unidad 2.</strong> Clases y objetos.</li>
                <li><strong>Unidad 3.</strong> Métodos.</li>
                <li><strong>Unidad 4.</strong> Herencia y polimorfismo.</li>
                <li><strong>Unidad 5.</strong> Arreglos.</li>
                <li><strong>Unidad 6.</strong> Archivos.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '3EB',
            'name' => 'Contabilidad Financiera',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '2',
            'competencies' => '<ul>
            <li>Conoce, analiza e interpreta la información financiera para la toma de decisiones empresariales.</li>
                </ul><ul>
                <li>Ninguna.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Conceptos Generales de la Contabilidad.</li>
                <li><strong>Unidad 2.</strong> Estados Financieros.</li>
                <li><strong>Unidad 3.</strong> Teoría de la Partida Doble.</li>
                <li><strong>Unidad 4.</strong> Sistemas de Registro.</li>
                <li><strong>Unidad 5.</strong> Análisis e Interpretación de la Información Financiera.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '4EB',
            'name' => 'Química',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '2',
            'competencies' => '<ul>
            <li>Comprende la estructura de la materia y su relación con las propiedades físicas y químicas, enfocadas a sus aplicaciones a los dispositivos eléctricos y electrónicos, así como a las técnicas requeridas para la construcción de equipos o sistemas electrónicos.</li>
                </ul><ul>
                <li>Ninguna.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Teoría cuántica y estructura atómica.</li>
                <li><strong>Unidad 2.</strong> Elementos químicos y su clasificación.</li>
                <li><strong>Unidad 3.</strong> Enlaces químicos.</li>
                <li><strong>Unidad 4.</strong> Reacciones químicas. </li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '5EB',
            'name' => 'Álgebra Lineal',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '2',
            'competencies' => '<ul>
            <li>Resuelve problemas de modelos lineales aplicados en ingeniería para la toma de decisiones
            de acuerdo a la interpretación de resultados utilizando matrices y sistemas de ecuaciones.
            Analiza las propiedades de los espacios vectoriales y las transformaciones lineales para
            vincularlos con otras ramas de las matemáticas y otras disciplinas.</li>
                </ul><ul>
                <li>Plantea y resuelve problemas utilizando las definiciones de límite y derivada de funciones
                de una variable para la elaboración de modelos matemáticos aplicados.</li>
                <li>Aplica la definición de integral y las técnicas de integración para resolver problemas de
                ingeniería.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Números complejos.</li>
                <li><strong>Unidad 2.</strong> Matrices y determinantes.</li>
                <li><strong>Unidad 3.</strong> Sistemas de ecuaciones
                lineales.</li>
                <li><strong>Unidad 4.</strong> Espacios vectoriales.</li>
                <li><strong>Unidad 5.</strong> Transformaciones lineales.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '6EB',
            'name' => 'Probabilidad y Estadística',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '2',
            'competencies' => '<ul>
            <li>Aplica los conceptos de la teoría de la probabilidad y estadística para organizar, clasificar, analizar e
            interpretar datos para la toma decisiones en aplicaciones de ingeniería biomédica, en computación y
            comunicaciones.</li>
                </ul><ul>
                <li>Conoce la teoría de conjuntos para definir el espacio muestral.</li>
                <li>Resuelve y grafica funciones algebraicas para interpretar su comportamiento.</li>
                <li>Calcula integrales definidas para determinar áreas bajo la curva.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Estadística descriptiva.</li>
                <li><strong>Unidad 2.</strong> Fundamentos de la Teoría de
                Probabilidad.</li>
                <li><strong>Unidad 3.</strong> Variables Aleatorias.</li>
                <li><strong>Unidad 4.</strong> Distribuciones de Probabilidad.</li>
                <li><strong>Unidad 5.</strong> Regresión lineal.</li>
                <li><strong>Unidad 5.</strong> Estadística aplicada.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '1EC',
            'name' => 'Calculo Vectorial',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '3',
            'competencies' => '<ul>
            <li>Aplica los principios y técnicas básicas del cálculo vectorial para resolver problemas de
            ingeniería del entorno.</li>
                </ul><ul>
                <li>Plantea problemas que requieren el concepto de función de una variable para el diseño de
                modelos matemáticos de problemas aplicados al ámbito profesional, mediante el uso de la derivada para su solución.</li>
                <liAplica los principios y técnicas del cálculo integral en la solución de problemas reales de
                la ingeniería en su entorno.></li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Vectores en el espacio.</li>
                <li><strong>Unidad 2.</strong> Curvas planas, ecuaciones
                paramétricas y coordenadas
                polares.</li>
                <li><strong>Unidad 3.</strong> Funciones vectoriales de una
                variable real.</li>
                <li><strong>Unidad 4.</strong> Funciones reales de varias
                variables.</li>
                <li><strong>Unidad 5.</strong> Integración múltiple.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '2EC',
            'name' => 'Estructura de Datos',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '3',
            'competencies' => '<ul>
            <li>Conoce, comprende y aplica eficientemente estructuras de datos, métodos de ordenamiento y búsqueda
            para la optimización del rendimiento de soluciones a problemas del mundo real.</li>
                </ul><ul>
                <li>Comprende y aplica los conceptos básicos de lógica matemática, relaciones, grafos y árboles
                para aplicarlos a modelos que resuelvan problemas computacionales.</li>
                <li>Aplica un lenguaje orientado a objetos para la solución de problemas.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a las estructuras de datos.</li>
                <li><strong>Unidad 2.</strong> Recursividad.</li>
                <li><strong>Unidad 3.</strong> Estructuras lineales.</li>
                <li><strong>Unidad 4.</strong> Estructuras no lineales.</li>
                <li><strong>Unidad 5.</strong> Métodos de ordenamiento.</li>
                <li><strong>Unidad 6.</strong> Métodos de búsqueda.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '3EC',
            'name' => 'Cultura Empresarial',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '3',
            'competencies' => '<ul>
            <li>Construye un plan de negocios para crear una empresa considerando el análisis de mercado, estudio
            técnico, organización, análisis financiero y estados financieros del proyecto.</li>
                </ul><ul>
                <li>SE REQUIERE LA COMPETENCIA DE CONTABILIDAD ADMINISTRATIVA, SE COLOCARÁ
                UNA VEZ REVISADA Y COMPLETADA ESA MATERIA</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Contexto de la empresa.</li>
                <li><strong>Unidad 2.</strong> Análisis de Mercado.</li>
                <li><strong>Unidad 3.</strong> Estudio técnico.</li>
                <li><strong>Unidad 4.</strong> Organización.</li>
                <li><strong>Unidad 5.</strong> Análisis Financiero y Estados financieros
                del proyecto.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '4EC',
            'name' => 'Investigación de Operaciones',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '3',
            'competencies' => '<ul>
            <li>Formula soluciones óptimas para generar una mejor alternativa para la toma de decisiones aplicando
            conceptos de los modelos matemáticos, técnicas y algoritmos.</li>
                </ul><ul>
                <li>Conocer y comprender los conceptos básicos de lógica matemática, relaciones, grafos y árboles para
                aplicarlos a modelos que resuelvan problemas de computación.</li>
                <li>Resuelve problemas de aplicación e interpretar las soluciones utilizando matrices y sistemas de
                ecuaciones lineales para las diferentes áreas de la ingeniería. Identificar las propiedades de los espacios
                vectoriales y las transformaciones lineales para describirlos, resolver problemas y vincularlos con otras
                ramas de las matemáticas.</li>
                <li>Plantea y resuelve problemas que requieren del concepto de función de una variable para modelar y
                de la derivada para resolver.</li>
                <li>Contextualiza el concepto de Integral así como discernir cuál método puede ser más adecuado para
                resolver una integral dada y resolverla usándolo.</li>
                <li>Seleccionar modelos probabilísticos, aplicar cálculos de inferencia estadística sobre datos y desarrollar
                modelos para la toma de decisiones en sistemas con componentes aleatorios.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Programación Lineal.</li>
                <li><strong>Unidad 2.</strong> Análisis de Redes.</li>
                <li><strong>Unidad 3.</strong> Programación no lineal.</li>
                <li><strong>Unidad 4.</strong> Teoría de inventarios.</li>
                <li><strong>Unidad 5.</strong> Líneas de Espera.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '5EC',
            'name' => 'Sistemas Operativos',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '3',
            'competencies' => '<ul>
            <li>Aplica los paradigmas de diseño de los sistemas operativos actuales y emergentes, para el manejo de
            los recursos del sistema.</li>
                </ul><ul>
                <li>Selecciona, diseña, implementa y manipula estructuras de datos que optimicen el rendimiento
                de aplicaciones de software, considerando la complejidad de los algoritmos utilizados.</li>
                <li>Comprende las distintas arquitecturas de computadoras, así como las filosofías de diseño para
                desarrollar aplicaciones compatibles con la tecnología más avanzada en sistemas de cómputo.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a los Sistemas Operativos.</li>
                <li><strong>Unidad 2.</strong> Administración de Procesos y del
                procesador.</li>
                <li><strong>Unidad 3.</strong> Administración de memoria.</li>
                <li><strong>Unidad 4.</strong> Administración de entrada/salida.</li>
                <li><strong>Unidad 5.</strong> Sistemas de archivos.</li>
                <li><strong>Unidad 6.</strong> Protección y seguridad.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '6EC',
            'name' => 'Física General',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '3',
            'competencies' => '<ul>
            <li>Comprender los fenómenos físicos en los que intervienen fuerzas, movimiento, trabajo, energía, así
            como los principios básicos de Óptica y Termodinámica, además comprende y aplica las leyes y
            principios fundamentales de la electricidad y el magnetismo.</li>
                </ul><ul>
                <li>Conocer el concepto de derivada, integrales, algebra vectorial y sus aplicaciones.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Estática.</li>
                <li><strong>Unidad 2.</strong> Dinámica de la partícula.</li>
                <li><strong>Unidad 3.</strong> Óptica.</li>
                <li><strong>Unidad 4.</strong> Introducción a la Termodinámica.</li>
                <li><strong>Unidad 5.</strong> Electrostática.</li>
                <li><strong>Unidad 6.</strong> Electrodinámica.</li>
                <li><strong>Unidad 7.</strong> Electromagnetismo.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '1ED',
            'name' => 'Ecuaciones Diferenciales',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '4',
            'competencies' => '<ul>
            <li>Procesar e interpretar datos.</li>
            <li>Representar e interpretar conceptos en diferentes formas: numérica, geométrica, algebraica y verbal.</li>
            <li>Comunicarse en el lenguaje matemático en forma oral y escrita.</li>
                </ul><ul>
                <li>Modelar matemáticamente fenómenos y situaciones.</li>
                <li>Resolución de problemas.</li>
                <li>Modelar la relación existente entre una función desconocida y una variable independiente mediante una ecuación diferencial que describe algún proceso dinámico..</li>
                <li>Identificar los diferentes tipos de ED ordinarias, sus soluciones generales y particulares e interpretarlas en el contexto de la situación de estudio.</li>
                <li>Reconocer y aplicar la transformada de Laplace como una herramienta útil en la solución de EDL.</li>
                <li>Modelar y resolver sistemas de EDL.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Ecuaciones diferenciales de primer orden.</li>
                <li><strong>Unidad 2.</strong> Ecuaciones diferenciales de orden superior.</li>
                <li><strong>Unidad 3.</strong> Transformada de Laplace.</li>
                <li><strong>Unidad 4.</strong> Sistemas de ecuaciones diferenciales lineales.</li>
                <li><strong>Unidad 5.</strong> Series de Fourier.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '2ED',
            'name' => 'Métodos Numéricos',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '4',
            'competencies' => '<ul>
            <li>Aplica los métodos numéricos para resolver problemas científicos y de ingeniería
            utilizando la computadora.</li>
                </ul><ul>
                <li>Cálculo vectorial:
                Conoce los principios y técnicas básicas del Cálculo en Varias Variables para que interprete
                y resuelva modelos que representan fenómenos de la naturaleza en los cuales interviene más
                de una variable continua.
                </li>
                <li>Algebra Lineal:
                Resuelve problemas de aplicación e interpreta las soluciones utilizando matrices y sistemas
                de ecuaciones lineales para las diferentes áreas de la ingeniería.</li>
                <li>Identifica las propiedades de los espacios vectoriales y las transformaciones lineales para
                describirlos y resuelve problemas para vincularlo con otras ramas de las matemáticas.</li>
                <liEstructura de datos:
                Identifica, selecciona y aplica eficientemente tipos de datos abstractos, métodos de
                ordenamiento y búsqueda para la optimización del rendimiento de soluciones de problemas
                del mundo real.></li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a los métodos
                numéricos.</li>
                <li><strong>Unidad 2.</strong> Métodos de solución de
                ecuaciones.</li>
                <li><strong>Unidad 3.</strong> Métodos de solución de
                sistemas de ecuaciones.</li>
                <li><strong>Unidad 4.</strong> Diferenciación e integración
                numérica.</li>
                <li><strong>Unidad 5.</strong> Interpolación y ajuste de
                funciones.</li>
                <li><strong>Unidad 5.</strong> Solución de ecuaciones
                diferenciales.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '3ED',
            'name' => 'Tópicos Avanzados de Programación',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '4',
            'competencies' => '<ul>
            <li>Desarrolla soluciones de software para resolver problemas en diversos contextos utilizando programación concurrente, acceso a datos, que soporten interfaz gráfica de usuario y consideren dispositivos móviles.</li>
                </ul><ul>
                <li>Diseña y desarrolla programas para la solución de problemas computacionales utilizando el paradigma orientado a objetos.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Interfaz gráfica de usuario.</li>
                <li><strong>Unidad 2.</strong> Componentes y librerías.</li>
                <li><strong>Unidad 3.</strong> Programación concurrente (MultiHilos).</li>
                <li><strong>Unidad 4.</strong> Acceso a datos.</li>
                <li><strong>Unidad 5.</strong> Programación de dispositivos móviles.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '4ED',
            'name' => 'Fundamentos de Base de Datos',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '4',
            'competencies' => '<ul>
            <li>Analiza requerimientos y diseña bases de datos para generar soluciones al tratamiento de información
            basándose en modelos y estándares.</li>
                </ul><ul>
                <li>Comprende y aplica los conceptos básicos de lógica matemática, conjuntos y relaciones para
                aplicarlos en modelos que resuelvan problemas computacionales.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a las bases de datos.</li>
                <li><strong>Unidad 2.</strong> Diseño de Bases de Datos con el modelo E-R.</li>
                <li><strong>Unidad 3.</strong> Modelo relacional.</li>
                <li><strong>Unidad 4.</strong> Normalización de bases de datos.</li>
                <li><strong>Unidad 5.</strong> Álgebra relacional.</li>
                <li><strong>Unidad 6.</strong> Introducción al lenguaje SQL.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '5ED',
            'name' => 'Taller de Sistemas Operativos',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '4',
            'competencies' => '<ul>
            <li>Conoce, identifica, selecciona y administra diferentes sistemas operativos con el fin de resolver
            problemáticas reales, así como aplicar procedimientos de interoperabilidad entre diferentes sistemas
            operativos.</li>
                </ul><ul>
                <li>Aplica los paradigmas de diseño de los sistemas operativos actuales y emergentes, para el
                manejo de los recursos del sistema.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a los sistemas operativos.</li>
                <li><strong>Unidad 2.</strong> Sistemas Operativos propietarios para
                servidores.</li>
                <li><strong>Unidad 3.</strong> Sistemas Operativos de software libre para
                servidores.</li>
                <li><strong>Unidad 4.</strong> Interoperabilidad entre sistemas operativos.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '6ED',
            'name' => 'Principios Eléctricos y Aplicaciones Digitales',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '4',
            'competencies' => '<ul>
            <li>Comprende y aplica las herramientas básicas de análisis de los sistemas analógicos y digitales para
            resolver problemas del ámbito computacional.</li>
                </ul><ul>
                <li>Comprende los fenómenos físicos en los que intervienen fuerzas, movimiento, trabajo, energía, así
                como los principios básicos de óptica y termodinámica, además comprende y aplica las leyes y
                principios fundamentales de la electricidad y el magnetismo.</li>
                <li>Plantea y resuelve problemas utilizando las definiciones de límite y derivada de funciones de una
                variable para la elaboración de modelos matemáticos aplicados.</li>
                <li>Resuelve problemas de modelos lineales aplicados en ingeniería para la toma de decisiones de acuerdo
                a la interpretación de resultados utilizando matrices y sistemas de ecuaciones.</li>
                <li>Analiza las propiedades de los espacios vectoriales y las transformaciones lineales para vincularlos
                con otras ramas de las matemáticas y otras disciplinas.</li>
                <li>Comprende y aplica los conceptos y propiedades de las estructuras matemáticas discretas para la
                representación y estudio de fenómenos discretos.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Fundamentos de circuitos eléctricos.</li>
                <li><strong>Unidad 2.</strong> Electrónica analógica.</li>
                <li><strong>Unidad 3.</strong> Electrónica Digital.</li>
                <li><strong>Unidad 4.</strong> Convertidores.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '1EE',
            'name' => 'Desarrollo Sustentable',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '5',
            'competencies' => '<ul>
            <li>Aplica una visión sustentable, en los ámbitos social, económico y ambiental que le
            permitirá evaluar y disminuir el impacto de la sociedad sobre el entorno, tomando en cuenta estrategias y considerando profesionalmente los valores ambientales.</li>
                </ul><ul>
                <li>Conoce conceptos básicos de ciencias naturales y ciencias sociales.</li>
                <li>Aplica los elementos de la investigación documental para elaborar escritos
                académicos de su entorno profesional.</li>
                <li>Identifica y resuelve problemas afines a su ámbito profesional, aplicando el método
                inductivo y deductivo, el método de análisis-síntesis y el enfoque sistémico.</li>
                <li>Posee iniciativa y espíritu emprendedor.</li>
                <li>Asume actitudes éticas en su entorno.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción al Desarrollo
                Sustentable.</li>
                <li><strong>Unidad 2.</strong> Escenario natural.</li>
                <li><strong>Unidad 3.</strong> Escenario socio-cultural.</li>
                <li><strong>Unidad 4.</strong> Escenario económico.</li>
                <li><strong>Unidad 5.</strong> Escenario modificado.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '2EE',
            'name' => 'Fundamentos de Telecomunicaciones',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '5',
            'competencies' => '<ul>
            <li>Análisis de componentes y funcionalidad de diferentes sistemas de comunicación para evaluar las tecnologías utilizadas actualmente como parte de la solución de un proyecto de conectividad.</li>
                </ul><ul>
                <li>Comprende e identifica los elementos de la electrónica básica para aplicar los conocimientos adquiridos en las prácticas de esta asignatura.</li>
                <li>Identifica, modela y manipula sistemas dinámicos para predecir comportamientos, tomar decisiones fundamentadas y resolver problemas.</li>
                <li>Implementa circuitos digitales utilizando circuitos integrados de distintas familias lógicas, para la construcción de unidades más complejas de procesamiento de datos.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Sistemas de comunicación.</li>
                <li><strong>Unidad 2.</strong> Medios de transmisión.</li>
                <li><strong>Unidad 3.</strong> Modulación.</li>
                <li><strong>Unidad 4.</strong> Técnicas de conmutación y Multiplexación.</li>
                <li><strong>Unidad 5.</strong> Modelos y Dispositivos de comunicación.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '3EE',
            'name' => 'Taller de Base de Datos',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '5',
            'competencies' => '<ul>
            <li>Implementa bases de datos para apoyar la toma de decisiones considerando las reglas de negocio.</li>
                </ul><ul>
                <li>Analiza requerimientos definidos por el cliente por la organización y diseña bases de datos para
                generar soluciones al tratamiento de información de acuerdo a sus reglas de negocio.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Lenguaje de definición de datos.</li>
                <li><strong>Unidad 2.</strong> Lenguaje de manipulación de datos.</li>
                <li><strong>Unidad 3.</strong> Control de acceso.</li>
                <li><strong>Unidad 4.</strong> Concurrencia.</li>
                <li><strong>Unidad 5.</strong> SQL Procedural.</li>
                <li><strong>Unidad 6.</strong> Conectividad de Bases de Datos.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '4EE',
            'name' => 'Simulación',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '5',
            'competencies' => '<ul>
            <li>Analiza, modela, desarrolla y experimenta sistemas productivos y de servicios, reales o
            hipotéticos, a través de la simulación de eventos discretos, para dar servicio al usuario que
            necesite tomar decisiones, con el fin de describir con claridad su funcionamiento, aplicando
            herramientas matemáticas.</li>
                </ul><ul>
                <li>Investigación de operaciones:
                Formula soluciones óptimas para generar una mejor alternativa para la toma de decisiones
                aplicando conceptos de los modelos matemáticos, técnicas y algoritmos.</li>
                <li>Estructura de datos:
                Identifica, selecciona y aplica eficientemente tipos de datos abstractos, métodos de ordenamiento y
                búsqueda para la optimización del rendimiento de soluciones de problemas del mundo real.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a la simulación.</li>
                <li><strong>Unidad 2.</strong> Números pseudoaleatorios.</li>
                <li><strong>Unidad 3.</strong> Generación de variables aleatorias.</li>
                <li><strong>Unidad 4.</strong> Lenguajes de simulación.</li>
                <li><strong>Unidad 5.</strong> Proyecto Integrador.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '5EE',
            'name' => 'Fundamentos de Ingenieria de Software',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '5',
            'competencies' => '<ul>
            <li>Realiza el análisis de un proyecto de software, a partir de la identificación del modelo de negocios de
            la organización que permita alcanzar estándares y métricas de calidad.</li>
                </ul><ul>
                <li>Aplica herramientas metodológicas de investigación en la elaboración de escritos académicos,
                producto del desarrollo de la investigación documental en temáticas de su área, que lo habiliten para
                ser autónomo en la adquisición y construcción de conocimientos que fortalezcan su desarrollo
                profesional.</li>
                <li>Comprender y aplicar los principios generales de la administración y su proceso en las estructuras y
                funciones fundamental es de las organizaciones acorde a las necesidades de la misma, para contribuir
                sustantivamente con los procesos de planeación y toma de decisiones, con una visión crítica del
                contexto empresarial.</li>
                <li>Comprende y describe los conceptos principales del paradigma de programación orientada a objetos
                para modelar situaciones reales.</li>
                <li>Construye un plan de negocios para crear una empresa considerando el análisis de mercado, estudio
                técnico, organización, análisis financiero y estados financieros del proyecto.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Fundamentos de Ingeniería
                de software.</li>
                <li><strong>Unidad 2.</strong> El modelo de negocio.</li>
                <li><strong>Unidad 3.</strong> Ingeniería de requisitos.</li>
                <li><strong>Unidad 4.</strong> Modelo de Análisis.</li>
                <li><strong>Unidad 5.</strong> Calidad de Software.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '6EE',
            'name' => 'Arquitectura de Computadoras',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '5',
            'competencies' => '<ul>
            <li>Conoce diferentes modelos de arquitecturas y recomienda aplicaciones para resolver problemas de su
            entorno profesional.</li>
                </ul><ul>
                <li>Comprende y aplica las herramientas básicas de análisis de los sistemas analógicos y digitales para
                resolver problemas del ámbito computacional.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Arquitecturas de cómputo.</li>
                <li><strong>Unidad 2.</strong> Estructura y funcionamiento de la CPU.</li>
                <li><strong>Unidad 3.</strong> Selección de componentes para
                ensamble de equipo de cómputo.</li>
                <li><strong>Unidad 4.</strong> Procesamiento paralelo.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '1EF',
            'name' => 'Lenguajes y Automatas I',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '6',
            'competencies' => '<ul>
            <li>Define, diseña y programa las fases del analizador léxico y sintáctico de un traductor o compilador
            para preámbulo de la construcción de un compilador.</li>
                </ul><ul>
                <li>Conoce, comprende y aplica las estructuras de datos, métodos de ordenamiento y búsqueda para la
                optimización del rendimiento de soluciones de problemas del contexto.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a la Teoría de Lenguajes
                Formales.</li>
                <li><strong>Unidad 2.</strong> Expresiones Regulares.</li>
                <li><strong>Unidad 3.</strong> Autómatas Finitos.</li>
                <li><strong>Unidad 4.</strong> Análisis Léxico.</li>
                <li><strong>Unidad 5.</strong> Análisis Sintáctico.</li>
                <li><strong>Unidad 6.</strong> Máquinas de Turing.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '2EF',
            'name' => 'Redes de Computadora',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '6',
            'competencies' => '<ul>
            <li>Diseña y elabora un proyecto de cableado estructurado aplicando normas y estándares vigentes para la
            solución de problemas de conectividad.</li>
                </ul><ul>
                <li>Analiza los componentes y la funcionalidad de sistemas de comunicación para evaluar las tecnologías
                actuales como parte de la solución de un proyecto de conectividad.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a redes de datos.</li>
                <li><strong>Unidad 2.</strong> Normas y estándares de redes de datos.</li>
                <li><strong>Unidad 3.</strong> Dispositivos de red.</li>
                <li><strong>Unidad 4.</strong> Cableado estructurado.</li>
                <li><strong>Unidad 5.</strong> Planificación y diseño de una red LAN.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '3EF',
            'name' => 'Administración de Base de Datos',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '6',
            'competencies' => '<ul>
            <li>Instala, configura y administra un gestor de base de datos para el manejo de la información de una
            organización, optimizando la infraestructura computacional existente.</li>
                </ul><ul>
                <li>Crea y gestiona bases de datos para resolver problemas del contexto considerando la concurrencia e
                interoperabilidad de los datos.</li>
                <li>Diseña y elabora un proyecto de cableado estructurado aplicando normas y estándares vigentes para la
                solución de problemas de conectividad.</li>
                <li>Realiza el análisis de un proyecto de software a partir del modelo de negocios de la organización que
                permita alcanzar estándares y métricas de calidad.</li>
                <li>Aplica los paradigmas de diseño de los sistemas operativos actuales y emergentes para el manejo de
                los recursos del sistema.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Perspectiva de la administración de base de
                datos.</li>
                <li><strong>Unidad 2.</strong> Arquitectura e instalación del SGBD.</li>
                <li><strong>Unidad 3.</strong> Configuración y administración del espacio
                en disco.</li>
                <li><strong>Unidad 4.</strong> Operación y Mantenimiento.</li>
                <li><strong>Unidad 5.</strong> Seguridad.</li>
                <li><strong>Unidad 6.</strong> Monitoreo y auditoría.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '4EF',
            'name' => 'Graficación',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '6',
            'competencies' => '<ul>
            <li>Diseña e implementa modelos gráficos para enriquecer visualmente software diverso de aplicación en
            entornos de programación web, móvil y stand-alone, con base al trazo, manipulación, iluminación,
            sombreado y animación de objetos bidimensionales y tridimensionales.</li>
                </ul><ul>
                <li>Diseña y desarrolla programas para la solución de problemas computacionales utilizando el paradigma
                orientado a objetos.</li>
                <li>Conoce, comprende y aplica las estructuras de datos, métodos de ordenamiento y búsqueda para la
                optimización del rendimiento de soluciones de problemas del contexto</li>
                <li>Resuelve problemas de modelos lineales aplicados en ingeniería para la toma de decisiones de acuerdo
                a la interpretación de resultados utilizando matrices y sistemas de ecuaciones.</li>
                <li>Analiza las propiedades de los espacios vectoriales y las transformaciones lineales para vincularlos
                con otras ramas de las matemáticas y otras disciplinas.</li>
                <li>Aplica los principios y técnicas básicas del cálculo vectorial para resolver problemas de ingeniería del
                entorno.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a la graficación por
                computadora.</li>
                <li><strong>Unidad 2.</strong> Graficación 2D.</li>
                <li><strong>Unidad 3.</strong> Graficación 3D.</li>
                <li><strong>Unidad 4.</strong> Relleno, iluminación y sombreado.</li>
                <li><strong>Unidad 5.</strong> Introducción a la animación por
                computadora.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '5EF',
            'name' => 'Ingeniería de Software',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '6',
            'competencies' => '<ul>
            <li>Desarrolla soluciones de software, considerando la metodología y herramientas para la elaboración de
            un proyecto aplicativo en diferentes escenarios.</li>
                </ul><ul>
                <li>Diseña y desarrolla programas para la solución de problemas computacionales utilizando el
                paradigma orientado a objetos.</li>
                <li>Desarrolla soluciones de software para resolver problemas en diversos contextos utilizando
                programación concurrente, acceso a datos, que soporten interfaz gráfica de usuario y consideren
                dispositivos móviles.</li>
                <li>Crea y gestiona bases de datos para resolver problemas del contexto considerando la concurrencia
                e interoperabilidad de los datos.</li>
                <li>Realiza el análisis de un proyecto de software, a partir de la identificación del modelo de negocios
                de la organización que permitan alcanzar estándares y métricas de calidad.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Análisis.</li>
                <li><strong>Unidad 2.</strong> Diseño.</li>
                <li><strong>Unidad 3.</strong> Desarrollo.</li>
                <li><strong>Unidad 4.</strong> Pruebas e Implantación.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '6EF',
            'name' => 'Lenguajes de Interfaz',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '6',
            'competencies' => '<ul>
            <li>Desarrollar software para establecer la interfaz hombre-máquina y máquina-máquina.</li>
                </ul><ul>
                <li>Reconoce diferentes modelos de arquitecturas y recomienda aplicaciones para resolver problemas de
                su entorno profesional.</li>
                <li>Aplica algoritmos y lenguajes de programación para diseñar e implementar soluciones a problemas del
                entorno.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción al lenguaje ensamblador.</li>
                <li><strong>Unidad 2.</strong> Programación básica.</li>
                <li><strong>Unidad 3.</strong> Modularización.</li>
                <li><strong>Unidad 4.</strong> Programación de dispositivos.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '1EG',
            'name' => 'Lenguajes y Automatas II',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '7',
            'competencies' => '<ul>
            <li>Implementa un compilador para un lenguaje específico considerando las etapas del mismo.</li>
                </ul><ul>
                <li>Define, diseña y programa las fases del analizador léxico y sintáctico de un traductor o compilador
                para preámbulo de la construcción de un compilador.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Análisis semántico.</li>
                <li><strong>Unidad 2.</strong> Generación de código intermedio.</li>
                <li><strong>Unidad 3.</strong> Optimización.</li>
                <li><strong>Unidad 4.</strong> Generación de código objeto.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '2EG',
            'name' => 'Conmutación y Enrutamiento de Redes de Datos',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '7',
            'competencies' => '<ul>
            <li>Diseña, instala y configura redes LAN inalámbricas aplicando normas y estándares vigentes para la
            solución de problemas de conectividad.</li>
                </ul><ul>
                <li>Diseña y elabora un proyecto de cableado estructurado aplicando normas y estándares vigentes para la
                solución de problemas de conectividad.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Direccionamiento IP y Enrutamiento.</li>
                <li><strong>Unidad 2.</strong> Conmutación de redes LAN.</li>
                <li><strong>Unidad 3.</strong> Tecnologías WAN.</li>
                <li><strong>Unidad 4.</strong> Tecnologías inalámbricas.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '3EG',
            'name' => 'Taller de Investigación I',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '7',
            'competencies' => '<ul>
            <li>Elabora un protocolo de investigación en el que presenta soluciones científico - tecnológicas
            a problemáticas relacionadas con su campo profesional en diversos contextos.</li>
                </ul><ul>
                <li>Aplica los elementos de la investigación documental para elaborar escritos académicos de
                su entorno profesional.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Tipos de investigación.</li>
                <li><strong>Unidad 2.</strong> Estructura del protocolo de
                investigación.</li>
                <li><strong>Unidad 3.</strong> Comunicación del protocolo
                de investigación.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '4EG',
            'name' => 'Diseño y Desarrollo de Aplicaciones Móviles',
            'credits' => '6',
            'career_id' => '1',
            'semester' => '7',
            'specialty_id' => '1',
            'competencies' => '<ul>
            <li>Identificar las implicaciones actuales de la programación móvil.</li>
            <li>Identificar las características de los diferentes emuladores para dispositivos móviles.</li>
            <li>Utilizar técnicas de modelado para la solución de problemas.</li>
            <li>Aplicar un lenguaje para la solución de problemas para dispositivos móviles.</li>
                </ul><ul>
                <li>Analizar y solucionar problemas informáticos y representar su solución mediante herramientas de software orientado a objetos.</li>
                <li>Identificar y analizar necesidades de información para su representación, tratamiento y automatización para la toma de decisiones.</li>
                <li>Diseñar esquemas de bases de datos para generar soluciones al tratamiento de información.</li>
                <li>Elaborar documentos académicos.</li>
                <li>Hacer presentaciones orales.</li>
                <li>Conocer como citar las fuentes de información de acuerdo a su disciplina.</li>
                <li>Utilizar paquetes computacionales de texto, animaciones e imágenes entre otros.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción al cómputo móvil.</li>
                <li><strong>Unidad 2.</strong> Interfaz de usuario.</li>
                <li><strong>Unidad 3.</strong> Interaccion.</li>
                <li><strong>Unidad 4.</strong> Ciclo de vida e intenciones.</li>
                <li><strong>Unidad 5.</strong> Fragmentos y menús.</li>
                <li><strong>Unidad 6.</strong> Conectividad, seguridad y publicación.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '5EG',
            'name' => 'Gestión de Proyectos de Software',
            'credits' => '6',
            'career_id' => '1',
            'semester' => '7',
            'competencies' => '<ul>
            <li>Aplica metodologías e instrumentos, para garantizar la gestión adecuada de un proyecto de software.</li>
                </ul><ul>
                <li>Desarrolla soluciones de software, considerando la metodología y herramientas para la elaboración
                de un proyecto aplicativo en diferentes escenarios.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a la gestión de proyectos.</li>
                <li><strong>Unidad 2.</strong> Gestión de calidad.</li>
                <li><strong>Unidad 3.</strong> Planificación del proyecto.</li>
                <li><strong>Unidad 4.</strong> Presentación de la información.</li>
                <li><strong>Unidad 5.</strong> Supervisión y Revisión del proyecto.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '6EG',
            'name' => 'Sistemas Programables',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '7',
            'competencies' => '<ul>
            <li>Aplica microcontroladores en el diseño de interfaces hombre—máquina y máquina-máquina de sistemas programables.</li>
                </ul><ul>
                <li>Comprende y aplica las herramientas básicas de análisis de los sistemas analógicos y digitales para resolver problemas del ámbito computacional.</li>
                <li>Reconoce diferentes modelos de arquitecturas y recomienda aplicaciones para resolver problemas de su entorno profesional.</li>
                <li>Desarrolla software para establecer la interfaz hombre-máquina y máquina-máquina.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Sensores</li>
                <li><strong>Unidad 2.</strong> Actuadores</li>
                <li><strong>Unidad 3.</strong> Microcontroladores</li>
                <li><strong>Unidad 4.</strong> Programación de microcontroladores</li>
                <li><strong>Unidad 5.</strong> Puertos y Buses de comunicación para Microcontroladores</li>
                <li><strong>Unidad 6.</strong> Interfaces</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '3EI',
            'name' => 'Arquitectura Orientada a Servicios',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '7',
            'specialty_id' => '1',
            'competencies' => '<ul>
            <li>Entendimiento sólido de las fortalezas y debilidades de una arquitectura orientada a servicios (SOA, por sus siglas en inglés).</li>
            <li>Conocer los principios de diseño SOA, las tecnologías necesarias para implementar SOA, los patrones de diseño de servicios y patrones de integración.</li>
            <li>Identificar, definir, diseñar, implementar y desplegar servicios sencillos y a hacer composición de servicios.</li>
                </ul><ul>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a SOA.</li>
                <li><strong>Unidad 2.</strong> Principios de Diseño.</li>
                <li><strong>Unidad 3.</strong> Patrones de Diseño.</li>
                <li><strong>Unidad 4.</strong> Stack Tecnológico de Referencia.</li>
                <li><strong>Unidad 5.</strong> Web Services.</li>
                <li><strong>Unidad 6.</strong> Integración de Aplicaciones con Enterprise Service Bus.</li>
                <li><strong>Unidad 7.</strong> Pruebas de Servicios.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '1EH',
            'name' => 'Programación Lógica y Funcional',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '8',
            'competencies' => '<ul>
            <li>Conoce los principios lógicos y funcionales de la programación para aplicarlos en la resolución de
            problemas.</li>
                </ul><ul>
                <li>Implementa un compilador para un lenguaje específico considerando las etapas del mismo.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Conceptos Fundamentales.</li>
                <li><strong>Unidad 2.</strong> Modelo de Programación Funcional.</li>
                <li><strong>Unidad 3.</strong> Programación lógica.</li>
                <li><strong>Unidad 4.</strong> Modelo de programación lógica.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '2EH',
            'name' => 'Administración de Redes',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '8',
            'competencies' => '<ul>
            <li>Configurar y administrar servicios de red para el uso eficiente y confiable de la infraestructura tecnológica de la organización.</li>
                </ul><ul>
                <li>Diseña y elabora un proyecto de cableado estructurado aplicando normas y estándares vigentes para la solución de problemas de conectividad.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Funciones de la administración de redes.</li>
                <li><strong>Unidad 2.</strong> Servicios de Red.</li>
                <li><strong>Unidad 3.</strong> Análisis y Monitoreo.</li>
                <li><strong>Unidad 4.</strong> Seguridad básica.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '3EH',
            'name' => 'Taller de Investigación II',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '8',
            'competencies' => '<ul>
            <li>Consolida el protocolo para ejecutar la investigación y obtener productos para su exposición,
            defensa y gestión de su transcendencia.</li>
                </ul><ul>
                <li>Aplica los elementos de la investigación documental para elaborar escritos académicos de su
                entorno profesional.</li>
                <li>Elabora un protocolo de investigación en el que presenta soluciones científico - tecnológicas a
                problemáticas relacionadas con su campo profesional en diversos contextos.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Evaluación y complementación del
                protocolo de investigación.</li>
                <li><strong>Unidad 2.</strong> Desarrollo de la metodología del
                proyecto de investigación.</li>
                <li><strong>Unidad 3.</strong> Presentación del Informe de
                investigación.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '4EH',
            'name' => 'Programación Web',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '8',
            'competencies' => '<ul>
            <li>Conocer y desarrollar cada una de las etapas de la programación para la solución de problemas en un lenguaje de programación en ambiente web.</li>
                </ul><ul>
                <li>Aplica métodos y herramientas de la ingeniería del software en el desarrollo de software aplicando estándares de calidad y productividad.</li>
                <li>Aplica un lenguaje orientado a objetos para la solución de problemas.</li>
                <li>Crea y aplica esquemas de bases de datos para garantizar la confiabilidad de los datos en aplicaciones para el tratamiento de información.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a las aplicaciones web.</li>
                <li><strong>Unidad 2.</strong> HTML, XML Y CSS.</li>
                <li><strong>Unidad 3.</strong> Programación del lado del cliente.</li>
                <li><strong>Unidad 4.</strong> Programación del lado del servidor.</li>
                <li><strong>Unidad 5.</strong> Cómputo en la nube y servicios.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '5EH',
            'name' => 'Análisis Inteligente de Datos',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '8',
            'specialty_id' => '1',
            'competencies' => '<ul>
            <li></li>
                </ul><ul>
                <li></li>
                <li></li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> </li>
                <li><strong>Unidad 2.</strong> </li>
                <li><strong>Unidad 3.</strong> </li>
                <li><strong>Unidad 4.</strong> </li>
                <li><strong>Unidad 5.</strong> </li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '1EI',
            'name' => 'Inteligencia Artificial',
            'credits' => '4',
            'career_id' => '1',
            'semester' => '9',
            'competencies' => '<ul>
            <li>Definir, diseñar, construir y programar las fases del analizador léxico y sintáctico de un traductor o compilador.</li>
                </ul><ul>
                <li>Analiza los componentes y la funcionalidad de sistemas de comunicación para evaluar las tecnologías actuales como parte de la solución de un proyecto de conectividad.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción la Inteligencia Artificial.</li>
                <li><strong>Unidad 2.</strong> Representación del conocimiento, razonamiento y los Aspectos Metodológicos en Inteligencia Artificial.</li>
                <li><strong>Unidad 3.</strong> Reglas y Búsqueda.</li>
                <li><strong>Unidad 4.</strong> Aplicaciones con técnicas de IA.</li>
                </ul>'
        ]);

        $subject = Subject::create([
            'key' => '2EI',
            'name' => 'Tópicos Avanzados de Base de Datos',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '9',
            'specialty_id' => '1',
            'required' => '0',
            'competencies' => '<ul>
            <li></li>
                </ul><ul>
                <li></li>
                <li></li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> </li>
                <li><strong>Unidad 2.</strong> </li>
                <li><strong>Unidad 3.</strong> </li>
                <li><strong>Unidad 4.</strong> </li>
                <li><strong>Unidad 5.</strong> </li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '2EI',
            'name' => 'Tópicos Selectos de Seguridad Informatica',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '9',
            'specialty_id' => '1',
            'required' => '0',
            'competencies' => '<ul>
            <li>La asignatura de Tópicos avanzados de seguridad informática aporta al perfil del egresado, los conocimientos y habilidades necesarias para investigar en área de seguridad informática. Es un curso práctico, orientado a soluciones de casos reales y fomenta la investigación de nuevas tecnologías y métodos para aplicaciones de seguridad.</li>
                </ul><ul>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Fundamentos de seguridad.</li>
                <li><strong>Unidad 2.</strong> Las Dimensiones de Seguridad y Estándares de la industria.</li>
                <li><strong>Unidad 3.</strong> Ataques, Medidas Preventivas y Defensivas.</li>
                <li><strong>Unidad 4.</strong> Tópicos de Seguridad de Datos.</li>
                <li><strong>Unidad 5.</strong> Manejo de Incidentes informáticos.</li>
                <li><strong>Unidad 6.</strong> Tópicos de Seguridad de Sistemas y Dispositivos.</li>
                <li><strong>Unidad 7.</strong> Proyectos de Investigación final.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '2EI',
            'name' => 'Desarrollo Web Full Stack',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '9',
            'specialty_id' => '1',
            'required' => '0',
            'competencies' => '<ul>
            <li>Desarrollar aplicaciones WEB desde cero de forma práctica, tanto del lado del cliente como del servidor, utilizando tecnologías de intercambio de datos, aplicando principios de orientación a objetos y patrones de diseño.</li>
                </ul><ul>
                <li>Aplicar un lenguaje orientado a objetos para la solución de problemas.</li>
                <li>Crear y manipular bases de datos utilizando distintos Gestores de Bases de Datos considerando elementos de integridad y seguridad para el tratamiento de la información en distintas plataformas.</li>
                <li>Conceptos básicos de Redes de Computadoras y protocolos de comunicación.</li>
                <li>Programación Web básica.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Desarrollo Front-End.</li>
                <li><strong>Unidad 2.</strong> Paradigmas base.</li>
                <li><strong>Unidad 3.</strong> MEAN Stack.</li>
                <li><strong>Unidad 4.</strong> Intercambio de datos.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '5EI',
            'name' => 'Integración de Tecnologías Emergentes',
            'credits' => '6',
            'career_id' => '1',
            'semester' => '9',
            'specialty_id' => '1',
            'competencies' => '<ul>
            <li>Conocer las tecnologías emergentes y su aplicación en las empresas de distintas ramas industriales. Aprender a seleccionar tecnologías adecuadas para resolver un problema de negocio.</li>
                </ul><ul>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Fundamentos de Transformación digital.</li>
                <li><strong>Unidad 2.</strong> Computo en nube.</li>
                <li><strong>Unidad 3.</strong> Internet de las cosas.</li>
                <li><strong>Unidad 4.</strong> Realidad Aumentada/Realidad virtual (AR/VR).</li>
                <li><strong>Unidad 5.</strong> Inteligencia Artificial Industrializada.</li>
                <li><strong>Unidad 6.</strong> Proyecto Integrador.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '4EI',
            'name' => 'Tópicos Avanzados de Base de Datos',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '7',
            'specialty_id' => '2',
            'required' => '0',
            'competencies' => '<ul>
            <li></li>
                </ul><ul>
                <li></li>
                <li></li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> </li>
                <li><strong>Unidad 2.</strong> </li>
                <li><strong>Unidad 3.</strong> </li>
                <li><strong>Unidad 4.</strong> </li>
                <li><strong>Unidad 5.</strong> </li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '4EI',
            'name' => 'Tópicos Selectos de Seguridad Informatica',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '7',
            'specialty_id' => '2',
            'required' => '0',
            'competencies' => '<ul>
            <li>La asignatura de Tópicos avanzados de seguridad informática aporta al perfil del egresado, los conocimientos y habilidades necesarias para investigar en área de seguridad informática. Es un curso práctico, orientado a soluciones de casos reales y fomenta la investigación de nuevas tecnologías y métodos para aplicaciones de seguridad.</li>
                </ul><ul>
                <li></li>
                <li></li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Fundamentos de seguridad.</li>
                <li><strong>Unidad 2.</strong> Las Dimensiones de Seguridad y Estándares de la industria.</li>
                <li><strong>Unidad 3.</strong> Ataques, Medidas Preventivas y Defensivas.</li>
                <li><strong>Unidad 4.</strong> Tópicos de Seguridad de Datos.</li>
                <li><strong>Unidad 5.</strong> Manejo de Incidentes informáticos.</li>
                <li><strong>Unidad 6.</strong> Tópicos de Seguridad de Sistemas y Dispositivos.</li>
                <li><strong>Unidad 7.</strong> Proyectos de Investigación final.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '4EI',
            'name' => 'Fundamentos y Conceptos de Red',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '7',
            'specialty_id' => '2',
            'required' => '0',
            'competencies' => '<ul>
            <li></li>
                </ul><ul>
                <li></li>
                <li></li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> </li>
                <li><strong>Unidad 2.</strong> </li>
                <li><strong>Unidad 3.</strong> </li>
                <li><strong>Unidad 4.</strong> </li>
                <li><strong>Unidad 5.</strong> </li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '5EH',
            'name' => 'Escalamiento de Redes',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '8',
            'specialty_id' => '2',
            'competencies' => '<ul>
            <li></li>
                </ul><ul>
                <li></li>
                <li></li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> </li>
                <li><strong>Unidad 2.</strong> </li>
                <li><strong>Unidad 3.</strong> </li>
                <li><strong>Unidad 4.</strong> </li>
                <li><strong>Unidad 5.</strong> </li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '6EI',
            'name' => 'Tópicos Avanzados de Virtualización',
            'credits' => '6',
            'career_id' => '1',
            'semester' => '9',
            'specialty_id' => '2',
            'competencies' => '<ul>
            <li></li>
                </ul><ul>
                <li></li>
                <li></li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> </li>
                <li><strong>Unidad 2.</strong> </li>
                <li><strong>Unidad 3.</strong> </li>
                <li><strong>Unidad 4.</strong> </li>
                <li><strong>Unidad 5.</strong> </li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '3EI',
            'name' => 'Conexión de Redes',
            'credits' => '5',
            'career_id' => '1',
            'semester' => '9',
            'specialty_id' => '2',
            'competencies' => '<ul>
            <li></li>
                </ul><ul>
                <li></li>
                <li></li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> </li>
                <li><strong>Unidad 2.</strong> </li>
                <li><strong>Unidad 3.</strong> </li>
                <li><strong>Unidad 4.</strong> </li>
                <li><strong>Unidad 5.</strong> </li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '2EI',
            'name' => 'Seguridad en Redes',
            'credits' => '6',
            'career_id' => '1',
            'semester' => '9',
            'specialty_id' => '2',
            'competencies' => '<ul>
            <li></li>
                </ul><ul>
                <li></li>
                <li></li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> </li>
                <li><strong>Unidad 2.</strong> </li>
                <li><strong>Unidad 3.</strong> </li>
                <li><strong>Unidad 4.</strong> </li>
                <li><strong>Unidad 5.</strong> </li>
                </ul>'
        ]);
    }
}
