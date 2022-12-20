-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2022 às 20:02
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escolarog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id_endereco` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `rua` varchar(40) NOT NULL,
  `numero` int(10) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `ibge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id_endereco`, `id_aluno`, `cep`, `rua`, `numero`, `bairro`, `cidade`, `uf`, `ibge`) VALUES
(1, 3, '24741420', 'Rua José da Rocha', 34, 'Coelho', 'São Gonçalo', 'RJ', 3304904),
(3, 5, '24740110', 'Rua Cândido Reis', 34, 'Coelho', 'São Gonçalo', 'RJ', 3304904),
(4, 6, '24740130', 'Rua Teodoro Rivieri', 87, 'Coelho', 'São Gonçalo', 'RJ', 3304904),
(5, 7, '24740220', 'Rua Olinto Guedes', 90, 'Coelho', 'São Gonçalo', 'RJ', 3304904),
(8, 10, '20021-120', 'Avenida Franklin Roosevelt', 34, 'Centro', 'Rio de Janeiro', 'RJ', 3304557),
(9, 11, '20021-130', 'Avenida General Justo', 456, 'Centro', 'Rio de Janeiro', 'RJ', 3304557),
(10, 12, '20020-010', 'Avenida Presidente Antônio Carlos', 900, 'Centro', 'Rio de Janeiro', 'RJ', 3304557),
(11, 13, '20020-050', 'Avenida Churchill', 1800, 'Centro', 'Rio de Janeiro', 'RJ', 3304557),
(12, 14, '20050-008', 'Rua da Carioca', 340, 'Centro', 'Rio de Janeiro', 'RJ', 3304557),
(13, 15, '20021-180', 'Rua da Lapa', 500, 'Centro', 'Rio de Janeiro', 'RJ', 3304557),
(14, 16, '20041-010', 'Praça Olavo Bilac', 87, 'Centro', 'Rio de Janeiro', 'RJ', 3304557),
(15, 17, '20020-100', 'Avenida Nilo Peçanha', 3000, 'Centro', 'Rio de Janeiro', 'RJ', 3304557),
(16, 19, '20021-120', 'Avenida Franklin Roosevelt', 45, 'Centro', 'Rio de Janeiro', 'RJ', 3304557),
(17, 20, '20021-130', 'Avenida General Justo', 46, 'Centro', 'Rio de Janeiro', 'RJ', 3304557),
(18, 21, '57290-970', 'Avenida Engenheiro Gordilho de Castro', 90, 'Centro', 'Porto Real do Colégio', 'AL', 2707503);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_aluno` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `telefone` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `perfil` int(1) DEFAULT NULL,
  `cursos` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_aluno`, `nome`, `telefone`, `email`, `cpf`, `senha`, `perfil`, `cursos`) VALUES
(2, 'Roger', 2147483647, 'rog@gmail.com', '0086574345', 'c4ca4238a0b923820dcc509a6f75849b', 2, NULL),
(5, 'Márcia', 2147483647, 'marcia@gmail.com', '02934565478', 'c4ca4238a0b923820dcc509a6f75849b', 0, NULL),
(6, 'Marilda', 987653453, 'marilda@gmail.com', '09874567545', 'c4ca4238a0b923820dcc509a6f75849b', 0, NULL),
(7, 'Carmen', 2147483647, 'carmen@gmail.com', '09876543543', 'c4ca4238a0b923820dcc509a6f75849b', 0, NULL),
(10, 'Jô Soares', 2147483647, 'adm@adm.com', '4545454545', 'c4ca4238a0b923820dcc509a6f75849b', 0, NULL),
(11, 'Tim Maia', 2147483647, 'tim@gmail.com', '0988765434', 'c4ca4238a0b923820dcc509a6f75849b', 0, NULL),
(12, 'Pinóquio', 67654353, 'pinoquio@adm.com', '45545454', 'c4ca4238a0b923820dcc509a6f75849b', 0, NULL),
(13, 'Homem Aranha', 45678656, 'spider@bol.com', '45546777878', 'c4ca4238a0b923820dcc509a6f75849b', 0, NULL),
(14, 'Batman', 56789765, 'morcego@yahoo.com.br', '56788977765', 'c4ca4238a0b923820dcc509a6f75849b', 0, NULL),
(15, 'Lucas Assis', 89876543, 'lucas@gmail.com', '9877734845', 'c4ca4238a0b923820dcc509a6f75849b', 0, NULL),
(16, 'Matheus Assis', 345678897, 'matheus@gmail.com', '6546677878', 'c4ca4238a0b923820dcc509a6f75849b', 0, NULL),
(17, 'Samuel', 2147483647, 'samuca@gmail.com', '00656765432', 'c4ca4238a0b923820dcc509a6f75849b', 1, NULL),
(20, 'Dayana', 2147483647, 'day@gmail.com', '00899765467', 'c4ca4238a0b923820dcc509a6f75849b', 0, 1),
(21, 'Rebeca', 2147483647, 'rebeca@gmail.com', '0097656543', 'c4ca4238a0b923820dcc509a6f75849b', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `perfil` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nome`, `email`, `senha`, `cpf`, `perfil`) VALUES
(1, 'adm', 'adm@adm.com', 'c4ca4238a0b923820dcc509a6f75849b', '0074565432', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id_endereco`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_aluno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
