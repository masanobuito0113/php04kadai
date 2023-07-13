-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 7 月 13 日 08:01
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_kadai_03`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `php03`
--

CREATE TABLE `php03` (
  `id` int(11) NOT NULL,
  `place` text NOT NULL,
  `food` text NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL,
  `imagepath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `php03`
--

INSERT INTO `php03` (`id`, `place`, `food`, `comment`, `date`, `imagepath`) VALUES
(9, '更新しました------', 'キャットフード', '今日もうまうま', '2023-07-11', 'upload/IMG_2063.jpg'),
(11, 'おおおおおおおおおおおお', 'きいいいいいいいう', 'deeeeeeeeeeeeeeeeeeeeeee', '2023-07-03', 'upload/IMG_1238.jpg'),
(13, '甲府', 'もも', '甘かった。', '2023-07-04', 'upload/IMG_2062.jpg'),
(15, 'あああああああ', 'いいいいいい', 'ううううううう', '2023-07-04', 'upload/IMG_1239.jpg'),
(16, '更新その2', 'ききいいいいいいい', 'くううううううう', '2023-07-04', 'upload/cat.jpg'),
(17, '私の名前はジャック', 'ねこです。', 'ドライフードよりウェットフードが好きです。', '2023-07-04', 'upload/IMG_1239.jpg'),
(18, '閣下かっっか', 'ききいいいいいいい', 'くううううううう', '2023-07-04', 'upload/cat.jpg'),
(19, '神奈川', '魚', 'うまいにゃー', '2023-07-11', 'upload/cat.jpg'),
(20, 'かわ', 'あゆ', 'たんぱく', '2023-07-12', 'upload/IMG_1237.jpg'),
(21, 't', 't', 't', '2023-07-04', 'upload/IMG_1238.jpg'),
(22, 'ここ', 'おおお', 'いいいい', '2023-07-11', 'upload/cat.jpg');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `php03`
--
ALTER TABLE `php03`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `php03`
--
ALTER TABLE `php03`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
