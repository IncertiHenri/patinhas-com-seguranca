<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar animal</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

<h1>Cadastrar animal!</h1>

<?php
include("../infra/conexao.php");

$id_usuario = $_GET["id"];

?>

<form action="cadastro_animais.php?id=<?php echo $id_usuario ?>" method="POST">
    <label for="nome">Nome: </label>
    <input type="text" name="nome">
    <label for="especie">Espécie: </label>
    <input type="text" name="especie">
    <label for="raca">Raça: </label>
    <input type="text" name="raca">
    <label for="idade">Idade: </label>
    <input type="number" name="idade">
    <button type="submit">Cadastrar</button>
</form>
    
</body>
</html>