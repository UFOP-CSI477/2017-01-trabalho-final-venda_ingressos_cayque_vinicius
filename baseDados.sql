-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2017 at 02:41 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cinema`
--
CREATE DATABASE IF NOT EXISTS `cinema` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cinema`;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `imagem` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `carrinhos`
--

DROP TABLE IF EXISTS `carrinhos`;
CREATE TABLE `carrinhos` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `sessao_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `codigo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `filmes`
--

DROP TABLE IF EXISTS `filmes`;
CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `duracao` varchar(20) NOT NULL,
  `sinopse` longtext NOT NULL,
  `elenco` varchar(200) NOT NULL,
  `diretor` varchar(50) NOT NULL,
  `classificacao` int(2) NOT NULL,
  `capa` varchar(50) NOT NULL,
  `trailer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `iniciofilmes`
--

DROP TABLE IF EXISTS `iniciofilmes`;
CREATE TABLE `iniciofilmes` (
  `id` int(11) NOT NULL,
  `filme_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proximos`
--

DROP TABLE IF EXISTS `proximos`;
CREATE TABLE `proximos` (
  `id` int(11) NOT NULL,
  `filme_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sessaos`
--

DROP TABLE IF EXISTS `sessaos`;
CREATE TABLE `sessaos` (
  `id` int(11) NOT NULL,
  `filme_id` int(11) NOT NULL,
  `dublado` tinyint(1) NOT NULL,
  `legendado` tinyint(1) NOT NULL,
  `data` varchar(10) NOT NULL,
  `hora` varchar(8) NOT NULL,
  `local` varchar(200) NOT NULL,
  `preco` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `cpf` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `cep` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `type`, `cpf`, `estado`, `cidade`, `rua`, `numero`, `cep`) VALUES
(1, 'Vinicius', 'viniciusarantes1@live.com', '$2y$10$8tLty8JAz2ZuLyzVT1BhVOlskRDfn4pKbB8yod.wvrzbCuSGlomEe', NULL, '2017-08-14 22:20:29', '2017-08-14 22:20:29', 1, '', '', '', '', 0, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carrinhos`
--
ALTER TABLE `carrinhos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carrinhos_sessao_id_foreign` (`sessao_id`),
  ADD KEY `carrinhos_user_id_foreign` (`user_id`);

--
-- Indexes for table `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iniciofilmes`
--
ALTER TABLE `iniciofilmes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iniciofilmes_filme_id_foreign` (`filme_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proximos`
--
ALTER TABLE `proximos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proximos_filme_id_foreign` (`filme_id`);

--
-- Indexes for table `sessaos`
--
ALTER TABLE `sessaos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessaos_filme_id_foreign` (`filme_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `carrinhos`
--
ALTER TABLE `carrinhos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `iniciofilmes`
--
ALTER TABLE `iniciofilmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `proximos`
--
ALTER TABLE `proximos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sessaos`
--
ALTER TABLE `sessaos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `carrinhos`
--
ALTER TABLE `carrinhos`
  ADD CONSTRAINT `carrinhos_sessao_id_foreign` FOREIGN KEY (`sessao_id`) REFERENCES `sessaos` (`id`),
  ADD CONSTRAINT `carrinhos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `iniciofilmes`
--
ALTER TABLE `iniciofilmes`
  ADD CONSTRAINT `iniciofilmes_filme_id_foreign` FOREIGN KEY (`filme_id`) REFERENCES `filmes` (`id`);

--
-- Constraints for table `proximos`
--
ALTER TABLE `proximos`
  ADD CONSTRAINT `proximos_filme_id_foreign` FOREIGN KEY (`filme_id`) REFERENCES `filmes` (`id`);

--
-- Constraints for table `sessaos`
--
ALTER TABLE `sessaos`
  ADD CONSTRAINT `sessaos_filme_id_foreign` FOREIGN KEY (`filme_id`) REFERENCES `filmes` (`id`);
