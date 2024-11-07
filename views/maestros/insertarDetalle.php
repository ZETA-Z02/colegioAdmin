<?php require('views/header.php'); ?>

<div class="grid-container">
    <div class="grid-x text-center">
        <div class="cell">
            <h2>Ingresar Detalle de Maestro</h2>
            
            <form action="<?php echo('URL'); ?>maestros/insertarDetalles" method="POST" enctype="multipart/form-data">
                <label for="idmaestro_detalle">ID Maestro Detalle:</label>
                <input type="number" 
                       id="idmaestro_detalle" 
                       name="idmaestro_detalle" 
                       required 
                       min="1" 
                       placeholder="Ingrese el ID del detalle">
                
                <label for="idmaestro">ID Maestro:</label>
                <input type="number" 
                       id="idmaestro" 
                       name="idmaestro" 
                       required 
                       min="1" 
                       placeholder="Ingrese el ID del maestro">
                
                <label for="acercade">Acerca de:</label>
                <textarea id="acercade" 
                         name="acercade" 
                         rows="4" 
                         required 
                         placeholder="Ingrese información adicional del maestro">
                </textarea>
                
                <button type="button" 
                        id="insertarDetalles" 
                        class="button success" 
                        style="margin-top: 10px;">
                    Guardar
                </button>
            </form>
        </div>
    </div>
</div>