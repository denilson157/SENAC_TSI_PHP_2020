<?php

    $dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=PHP';
    $user = 'sa';
    $password = 'A3154868e@';

    $db = new PDO($dsn, $user, $password);