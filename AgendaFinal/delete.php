<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM contacts WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>