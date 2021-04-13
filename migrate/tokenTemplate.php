<?php

require($_SERVER['DOCUMENT_ROOT'] . '../mysql.php');
if (!empty($dbData)) {
    $host = $dbData['host'];
    $port = $dbData['port'];
    $username = $dbData['username'];
    $password = $dbData['password'];
    $dbname = $dbData['dbname'];
    $dsn = "mysql:host=$host;port=$port";
    try {
        $pdo = new \PDO($dsn, $username, $password);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
    $pdo->query("CREATE DATABASE IF NOT EXISTS $dbname");
    $pdo->query("CREATE TABLE IF NOT EXISTS `nothingtohide`.`nth_token` ( `ID` INT(255) NOT NULL AUTO_INCREMENT , `token` VARCHAR(255) NOT NULL , `IP` VARCHAR(255) NOT NULL , `username` VARCHAR(255) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB");
}