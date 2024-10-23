<?php require ('views/header.php');?>

	<div class="grid-container">
	<div class="grid-x text-center">
        <h2>Bienvenido Alumno</h2>
    </div>

    <div class="grid-x grid-padding-x text-center">
        <div class="cell small-12 medium-6 large-4">
            <h5>Registrar al Estudiante</h5>
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>estudiantes/ResgitAlumno">Registrar</a>

        <div class="cell small-12 medium-6 large-4">
            <h5>Inscribir al Estudiante</h5>
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>estudiantes/IAlumnos">Inscribir</a>

        </div>

        <div class="cell small-12 medium-6 large-4">
            <h5>Asignar al Salón</h5>
            <?php 
            echo $this->mensaje;
            ?>
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>estudiantes/Asalon">Asignar salon</a>
        </div>

        <div class="cell small-12 medium-6 large-4">
            <h5>Información del Estudiante</h5>
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>estudiantes/InfoAlumnos">Ver Información</a>

        </div>

        <div class="cell small-12 medium-6 large-4">
            <h5>Configuración de Mensaje</h5>
            <a class="button" href="configuracion_mensaje.php">Configurar</a>
        </div>

        <div class="cell small-12 medium-6 large-4">
            <h5>Escribirse a Cursos</h5>
            <a class="button" href="escribirse_cursos.php">Escribirse</a>
        </div>

        
	</div>

<?php require ('views/footer.php');?>