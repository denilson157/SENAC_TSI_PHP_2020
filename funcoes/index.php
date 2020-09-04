<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function operacao(float $num1, float $num2, string $verboOperacao = 'somar'): float
{

    switch ($verboOperacao) {
        case 'somar':
            return $num1 + $num2;
        case 'dividir':
            return $num1 / $num2;
        case 'multiplicar':
            return $num1 * $num2;
        case 'subtrair':
            return $num1 - $num2;
        default:
            return 1;
    }
}


echo "O resultado é " . operacao(1, 5, "multiplicar") . " <br><br>";
echo "O resultado é " . operacao(14, 61, "dividir") . " <br><br>";
echo "O resultado é " . operacao(1, 5, "multiplicar") . " <br><br>";




function retornarDiaSemana(int $dia): string
{
    $semanas = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

    return $semanas[$dia] ?? 'Use de Zero a 6' . " <br><br>";
}

echo retornarDiaSemana('10');


$nome = "denilson";


//se eu passar & junto da variavel var, ela iria alterar a instancia de nome também
function muda_nome(string $valor): string
{
    $valor = "outro nome";
    return $valor;
}

echo muda_nome($nome). " <br><br>";

echo "O nome ainda vale " . $nome;
