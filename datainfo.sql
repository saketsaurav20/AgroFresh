-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 10, 2018 at 05:55 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datainfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

DROP TABLE IF EXISTS `farmer`;
CREATE TABLE IF NOT EXISTS `farmer` (
  `ID` int(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `FatherName` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Mobile` decimal(10,0) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Pincode` decimal(10,0) NOT NULL,
  `Password` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
