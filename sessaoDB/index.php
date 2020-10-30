<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=PHP';
$user = 'sa';
$password = 'A3154868e@';


$db = new PDO($dsn, $user, $password);


session_start();

$pass = password_hash("123456789", PASSWORD_DEFAULT);

$user = $db->query("INSERT INTO usuario
						(nome, email, senha) 
					VALUES 
                        ('Denílson Pereira', 'deene67@gmail.com', $pass)");
                        

if (isset($_SESSION['login']))
    Header("Location: index_tpl_logado.php");
else
    if (!isset($_POST['entrar'])) {
        Header("Location: index_tpl.php");
} else {
    $login = filter_var($_POST['login'],FILTER_SANITIZE_EMAIL);
    $senha = $_POST['password'];

    $r = $db->query("SELECT senha from usuario where email = '$login' ");
    $reg = $r->fetch(PDO::FETCH_ASSOC);
    $hash = $reg['senha'];


    if (password_verify($senha, $hash[])) {
        $_SESSION['login'] = $login;
        Header("Location: index_tpl_logado.php");
    } else {
        $msg = "Credenciais inválidas, tente novamente";
        Header("Location: index_tpl.php");
    }
}
