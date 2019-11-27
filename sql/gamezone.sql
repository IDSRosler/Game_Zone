-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 27-Nov-2019 às 21:09
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gamezone`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administracao`
--

CREATE TABLE `administracao` (
  `id_admin` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administracao`
--

INSERT INTO `administracao` (`id_admin`, `nome`, `email`, `login`, `senha`) VALUES
(1, 'Igor Rosler', 'igorsouzarosler@gmail.com', 'IDSRosler', '$2y$10$JGO1Dd5tFOoMXAnrpMVh8O9ffS/qKktP.wVoV8cJnJfybPXv.A.vm'),
(2, 'Admin 2', 'admin@exemplo.com', 'Admin2', '$2y$10$/jJ0.6UdSAFacgueZGTlPOVvIbk6ZeKue0S/s1KzgOsYmWcoQIYwm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `categoria` varchar(150) NOT NULL,
  `ativo_categoria` varchar(1) NOT NULL,
  `descricao_categoria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`categoria`, `ativo_categoria`, `descricao_categoria`) VALUES
('Ação', '1', 'Jogos de Ação'),
('Arcade', '0', 'Jogos de arcade'),
('Aventura', '1', 'Jogos de aventura'),
('Esporte', '1', 'Jogos de esporte'),
('Terror', '1', 'Jogos de terror');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cpf` varchar(15) NOT NULL,
  `nome_cliente` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `rua` varchar(200) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `complemento` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `login` varchar(200) NOT NULL,
  `senha` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cpf`, `nome_cliente`, `email`, `telefone`, `rua`, `cidade`, `complemento`, `estado`, `login`, `senha`) VALUES
('999.999.999.92', 'Nome teste 2', 'teste2@gmail.com', '(99)99999-9999', 'Alguma', 'Outra', '', 'AC', 'UserTeste', '$2y$10$TFv1N91h8FUkiEaKA3LOkO1XWZULpsDYitxFpAPPiVc1w8qziYX5q'),
('999.999.999.99', 'Nome teste', 'teste@gmail.com', '(99)99999-9999', 'Alguma', 'Outra', '', 'AC', 'UserTeste', '$2y$10$P0c10rOxSyY0tAMJ924xFOSXs/jCP.KSYhrPGk2EI.EX/NVfaeAB2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE `jogo` (
  `id_jogo` int(11) NOT NULL,
  `id_categoria` varchar(100) NOT NULL,
  `id_plataforma` varchar(100) NOT NULL,
  `titulo_jogo` varchar(200) NOT NULL,
  `preco` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `conteudo` text NOT NULL,
  `ativo_jogo` varchar(1) NOT NULL,
  `unidades` int(11) NOT NULL,
  `imagem_produto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`id_jogo`, `id_categoria`, `id_plataforma`, `titulo_jogo`, `preco`, `descricao`, `conteudo`, `ativo_jogo`, `unidades`, `imagem_produto`) VALUES
(1, 'Ação', 'PlayStation', 'Jogo 1', '100,00', 'Jogo', 'CD', '1', 2, 'imagens/uncharted.jpg'),
(2, 'Esporte', 'Xbox', 'Jogo 2', '150,00', 'Jogo', 'Digital', '1', 1, 'imagens/uncharted.jpg'),
(3, 'Aventura', 'Computador', 'Mario', '150,00', 'Mario cart', 'CD', '1', 1, 'imagens/uncharted.jpg'),
(4, 'Ação', 'PlayStation', 'Uncharted', '200,00', 'Jogo', 'CD', '1', 1, 'imagens/uncharted.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `plataforma`
--

CREATE TABLE `plataforma` (
  `plataforma` varchar(100) NOT NULL,
  `ativo_plataforma` varchar(1) NOT NULL,
  `Descricao_plataforma` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `plataforma`
--

INSERT INTO `plataforma` (`plataforma`, `ativo_plataforma`, `Descricao_plataforma`) VALUES
('Computador', '1', 'Plataforma de jogos'),
('Nintendo', '0', 'Plataforma de jogos'),
('PlayStation', '1', 'Plataforma de jogos'),
('Xbox', '1', 'Plataforma de jogos');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administracao`
--
ALTER TABLE `administracao`
  ADD PRIMARY KEY (`id_admin`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`id_jogo`);

--
-- Índices para tabela `plataforma`
--
ALTER TABLE `plataforma`
  ADD PRIMARY KEY (`plataforma`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administracao`
--
ALTER TABLE `administracao`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `jogo`
--
ALTER TABLE `jogo`
  MODIFY `id_jogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
