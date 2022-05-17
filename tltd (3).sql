-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2022 at 01:50 PM
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
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `Res_id` int(8) NOT NULL AUTO_INCREMENT,
  `nature` varchar(255) NOT NULL,
  `Purpose` varchar(255) NOT NULL,
  `Equipment` varchar(255) NOT NULL,
  `resDate` varchar(255) NOT NULL,
  `Time_Start` varchar(255) NOT NULL,
  `Time_End` varchar(255) NOT NULL,
  `Room_Venue` varchar(255) NOT NULL,
  `ReqName` varchar(255) NOT NULL,
  `School` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'NONE',
  `Remarks` varchar(255) NOT NULL DEFAULT 'none',
  `Campus` varchar(255) NOT NULL DEFAULT 'MANILA',
  `Date Requested` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`Res_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12324743 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Res_id`, `nature`, `Purpose`, `Equipment`, `resDate`, `Time_Start`, `Time_End`, `Room_Venue`, `ReqName`, `School`, `Email`, `Status`, `Remarks`, `Campus`, `Date Requested`) VALUES
(12324728, 'hatdog hatdoh', 'hatdog', '11023225', '2022-05-28', '14:53', '17:53', 'DCT room 203 ', 'bret', 'adsfsd', 'Email@email.com', 'PENDING', 'none', 'MANILA', '2022-05-15 06:53:30'),
(12324718, 'Academic,', 'Presentation/Lecture,', '11023222,11023226', '2022-05-12', '13:00', '15:00', '', 'Robert macho', 'School of Science and Technology', 'Fabian@yahoo.com', 'PENDING', 'none', 'MANILA', '2022-05-13 14:15:51'),
(12324717, 'Academic,', 'Presentation/Lecture,', '11023225', '2022-05-12', '13:00', '15:00', '', 'Robert macho', 'wrong', 'adsfsd', 'PENDING', 'none', 'MANILA', '2022-05-13 14:15:51'),
(12324716, 'Academic,', 'Presentation/Lecture,', '11023221', '2022-05-12', '13:00', '15:00', '', 'Bret Simoun Fabian', 'School of Science and Technology', 'Fabian@yahoo.com', 'PENDING', 'none', 'MANILA', '2022-05-13 14:15:51'),
(12324715, 'Academic,', 'Presentation/Lecture,', '11023222', '2022-05-12', '13:00', '15:00', '', 'Robert macho', 'School of medicine', 'Fabian@yahoo.com', 'PENDING', 'none', 'MANILA', '2022-05-13 14:15:51'),
(12324734, 'Academic,', 'Presentation/Lecture,', '11023225 11023226', '2022-06-03', '11:31', '16:31', 'DCT room 203 ', 'Robert macho', 'School of Science and Technology', 'Fabian@yahoo.com', 'PENDING', 'none', 'MANILA', '2022-05-15 10:31:38'),
(12324730, 'Academic,', 'Presentation/Lecture,', '11023221 11023223', '2022-06-03', '13:00', '15:00', 'DCT room 203 ', 'Robert macho', 'School of Science and Technology', 'Fabian@yahoo.com', 'CANCELLED', 'none', 'MANILA', '2022-05-15 09:44:42'),
(12324742, 'Co-curricular/Extra-curricular,', 'Viewing,', '11023225', '2022-06-11', '08:57', '12:58', 'DCT room 203 ', 'Bret Simoun Fabian', 'School of Science and Technology', 'Fabian@yahoo.com', 'PENDING', 'none', 'MANILA', '2022-05-17 12:58:14');

-- --------------------------------------------------------

--
-- Table structure for table `reservationfacility`
--

