<?php

$host= 'localhost';
$db = 'MaK';
$user = 'kristina';
$password = 'Tc5-hvp-4FZ-y6J';

$dsn = "mysql:host=$host;dbname=$db;";

try {
  $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $pe) {
    die("Could not connect to the database $db :" . $pe->getMessage());
}
?>
