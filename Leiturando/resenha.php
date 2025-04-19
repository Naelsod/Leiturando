<?php
include 'includes/conexao.php';
/* Essa parte do codigo peda um id especifico*/
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM resenhas WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);
    $resenha = mysqli_fetch_assoc($resultado);

    if (!$resenha) {
        echo "Resenha não encontrada.";
        exit;
    }
} else {
    echo "ID não fornecido.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($resenha['titulo']); ?> - Leiturando</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<style>
    .resenha-detalhe {
  display: flex;
  gap: 40px;
  background-color: #fdfdfd;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 0 15px rgba(0,0,0,0.1);
  max-width: 900px;
  margin: 40px auto;
  flex-wrap: wrap;
}
/**/
.resenha-detalhe .esquerda {
  flex: 1;
  min-width: 250px;
  text-align: center;
}

.resenha-detalhe .esquerda img {
  max-width: 100%;
  height: auto;
  border-radius: 8px;
  margin-bottom: 10px;
}

.nome-livro {
  font-size: 20px;
  font-weight: bold;
  margin: 5px 0;
}

.genero {
  color: #666;
  font-style: italic;
}

.resenha-detalhe .direita {
  flex: 2;
  min-width: 300px;
}

.titulo-resenha {
  font-size: 26px;
  margin-bottom: 10px;
}

.autor-resenha,
.data-resenha {
  color: #444;
  font-size: 14px;
  margin-bottom: 5px;
}

.resumo {
  margin-top: 20px;
  font-size: 16px;
  line-height: 1.6;
}
/*O codigo abaixo pega as informações cada uma de seu id*/
</style>
<body>
    <a href="catalogo.php">CATALOGO</a>
    <div class="resenha-detalhe">
        <div class="esquerda">
            <img src="uploads/<?php echo htmlspecialchars($resenha['capa']); ?>" alt="Capa do livro">
            <h3><strong></strong> <?php echo htmlspecialchars($resenha['nome_livro']); ?></h3>
            <p><strong>Autor do livro:</strong> <?php echo htmlspecialchars($resenha['autor_livro']); ?></p>
            <p><strong>Gênero:</strong> <?php echo htmlspecialchars($resenha['genero']); ?></p>
        </div>
        <div class="direita">
            <h1><?php echo htmlspecialchars($resenha['titulo']); ?></h1>
            <p><strong>Autor da resenha:</strong> <?php echo htmlspecialchars($resenha['autor_resenha']); ?></p>
            <p>Publicada em <?= date('d/m/Y H:i', strtotime($resenha['data_publicacao'])) ?></P>
            <h1>Resenha do livro</h1>
        </div>
        <div class="resumo">
            <p><?php echo nl2br(htmlspecialchars($resenha['resumo'])); ?></p>
        </div>
    </div>
</body>
</html>