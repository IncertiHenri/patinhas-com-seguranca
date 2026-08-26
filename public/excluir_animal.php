<?php

include("../infra/conexao.php");

$id = $_GET["id"];

$sql = "DELETE FROM animais WHERE id_animal = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("i",$id);

$stmt->execute();

header("location:listagem_animais.php");
exit;

?>