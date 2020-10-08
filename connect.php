<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "tcc";
try {
   $con = new PDO("mysql:host={$host};dbname={$dbname};", $username, $password);
} catch (PDOException $exception) {
   echo "Connection error: " . $exception->getMessage();
}

?>