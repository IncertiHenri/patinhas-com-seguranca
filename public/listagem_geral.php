<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem geral</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    
<table>
                <tr>
                    <th>ID do Dono</th>
                    <th>Dono</th>
                    <th>Telefone</th>
                    <th>ID do animal</th>
                    <th>Animal</th>
                    <th>Espécie</th>
                    <th>Raça</th>
                    <th>Idade</th>
                </tr>

    <?php

    include("../infra/conexao.php");
    
    $sql = "SELECT * FROM clientes";

    $clientes = $conn->query($sql);

    while ($cliente = mysqli_fetch_assoc($clientes)) {
    ?>

                    <tr>
                        <td><?php echo $cliente["id_cliente"] ?></td>
                        <td><?php echo $cliente["nome_usuario"] ?></td>
                        <td><?php echo $cliente["telefone"] ?></td>
                    
    <?php 
    
    $id = $cliente["id_cliente"];

    $sql = "SELECT * FROM animais WHERE id_cliente = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i", $id);

    $stmt->execute();

    $animais = $stmt->get_result();

    while ($animal = mysqli_fetch_assoc($animais)) {
    ?>
                        <td><?php echo $animal["id_animal"] ?></td>  
                        <td><?php echo $animal["nome_animal"] ?></td>
                        <td><?php echo $animal["especie"] ?></td>
                        <td><?php echo $animal["raca"] ?></td>
                        <td><?php echo $animal["idade"] ?></td>   
                    </tr>
    <?php } } ?>

</body>
</html>



