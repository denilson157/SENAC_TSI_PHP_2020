<?php

require "db.php";


$id = preg_replace('/\D/', '', $_GET['id']);
$msgContatoResposta = "";

if ($banco->exec("DELETE FROM contatos where id = $id") !== false)
    $msgContatoResposta = "Contato excluído com sucesso";
else
    $msgContatoResposta = "Erro ao excluir contato";

include 'apagaContatoTpl.php';
