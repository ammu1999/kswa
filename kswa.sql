-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 29, 2019 at 09:05 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `adress` varchar(500) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`ID`, `username`, `adress`, `mobile`) VALUES
(1, 'a', '25585488', ''),
(2, 'dsdfhu', '', '589889'),
(3, 'ehfegyf', '', '6899865'),
(4, 'sdyusagdys', '', '565999'),
(5, 'trqyewrtyq', '', '566'),
(6, 'bjkbn', '', '5656'),
(7, 'hjbjk', '', '655'),
(8, 'qwty', '', '565665'),
(9, 'dgsfh', '', '45698'),
(10, 'bhjnjin', '', '516265'),
(11, 'vgvhgb', '', '5656'),
(12, 'ammu', '', '8225445412'),
(13, 'annu', '', '8281943463'),
(14, 'zarina', '', '8281943463'),
(15, 'zarina', '', '9896565');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `mobile` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`mobile`, `email`, `description`) VALUES
(95242678, 'uefyuewgrye', 'e7ewt67et6f'),
(95242678, 'uefyuewgrye', 'e7ewt67et6f');

-- --------------------------------------------------------

--
-- Table structure for table `kswatable`
--

DROP TABLE IF EXISTS `kswatable`;
CREATE TABLE IF NOT EXISTS `kswatable` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `consumerno` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `locality` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kswatable`
--

INSERT INTO `kswatable` (`id`, `name`, `username`, `email`, `consumerno`, `address`, `locality`, `password`, `status`) VALUES
(1, 'anna', 'anna', 'contct@gmail.com', '789456123', 'kottayam', 'kottayam', '123', 'blocked'),
(2, 'ammu', 'ammu123', 'ammu@gmail.com', '123456789', 'Kanjikuzhy', 'kottayam', '123', 'approved'),
(11, 'anna', 'anna', 'hgg', '254851', '13355', 'mooledom', '123', '0'),
(9, 'zarina', 'zarina', 'zarina@gmail.com', '84528', 'kappalumakkal', 'poovathilapp', 'zari', 'approved'),
(10, 'sachu', 'sachu', 'sachu@gmail.com', '254851', 'parackal', 'parakkakadav', 'sachu', 'approved'),
(18, 'jyothika', 'jyothika', 'jyothika@gmail.com', '2564826', '', 'kumaly', 'jyothi', '0');

-- --------------------------------------------------------

--
-- Table structure for table `readings`
--

DROP TABLE IF EXISTS `readings`;
CREATE TABLE IF NOT EXISTS `readings` (
  `mid` int(100) NOT NULL AUTO_INCREMENT,
  `consumerno` varchar(100) NOT NULL,
  `reading` varchar(20) NOT NULL,
  `date1` varchar(20) NOT NULL,
  `amount` varchar(6) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `readings`
--

INSERT INTO `readings` (`mid`, `consumerno`, `reading`, `date1`, `amount`, `status`) VALUES
(1, '123456789', '5', '2019-11-14', '78', 'unpaid'),
(2, '123', '5', '2019-11-05', '78', 'unpaid'),
(3, '253', '25', '2019-11-07', '86', 'unpaid'),
(4, '6555', '25', '', '85', 'unpaid'),
(5, '254', '50', '2019-11-06', '455', 'unpaid'),
(6, '5254', '562', '2011-11-06', '566', 'unpaid'),
(7, '123456789', '56', '2019-11-08', '85', 'unpaid'),
(8, '254', '50', '2019-11-13', '2578', 'unpaid'),
(9, '254', '25', '2019-11-14', '524', 'unpaid'),
(10, '523', '50', '2019-11-13', '2578', 'unpaid'),
(11, '523', '50', '2019-11-13', '2578', 'unpaid'),
(12, '254', '100', '2019-11-15', '5522', 'unpaid'),
(13, '254', '254', '', 'ggg', 'unpaid'),
(14, '254', '100', '2019-11-15', '5522', 'unpaid'),
(15, '123456789', '25', '2019-11-30', '455000', 'unpaid'),
(16, '123456789', '25', '2019-11-30', '455000', 'unpaid'),
(17, '123456789', '25', '2019-11-30', '455000', 'unpaid'),
(18, '123456789', '25', '2019-11-30', '455000', 'unpaid'),
(19, '123456789', '25', '2019-11-30', '455000', 'unpaid'),
(20, '123456789', '5000', '2019-11-22', '50000', 'unpaid'),
(21, '123456789', '5000', '2019-11-22', '50000', 'unpaid'),
(22, '789456123', '0000', '2019-11-30', '566', 'unpaid'),
(23, '789456123', '0000', '2019-11-30', '566', 'unpaid'),
(24, '789456123', '0000', '2019-11-30', '566', 'unpaid'),
(25, '789456123', '0000', '2019-11-30', '566', 'unpaid'),
(26, '789456123', '2545', '2019-11-22', '2578', 'unpaid'),
(27, '123456789', '255', '2019-11-17', '2000', 'unpaid'),
(28, '5651', '55655', '2019-11-15', '54555', 'unpaid'),
(29, '5651', '55655', '2019-11-15', '54555', 'unpaid'),
(30, '123456789', '562', '2019-11-16', '2655', 'unpaid'),
(31, '123456789', '56', '2019-11-24', '566', 'unpaid'),
(32, '84528', 'ff', '2019-11-14', '455', 'unpaid'),
(33, '84528', '454', '2019-11-14', '455', 'unpaid'),
(34, '123456789', '45454', '2019-11-22', '86', 'unpaid'),
(35, '254851', '100', '2019-11-15', '86', 'unpaid'),
(36, '789456123', 'gcghgv', '2019-11-23', 'gyb', 'unpaid'),
(37, '789456123', '25', '2019-11-15', '566', 'unpaid'),
(38, '123456789', '25446', '2019-11-13', '56798', 'unpaid'),
(39, '2564826', '562', '2019-11-21', '545', 'unpaid'),
(40, '2564826', '25', '2019-11-22', '', 'unpaid'),
(41, '2564826', '25', '2019-11-22', '', 'unpaid'),
(42, '123456789', '5556', '2019-11-14', '355', 'unpaid'),
(43, '123456789', '256', '2019-11-16', '235', 'unpaid');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
