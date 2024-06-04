<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Contato</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <h1>Adicionar Contato</h1>
    <form action="save.php" method="post">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="address">Endereço:</label>
        <input type="text" id="address" name="address" required><br>
        <label for="phone">Telefone:</label>
        <input type="text" id="phone" name="phone" required><br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
