-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Nov-2021 às 22:33
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `arma`
--
CREATE DATABASE IF NOT EXISTS `arma` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `arma`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbarmas`
--

CREATE TABLE `tbarmas` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `weapon` varchar(200) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `calibre` varchar(200) NOT NULL,
  `pais` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbarmas`
--

INSERT INTO `tbarmas` (`id`, `nome`, `weapon`, `categoria`, `calibre`, `pais`) VALUES
(8, 'Gabriel Toledo FalleN', 'Awp', 'Rifle', '.50 (12,7 mm)', 'Reino Unido'),
(9, 'Nícolas', 'Aug', 'Assault Rifle', '5,56 mm', 'Austria'),
(10, 'Nícolas', 'Ak-47', 'Assault Rifle', '.308 ( 7,62 mm)', 'Rússia'),
(11, 'Nícolas', 'Desert Eagle', 'Pistols', '.500 ( 12,70 mm)', 'Israel '),
(12, 'Nícolas', 'Glock', 'Pistols', '.380 ( 9,00 mm)', 'Áustria'),
(13, 'Nícolas', 'Usp', 'Pistols', '.380 ( 9,00 mm)', 'Alemanha'),
(14, 'Nícolas', 'Fn Fal', 'Assault Rifle', '.308 ( 7,62 mm)', 'Belgica'),
(15, 'Nícolas', 'Mp9', 'Submachine Gun [SMG]', '.254 ( 6,35 mm)', 'Suiça'),
(16, 'Nícolas', 'Mp5', 'Submachine Gun [SMG]', '.380 ( 9,00 mm)', 'Alemanha'),
(17, 'Nícolas', 'Soco Ingles', 'Armas Branca', 'Corpo a Corpo', 'Inglaterra'),
(18, 'Nícolas', 'm4a1', 'Assault Rifle', '.223 ( 5,56 mm)', 'Estados Unidos'),
(20, 'Nícolas', 'm4a4 ', 'Assault Rifle', '.223 ( 5,56 mm)', 'Estados Unidos');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbarmas`
--
ALTER TABLE `tbarmas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbarmas`
--
ALTER TABLE `tbarmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
