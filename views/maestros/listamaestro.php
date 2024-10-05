<?php require ('views/maestros/index.php');?>

<div class="grid-container">
    <!-- Poner el codigo en HTML aqui -->
    <div class="grid-padding-x text-center">
        <div class="cell small-12 medium-6 large-4">
            <h2>Lista de Maestros</h2>
            <form action="<?php echo constant('URL') ?>maestros/listamaestro" method="get">
                <label for="filtro">Filtro:</label>
                <input type="text" id="filtro" name="filtro" placeholder="Buscar por nombre, apellidos o especialidad">
                <button class="button success rounded-border" type="submit">Buscar</button>
            </form>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Especialidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($this->maestros) && is_array($this->maestros)): ?>
                        <?php foreach ($this->maestros as $maestro): ?>
                            <tr>
                                <td><?php echo $maestro['idmaestro']; ?></td>
                                <td><?php echo $maestro['nombre']; ?></td>
                                <td><?php echo $maestro['apellidos']; ?></td>
                                <td><?php echo $maestro['especialidad']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4">No hay maestros registrados.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require ('views/footer.php');?>