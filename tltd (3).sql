-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 21, 2022 at 02:34 PM
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
  `Access` varchar(255) NOT NULL DEFAULT 'None',
  PRIMARY KEY (`Admin_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=23341270 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_ID`, `Username`, `Password`, `Access`) VALUES
(23341267, 'Admin', 'Ceu', 'Manila'),
(23341268, 'Admin_Makati', 'Makati', 'Makati'),
(23341269, 'Admin_Malolos', 'Malolos', 'Malolos');

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
) ENGINE=MyISAM AUTO_INCREMENT=12324750 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Res_id`, `nature`, `Purpose`, `Equipment`, `resDate`, `Time_Start`, `Time_End`, `Room_Venue`, `ReqName`, `School`, `Email`, `Status`, `Remarks`, `Campus`, `Date Requested`) VALUES
(12324728, 'hatdog hatdoh', 'hatdog', '11023225', '2022-05-28', '14:53', '17:53', 'DCT room 203 ', 'bret', 'adsfsd', 'Email@email.com', 'CANCELLED', 'none', 'MANILA', '2022-05-15 06:53:30'),
(12324718, 'Academic,', 'Presentation/Lecture,', '11023222,11023226', '2022-05-12', '13:00', '15:00', '', 'Robert macho', 'School of Science and Technology', 'Fabian@yahoo.com', 'RESERVED', 'none', 'MANILA', '2022-05-13 14:15:51'),
(12324717, 'Academic,', 'Presentation/Lecture,', '11023225', '2022-05-12', '13:00', '15:00', '', 'Robert macho', 'wrong', 'adsfsd', 'RESERVED', 'none', 'MANILA', '2022-05-13 14:15:51'),
(12324716, 'Academic,', 'Presentation/Lecture,', '11023221', '2022-05-12', '13:00', '15:00', '', 'Bret Simoun Fabian', 'School of Science and Technology', 'Fabian@yahoo.com', 'CANCELLED', 'none', 'MANILA', '2022-05-13 14:15:51'),
(12324715, 'Academic,', 'Presentation/Lecture,', '11023222', '2022-05-12', '13:00', '15:00', '', 'Robert macho', 'School of medicine', 'Fabian@yahoo.com', 'PENDING', 'none', 'MANILA', '2022-05-13 14:15:51'),
(12324734, 'Academic,', 'Presentation/Lecture,', '11023225 11023226', '2022-06-03', '11:31', '16:31', 'DCT room 203 ', 'Robert macho', 'School of Science and Technology', 'Fabian@yahoo.com', 'CANCELLED', 'none', 'MANILA', '2022-05-15 10:31:38'),
(12324730, 'Academic,', 'Presentation/Lecture,', '11023221 11023223', '2022-06-03', '13:00', '15:00', 'DCT room 203 ', 'Robert macho', 'School of Science and Technology', 'Fabian@yahoo.com', 'CANCELLED', 'none', 'MANILA', '2022-05-15 09:44:42'),
(12324743, 'tinuran ', 'mo', 'puso', '2022-05-18', '11:00', '12:00', 'no', 'ue', 'asd', 'email mo mukha mo', 'RESERVED', 'waive late fee', 'MANILA', '2022-05-18 05:53:51'),
(12324744, 'Co-curricular/Extra-curricular,', 'Viewing,', '11023234 11023252', '2022-05-20', '13:00', '16:00', 'Mvh room 201', 'Sugo ni robin', 'robin padilla lawyers association', 'emailyourface@gmail.com', 'COMPLETED', 'none', 'MANILA', '2022-05-20 06:56:31'),
(12324742, 'Co-curricular/Extra-curricular,', 'Viewing,', '11023225', '2022-06-11', '08:57', '12:58', 'DCT room 203 ', 'Bret Simoun Fabian', 'School of Science and Technology', 'Fabian@yahoo.com', 'CANCELLED', 'none', 'MANILA', '2022-05-17 12:58:14'),
(12324745, 'Academic,', 'Presentation/Lecture,', '11023237', '2022-05-20', '15:25', '16:25', 'DCT room 203 ', 'Robert macho', 'School of Science and Technology', 'sinigang mix', 'COMPLETED', 'none', 'MANILA', '2022-05-20 07:25:40'),
(12324746, 'Academic,', 'Presentation/Lecture,', '11023233 11023236', '2022-05-21', '10:01', '13:01', 'Mvh room 201', 'zigzag baby', 'egg waffles', 'sinigang na sago', 'COMPLETED', 'none', 'MANILA', '2022-05-20 13:02:30'),
(12324747, 'hakdog', 'hohoho', '11023244', '2022-05-22', '09:25', '10:25', 'DCT room 203 ', 'testing', 'School of medicine', 'Fabian@yahoo.com', 'RESERVED', 'none', 'MANILA', '2022-05-21 11:26:19'),
(12324749, 'testing testing lipat folder', 'testing testing function lipat folder', '11023223 11023227 11023230', '2022-05-21', '10:18', '16:18', 'ICT room 304', 'sfafasf', 'School of Science and Technology', 'Fabian@yahoo.com', 'COMPLETED', ' baby boy baboy', 'MANILA', '2022-05-21 14:18:25');

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
) ENGINE=MyISAM AUTO_INCREMENT=21324469 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservationfacility`
--

