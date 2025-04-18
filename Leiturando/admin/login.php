<?php
session_start();
include '../includes/conexao.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';
    
    if (!empty($email) && !empty($senha)) {
        $sql = "SELECT id, senha FROM users WHERE email = '$email'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($senha, $row['senha'])) {
                $_SESSION['user_id'] = $row['id'];
                header("Location: home.html");
                exit;
            } else {
                echo "Senha incorreta!";
            }
        } else {
            echo "Usuário não encontrado!";
        }
    } else {
        echo "Preencha todos os campos!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>

<body>
    <style>
        body {
    background-image: url(img/planofundo.jpg);
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

    <form method="POST" action="">
    <div class="pagina">
    <h1>Login</h1>
        <label>E-mail:</label>
        <input type="email" name="email" required><br>
        <label>Senha:</label>
        <input type="password" name="senha" required><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
