<?php require ('views/header.php');?>
<br>
<link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/entidad.css">
  <div class="grid-container">

  <form action="<?php echo constant('URL') ?>entrega/entidadCreate" method="POST" enctype="multipart/form-data">
    <div class="grid-x grid-padding-x text-center">
      <div class="cell">
        <h4 class="header">Registrar un nuevo curso</h4>
      </div>      
    </div>
      <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-6">
        <label for="entidad">Nombre curso
          <input type="text" name="entidad" id="entidad" required>
        </label>
      </div>
      <div class="cell small-12 medium-6 large-6">
        <label for="sigla">Docente
          <input type="text" name ="sigla" id="sigla">
        </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-6">
        <label for="localidad">Grado
          <input type="text" name ="localidad" id="localidad">
        </label>
      </div>
      <div class="cell small-12 medium-6 large-6">
        <div id="resultado"></div>
        <label for="fecCreate">Seccion
          <input type="text" name="fecCreate" id="fecCreate">
        </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-6">
        <label for="localidad">Turno
          <input type="text" name ="localidad" id="localidad">
        </label>
      </div>
      <div class="cell small-12 medium-6 large-6">
        <label for="sigla">Docente
          <input type="text" name ="sigla" id="sigla">
        </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x align-center">
    <div class="cell small-12 medium-6 large-6">
        <label for="sigla">Docente
          <input type="text" name ="sigla" id="sigla">
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
