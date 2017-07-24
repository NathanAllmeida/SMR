-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Jul-2017 às 13:42
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siscon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidatos`
--

CREATE TABLE `candidatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` bigint(12) NOT NULL,
  `nascimento` date NOT NULL,
  `total` int(11) NOT NULL,
  `prova1` int(11) NOT NULL,
  `prova2` int(11) NOT NULL,
  `prova3` int(11) NOT NULL,
  `prova4` int(11) NOT NULL,
  `prova5` int(11) NOT NULL,
  `prova6` int(11) NOT NULL,
  `prova7` int(11) NOT NULL,
  `prova8` int(11) NOT NULL,
  `prova9` int(11) NOT NULL,
  `prova10` int(11) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `clas` int(11) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `candidatos`
--

INSERT INTO `candidatos` (`id`, `nome`, `cpf`, `nascimento`, `total`, `prova1`, `prova2`, `prova3`, `prova4`, `prova5`, `prova6`, `prova7`, `prova8`, `prova9`, `prova10`, `cargo`, `clas`, `senha`, `email`) VALUES
(1, 'Nathan Teodoro de Almeida', 14072356646, '1999-08-07', 50, 11, 9, 15, 5, 10, 0, 0, 0, 0, 0, '101', 1, '6c8ef13d597e2ddbbb9fa71bc0b8ffef', 'almeidanathan96@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `id` int(11) NOT NULL,
  `Cargo` varchar(255) NOT NULL,
  `Codigo` int(11) NOT NULL,
  `vagas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`id`, `Cargo`, `Codigo`, `vagas`) VALUES
(1, 'Tecnico em Informatica', 101, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidatos`
--
ALTER TABLE `candidatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
