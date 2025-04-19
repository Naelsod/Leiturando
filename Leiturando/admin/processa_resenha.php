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
    $nome_livro = mysqli_real_escape_string($conn, $_POST['nome_livro']);
    $autor_livro = mysqli_real_escape_string($conn, $_POST['autor_livro']);
    $genero = mysqli_real_escape_string($conn, $_POST['genero']);
    $titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
    $autor_resenha = mysqli_real_escape_string($conn, $_POST['autor_resenha']);
    $resumo = mysqli_real_escape_string($conn, $_POST['resumo']);

    // Upload da imagem
    if (isset($_FILES['capa']) && $_FILES['capa']['error'] === 0) {
        $pasta_destino = '../uploads/';
        if (!is_dir($pasta_destino)) {
            mkdir($pasta_destino, 0755, true);
        }

        $nome_arquivo = uniqid() . '-' . $_FILES['capa']['name'];
        $caminho_completo = $pasta_destino . $nome_arquivo;

        if (move_uploaded_file($_FILES['capa']['tmp_name'], $caminho_completo)) {
            $sql = "INSERT INTO resenhas (titulo, autor_resenha, nome_livro, autor_livro, capa, genero, resumo, data_publicacao) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, NOW())";
            $stmt = mysqli_prepare($conn, $sql);
        
            // Pegando os dados do formulário
            $nome_livro = mysqli_real_escape_string($conn, $_POST['nome_livro']);
            $autor_livro = mysqli_real_escape_string($conn, $_POST['autor_livro']);
            $genero = mysqli_real_escape_string($conn, $_POST['genero']);
        
            // Agora sim 7 valores + data
            mysqli_stmt_bind_param($stmt, "sssssss", $titulo, $autor_resenha, $nome_livro, $autor_livro, $nome_arquivo, $genero, $resumo);
        
            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('Resenha cadastrada com sucesso!'); window.location.href='../admin/nova_resenha.php';</script>";
            } else {
                echo "Erro ao cadastrar resenha: " . mysqli_error($conn);
            }
        }
    } else {
        echo "Arquivo de imagem inválido.";
    }
} else {
    echo "Requisição inválida.";
}
?>
