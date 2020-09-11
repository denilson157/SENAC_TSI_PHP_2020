<?php

$db = mysqli_connect('localhost', 'root', '', 'php');

$query = mysqli_query($db, 'CREATE TABLE IF NOT EXISTS contatos(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    celular varchar(50)) 
');

if ($query)
    echo "Tabela criada com sucesso";
else
    echo "Erro ao criar tabela";

echo "<br><br>";

$contato = [
    'nome' => "Denílson Pereira",
    'celular' => "(11) 9 6044-0279"
];

$insercao = mysqli_query(
    $db,
    "INSERT INTO contatos (nome, celular)
 VALUES ('{$contato['nome']}','{$contato['celular']}')"
);

if ($insercao)
    echo "Contato inserido com sucesso";
else echo "Erro ao inserir contato";

$query = mysqli_query(
    $db,
    'SELECT * FROM contatos'
);

echo "<br><br>";

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


    while ($registro = $query->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$registro['id']}</td>";
        echo "<td>{$registro['nome']}</td>";
        echo "<td>{$registro['celular']}</td>";
        echo "</tr>";
    }


    ?>

</table>

<?php

echo "<br><br>";

// if (mysqli_query($db, "DELETE FROM contatos"))
//     echo "Contato apagado";
// else
//     echo "erro ao apagar contato";

// mysqli_query($db, "ALTER TABLE contatos AUTO_INCREMENT = 0");


echo "Nome enviado {$_POST['nome']}, número {$_POST['celular']}";