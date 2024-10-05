<?php require ('views/header.php');?>

<div class="grid-container">
    <!-- Buttons for adding, deleting, and listing maestros -->
     <table>
    <div class="grit-x text-center">
        <h2>Administracion de Maestros</h2>
        </div>
        <div class="grid-x grid-padding-x text-center">
        <div class="cell small-12 medium-6 large-4">
            <h5>Ingresar Maestros</h5>
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>maestros/insertarmaestro">Nuevo</a>

        </div>
        <div class="cell small-12 medium-6 large-4">
            <h5>Eliminar Maestros</h5>
            <a class="button success rounded-border" href="<?php echo constant('URL') ?>maestros/eliminarmaestro">Eliminar</a>
        </div>
		<div class="cell small-12 medium-6 large-4">
            <h5>Lista Maestros</h5>
            <a class="button" href="<?php echo constant('URL') ?>maestros/listamaestro">Lista</a>
        </div>
        </div>
</table>
    <!-- Poner el codigo en HTML aqui -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Especialidad</th>
                <th>Acciones</th>
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
                        <td>
                            <a href="<?php echo URL . 'maestro/edit/' . $maestro['idmaestro']; ?>" class="button edit">Editar</a>
                            <a href="<?php echo URL . 'maestro/delete/' . $maestro['idmaestro']; ?>" class="button delete" onclick="return confirm('¿Está seguro de eliminar este maestro?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No hay maestros registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

