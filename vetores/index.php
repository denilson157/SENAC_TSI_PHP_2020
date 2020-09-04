<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('America/Sao_Paulo');

echo "<br><br>";

$domingo = 0;
$segunda = 1;
$terca = 2;
$quarta = 3;
$quinta = 4;
$sexta = 5;
$sabado = 6;

switch (date('w')) {
    case $domingo:
        echo "domingo";
        break;
    default:
        break;
}


$semana = ['domingo', 'segunda', 'terca', 'quarta', 'quinta', 'sexta', 'sabado'];

$hoje = date('w');

echo "Hoje é $semana[$hoje] <br><br>";

unset($semana);


$semana = ['Sunday' => 0, 'Monday' => 1, 'Terca' => 2, 'Wednsday' => 3, 'Thursday' => 4, 'Friday' => 5, 'Saturday' => 06];


$hoje = date('l');

echo "Hoje é $semana[$hoje] <br><br>";


$usuario = [
    'Nome' => "Luiz Bono",
    'Idade' => 25,
    'Peso' => 67.8,
    'Signo' => 'aquariano'
];

echo "O professor {$usuario['Nome']} tem {$usuario['Idade']} anos, pesa " . number_format($usuario['Peso'], 2, ',', '.') . " e é {$usuario['Signo']} <br><br>";

define('MUNDO', 'Jane Doe');

echo "Olá " . MUNDO . " <br><br>";

$professores = [
    [
        'Nome' => "Luiz Bono",
        'Idade' => 25,
        'Peso' => 67.8,
        'Signo' => 'aquariano'
    ],
    [
        'Nome' => "Thiago Claro",
        'Idade' => 30,
        'Peso' => 76.8,
        'Signo' => 'canceriano'
    ],
    [
        'Nome' => "Thyago Quintas",
        'Idade' => 22,
        'Peso' => 60,
        'Signo' => 'libriano'
    ]
];



echo "<table>";
echo "<thead>";
echo "<tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Idade</th>
    <th>Peso</th>
    <th>Signo</th>
        </tr>
";
echo "</thead>";

echo "<tbody>";

for ($i = 0; $i <= 2; $i++) {
    echo "<tr>";
    echo "<td>" . array_search($professores[$i], $professores) . " </td>";
    echo "<td> {$professores[$i]['Nome']}</td>";
    echo "<td> {$professores[$i]['Idade']}</td>";
    echo "<td> " . number_format($professores[$i]['Peso'], 2, ',', '.') . "</td>";
    echo "<td> {$professores[$i]['Signo']}</td>";
}

echo "</tbody>";
echo "</table>";


echo "Essa é minha tabela <br><br><br><br>";


?>

<table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Peso</th>
            <th>Signo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($professores as $idx => $prof) {
            echo "<tr>";
            echo "<td>" . $idx . " </td>";
            echo "<td> " . $prof['Nome'] . "</td>";
            echo "<td> " . $prof['Idade'] . "</td>";
            echo "<td> " . number_format($prof['Peso'], 2, ',', '.') . "</td>";
            echo "<td> " . $prof['Signo'] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>


<?php



echo "Essa é a tabela do prof <br><br><br><br>";
