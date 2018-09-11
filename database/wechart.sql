-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018-09-11 02:44:15
-- 服务器版本： 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wuiw1801`
--

-- --------------------------------------------------------

--
-- 表的结构 `wechart`
--

DROP TABLE IF EXISTS `wechart`;
CREATE TABLE IF NOT EXISTS `wechart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_avatar` char(100) NOT NULL,
  `use_name` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `img_urls` char(255) NOT NULL,
  `pulish_time` varchar(100) NOT NULL,
  `pulish_address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO `wechart` (`user_avatar`, `use_name`, `content`,`img_urls`,`pulish_time`,`pulish_address`) VALUES
('https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=843941027,2522415533&fm=27&gp=0.jpg','学会拒绝','山西工商学院北格校区秋季社团纳新了','https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=3559817402,2365570412&fm=27&gp=0.jpg;https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=4252978712,688727476&fm=27&gp=0.jpg','2018年9月11日','学府街平衍路口开通大厦'),
('https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=843941027,2522415533&fm=27&gp=0.jpg','学会拒绝','山西工商学院北格校区秋季社团纳新了','https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=3559817402,2365570412&fm=27&gp=0.jpg;https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=4252978712,688727476&fm=27&gp=0.jpg','2018年9月11日','学府街平衍路口开通大厦');
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
