-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: 2016 年 9 月 27 日 17:41
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `jobs`
--

INSERT INTO `jobs` (`id`, `job_name`, `created_at`, `updated_at`, `salary`, `work_time`, `contact`, `job_type`, `comment`, `image`) VALUES
(5, 'アルバイト/プリン(菓子)製造スタッフ ', '0000-00-00 00:00:00', '2016-09-27 11:27:51', '時給 820円', '13:00~20:00', '070-5361-0371 (採用担当: 笠原)', 'アルバイトパート', '    ', 0x6a6f62352e6a7067),
(6, 'ルームスタッフ　石垣島ホテルククル', '0000-00-00 00:00:00', '2016-09-27 11:28:27', '時給800円～', '9:00～15:00', '採用担当者 0980-82-3380', 'アルバイト', 'コメントはどうやったら反映される？', 0x6a6f62312e6a7067),
(7, '八重山博物館の運営業務', '0000-00-00 00:00:00', '2016-09-27 15:38:25', '1,160円～1,160円', '土・日08:30～17:15', '担当　大濱', 'パート労働者', '        八重山博物館の運営業務・博物館の広報・ＰＲ活動及び博物館業務の補助。    ', 0x4453435f373436335f313032342e6a7067),
(8, '現場検数員【石垣市】', '0000-00-00 00:00:00', '2016-09-27 11:29:10', '141,930円～141,930円', '08:30～17:00', '098-868-8532', '正社員以外', '    船社・荷主の委託を受け、船舶による輸出入（移出入）貸物の積み降ろしに立合い、貨物の個数、品名', 0x6a6f62332e6a7067),
(19, 'onclick', '0000-00-00 00:00:00', '2016-09-27 15:39:00', 'onclick', 'onclick', 'onclick', 'onclick', '            ああああああああああああああああああああああああああああああああああああああ', 0x746f7062616e6e65722d322e6a7067);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;