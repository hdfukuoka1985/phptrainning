-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: 2016 年 9 月 23 日 16:51
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `mail`, `created_at`, `updated_at`) VALUES
(1, '福岡秀明', 'fukuoka-pass', 'fukuoka@yahoo.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '山田尚幸', 'yamada-pass', 'yamada@mail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'fukuoka', '888', 'fuku@fuku.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;