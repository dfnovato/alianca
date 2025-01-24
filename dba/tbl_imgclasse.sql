-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Fev-2022 às 04:21
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_rpg`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_imgclasse`
--

CREATE TABLE `tbl_imgclasse` (
  `cd` int(11) NOT NULL,
  `cd_classe` int(11) NOT NULL,
  `img_classe` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_imgclasse`
--

INSERT INTO `tbl_imgclasse` (`cd`, `cd_classe`, `img_classe`) VALUES
(1, 2, 'guerreiro2.png'),
(2, 2, 'guerreiro4.jpg'),
(4, 2, 'guerreiro.png'),
(5, 3, 'duelista3.png'),
(6, 3, 'duelista6.png'),
(7, 3, 'duelista5.jpg'),
(8, 3, 'duelista4.png'),
(9, 4, 'barbaro2.jpg'),
(10, 4, 'barbaro4.jpg'),
(11, 4, 'barbaro5.jpg'),
(12, 4, 'barbaro6.png'),
(13, 5, 'guardiao5.jpg'),
(14, 5, 'guardiao8.png'),
(15, 5, 'guardiao9.png'),
(16, 5, 'guardiao7.jpg'),
(17, 5, 'guardiao10.jpg'),
(18, 6, 'cavaleiro3.jpg'),
(19, 6, 'cavaleiro4.png'),
(20, 6, 'cavaleiro5.png'),
(21, 6, 'cavaleiro6.jpg'),
(22, 7, 'monge3.png'),
(23, 7, 'monge4.jpg'),
(24, 7, 'monge5.jpg'),
(25, 5, 'guardiao9.jpg'),
(26, 8, 'paladino3.jpg'),
(27, 8, 'paladino4.jpg'),
(28, 8, 'paladino2.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_imgclasse`
--
ALTER TABLE `tbl_imgclasse`
  ADD PRIMARY KEY (`cd`),
  ADD KEY `cd_classe` (`cd_classe`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_imgclasse`
--
ALTER TABLE `tbl_imgclasse`
  MODIFY `cd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbl_imgclasse`
--
ALTER TABLE `tbl_imgclasse`
  ADD CONSTRAINT `tbl_imgclasse_ibfk_1` FOREIGN KEY (`cd_classe`) REFERENCES `tbl_classe` (`cd_classe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
