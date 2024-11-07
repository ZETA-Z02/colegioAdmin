<?php require('views/header.php'); ?>

<div class="grid-container">
    <div class="grid-x text-center">
        <div class="cell">
            <h2>Eliminar Detalle de Maestro</h2>
            
            <form id="eliminarDetalleForm">
                <label for="id">ID Detalle:</label>
                <input type="number" 
                       id="id" 
                       name="id" 
                       required 
                       min="1"
                       placeholder="Ingrese el ID del detalle">
                
                <button type="button" 
                        class="button alert eliminarDetalles" 
                        style="margin-top: 10px;">
                    Eliminar
                </button>
            </form>
        </div>
    </div>
</div>