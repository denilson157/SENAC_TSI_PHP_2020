<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=PHP';
$user = 'denilson';
$password = 'A3154868e@';


$db = new PDO($dsn, $user, $password);

$sql = "SELECT nome, telefone FROM cliente";

foreach ($db->query($sql) as $registro) {
    echo "Nome: {$registro['nome']} Telefone: {$registro['telefone']}\n<br>";
}
