<?php

require_once './db.php';

$statement = $banco->prepare("INSERT INTO contatos (nome,celular) 
                                VALUES (:nome,:tel)");

$statement->bindParam(':nome', $_POST['nome']);
$statement->bindParam(':tel', $_POST['celular']);


if ($statement->execute())
    $msg = "Cadastro Realizado";
else
    $msg = "Erro ao cadastrar :(";


include 'gravaContatoTpl.php';
