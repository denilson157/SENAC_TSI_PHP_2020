<?php
chdir(__DIR__);
include "../../view/template/header.php";


include "../../model/db.php";

if (isset($erro)) {
    echo "";
}

if (isset($_GET['apagar'])) {
    delete_user($_GET['apagar']);
}

if (isset($_GET['editar'])) {
    $user = listar($_GET['editar']);

    $nome = $user[0]['nome'] ?? '';
    $email = $user[0]['email'] ?? '';

    include "../../view/edit/index_tpl.php";
}
// include "../../view/edit/index_tpl.php";

if (isset($_GET['gravar'])) {
    $retEdit = update_user($_GET['editar'], $_POST['name'], $_POST['email'], $_POST['password']);
    
}

$lista = listar();

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
                <td><a href="index.php?apagar=<?= $usuario['id'] ?>">Apagar</a></td>
                <td><a href="index.php?editar=<?= $usuario['id'] ?>">Editar</a></td>
            </tr>
        <?php
        endforeach
        ?>
    </tbody>

</table>