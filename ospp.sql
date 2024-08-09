-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 29, 2024 at 11:40 AM
-- Server version: 10.10.2-MariaDB
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ospp`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(225) NOT NULL,
  `a_email` varchar(225) NOT NULL,
  `a_password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'Saher', 'musa@gmail.com', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `ulogin`
--

DROP TABLE IF EXISTS `ulogin`;
CREATE TABLE IF NOT EXISTS `ulogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(225) NOT NULL,
  `u_email` varchar(225) NOT NULL,
  `u_password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dumping data for table `ulogin`
--

INSERT INTO `ulogin` (`id`, `u_name`, `u_email`, `u_password`) VALUES
(10, 'amina', 'musa.azan786@gmail.com', '22222'),
(12, 'saher', 'musa.azan12786@gmail.com', '1111'),
(13, 'saher', 'musa.azan12723386@gmail.com', 'asdf'),
(14, 'saher', 'musa.azan78@gmail.com', '1111'),
(15, 'saher', 'musa.azan86@gmail.com', '1111'),
(16, 'saher', 'musa.azan6@gmail.com', '1111'),
(17, 'saher', 'musa.aza@gmail.com', '1111'),
(18, 'saher', 'musa.az@gmail.com', '1111'),
(19, 'saher', 'kiran@gmail.com', '1111'),
(20, 'saher', 'saher123@gmail.com', '1111'),
(21, 'saher', 'kiran123@gmail.com', '1111'),
(22, 'musa', 'musa@gmail.com', '1111'),
(23, 'musa', 'musa1234@gmail.com', '1111'),
(24, 'musa', 'musa123@gmail.com', '1111'),
(25, 'musa', 'musa12345@gmail.com', '1111'),
(26, 'musa', 'musa123456@gmail.com', '11111'),
(27, 'musa', 'musa22@gmail.com', '111');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

