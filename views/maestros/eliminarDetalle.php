<?php require ('views/header.php');?>

<div class="grid-container">
    <div class="grid-x text-center">
        <div class="cell">
            <h2>Eliminar Detalle de Maestro</h2>

            <form action="<?php echo constant('URL'); ?>maestros/eliminarDetalle" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este detalle?');">
                <label for="idmaestro_detalle">ID Detalle:</label>
                <input type="number" id="idmaestro_detalle" name="idmaestro_detalle" required min="1">

                <button type="submit" class="button alert">Eliminar</button>
            </form>
        </div>
    </div>
</div>
