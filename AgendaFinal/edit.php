<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM contacts WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contato</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <h1>Editar Contato</h1>
    <form action="save.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <p>Nome: <input type="text" name="id" value="<?php echo $row['name']; ?>"</p>
    <p>Endereço: <input type="text" name="address" value="<?php echo $row['address']; ?>"</p>
    <p>Telefone: <input type="text" name="phone" value="<?php echo $row['phone']; ?>"</p>
    <p><input type="submit" value="Salvar"></p>
    </form>
</body>
</html>