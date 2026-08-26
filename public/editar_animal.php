<?php

include("../infra/conexao.php");

$nome = $_POST["nome"];
$especie = $_POST["especie"];
$raca = $_POST["raca"];
$idade = $_POST["idade"];
$id = $_GET["id"];

$sql = "UPDATE animais SET nome_animal = ?, especie = ?, raca = ?, idade = ? WHERE id_animal = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sssii",$nome,$especie,$raca,$idade,$id);

$stmt->execute();

header("location:listagem_animais.php");
exit;

?>