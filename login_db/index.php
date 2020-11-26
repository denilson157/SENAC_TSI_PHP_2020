<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require_once 'db.php';
require_once 'usuario/model/dados.php';

//Exemplo de como fazer o salt na senha
//$pass = password_hash('123456', PASSWORD_DEFAULT);

if (isset($_SESSION['login'])) { //Caso o usuário já esteja logado no sistema

	$foto_vetor = get_imagem($_SESSION['id']);
	$foto = $foto_vetor[0]['foto'];

	include 'header_tpl.php';
	include 'index_menu_tpl.php';
	include 'footer_tpl.php';
} elseif (isset($_POST['entrar'])) {

	$login = filter_var($_POST['login'], FILTER_SANITIZE_EMAIL);
	$senha = $_POST['senha'];


	$r = $db->query("SELECT senha, id FROM usuario WHERE email = '$login'");
	$reg = $r->fetch(PDO::FETCH_ASSOC);
	$hash = $reg['senha'];


	if (password_verify($senha, $hash)) {

		$_SESSION['login'] = $login;
		$_SESSION['id'] = $reg['id'];

		include 'header_tpl.php';
		include 'index_menu_tpl.php';
		include 'footer_tpl.php';
	} else {

		$msg = 'Credenciais inválidas, tente novamente';

		include 'index_tpl.php';
	}
} else {

	include 'index_tpl.php';
}
