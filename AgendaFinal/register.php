<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
    $stmt->bind_param('ss', $username, $password);

    if ($stmt->execute()) {
        echo 'Usuário registrado com sucesso.';
    } else {
        echo 'Erro ao registrar usuário.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Registrar</h1>
        <form action="register.php" method="POST">
            <label for="username">Nome de Usuário:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Registrar">
        </form>
    </div>
</body>
</html>
