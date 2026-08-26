<?php

include("../infra/conexao.php");

$id = $_GET["id"];

$sql = "DELETE FROM animais WHERE id_cliente = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("i",$id);

$stmt->execute();

$sql = "DELETE FROM clientes WHERE id_cliente = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("i",$id);

$stmt->execute();

header("location:../index.php");
exit;

?>