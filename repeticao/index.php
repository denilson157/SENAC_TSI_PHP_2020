<?php

date_default_timezone_set('America/Sao_Paulo');

for ($i = 0, $j = 4; $i < 5; $i++, $j--) {
    echo "Linha: $i $j<br>";
}

echo "<br><br>";

$i = 0;

while ($i < 5) {
    echo "Linha: $i<br>";

    $i++;
}
echo "<br><br>";

$i = 0;

do {
    echo "Linha: $i" . "<br>";

    $i++;
} while ($i < 5);

echo "<br><br>";

if (!isset($minhaVar)) {
    echo "variavel nao existe";
}

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

echo "Hoje é $semana[$hoje]";
