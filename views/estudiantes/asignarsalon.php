<?php require ('views/header.php'); ?>

<div class="grid-container">
    <div class="grid-x grid-padding-x text-center callout ">
        <h2>Asignar Estudiante a Salón</h2>
    </div>
    <?php 
    echo $this->mensaje;
    ?>
    <hr>
        <form action="<?php echo constant('URL') ?>estudiantes/AsignarSalon" method="GET" enctype="multipart/form-data"  class="x callout">

            <div class="grid-x grid-padding-x callout">
                <div class="large-6 cell">
                    <label for="idgrados">Grado</label>
                    <select name="idgrados" id="idgrados" required>
                        <option value="" selected disabled>Seleccione un grado...</option>
                        <?php 
                        $res = $this->T2;
                        while($row = $res->fetch_array(MYSQLI_ASSOC)){
                        ?>
                        <option value="<?php echo $row['idgrado'];?>"><?php echo $row['grado'];?></option>

                        <?php   
                        }
                        ?>
                    </select>
                </div>
                <div class="large-6 cell">
                    <label for="idAlumno">CODIGO DEL  ESTUDIANTE</label>
                    <input type="text" name="idAlumno" id="idAlumno" placeholder="Ingrese su codigo aqui" required>
                    <!-- aqui se va a realizar un apartado de busqueda de alumnos -->
                </div>
            </div>
            <div class="grid-x grid-padding-x">
                <div class="large-4 cell">
                    <label for="idTurno">Turno</label>
                    <select name="idTurno" id="idTurno" required>
                        <option value="" selected disabled>Seleccione un turno...</option>
                        <?php 
                        $res = $this->T1;
                        while($row = $res->fetch_array(MYSQLI_ASSOC)){
                        ?>
                        <option value="<?php echo $row['idturno'];?>"><?php echo $row['turno'];?></option>

                        <?php   
                        }
                        ?>
                    </select>
                </div>
                <div class="large-4 cell">
                    <label for="idseccion">Sección</label>
                    <select name="idseccion" id="idseccion" required>
                        <option value="" selected disabled>Seleccione una sección...</option>
                        <?php 
                        $res = $this->T3;
                        while($row = $res->fetch_array(MYSQLI_ASSOC)){
                        ?>
                        <option value="<?php echo $row['idseccion'];?>"><?php echo $row['seccion'];?></option>

                        <?php   
                        }
                        ?>
                    </select>
                </div>
                <div class="large-4 cell">
                    <label for="idsalon">Salón</label>
                    <select name="idsalon" id="idsalon" required>
                        <option value="" selected disabled>Seleccione un salón...</option>
                         <?php 
                        $res = $this->T4;
                        while($row = $res->fetch_array(MYSQLI_ASSOC)){
                        ?>
                        <option value="<?php echo $row['idsalon'];?>"><?php echo $row['salon'];?></option>

                        <?php   
                        }
                        ?>
                    </select>
                </div>
            </div> 
            <div class="grid-x grid-padding-x">
                <div class="large-6 cell">
                    <label for="idmaestro">ID del Maestro</label>
                    <select name="idmaestro" id="idmaestro" required>
                        <option value="" selected disabled>Seleccione un maestro...</option>
                        <?php 
                        $res = $this->T5;
                        while($row = $res->fetch_array(MYSQLI_ASSOC)){
                        ?>
                        <option value="<?php echo $row['idmaestro'];?>"><?php echo $row['nombre']. " " . $row['apellidos'];?></option>

                        <?php   
                        }
                        ?>
                    </select>
                </div>
                <div class="large-6 cell">
                    <label for="idpersonal">ID del Personal Administrativo</label>
                    <select name="idpersonal" id="idpersonal" required>
                        <option value="" selected disabled>Seleccione personal administrativo...</option>
                        <?php 
                        $res = $this->T6;
                        while($row = $res->fetch_array(MYSQLI_ASSOC)){
                        ?>
                        <option value="<?php echo $row['idadministrativo'];?>"><?php echo $row['nombre']. " " . $row['apellidos'];?></option>

                        <?php   
                        }
                        ?>
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

<?php require ('views/footer.php'); ?>
