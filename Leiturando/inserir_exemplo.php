<?php
include 'includes/conexao.php';

$titulo = "TEXTE DO KARALHO";
$autorResenha = "DANIEL";
$nomeLivro = "THIAGO TA DANDO";
$autorLivro = "THIAGO";
$genero = "Aventura";
$capa = "colen.png"; // certifique-se de colocar essa imagem em 'uploads/'
$resumo = "Essa é uma resenha divertida sobre um zumbi peculiar no universo Minecraft. O livro é cheio de aventuras e ótimo para crianças.";

$sql = "INSERT INTO resenhas (titulo, autor_resenha, nome_livro, autor_livro, genero, capa, resumo)
        VALUES ('$titulo', '$autorResenha', '$nomeLivro', '$autorLivro', '$genero', '$capa', '$resumo')";

if (mysqli_query($conn, $sql)) {
    echo "Resenha inserida com sucesso!";
} else {
    echo "Erro: " . mysqli_error($conn);
}
?>
