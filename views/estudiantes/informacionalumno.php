<?php require('views/header.php'); ?>

<div class="grid-container">
    <div class="grid-x text-center">
        <h2>Lista de Alumnos</h2>
    </div>
    
    <!-- para la busqueda -->
    <div class="grid-x grid-padding-x">
        <div class="cell small-12 medium-8">
            <label for="search">Buscar Alumno:</label>
            <input type="text" id="search" name="search" placeholder="Ingrese nombre o ID del alumno">
        </div>
        <div class="cell small-12 medium-4 text-center">
            <button class="button" onclick="buscarAlumno()">Buscar</button>
        </div>
    </div>

    <!-- Tabla de alumnos -->
    <div class="grid-x grid-padding-x">
        <div class="cell small-12">
            <table border="1" class="stack">
                <thead>
                    <tr>
                        <th>ID Alumno</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>codigo</th>
                        <th>accion</th>

                    </tr>
                </thead>
                <tbody >
                   <?php 
                   while($row = mysqli_fetch_assoc($this->data)){
                    echo "<tr> 
                    <td>".$row['idalumno']."</td> 
                    <td>".$row['nombre']."</td>
                    <td>".$row['apellidos']."</td>
                    <td>".$row['codigo']."</td>
                    <td><a class='hollow button success' style='border-radius: 20px;'href='http://localhost/colegioAdmin/estudiantes/detallealumno/".$row['idalumno']."'>Detalles</a></td>
                    </tr>";
                   }
                   ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require('views/footer.php'); ?>
