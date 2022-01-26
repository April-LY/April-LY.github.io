-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2021-06-19 15:46:48
-- 服务器版本： 10.4.18-MariaDB
-- PHP 版本： 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `mesgbord`
--

-- --------------------------------------------------------

--
-- 表的结构 `info`
--

CREATE TABLE `info` (
  `name` char(20) NOT NULL,
  `tel` char(11) DEFAULT NULL,
  `mail` char(50) DEFAULT NULL,
  `mesg` text DEFAULT NULL,
  `sendtime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `info`
--

INSERT INTO `info` (`name`, `tel`, `mail`, `mesg`, `sendtime`) VALUES
('asdasd', '1111', NULL, '请您输入您想对我说的话', '2021-06-19 08:29:18'),
('hello', '', NULL, '为了凑数的第一条消息', '2021-06-12 15:22:22'),
('hello2', '12345', NULL, '为了凑数的第二条消息', '2021-06-12 15:22:39'),
('hello3', '', NULL, '为了凑数的第三条消息', '2021-06-12 15:23:07'),
('test1', '1111', NULL, '这是第一个人的留言测试，检测时间和内容是不是显示正常。', '2021-06-05 20:16:15'),
('test112345', '1111', NULL, '请您fghj', '2021-06-12 15:15:06'),
('test1wret', '', NULL, 'sdsgr', '2021-06-12 15:47:59'),
('testhtml1', '1234577', NULL, '&lt;p style=&quot;color:red&quot;&gt;这本来是一条红色代码（防止html注入）&lt;p&gt;', '2021-06-18 13:41:31'),
('text2', '2222', NULL, '这是第二个人的留言测试，这个网页又简陋又丑', '2021-06-05 21:16:15'),
('留言显示长度测试', '12312345', NULL, '写好多测试一下长度，应该写多少呢？写好多测试一下长度，应该写多少呢？写好多测试一下长度，应该写多少呢？写好多测试一下长度，应该写多少呢？写好多测试一下长度，应该写多少呢？写好多测试一下长度，应该写多少呢？写好多测试一下长度，应该写多少呢？写好多测试一下长度，应该写多少呢？', '2021-06-19 08:14:33');

-- --------------------------------------------------------

--
-- 表的结构 `sqlinsert`
--

CREATE TABLE `sqlinsert` (
  `name` varchar(20) NOT NULL,
  `telephone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `sqlinsert`
--

INSERT INTO `sqlinsert` (`name`, `telephone`) VALUES
('asdasd', '1111'),
('hello2', '12345');

--
-- 转储表的索引
--

--
-- 表的索引 `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
