<?php require('maestros/index.php'); ?>

<div class="grid-container">
    <div class="grid-x text-center">
        <div class="cell">
            <h2>Eliminar Maestro</h2>
            <form action="<?php echo constant('URL'); ?>maestros/eliminarMaestro" method="POST">
                <label>ID Maestro: <input type="number" name="idmaestro" required></label>
                <button type="submit" class="button alert">Eliminar</button>
            </form>
        </div>
    </div>
</div>
