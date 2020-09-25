<?php

require_once './db.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$statement = $banco->prepare("INSERT INTO contatos (nome,celular) 
                                VALUES (:nome,:tel)");

$statement->bindParam(':nome', $_POST['nome']);
$statement->bindParam(':tel', $_POST['celular']);


if ($statement->execute())
    $msg = "Cadastro Realizado";
else
    $msg = "Erro ao cadastrar :(";

include "listaContato.php";
