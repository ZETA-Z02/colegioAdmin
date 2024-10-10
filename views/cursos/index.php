<?php require ('views/header.php');?>
<br>
	<div class="grid-container">
		<!-- Poner el codigo en HTML aqui -->
        <div class="grid-x grid-padding-x text-center">
        <div class="cell small-12 medium-6 large-6">
        <h2>Administracion de Cursos</h2>
        </div>
        <div class="cell small-12 medium-6 large-6">
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>cursos/cursos">Ingresar Curso</a>
        </div>
        </div>
<hr>
<?php echo $this->data; ?>
<div class="grid-x grid-padding-x">
        <div class="cell small-12 medium-12 large-12">
            <h5>CURSOS</h5>
            <div class="grid-x">
		<table border="3" class="stack">
			<thead>
				<tr>
                <th>N°</th>
					<th>Curso</th>
					<th>Maestros</th>
					<th>Grado</th>
					<th>Seccion</th>
					<th>Turno</th>
					<th>Horario</th>
					<th colspan="1">Acciones</th>
				</tr>
			</thead>
<!-- Reprecentacion de informacion de la tabla -->
			<tbody id="cursos">
			</tbody>
		</table>
		</div>
    </div>
</div>
</div>
    <hr>

    <script src="<?php echo constant('URL') ?>public/js/cursos.js"></script>

<?php require ('views/footer.php');?>