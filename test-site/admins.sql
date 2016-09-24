←
phpMyAdmin
メインページphpMyAdmin のドキュメントドキュメントReload navigation panel
RecentFavorites
Collapse allUnlink from main panel
New
Database operationsbbs
NewNew
Expand/Collapse構造admins
Expand/Collapse構造jobs
Expand/Collapse構造job_situation
Expand/Collapse構造personal_info
Expand/Collapse構造topics
Expand/Collapse構造users
Expand/CollapseDatabase operationsinformation_schema
Expand/CollapseDatabase operationsmysql
Expand/CollapseDatabase operationsperformance_schema
Expand/CollapseDatabase operationstest1
サーバ: localhost:8889 »データベース: bbs »テーブル: admins
表示 表示
構造 構造
SQL SQL
検索 検索
挿入 挿入
エクスポート エクスポート
インポート インポート
特権 特権
操作 操作
トリガ トリガ
Click on the bar to scroll to top of page
SQL Query ConsoleConsole
オプションSet default
Always expand query messages
Show query history at start
Show current browsing query
[ 戻る ]


-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: 2016 年 9 月 24 日 21:46
-- サーバのバージョン： 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bbs`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `admins`
--

INSERT INTO `admins` (`id`, `name`, `mail`, `password`, `updated_at`, `created_at`) VALUES
(1, 'admin', 'admin@test.com', '8888', '2016-09-24 16:41:46', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
[ 戻る ]

別ウィンドウで開く