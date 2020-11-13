<?php
chdir(__DIR__);

require '../../model/db.php';

if (isset($_POST['cadastrar'])) {

    // require '../../controller/consist_register.php';

    $id = insert_user($_POST['name'], $_POST['email'], $_POST['password']);

    if ($id) {

        session_start();

        $_SESSION['login'] = $_POST['email'];

        Header("Location: /SENAC_TSI_PHP_2020/usuario/view/list/index.php");
    } else {
        $errors = ["Não foi possível criar o usuário"];
    }
} else {
    $errors = [];
}

Header("Location: /SENAC_TSI_PHP_2020/usuario/view/register/index_tpl.php");
