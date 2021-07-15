-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 17, 2020 at 03:47 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tsf`
--

-- --------------------------------------------------------

--
-- Table structure for table `transection`
--

CREATE TABLE IF NOT EXISTS `transection` (
  `sid` int(4) NOT NULL,
  `sac` varchar(10) NOT NULL,
  `sna` varchar(20) NOT NULL,
  `rid` int(4) NOT NULL,
  `rac` varchar(10) NOT NULL,
  `rna` varchar(20) NOT NULL,
  `amt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transection`
--

INSERT INTO `transection` (`sid`, `sac`, `sna`, `rid`, `rac`, `rna`, `amt`) VALUES
(1011, '20563987', 'Mr.NEEL PATEL', 1012, '23651489', 'Mr.Hitanshu Parekh', 500),
(1015, '02035698', 'Mr.HARSH KOTIAN', 1011, '20563987', 'Mr.NEEL PATEL', 500),
(1018, '02080125', ' Ms.Nidhi Chandarana', 1019, '02081452', 'Mr.Poojan Shah', 10000),
(1018, '02080125', ' Ms.Nidhi Chandarana', 1019, '02081452', 'Mr.Poojan Shah', 500),
(1020, '02075698', 'Mrs.Priti Patel', 1019, '02081452', 'Mr.Poojan Shah', 750),
(1014, '02314587', 'Mrs.Sonal Shangvi', 1011, '20563987', 'Mr.NEEL PATEL', 800),
(1020, '02075698', 'Mrs.Priti Patel', 1014, '02314587', 'Mrs.Sonal Shangvi', 1000),
(1017, '02080965', 'Mr.Yash Shah', 1013, '02356874', 'Mrs.Neelam Shah', 500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(4) NOT NULL,
  `ac` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `no` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `amt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ac`, `name`, `no`, `email`, `amt`) VALUES
(1011, '20563987', 'Mr.NEEL PATEL', '+91-8569214587', 'Neel199771@gmail.com', 28625),
(1012, '23651489', 'Mr.Hitanshu Parekh', '+91-9875423610', 'parekhhitanshu@yahoo.in', 8375),
(1013, '02356874', 'Mrs.Neelam Shah', '+91-6352417899', 'Neelam9@gmail.com', 50500),
(1014, '02314587', 'Mrs.Sonal Shangvi', '+91-6325418967', 'sg10@yahoo.in', 15000),
(1015, '02035698', 'Mr.Ronak Patel', '+91-8745962002', 'rspatel20@gmail.com', 54000),
(1016, '02080568', 'Mr.Harsh Kotian', '+91-8563210907', 'HK22@gmail.com', 20000),
(1017, '02080965', 'Mr.Yash Shah', '+91-7048596245', 'yashchauhan@gmail.com', 10000),
(1018, '02080125', ' Ms.Nidhi Chandarana', '+91-9998745123', 'nuc@yahoo.in', 49000),
(1019, '02081452', 'Mr.Poojan Shah', '+91-8575612453', 'ps4@gmail.com', 19750),
(1020, '02075698', 'Mrs.Priti Patel', '+91-8745692000', 'priti23@gmail.com', 34000);
