<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'sessao.php';

require_once './model/db.php';

$lista = listar();

require './view/list/index.php';
