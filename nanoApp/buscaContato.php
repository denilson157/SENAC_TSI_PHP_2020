<?php

require_once "db.php";

if (isset($_POST['nome'])) {


    $sql = 'SELECT id, nome, celular from contatos WHERE nome like :nome';

    $nome = '%' . $_POST['nome'] . '%';

    $statement = $banco->prepare($sql);

    $statement->bindParam(':nome', $nome);
    $statement->execute();

    $contatos = array();

    foreach ($statement->fetchAll() as $registro) {
        $contatos[$registro['id']] = ['id' => $registro['id'], 'nome' => $registro['nome'], 'cel' => $registro['celular']];
    }
}
include "retornaBuscaContatoTpl.php";
