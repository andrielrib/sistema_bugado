<?php
require_once 'conexao.php';

if (!isset($_GET['id'])) die('ID não informado.');
$id = (int) $_GET['id'];
$sql = "SELECT * FROM clientes WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if (!$row) die('Cliente não encontrado.');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $cpf  = mysqli_real_escape_string($conn, $_POST['cpf']);
    $sql_update = "UPDATE clientes SET nome = '$nome', cpf = '$cpf' WHERE id = $id";
    mysqli_query($conn, $sql_update);
    header('Location: index.php');
    exit;
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Editar Cliente</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Editar Cliente</h1>
  <form method="post">
    <label>Nome:<br><input type="text" name="nome" value="<?php echo htmlspecialchars($row['nome']); ?>" required></label><br><br>
    <label>CPF:<br><input type="text" name="cpf" value="<?php echo htmlspecialchars($row['cpf']); ?>" required></label><br><br>
    <button type="submit">Atualizar</button>
  </form>
  <p style="text-align:center;"><a href="index.php">Voltar</a></p>
</body>
</html>
