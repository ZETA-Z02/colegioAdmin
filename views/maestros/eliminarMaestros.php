<div class="grid-container">
    <div class="grid-x text-center">
        <div class="cell">
            <h2>Eliminar Maestro</h2>
            
            <form id="eliminarMaestroForm" onsubmit="return false;">
                <label for="idmaestro">ID Maestro:</label>
                <input type="number"
                       id="idmaestro"
                       name="idmaestro"
                       required
                       min="1"
                       placeholder="Ingrese el ID del maestro">
                
                <button type="button"
                        class="button alert eliminarMaestros"
                        style="margin-top: 10px;">
                    Eliminar
                </button>
                
                <a href="../maestros" class="button secondary" style="margin-top: 10px;">
                    Cancelar
                </a>
            </form>
        </div>
    </div>
</div>