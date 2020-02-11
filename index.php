<?php
$db_Type = "mysql";
$host = "localhost";
$dbName = "netland";
$userName = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $userName, $password);
    echo substr(PHP_VERSION,0,3);
} catch(PDOExeption $e) {
    echo $e->getMessage();
}
?>


