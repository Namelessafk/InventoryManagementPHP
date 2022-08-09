<?php

$host="localhost";
$port=3308;
$socket="";
$user="root";
$password="";
$dbname="ivmanagement";



try {
    $pdo = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>