DROP TABLE IF EXISTS `userlogin`;
CREATE TABLE IF NOT EXISTS `userlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(225) NOT NULL,
  `u_email` varchar(225) NOT NULL,
  `u_password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_request`
--

DROP TABLE IF EXISTS `user_request`;
CREATE TABLE IF NOT EXISTS `user_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_request` text NOT NULL,
  `u_description` text NOT NULL,
  `u_name` varchar(225) NOT NULL,
  `u_add1` varchar(225) NOT NULL,
  `u_add2` varchar(225) NOT NULL,
  `u_city` varchar(225) NOT NULL,
  `u_state` varchar(225) NOT NULL,
  `u_zip` varchar(225) NOT NULL,
  `u_email` varchar(225) NOT NULL,
  `u_mobile` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dumping data for table `user_request`
--

INSERT INTO `user_request` (`id`, `u_request`, `u_description`, `u_name`, `u_add1`, `u_add2`, `u_city`, `u_state`, `u_zip`, `u_email`, `u_mobile`, `date`) VALUES
(14, 'Maintenance', 'maintain devices', 'Saher Pervaiz', 'gujrat', 'gujrat', 'Gujrat', 'punjab', '50700', 'saher123@gmail.com', '+923066207138', '2024-01-06'),
(13, 'a', 'maintain devices', 'Saher Pervaiz', 'gujrat', 'gujrat', 'Gujrat', 'punjab', '50700', 'musa.azan786@gmail.com', '+923066207138', '2024-01-06'),
(9, 'Maintenance', 'maintain devices', 'Saher Saher Pervaiz', 'z', 'sz', 'Gujrat', 'a', '50700', 'musa.azan786@gmail.com', '+923066207138', '2023-12-30'),
(10, 'Maintenance', 'maintain devices', 'Saher Saher Pervaiz', 'z', 'sz', 'Gujrat', 'a', '50700', 'musa.azan786@gmail.com', '+923066207138', '2023-12-30'),
(11, 'Maintenance', 'maintain devices', 'Saher Pervaiz', 'z', 'sz', 'Gujrat', 'a', '50700', 'musa.azan786@gmail.com', '+923066207138', '2023-12-31'),
(17, 'keyboard errors', 'maintain devices', 'Saher Pervaiz', 'gujrat', 'gujrat', 'Gujrat', 'punjab', '50700', 'musa.azan786@gmail.com', '+923066207138', '2024-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `work_assign`
--

DROP TABLE IF EXISTS `work_assign`;
CREATE TABLE IF NOT EXISTS `work_assign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `request_id` int(11) NOT NULL,
  `u_request` varchar(225) NOT NULL,
  `u_description` varchar(225) NOT NULL,
  `u_name` varchar(225) NOT NULL,
  `u_add1` text NOT NULL,
  `u_add2` text NOT NULL,
  `u_city` varchar(225) NOT NULL,
  `u_state` varchar(225) NOT NULL,
  `u_zip` varchar(225) NOT NULL,
  `u_email` text NOT NULL,
  `u_mobile` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `t_name` varchar(225) NOT NULL,
  `assign_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dumping data for table `work_assign`
--

INSERT INTO `work_assign` (`id`, `request_id`, `u_request`, `u_description`, `u_name`, `u_add1`, `u_add2`, `u_city`, `u_state`, `u_zip`, `u_email`, `u_mobile`, `date`, `t_name`, `assign_date`) VALUES
(1, 0, 'Maintenance', 'maintain devices', 'Saher Pervaiz', 'z', 'sz', 'Gujrat', 'a', '50700', 'musa.azan786@gmail.com', '+923066207138', '2023-12-30', 'Saher Pervaiz', '2024-01-05'),
(2, 0, 'a', 'a', 'a', 'z', 'sz', 'Gujrat', 'a', '50700', 'musa.azan786@gmail.com', '+923066207138', '2023-12-30', 'kiran', '2024-01-06'),
(3, 0, 'keyboard errors', 'maintain devices', 'Ghazal', 'gujrat', 'gujrat', 'Gujrat', 'punjab', '50700', 'musa.azan786@gmail.com', '+923066207138', '2024-01-06', 'Umer', '2024-01-20'),
(4, 0, 'a', 'maintain devices', 'Saher Pervaiz', 'gujrat', 'gujrat', 'Gujrat', 'punjab', '50700', 'musa.azan786@gmail.com', '+923066207138', '2024-01-06', 'Essa', '2024-01-17'),
(5, 0, 'Maintenance', 'maintain devices', 'Saher Pervaiz', 'gujrat', 'gujrat', 'Gujrat', 'punjab', '50700', 'saher123@gmail.com', '+923066207138', '2024-01-06', 'kiran', '2024-01-09'),
(6, 0, 'Maintenance', 'maintain devices', 'kiran', 'gujrat', 'gujrat', 'Gujrat', 'punjab', '50700', 'kiran123@gmail.com', '+923066207138', '2024-01-06', 'azan', '2024-01-10'),
(7, 0, 'Maintenance', 'maintain devices', 'Saher Pervaiz', 'gujrat', 'gujrat', 'Gujrat', 'punjab', '50700', 'musa.az@gmail.com', '+923066207138', '2024-01-06', 'Saher Saher Pervaiz', '2024-01-19'),
(8, 0, 'Maintenance', 'maintain devices', 'Saher Pervaiz', 'gujrat', 'gujrat', 'Gujrat', 'punjab', '50700', 'musa.az@gmail.com', '+923066207138', '2024-01-06', 'Saher Saher Pervaiz', '2024-01-07'),
(9, 18, 'a', 'maintain devices', 'Saher Pervaiz', 'gujrat', 'gujrat', 'Gujrat', 'punjab', '50700', 'musa.azan786@gmail.com', '+923066207138', '2024-01-06', 'Saher Pervaiz', '2024-01-06'),
(10, 16, 'Maintenance', 'maintain devices', 'Saher Pervaiz', 'gujrat', 'gujrat', 'Gujrat', 'punjab', '50700', 'musa.az@gmail.com', '+923066207138', '2024-01-06', 'kiran', '2024-01-07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
