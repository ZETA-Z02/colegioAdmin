<?php require ('views/header.php');?>

<div class="grid-container">
    <div class="grid-x text-center">
        <h2>Registrar Estudiante</h2>
        <form action="<?php echo constant('URL') ?>estudiantes/RegistrarEstudiantes" method="POST" enctype="multipart/form-data">
        <div class="grid-x grid-padding-x">
            <div class="large-6 cell">
                <label for="nombre">Nombre
                    <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre" required>
                </label>
            </div>
            <div class="large-6 cell">
                <label for="apellidos">Apellidos
                    <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese los apellidos" required>
                </label>
            </div>
        </div>
        <div class="grid-x grid-padding-x">
            <div class="large-4 cell">
                <label for="edad">Edad
                    <input type="number" name="edad" id="edad" placeholder="Edad" required>
                </label>
            </div>
            <div class="large-4 cell">
                <label for="email">Email
                    <input type="email" name="email" id="email" placeholder="Correo electrónico" required>
                </label>
            </div>
            <div class="large-4 cell">
                <label for="telefono">Teléfono
                    <input type="tel" name="telefono" id="telefono" placeholder="Número de teléfono" required>
                </label>
            </div>
        </div>
        <div class="grid-x grid-padding-x">
            <div class="large-6 cell">
                <label for="direccion">Dirección
                    <input type="text" name="direccion" id="direccion" placeholder="Dirección" required>
                </label>
            </div>
            <div class="large-6 cell">
                <label for="ciudad">Ciudad
                    <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" required>
                </label>
            </div>
        </div>
        <div class="grid-x grid-padding-x">
            <div class="large-6 cell">
                <label for="fechaNacimiento">Fecha de Nacimiento
                    <input type="date" name="fechaNacimiento" id="fechaNacimiento" required>
                </label>
            </div>
            <div class="large-6 cell">
                <label for="foto">Foto del Estudiante
                    <input type="file" name="foto" id="foto" accept="image/*" required>
                </label>
            </div>
        </div>
        <div class="grid-x grid-padding-x">
            <div class="large-6 cell">
                <label for="nombrepadre">Nombre del Padre/Madre/Tutor
                    <input type="text" name="nombrepadre" id="nombrepadre" placeholder="Nombre del padre o tutor" required>
                </label>
            </div>
            <div class="large-3 cell">
                <label for="telefonopadre">Teléfono del Padre/Madre/Tutor
                    <input type="tel" name="telefonopadre" id="telefonopadre" placeholder="Teléfono del tutor" required>
                </label>
            </div>
            <div class="large-3 cell">
                <label for="emailpadre">Email del Padre/Madre/Tutor
                    <input type="email" name="emailpadre" id="emailpadre" placeholder="Correo electrónico del tutor" required>
                </label>
            </div>
        </div>
        <div class="grid-x grid-padding-x text-center">
            <div class="large-12 cell">
                <button type="submit" class="button success">Registrar Estudiante</button>
            </div>
        </div>
    </form>
</div>

    </div>

<?php require ('views/footer.php');?>
