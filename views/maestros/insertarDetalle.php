<?php require('maestros/index.php'); ?>

<div class="grid-container">
    <div class="grid-x text-center">
        <div class="cell">
            <h2>Ingresar Detalle de Maestro</h2>
            <form action="<?php echo constant('URL'); ?>maestros/insertarDetalle" method="POST">
                <label>ID Maestro Detalle: <input type="number" name="idmaestro_detalle" required></label>
                <label>ID Maestro: <input type="number" name="idmaestro" required></label>
                <label>Acerca de: <textarea name="acercade" rows="4" required></textarea></label>
                <button type="submit" class="button success">Guardar</button>
            </form>
        </div>
    </div>
</div>
