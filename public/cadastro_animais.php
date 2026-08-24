<?php

include("../infra/conexao.php");

$nome = $_POST["nome"];
$especie = $_POST["especie"];
$raca = $_POST["raca"];
$idade = $_POST["idade"];
$dono = $_GET["id"];

$sql = "INSERT INTO animais (id_cliente,nome_animal,especie,raca,idade) VALUES(?,?,?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("isssi",$dono,$nome,$especie,$raca,$idade);

$stmt->execute();

header("location:../index.php");
exit;

?>