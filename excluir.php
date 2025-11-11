<?php
require_once 'conexao.php';
if (!isset($_GET['id'])) die('ID não informado.');
$id = (int) $_GET['id'];
$sql = "DELETE FROM clientes WHERE id = $id";
mysqli_query($conn, $sql);
header('Location: index.php');
exit;
?>
