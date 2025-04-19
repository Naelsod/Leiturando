-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/04/2025 às 03:51
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `leiturando_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `admins`
--

INSERT INTO `admins` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Daniel', 'fael459@gmail.com', '$2y$10$.7Ngyj1TnaLEEL49JJyhCu27Z2Ex2lMWkfIwafCMmcYCar67sfujy');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `fonte` varchar(255) NOT NULL,
  `data_publicacao` date NOT NULL,
  `conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `fonte`, `data_publicacao`, `conteudo`) VALUES
(1, 'dasdasa', 'dasdasdas', '2025-04-18', 'dasdasdasdas');

-- --------------------------------------------------------

--
-- Estrutura para tabela `resenhas`
--

CREATE TABLE `resenhas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor_resenha` varchar(255) DEFAULT NULL,
  `nome_livro` varchar(255) DEFAULT NULL,
  `autor_livro` varchar(255) DEFAULT NULL,
  `capa` varchar(255) DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `resumo` text DEFAULT NULL,
  `data_publicacao` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `resenhas`
--

INSERT INTO `resenhas` (`id`, `titulo`, `autor_resenha`, `nome_livro`, `autor_livro`, `capa`, `genero`, `resumo`, `data_publicacao`) VALUES
(41, 'a', 'a', 'a', 'a', '6802d483db973-Percy.png', 'a', 'a', '2025-04-18 19:38:59'),
(42, 'a', 'a', 'a', 'a', '6802dde838217-Percy.png', 'a', 'a', '2025-04-18 20:19:04'),
(43, 'DSAKDKASDKAS', 'a', 'aTESTANDO UM NOVO LIVRO', 'ADKSDKADKAS', '6802dee934a4f-Percy.png', 'SDKADKASDKASDKAS', 'a', '2025-04-18 20:23:21'),
(44, 'Um Alerta Aterrorizante Sobre o Controle Totalitário', 'João Silva', '1984', 'George Orwell', '6802e21cee707-Collen Hoover 1.png', 'Distopia/Ficção Política', 'Em um futuro sombrio onde o governo (o \\\"Partido\\\") controla até os pensamentos, Winston Smith trabalha reescrevendo a história para apagar fatos inconvenientes. Quando se rebela contra o sistema e se apaixona por Julia, descobre que o Big Brother está sempre de olho. Uma obra-prima sobre vigilância, manipulação e a perda da liberdade.', '2025-04-18 20:37:00'),
(45, 'A Jornada que Ensina o Verdadeiro Sentido da Vida', 'Maria Oliveira', 'O Pequeno Príncipe', 'Antoine de Saint-Exupéry', '6802e27d7be5d-Percy.png', 'Fábula/Filosófico', 'Um piloto perdido no deserto encontra um príncipe de outro planeta, que conta histórias sobre sua viagem por mundos diferentes. Com linguagem poética, o livro aborda amizade, amor e a visão das crianças sobre a vida. Frase icônica: \\\"O essencial é invisível aos olhos.\\\"', '2025-04-18 20:38:37'),
(46, 'A Saga da Família Buendía e o Fim de Macondo', 'Carlos Ribeiro', 'Cem Anos de Solidão', 'Gabriel García Márquez', '6802e2b94e06c-Collen Hoover 1.png', 'Realismo Mágico', 'A história da família Buendía ao longo de gerações na cidade fictícia de Macondo, onde eventos mágicos se misturam à realidade. Um retrato sobre amor, guerra, loucura e o destino inevitável. Obra-prima de García Márquez e marco do realismo mágico.', '2025-04-18 20:39:37'),
(47, 'O robinho e o daniel ', 'Daniel', 'Robson machado', 'Daniel Soares', '6802e79d20049-Collen Hoover 1.png', 'AVentura', 'Santiago, um pastor andaluz, parte em uma jornada pelo deserto em busca de um tesouro escondido. A história fala sobre destino, perseverança e escutar o coração. Frase célebre: \\\"Quando você quer algo, todo o universo conspira a seu favor.\\\"', '2025-04-18 21:00:29'),
(48, 'O cauan vendo site', 'Daniel', 'Cauan', 'Cauan', '6802eb0263444-Percy.png', 'Aventura', 'Em Derry, crianças enfrentam um ser sobrenatural que assume a forma de seus maiores medos (principalmente o palhaço Pennywise). Anos depois, adultos, precisam voltar para enfrentá-lo novamente. Mistura terror, amizade e memórias traumáticas.', '2025-04-18 21:14:58'),
(49, 'dasdasdasd', 'dasdasda', 'asdasdasd', 'dasasdasdas', '6802ef8178197-Percy.png', 'dasdasdasd', 'dasdasdasdasdas', '2025-04-18 21:34:09'),
(50, 'dasdasdas', 'dasdasdas', 'adasdasda', 'dasdasdasd', '6802f3d5c0203-Percy.png', 'dsadasdas', 'dadadaadsasd', '2025-04-18 21:52:37'),
(51, 'dasdasdas', 'dasdasdas', 'adasdasda', 'dasdasdasd', '6802f3dc0e6df-Percy.png', 'dsadasdas', 'dadadaadsasd', '2025-04-18 21:52:44'),
(52, 'dasdasdas', 'dasdasdas', 'adasdasda', 'dasdasdasd', '6802f3e217c48-Percy.png', 'dsadasdas', 'dadadaadsasd', '2025-04-18 21:52:50'),
(53, 'asdasdasdas', 'dasdasdas', 'adsadasd', 'asdasdasdasd', '6802f415a9c3a-Percy.png', 'asdasdasd', 'asdasdasdasdas', '2025-04-18 21:53:41'),
(54, 'dasdasdasd', 'asdasdas', 'dasdasdas', 'dasdasdas', '6802f43376fcb-Percy.png', 'dasdasdas', 'dasdasdasdasdasdasd', '2025-04-18 21:54:11');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `resenhas`
--
ALTER TABLE `resenhas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `resenhas`
--
ALTER TABLE `resenhas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
