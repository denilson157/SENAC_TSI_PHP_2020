<?php


require_once '../nanoApp/db.php';
session_start();

if (isset($_POST['nivelSatisfacao'])) {


    $nota = $_POST['nivelSatisfacao'];
    $explicacao = $_POST['motivoNota'];

    $query = $banco->query(
        'CREATE TABLE IF NOT EXISTS avaliacoes(
        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        nota VARCHAR(255) NOT NULL,
        explicacao VARCHAR(255)) ',
        PDO::FETCH_ASSOC
    );

    $sql = "INSERT INTO avaliacoes (nota, explicacao) VALUES (:nota, :explicacao)";

    $statement = $banco->prepare($sql);

    $statement->bindParam(':nota', $nota);
    $statement->bindParam(':explicacao', $explicacao);

    if ($statement->execute()) {

        $msg = "Sua resposta foi registrada";

?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>

        <body>
            <?= $msg ?>
            <a href="agradecimento.php?nota=<?= $nota ?>">Seguir</a>
        </body>

        </html>

<?php

    }
}
