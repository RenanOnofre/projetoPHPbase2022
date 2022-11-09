-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Nov-2022 às 04:16
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
-- Banco de dados: `test`
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
(12, 40818, 1234, 96, 'BytesBank', 'Avenida Anchieta ', 185, 'predio comercial', 'Centro', 'Campinas', 'SP', 13015100, 2147483647, 1),
(12, 40818, 1234, 85, 'Premium Bank', 'Avenida Paulista', 1452, 'predio comercial', '	Centro', 'Sao Paulo', 'SP', 17560057, 2147483647, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `retypePassword` varchar(70) NOT NULL,
  `city` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `fk_idFun` int(11) NOT NULL,
  `fk_idAgencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `name`, `username`, `password`, `retypePassword`, `city`, `image`, `gender`, `fk_idFun`, `fk_idAgencia`) VALUES
(1, 'Heloisa Gomes', 'heloisa', 'heloisa', 'Telemarketing', 'Sumare', 'image/Heloisa.jpeg', 'Feminino', 2, 1),
(2, 'Renan Onofre', 'renan', 'renan', 'Administrativo', 'Campinas', 'image/Renan.jpeg', 'Masculino', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `profile_reg`
--

CREATE TABLE `profile_reg` (
  `idProfile` int(11) NOT NULL,
  `nameProfile` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `profile_reg`
--

INSERT INTO `profile_reg` (`idProfile`, `nameProfile`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reg`
--

CREATE TABLE `reg` (
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `image` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `id_FkReg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reg`
--

INSERT INTO `reg` (`name`, `username`, `password`, `city`, `image`, `gender`, `id`, `id_FkReg`) VALUES
('Renan', 'renan', 'renan', 'sumare', 'image/anon.png', 'Masculino', 1, 1),
('Bikash', 'bikash', 'bikash', 'lko', 'image/images.png', 'Masculino', 2, 2),
('Isabella Casciatori', 'isabella', 'isabella', 'Campinas', 'image/helo.png', 'Feminino', 3, 1),
('Alciomar Holanda', 'alciomar', 'alciomar', 'Hortolandia', 'image/github-octocat.png', 'Masculino', 4, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agencia`
--
ALTER TABLE `agencia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agencia`
--
ALTER TABLE `agencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
