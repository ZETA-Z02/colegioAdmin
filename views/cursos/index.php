<?php require ('views/header.php');?>
<br>
	<div class="grid-container">
		<!-- Poner el codigo en HTML aqui -->
        <div class="grit-x text-center">
        <h2>Administracion de Cursos</h2>
        </div>
        <div class="grid-x grid-padding-x text-center">
        <div class="cell small-12 medium-6 large-4">
            <h5>Ingresar Curso</h5>
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>cursos/cursos">Nuevo</a>

        </div>
        <div class="cell small-12 medium-6 large-4">
            <h5>Ingresar Horario</h5>
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>cursos/horarios">Nuevo</a>
        </div>
		<div class="cell small-12 medium-6 large-4">
            <h5>Lista Horarios</h5>
            <a class="button" href="<?php echo constant('URL') ?>cursos/listahorario">lista</a>
        </div>
        </div>
<hr>
<?php echo $this->data; ?>
<div class="grid-x grid-padding-x">
        <div class="cell small-12 medium-12 large-12">
            <h5>CURSOS</h5>
            <div class="grid-x">
		<table border="3">
			<thead>
				<tr>
                <th>N°</th>
					<th>Curso</th>
					<th>Maestros</th>
					<th>Grado</th>
					<th>Seccion</th>
					<th>Turno</th>
					<th>Horario</th>
					
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

    <script src="<?php echo constant('URL') ?>public/js/horario.js"></script>

<?php require ('views/footer.php');?>