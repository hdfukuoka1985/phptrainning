-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: 2016 年 9 月 08 日 06:23
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
  `comment` varchar(30) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `topics`
--

INSERT INTO `topics` (`id`, `name`, `comment`, `updated_at`, `created_at`) VALUES
(1, 'テストの人', 'ああああああ', '2016-09-01 16:35:48', '0000-00-00 00:00:00'),
(2, '福岡秀明', 'テストです。', '2016-09-01 16:37:02', '0000-00-00 00:00:00'),
(3, 'フクオカ2', 'もう一回テスト', '2016-09-01 16:37:21', '0000-00-00 00:00:00'),
(5, 'あああ', 'あああ        ', '2016-09-05 15:49:49', '0000-00-00 00:00:00'),
(6, 'てすお', 'てすお        ', '2016-09-05 16:05:41', '0000-00-00 00:00:00'),
(7, 'aaa', '        aaa', '2016-09-05 16:10:33', '0000-00-00 00:00:00'),
(8, '福岡改良', '10回目        ', '2016-09-07 18:13:37', '0000-00-00 00:00:00'),
(9, '修正版', '投稿します。        ', '2016-09-06 01:42:27', '0000-00-00 00:00:00'),
(10, '午後のテスト', '午後のテストです。        ', '2016-09-06 06:18:36', '0000-00-00 00:00:00'),
(11, 'カラム名', '修正の確認        ', '2016-09-06 08:14:25', '0000-00-00 00:00:00'),
(15, '登録ページ', '', '2016-09-06 11:44:17', '0000-00-00 00:00:00'),
(16, 'タイムスタンプ', '時間を入れてみる        ', '2016-09-07 09:15:47', '0000-00-00 00:00:00'),
(18, '時間、分、秒', 'も入れたいです。        ', '2016-09-07 09:21:01', '2016-09-07 02:21:01'),
(19, '', '', '2016-09-07 17:58:14', '2016-09-07 10:58:14');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;