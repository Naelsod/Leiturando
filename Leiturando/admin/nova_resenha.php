<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Resenha</title>
  <style>
    body {
      font-family: "Georgia", serif;
      background-color: #e9dbd2;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      background-color: #fff3ed;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      width: 400px;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      font-style: italic;
    }
    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }
    input, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 6px;
      border: 1px solid #ccc;
    }
    .botoes {
  display: flex;
  gap: 10px;
  margin-top: 20px;
}

.botoes button {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background-color: #662d91;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s;
}

.botoes button:hover {
  background-color: #4a1d6e;
}

.botoes button[type="reset"] {
  background-color: #999;
}

.botoes button[type="reset"]:hover {
  background-color: #777;
}
  </style>
</head>
<body>
  <div class="container">
    <h2>Adicionar Nova Resenha</h2>
    <form action="processa_resenha.php" method="POST" enctype="multipart/form-data">
      
    
    <label for="nome_livro">Título do Livro:</label>
      <input type="text" name="nome_livro" id="nome_livro" required>

      <label for="autor_livro">Autor do livro:</label>
      <input type="text" name="autor_livro" id="autor_livro" required>

      <label for="genero">genero do livro?:</label>
      <input type="text" name="genero" id="genero" required>

      <label for="titulo">Título da resenha (é oque aparece na  pagina de resenhas):</label>
      <input type="text" name="titulo" id="titulo" required>
      
      <label for="autor_resenha">Autor da Resenha:</label>
      <input type="text" name="autor_resenha" id="autor_resenha" required>

      <label for="capa">Capa do Livro (Imagem) em png:</label>
      <input type="file" name="capa" id="capa" accept="image/*" required>

      <label for="resumo">Resumo:</label>
      <textarea name="resumo" id="resumo" rows="6" required></textarea>

        <div class="botoes">
        <button type="submit">Cadastrar Resenha</button>
        <button type="reset" style="background-color: #999;">Limpar</button>
        </div>
    </form>
  </div>
</body>
</html>
