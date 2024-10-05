<?php require ('views/maestros/index.php');?>

	<div class="grid-container">
		<!-- Poner el codigo en HTML aqui -->
        <div class="grid-padding-x text-center">
    <div class="cell small-12 medium-6 large-4">
        <h5>Ingresar Maestros</h5>
        <form action="<?php echo constant('URL') ?>maestros/insertarmaestro" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required>

            <label for="especialidad">Especialidad:</label>
            <input type="text" id="especialidad" name="especialidad" required>

            <button class="button success rounded-border" type="submit">Guardar</button>
        </form>
    </div>
</div>
	</div>

<?php require ('views/footer.php');?>