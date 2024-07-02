<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    if ($id) {
        // Update existing contact
        $stmt = $conn->prepare('UPDATE contacts SET name = ?, address = ?, phone = ? WHERE id = ?');
        $stmt->bind_param('sssi', $name, $address, $phone, $id);
    } else {
        // Insert new contact
        $stmt = $conn->prepare('INSERT INTO contacts (name, address, phone) VALUES (?, ?, ?)');
        $stmt->bind_param('sss', $name, $address, $phone);
    }

    if ($stmt->execute()) {
        header('Location: index.php');
        exit();
    } else {
        echo 'Erro ao salvar o contato.';
    }
} else {
    header('Location: index.php');
    exit();
}
?>
