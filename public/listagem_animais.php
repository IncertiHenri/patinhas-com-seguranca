<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem dos animais</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    
<table>
                <tr>
                    <th>ID</th>
                    <th>Animal</th>
                    <th>Espécie</th>
                    <th>Raça</th>
                    <th>Idade</th>
                    <th>Dono</th>
                </tr>

    <?php

    include("../infra/conexao.php");
    
    $sql = "SELECT animais.id_animal, animais.nome_animal, animais.especie, animais.raca, animais.idade, clientes.nome_usuario FROM animais INNER JOIN clientes ON animais.id_cliente = clientes.id_cliente";

    $animais = $conn->query($sql);

    while ($animal = mysqli_fetch_assoc($animais)) {
    ?>

                    <tr>
                        <td><?php echo $animal["id_animal"] ?></td>
                        <td><?php echo $animal["nome_animal"] ?></td>
                        <td><?php echo $animal["especie"] ?></td>
                        <td><?php echo $animal["raca"] ?></td>
                        <td><?php echo $animal["idade"] ?></td>
                        <td><?php echo $animal["nome_usuario"] ?></td> 
                        <td>
                            <a href="formulario_editar_animais.php?id=<?php echo $animal["id_animal"] ?>">Editar animal</a>
                            <a href="excluir_animal.php?id=<?php echo $animal["id_animal"] ?>">Excluir animal</a>
                        </td>             
                    </tr>
    <?php } ?>

</body>
</html>