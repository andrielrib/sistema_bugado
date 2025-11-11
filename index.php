<?php
require_once 'conexao.php';
$sql = "SELECT * FROM clientes ORDER BY id ASC";
$result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Clientes</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Lista de Clientes</h1>
  <p style="text-align:center;"><a href="cadastro.php">Cadastrar Novo</a></p>
