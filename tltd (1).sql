-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 28, 2022 at 03:22 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tltd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `Admin_ID` int(8) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`Admin_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_ID`, `Username`, `Password`) VALUES
(1, 'Admin', 'Ceu'),
(2, 'Hakdog', 'Manila');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_equipment`
--

DROP TABLE IF EXISTS `tbl_equipment`;
CREATE TABLE IF NOT EXISTS `tbl_equipment` (
  `Equip_ID` int(8) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL,
  `quantity` int(8) NOT NULL,
  PRIMARY KEY (`Equip_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11023225 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_equipment`
--

INSERT INTO `tbl_equipment` (`Equip_ID`, `type`, `name`, `information`, `quantity`) VALUES
(11023221, 'Laptop', 'HP pavilion', 'Laptop with charger', 1),
(11023222, 'Laptop', 'Samsung Ativ', 'Laptop with charger', 1),
(11023223, 'Projector', 'HP', 'Projector with power cord', 1),
(11023224, 'Microphone', 'Magicsing', 'Microphone with audio jack', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_facilities`
--

DROP TABLE IF EXISTS `tbl_facilities`;
CREATE TABLE IF NOT EXISTS `tbl_facilities` (
  `Faci_ID` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`Faci_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_facilities`
--

INSERT INTO `tbl_facilities` (`Faci_ID`, `name`, `location`) VALUES
(1, 'Sac', 'SAC ground floor'),
(2, 'LAH auditorium', 'LAH building first floor');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
