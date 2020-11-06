<?php
session_start();
if (!isset($_SESSION['login']))
    header("Location: /SENAC_TSI_PHP_2020/usuario/view/login/index_tpl.php");
