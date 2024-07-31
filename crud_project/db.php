<?php
$host = 'localhost';
$dbname = 'patient_db';
$port= '5433';
$username = 'postgres';
$password = 'root';

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname; port=$port" ,$username, $password);
    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected to the database successfully!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
