<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];

if ($id) {
    // Editar contato existente
    $sql = "UPDATE contacts SET name='$name', address='$address', phone='$phone' WHERE id=$id";
} else {
    // Adicionar novo contato
    $sql = "INSERT INTO contacts (name, address, phone) VALUES ('$name', '$address', '$phone')";
}

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
