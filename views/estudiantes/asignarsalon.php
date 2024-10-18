<?php require ('views/header.php'); ?>

<div class="grid-container">
    <div class="grid-x text-center">
        <h2>Asignar Estudiante a Salón</h2>
        <form action="<?php echo constant('URL') ?>estudiantes/AsignarSalon" method="GET">
            <div class="grid-x grid-padding-x">
                <div class="large-6 cell">
                    <label for="idgrados">Grado</label>
                    <select name="idgrados" id="idgrados" required>
                        <option value="" selected disabled>Seleccione un grado...</option>
                        <!-- Aquí irán los grados obtenidos de la base de datos -->
                        <option value="1">Primero</option>
                        <option value="2">Segundo</option>
                        <option value="3">Tercero</option>
                    </select>
                </div>
                <div class="large-6 cell">
                    <label for="idAlumno">CODIGO DEL  ESTUDIANTE</label>
                    <input type="text" name="idAlumno" id="idAlumno" placeholder="Ingrese su codigo aqui" required>
                </div>
            </div>
            <div class="grid-x grid-padding-x">
                <div class="large-4 cell">
                    <label for="idTurno">Turno</label>
                    <select name="idTurno" id="idTurno" required>
                        <option value="" selected disabled>Seleccione un turno...</option>
                        <!-- Aquí irán los turnos obtenidos de la base de datos -->
                        <option value="1">Mañana</option>
                        <option value="2">Tarde</option>
                        <option value="3">Noche</option>
                    </select>
                </div>
                <div class="large-4 cell">
                    <label for="idseccion">Sección</label>
                    <select name="idseccion" id="idseccion" required>
                        <option value="" selected disabled>Seleccione una sección...</option>
                        <!-- Aquí irán las secciones obtenidas de la base de datos -->
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                </div>
                <div class="large-4 cell">
                    <label for="idsalon">Salón</label>
                    <select name="idsalon" id="idsalon" required>
                        <option value="" selected disabled>Seleccione un salón...</option>
                        <!-- Aquí irán los salones obtenidos de la base de datos -->
                        <option value="101">101</option>
                        <option value="102">102</option>
                        <option value="103">103</option>
                    </select>
                </div>
            </div>
            <div class="grid-x grid-padding-x">
                <div class="large-6 cell">
                    <label for="idmaestro">ID del Maestro</label>
                    <select name="idmaestro" id="idmaestro" required>
                        <option value="" selected disabled>Seleccione un maestro...</option>
                        <!-- Aquí irán los maestros obtenidos de la base de datos -->
                        <option value="1">Maestro 1</option>
                        <option value="2">Maestro 2</option>
                        <option value="3">Maestro 3</option>
                    </select>
                </div>
                <div class="large-6 cell">
                    <label for="idpersonal">ID del Personal Administrativo</label>
                    <select name="idpersonal" id="idpersonal" required>
                        <option value="" selected disabled>Seleccione personal administrativo...</option>
                        <!-- Aquí irán los personales administrativos obtenidos de la base de datos -->
                        <option value="1">Personal 1</option>
                        <option value="2">Personal 2</option>
                        <option value="3">Personal 3</option>
                    </select>
                </div>
            </div>
            <div class="grid-x grid-padding-x">
                <div class="large-6 cell">
                    <label for="feccrerate">Fecha de Creación</label>
                    <input type="date" name="feccrerate" id="feccrerate" required>
                </div>
                <div class="large-6 cell">
                    <label for="fecmodific">Fecha de Modificación</label>
                    <input type="date" name="fecmodific" id="fecmodific" required>
                </div>
            </div>
            <div class="grid-x grid-padding-x text-center">
                <div class="large-12 cell">
                    <button type="submit" class="button success">Asignar Estudiante</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require ('views/footer.php'); ?>
