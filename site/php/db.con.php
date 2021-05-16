<?php 

function open_con() {

    $host='127.0.0.1';
    $db_usr='steph';
    $db_pass='theyellowBartholomew1901!';
    $db_name='test';

    $dsn='mysql:host=localhost;dbname=test';

    try {
        $pdo=new PDO($dsn,$db_usr,$db_pass);
    } catch(\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
}

function close_con($pdo) {
    $pdo=NULL;
}

