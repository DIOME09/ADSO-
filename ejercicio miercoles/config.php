<?php

    $dsn = 'mysql:dbname=crud_php;host=localhost';
    $dsuser = 'root';
    $dbpass = '12345678';

    try{
        $pdo = new PDO ($dsn, $dsuser, $dbpass);
    } catch (PDOException $e) {
        echo 'falhou: '.$e->getMessage();
    }

?>