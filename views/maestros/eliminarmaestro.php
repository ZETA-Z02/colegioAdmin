<?php require ('views/maestros/index.php');?>

	<div class="grid-container">
		<!-- Poner el codigo en HTML aqui -->
        <div class="grid-padding-x text-center">
    <div class="cell small-12 medium-6 large-4">
        <h5>Eliminar Maestros</h5>
        <form action="<?php echo constant('URL') ?>maestros/eliminarmaestro" method="post">
            <label for="idmaestro">ID del Maestro:</label>
            <input type="number" id="idmaestro" name="idmaestro" required>

            <button class="button success rounded-border" type="submit">Eliminar</button>
        </form>
    </div>
</div>
	</div>

<?php require ('views/footer.php');?>