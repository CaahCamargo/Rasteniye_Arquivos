<?php
$host = "bppxebupxzuv1cqe1tw4-mysql.services.clever-cloud.com";
$port = "3306";
$dbname = "bppxebupxzuv1cqe1tw4";
$username = "uyxdtln97bpedj4z";
$password = "rGUUNhx4FnBq3kWn32W9";

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    // Configurar o PDO para relatar erros.
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}
?>
