-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 02/02/2014 às 12:17
-- Versão do servidor: 5.5.34-cll
-- Versão do PHP: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `nova99_K0fnE`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `artilheiro`
--

CREATE TABLE IF NOT EXISTS `artilheiro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artilheiro` text COLLATE utf8_unicode_ci NOT NULL,
  `gols` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=94 ;

--
-- Fazendo dump de dados para tabela `artilheiro`
--

INSERT INTO `artilheiro` (`id`, `artilheiro`, `gols`, `time`) VALUES
(11, 'Amaral', 2, 10),
(13, 'Munhoz', 1, 8),
(19, 'Vencato', 1, 9),
(22, 'Matheus', 2, 6),
(23, 'Samuel', 1, 6),
(24, 'Cristiano', 1, 6),
(26, 'Mina Valencia', 1, 2),
(31, 'Grassi', 1, 10),
(36, 'Cabrera', 2, 10),
(37, 'Ayoví', 2, 2),
(40, 'Ari', 1, 5),
(42, 'Roger', 1, 11),
(43, 'Muller', 1, 10),
(44, 'Gottesman', 2, 10),
(46, 'Júnior Tavares', 2, 9),
(47, 'Iago', 1, 1),
(48, 'Gabriel', 1, 1),
(49, 'Gomez', 2, 4),
(50, 'Leal', 2, 4),
(51, 'Contreras', 1, 4),
(53, 'Pablo', 1, 3),
(54, 'Lauter', 2, 3),
(56, 'Léo', 3, 3),
(57, 'Maurício', 1, 6),
(58, 'Carlos Eduardo', 1, 1),
(59, 'Murilo', 2, 1),
(60, 'Léo', 1, 11),
(65, 'Rodrigo Amaral', 1, 10),
(66, 'Matheus Henrique', 2, 3),
(67, 'Bizama', 1, 4),
(69, 'Wesléy', 1, 5),
(70, 'Nícolas Careca', 2, 9),
(71, 'Vico', 2, 9),
(72, 'Endrew', 1, 1),
(74, 'Gustavo', 2, 7),
(77, 'Renan', 1, 7),
(79, 'Benitez', 1, 10),
(80, 'Raí', 4, 5),
(81, 'Sarará', 1, 5),
(82, 'Otormin', 6, 10),
(84, 'Argüello', 4, 8),
(85, 'Ruan', 3, 7),
(86, 'Alan', 1, 7),
(87, 'Thiago', 1, 7),
(89, 'Arlindo', 4, 3),
(90, 'Zé Augusto', 1, 9),
(91, 'Lima', 2, 9),
(92, 'Caíque', 1, 3),
(93, 'Silas', 3, 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogos`
--

CREATE TABLE IF NOT EXISTS `jogos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time1` text COLLATE utf8_unicode_ci NOT NULL,
  `time2` text COLLATE utf8_unicode_ci NOT NULL,
  `gol1` int(11) NOT NULL DEFAULT '-1',
  `gol2` int(11) NOT NULL DEFAULT '-1',
  `empate` int(11) NOT NULL DEFAULT '-1',
  `pontos1` int(11) NOT NULL DEFAULT '-1',
  `pontos2` int(11) NOT NULL DEFAULT '-1',
  `quando` text COLLATE utf8_unicode_ci NOT NULL,
  `hora` int(11) NOT NULL,
  `aconteceu` int(11) NOT NULL,
  `pro1` int(11) NOT NULL,
  `contra1` int(11) NOT NULL,
  `pro2` int(11) NOT NULL,
  `contra2` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=124 ;

--
-- Fazendo dump de dados para tabela `jogos`
--

INSERT INTO `jogos` (`id`, `time1`, `time2`, `gol1`, `gol2`, `empate`, `pontos1`, `pontos2`, `quando`, `hora`, `aconteceu`, `pro1`, `contra1`, `pro2`, `contra2`, `tipo`) VALUES
(90, '7', '8', 1, 1, 1, 1, 1, '20140110', 1930, 1, 1, 1, 1, 1, 0),
(91, '9', '11', 1, 0, 0, 3, 0, '20140110', 2200, 1, 1, 0, 0, 1, 0),
(93, '1', '4', 1, 0, 0, 3, 0, '20140111', 2000, 1, 1, 0, 0, 1, 0),
(94, '3', '6', 1, 1, 1, 1, 1, '20140111', 2200, 1, 1, 1, 1, 1, 0),
(95, '10', '8', 5, 1, 0, 3, 0, '20140112', 1000, 1, 5, 1, 1, 5, 0),
(96, '7', '9', 0, 2, 0, 0, 3, '20140112', 2000, 1, 0, 2, 2, 0, 0),
(97, '2', '4', 1, 0, 0, 3, 0, '20140113', 2000, 1, 1, 0, 0, 1, 0),
(98, '6', '5', 3, 1, 0, 3, 0, '20140113', 2200, 1, 3, 1, 1, 3, 0),
(99, '3', '2', 2, 1, 0, 3, 0, '20140114', 2000, 1, 2, 1, 1, 2, 0),
(100, '11', '7', 0, 1, 0, 0, 3, '20140114', 2200, 1, 0, 1, 1, 0, 0),
(101, '1', '3', 0, 0, 1, 1, 1, '20140115', 2000, 1, 0, 0, 0, 0, 0),
(102, '9', '10', 2, 3, 0, 0, 3, '20140115', 2200, 1, 2, 3, 3, 2, 0),
(103, '6', '2', 0, 1, 0, 0, 3, '20140116', 2000, 1, 0, 1, 1, 0, 0),
(104, '4', '5', 1, 2, 0, 0, 3, '20140116', 2200, 1, 1, 2, 2, 1, 0),
(105, '11', '10', 1, 2, 0, 0, 3, '20140117', 2000, 1, 1, 2, 2, 1, 0),
(106, '9', '8', 1, 1, 1, 1, 1, '20140117', 2200, 1, 1, 1, 1, 1, 0),
(107, '2', '1', 0, 2, 0, 0, 3, '20140118', 1000, 1, 0, 2, 2, 0, 0),
(108, '4', '6', 4, 0, 0, 3, 0, '20140118', 1900, 1, 4, 0, 0, 4, 0),
(109, '5', '3', 1, 4, 0, 0, 3, '20140118', 2100, 1, 1, 4, 4, 1, 0),
(110, '1', '6', 2, 1, 0, 3, 0, '20140119', 1000, 1, 2, 1, 1, 2, 0),
(111, '8', '11', 1, 1, 1, 1, 1, '20140119', 1900, 1, 1, 1, 1, 1, 0),
(112, '10', '7', 3, 1, 0, 3, 0, '20140119', 2100, 1, 3, 1, 1, 3, 0),
(113, '3', '4', 2, 1, 0, 3, 0, '20140120', 2000, 1, 2, 1, 1, 2, 0),
(114, '5', '1', 1, 0, 0, 3, 0, '20140120', 2200, 1, 1, 0, 0, 1, 0),
(115, '5', '2', 0, 0, 1, 1, 1, '20140111', 1800, 1, 0, 0, 0, 0, 0),
(117, '9', '2', 2, 0, 0, 3, 0, '20140122', 1600, 1, 0, 0, 0, 0, 4),
(118, '1', '7', 1, 4, 0, 0, 3, '20140122', 1800, 1, 0, 0, 0, 0, 4),
(119, '10', '5', 4, 1, 0, 3, 0, '20140122', 2000, 1, 0, 0, 0, 0, 4),
(120, '3', '8', 4, 1, 0, 3, 0, '20140122', 2200, 1, 0, 0, 0, 0, 4),
(121, '7', '10', 3, 0, 0, 3, 0, '20140123', 2000, 1, 0, 0, 0, 0, 2),
(122, '9', '3', 2, 3, 0, 0, 3, '20140123', 2200, 1, 0, 0, 0, 0, 2),
(123, '7', '3', 0, 0, 0, 0, 0, '20140124', 1900, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `times`
--

CREATE TABLE IF NOT EXISTS `times` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `logo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `grupo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `abr` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Fazendo dump de dados para tabela `times`
--

INSERT INTO `times` (`id`, `time`, `logo`, `slug`, `grupo`, `abr`) VALUES
(1, 'Criciúma', 'http://nova99.com.br/copasantiago/timeslogo/criciuma.png', 'criciuma', 'a', 'CRI'),
(2, 'Independiente Del Valle (Equador)', 'http://nova99.com.br/copasantiago/timeslogo/independiente.png', 'independiente_del_valle', 'a', 'IDV'),
(3, 'Corinthians (SP)', 'http://nova99.com.br/copasantiago/timeslogo/corinthians.png', 'corinthians', 'a', 'COR'),
(4, 'Universidad de Chile', 'http://nova99.com.br/copasantiago/timeslogo/universidad.jpg', 'universidad_de_chile', 'a', 'UDC'),
(5, 'Cruzeiro (Santiago)', 'http://nova99.com.br/copasantiago/timeslogo/cruzeiro.png', 'cruzeiro', 'a', 'CRU'),
(6, 'Avaí', 'http://nova99.com.br/copasantiago/timeslogo/avai.png', 'avai', 'a', 'AVA'),
(7, 'Internacional', 'http://nova99.com.br/copasantiago/timeslogo/internacional.png', 'inter', 'b', 'INT'),
(8, 'Guarani (Paraguai)', 'http://nova99.com.br/copasantiago/timeslogo/guarani.jpg', 'guarani', 'b', 'GUA'),
(9, 'Grêmio', 'http://nova99.com.br/copasantiago/timeslogo/gremio.png', 'gremio', 'b', 'GRE'),
(10, 'Nacional (Uruguai)', 'http://nova99.com.br/copasantiago/timeslogo/nacional.png', 'nacional', 'b', 'NAC'),
(11, 'São José (POA)', 'http://nova99.com.br/copasantiago/timeslogo/saojose.jpg', 'sao_jose', 'b', 'SJS');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
