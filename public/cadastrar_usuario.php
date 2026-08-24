<?php

include("../infra/conexao.php");

$nome = $_POST["nome"];
$telefone = $_POST["fone"];

$sql = "INSERT INTO clientes (nome_usuario,telefone) VALUES(?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ss",$nome,$telefone);

$stmt->execute();

header("location:../index.php");
exit;

?>