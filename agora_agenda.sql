-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jun-2020 às 15:27
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agora_agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(80) NOT NULL,
  `cep` varchar(12) NOT NULL,
  `ddd` varchar(2) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `site` varchar(100) DEFAULT NULL,
  `data_cadastro` date DEFAULT NULL,
  `observacao` text DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `cliente`, `endereco`, `numero`, `bairro`, `cidade`, `cep`, `ddd`, `celular`, `sexo`, `data_nascimento`, `cpf`, `email`, `site`, `data_cadastro`, `observacao`, `uf`) VALUES
(1, 'Manoel Jailton Sousa do Nascimento', 'Rua 45', '10', 'Cohama', 'São Luís', '7858544', '98', '9899898', NULL, '2019-12-30', '33716780677', 'mjailton@gmail.com', 'mjailton.com.br', '2019-12-30', '', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id_contato` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `contato` varchar(100) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(80) NOT NULL,
  `cep` varchar(12) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `site` varchar(100) DEFAULT NULL,
  `data_cadastro` date DEFAULT NULL,
  `observacao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id_contato`, `id_estado`, `contato`, `endereco`, `numero`, `bairro`, `cidade`, `cep`,  `celular`, `sexo`, `data_nascimento`, `cpf`, `email`, `site`, `data_cadastro`, `observacao`) VALUES
(1, 3, 'Manoel Jailton Sousa do Nascimento', 'Rua 45', '10', 'Cohama', 'São Luís', '7858544', '98', '9899898', '2019-12-30', '33716780677', 'mjailton@gmail.com', 'mjailton.com.br', '2019-12-30', ''),
(2, 3, 'Manoel Jailton Sousa', 'Rua 45', '10', 'Cohama', 'São Luís', '7858544', '98', '9899898', '2019-12-30', '33716780677', 'mjailton@gmail.com', 'mjailton@gmail.com', '2019-12-30', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `sigla` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`, `sigla`) VALUES
(1, 'Acre', 'AC'),
(2, 'Alagoas', 'AL'),
(3, 'Amazonas', 'AM'),
(4, 'Amapá', 'AP'),
(5, 'Bahia', 'BA'),
(6, 'Ceará', 'CE'),
(7, 'Distrito Federal', 'DF'),
(8, 'Espírito Santo', 'ES'),
(9, 'Goiás', 'GO'),
(10, 'Maranhão', 'MA'),
(11, 'Minas Gerais', 'MG'),
(12, 'Mato Grosso do Sul', 'MS'),
(13, 'Mato Grosso', 'MT'),
(14, 'Pará', 'PA'),
(15, 'Paraíba', 'PB'),
(16, 'Pernambuco', 'PE'),
(17, 'Piauí', 'PI'),
(18, 'Paraná', 'PR'),
(19, 'Rio de Janeiro', 'RJ'),
(20, 'Rio Grande do Norte', 'RN'),
(21, 'Rondônia', 'RO'),
(22, 'Roraima', 'RR'),
(23, 'Rio Grande do Sul', 'RS'),
(24, 'Santa Catarina', 'SC'),
(25, 'Sergipe', 'SE'),
(26, 'São Paulo', 'SP'),
(27, 'Tocantins', 'TO');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id_contato`),
  ADD KEY `fk_contato_estado` (`id_estado`);

--
-- Índices para tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `contato`
--
ALTER TABLE `contato`
  ADD CONSTRAINT `contato_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
