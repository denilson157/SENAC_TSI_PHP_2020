<?php

require_once 'config.php';

$banco = new PDO(DSN, DB_USER, DB_PASS);

// $deletar = $banco->query('DELETE FROM contatos where id < 3', PDO::FETCH_ASSOC);
// $inserir = $banco->query("INSERT INTO contatos (nome, celular) VALUES ('{$contato['nome']}','{$contato['celular']}')", PDO::FETCH_ASSOC);
// $atualizar = $banco->query("UPDATE FROM contatos set nome 'JESSSS' where id = 4", PDO::FETCH_ASSOC);
// $consulta = $banco->query('SELECT * FROM contatos', PDO::FETCH_ASSOC);

$query = $banco->query($db, 'CREATE TABLE IF NOT EXISTS contatos(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    celular varchar(50)) 
');


$contato = [
    'nome' => $_POST['nome'],
    'celular' => $_POST['celular'],
];


$inserir = $banco->query("INSERT INTO contatos (nome, celular) VALUES ('{$contato['nome']}','{$contato['celular']}')", PDO::FETCH_ASSOC);

$consulta = $banco->query('SELECT * FROM contatos', PDO::FETCH_ASSOC);

?>

<table border="">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Celular</th>
        </tr>
    </thead>

    <?php


    foreach ($consulta as $ind => $registro) {
        echo "<tr>";
        echo "<td>{$registro['id']}</td>";
        echo "<td>{$registro['nome']}</td>";
        echo "<td>{$registro['celular']}</td>";
        echo "</tr>";
    }

    ?>

</table>

<?php
