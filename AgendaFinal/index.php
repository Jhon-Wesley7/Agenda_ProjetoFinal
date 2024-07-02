<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

require 'db.php';
$result = $conn->query('SELECT * FROM contacts');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Agenda</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>Agenda de Contatos</h1>
        <div class="actions">
            <a href="add.php"><button><i class="fas fa-plus"></i> Adicionar Novo Contato</button></a>
            <a href="logout.php"><button><i class="fas fa-sign-out-alt"></i> Logout</button></a>
        </div>
        <table>
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td><?php echo htmlspecialchars($row['address']); ?></td>
                <td><?php echo htmlspecialchars($row['phone']); ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit"></i> Editar</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>"><i class="fas fa-trash-alt"></i> Excluir</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
