<?php

$host = "localhost";
$usuario = "root";
$senha = "root";
$db = "patinhas_seguranca";

$conn = new mysqli($host, $usuario, $senha, $db);

$conn->set_charset("utf8mb4");

?>