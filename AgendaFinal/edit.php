<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

require 'db.php';

$id = $_GET['id'];
$stmt = $conn->prepare('SELECT * FROM contacts WHERE id = ?');
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$contact = $result->fetch_assoc();

if (!$contact) {
    echo 'Contato não encontrado.';
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Contato</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Editar Contato</h1>
        <form action="save.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($contact['name']); ?>" required>
            <label for="address">Endereço:</label>
            <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($contact['address']); ?>" required>
            <label for="phone">Telefone:</label>
            <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($contact['phone']); ?>" required>
            <input type="submit" value="Salvar">
        </form>
    </div>
</body>
</html>
