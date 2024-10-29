<?php require ('views/header.php'); ?>

<div class="grid-container">
    <div class="grid-x text-center">
        <h2>Inscribir Alumno</h2>
        <form action="<?php echo constant('URL') ?>estudiantes/InscribirAlumno" method="GET">
            <div class="grid-x grid-padding-x">
            <div class="large-8 cell">
                    <label for="idalumno">ID del Alumno</label>
                    <input type="text" name="idalumno" id="idalumno" placeholder="Ingrese el ID del alumno" required>
                </div>
            </div>
            <div class="grid-x grid-padding-x">
                <div class="large-6 cell">
                    <label for="idcurso">ID del Curso</label>
                    <select name="idcurso" id="idcurso" required>
                        <option value="" selected disabled>Seleccione un curso...</option>
                        <?php 
                        $res = $this->T1;
                        while($row = $res->fetch_array(MYSQLI_ASSOC)){
                        ?>
                        <option value="<?php echo $row['idcurso'];?>"><?php echo $row['curso'];?></option>

                        <?php   
                        }
                        ?>
                    </select>
                </div>
                <div class="large-6 cell">
                    <label for="idmaestro">ID del Maestro</label>
                    <select name="idmaestro" id="idmaestro" required>
                        <option value="" selected disabled>Seleccione un maestro...</option>
                        <?php 
                        $res = $this->T6;
                        while($row1 = $res->fetch_array(MYSQLI_ASSOC)){
                        ?>
                        <option value="<?php echo $row1['idmaestro'];?>"><?php echo $row1['nombre']. " " . $row1['apellidos'];?></option>

                        <?php   
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-x grid-padding-x">
                <div class="large-6 cell">
                    <label for="idturno">Turno</label>
                    <select name="idturno" id="idturno" required>
                        <option value="" selected disabled>Seleccione un turno...</option>
                        <<?php 
                        $res = $this->T2;
                        while($row1 = $res->fetch_array(MYSQLI_ASSOC)){
                        ?>
                        <option value="<?php echo $row1['idturno'];?>"><?php echo $row1['turno'];?></option>

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
                        $res = $this->T5;
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
                    <label for="idsalon">Salón</label>
                    <select name="idsalon" id="idsalon" required>
                        <option value="" selected disabled>Seleccione un salón...</option>
                        <<?php 
                        $res = $this->T3;
                        while($row1 = $res->fetch_array(MYSQLI_ASSOC)){
                        ?>
                        <option value="<?php echo $row1['idsalon'];?>"><?php echo $row1['salon'];?></option>

                        <?php   
                        }
                        ?>
                    </select>
                </div>
                <div class="large-6 cell">
                    <label for="idhorario">Horario</label>
                    <select name="idhorario" id="idhorario" required>
                        <option value="" selected disabled>Seleccione un horario...</option>
                        <<?php 
                        $res = $this->T4;
                        while($row = $res->fetch_array(MYSQLI_ASSOC)){
                        ?>
                        <option value="<?php echo $row['idhorario'];?>"><?php echo $row['horario'];?></option>

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
                    <button type="submit" class="button success">Inscribir Alumno</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require ('views/footer.php'); ?>
