<?php

    $fp = fopen('planilha.csv', 'w');

    fwrite($fp, "Nome;Telefone\r\n");
    fwrite($fp, "Ednaldo Perera;1123459685\r\n");

    fclose($fp);

    echo "<pre>Arquivo Gerado\r\n\r\n";

    $fp = fopen('planilha.csv', 'a');

    fwrite($fp, "Ednaldo;1123459685\r\n");
    fwrite($fp, "Perera;1334678546\r\n");

    fclose($fp);

    echo "<pre>Arquivo Alterado\r\n\r\n";

    echo "<pre>Conteúdo do Arquivo:\r\n\r\n";

    $fp = $fp = fopen('planilha.csv', 'r');

    while($linha = fgets($fp))
    {
        echo $linha;
    }

    fclose($fp);