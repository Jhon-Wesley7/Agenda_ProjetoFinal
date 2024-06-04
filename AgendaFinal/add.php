<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Contato</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Adicionar Novo Contato</h1>
    <form action="save.php" method="POST">
        <input type="hidden" name="id" value="">
        <p>Nome: <input type="text" name="name"></p>
        <p>Endereço: <input type="text" name="address"></p>
        <p>Telefone:<input type="text" name="phone"></p>
        <p><input type="submit" value="Salvar"></p>
    </form>
</body>
</html>