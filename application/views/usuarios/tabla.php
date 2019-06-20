<?php
    foreach ($usuarios as $usuario) {
    ?>
        <tr>
            <td><?= $usuario->id?></td>
            <td><?= $usuario->nombre?></td>
            <td><?= $usuario->apellido?></td>
            <td>
                <button class="btnEditar" value = '<?= $usuario->id?>'>Editar</button>
                <button class="btnEliminar" value= '<?= $usuario->id?>'>Eliminar</button>
            </td>
        </tr>
    <?php
    }
?>