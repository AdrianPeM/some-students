<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Specialty;
use App\Models\Subject;

class SubjectsTwoSeeder extends Seeder
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
            'career_id' => '2',
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
            'career_id' => '2',
            'img_path' => '/images/specialties/networks.jpg',
            'description' => '<p>Esta especialidad se enfoca en las redes de computadoras y la seguridad dentro de los sistemas de información. Estas ramas son importantes ya
            que prácticamente las redes mantienen a todo el mundo conectado y la seguridad en estas redes es vital hoy en dia
           para proteger la información y mantenerla íntegra.</p>'
        ]);

        $subject = Subject::create([
            'key' => '1JA',
            'name' => 'Calculo Diferencial',
            'credits' => '5',
            'career_id' => '2',
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
            'key' => '2JA',
            'name' => 'Fundamentos de Programación',
            'credits' => '5',
            'career_id' => '2',
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
            'key' => '3JA',
            'name' => 'Matemáticas Discretas I',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '1',
            'competencies' => '<ul>
            <li>Identifica las estructuras básicas de las matemáticas discretas para aplicarlas en el manejo y
            tratamiento de la información de las tecnologías de información.</li>
                </ul><ul>
                <li>Identifica aspectos elementales de los números naturales, reales, enteros.</li>
                <li>Aplica álgebra elemental.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Sistemas Numéricos.</li>
                <li><strong>Unidad 2.</strong> Lógica Proposicional.</li>
                <li><strong>Unidad 3.</strong> Álgebra Booleana.</li>
                <li><strong>Unidad 4.</strong> Conjuntos y Relaciones.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '4JA',
            'name' => 'Introducción a las TICs',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '1',
            'competencies' => '<ul>
            <li>Identifica conceptualmente las TIC’s para diferenciar los dispositivos y equipos de cómputo,
            clasificar y usar los diversos tipos de software, usar las herramientas Web y conocer los
            diferentes tipos de negocios por Internet.</li>
                </ul><ul>
                <li>Comprensión de lectura.</li>
                <li>Capacidad de aprender y mantenerse actualizado.</li>
                <li>Uso básico de la computadora.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Conceptos básicos.</li>
                <li><strong>Unidad 2.</strong> Clasificación del software.</li>
                <li><strong>Unidad 3.</strong> Tecnologías Web.</li>
                <li><strong>Unidad 4.</strong> Modelos de negocio en Internet.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '5JA',
            'name' => 'Taller de Ética',
            'credits' => '4',
            'career_id' => '2',
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
            'key' => '6JA',
            'name' => 'Fundamentos de Investigación',
            'credits' => '4',
            'career_id' => '2',
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
            'key' => '7JA',
            'name' => 'Tutorias',
            'credits' => '1',
            'career_id' => '2',
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
            'key' => '1JB',
            'name' => 'Calculo Integral',
            'credits' => '5',
            'career_id' => '2',
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
            'key' => '2JB',
            'name' => 'Programación Orientada a Objetos',
            'credits' => '5',
            'career_id' => '2',
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
            'key' => '3JB',
            'name' => 'Matemáticas Discretas II',
            'credits' => '4',
            'career_id' => '2',
            'semester' => '2',
            'competencies' => '<ul>
            <li>Identificar las estructuras básicas de las matemáticas discretas y las aplica en el manejo y tratamiento
            de la información.</li>
                </ul><ul>
                <li>Conoce conceptos básicos de conjuntos.</li>
                <li>Identifica aspectos elementales de los números naturales, reales, enteros.</li>
                <li>Aplica algebra elemental.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Teoría de Grafos.</li>
                <li><strong>Unidad 2.</strong> Árboles.</li>
                <li><strong>Unidad 3.</strong> Lenguajes y Autómatas.</li>
                <li><strong>Unidad 4.</strong> Criptografía.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '4JB',
            'name' => 'Probabilidad y Estadística',
            'credits' => '5',
            'career_id' => '2',
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
            'key' => '5JB',
            'name' => 'Contabilidad y Costos',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '2',
            'competencies' => '<ul>
            <li>Aplica los sistemas contables utilizando los métodos de costeo por órdenes y por procesos y la
            evaluación de inventarios para la toma de decisiones en las entidades económicas.</li>
                </ul><ul>
                <li>Maneja los aspectos básicos de la computadora y herramientas de software en ambientes
                gráficos, permitiéndole navegar en internet siendo capaz de realizar análisis y síntesis.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Conceptos elementales de contabilidad.</li>
                <li><strong>Unidad 2.</strong> Fundamentos de costos.</li>
                <li><strong>Unidad 3.</strong> Costeo por órdenes de trabajo.</li>
                <li><strong>Unidad 4.</strong> Costos por procesos.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '1JC',
            'name' => 'Matemáticas Aplicadas a Comunicaciones',
            'credits' => '4',
            'career_id' => '2',
            'semester' => '3',
            'competencies' => '<ul>
            <li>Emplea diferentes herramientas matemáticas en la solución de problemas de modelado de
            sistemas dinámicos lineales.</li>
                </ul><ul>
                <li>Aplica los conceptos de derivada e integral para el diseño de modelos matemáticos que
                resuelvan problemas de optimización y de aproximación.</li>
                <li>Interpreta a través de un modelo matemático los fenómenos físicos.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Ecuaciones diferenciales de primer
                orden.</li>
                <li><strong>Unidad 2.</strong> Transformada de Laplace.</li>
                <li><strong>Unidad 3.</strong> Series de Fourier.</li>
                <li><strong>Unidad 4.</strong> Caracterización temporal de
                sistemas.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '2JC',
            'name' => 'Estructura y Organización de Datos',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '3',
            'competencies' => '<ul>
            <li>Identifica, selecciona y aplica eficientemente tipos de datos abstractos, métodos de
            ordenamiento y búsqueda para la optimización del rendimiento de soluciones de problemas del
            mundo real.</li>
                </ul><ul>
                <li>Aplica las herramientas básicas de programación orientada a objetos, para modelar y
                desarrollar soluciones a diversos problemas del mundo real.</li>
                <li>Aplica el paradigma orientado a objetos para el desarrollo de aplicaciones que solucionen
                problemas del entorno.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Fundamentos de estructura de datos.</li>
                <li><strong>Unidad 2.</strong> Estructuras lineales.</li>
                <li><strong>Unidad 3.</strong> Estructuras no lineales.</li>
                <li><strong>Unidad 4.</strong> Métodos de ordenamiento y búsqueda.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '3JC',
            'name' => 'Administración Gerencial',
            'credits' => '4',
            'career_id' => '2',
            'semester' => '3',
            'competencies' => '<ul>
            <li>Diseña el proceso de incorporación del personal bajo un enfoque estratégico para el
            mejoramiento del desempeño en las organizaciones.</li>
            <li>Formula presupuestos de operación, de efectivo y maestros para el mejoramiento de los
            recursos en la organización.</li>
                </ul><ul>
                <li>Crear y resolver modelos elementales de contabilidad que apoyen a la toma de decisiones en
                los procesos de planeación y control de empresas y proyectos.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Administración del desarrollo
                organizacional.</li>
                <li><strong>Unidad 2.</strong> Administración del capital intelectual y
                fuerza de trabajo.</li>
                <li><strong>Unidad 3.</strong> Relaciones laborales.</li>
                <li><strong>Unidad 4.</strong> Planeación gerencial.</li>
                <li><strong>Unidad 5.</strong> Presupuestación.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '4JC',
            'name' => 'Fundamentos de Base de Datos',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '3',
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
            'key' => '5JC',
            'name' => 'Electricidad y Magnetismo',
            'credits' => '4',
            'career_id' => '2',
            'semester' => '3',
            'competencies' => '<ul>
            <li>Aplica las leyes del electromagnetismo con el fin de poder distinguir y predecir, el comportamiento
            de elementos eléctricos básicos en circuitos, fundamentado dicho estudio con el análisis y solución
            de problemas en donde intervengan fenómenos electromagnéticos</li>
            <li>Comprende los principios de funcionamiento de elementos y dispositivos eléctricos y
            electromagnéticos.</li>
            <li>Conoce y aplica las leyes y conceptos fundamentales de la Electricidad y Magnetismo.</li>
                </ul><ul>
                <li>Conocer los términos radiación electromagnética y efecto fotoeléctrico, así como sus
                aplicaciones en la vida cotidiana y en la industria.</li>
                <li>Identificar los espectros de emisión y series espectrales y sus aplicaciones tanto en su entorno
                cotidiano como en la industria.</li>
                <li>Conocer los conceptos de enlace: covalente, iónico y metálico.</li>
                <li>Calcular derivadas.</li>
                <li>Calcular diferenciales.</li>
                <li>Calcular integrales definidas.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Electrostática.</li>
                <li><strong>Unidad 2.</strong> Capacitancia.</li>
                <li><strong>Unidad 3.</strong> Electrodinámica.</li>
                <li><strong>Unidad 4.</strong> Campo Magnético.</li>
                <li><strong>Unidad 5.</strong> Inducción electromagnética.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '6JC',
            'name' => 'Álgebra Lineal',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '3',
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
            'key' => '1JD',
            'name' => 'Analisis de Señales y de Sistemas de Comunicación',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '4',
            'competencies' => '<ul>
            <li>Identifica los fenómenos físicos presentes durante la transmisión de señales eléctricas.</li>
            <li>Desarrolla la capacidad para el entendimiento de los modelos aplicados en la simulación de
            sistemas de comunicación electrónica.</li>
                </ul><ul>
                <li>Emplea diferentes herramientas matemáticas en la solución de problemas de modelado de
                sistemas dinámicos lineales.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción al análisis de señales.</li>
                <li><strong>Unidad 2.</strong> Análisis de señales
                periódicas en el tiempo:
                Series de Fourier.</li>
                <li><strong>Unidad 3.</strong> Análisis de señales no
                periódicas en el tiempo:
                Transformada de Fourier.</li>
                <li><strong>Unidad 4.</strong> Análisis de señales discretas en el
                tiempo.</li>
                <li><strong>Unidad 5.</strong> Sistemas de comunicación y
                teorema de muestreo.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '2JD',
            'name' => 'Programación II',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '4',
            'competencies' => '<ul>
            <li>Aplica tecnologías y herramientas actuales y emergentes de programación para desarrollar
            sistemas de información que ofrezcan soluciones a problemas del entorno.</li>
                </ul><ul>
                <li>Aplica el paradigma orientado a objetos para el desarrollo de aplicaciones que solucionen
                problemas del entorno.</li>
                <li>Diseña bases de datos basándose en modelos y estándares para generar soluciones al
                tratamiento de información.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Fundamentos del lenguaje.</li>
                <li><strong>Unidad 2.</strong> Controles, eventos y
                métodos básicos.</li>
                <li><strong>Unidad 3.</strong> Acceso a datos.</li>
                <li><strong>Unidad 4.</strong> Generación de reportes.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '3JD',
            'name' => 'Matemáticas para la Toma de Decisiones',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '4',
            'competencies' => '<ul>
            <li>Aplica las técnicas de programación lineal para la resolución de problemas de optimización y
            define soluciones a problemas con múltiples alternativas.</li>
            <li>Determina la configuración óptima de distintos modelos de transporte o asignación para
            minimizar sus costos de operación.</li>
            <li>Construye diagramas de tiempo para determinar ruta(s) crítica(s) en la administración de
            proyectos.</li>
                </ul><ul>
                <li>Habilidad para abstraer, analizar y sintetizar problemas al lenguaje algebraico, que involucren el
                cálculo diferencial, integral y operaciones de álgebra lineal para la aplicación en situaciones de la vida
                real.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Programación lineal.</li>
                <li><strong>Unidad 2.</strong> Métodos de transporte y
                asignación.</li>
                <li><strong>Unidad 3.</strong> Técnicas de planeación de
                actividades.</li>
                <li><strong>Unidad 4.</strong> Teoría de inventarios.</li>
                <li><strong>Unidad 5.</strong> Teoría de líneas de espera.</li>
                <li><strong>Unidad 6.</strong> Teoría de la decisión.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '4JD',
            'name' => 'Taller de Base de Datos',
            'credits' => '4',
            'career_id' => '2',
            'semester' => '4',
            'competencies' => '<ul>
            <li>Crea y aplica esquemas de bases de datos para garantizar la confiabilidad de los datos en aplicaciones
            para el tratamiento de información.</li>
                </ul><ul>
                <li>Analiza requerimientos y diseña bases de datos para generar soluciones al tratamiento de
                información basándose en modelos y estándares.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> El SGBD y el Lenguaje de Definición de
                Datos.</li>
                <li><strong>Unidad 2.</strong> Lenguaje de Manipulación de Datos.</li>
                <li><strong>Unidad 3.</strong> Administración de base de datos.</li>
                <li><strong>Unidad 4.</strong> SQL Procedural.</li>
                <li><strong>Unidad 5.</strong> Tecnologías de conectividad de base de
                datos.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '5JD',
            'name' => 'Circuitos Electricos y Electrónicos',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '4',
            'competencies' => '<ul>
            <li>Conoce, analiza y aplica los conocimientos de electrónica analógica y digital en el ámbito de
            la informática y las comunicaciones.</li>
                </ul><ul>
                <li>Comprende cuantitativamente y cualitativamente fenómenos físicos de electricidad y magnetismo
                para la resolución de problemas.</li>
                <li>Identifica las estructuras básicas de las matemáticas discretas para aplicarlas en el manejo y
                tratamiento de la información de las tecnologías de información.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Técnicas y teoremas para el
                análisis de circuitos eléctricos.</li>
                <li><strong>Unidad 2.</strong> Análisis en estado transitorio y
                permanente.</li>
                <li><strong>Unidad 3.</strong> Dispositivos electrónicos
                analógicos.</li>
                <li><strong>Unidad 4.</strong> Circuitos lógicos.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '6JD',
            'name' => 'Ingeniería de Software',
            'credits' => '4',
            'career_id' => '2',
            'semester' => '4',
            'competencies' => '<ul>
            <li>Conoce y aplica modelos y/o técnicas de desarrollo de software con la finalidad de implementar
            sistemas eficientes en base a requerimientos específicos bajo lineamientos y estándares para el
            aseguramiento de calidad.</li>
                </ul><ul>
                <li>Construye diagramas de tiempo para determinar ruta(s) crítica(s) en la administración de
                proyectos.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a la ingeniería del
                software y sistemas de información.</li>
                <li><strong>Unidad 2.</strong> Modelos de la Ingeniería de Software.</li>
                <li><strong>Unidad 3.</strong> Planificación del Proyecto.</li>
                <li><strong>Unidad 4.</strong> Análisis y Modelado del proyecto de
                software.</li>
                <li><strong>Unidad 5.</strong> Calidad de Software.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '1JE',
            'name' => 'Fundamentos de Redes',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '5',
            'competencies' => '<ul>
            <li>Conoce y aplica los fundamentos de redes basados en los modelos OSI y TCP/IP para realizar
            configuraciones básicas con dispositivos de red.</li>
                </ul><ul>
                <li>Conoce, analiza y aplica los conocimientos de electrónica analógica y digital para su aplicación
                en el ámbito de la informática y las telecomunicaciones.</li>
                <li>Identifica los fenómenos físicos presentes durante la transmisión de señales eléctricas.</li>
                <li>Desarrolla la capacidad para el entendimiento de los modelos aplicados en la simulación de
                sistemas de comunicación electrónica.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a las Redes.</li>
                <li><strong>Unidad 2.</strong> Protocolos de Capas Superiores y
                Capa de Transporte.</li>
                <li><strong>Unidad 3.</strong> Capa de Red y Direccionamiento de la
                Red: IPv4 e IPV6.</li>
                <li><strong>Unidad 4.</strong> Capa de Enlace de Datos y Capa
                Física.</li>
                <li><strong>Unidad 5.</strong> Ethernet.</li>
                <li><strong>Unidad 6.</strong> Planificación y Cableado de Redes,
                Configuración y Verificación de la
                Red.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '2JE',
            'name' => 'Telecomunicaciones',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '5',
            'competencies' => '<ul>
            <li>Integra soluciones mediante sistemas de comunicaciones para seleccionar e instalar equipos sobre un
            sistema de telecomunicaciones considerando medios de transmisión, área geográfica y tecnología
            existente para su uso en el entorno empresarial.</li>
                </ul><ul>
                <li>Conoce y Aplica los fundamentos de Redes basados en los modelos OSI y TCP/IP para realizar
                configuraciones básicas con dispositivos de red.</li>
                <li>Identifica los fenómenos físicos presentes durante la transmisión de señales eléctricas.</li>
                <li>Desarrolla la capacidad para el entendimiento de los modelos aplicados en la simulación de
                sistemas de comunicación electrónica.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a las telecomunicaciones.</li>
                <li><strong>Unidad 2.</strong> Fundamentos de modulación y
                demodulación.</li>
                <li><strong>Unidad 3.</strong> Antenas.</li>
                <li><strong>Unidad 4.</strong> Microondas y Satélites.</li>
                <li><strong>Unidad 5.</strong> Telefonía.</li>
                <li><strong>Unidad 6.</strong> Comunicaciones ópticas.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '3JE',
            'name' => 'Administración de Proyectos',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '5',
            'competencies' => '<ul>
            <li>Planifica y administra proyectos en general apegándose a estándares internacionales.</li>
                </ul><ul>
                <li>Construye diagramas de tiempo para determinar ruta(s) crítica(s) en la administración de
                proyectos.</li>
                <li>Diseña el proceso de incorporación del personal bajo un enfoque estratégico para el
                mejoramiento del desempeño en las organizaciones.</li>
                <li>Formula presupuestos de operación, de efectivo y maestros para el mejoramiento de los
                recursos en la organizacional. </li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a la administración de
                proyectos.</li>
                <li><strong>Unidad 2.</strong> Inicio del proyecto.</li>
                <li><strong>Unidad 3.</strong> Administración del alcance, los
                recursos humanos y la comunicación.</li>
                <li><strong>Unidad 4.</strong> Administración del tiempo y los costos.</li>
                <li><strong>Unidad 5.</strong> Administración de la calidad y los
                riesgos.</li>
                <li><strong>Unidad 6.</strong> Administración de abastecimiento e
                integración.</li>
                <li><strong>Unidad 7.</strong> Ejecución, control y cierre.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '4JE',
            'name' => 'Base de Datos Distribuidas',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '5',
            'competencies' => '<ul>
            <li>Aplica técnicas de diseño de bases de datos en arquitecturas distribuidas.</li>
                </ul><ul>
                <li>Crea y aplica esquemas de bases de datos para garantizar la confiabilidad de los datos en
                aplicaciones para el tratamiento de información.</li>
                <li>Identifica el funcionamiento de los protocolos de enrutamiento de una red WAN, para
                implementarlos en la planeación para solucionar problemas de comunicación en redes de
                computadoras.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Fundamentos de bases de datos
                distribuidas.</li>
                <li><strong>Unidad 2.</strong> Diseño de bases de datos distribuidas.</li>
                <li><strong>Unidad 3.</strong> Procesamiento de consultas
                distribuidas.</li>
                <li><strong>Unidad 4.</strong> Manejo de Transacciones.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '5JE',
            'name' => 'Arquitectura de Computadoras',
            'credits' => '4',
            'career_id' => '2',
            'semester' => '5',
            'competencies' => '<ul>
            <li>Comprende las distintas arquitecturas de computadoras, así como las filosofías de diseño para
            desarrollar aplicaciones compatibles con la tecnología más avanzada en sistemas de cómputo.</li>
                </ul><ul>
                <li>Conoce, analiza y aplica los conocimientos de electrónica analógica y digital en el ámbito de
                la informática y las comunicaciones.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Modelo de arquitectura de
                cómputo.</li>
                <li><strong>Unidad 2.</strong> Comunicación interna en la
                computadora.</li>
                <li><strong>Unidad 3.</strong> La Computadora basada en
                un procesador.</li>
                <li><strong>Unidad 4.</strong> Micro-controladores.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '6JE',
            'name' => 'Taller de Ingeniería de Software',
            'credits' => '4',
            'career_id' => '2',
            'semester' => '5',
            'competencies' => '<ul>
            <li>Aplica métodos y herramientas de la ingeniería del software en el desarrollo de software
            aplicando estándares de calidad y productividad.</li>
                </ul><ul>
                <li>Conoce y aplica modelos y/o técnicas de desarrollo de software con la finalidad de implementar
                sistemas eficientes en base a requerimientos específicos bajo lineamientos y estándares para el
                aseguramiento de calidad.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Ingeniería del software
                para el comercio electrónico.</li>
                <li><strong>Unidad 2.</strong> Ingeniería web.</li>
                <li><strong>Unidad 3.</strong> Análisis de aplicaciones
                web.</li>
                <li><strong>Unidad 4.</strong> Diseño para aplicaciones
                web.</li>
                <li><strong>Unidad 5.</strong> Verificación y validación de
                aplicaciones web.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '1JF',
            'name' => 'Redes de Computadora',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '6',
            'competencies' => '<ul>
            <li>Conoce e implementa los principios y protocolos de enrutamiento de acuerdo a la clasificación
            de la tecnología de interconexión.</li>
            <li>Identifica el funcionamiento de los protocolos de enrutamiento de una red WAN, para
            implementarlos en la planeación para solucionar problemas de comunicación en redes de
            computadoras.</li>
                </ul><ul>
                <li>Conoce y aplica los fundamentos de redes basados en los modelos OSI y TCP/IP para realizar
                configuraciones básicas con dispositivos de red.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción al
                enrutamiento y envío de
                paquetes</li>
                <li><strong>Unidad 2.</strong> Enrutamiento estático y
                dinámico.</li>
                <li><strong>Unidad 3.</strong> Protocolos de
                enrutamiento vector
                distancia.</li>
                <li><strong>Unidad 4.</strong> Configuración de
                protocolos vector distancia.</li>
                <li><strong>Unidad 5.</strong> Tabla de enrutamiento y
                protocolo EIGRP.</li>
                <li><strong>Unidad 6.</strong> Protocolo OSPF.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '2JF',
            'name' => 'Programación Web',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '6',
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
            'key' => '3JF',
            'name' => 'Desarrollo de Emprendedores',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '6',
            'competencies' => '<ul>
            <li>Formula planes de negocio para empresas preferentemente del ámbito de las tecnologías de
            información y comunicaciones o de interés general, considerando modelos económicos
            exitosos.</li>
                </ul><ul>
                <li>Formula presupuestos de operación, de efectivo y maestros para el mejoramiento de los
                recursos en la organización.</li>
                <li>Planifica y administra proyectos en general apegándose a estándares internacionales.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción.</li>
                <li><strong>Unidad 2.</strong> Definición del proyecto.</li>
                <li><strong>Unidad 3.</strong> Estudio del modelo de negocio.</li>
                <li><strong>Unidad 4.</strong> Marco Jurídico y Administrativo.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '4JF',
            'name' => 'Taller de Investigación I',
            'credits' => '4',
            'career_id' => '2',
            'semester' => '6',
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
            'key' => '5JF',
            'name' => 'Sistemas Operativos I',
            'credits' => '4',
            'career_id' => '2',
            'semester' => '6',
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
            'key' => '6JF',
            'name' => 'Tecnologías Inalambricas',
            'credits' => '4',
            'career_id' => '2',
            'semester' => '6',
            'competencies' => '<ul>
            <li>Analiza los principios de propagación de señales en canales inalámbricos y los principales
            modelos matemáticos empleados con el fin de observar su comportamiento sobre los estándares
            de comunicación inalámbrica para la implementación de aplicaciones específicas</li>
                </ul><ul>
                <li>Conoce y Aplica los fundamentos de Redes basados en los modelos OSI y TCP/IP para realizar
                configuraciones básicas con dispositivos de red.</li>
                <li>Como correquisito:</li>
                <li>Conoce e implementa los principios y protocolos de enrutamiento de acuerdo a la clasificación
                de la tecnología de interconexión.</li>
                <li>Identifica el funcionamiento de los protocolos de enrutamiento de una red WAN, para
                implementarlos en la planeación para solucionar problemas de comunicación en redes de
                computadoras.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a las tecnologías
                inalámbricas.</li>
                <li><strong>Unidad 2.</strong> Principios de propagación de señales.</li>
                <li><strong>Unidad 3.</strong> Estándares para sistemas de
                comunicación inalámbrica.</li>
                <li><strong>Unidad 4.</strong> Parámetros característicos de los
                sistemas inalámbricos.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '1JG',
            'name' => 'Redes Emergentes',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '7',
            'competencies' => '<ul>
            <li>Conoce y aplica tecnologías y herramientas de redes vanguardistas para atender necesidades
            acordes al entorno sobre modelado, instalación y administración de redes actuales y
            emergentes.</li>
                </ul><ul>
                <li>Analiza los principios de propagación de señales en canales inalámbricos y los principales
                modelos matemáticos empleados con el fin de observar su comportamiento sobre los estándares
                de comunicación inalámbrica para la implementación de aplicaciones específicas.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Fundamentos de redes emergentes.</li>
                <li><strong>Unidad 2.</strong> Redes VLAN.</li>
                <li><strong>Unidad 3.</strong> Redes móviles.</li>
                <li><strong>Unidad 4.</strong> Redes inalámbricas.</li>
                <li><strong>Unidad 5.</strong> Red VoIP.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '3JG',
            'name' => 'Desarrollo Sustentable',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '7',
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
            'key' => '4JG',
            'name' => 'Taller de Investigación II',
            'credits' => '4',
            'career_id' => '2',
            'semester' => '7',
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
            'key' => '5JG',
            'name' => 'Sistemas Operativos II',
            'credits' => '4',
            'career_id' => '2',
            'semester' => '7',
            'competencies' => '<ul>
            <li>Conoce y aplica los componentes de los sistemas distribuidos para proponer soluciones a problemas en
            diversas áreas de la ciencia.</li>
                </ul><ul>
                <li>Comprende y aplica eficientemente tipos de datos abstractos, métodos de ordenamiento y
                búsqueda para la optimización del rendimiento de soluciones de problemas del mundo real.</li>
                <li>Conoce y analiza conceptos fundamentales de las telecomunicaciones para evaluar sistemas de
                comunicación.</li>
                <li>Aplica los paradigmas de diseño de los sistemas operativos actuales y emergentes, para el
                manejo de los recursos del sistema.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a los sistemas distribuidos.</li>
                <li><strong>Unidad 2.</strong> Procesos y comunicación.</li>
                <li><strong>Unidad 3.</strong> Consistencia y replicación.</li>
                <li><strong>Unidad 4.</strong> Tolerancia a fallas.</li>
                <li><strong>Unidad 5.</strong> Seguridad.</li>
                <li><strong>Unidad 6.</strong> Usos y tendencias de los sistemas
                distribuidos.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '6JG',
            'name' => 'Negocios Electronicos I',
            'credits' => '4',
            'career_id' => '2',
            'semester' => '7',
            'competencies' => '<ul>
            <li>Diseña la planeación de sistemas de negocios electrónicos en base al conocimiento de su
            arquitectura y tecnologías con la finalidad de cambiar hacia nuevas formas de administrar,
            dirigir y hacer negocios en la economía digital.</li>
                </ul><ul>
                <li>Formula planes de negocio a empresas del ámbito de las tecnologías de la información y
                comunicaciones o de interés general, considerando modelos económicos exitosos.</li>
                <li>Desarrolla aplicaciones web dinámicas del lado cliente y del servidor, considerando la
                conectividad a orígenes de datos, la interconectividad entre aplicaciones y cómputo en la nube.</li>
                <li>Crea y aplica esquemas de bases de datos para garantizar la confiabilidad de los datos en
                aplicaciones para el tratamiento de información.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a los negocios
                electrónicos.</li>
                <li><strong>Unidad 2.</strong> Arquitectura tecnológica de los
                negocios electrónicos.</li>
                <li><strong>Unidad 3.</strong> Procesos estratégicos de la
                empresa.</li>
                <li><strong>Unidad 4.</strong> Sistemas de pago electrónico.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '1JH',
            'name' => 'Administración y Seguridad de Redes',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '8',
            'competencies' => '<ul>
            <li>Diseña, implementa y administra redes con base en modelos y estándares internacionales para
            satisfacer necesidades de seguridad y resguardo de información aplicando tecnologías y
            herramientas actuales acorde a las necesidades del entorno.</li>
                </ul><ul>
                <li>Conoce y aplica los fundamentos de redes basados en los modelos OSI y TCP/IP para realizar
                configuraciones básicas con dispositivos de red.</li>
                <li>Conoce e implementa los principios y protocolos de enrutamiento de acuerdo a la clasificación
                de la tecnología de interconexión.</li>
                <li>Identifica el funcionamiento de los protocolos de enrutamiento de una red WAN, para
                implementarlos en la planeación para solucionar problemas de comunicación en redes de
                computadoras.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a la Administración de
                Redes.</li>
                <li><strong>Unidad 2.</strong> Administración de Servidores.</li>
                <li><strong>Unidad 3.</strong> La Seguridad Informática.</li>
                <li><strong>Unidad 4.</strong> Técnicas y Herramientas para
                Protección y Monitoreo de Servidores.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '3JH',
            'name' => 'Interacción Humano Computadora',
            'credits' => '4',
            'career_id' => '2',
            'semester' => '8',
            'competencies' => '<ul>
            <li>Crea interfaces humano computadora que faciliten el acceso y la interacción con las
            aplicaciones de cómputo.</li>
                </ul><ul>
                <li>Aplica tecnologías y herramientas actuales y emergentes de programación para desarrollar
                sistemas de información que ofrezcan soluciones a problemas del entorno.</li>
                <li>Crea y aplica esquemas de bases de datos para garantizar la confiabilidad de los datos en
                aplicaciones para el tratamiento de información.</li>
                <li>Aplica métodos y herramientas de la ingeniería del software en el desarrollo de software
                aplicando estándares de calidad y productividad.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción al Desarrollo de IHC.</li>
                <li><strong>Unidad 2.</strong> El factor humano y sus aspectos.</li>
                <li><strong>Unidad 3.</strong> Análisis y diseño de IHC.</li>
                <li><strong>Unidad 4.</strong> Desarrollo de una IHC.</li>
                <li><strong>Unidad 5.</strong> Evaluación y desempeño.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '4JH',
            'name' => 'Ingeniería del Conocimiento',
            'credits' => '4',
            'career_id' => '2',
            'semester' => '8',
            'competencies' => '<ul>
            <li>Identifica técnicas de modelado y representación de conocimiento útil para la toma de
            decisiones.</li>
                </ul><ul>
                <li>Crea y aplica esquemas de bases de datos para garantizar la confiabilidad de los datos en
                aplicaciones para el tratamiento de información.</li>
                <li>Aplica métodos y herramientas de la ingeniería del software en el desarrollo de software
                aplicando estándares de calidad y productividad.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción.</li>
                <li><strong>Unidad 2.</strong> Modelado y administración
                del conocimiento.</li>
                <li><strong>Unidad 3.</strong> Ingeniería ontológica.</li>
                <li><strong>Unidad 4.</strong> Adquisición del
                conocimiento e inteligencia
                de negocios
                .</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '6JH',
            'name' => 'Negocios Electrónicos II',
            'credits' => '4',
            'career_id' => '2',
            'semester' => '8',
            'competencies' => '<ul>
            <li>Aplica modelos y técnicas de desarrollo de negocios electrónicos con la finalidad de
            implementar sistemas globales eficientes y seguros en base a requerimientos específicos
            organizacionales.</li>
                </ul><ul>
                <li>Diseña la planeación de sistemas de negocios electrónicos en base al conocimiento de su
                arquitectura y tecnologías con la finalidad de cambiar hacia nuevas formas de administrar,
                dirigir y hacer negocios en la economía digital.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> La Administración basada en la
                Relación con los Clientes (CRM).</li>
                <li><strong>Unidad 2.</strong> Administración de la Cadena de
                Suministros (SCM).</li>
                <li><strong>Unidad 3.</strong> Planificación de Recursos
                Empresariales (ERP).</li>
                <li><strong>Unidad 4.</strong> Diseño de aplicaciones de negocios
                electrónicos.</li>
                <li><strong>Unidad 5.</strong> Aplicaciones avanzadas de negocios
                electrónicos.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '4EG',
            'name' => 'Diseño y Desarrollo de Aplicaciones Moviles',
            'credits' => '6',
            'career_id' => '2',
            'semester' => '6',
            'specialty_id' => '3',
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
            'key' => '3EI',
            'name' => 'Arquitectura Orientada a Servicios',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '7',
            'specialty_id' => '3',
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
            'key' => '5EH',
            'name' => 'Análisis Inteligente de Datos',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '8',
            'specialty_id' => '3',
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
            'key' => '2JG',
            'name' => 'Desarrollo de Aplicaciones Para Dispositivos Moviles',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '7',
            'specialty_id' => '3',
            'competencies' => '<ul>
            <li>Aplica las metodologías y tecnologías emergentes para el desarrollo de aplicaciones móviles que
            resuelvan problemáticas del entorno.</li>
                </ul><ul>
                <li>Analiza y soluciona problemas informáticos y representa su solución mediante herramientas de
                software orientado a objetos.</li>
                <li>Identifica y analiza necesidades de información para su representación, tratamiento y
                automatización para la toma de decisiones.</li>
                <li>Crea y aplica los esquemas de bases de datos y tecnologías de conectividad para generar
                aplicaciones en el tratamiento de la información.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a las tecnologías de móviles.</li>
                <li><strong>Unidad 2.</strong> Arquitecturas y entorno de desarrollo.</li>
                <li><strong>Unidad 3.</strong> Desarrollo de aplicaciones móviles.</li>
                <li><strong>Unidad 4.</strong> Administración de datos en dispositivos
                móviles.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '2JH',
            'name' => 'Auditoria en Tecnologías de la Información',
            'credits' => '4',
            'career_id' => '2',
            'semester' => '8',
            'specialty_id' => '3',
            'competencies' => '<ul>
            <li>Identifica y aplica metodologías de auditoría para tecnologías de la información en casos reales.</li>
                </ul><ul>
                <li>Conoce, entiende y aplica teorías, modelos, técnicas y/o tecnologías relacionadas con
                administración de proyectos, redes y telecomunicaciones, ingeniería y calidad de software,
                software de sistemas y de aplicación y ética profesional.</li>
                </ul><ul>
                <li><strong>Unidad 1.</strong> Introducción a la auditoría.</li>
                <li><strong>Unidad 2.</strong> El marco jurídico de la auditoría
                informática.</li>
                <li><strong>Unidad 3.</strong> Preparación y planeación de la
                auditoría.</li>
                <li><strong>Unidad 4.</strong> Aplicación de la auditoría insitu.</li>
                <li><strong>Unidad 5.</strong> Evaluación de la información y
                elaboración del Informe de
                Auditoría.</li>
                </ul>'
        ]);
        $subject = Subject::create([
            'key' => '2EI',
            'name' => 'Tópicos Avanzados de Base de Datos',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '9',
            'specialty_id' => '3',
            'required' => '0'
        ]);
        $subject = Subject::create([
            'key' => '2EI',
            'name' => 'Tópicos Selectos de Seguridad Informatica',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '9',
            'specialty_id' => '3',
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
            'career_id' => '2',
            'semester' => '9',
            'specialty_id' => '3',
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
            'career_id' => '2',
            'semester' => '9',
            'specialty_id' => '3',
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
            'career_id' => '2',
            'semester' => '6',
            'specialty_id' => '4',
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
            'career_id' => '2',
            'semester' => '6',
            'specialty_id' => '4',
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
            'key' => '4EI',
            'name' => 'Fundamentos y Conceptos de Red',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '6',
            'specialty_id' => '4',
            'required' => '0'
        ]);
        $subject = Subject::create([
            'key' => '5EH',
            'name' => 'Escalamiento de Redes',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '7',
            'specialty_id' => '4',
        ]);
        $subject = Subject::create([
            'key' => '6EI',
            'name' => 'Tópicos Avanzados de Virtualización',
            'credits' => '6',
            'career_id' => '2',
            'semester' => '8',
            'specialty_id' => '4'
        ]);
        $subject = Subject::create([
            'key' => '3EI',
            'name' => 'Conexión de Redes',
            'credits' => '5',
            'career_id' => '2',
            'semester' => '8',
            'specialty_id' => '4',
        ]);
        $subject = Subject::create([
            'key' => '6JI',
            'name' => 'Seguridad en Redes',
            'credits' => '6',
            'career_id' => '2',
            'semester' => '9',
            'specialty_id' => '4',
        ]);
    }
}
