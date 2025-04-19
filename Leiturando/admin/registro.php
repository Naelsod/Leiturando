<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    // Se não estiver logado, redireciona para o login
    header("Location: login.php");
    exit();
}
?>
<?php
include '../includes/conexao.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';
    
    if (!empty($nome) && !empty($email) && !empty($senha)) {
        $sql = "SELECT id FROM admins WHERE email = '$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "E-mail já cadastrado!";
        } else {
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "INSERT INTO admins (nome, email, senha) VALUES ('$nome', '$email', '$senhaHash')";
            if ($conn->query($sql)) {
                echo "Cadastro realizado com sucesso!";
            } else {
                echo "Erro ao cadastrar usuário.";
            }
        }
    } else {
        echo "Preencha todos os campos!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>
    <a href="dashboard.php">Voltar</a>
<style>
        body {
    background-image: url(../assets/img/planofundo.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
}
.pagina{
    padding: 10px;
    border-style: solid;
    border: 20px;
    background-color: hsla(210, 7%, 89%, 0.9) ;
    width: 20%;
    display: flex;
    flex-direction: column;
}

    </style>
    <div class = "pagina">
    <h1>Registro</h1>
    <form method="POST" action="">
        <label>Nome:</label>
        <input type="text" name="nome" required><br>
        <label>E-mail:</label>
        <input type="email" name="email" required><br>
        <label>Senha:</label>
        <input type="password" name="senha" required><br>
        <button type="submit">Registrar</button>
    </form>
    <div>
</body>
</html>