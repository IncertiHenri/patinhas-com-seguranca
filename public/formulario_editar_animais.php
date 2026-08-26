<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar animal</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

<h1>Editar animal!</h1>

<?php
include("../infra/conexao.php");

$id_animal = $_GET["id"];

?>

<form action="editar_animal.php?id=<?php echo $id_animal ?>" method="POST">
    <label for="nome">Nome: </label>
    <input type="text" name="nome">
    <label for="especie">Espécie: </label>
    <input type="text" name="especie">
    <label for="raca">Raça: </label>
    <input type="text" name="raca">
    <label for="idade">Idade: </label>
    <input type="number" name="idade">
    <button type="submit">Editar</button>
</form>
    
</body>
</html>