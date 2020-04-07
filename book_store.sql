-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2020-04-05 01:04:25
-- 服务器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `book_store`
--

-- --------------------------------------------------------

--
-- 表的结构 `BOOK`
--

CREATE TABLE `BOOK` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `pages` int(11) DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `book_cnt` int(11) NOT NULL,
  `publisher` int(11) DEFAULT NULL,
  `share_to_pub` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `BOOK`
--

INSERT INTO `BOOK` (`id`, `name`, `author`, `isbn`, `genre`, `pages`, `price`, `book_cnt`, `publisher`, `share_to_pub`) VALUES
(1, 'Sea and the old man', 'AAA', '12345678', 'Story', 100, '90', 900, 1, '2'),
(2, 'Gogo', 'go', 'go', 'go', 10, '100', 100, 1, '5'),
(3, 'The silent river', 'Kevin', 'abcdefg', 'Novel', 100, '500', 89, 1, '6');

-- --------------------------------------------------------

--
-- 表的结构 `ORDER_DETAIL`
--

CREATE TABLE `ORDER_DETAIL` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `book_cnt` int(11) NOT NULL,
  `book_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `ORDER_DETAIL`
--

INSERT INTO `ORDER_DETAIL` (`id`, `order_id`, `book_id`, `book_cnt`, `book_price`) VALUES
(1, 1, 2, 10, '100'),
(2, 1, 3, 5, '30'),
(8, 4, 3, 3, '500'),
(9, 5, 3, 10, '500'),
(10, 6, 3, 1, '500');

-- --------------------------------------------------------

--
-- 表的结构 `PUBLISHER`
--

CREATE TABLE `PUBLISHER` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `bank_acc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `PUBLISHER`
--

INSERT INTO `PUBLISHER` (`id`, `email`, `name`, `phone`, `address`, `bank_acc`) VALUES
(1, 'publisher@gmail.com', 'book pub', '001002', 'West street, New York City', '002002003');

-- --------------------------------------------------------

--
-- 表的结构 `STORE_USER`
--

CREATE TABLE `STORE_USER` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `bank_acc` varchar(50) NOT NULL,
  `is_admin` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `STORE_USER`
--

INSERT INTO `STORE_USER` (`id`, `email`, `password`, `name`, `phone`, `address`, `bank_acc`, `is_admin`) VALUES
(1, 'root@gmail.com', 'root', 'admin', '001002', 'East stree', '003004', 'Y'),
(2, 'normal@gmail.com', 'normal', 'normal user', '001002', 'East stree', '004005', 'N');

-- --------------------------------------------------------

--
-- 表的结构 `USER_ORDER`
--

CREATE TABLE `USER_ORDER` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `bank_acc` varchar(50) DEFAULT NULL,
  `pay_amnt` decimal(10,0) DEFAULT NULL,
  `sold_on` date DEFAULT NULL,
  `packed_on` date DEFAULT NULL,
  `signed_on` date DEFAULT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `USER_ORDER`
--

INSERT INTO `USER_ORDER` (`id`, `user_id`, `phone`, `address`, `bank_acc`, `pay_amnt`, `sold_on`, `packed_on`, `signed_on`, `status`) VALUES
(1, 1, '100101102', 'West stree', '12345678', '100', NULL, NULL, NULL, '99'),
(2, 1, '002003', 'East Street', '5678', '90000', '2020-04-03', NULL, NULL, '01'),
(4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '00'),
(5, 2, '001002', '123@263.net', '002003', '999', '2020-04-03', NULL, NULL, '01'),
(6, 2, '001002', '123@263.net', '002003', '999', '2020-04-03', NULL, NULL, '01');

--
-- 转储表的索引
--

--
-- 表的索引 `BOOK`
--
ALTER TABLE `BOOK`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `ORDER_DETAIL`
--
ALTER TABLE `ORDER_DETAIL`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `PUBLISHER`
--
ALTER TABLE `PUBLISHER`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `STORE_USER`
--
ALTER TABLE `STORE_USER`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `USER_ORDER`
--
ALTER TABLE `USER_ORDER`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `BOOK`
--
ALTER TABLE `BOOK`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `ORDER_DETAIL`
--
ALTER TABLE `ORDER_DETAIL`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用表AUTO_INCREMENT `PUBLISHER`
--
ALTER TABLE `PUBLISHER`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `STORE_USER`
--
ALTER TABLE `STORE_USER`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `USER_ORDER`
--
ALTER TABLE `USER_ORDER`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
