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

   <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>CPF</th>
      <th>Ações</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo htmlspecialchars($row['nome']); ?></td>
      <td><?php echo htmlspecialchars($row['cpf']); ?></td>
      <td>
        <a href="editar.php?id=<?php echo $row['id']; ?>">Editar</a>
        <a href="excluir.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Deseja realmente excluir?')">Excluir</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>