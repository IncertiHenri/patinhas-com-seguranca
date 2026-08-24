<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro usuários</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<h1>Cadastrar usuário!</h1>

<form action="public/cadastrar_usuario.php" method="POST">
    <label for="nome">Nome: </label>
    <input type="text" name="nome">
    <label for="fone">Telefone: </label>
    <input type="text" name="fone">
    <button type="submit">Cadastrar</button>
</form>

    <table>
                <tr>
                    <th>ID</th>
                    <th>Usuário</th>
                    <th>Telefone</th>
                </tr>

    <?php

    include("infra/conexao.php");
    
    $sql = "SELECT * FROM clientes";

    $usuarios = $conn->query($sql);

    while ($usuario = mysqli_fetch_assoc($usuarios)) {
    ?>

                    <tr>
                        <td><?php echo $usuario["id_cliente"] ?></td>
                        <td><?php echo $usuario["nome_usuario"] ?></td>
                        <td><?php echo $usuario["telefone"] ?></td>   
                        <td>
                            <a href="public/cadastro_animais.php?id=<?php echo $usuario["id_cliente"] ?>">Cadastrar animal</a>
                            <a href="public/animais_cliente.php?id=<?php echo $usuario["id_cliente"] ?>">Verificar animais do usuário</a>
                        </td>           
                    </tr>
    <?php } ?>


</body>
</html>