<?php
$hostname='localhost';
$username='root';
$password='';
$database='webshopbap';

try {
    $connection = new PDO('mysql:host='.$hostname.';dbname='.$database.";charset=utf8", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Verbinding is gemaakt!";
} catch(PDOException $e) {
    echo 'Fout bij database verbinding: ' . $e->getMessage() . ' op regel ' . $e->getLine() . ' in ' . $e->getFile();
}
