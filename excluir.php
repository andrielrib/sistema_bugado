<?php
require_once 'conexao.php';

if (!isset($_GET['id'])) {
    die('ID não informado');
}

$id = $_GET['id'];

$sql = "DELETE FROM clientes";
mysqli_query($conn, $sql);

header('Location: editar.php');
exit;
?>