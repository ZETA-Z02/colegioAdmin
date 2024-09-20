<?php require ('views/header.php');?>
<br>
<hr>
  <div class="grid-container">

  <form action="<?php echo constant('URL') ?>entrega/entidadCreate" method="POST" enctype="multipart/form-data">
    <div class="grid-x grid-padding-x">
      <div class="cell text-center">
        <h4 class="header">Registrar un nuevo horario</h4>
      </div>      
    </div>
      <div class="grid-x grid-padding-x align-center">
      <div class="cell small-12 medium-6 large-">
        <label for="entidad">Ingrese Horario
          <input type="text" name="entidad" id="entidad" placeholder="00:00:00" required>
        </label>
      </div>
    </div>
    <div class="cell small-12 medium-6 large-6 text-center">
    <button class="button success" type="submit">Registrar</button>
          <a href="<?php echo constant('URL') ?>cursos" class="button alert">Volver</a>
        </div>        
  </form>
  </div>


<script src="<?php echo constant('URL'); ?>public/js/entrega.js"></script> 

<?php require ('views/footer.php');?>
