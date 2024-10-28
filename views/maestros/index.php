<?php require ('views/header.php');
$datos = $this->datos;
$datosd = $this->datosd;
?>

<div class="grid-container fluid margin-top-2">
    <!-- Sección de Administración de Maestros -->
    <div class="grid-x grid-padding-x">
        <div class="cell">
            <div class="callout primary">
                <h2 class="text-center">Administración de Maestros</h2>
            </div>
        </div>
    </div>

    <!-- Botones de acción -->
    <div class="grid-x grid-padding-x text-center margin-bottom-2">
        <div class="cell small-12 medium-6 large-4">
            <div class="card">
                <div class="card-section">
                    <h5>Ingresar Maestros</h5>
                    <a class="button expanded success hollow rounded" href="<?php echo constant('URL') ?>maestros/insertarMaestro">
                        <i class="fas fa-user-plus"></i> Nuevo
                    </a>
                </div>
            </div>
        </div>
        <div class="cell small-12 medium-6 large-4">
            <div class="card">
                <div class="card-section">
                    <h5>Eliminar Maestros</h5>
                    <a class="button expanded alert hollow rounded" href="<?php echo constant('URL') ?>maestros/eliminarMaestro">
                        <i class="fas fa-user-minus"></i> Eliminar
                    </a>
                </div>
            </div>
        </div>
        <div class="cell small-12 medium-6 large-4">
            <div class="card">
                <div class="card-section">
                    <h5>Lista Maestros</h5>
                    <a class="button expanded secondary hollow rounded" href="<?php echo constant('URL') ?>maestros/listaMaestros">
                        <i class="fas fa-list"></i> Lista
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabla de Maestros -->
    <div class="grid-x grid-padding-x">
        <div class="cell">
            <div class="card">
                <div class="card-section">
                    <div class="table-scroll">
                        <table class="hover unstriped">
                            <thead class="background-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Fecha Nacimiento</th>
                                    <th>Foto</th>
                                    <th>Sexo</th>
                                    <th>Especialidad</th>
                                    <th>Ciudad</th>
                                    <th>Teléfono</th>
                                    <th>Email</th>
                                    <th>Grado</th>
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
                                    echo '<tr><td colspan="11" class="text-center">No hay registros disponibles</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de Detalles de Maestros -->
    <div class="grid-x grid-padding-x margin-top-2">
        <div class="cell">
            <div class="callout secondary">
                <h2 class="text-center">Administración de Detalles de Maestros</h2>
            </div>
        </div>
    </div>

    <!-- Botones de acción para detalles -->
    <div class="grid-x grid-padding-x text-center margin-bottom-2">
        <div class="cell small-12 medium-6 large-4">
            <div class="card">
                <div class="card-section">
                    <h5>Ingresar Detalle</h5>
                    <a class="button expanded success hollow rounded" href="<?php echo constant('URL') ?>maestros/insertarDetalle">
                        <i class="fas fa-plus-circle"></i> Nuevo
                    </a>
                </div>
            </div>
        </div>
        <div class="cell small-12 medium-6 large-4">
            <div class="card">
                <div class="card-section">
                    <h5>Eliminar Detalle</h5>
                    <a class="button expanded alert hollow rounded" href="<?php echo constant('URL') ?>maestros/eliminarDetalle">
                        <i class="fas fa-minus-circle"></i> Eliminar
                    </a>
                </div>
            </div>
        </div>
        <div class="cell small-12 medium-6 large-4">
            <div class="card">
                <div class="card-section">
                    <h5>Lista Detalles</h5>
                    <a class="button expanded secondary hollow rounded" href="<?php echo constant('URL') ?>maestros/listarDetalles">
                        <i class="fas fa-list-alt"></i> Lista
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabla de Detalles -->
    <div class="grid-x grid-padding-x">
        <div class="cell">
            <div class="card">
                <div class="card-section">
                    <div class="table-scroll">
                        <table class="hover unstriped">
                            <thead class="background-secondary">
                                <tr>
                                    <th>ID Detalle</th>
                                    <th>ID Maestro</th>
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
                                    echo '<tr><td colspan="3" class="text-center">No hay registros disponibles</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="grid-x align-center margin-top-2 margin-bottom-1">
    <div class="cell small-12 text-center">
        <small class="copyright">© KATARI SOFTWARE</small>
        <small class="copyright">Copyright Katari Inc. Todos los derechos reservados.</small>
    </div>
</footer>