-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: 2016 年 9 月 25 日 07:04
-- サーバのバージョン： 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bbs`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `mail` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `mail`, `created_at`, `updated_at`) VALUES
(1, '福岡秀明', 'fukuoka-pass', 'fukuoka@yahoo.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '山田尚幸', 'yamada-pass', 'yamada@mail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'fukuoka', '888', 'fuku@fuku.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'test', NULL, '', '0000-00-00 00:00:00', '2016-09-24 08:52:26'),
(7, 'test', 'test', 'test@test', '2016-09-24 10:54:13', '2016-09-24 08:54:13'),
(8, '', '', '', '2016-09-24 10:57:14', '2016-09-24 08:57:14'),
(9, ':name', ':password', ':mail', '0000-00-00 00:00:00', '2016-09-24 10:50:20'),
(10, ':name', ':password', ':mail', '0000-00-00 00:00:00', '2016-09-24 10:51:44'),
(11, 'yumi', 'yumi', 'yumi@yumi', '2016-09-24 12:53:04', '2016-09-24 10:53:04'),
(12, 'yumi', 'yumi', 'yumi@yumi', '2016-09-25 04:43:49', '2016-09-25 02:43:49'),
(13, 'nori', NULL, 'nori@nori', '2016-09-25 05:11:32', '2016-09-25 03:11:33'),
(14, 'nori', '$2y$10$B0FqseE9ICeVpCkUVFlCbuHKLvbFMSRvoHNSqYkL2qu1Ma0Kk5INa\n', 'nori@nori', '2016-09-25 05:12:11', '2016-09-25 03:12:11'),
(15, 'yuki', '$2y$10$iN9h/.pbPJ7JeZR4dC.k0OlaPysMgKEjH9WRbVKOXvgaX7DZZw4x2\n', 'yuki@yuki', '2016-09-25 05:13:23', '2016-09-25 03:13:24'),
(16, 'yuki', NULL, 'yuki@yuki', '2016-09-25 05:13:38', '2016-09-25 03:13:39'),
(17, 'yuki', NULL, 'yuki@yuki', '2016-09-25 05:13:51', '2016-09-25 03:13:51'),
(18, 'ishikawa', '$2y$10$/VtmCsIB5P6KVpbzLRmXuOfIkfJeCTiwHEBtATZvQ.wXTts.F/nCq\n', 'ishikawa@ishikawa', '2016-09-25 05:49:14', '2016-09-25 03:49:14'),
(19, 'taka', '$2y$10$0rgk/am5lNtIXHspfC9D8Ohi5pu2y8gAguLe29XT6Ah5XsC6Lbzk2', 'taka@taka', '2016-09-25 06:48:41', '2016-09-25 04:48:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;