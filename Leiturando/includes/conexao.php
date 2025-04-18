<?php
$host = 'localhost';     // geralmente localhost mesmo
$user = 'root';          // nome de usuário padrão
$pass = '';              // senha (deixa vazio se não colocou nada)
$db   = 'leiturando_db';    // nome do seu banco de dados

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>