INSERT INTO `reservationfacility` (`Res_id`, `nature`, `Purpose`, `Facility`, `resDate`, `Time_Start`, `Time_End`, `ReqName`, `School`, `Email`, `Status`, `Remarks`, `Campus`, `Date Requested`) VALUES
(21324452, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'NONE', 'none', 'MANILA', '2022-05-13 16:01:20'),
(21324453, 'Academic,', 'Presentation/Lecture,', '32241234', '2022-05-14', '12:03', '15:03', 'Bret Simoun Fabian', 'testing', 'adsfsd', 'RESERVED', 'none', 'MANILA', '2022-05-13 16:03:21'),
(21324454, 'Academic,', 'Presentation/Lecture,', '32241234,32241235,32241236', '2022-05-13', '12:05', '15:05', 'Robert macho', 'School of Science and Technology', 'Fabian@yahoo.com', 'CANCELLED', 'none', 'MANILA', '2022-05-13 16:05:40'),
(21324455, 'Academic,', 'Presentation/Lecture,', '32241234', '2022-05-17', '14:49', '16:49', 'Robert macho', 'testing', 'dsfsf', 'CANCELLED', 'none', 'MANILA', '2022-05-15 06:49:24'),
(21324456, 'Academic,', 'Presentation/Lecture,', '32241235', '2022-05-16', '16:12', '17:13', 'Robert macho', 'School of Science and Technology', 'Email@email.com', 'CANCELLED', 'none', 'MANILA', '2022-05-15 08:12:53'),
(21324457, 'Academic,', 'Presentation/Lecture,', '32241238', '2022-05-19', '16:20', '17:20', 'Bret Simoun Fabian', 'School of medicine', 'Email@email.com', 'CANCELLED', 'none', 'MANILA', '2022-05-15 08:20:29'),
(21324459, 'Academic,', 'Presentation/Lecture,', '32241234 32241235', '2022-06-09', '10:00', '13:00', 'Bret Simoun Fabian', 'School of Science and Technology', 'Email@email.com', 'CANCELLED', 'none', 'MANILA', '2022-05-15 14:00:16'),
(21324460, 'Academic,', 'Presentation/Lecture,', '32241239', '2022-05-18', '14:50', '15:50', 'Robert macho', 'School of Science and Technology', 'Fabian@yahoo.com', 'PENDING', 'none', 'MANILA', '2022-05-17 06:50:41'),
(21324461, 'Academic,', 'Presentation/Lecture,', '32241240', '2022-05-25', '08:42', '13:41', 'sfafasf', 'wrong', 'Email@email.com', 'NONE', 'none', 'MANILA', '2022-05-17 12:41:53'),
(21324462, 'hohoho', 'Viewing,', '32241237', '2022-05-19', '10:00', '12:00', 'hak', 'dog', 'hakdog', 'NONE', 'none', 'MANILA', '2022-05-17 12:45:46'),
(21324464, 'Academic,', 'Presentation/Lecture,', '32241238', '2022-06-10', '09:23', '14:23', 'sfafasf', 'School of Science and Technology', 'Fabian@yahoo.com', 'CANCELLED', 'none', 'MANILA', '2022-05-17 13:23:32'),
(21324465, 'galungong', 'pasas', 'sofia del solslsl', '2022-05-18', '13:00', '15:00', 'hakdog', 'hakdog', 'hakdog', 'RESERVED', ' testing my loves for you is great', 'MANILA', '2022-05-18 06:49:25'),
(21324466, 'Academic,', 'Presentation/Lecture,', '32241235', '2022-05-20', '13:00', '17:00', 'Sundalo ni Allan Cayatano', 'school of 10k', 'wlakongpake@gmail.com', 'COMPLETED', ' bomba', 'MANILA', '2022-05-20 07:10:24'),
(21324467, 'Academic,', 'Presentation/Lecture,', '32241235 32241238', '2022-05-20', '15:31', '17:33', 'wrong', 'testing', 'Shabog', 'COMPLETED', 'none', 'MANILA', '2022-05-20 07:31:29'),
(21324468, 'Academic,', 'Presentation/Lecture,', '32241234', '2022-05-27', '09:56', '13:56', 'testing', 'testing', 'Fabian@yahoo.com', 'PENDING', 'none', 'MANILA', '2022-05-21 13:56:37');

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
  `Site` varchar(255) NOT NULL DEFAULT 'MANILA',
  PRIMARY KEY (`Equip_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11023268 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_equipment`
--

INSERT INTO `tbl_equipment` (`Equip_ID`, `type`, `name`, `information`, `Availability`, `Site`) VALUES
(11023221, 'Laptop', 'HP pavillion', 'Laptop with charger', 'Available', 'MANILA'),
(11023222, 'Laptop', 'Samsung Ativ', 'Laptop with charger', 'Available', 'MANILA'),
(11023223, 'Overhead Projector', 'HP', 'Projector with power cord', 'Available', 'MANILA'),
(11023224, 'Microphone', 'Magicsing', 'Microphone with audio jack', 'Available', 'MANILA'),
(11023225, 'Laptop', 'Toshiba', 'Laptop with Charger', 'Available', 'MANILA'),
(11023226, 'Overhead Projector', 'HP', 'Projector with power cord', 'Available', 'MANILA'),
(11023227, 'DLP/LCDProjector', 'Cherry mobile', 'Projector with power cord', 'Available', 'MANILA'),
(11023228, 'DLP/LCDProjector', 'Toshiba', 'projector with power cord', 'Available', 'MANILA'),
(11023229, 'VHSplayer', 'Panasonic', 'Player with stand', 'Available', 'MANILA'),
(11023230, 'VHSplayer', 'hanabishi', 'player with stand', 'Available', 'MANILA'),
(11023231, 'SoundSystem', 'Dolby atmos', 'sound system with audio jacks', 'Available', 'MANILA'),
(11023232, 'SoundSystem', 'kondura', 'sound system with love', 'Available', 'MANILA'),
(11023233, 'DVDplayer', 'video city', 'DVD with pirated cd', 'Available', 'MANILA'),
(11023234, 'DVDplayer', 'Blockbuster', 'DVD player with washing machine', 'Available', 'MANILA'),
(11023235, 'VCDplayer', 'TGP', 'Player with electric fan', 'Available', 'MANILA'),
(11023236, 'VCDplayer', 'tsoshinitsu', 'vcd with backup dancers', 'Available', 'MANILA'),
(11023237, 'CDcassettePlayer', 'sony', 'cassette with health insurance', 'Available', 'MANILA'),
(11023238, 'CDcassettePlayer', 'channel', 'cassette with 50inch tablet', 'Available', 'MANILA'),
(11023239, 'Karaoke', 'sing magic', 'karaoke with wonderful tonight singer', 'Available', 'MANILA'),
(11023240, 'Karaoke', 'geely', 'karaoke with scoring', 'Available', 'MANILA'),
(11023241, 'Microphone', 'mike', 'microphone with with wifi', 'Available', 'MANILA'),
(11023242, 'Microphone', 'yulong', 'microphone with adjustable seatbelt', 'Available', 'MANILA'),
(11023243, 'DocumentCamera', 'kodak', 'camera with birth certificate', 'Available', 'MANILA'),
(11023244, 'DocumentCamera', 'panasonic', 'camera with ghost footage', 'Available', 'MANILA'),
(11023245, 'DigitalvideoCamera', 'samsung', 'video camera with water dispenser', 'Available', 'MANILA'),
(11023246, 'DigitalvideoCamera', 'octagon', 'video camera with 5 year relationship', 'Available', 'MANILA'),
(11023247, 'DigitalCamera(still)', 'Sony', 'camera with removable braces', 'Available', 'MANILA'),
(11023248, 'DigitalCamera(still)', 'Samsung', 'camera with backup plan', 'Available', 'MANILA'),
(11023249, 'DocumentationVideos', 'n/a', 'pirated cinema copy videos', 'Available', 'MANILA'),
(11023250, 'DocumentationVideos', 'n/a', 'cd burned torrent videos', 'Available', 'MANILA'),
(11023251, 'EducationalVideos', 'n/a', 'videos with college diploma', 'Available', 'MANILA'),
(11023252, 'EducationalVideos', 'n/a', 'videos with educational masters degree', 'Available', 'MANILA'),
(11023253, 'Music', 'n/a', 'music ft. bugoynakolokoy', 'Available', 'MANILA'),
(11023254, 'Music', 'n/a', 'music with sing along come with me barney', 'Available', 'MANILA'),
(11023255, 'HDMIconnector', 'CDR king', 'HDMI with 1km length', 'Available', 'MANILA'),
(11023256, 'HDMIconnector', 'abenson', 'HDMI with 5G signal', 'Available', 'MANILA'),
(11023257, 'VGAconnector', 'n/a', 'n/a', 'Available', 'MANILA'),
(11023258, 'VGAconnector', 'n/a', 'n/a', 'Available', 'MANILA'),
(11023259, 'LightningDigitalAVadapter', 'n/a', 'n/a', 'Available', 'MANILA'),
(11023260, 'LightningDigitalAVadapter', 'n/a', 'n/a', 'Available', 'MANILA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_facilities`
--

DROP TABLE IF EXISTS `tbl_facilities`;
CREATE TABLE IF NOT EXISTS `tbl_facilities` (
  `Faci_ID` int(8) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL,
  `Availability` varchar(255) NOT NULL DEFAULT 'Available',
  `Site` varchar(255) NOT NULL DEFAULT 'MANILA',
  PRIMARY KEY (`Faci_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=32241243 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_facilities`
--

INSERT INTO `tbl_facilities` (`Faci_ID`, `type`, `name`, `information`, `Availability`, `Site`) VALUES
(32241234, 'Sofia De Veyra Room', 'Sofia De Veyra Room', 'room', 'Available', 'MANILA'),
(32241235, 'LAH seminar Room 1', 'LAH seminar Room 1', 'room', 'Available', 'MANILA'),
(32241236, 'LAH Seminar Room 2', 'LAH Seminar Room 2', 'room', 'Available', 'MANILA'),
(32241237, 'LAH Seminar Room 3', 'LAH Seminar Room 3', 'room', 'Available', 'MANILA'),
(32241238, 'Student Activity Center', 'Student Activity Center', 'room', 'Available', 'MANILA'),
(32241239, 'North Quadrangle', 'North Quadrangle', 'room', 'Available', 'MANILA'),
(32241240, 'Tech Center', 'Tech Center', 'room', 'Available', 'MANILA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
