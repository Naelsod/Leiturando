<?php
include 'includes/conexao.php';

$query = "SELECT id, titulo, capa FROM resenhas ORDER BY data_publicacao DESC";
$resultado = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Catálogo de Resenhas</title>
  <link rel="stylesheet" href="assets/css/style.css">

  <style>
    
    body {
      background: #f4e9e5;
      font-family: 'Georgia', serif;
    }
    .catalogo {
      max-width: 1000px;
      margin: 40px auto 390px ;
      background: #ded1cb;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }
    .catalogo h2 {
      text-align: center;
      font-size: 2em;
      margin-bottom: 30px;
    }
    .livros {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
      gap: 30px;
      justify-items: center;
    }
    .livro {
      text-align: center;
    }
    .livro img {
      width: 100px;
      height: 140px;
      object-fit: cover;
      border-radius: 8px;
    }
    .botao {
      margin-top: 8px;
      background: #f4b6a3;
      border: none;
      padding: 6px 14px;
      border-radius: 20px;
      cursor: pointer;
      font-size: 0.9em;
      transition: 0.3s;
    }
    .botao:hover {
      background: #e5957e;
      color: white;
    }
  </style>
</head>
<body>
<?php include('includes/header.php'); ?>

<div class="catalogo">
  <h2>Resenhas</h2>
  <div class="livros">
    <?php while($resenha = mysqli_fetch_assoc($resultado)): ?>
      <div class="livro">
        <img src="uploads/<?= htmlspecialchars($resenha['capa']) ?>" alt="<?= htmlspecialchars($resenha['titulo']) ?>">
        <br>
        <a href="resenha.php?id=<?= $resenha['id'] ?>" class="botao">Ler mais</a>
      </div>
    <?php endwhile; ?>
  </div>
</div>
<?php include('includes/footer.php'); ?>

</body>
</html>