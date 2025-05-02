<?php require('views/header.php'); ?>

<div class="grid-container">
    <!-- Título Principal -->
    <div class="grid-x text-center">
        <h2>Bienvenido Alumno</h2>
    </div>

    <!-- Grid de Opciones -->
    <div class="grid-x grid-padding-x text-center">
        <!-- Columna 1 -->
        <div class="cell small-12 medium-6 large-4">
            <h5>Registrar al Estudiante</h5>
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>estudiantes/ResgitAlumno">
                Registrar
            </a>
        </div>

        <!-- Columna 2 -->
        <div class="cell small-12 medium-6 large-4">
            <h5>Inscribir al Estudiante</h5>
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>estudiantes/IAlumnos">
                Inscribir
            </a>
        </div>

        <!-- Columna 3 -->
        <div class="cell small-12 medium-6 large-4">
            <h5>Asignar al Salón</h5>
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>estudiantes/Asalon">
                Asignar salon
            </a>
        </div>

        <!-- Columna 4 -->
        <div class="cell small-12 medium-6 large-4">
            <h5>Información del Estudiante</h5>
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>estudiantes/InfoAlumnos">
                Ver Información
            </a>
        </div>

        <!-- Columna 5 -->
        <div class="cell small-12 medium-6 large-4">
            <h5>Configuración de Mensaje</h5>
            <a class="button" href="configuracion_mensaje.php">
                Configurar
            </a>
        </div>

        <!-- Columna 6 -->
        <div class="cell small-12 medium-6 large-4">
            <h5>Escribirse a Cursos</h5>
            <a class="button" href="escribirse_cursos.php">
                Escribirse
            </a>
        </div>
    </div>
</div>

<footer class="grid-x align-center margin-top-2 margin-bottom-1">
    <div class="cell small-12 text-center">
        <?php require('views/footer.php'); ?>
    </div>
</footer>