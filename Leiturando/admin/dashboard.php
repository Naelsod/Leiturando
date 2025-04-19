<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    // Se não estiver logado, redireciona para o login
    header("Location: login.php");
    exit();
}
?>
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
    <ul>
        <li><a href="registro.php">Registrar usuario</a></li>
        <li><a href="../index.php">Home</a></li>
        <li><a href="../catalogo.php">catalogo</a></li>
        <li><a href="nova_resenha.php">Nova Resenha</a></li>
        <li><a href="nova_noticia.php">Nova Noticia</a></li>
        <li><a href="nova_entrevista.php">Nova Entrevista</a></li>
    </ul>
  </div>
  <a href="logout.php">Sair</a>
</body>
</html>
