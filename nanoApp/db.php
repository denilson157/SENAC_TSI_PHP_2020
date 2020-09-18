<?php

require_once 'config.php';

try {


    $banco = new PDO(DSN, DB_USER, DB_PASS);
} catch (PDOException $objErro) {
    echo "SGB Indisponível" . $objErro->getMessage();

    exit();
}
