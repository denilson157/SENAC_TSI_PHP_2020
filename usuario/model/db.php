<?php
chdir(__DIR__);
require_once './config.php';

function listar(int $id = null): array
{
    global $db;

    $sts = '';

    if (!is_null($id)) {
        $sts = "WHERE id = " . $id;
    }

    $r = $db->query("SELECT id, nome, email from usuarios $sts");

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

function insert_user(string $name, string $email, string $password)
{
    global $db;

    $pass = password_hash($password, PASSWORD_DEFAULT);

    $statement = $db->prepare('INSERT INTO usuarios
                (nome, email, senha)
                VALUES
                (:name, :email, :password)
    ');

    $statement->bindParam(':name', $name);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':password', $pass);

    $statement->execute();

    return $db->lastInsertId();
}

function update_user(int $id, string $name, string $email, string $password)
{
    global $db;

    $pass = password_hash($password, PASSWORD_DEFAULT);

    $statement = $db->prepare('UPDATE usuarios
                set nome = :name, email = :email, senha = :password
                WHERE id = :id)
    ');

    $statement->bindParam(':id', $id);
    $statement->bindParam(':name', $name);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':password', $pass);

    $statement->execute();

    return $db->lastInsertId();
}


function delete_user(int $id): bool
{
    if (is_numeric($id)) {
        global $db;

        $sql = "DELETE FROM usuarios where id = $id";

        if ($db->exec($sql) > 0)
            return true;
        else
            return false;
    } else return false;
}
