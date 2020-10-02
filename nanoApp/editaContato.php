<?php

require_once "db.php";

if (isset($_POST['id'])) {

    $idAtualizar = preg_replace('/\D/', '', $_POST['id']);
    $nome = $_POST['nome'];
    $cel = $_POST['celular'];

    $sql = 'UPDATE contatos SET nome = :nome, celular = :celular WHERE id = :id ';

    $statement = $banco->prepare($sql);

    $statement->bindParam(':id', $idAtualizar);
    $statement->bindParam(':nome', $nome);
    $statement->bindParam(':celular', $cel);

    if ($statement->execute()) {
        $msg = "Contato Editado com sucesso";
    }
}

$_GET['id'] = $_GET['id'] ?? $_POST['id'] ?? null;
$contato = array();

$id = preg_replace('/\D/', '', $_GET['id']);

$query = "SELECT id,nome,celular from contatos where id = $id";

foreach ($banco->query($query) as $registro) {
    $contato = $registro;
}


include 'editaContatoTpl.php';
