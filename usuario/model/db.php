<?php
chdir(__DIR__);
require_once './config.php';

function listar(): array
{
    global $db;
    $r = $db->query("SELECT id,nome,email from usuarios");
    $reg = $r->fetchAll();


    return is_array($reg) ? $reg : [];
}


function emailExist($email): bool
{

    if (empty($email)) return false;

    global $db;
    $sql = "SELECT id from usuarios where email = :email";

    $statement = $db->prepare($sql);

    $statement->bindParam(':email', $email);

    $statement->execute();

    $reg = $statement->fetch();

    return is_numeric($reg['id']) ? true : false;
}
