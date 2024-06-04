<?php
$servername = "localhost";
$username = "root";  // Seu nome de usuário MySQL
$password = "";      // Sua senha MySQL
$dbname = "agenda_db";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
