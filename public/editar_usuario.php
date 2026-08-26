<?php

include("../infra/conexao.php");

$nome = $_POST["nome"];
$telefone = $_POST["fone"];
$id = $_GET["id"];

$sql = "UPDATE clientes SET nome_usuario = ?, telefone = ? WHERE id_cliente = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ssi",$nome,$telefone,$id);

$stmt->execute();

header("location:../index.php");
exit;

?>