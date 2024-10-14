<?php require('views/header.php'); ?>

<div class="grid-container">
    <div class="grid-x text-center">
        <h2>Inscribir Alumno en Curso y Salón</h2>
    </div>
    <form action="<?php echo constant('URL'); ?>estudiantes/InscribirAlumno" method="POST">
        <div class="grid-x grid-padding-x">

            <div class="cell small-12 medium-4">
                <label for="idAlumno">ID del Alumno</label>
                <input type="text" name="idAlumno" id="idAlumno" placeholder="Ingrese el ID del alumno" required>
            </div>
            <div class="cell small-12 medium-4">
                <label for="idCurso">Curso</label>
                <select name="idCurso" id="idCurso" required>
                    <option value="" selected disabled>Seleccione un curso...</option>
                </select>
            </div>
            <div class="cell small-12 medium-4">
                <label for="idSalon">Salón</label>
                <select name="idSalon" id="idSalon" required>
                    <option value="" selected disabled>Seleccione un salón...</option>
                </select>
            </div>
        </div>
        <div class="grid-x grid-padding-x text-center">
            <div class="cell small-12">
                <button class="button success" type="submit">Inscribir Alumno</button>
            </div>
        </div>
    </form>
</div>

<?php require('views/footer.php'); ?>
