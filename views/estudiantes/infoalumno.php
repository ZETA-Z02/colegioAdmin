<?php require('views/header.php'); ?>

<div class="grid-container">
    <h2>Información del Alumno</h2>
    <table class="table">
        <tr>
            <th>ID Alumno</th>
            <td><?php echo $this->data['idalumno']; ?></td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td><?php echo $this->data['nombre']; ?></td>
        </tr>
        <tr>
            <th>Apellidos</th>
            <td><?php echo $this->data['apellidos']; ?></td>
        </tr>
        <tr>
            <th>Código</th>
            <td><?php echo $this->data['codigo']; ?></td>
        </tr>
        <tr>
            <th>Fecha de Nacimiento</th>
            <td><?php echo $this->data['fecNacimiento']; ?></td>
        </tr>
        <tr>
            <th>Foto</th>
            <td>
                <img src="<?php echo constant('URL') . 'uploads/' . $this->data['foto']; ?>" alt="Foto del Estudiante" width="100" height="100">
            </td>
        </tr>
        <tr>
            <th>Ciudad</th>
            <td><?php echo $this->data['ciudad']; ?></td>
        </tr>
        <tr>
            <th>Teléfono</th>
            <td><?php echo $this->data['telefono']; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $this->data['email']; ?></td>
        </tr>
        <tr>
            <th>Nombre del Padre/Madre/Tutor</th>
            <td><?php echo $this->data['nombrepadre']; ?></td>
        </tr>
        <tr>
            <th>Teléfono del Padre/Madre/Tutor</th>
            <td><?php echo $this->data['telefonopadre']; ?></td>
        </tr>
        <tr>
            <th>Email del Padre/Madre/Tutor</th>
            <td><?php echo $this->data['emailpadre']; ?></td>
        </tr>
    </table>
</div>

<?php require('views/footer.php'); ?>
