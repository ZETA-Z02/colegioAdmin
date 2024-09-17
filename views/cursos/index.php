<?php require ('views/header.php');?>

	<div class="grid-container">
		<!-- Poner el codigo en HTML aqui -->
        <div class="grit-x text-center">
        <h2>Administracion de Cursos</h2>
        </div>
        <div class="grid-x grid-padding-x text-center">
        <div class="cell small-12 medium-6 large-6">
            <h5>ingresar curso</h5>
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>ingreso/nuevo">Nuevo</a>

        </div>
        <div class="cell small-12 medium-6 large-6">
            <h5>ingresar horario</h5>
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>ingreso/nuevo">Nuevo</a>
        </div>
        </div>
<hr>
<div class="grid-x grid-padding-x text-center">
        <div class="cell small-12 medium-6 large-8">
            <h5>cursos</h5>
            <table >
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
			<tbody>
				<!-- Los datos de los qumicos se mostran aqui-->
				<?php
        while($row = mysqli_fetch_assoc($this->data2)){
            echo "<tr>
                    <td>".$row['idcurso']."</td>
                    <td>".$row['curso']."</td>
                    <td>".$row['idmaestro']."</td>
					<td>".$row['idgrado']."</td>
					<td>".$row['idseccion']."</td>
					<td>".$row['idturno']."</td>
					<td>".$row['idhorario']."</td>

                </tr>";
        }
        ?>
			</tbody>
		</table>
        </div>

        <div class="cell small-12 medium-6 large-4">
            <h5>horarios</h5>
            <table >
			<thead>
				<tr>
					<th>N°</th>
					<th>nombre</th>
				</tr>
			</thead>
			<tbody>
				<!-- Los datos de los qumicos se mostran aqui-->
				<?php
        while($row = mysqli_fetch_assoc($this->data3)){
            echo "<tr>
                    <td>".$row['idhorario']."</td>
                    <td>".$row['horario']."</td>
                </tr>";
        }
        ?>
			</tbody>
		</table>
        </div>
        </div>
    </div>
    <hr>
<?php require ('views/footer.php');?>