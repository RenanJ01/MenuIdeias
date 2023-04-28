-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 28-Abr-2023 às 13:35
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elgames`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fases`
--

DROP TABLE IF EXISTS `tb_fases`;
CREATE TABLE IF NOT EXISTS `tb_fases` (
  `id_fases` int(11) NOT NULL AUTO_INCREMENT,
  `title_fases` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_fases` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_fases` date NOT NULL,
  PRIMARY KEY (`id_fases`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_fases`
--

INSERT INTO `tb_fases` (`id_fases`, `title_fases`, `desc_fases`, `data_fases`) VALUES
(1, 'Teste', 'Esse Ã© o teste numero 1.', '2023-04-26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `nome_users` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_users` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha_users` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero_users` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'O',
  `idade_users` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_users`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_users`, `nome_users`, `username_users`, `senha_users`, `genero_users`, `idade_users`) VALUES
(1, 'Gabriel', 'Gab', 'Gab0123', 'O', 1),
(2, 'Jonatas', 'renanj', '123', 'M', 18),
(3, 'Wes', 'wes', 'weslley', 'M', 11),
(4, 'Wes', 'solgaleio', '123', 'M', 11);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
