-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Abr-2016 às 22:55
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gentech`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cep`
--

CREATE TABLE IF NOT EXISTS `tb_cep` (
  `id_cep` int(11) NOT NULL AUTO_INCREMENT,
  `logradouro` varchar(100) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `cep` int(8) NOT NULL,
  `uf` char(2) NOT NULL,
  `complemento` varchar(45) NOT NULL,
  PRIMARY KEY (`id_cep`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `tb_cep`
--

INSERT INTO `tb_cep` (`id_cep`, `logradouro`, `bairro`, `cidade`, `cep`, `uf`, `complemento`) VALUES
(11, 'jhjhk', 'kjhjhkjh', 'kjhjh', 976776, 'kj', ''),
(12, 'ghggh', 'ghghg', 'hghgh', 67567, 'gh', ''),
(13, 'ghggh', 'ghghg', 'hghgh', 67567, 'gh', ''),
(14, 'ghggh', 'ghghg', 'hghgh', 67567, 'gh', ''),
(15, 'ghggh', 'ghghg', 'hghgh', 67567, 'gh', ''),
(16, 'igyu', 'ttyu', 'tt', 875865, 'yt', ''),
(17, 'igyu', 'ttyu', 'tt', 875865, 'yt', ''),
(18, 'igyu', 'ttyu', 'tt', 875865, 'yt', ''),
(19, 'Rua 2', 'Vila Nova', 'Barra Mansa', 27321040, 'Rj', ''),
(20, 'ru 2', 'Vila Nova', 'Barra Mansa', 27321040, 'rj', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_coordenador`
--

CREATE TABLE IF NOT EXISTS `tb_coordenador` (
  `id_coordenador` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_coordenador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_coordenador`
--

INSERT INTO `tb_coordenador` (`id_coordenador`, `nome`, `email`) VALUES
(1, 'Thiago Rena', 'thiagorena@gentech.com.br'),
(2, 'Gabriel Leveck', 'gabrielleveck@gentech.com.br'),
(3, 'Augusto Vilela', 'augustovilela@gentech.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curso`
--

CREATE TABLE IF NOT EXISTS `tb_curso` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numero_vagas` int(11) NOT NULL,
  `id_tipo_curso` int(11) NOT NULL,
  `id_coordenador` int(11) NOT NULL,
  PRIMARY KEY (`id_curso`),
  KEY `fk_tb_curso_tb_tipo_curso1_idx` (`id_tipo_curso`),
  KEY `fk_tb_curso_tb_coordenador1_idx` (`id_coordenador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `tb_curso`
--

INSERT INTO `tb_curso` (`id_curso`, `nome`, `numero_vagas`, `id_tipo_curso`, `id_coordenador`) VALUES
(1, 'Administração', 100, 2, 2),
(2, 'Design', 100, 2, 2),
(3, 'Direito', 100, 2, 2),
(4, 'Publicidade e Propaganda', 100, 2, 2),
(5, 'Sistemas de Informação', 100, 2, 2),
(6, 'Branding', 100, 1, 1),
(7, 'Design de Interiores', 100, 1, 1),
(8, 'Direito Civil e Processo Civil', 100, 1, 1),
(9, 'Direito do Trabalho e Processo do Trabalho', 100, 1, 1),
(10, 'MBA em Gestão Estratégica de TI', 100, 1, 1),
(11, 'Gestão Financeira', 100, 3, 3),
(12, 'Montagem e Manutenção de Computadores', 100, 3, 3),
(13, 'Petróleo e Gás', 100, 3, 3),
(14, 'Rotinas Administrativas', 100, 3, 3),
(15, 'Web Design', 100, 3, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_inscricao`
--

CREATE TABLE IF NOT EXISTS `tb_inscricao` (
  `id_insc` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `rg` int(11) NOT NULL,
  `cpf` char(11) NOT NULL,
  `profissao` varchar(50) DEFAULT NULL,
  `id_cep` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL,
  `email_particular` varchar(45) NOT NULL,
  `email_comercial` varchar(45) DEFAULT NULL,
  `tel_comercial` varchar(45) DEFAULT NULL,
  `tel_particular` varchar(45) NOT NULL,
  PRIMARY KEY (`id_insc`),
  UNIQUE KEY `cpf_UNIQUE` (`cpf`),
  KEY `fk_tb_inscricao_tb_cep_idx` (`id_cep`),
  KEY `fk_tb_inscricao_tb_curso1_idx` (`id_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Extraindo dados da tabela `tb_inscricao`
--

INSERT INTO `tb_inscricao` (`id_insc`, `nome`, `rg`, `cpf`, `profissao`, `id_cep`, `id_curso`, `email_particular`, `email_comercial`, `tel_comercial`, `tel_particular`) VALUES
(60, 'Thiago Rena Cunha', 288043938, '14843431745', 'devWeb', NULL, 1, 'Thiago@gmail.com', 'Thiigao@gmail.com', '+5524999978132', '+5524999978132'),
(62, 'Thiago Rena Cunha', 288043938, '23456789878', 'DevWeb', NULL, 13, 'Thiago@gmail.com', 'thiagorenacunha@gmail.com', '+5524999978132', '+5524999978132');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_curso`
--

CREATE TABLE IF NOT EXISTS `tb_tipo_curso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_tipo_curso`
--

INSERT INTO `tb_tipo_curso` (`id`, `nome`) VALUES
(1, 'Extensão'),
(2, 'Graduação'),
(3, 'Pós-Graduação');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_curso`
--
ALTER TABLE `tb_curso`
  ADD CONSTRAINT `fk_tb_curso_tb_coordenador1` FOREIGN KEY (`id_coordenador`) REFERENCES `tb_coordenador` (`id_coordenador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_curso_tb_tipo_curso1` FOREIGN KEY (`id_tipo_curso`) REFERENCES `tb_tipo_curso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_inscricao`
--
ALTER TABLE `tb_inscricao`
  ADD CONSTRAINT `fk_tb_inscricao_tb_cep` FOREIGN KEY (`id_cep`) REFERENCES `tb_cep` (`id_cep`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_inscricao_tb_curso1` FOREIGN KEY (`id_curso`) REFERENCES `tb_curso` (`id_curso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
