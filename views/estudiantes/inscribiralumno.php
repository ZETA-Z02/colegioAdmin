<?php require ('views/header.php'); ?>

<div class="grid-container">
    <div class="grid-x text-center">
        <h2>Inscribir Alumno</h2>
        <form action="<?php echo constant('URL') ?>estudiantes/InscribirAlumno" method="GET">
            <div class="grid-x grid-padding-x">
            <div class="large-6 cell">
                    <label for="idalumno">ID del Alumno</label>
                    <input type="text" name="idalumno" id="idalumno" placeholder="Ingrese el ID del alumno" required>
                </div>
                <div class="large-6 cell">
                    <label for="idcurso">ID del Curso</label>
                    <select name="idcurso" id="idcurso" required>
                        <option value="" selected disabled>Seleccione un curso...</option>
                        <!-- Aquí irán los cursos obtenidos de la base de datos -->
                        <option value="1">Matemáticas</option>
                        <option value="2">Ciencias</option>
                        <option value="3">Historia</option>
                    </select>
                </div>
            </div>
            <div class="grid-x grid-padding-x">
                <div class="large-6 cell">
                    <label for="idturno">Turno</label>
                    <select name="idturno" id="idturno" required>
                        <option value="" selected disabled>Seleccione un turno...</option>
                        <!-- Aquí irán los turnos obtenidos de la base de datos -->
                        <option value="1">Mañana</option>
                        <option value="2">Tarde</option>
                        <option value="3">Noche</option>
                    </select>
                </div>
            </div>
            <div class="grid-x grid-padding-x">
                <div class="large-6 cell">
                    <label for="idsalon">Salón</label>
                    <select name="idsalon" id="idsalon" required>
                        <option value="" selected disabled>Seleccione un salón...</option>
                        <!-- Aquí irán los salones obtenidos de la base de datos -->
                        <option value="101">101</option>
                        <option value="102">102</option>
                        <option value="103">103</option>
                    </select>
                </div>
                <div class="large-6 cell">
                    <label for="idhorario">Horario</label>
                    <select name="idhorario" id="idhorario" required>
                        <option value="" selected disabled>Seleccione un horario...</option>
                        <!-- Aquí irán los horarios obtenidos de la base de datos -->
                        <option value="1">8:00 - 10:00</option>
                        <option value="2">10:00 - 12:00</option>
                        <option value="3">14:00 - 16:00</option>
                    </select>
                </div>
            </div>
            <div class="grid-x grid-padding-x text-center">
                <div class="large-12 cell">
                    <button type="submit" class="button success">Inscribir Alumno</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require ('views/footer.php'); ?>
