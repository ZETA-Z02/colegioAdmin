<?php require ('views/header.php');?>

	<div class="grid-container">
		<!-- Poner el codigo en HTML aqui -->
        <div class="grit-x text-center">
        <h2>Lista de Horarios</h2>
        <div class="cell small-12 medium-6 large-6 text-center">
        <a href="<?php echo constant('URL') ?>cursos" class="button success rounded-border">Volver</a>
    </div>  
        </div>
<hr>
<?php echo $this->data; ?>
<div class="grid-x grid-padding-x">
        
        <div class="cell small-12 medium-12 large-12">
            <h5>HORARIOS</h5>
            <div class="grid-x text-center">
		<table border="3" class="stack">
			<thead>
				<tr>
					<th class="text-center">N°</th>
					<th class="text-center">horario</th>
					
				</tr>
			</thead>
			
<!-- Reprecentacion de informacion de la tabla -->
			<tbody id="horario">
			</tbody>
		</table>
	</div>
        </div>
        </div>
    </div>
    <hr>

    <script src="<?php echo constant('URL') ?>public/js/horario.js"></script>

<?php require ('views/footer.php');?>