-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/08/2024 às 02:21
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
-- Banco de dados: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `criado_em`) VALUES
(1, 'Gustavo', 'gustavodorcinio@gmail.com', '$2y$10$aMa1s.Fe07w6aI7f.2RMce9AmdPvsTDy1BumjfzBNNym1KAxFZcsC', '2024-08-22 22:15:57'),
(2, 'zoio', 'adadasdw@gmail.vom', '$2y$10$MSd9KFQoH2tMVlpUdQhTtOpDxbCavv7UdbSAwQohaXMp2Koa0MQu6', '2024-08-22 22:34:17'),
(10, 'dfgh', 'gustavodorciddfcnio@gmail.com', '$2y$10$Jeyv9HT/mI2EhXhGqYKHp.LY4uXUgdQFFPul.16uvnfONer/TQcKS', '2024-08-22 22:35:23'),
(11, 'maria', 'zoiaods@xn--gmai-3oa.com', '$2y$10$E5oXcyGDchGvXDc2lNPPMuAQKI4bww5cjZVv/qe0YC0mOcMPnqrUe', '2024-08-22 23:24:10');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
