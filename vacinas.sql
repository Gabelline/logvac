-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jun-2023 às 23:25
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vacinas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `registrovac`
--

CREATE TABLE `registrovac` (
  `id` int(11) NOT NULL,
  `nomevac` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_de_apli` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dose` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reforco` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `datatime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `registrovac`
--

INSERT INTO `registrovac` (`id`, `nomevac`, `local_de_apli`, `lote`, `dose`, `reforco`, `usuario_id`, `datatime`) VALUES
(2, 'VVS', 'Hospital', '1154', '1', 'N', 12, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idade` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `escolaridade` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regiao` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `idade`, `sexo`, `escolaridade`, `regiao`, `estado`, `cidade`) VALUES
(12, 'Madson Diniz', 'gabelline@outlook.com', '30', 'm', 'Graduado', 'Centro Oeste', 'Go', 'Goiânia');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `registrovac`
--
ALTER TABLE `registrovac`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `registrovac`
--
ALTER TABLE `registrovac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
