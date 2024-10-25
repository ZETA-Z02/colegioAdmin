<?php require ('views/header.php');
$datos= $this->datos;
$datosd= $this->datosd;
?>

<div class="grid-container">
    <!-- Buttons for adding, deleting, and listing maestros -->
    <div class="grid-x text-center">
        <div class="cell">
            <h2>Administracion de Maestros</h2>
        </div>
    </div>
    <div class="grid-x grid-padding-x text-center">
        <div class="cell small-12 medium-6 large-4">
            <h5>Ingresar Maestros</h5>
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>maestros/insertarMaestro">Nuevo</a>
        </div>
        <div class="cell small-12 medium-6 large-4">
            <h5>Eliminar Maestros</h5>
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>maestros/eliminarMaestro">Eliminar</a>
        </div>
        <div class="cell small-12 medium-6 large-4">
            <h5>Lista Maestros</h5>
            <a class="button" href="<?php echo constant('URL') ?>maestros/listaMaestros">Lista</a>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>FecNacimiento</th>
                <th>Foto</th>
                <th>Sexo</th>
                <th>Especialidad</th>
                <th>Ciudad</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Idgrado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($datos) {
                while ($fila = $datos->fetch_array(MYSQLI_ASSOC)) {
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($fila['idmaestro']); ?></td>
                        <td><?php echo htmlspecialchars($fila['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($fila['apellidos']); ?></td>
                        <td><?php echo htmlspecialchars($fila['fecNacimiento']); ?></td>
                        <td><?php echo htmlspecialchars($fila['foto']); ?></td>
                        <td><?php echo htmlspecialchars($fila['sexo']); ?></td>
                        <td><?php echo htmlspecialchars($fila['especialidad']); ?></td>
                        <td><?php echo htmlspecialchars($fila['ciudad']); ?></td>
                        <td><?php echo htmlspecialchars($fila['telefono']); ?></td>
                        <td><?php echo htmlspecialchars($fila['email']); ?></td>
                        <td><?php echo htmlspecialchars($fila['idgrado']); ?></td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='11'>No hay registros disponibles</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- seccion para maestros_detalle -->
    <div class="grid-x text-center">
        <div class="cell">
            <h2>Administracion de Detalles de Maestros</h2>
        </div>
    </div>
    <div class="grid-x grid-padding-x text-center">
        <div class="cell small-12 medium-6 large-4">
            <h5>Ingresar Detalle Maestro</h5>
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>maestros/insertarDetalle">Nuevo</a>
        </div>
        <div class="cell small-12 medium-6 large-4">
            <h5>Eliminar Detalle Maestro</h5>
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>maestros/eliminarDetalle">Eliminar</a>
        </div>
        <div class="cell small-12 medium-6 large-4">
            <h5>Lista Detalles Maestros</h5>
            <a class="button" href="<?php echo constant('URL') ?>maestros/listarDetalles">Lista</a>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID Detalle</th>
                <th >ID Maestro</th>
                <th>Acerca de</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($datosd) {
                while ($fila = $datosd->fetch_array(MYSQLI_ASSOC)) {
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($fila['idmaestro_detalle']); ?></td>
                        <td><?php echo htmlspecialchars($fila['idmaestro']); ?></td>
                        <td><?php echo htmlspecialchars($fila['acercade']); ?></td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='3'>No hay registros disponibles</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<div class="grid-x align-center">
  <small class="copyright">
    <span class=""> ©
      KATARI SOFTWARE
    </span>
    Copyrigth Katari. Inc.</small>
  <small class="copyright">Todos los derechos reservados.</small>
</div>