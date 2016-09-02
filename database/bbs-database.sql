-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: 2016 年 9 月 02 日 09:55
-- サーバのバージョン： 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bbs`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `comments` varchar(30) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `topics`
--

INSERT INTO `topics` (`id`, `name`, `comments`, `updated_at`, `created_at`) VALUES
(1, 'テストの人', 'ああああああ', '2016-09-01 16:35:48', '0000-00-00 00:00:00'),
(2, '福岡秀明', 'テストです。', '2016-09-01 16:37:02', '0000-00-00 00:00:00'),
(3, 'フクオカ2', 'もう一回テスト', '2016-09-01 16:37:21', '0000-00-00 00:00:00'),
(4, '山田さん', '助けてください', '2016-09-01 16:53:40', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;