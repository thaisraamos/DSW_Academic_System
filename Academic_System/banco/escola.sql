-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Maio-2020 às 06:46
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola`
--
CREATE DATABASE IF NOT EXISTS `escola` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `escola`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `COD_DIS` int(11) NOT NULL,
  `NOME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`COD_DIS`, `NOME`) VALUES
(1164, 'teste'),
(1165, 'teste2'),
(1166, 'Matemática'),
(1167, 'Artes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estudante`
--

CREATE TABLE `estudante` (
  `COD_EST` int(11) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `CEP` int(11) NOT NULL,
  `RUA` varchar(20) DEFAULT NULL,
  `NUMERO` int(11) DEFAULT NULL,
  `BAIRRO` varchar(20) DEFAULT NULL,
  `CIDADE` varchar(20) DEFAULT NULL,
  `ESTADO` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `TELEFONE` int(11) DEFAULT NULL,
  `COD_DIS` int(11) DEFAULT NULL,
  `COD_NOTA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estudante`
--

INSERT INTO `estudante` (`COD_EST`, `NOME`, `CEP`, `RUA`, `NUMERO`, `BAIRRO`, `CIDADE`, `ESTADO`, `EMAIL`, `TELEFONE`, `COD_DIS`, `COD_NOTA`) VALUES
(2222222, 'Thais', 7713115, 'barueri', 305, 'serpa', 'caieiras', 'são paulo', 'ramosthaaa@gmail.com', 1145869537, 1164, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota`
--

CREATE TABLE `nota` (
  `COD_NOTA` int(11) NOT NULL,
  `P_AVA` int(11) DEFAULT NULL,
  `S_AVA` int(11) DEFAULT NULL,
  `F_AVA` int(11) DEFAULT NULL,
  `COD_EST` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `nota`
--

INSERT INTO `nota` (`COD_NOTA`, `P_AVA`, `S_AVA`, `F_AVA`, `COD_EST`) VALUES
(1, 10, NULL, 10, 2222222);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`COD_DIS`);

--
-- Índices para tabela `estudante`
--
ALTER TABLE `estudante`
  ADD PRIMARY KEY (`COD_EST`),
  ADD KEY `FK_COD_DIS` (`COD_DIS`),
  ADD KEY `FK_COD_NOTA` (`COD_NOTA`);

--
-- Índices para tabela `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`COD_NOTA`),
  ADD KEY `fk_est` (`COD_EST`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `COD_DIS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1168;

--
-- AUTO_INCREMENT de tabela `estudante`
--
ALTER TABLE `estudante`
  MODIFY `COD_EST` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2222223;

--
-- AUTO_INCREMENT de tabela `nota`
--
ALTER TABLE `nota`
  MODIFY `COD_NOTA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `estudante`
--
ALTER TABLE `estudante`
  ADD CONSTRAINT `FK_COD_DIS` FOREIGN KEY (`COD_DIS`) REFERENCES `disciplina` (`COD_DIS`),
  ADD CONSTRAINT `FK_COD_NOTA` FOREIGN KEY (`COD_NOTA`) REFERENCES `nota` (`COD_NOTA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
