<?php require ('views/header.php');?>

<div class="grid-container">
    <div class="grid-x text-center">
        <div class="cell">
            <h2>Ingresar Maestro</h2>
            <form action="<?php echo constant('URL'); ?>maestros/insertarmaestros" method="POST" enctype="multipart/form-data">
                <label>ID: <input type="number" name="idmaestro" required></label>
                <label>Nombre: <input type="text" name="nombre" required></label>
                <label>Apellidos: <input type="text" name="apellidos" required></label>
                <label>Fecha de Nacimiento: <input type="date" name="fecNacimiento" required></label>
                <label>Foto: <input type="file" name="foto"></label>
                <label>Sexo:
                    <select name="sexo" required>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </label>
                <label>Especialidad: <input type="text" name="especialidad" required></label>
                <label>Ciudad: <input type="text" name="ciudad" required></label>
                <label>Teléfono: <input type="tel" name="telefono" required></label>
                <label>Email: <input type="email" name="email" required></label>
                <label>ID Grado: <input type="number" name="idgrado" required></label>
                <button type="submit" class="button success">Guardar</button>
            </form> 
        </div>
    </div>
</div>
