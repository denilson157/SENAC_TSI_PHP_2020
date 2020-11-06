<?php
chdir(__DIR__);
include '../model/db.php';

$nome = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$passwordVerify = $_POST['passwordVerify'] ?? null;

$errors = [];
$password = trim($password);
$passwordVerify = trim($passwordVerify);


if (strlen($nome) < 2) {
    $errors[] = "O nome tem que ter ao menos 2 caracteres";
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Insira um e-mail válido";
} else if (emailExist($email)) {
    $errors[] = "E-mail já cadastrado";
}

if (strlen($password) < 8)
    $errors[] = "A senha precisa ter ao menos 8 caracteres";
else if ($password != $passwordVerify)
    $errors[] = "A senhas precisam ser iguais";

include '../view/register/index_tpl.php';
