-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Set-2022 às 05:29
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agencia`
--

CREATE TABLE `agencia` (
  `codigo` int(2) NOT NULL,
  `conta` int(5) NOT NULL,
  `agencia` int(4) NOT NULL,
  `digitoVerificador` int(2) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `Endereco` varchar(100) NOT NULL,
  `numero` int(4) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `cidade` varchar(70) NOT NULL,
  `uf` varchar(50) NOT NULL,
  `cep` int(8) NOT NULL,
  `fone` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agencia`
--

INSERT INTO `agencia` (`codigo`, `conta`, `agencia`, `digitoVerificador`, `nome`, `Endereco`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `cep`, `fone`, `id`) VALUES
(12, 40818, 1234, 96, 'Renan', 'rua rosa banhos teodoro', 84, 'casa', 'angelo tomazin', 'sumarÃ©', 'sp', 13178623, 2147483647, 6),
(12, 40818, 1234, 96, 'Renan', 'rua rosa banhos teodoro', 84, 'casa', 'angelo tomazin', 'sumarÃ©', 'sp', 13178623, 2147483647, 7),
(12, 40818, 1234, 96, 'Renan', 'rua rosa banhos teodoro', 84, 'casa', 'angelo tomazin', 'sumarÃ©', 'sp', 13178623, 2147483647, 8),
(12, 40818, 1234, 96, 'Renan', 'rua rosa banhos teodoro', 84, 'casa', 'angelo tomazin', 'sumarÃ©', 'sp', 13178623, 2147483647, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agencia`
--
ALTER TABLE `agencia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agencia`
--
ALTER TABLE `agencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
