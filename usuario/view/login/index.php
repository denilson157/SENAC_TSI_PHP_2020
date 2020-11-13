<?php

require_once '../../model/config.php';

session_start();

if (isset($_SESSION['login']))
	Header("Location: /SENAC_TSI_PHP_2020/usuario/view/list/index.php");
else
    if (!isset($_POST['entrar'])) {
	// Header("Location: index_tpl.php");
} else {
	$login = filter_var($_POST['login'], FILTER_SANITIZE_EMAIL);
	$senha = $_POST['password'];

	$r = $db->query("SELECT senha from usuarios where email = '$login' ");
	$reg = $r->fetch(PDO::FETCH_ASSOC);
	$hash = $reg['senha'];


	if (password_verify($senha, $hash)) {
		$_SESSION['login'] = $login;
		Header("Location: /SENAC_TSI_PHP_2020/usuario/view/list/index.php");
	} else {
		$msg = "Credenciais inválidas, tente novamente";
		Header("Location: /SENAC_TSI_PHP_2020/usuario/view/login/index_tpl.php");
	}
}
