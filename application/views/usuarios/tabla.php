<?php
    foreach ($usuarios as $usuario) {
    ?>
        <tr>
            <td><?= $usuario->id?></td>
            <td><?= $usuario->nombre?></td>
            <td><?= $usuario->apellido?></td>
            <td>
                <button>Editar</button>
                <button>Eliminar</button>
            </td>
        </tr>
    <?php
    }
?>