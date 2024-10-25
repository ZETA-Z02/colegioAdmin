<?php require('maestros/index.php'); ?>

<div class="grid-container">
    <div class="grid-x text-center">
        <div class="cell">
            <h2>Eliminar Detalle de Maestro</h2>
            <form action="<?php echo constant('URL'); ?>maestros/eliminarDetalle" method="POST">
                <label>ID Detalle: <input type="number" name="idmaestro_detalle" required></label>
                <button type="submit" class="button alert">Eliminar</button>
            </form>
        </div>
    </div>
</div>