DROP TABLE IF EXISTS `reservationfacility`;
CREATE TABLE IF NOT EXISTS `reservationfacility` (
  `Res_id` int(8) NOT NULL AUTO_INCREMENT,
  `nature` varchar(255) NOT NULL,
  `Purpose` varchar(255) NOT NULL,
  `Facility` varchar(255) NOT NULL,
  `resDate` varchar(255) NOT NULL,
  `Time_Start` varchar(255) NOT NULL,
  `Time_End` varchar(255) NOT NULL,
  `ReqName` varchar(255) NOT NULL,
  `School` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'NONE',
  `Remarks` varchar(255) NOT NULL DEFAULT 'none',
  `Campus` varchar(255) NOT NULL DEFAULT 'MANILA',
  `Date Requested` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`Res_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21324465 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservationfacility`
--

INSERT INTO `reservationfacility` (`Res_id`, `nature`, `Purpose`, `Facility`, `resDate`, `Time_Start`, `Time_End`, `ReqName`, `School`, `Email`, `Status`, `Remarks`, `Campus`, `Date Requested`) VALUES
(21324452, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'NONE', 'none', 'MANILA', '2022-05-13 16:01:20'),
(21324453, 'Academic,', 'Presentation/Lecture,', '32241234', '2022-05-14', '12:03', '15:03', 'Bret Simoun Fabian', 'testing', 'adsfsd', 'RESERVED', 'none', 'MANILA', '2022-05-13 16:03:21'),
(21324454, 'Academic,', 'Presentation/Lecture,', '32241234,32241235,32241236', '2022-05-13', '12:05', '15:05', 'Robert macho', 'School of Science and Technology', 'Fabian@yahoo.com', 'CANCELLED', 'none', 'MANILA', '2022-05-13 16:05:40'),
(21324455, 'Academic,', 'Presentation/Lecture,', '32241234', '2022-05-17', '14:49', '16:49', 'Robert macho', 'testing', 'dsfsf', 'CANCELLED', 'none', 'MANILA', '2022-05-15 06:49:24'),
(21324456, 'Academic,', 'Presentation/Lecture,', '32241235', '2022-05-16', '16:12', '17:13', 'Robert macho', 'School of Science and Technology', 'Email@email.com', 'PENDING', 'none', 'MANILA', '2022-05-15 08:12:53'),
(21324457, 'Academic,', 'Presentation/Lecture,', '32241238', '2022-05-19', '16:20', '17:20', 'Bret Simoun Fabian', 'School of medicine', 'Email@email.com', 'PENDING', 'none', 'MANILA', '2022-05-15 08:20:29'),
(21324459, 'Academic,', 'Presentation/Lecture,', '32241234 32241235', '2022-06-09', '10:00', '13:00', 'Bret Simoun Fabian', 'School of Science and Technology', 'Email@email.com', 'PENDING', 'none', 'MANILA', '2022-05-15 14:00:16'),
(21324460, 'Academic,', 'Presentation/Lecture,', '32241239', '2022-05-18', '14:50', '15:50', 'Robert macho', 'School of Science and Technology', 'Fabian@yahoo.com', 'PENDING', 'none', 'MANILA', '2022-05-17 06:50:41'),
(21324461, 'Academic,', 'Presentation/Lecture,', '32241240', '2022-05-25', '08:42', '13:41', 'sfafasf', 'wrong', 'Email@email.com', 'NONE', 'none', 'MANILA', '2022-05-17 12:41:53'),
(21324462, 'hohoho', 'Viewing,', '32241237', '2022-05-19', '10:00', '12:00', 'hak', 'dog', 'hakdog', 'NONE', 'none', 'MANILA', '2022-05-17 12:45:46'),
(21324464, 'Academic,', 'Presentation/Lecture,', '32241238', '2022-06-10', '09:23', '14:23', 'sfafasf', 'School of Science and Technology', 'Fabian@yahoo.com', 'PENDING', 'none', 'MANILA', '2022-05-17 13:23:32');

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
  `Availability` varchar(255) NOT NULL DEFAULT 'Available',
  PRIMARY KEY (`Equip_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11023261 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_equipment`
--

INSERT INTO `tbl_equipment` (`Equip_ID`, `type`, `name`, `information`, `Availability`) VALUES
(11023221, 'Laptop', 'HP pavilion', 'Laptop with charger', 'Available'),
(11023222, 'Laptop', 'Samsung Ativ', 'Laptop with charger', 'Available'),
(11023223, 'Overhead Projector', 'HP', 'Projector with power cord', 'Available'),
(11023224, 'Microphone', 'Magicsing', 'Microphone with audio jack', 'Available'),
(11023225, 'Laptop', 'Toshiba', 'Laptop with Charger', 'Available'),
(11023226, 'Overhead Projector', 'HP', 'Projector with power cord', 'Available'),
(11023227, 'DLP/LCDProjector', 'Cherry mobile', 'Projector with power cord', 'Available'),
(11023228, 'DLP/LCDProjector', 'Toshiba', 'projector with power cord', 'Available'),
(11023229, 'VHSplayer', 'Panasonic', 'Player with stand', 'Available'),
(11023230, 'VHSplayer', 'hanabishi', 'player with stand', 'Available'),
(11023231, 'SoundSystem', 'Dolby atmos', 'sound system with audio jacks', 'Available'),
(11023232, 'SoundSystem', 'kondura', 'sound system with love', 'Available'),
(11023233, 'DVDplayer', 'video city', 'DVD with pirated cd', 'Available'),
(11023234, 'DVDplayer', 'Blockbuster', 'DVD player with washing machine', 'Available'),
(11023235, 'VCDplayer', 'TGP', 'Player with electric fan', 'Available'),
(11023236, 'VCDplayer', 'tsoshinitsu', 'vcd with backup dancers', 'Available'),
(11023237, 'CDcassettePlayer', 'sony', 'cassette with health insurance', 'Available'),
(11023238, 'CDcassettePlayer', 'channel', 'cassette with 50inch tablet', 'Available'),
(11023239, 'Karaoke', 'sing magic', 'karaoke with wonderful tonight singer', 'Available'),
(11023240, 'Karaoke', 'geely', 'karaoke with scoring', 'Available'),
(11023241, 'Microphone', 'mike', 'microphone with with wifi', 'Available'),
(11023242, 'Microphone', 'yulong', 'microphone with adjustable seatbelt', 'Available'),
(11023243, 'DocumentCamera', 'kodak', 'camera with birth certificate', 'Available'),
(11023244, 'DocumentCamera', 'panasonic', 'camera with ghost footage', 'Available'),
(11023245, 'DigitalvideoCamera', 'samsung', 'video camera with water dispenser', 'Available'),
(11023246, 'DigitalvideoCamera', 'octagon', 'video camera with 5 year relationship', 'Available'),
(11023247, 'DigitalCamera(still)', 'Sony', 'camera with removable braces', 'Available'),
(11023248, 'DigitalCamera(still)', 'Samsung', 'camera with backup plan', 'Available'),
(11023249, 'DocumentationVideos', 'n/a', 'pirated cinema copy videos', 'Available'),
(11023250, 'DocumentationVideos', 'n/a', 'cd burned torrent videos', 'Available'),
(11023251, 'EducationalVideos', 'n/a', 'videos with college diploma', 'Available'),
(11023252, 'EducationalVideos', 'n/a', 'videos with educational masters degree', 'Available'),
(11023253, 'Music', 'n/a', 'music ft. bugoynakolokoy', 'Available'),
(11023254, 'Music', 'n/a', 'music with sing along come with me barney', 'Available'),
(11023255, 'HDMIconnector', 'CDR king', 'HDMI with 1km length', 'Available'),
(11023256, 'HDMIconnector', 'abenson', 'HDMI with 5G signal', 'Available'),
(11023257, 'VGAconnector', 'n/a', 'n/a', 'Available'),
(11023258, 'VGAconnector', 'n/a', 'n/a', 'Available'),
(11023259, 'LightningDigitalAVadapter', 'n/a', 'n/a', 'Available'),
(11023260, 'LightningDigitalAVadapter', 'n/a', 'n/a', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_facilities`
--

DROP TABLE IF EXISTS `tbl_facilities`;
CREATE TABLE IF NOT EXISTS `tbl_facilities` (
  `Faci_ID` int(8) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL,
  `Availability` varchar(255) NOT NULL DEFAULT 'Available',
  PRIMARY KEY (`Faci_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=32241241 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_facilities`
--

INSERT INTO `tbl_facilities` (`Faci_ID`, `type`, `information`, `Availability`) VALUES
(32241234, 'Sofia De Veyra Room', 'room', 'Available'),
(32241235, 'LAH seminar Room 1', 'room', 'Available'),
(32241236, 'LAH Seminar Room 2', 'room', 'Available'),
(32241237, 'LAH Seminar Room 3', 'room', 'Available'),
(32241238, 'Student Activity Center', 'room', 'Available'),
(32241239, 'North Quadrangle', 'room', 'Available'),
(32241240, 'Tech Center', 'room', 'Available');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
