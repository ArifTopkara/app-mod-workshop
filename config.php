<?php
// Configurazione del database
$db_host = '35.189.242.168';
$db_name = 'image_catalog';
$db_user = 'phpapp-user';
$db_pass = '2015';

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection error: " . $e->getMessage());
}

session_start();
?>
