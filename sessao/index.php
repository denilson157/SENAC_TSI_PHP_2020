<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$credenciais = [
    0 =>
    [
        'user' => 'deene67@gmail.com',
        'pass' => '123456789'
    ],
    1 =>
    [
        'user' => 'jessicaalmeidau.u@gmail.com',
        'pass' => '123456789'
    ]
];

if (isset($_SESSION['login']))
    include 'index_tpl_logado.php';
else
    if (!isset($_POST['entrar'])) {
    include 'index_tpl.php';
} else {
    $login = $_POST['login'];
    $senha = $_POST['password'];

    if (in_array(['user' => $login, 'pass' => $senha], $credenciais)) {
        $_SESSION['login'] = $login;
        include 'index_tpl_logado.php';
    } else {
        $msg = "Credenciais inválidas, tente novamente";
        include 'index_tpl.php';
    }
}
