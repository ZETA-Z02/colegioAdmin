<?php require ('views/header.php');?>
<br>
  <div class="grid-container">
  <form action="<?php echo constant('URL') ?>cursos/createC" method="POST" enctype="multipart/form-data">
    <div class="grid-x grid-padding-x text-center">
      <div class="cell">
        <h4 class="header">Registrar un nuevo curso</h4>
      </div>      
    </div>
      <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-6">
        <label for="curso">Nombre curso
          <input type="text" name="curso" id="curso" placeholder="curso" required>
        </label>
      </div>
      <div class="cell small-12 medium-6 large-6">
        <label for="idmaestro">Docente
        <select name="idmaestro" id="idmaestro">
            <option value="" selected disabled>Seleccione...</option>
            <?php 
            $res = $this->data;
              while($row = $res->fetch_array(MYSQLI_ASSOC)){
            ?>
              <option value="<?php echo $row['idmaestro'];?>"><?php echo $row['nombre'];?></option>

            <?php   
              }
              ?>
          </select>
        </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-6">
        <label for="idgrado">Grado
        <select name="idgrado" id="idgrado">
            <option value="" selected disabled>Seleccione...</option>
            <?php 
            $res = $this->data2;
              while($row = $res->fetch_array(MYSQLI_ASSOC)){
            ?>
              <option value="<?php echo $row['idgrado'];?>"><?php echo $row['grado'];?></option>

            <?php   
              }
              ?>
          </select>
        </label>
      </div>
      <div class="cell small-12 medium-6 large-6">
        <div id="resultado"></div>
        <label for="idseccion">Seccion
        <select name="idseccion" id="idseccion">
            <option value="" selected disabled>Seleccione...</option>
            <?php 
            $res = $this->data3;
              while($row = $res->fetch_array(MYSQLI_ASSOC)){
            ?>
              <option value="<?php echo $row['idseccion'];?>"><?php echo $row['seccion'];?></option>

            <?php   
              }
              ?>
          </select>
        </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-6">
        <label for="idturno">Turno
        <select name="idturno" id="idturno">
            <option value="" selected disabled>Seleccione...</option>
            <?php 
            $res = $this->data4;
              while($row = $res->fetch_array(MYSQLI_ASSOC)){
            ?>
              <option value="<?php echo $row['idturno'];?>"><?php echo $row['turno'];?></option>

            <?php   
              }
              ?>
          </select>
        </label>
      </div>
      <div class="cell small-12 medium-6 large-6">
        <label for="idhorario">Horario
        <select name="idhorario" id="idhorario">
            <option value="" selected disabled>Seleccione...</option>
            <?php 
            $res = $this->data5;
              while($row = $res->fetch_array(MYSQLI_ASSOC)){
            ?>
              <option value="<?php echo $row['idhorario'];?>"><?php echo $row['horario'];?></option>

            <?php   
              }
              ?>
          </select>
        </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x align-center">
    <div class="cell small-12 medium-6 large-6">
        <label for="status">Status
          <input type="text" name ="status" id="status">
        </label>
      </div>
    </div>
    <div class="cell small-12 medium-6 large-6 text-center">
    <button class="button success" type="submit">Registrar</button>
          <a href="<?php echo constant('URL') ?>cursos" class="button alert">Volver</a>
        </div>        
  </form>
  </div>

<?php require ('views/footer.php');?>
