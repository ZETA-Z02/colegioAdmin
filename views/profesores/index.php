<?php require ('views/header.php');?>

<div class="grid-container">
    <!-- Poner el codigo en HTML aqui -->
    <div class="grid-x text-center">
        <h2>Administración de Profesores</h2>
    </div>
    <div class="grid-x grid-padding-x text-center">
        <div class="cell small-12 medium-6 large-6">
            <h5>Ingresar Docente</h5>
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>ingreso/nuevo">Nuevo</a>
        </div>
        <br>
        <div class="cell small-12 medium-6 large-6">
            <h5>Editar Docente</h5>
            <a class="button warning rounded-border" href="<?php echo constant('URL') ?>ingreso/editar">Editar</a>
        </div>
        <br>
        <div class="cell small-12 medium-6 large-6">
            <h5>Eliminar Docente</h5>
            <a class="button alert rounded-border" href="<?php echo constant('URL') ?>ingreso/eliminar">Eliminar</a>
        </div>
    </div>
    <hr>
    <div class="grid-x grid-padding-x text-center">
        <div class="cell small-12 medium-6 large-8">
            <h5>Docentes</h5>
            <table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Experiencia Laboral</th>
                        <th>Certificados</th>
                        <th>Cursos</th>
                        <th>Asignación de Cursos</th>
                        <th>Horarios</th>
                        <th>Turnos</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Los datos de los docentes se muestran aqui-->
                    <?php
                    while($row = mysqli_fetch_assoc($this->data)){
                        echo "<tr>
                                <td>".$row['id']."</td>
                                <td>".$row['nombre']."</td>
                                <td>".$row['apellido']."</td>
                                <td>".$row['correo']."</td>
                                <td>".$row['telefono']."</td>
                                <td>".$row['experiencia_laboral']."</td>
                                <td>".$row['certificados']."</td>
                                <td>".$row['cursos']."</td>
                                <td>".$row['asignacion_cursos']."</td>
                                <td>".$row['horarios']."</td>
                                <td>".$row['turnos']."</td>
                            </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
<?php require ('views/footer.php');?>