-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?03 �?08 �?06:19
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `student`
--

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `age` tinyint(1) NOT NULL,
  `classid` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `name`, `sex`, `age`, `classid`) VALUES
(1, '乌庆同', '男', 22, 5),
(2, '聂子川', '男', 23, 4),
(5, '宋金庭', '男', 22, 5),
(7, '郭青君', '女', 22, 6),
(8, '王观恒', '男', 22, 5),
(12, '马云', '男', 49, 3),
(13, '马化腾', '男', 47, 2),
(14, '聂释隆', '男', 23, 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
