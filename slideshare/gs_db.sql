-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2020 年 6 月 18 日 14:46
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

DROP TABLE IF EXISTS `gs_an_table`;
CREATE TABLE `gs_an_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `email`, `text`, `indate`) VALUES
(11, '', '', '', '2020-06-14 13:23:42'),
(12, '竹中直人', '英sg', 'ややややっや', '2020-06-14 13:24:38'),
(13, '山口 勝也', 'test3@test.jp', 'テストです', '2020-06-14 14:04:57'),
(14, '山口 勝也', 'precal.jp@gmail.com', 'jjjj', '2020-06-14 14:34:45'),
(15, '山口 勝也', 'precal.jp@gmail.com', '画像』アップォーdp', '2020-06-14 21:59:37'),
(16, '山口 勝也', 'precal.jp@gmail.com', 'kakaka', '2020-06-18 09:31:18');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_file_table`
--

DROP TABLE IF EXISTS `gs_file_table`;
CREATE TABLE `gs_file_table` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(256) NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_file_table`
--

INSERT INTO `gs_file_table` (`image_id`, `image_name`, `indate`) VALUES
(6, 'owl.jpg', '2020-06-14 23:03:33'),
(7, 'owl.jpg', '2020-06-14 23:35:03'),
(8, 'trex.jpg', '2020-06-14 23:37:46'),
(10, 'lion.jpg', '2020-06-14 23:38:37'),
(14, 'e0118_1.png', '2020-06-18 09:08:22'),
(16, 'trex 2.jpg', '2020-06-18 22:42:58'),
(17, 'chees_form.jpg', '2020-06-18 23:40:55'),
(18, 'owl.jpg', '2020-06-18 23:43:21');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

DROP TABLE IF EXISTS `gs_user_table`;
CREATE TABLE `gs_user_table` (
  `id` int(12) NOT NULL,
  `u_name` varchar(64) NOT NULL,
  `lid` varchar(128) NOT NULL,
  `lpw` varchar(64) NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `u_name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(3, 'テストタロウ', 'test', '222222', 0, 0),
(5, 'テスト山口', 'rt08863ky', '222222', 0, 0),
(6, 'テスト山口', 'rt08863ky', '222222', 0, 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_an_table`
--
ALTER TABLE `gs_an_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `gs_file_table`
--
ALTER TABLE `gs_file_table`
  ADD PRIMARY KEY (`image_id`);

--
-- テーブルのインデックス `gs_user_table`
--
ALTER TABLE `gs_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gs_an_table`
--
ALTER TABLE `gs_an_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- テーブルのAUTO_INCREMENT `gs_file_table`
--
ALTER TABLE `gs_file_table`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- テーブルのAUTO_INCREMENT `gs_user_table`
--
ALTER TABLE `gs_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
