<?php

include "./view/template/header.php";

?>
<table class="table">
    <thead>
        <tr>
            <td>
                Id
            </td>
            <td>
                Nome
            </td>
            <td>
                Email
            </td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($lista as $usuario) :
        ?>
            <tr>
                <td><?= $usuario['id'] ?></td>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['email'] ?></td>
            </tr>
        <?php
        endforeach
        ?>
    </tbody>

</table>