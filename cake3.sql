-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Jun-2018 às 21:36
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `galerias`
--

CREATE TABLE `galerias` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `galerias`
--

INSERT INTO `galerias` (`id`, `title`, `created`, `modified`) VALUES
(3, 'galeria03', '2018-05-22 20:28:47', '2018-05-22 20:28:47'),
(4, 'galeria04', '2018-05-22 20:28:57', '2018-05-22 20:28:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `galeria_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `images`
--

INSERT INTO `images` (`id`, `image`, `galeria_id`, `created`, `modified`) VALUES
(1, '68730c05-0987-4095-9281-67c54b53413b.jpg', 0, '2018-05-22 21:34:02', '2018-05-22 21:34:02'),
(2, 'dd4ead14-bcf4-4033-8f50-92ab3c9d34c1.jpg', 0, '2018-05-22 21:34:03', '2018-05-22 21:34:03'),
(3, '1384de49-d196-4b12-bb04-220c9bc7edbd.jpg', 0, '2018-05-22 21:34:41', '2018-05-22 21:34:41'),
(4, 'ca39b6d1-6bb2-48c4-a570-4fd4cc6e6b0d.jpg', 0, '2018-05-22 21:34:41', '2018-05-22 21:34:41'),
(5, '716de649-3dd0-452c-bfbd-ce220b8feab9.png', 0, '2018-05-22 21:35:47', '2018-05-22 21:35:47'),
(6, 'b420828e-fe37-4c9a-b0f3-5fd20301bd9b.png', 0, '2018-05-22 21:35:47', '2018-05-22 21:35:47'),
(7, '49e451b1-74c3-462d-bdec-2c62f75b6c37.jpg', 0, '2018-05-22 21:35:47', '2018-05-22 21:35:47'),
(8, 'f8788724-9c3a-4283-b1cc-2f8d91c67e5f.png', 0, '2018-05-22 21:36:25', '2018-05-22 21:36:25'),
(9, 'ad4fa222-4d25-4659-a419-650c82c6aca5.png', 0, '2018-05-22 21:36:25', '2018-05-22 21:36:25'),
(10, '9adea41c-7f1b-41ee-8039-ac53ae195cf5.jpeg', 0, '2018-05-22 21:36:25', '2018-05-22 21:36:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descricao`, `image`, `created`, `modified`) VALUES
(1, '4 PASSOS PARA ECONOMIZAR COMBUSTÍVEL ', 'Nas transportadoras, o combustível ainda representa uma fatia grande nos custos gerais do negócio. Economizar combustível ainda é um desafio. Seu consumo é um assunto que deve ser tratado com cuidado, já que apenas repassar valores reajustados diretamente', 'teste', '2018-06-05 17:38:56', '2018-06-05 18:03:54'),
(2, 'DÁ PARA ENGANAR O TESTE DO BAFÔMETRO? ', '  Tomar vinagre, usar antisséptico bucal ou comer chiclete não livra o motorista de resultado positivo no etilômetro.  Quem já ouviu falar sobe as soluções populares para enganar o teste do bafômetro? Pois é, quando o assunto é beber e dirigir, não adiant', 'testando', '2018-06-05 17:42:20', '2018-06-05 18:04:29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `roles`
--

INSERT INTO `roles` (`id`, `role`, `created`, `modified`) VALUES
(1, 'admin', '2018-05-21 18:26:57', '2018-05-21 18:26:57'),
(2, 'moderador', '2018-05-21 18:27:12', '2018-05-21 18:27:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `roles_id`, `created`, `modified`) VALUES
(2, 'André', 'shynratensey', 'admin@nuvemdesenvolvimentoweb.com.br', '$2y$10$0MaaBU/A1NRndV3ELGYt3uq/6Orc6ufZSkl4uOtUEWby06AZaPIdi', 1, '2018-05-21 20:49:57', '2018-05-21 20:57:34'),
(3, 'André', 'andrecristian', 'andre@nuvemdesenvolvimentoweb.com.br', '$2y$10$tJiplSwic7Opp48vkBTa3e9Zt44SHcAlhN143dO5Xu7cu52ocQ8Sq', 1, '2018-05-21 23:47:33', '2018-05-21 23:47:33'),
(4, 'joice', 'joice', 'andrecrysthyan@hotmail.com', '$2y$10$5xK5mdJKeNM2M1ksyj5XaOj07l4barnzxNKR5bG4/58Pr7kcVpAbu', 2, '2018-05-22 17:47:06', '2018-05-22 17:47:15'),
(5, 'André', 'andrecrysthyan', 'andrecrysthyan2@hotmail.com', '$2y$10$BYvXIYCmhQnlN3SKTeKDAO1lsCWJBDQcqC0cXzPr8z6FBokUSLzWm', 1, '2018-06-05 17:23:32', '2018-06-05 17:23:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
