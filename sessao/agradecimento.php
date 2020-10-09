<?php

$nota = $_REQUEST['nota'];

session_start();

echo "Olá, " . $_SESSION['user'];

echo "<br><br>";

if ($nota >= 9) {
    echo "Estamos muito felizes com sua nota :)";
} else {
    echo "O que podemos fazer para você nos dar uma nota 10?";
}

echo "<br><br>";
