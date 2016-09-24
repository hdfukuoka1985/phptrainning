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
-- テーブルの構造 `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `job_name` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `salary` varchar(30) NOT NULL,
  `work_time` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `job_type` varchar(20) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `image` mediumblob NOT NULL COMMENT '画像データ'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `jobs`
--

INSERT INTO `jobs` (`id`, `job_name`, `created_at`, `updated_at`, `salary`, `work_time`, `contact`, `job_type`, `comment`, `image`) VALUES
(3, 'テスト１１１１１１１１１', '0000-00-00 00:00:00', '2016-09-24 19:09:53', 'テスト１１１１１１１１１', 'テスト１１１１１１１１１', 'テスト１１１１１１１１１', 'テスト１１１１１１１１１', '    テスト１１１１１１１１１', ''),
(5, 'アルバイト/プリン(菓子)製造スタッフ ', '0000-00-00 00:00:00', '2016-09-24 19:29:23', '時給 820円', '13:00~20:00', '070-5361-0371 (採用担当: 笠原)', 'アルバイトパート', '明るいスタッフのみんなと、たくさんのお客様の笑顔が自慢の店内です!!\r\n石垣島大好きが全身からあふれ', ''),
(6, 'ルームスタッフ　石垣島ホテルククル', '0000-00-00 00:00:00', '2016-09-24 19:30:49', '時給800円～', '9:00～15:00', '採用担当者 0980-82-3380', 'アルバイト', '島一番のにぎわいを見せる美崎町繁華街にあるホテルです。石垣島のあたたかいおもてなし＆快適な空間の提供', ''),
(7, '八重山博物館の運営業務', '0000-00-00 00:00:00', '2016-09-24 19:34:48', '1,160円～1,160円', '土・日の何れか08:30～17:15', '石垣市立八重山博物館　担当　大濱', 'パート労働者', '八重山博物館の運営業務・博物館の広報・ＰＲ活動及び博物館業務の補助。', ''),
(8, '現場検数員【石垣市】', '0000-00-00 00:00:00', '2016-09-24 19:36:27', '141,930円～141,930円', '08:30～17:00', '098-868-8532', '正社員以外', '船社・荷主の委託を受け、船舶による輸出入（移出入）貸物の積み降ろしに立合い、貨物の個数、品名、品番、', ''),
(9, '用務員（伊原間中学校）', '0000-00-00 00:00:00', '2016-09-24 19:38:39', '6,300円～6,300円', '08:15～16:45', '0980-82-2604', '正社員以外', '◇印刷製本業務\r\n◇来客等への湯茶等対応\r\n◇清掃及び環境設備\r\n◇その他校長の指示する業務 ', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;