<?php require ('views/header.php');?>

<div class="grid-container">
    <div class="grid-x text-center">
        <h2>Asignar Alumno a Salón</h2>
    </div>
    <form action="<?php echo constant('URL') ?>estudiantes/AsignarSalon" method="POST">
        <div class="grid-x grid-padding-x">
        <div class="cell small-12 medium-4">
                <label for="idAlumno">ID del Alumno</label>
                <input type="text" name="idAlumno" id="idAlumno" placeholder="Ingrese el ID del alumno" required>
            </div>
        </div>
        <div class="grid-x grid-padding-x">
            <div class="large-6 cell">
                <label for="idSalon">Seleccionar Salón
                    <select name="idSalon" id="idSalon" required>
                        <option value="" disabled selected>Seleccione un salón...</option>
                    </select>
                </label>
            </div>
            <div class="large-6 cell">
                <label for="turno">Turno
                    <select name="turno" id="turno" required>
                        <option value="" disabled selected>Seleccione un turno...</option>
                        <option value="mañana">Mañana</option>
                        <option value="tarde">Tarde</option>
                        <option value="noche">noche</option>
                    </select>
                </label>
            </div>
        </div>
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell text-center">
                <button type="submit" class="button success">Asignar</button>
            </div>
        </div>
    </form>
</div>

<?php require ('views/footer.php');?>
