<?php require ('views/header.php');?>

<div class="grid-container">
    <div class="grid-x text-center">
        <div class="cell">
            <h2>Eliminar Maestro</h2>

            <form action="<?php echo constant('URL'); ?>maestros/eliminarMaestro" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este maestro?');">
                <label for="idmaestro">ID Maestro:</label>
                <input type="number" id="idmaestro" name="idmaestro" required min="1" placeholder="Ingrese el ID del maestro">

                <button type="submit" class="button alert" style="margin-top: 10px;">Eliminar</button>
            </form>
        </div>
    </div>
</div>
