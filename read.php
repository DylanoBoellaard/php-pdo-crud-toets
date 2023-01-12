<?php

// Verbinding SQL server
require('config.php');

// Data sourcename string
$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO ($dsn,$dbUser,$dbPass);
} catch (\Throwable $th) {
    //throw $th;
}

?>