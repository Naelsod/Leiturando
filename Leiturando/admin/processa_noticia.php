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

// Verifica se os dados foram enviados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
    $fonte = mysqli_real_escape_string($conn, $_POST['fonte']);
    $conteudo = mysqli_real_escape_string($conn, $_POST['conteudo']);
            $sql = "INSERT INTO noticias (titulo, fonte, conteudo, data_publicacao) 
                    VALUES (?, ?, ?, NOW())";
            $stmt = mysqli_prepare($conn, $sql);
        
            // Pegando os dados do formulário
            $titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
            $fonte = mysqli_real_escape_string($conn, $_POST['fonte']);
            $conteudo = mysqli_real_escape_string($conn, $_POST['conteudo']);
        
            // Agora sim 7 valores + data
            mysqli_stmt_bind_param($stmt, "sss", $titulo, $fonte, $conteudo);
        
            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('Noticia cadastrada com sucesso!'); window.location.href='../admin/nova_noticia.php';</script>";
            } else {
                echo "Erro ao cadastrar resenha: " . mysqli_error($conn);
            }
    } 
else {
    echo "Requisição inválida.";
}
?>
