-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Fev-2022 às 04:20
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
-- Estrutura da tabela `tbl_classe`
--

CREATE TABLE `tbl_classe` (
  `cd_classe` int(11) NOT NULL,
  `nm_classe` varchar(25) NOT NULL,
  `tipo_classe` int(11) NOT NULL,
  `ds_classe` varchar(1000) NOT NULL,
  `img_classe` varchar(100) NOT NULL,
  `classe_for` int(11) NOT NULL,
  `classe_dex` int(11) NOT NULL,
  `classe_int` int(11) NOT NULL,
  `classe_life` int(11) NOT NULL,
  `classe_mana` int(11) NOT NULL,
  `classe_char` int(11) NOT NULL,
  `class_res_for` int(11) NOT NULL,
  `class_res_dex` int(11) NOT NULL,
  `class_res_int` int(11) NOT NULL,
  `cres_for` int(11) NOT NULL,
  `cres_dex` int(11) NOT NULL,
  `cres_int` int(11) NOT NULL,
  `cres_life` int(11) NOT NULL,
  `cres_mana` int(11) NOT NULL,
  `cd.classe_vantagem` int(11) NOT NULL,
  `cd.classe_desvantagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_classe`
--

INSERT INTO `tbl_classe` (`cd_classe`, `nm_classe`, `tipo_classe`, `ds_classe`, `img_classe`, `classe_for`, `classe_dex`, `classe_int`, `classe_life`, `classe_mana`, `classe_char`, `class_res_for`, `class_res_dex`, `class_res_int`, `cres_for`, `cres_dex`, `cres_int`, `cres_life`, `cres_mana`, `cd.classe_vantagem`, `cd.classe_desvantagem`) VALUES
(1, '1', 1, 'Texto pendente de edição, versão generica em live', '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0),
(2, 'Guerreiro', 1, 'Texto pendente de edição, versão generica em live', 'guerreiro.png', 5, 3, 2, 15, 5, 3, 10, 7, 7, 2, 2, 1, 5, 1, 1, 1),
(3, 'Duelista', 1, 'Texto pendente de edição, versão generica em live', 'duelista3.png', 3, 4, 2, 10, 5, 3, 10, 10, 5, 1, 2, 1, 3, 2, 0, 0),
(4, 'Barbaro', 1, 'Texto pendente de edição, versão generica em live', 'barbaro2.jpg', 5, 3, 1, 14, 3, 1, 12, 10, 5, 2, 2, 1, 5, 0, 0, 0),
(5, 'Guardiao', 1, 'Texto pendente de edição, versão generica em live', 'guardiao10.jpg', 8, 1, 1, 18, 5, 1, 14, 8, 8, 3, 1, 0, 6, 1, 0, 0),
(6, 'Cavaleiro', 1, 'Texto pendente de edição, versão generica em live', 'cavaleiro3.jpg', 5, 2, 4, 13, 3, 5, 10, 10, 5, 2, 2, 2, 4, 2, 0, 0),
(7, 'Monge', 1, 'Texto pendente de edição, versão generica em live', 'monge3.png', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0, 0),
(8, 'Paladino', 1, 'Texto pendente de edição, versão generica em live', 'paladino2.jpg', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0, 0),
(9, 'Samurai', 1, 'Texto pendente de edição, versão generica em live', 'samurai2.jpg', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0, 0),
(10, 'Arqueiro', 2, 'Texto pendente de edição, versão generica em live', 'arqueiro2.jpg', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 0, 0),
(11, 'Ladino', 2, 'Texto pendente de edição, versão generica em live', 'ladino2.png', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(12, 'Ninja', 2, 'Texto pendente de edição, versão generica em live', 'ninja2.png', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(13, 'Bardo', 2, 'Texto pendente de edição, versão generica em live', 'bardo2.jpg', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(14, 'Ilusionista', 2, 'Texto pendente de edição, versão generica em live', 'ilusionista3.jpg', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(15, 'Mago', 3, 'Texto pendente de edição, versão generica em live', 'mago.jpg', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(16, 'Engenheiro', 3, 'Texto pendente de edição, versão generica em live', 'engenheiro3.jpg', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(17, 'Feiticeiro', 3, 'Texto pendente de edição, versão generica em live', 'feiticeiro2.jpg', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(18, 'Arcano', 3, 'Texto pendente de edição, versão generica em live', 'arcano.jpg', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(19, 'Necromante', 3, 'Texto pendente de edição, versão generica em live', 'necromante2.png', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(20, 'Piromante', 3, 'Texto pendente de edição, versão generica em live', 'piromante.png', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(21, 'Cronomancer', 3, 'Texto pendente de edição, versão generica em live', 'cronomancer3.jpg', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_classe_desvantagens`
--

CREATE TABLE `tbl_classe_desvantagens` (
  `cd` int(11) NOT NULL,
  `cd_classe` int(11) DEFAULT NULL,
  `cd_desvantagem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_classe_desvantagens`
--

INSERT INTO `tbl_classe_desvantagens` (`cd`, `cd_classe`, `cd_desvantagem`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 3, 3),
(4, 3, 4),
(5, 4, 1),
(6, 4, 6),
(7, 5, 8),
(8, 5, 7),
(9, 6, 9),
(10, 6, 2),
(11, 7, 9),
(12, 7, 10),
(13, 8, 11),
(14, 8, 9),
(15, 9, 9),
(16, 9, 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_classe_vantagens`
--

CREATE TABLE `tbl_classe_vantagens` (
  `cd` int(11) NOT NULL,
  `cd_classe` int(11) DEFAULT NULL,
  `cd_vantagem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_classe_vantagens`
--

INSERT INTO `tbl_classe_vantagens` (`cd`, `cd_classe`, `cd_vantagem`) VALUES
(1, 2, 2),
(2, 2, 4),
(3, 2, 3),
(4, 2, 1),
(5, 3, 10),
(6, 3, 9),
(7, 3, 8),
(8, 3, 7),
(9, 4, 11),
(10, 4, 13),
(11, 4, 14),
(12, 4, 12),
(13, 5, 15),
(14, 5, 16),
(15, 5, 3),
(16, 5, 17),
(17, 6, 21),
(18, 6, 18),
(19, 6, 19),
(20, 6, 20),
(21, 7, 22),
(22, 7, 23),
(23, 7, 10),
(24, 8, 27),
(25, 8, 25),
(26, 8, 26),
(27, 8, 30),
(28, 7, 31),
(29, 9, 20),
(30, 9, 32),
(31, 9, 28),
(32, 9, 33);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_desvantagens`
--

CREATE TABLE `tbl_desvantagens` (
  `cd_desvantagem` int(11) NOT NULL,
  `nm_desvantagem` varchar(50) NOT NULL,
  `ds_desvantagem` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_desvantagens`
--

INSERT INTO `tbl_desvantagens` (`cd_desvantagem`, `nm_desvantagem`, `ds_desvantagem`) VALUES
(1, 'Furioso', 'Tem desvantagem contra provocação, se provocado, ele tem que passar por 2 testes para resistir.'),
(2, 'Barulhento', 'Causa barulho ao realizar ações de movimentação, desvantagem em fuga e furtividade.'),
(3, 'Mãos atadas', ' Se tomar algum tipo de desarme sofre perde o próximo turno.'),
(4, 'Liberdade Vadia', 'A bagagem do duelista só tem espaço para 1 item.'),
(6, 'Inculto', 'ele é analfabeto, e ignorante sobre outras culturas, gerando desvantagem em testes de sabedoria e inteligência'),
(7, 'Burro', 'Tem desvantagem de 100% em testes de inteligência e carisma.'),
(8, 'Gigante', 'Impossibilitado de se esconder efetivamente, bastante barulhento, e não pode realizar manobras de agilidade'),
(9, 'Lealdade', 'Não participa de emboscadas, e nem ataca pessoas indefesas primeiro.'),
(10, 'Desarmado', 'Não pode utilizar armas, não pode utilizar armadura.'),
(11, 'Fiel', 'Cavaleiro honrado com suas convicções, não podendo usar nenhum tipo de magia negra, ou objetos mágicos (pois são profanos), todo dia precisa fazer um ritual com alguma oferenda de valor'),
(12, 'Harakiri', 'Se perder combate justo é obrigado a realizar um Harakiri (morte por sua própria espada), perde 25% da sua vida máxima.');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_raca`
--

CREATE TABLE `tbl_raca` (
  `cd_raca` int(11) NOT NULL,
  `nm_raca` varchar(25) NOT NULL,
  `tipo_raca` int(11) NOT NULL,
  `ds_raca` varchar(1000) NOT NULL,
  `img_raca` varchar(100) NOT NULL,
  `raca_for` int(11) NOT NULL,
  `raca_dex` int(11) NOT NULL,
  `raca_int` int(11) NOT NULL,
  `raca_life` int(11) NOT NULL,
  `raca_mana` int(11) NOT NULL,
  `raca_char` int(11) NOT NULL,
  `raca_res_for` int(11) NOT NULL,
  `raca_res_dex` int(11) NOT NULL,
  `raca_res_int` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_vantagens`
--

CREATE TABLE `tbl_vantagens` (
  `cd_vantagem` int(11) NOT NULL,
  `nm_vantagem` varchar(50) NOT NULL,
  `ds_vantagem` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbl_vantagens`
--

INSERT INTO `tbl_vantagens` (`cd_vantagem`, `nm_vantagem`, `ds_vantagem`) VALUES
(1, 'Guarda alta', 'Tem bônus de redução de dano para qualquer ataque estilo projétil mágico ou físico.'),
(2, 'Golpe certeiro', ' 25% de debilitar movimentação do alvo, não permitindo usar furtividade ou movimentação'),
(3, 'Forte', 'Tem 100% de bônus adicional em teste de força, tem 50% de bônus adicional de vida.'),
(4, 'Armadura pesada', 'Não recebe debuff de movimentação por sobre peso, e é imune a stun'),
(7, 'Duas mãos', 'Permite usar 2 armas curtas causando 50% de dano da primeira arma e 50% da segunda arma.(rola 2 dados)'),
(8, 'Golpe de raspão', 'Ao acertar o dano causa sangramento em armas de corte e laceração em demais armas'),
(9, 'Adaptação', 'Ambiente não gera desvantagens de combate'),
(10, 'Acrobata', 'Pode realizar movimentações de acrobacias, bônus em de 100% em testes de destreza.'),
(11, 'Raiva de sangue', ' Ao ser abatido usa o MP ou SP como se fosse HP, e somente recupera vida ativando a passiva fúria\r\nFúria – imune à efeitos de medo e dor, e se provocado seu primeiro dano é crítico.'),
(12, 'Stamina', 'A cada 30% da vida é convertido em MP, e se eliminar um alvo após ter sua vida zerada, recupera a quantia de MP atual em Hp.\r\nColiseu - Quando luta contra o dobro de inimigos em quantidade, ganha um turno extra.'),
(13, 'Fúria', 'imune à efeitos de medo e dor, e se provocado seu primeiro dano é crítico.\r\n'),
(14, 'Coliseu', 'Quando luta contra o dobro de inimigos em quantidade, ganha um turno extra.'),
(15, 'Maior de sua raça', 'Tamanho descomunal não importa a raça, causa 100% de dano adicional\r\n'),
(16, 'Mão grande', 'Causa dano adicional em ataques desarmados, consegue carregar uma arma de duas mãos só com uma.\r\n'),
(17, 'Pele grossa', 'Pela mais robusta que os demais de sua raça, reduz efeitos de contato em uma rodada'),
(18, 'Combate montado', 'bônus de acerto 50% se estiver combatendo montado, não sofre desvantagem de combate de montarias.\r\n'),
(19, 'Ponto fraco ', 'Chance de crítico de 20% com armas de perfuração (lança e florete)'),
(20, 'Veloz', 'Chance de 20% de receber um segundo turno a cada ação.'),
(21, 'Acompanhante', 'Tem um animal doméstico/campo ou um escudeiro, de acompanhante'),
(22, 'Tai chi', 'Usa transforma todo MP em chi, chi é a energia usada para aplicar seus golpes e cura e diferente do MP é regenerado ao decorrer do combate.\n'),
(23, 'Punho de ferro', 'Punho duro que o aço, todo golpe é considerado esmagamento, após acertar 3 golpes seguidos no alvo da stun CD de 2 vezes por alvo.'),
(25, 'Cura natural', 'Ele é capaz de usar diversas habilidades divinas e de cura com gerando um bônus de 50% em cada cura realizada.'),
(26, 'Luta contra o mal', 'Conhecimento do divino e do maligno, causa 50% dano bônus contra o maligno e suas magias de cura se tornam ofensivas'),
(27, 'Dualidade', 'Ao retorno a sua vida ele ganha dualidade, Ele ganha um dado onde tem 50% de retornar como benigno ou maligno. Benigno sua passiva “cura natural é capaz de reviver alvos abatidos a pouco tempo, e a passiva” luta contra o mal” garante bônus dobrado, porém as desvantagens têm o dobro de efeito. Maligno você perde as desvantagens, e a vantagem “luta contra o mal”, cura natural se torna uma habilidade de roubo de vida.'),
(28, 'Ronin', 'Se estiver lutando só ganha 100% de chance de crítico, desativado após derrotar o primeiro inimigo.'),
(29, 'Sensitividade', 'Chance de 30% adicional de não ser pego por um ataque furtivo e contra-atacar, ao atingir um inimigo furtivo causa dano critico.\r\nTalento Sobrepujado – Pode bloquear ou enfraquecer uma vantagem aleatória de classe do inimigo enquanto luta contra'),
(30, 'Dever divino', 'Tem uma segunda vida dada por seu deus, podendo ser usado somente uma vez na campanha, ao retornar dessa maneira, gira o dado para receber dualidade.'),
(31, 'Punho Veloz', 'Ataca Velozmente, cada ataque é dividido em 3 ataques de 1/3 de dano, cada 1 com sua própria chance de acerto'),
(32, 'Sensitividade', 'Chance de 30% adicional de não ser pego por um ataque furtivo e contra-atacar, ao atingir um inimigo furtivo causa dano critico.'),
(33, 'Talento Sobrepujado', 'Pode bloquear ou enfraquecer uma vantagem aleatória de classe do inimigo enquanto luta contra');

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `vw_desvantages`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `vw_desvantages` (
`cd` int(11)
,`cd_classe` int(11)
,`cd_desvantagem` int(11)
,`nm_desvantagem` varchar(50)
,`ds_desvantagem` varchar(2000)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `vw_vantagens`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `vw_vantagens` (
`cd` int(11)
,`cd_classe` int(11)
,`cd_vantagem` int(11)
,`nm_vantagem` varchar(50)
,`ds_vantagem` varchar(2000)
);

-- --------------------------------------------------------

--
-- Estrutura para vista `vw_desvantages`
--
DROP TABLE IF EXISTS `vw_desvantages`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_desvantages`  AS SELECT `tbl_classe_desvantagens`.`cd` AS `cd`, `tbl_classe`.`cd_classe` AS `cd_classe`, `tbl_desvantagens`.`cd_desvantagem` AS `cd_desvantagem`, `tbl_desvantagens`.`nm_desvantagem` AS `nm_desvantagem`, `tbl_desvantagens`.`ds_desvantagem` AS `ds_desvantagem` FROM ((`tbl_classe_desvantagens` join `tbl_desvantagens` on(`tbl_classe_desvantagens`.`cd_desvantagem` = `tbl_desvantagens`.`cd_desvantagem`)) join `tbl_classe` on(`tbl_classe_desvantagens`.`cd_classe` = `tbl_classe`.`cd_classe`)) ;

-- --------------------------------------------------------

--
-- Estrutura para vista `vw_vantagens`
--
DROP TABLE IF EXISTS `vw_vantagens`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_vantagens`  AS SELECT `tbl_classe_vantagens`.`cd` AS `cd`, `tbl_classe`.`cd_classe` AS `cd_classe`, `tbl_vantagens`.`cd_vantagem` AS `cd_vantagem`, `tbl_vantagens`.`nm_vantagem` AS `nm_vantagem`, `tbl_vantagens`.`ds_vantagem` AS `ds_vantagem` FROM ((`tbl_classe_vantagens` join `tbl_vantagens` on(`tbl_classe_vantagens`.`cd_vantagem` = `tbl_vantagens`.`cd_vantagem`)) join `tbl_classe` on(`tbl_classe_vantagens`.`cd_classe` = `tbl_classe`.`cd_classe`)) ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_classe`
--
ALTER TABLE `tbl_classe`
  ADD PRIMARY KEY (`cd_classe`);

--
-- Índices para tabela `tbl_classe_desvantagens`
--
ALTER TABLE `tbl_classe_desvantagens`
  ADD PRIMARY KEY (`cd`),
  ADD KEY `cd_classe` (`cd_classe`),
  ADD KEY `cd_desvantagem` (`cd_desvantagem`);

--
-- Índices para tabela `tbl_classe_vantagens`
--
ALTER TABLE `tbl_classe_vantagens`
  ADD PRIMARY KEY (`cd`),
  ADD KEY `cd_classe` (`cd_classe`),
  ADD KEY `cd_vantagem` (`cd_vantagem`);

--
-- Índices para tabela `tbl_desvantagens`
--
ALTER TABLE `tbl_desvantagens`
  ADD PRIMARY KEY (`cd_desvantagem`);

--
-- Índices para tabela `tbl_imgclasse`
--
ALTER TABLE `tbl_imgclasse`
  ADD PRIMARY KEY (`cd`),
  ADD KEY `cd_classe` (`cd_classe`);

--
-- Índices para tabela `tbl_raca`
--
ALTER TABLE `tbl_raca`
  ADD PRIMARY KEY (`cd_raca`);

--
-- Índices para tabela `tbl_vantagens`
--
ALTER TABLE `tbl_vantagens`
  ADD PRIMARY KEY (`cd_vantagem`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_classe`
--
ALTER TABLE `tbl_classe`
  MODIFY `cd_classe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `tbl_classe_desvantagens`
--
ALTER TABLE `tbl_classe_desvantagens`
  MODIFY `cd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tbl_classe_vantagens`
--
ALTER TABLE `tbl_classe_vantagens`
  MODIFY `cd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `tbl_desvantagens`
--
ALTER TABLE `tbl_desvantagens`
  MODIFY `cd_desvantagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tbl_imgclasse`
--
ALTER TABLE `tbl_imgclasse`
  MODIFY `cd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `tbl_raca`
--
ALTER TABLE `tbl_raca`
  MODIFY `cd_raca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_vantagens`
--
ALTER TABLE `tbl_vantagens`
  MODIFY `cd_vantagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbl_classe_desvantagens`
--
ALTER TABLE `tbl_classe_desvantagens`
  ADD CONSTRAINT `tbl_classe_desvantagens_ibfk_1` FOREIGN KEY (`cd_classe`) REFERENCES `tbl_classe` (`cd_classe`),
  ADD CONSTRAINT `tbl_classe_desvantagens_ibfk_2` FOREIGN KEY (`cd_desvantagem`) REFERENCES `tbl_desvantagens` (`cd_desvantagem`);

--
-- Limitadores para a tabela `tbl_classe_vantagens`
--
ALTER TABLE `tbl_classe_vantagens`
  ADD CONSTRAINT `tbl_classe_vantagens_ibfk_1` FOREIGN KEY (`cd_classe`) REFERENCES `tbl_classe` (`cd_classe`),
  ADD CONSTRAINT `tbl_classe_vantagens_ibfk_2` FOREIGN KEY (`cd_vantagem`) REFERENCES `tbl_vantagens` (`cd_vantagem`);

--
-- Limitadores para a tabela `tbl_imgclasse`
--
ALTER TABLE `tbl_imgclasse`
  ADD CONSTRAINT `tbl_imgclasse_ibfk_1` FOREIGN KEY (`cd_classe`) REFERENCES `tbl_classe` (`cd_classe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
