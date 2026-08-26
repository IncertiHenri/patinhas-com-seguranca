<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuário</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

<h1>Editar usuário!</h1>

<?php
include("../infra/conexao.php");

$id_usuario = $_GET["id"];

?>

<form action="editar_usuario.php?id=<?php echo $id_usuario ?>" method="POST">
    <label for="nome">Nome: </label>
    <input type="text" name="nome">
    <label for="fone">Telefone: </label>
    <input type="text" name="fone">
    <button type="submit">Editar</button>
</form>
    
</body>
</html>