<?php

require_once './db.php';

$tabelas = array();

$sql = "SELECT id, nome, celular FROM contatos";

foreach ($banco->query($sql) as $contato) {
    $tabelas[$contato['id']] = ['id' => $contato['id'], 'nome' => $contato['nome'], 'cel' => $contato['celular']];
}


include 'listaContatoTpl.php';
