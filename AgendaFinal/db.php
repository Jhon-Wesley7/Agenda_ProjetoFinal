<?php
$servername = "localhost";
$username = "root";  // User MySQL
$password = "";      // Senha MySQL
$dbname = "agenda_db";  // Nome do Banco

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Atentar para quando criar o banco, criar também as tabelas manualmente.
} // Vale salientar que acabei quebrando bastante cabeça devido criação apenas do banco de dados, achando que criaria a tabela automaticamente.
?>