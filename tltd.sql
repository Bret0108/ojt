-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 03:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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

CREATE TABLE `admin_login` (
  `Admin_ID` int(8) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Access` varchar(255) NOT NULL DEFAULT 'None',
  `Root` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_ID`, `Username`, `Password`, `Access`, `Root`, `Name`, `Email`) VALUES
(23341287, 'Admin', '$2y$10$le6p.MQij6E.nAbJhjbaGeSwSu5wM7WY/fPeKsU7fMyHLnhkYBVrC', 'None', 'YES', 'root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `equipmentrepairrequest`
--

CREATE TABLE `equipmentrepairrequest` (
  `Repair_ID` int(8) NOT NULL,
  `DescEquip` varchar(255) NOT NULL,
  `Model` varchar(255) NOT NULL,
  `SerialNo` varchar(255) NOT NULL,
  `DescEquipNo` varchar(255) NOT NULL,
  `Complaint` varchar(255) NOT NULL,
  `ReportName` varchar(255) NOT NULL,
  `ReportDept` varchar(255) NOT NULL,
  `ActionTaken` varchar(255) NOT NULL,
  `Repaired` varchar(255) NOT NULL,
  `InhouseRemarks` varchar(255) NOT NULL,
  `InhouseName` varchar(255) NOT NULL,
  `InhouseSig` varchar(255) NOT NULL,
  `InhouseDateTime` varchar(255) NOT NULL,
  `OutsideName` varchar(255) NOT NULL,
  `OutsideServicecntr` varchar(255) NOT NULL,
  `OutsideDateout` varchar(255) NOT NULL,
  `OutsideReturn` varchar(255) NOT NULL,
  `OutsideORno` varchar(255) NOT NULL,
  `AttestName` varchar(255) NOT NULL,
  `AttestSig` varchar(255) NOT NULL,
  `AttestDateTime` varchar(255) NOT NULL,
  `ApprovName` varchar(255) NOT NULL,
  `ApprovSig` varchar(255) NOT NULL,
  `BuildiNG` varchar(255) NOT NULL,
  `ROoM` varchar(255) NOT NULL,
  `MDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipmentrepairrequest`
--

INSERT INTO `equipmentrepairrequest` (`Repair_ID`, `DescEquip`, `Model`, `SerialNo`, `DescEquipNo`, `Complaint`, `ReportName`, `ReportDept`, `ActionTaken`, `Repaired`, `InhouseRemarks`, `InhouseName`, `InhouseSig`, `InhouseDateTime`, `OutsideName`, `OutsideServicecntr`, `OutsideDateout`, `OutsideReturn`, `OutsideORno`, `AttestName`, `AttestSig`, `AttestDateTime`, `ApprovName`, `ApprovSig`, `BuildiNG`, `ROoM`, `MDate`) VALUES
(3, 'Laptop', 'Samsung', '31231535032', 'Laptop1', 'charger is broken', 'bret simoun fabian', 'NURSING,', 'In-house', 'Repaired', 'loose cable', 'baby boy bawang', 'signature (1).png', '2022/06/15', '', '', '', '', '', 'test', 'signature (2).png', '2022/06/16', 'testgo', 'signature.png', 'GDLSC', '201', '2022-06-15'),
(4, 'Laptop', 'Samsung', '325023502520', 'Laptop2', 'noise complaint', 'Sinigang na champorado', 'PHARMACY,', 'Outside', ' ', '', '', '', '', 'saging na saba', 'marikina river', '2022-06-16', '2022-06-16', '325002350250', '', '', '', '', '', 'MVH', '302', '2022-06-16'),
(6, 'Laptop', 'toshihi', '3423423423', '0912324242', 'broken charger', 'bret', 'SELAMS,', 'In-house', 'Repaired', 'repaired', 'bret', 'signature.png', '2022/11/24', '', '', '', '', '', 'sir junjun', 'signature.png', '2022/11/25', 'sir jotic', 'signature.png', 'PHL', '302', '2022-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `instructionalvideoeval`
--

CREATE TABLE `instructionalvideoeval` (
  `Eval_ID` int(8) NOT NULL,
  `Video Title` varchar(255) NOT NULL,
  `Evaluator Name` varchar(255) NOT NULL,
  `Evaluator Signature` varchar(255) NOT NULL,
  `daTE` varchar(255) NOT NULL,
  `Question1` varchar(100) NOT NULL,
  `Question2` varchar(100) NOT NULL,
  `Question3` varchar(100) NOT NULL,
  `Question4` varchar(100) NOT NULL,
  `Question5` varchar(100) NOT NULL,
  `Question6` varchar(100) NOT NULL,
  `Question7` varchar(100) NOT NULL,
  `Question8` varchar(100) NOT NULL,
  `Question9` varchar(100) NOT NULL,
  `Question10` varchar(100) NOT NULL,
  `Additional Comments` varchar(255) NOT NULL,
  `Rating` varchar(255) NOT NULL,
  `Verbal Interpretation` varchar(255) NOT NULL,
  `Recommendation` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instructionalvideoeval`
--

INSERT INTO `instructionalvideoeval` (`Eval_ID`, `Video Title`, `Evaluator Name`, `Evaluator Signature`, `daTE`, `Question1`, `Question2`, `Question3`, `Question4`, `Question5`, `Question6`, `Question7`, `Question8`, `Question9`, `Question10`, `Additional Comments`, `Rating`, `Verbal Interpretation`, `Recommendation`) VALUES
(27, 'Pinya', 'Bret simoun Fabian', 'signature (1).png', '2022-06-13', '1', '2', '3', '4', '3', '2', '2', '2', '3', '2', 'go', 'go', 'go', 'go'),
(29, 'mr incredible', 'me myself', 'signature (2).png', '2022-06-13', '4', '3', '3', '2', '3', '2', '2', '2', '2', '2', 'N/A', '10', 'NICE', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Res_id` int(8) NOT NULL,
  `nature` varchar(255) NOT NULL,
  `Purpose` varchar(255) NOT NULL,
  `Equipment` varchar(255) NOT NULL,
  `resDate` varchar(255) NOT NULL,
  `Time_Start` varchar(255) NOT NULL,
  `Time_End` varchar(255) NOT NULL,
  `Room_Venue` varchar(255) NOT NULL,
  `ReqName` varchar(255) NOT NULL,
  `SchoolID` varchar(255) NOT NULL,
  `School` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'NONE',
  `Remarks` varchar(255) NOT NULL DEFAULT 'None',
  `Checked_By` varchar(255) NOT NULL DEFAULT 'None',
  `Released By` varchar(255) DEFAULT NULL,
  `Recieved By` varchar(255) DEFAULT NULL,
  `Date_Requested` timestamp NOT NULL DEFAULT current_timestamp(),
  `Last_Update` timestamp NULL DEFAULT NULL,
  `User` varchar(255) DEFAULT NULL,
  `Office` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Res_id`, `nature`, `Purpose`, `Equipment`, `resDate`, `Time_Start`, `Time_End`, `Room_Venue`, `ReqName`, `SchoolID`, `School`, `Email`, `Status`, `Remarks`, `Checked_By`, `Released By`, `Recieved By`, `Date_Requested`, `Last_Update`, `User`, `Office`) VALUES
(10000094, 'Academic,', 'Presentation/Lecture,', '11023401', '2022-08-11', '14:10', '15:10', 'LAH 201', 'BRET SIMOUN FABIAN', '201213', 'MEDICINE', 'fabian1103724@ceu.edu.ph', 'CANCELLED', 'None', 'bret', NULL, NULL, '2022-08-10 14:10:11', '2022-11-22 06:16:38', 'Student', 'TLTD_MAIN'),
(10000093, 'Academic,', 'Presentation/Lecture,', '11023401', '2022-08-11', '12:10', '13:10', 'PHL 201', 'BRET SIMOUN FABIAN', '2020-03723', 'GRADSCHOOL', 'fabian1103724@ceu.edu.ph', 'CANCELLED', 'None', 'bret', NULL, NULL, '2022-08-10 14:08:39', '2022-11-22 06:16:42', 'Student', 'TLTD_MAIN'),
(10000092, 'Academic,', 'Presentation/Lecture,', '11023401', '2022-08-11', '10:07', '11:07', 'CDL 201', 'BRET SIMOUN FABIAN', '2012123123', 'GRADSCHOOL', 'fabian1103724@ceu.edu.ph', 'CANCELLED', 'None', 'bret', NULL, NULL, '2022-08-10 14:07:42', '2022-11-22 06:16:44', 'Student', 'TLTD_MAIN'),
(10000091, 'Academic,', 'Presentation/Lecture,', '11023352 11023397', '2022-07-08', '14:03', '16:03', 'SDV 301', 'Robert macho', '2020-03723', 'MEDICINE', 'Fabian@yahoo.com', 'CANCELLED', 'None', 'bret', NULL, NULL, '2022-07-07 15:04:13', '2022-11-22 06:16:46', 'Student', 'TLTD_MAIN'),
(10000090, 'Academic,', 'Presentation/Lecture,', '11023352 11023397', '2022-07-07', '14:58', '15:58', 'GDLSC 201', 'sfafasf', '2020-03768', 'PHARMACY', 'Fabian@yahoo.com', 'CANCELLED', 'None', 'bret', NULL, NULL, '2022-07-07 14:58:28', '2022-11-22 06:16:48', 'Student', 'TLTD_MAIN'),
(10000088, 'Academic,', 'Presentation/Lecture,', '11023351 11023397', '2022-06-24', '09:27', '16:21', 'LAH 201', 'BRET SIMOUN FABIAN', '200810000', 'SCITECH', 'fabian1103724@ceu.edu.ph', 'COMPLETED', 'late 2hr fee 200', 'Admin', 'testing', 'testing 2', '2022-06-23 07:23:05', '2022-06-23 07:33:13', 'Teaching', 'TLTD_MAIN'),
(10000087, 'Academic,', 'Presentation/Lecture,', '11023351 11023397', '2022-06-25', '13:45', '14:45', 'GDLSC 301', 'BRET SIMOUN FABIAN', '2020-03723', 'GRADSCHOOL', 'fabian1103724@ceu.edu.ph', 'COMPLETED', 'late 100', 'Admin', 'tester 7', 'tester 9', '2022-06-23 05:45:50', '2022-06-23 05:49:07', 'Teaching', 'TLTD_MAIN'),
(10000086, 'Academic,', 'Presentation/Lecture,', '11023392 11023353', '2022-06-22', '12:49', '15:49', 'DENT SCI 201', 'BRET SIMOUN FABIAN', '2020-03723', 'GRADSCHOOL', 'fabian1103724@ceu.edu.ph', 'CANCELLED', 'Did not borrow equipment', 'Admin', NULL, NULL, '2022-06-22 16:50:12', '2022-06-22 16:50:51', 'Student', 'DENT_SCI'),
(10000084, 'Academic,', 'Presentation/Lecture,', '11023352 11023397', '2022-06-30', '11:42', '13:42', 'LAH 301', 'BRET SIMOUN FABIAN', '2020-03768', 'GRADSCHOOL', 'fabian1103724@ceu.edu.ph', 'COMPLETED', '', 'Admin', 'tester 3', 'tester 8', '2022-06-22 15:42:37', '2022-06-22 16:29:59', 'Student', 'TLTD_MAIN'),
(10000085, 'Academic,', 'Presentation/Lecture,', '11023392 11023353', '2022-06-23', '11:43', '13:43', 'PHL 201', 'BRET SIMOUN FABIAN', '2020-03723', 'GRADSCHOOL', 'fabian1103724@ceu.edu.ph', 'COMPLETED', 'late fee 200', 'Admin', 'tester 4', 'tester 9', '2022-06-22 15:43:27', '2022-06-22 16:31:26', 'Teaching', 'DENT_SCI'),
(10000083, 'Academic,', 'Presentation/Lecture,', '11023351 11023397', '2022-06-23', '11:41', '13:41', 'MVH 201', 'BRET SIMOUN FABIAN', '2020-03723', 'GRADSCHOOL', 'fabian1103724@ceu.edu.ph', 'COMPLETED', 'late fee 200', 'Admin', 'tester 4', 'tester 9', '2022-06-22 15:42:00', '2022-06-22 16:29:46', 'Student', 'TLTD_MAIN'),
(10000096, 'Academic,Co-curricular/Extra-curricular,', 'Presentation/Lecture,', '11023352 11023397', '2022-11-23', '13:15', '15:15', 'CDD 201', 'BRET SIMOUN FABIAN', '2022-22122', 'DENTISTRY', 'fabian1103724@ceu.edu.ph', 'COMPLETED', 'none', 'bret', 'bret', 'gerry', '2022-11-22 06:16:05', '2022-11-23 06:46:00', 'Student', 'TLTD_MAIN'),
(10000097, 'Academic,', 'Presentation/Lecture,', '11023401 11023397', '2022-11-24', '14:26', '15:26', 'MVH 501', 'Bret Simoun Fabian', '2022-1103724', 'MEDICINE', 'blfabian@ceu.edu.ph', 'COMPLETED', 'none', 'bret', 'lando', 'jillian', '2022-11-23 06:26:50', '2022-11-23 06:46:36', 'Student', 'TLTD_MAIN'),
(10000098, 'Academic,', 'Presentation/Lecture,', '11023401 11023397', '2022-11-17', '13:53', '15:53', 'DCT 501', 'Bret Simoun Fabian', '2022-1103724', 'PHARMACY', 'blfabian@ceu.edu.ph', 'COMPLETED', 'late 200', 'bret', 'lando', 'gerry', '2022-11-25 08:53:58', '2022-11-25 08:56:49', 'Student', 'TLTD_MAIN'),
(10000099, 'Academic,', 'Presentation/Lecture,', '11023352 11023397', '2022-11-29', '15:16', '16:16', 'GDLSC 501', 'Bret Simoun Fabian', '2022-1103724', 'NURSING', 'blfabian@ceu.edu.ph', 'RESERVED', 'None', 'bret', NULL, NULL, '2022-11-28 06:16:19', '2022-11-28 06:46:30', 'Student', 'TLTD_MAIN'),
(10000100, 'Academic,', 'Presentation/Lecture,', '11023401 11023397 11023364', '2022-11-29', '14:16', '17:16', 'DCT 201', 'Bret Simoun Fabian', '2022-1103724', 'GRADSCHOOL', 'blfabian@ceu.edu.ph', 'PENDING', 'None', 'None', NULL, NULL, '2022-11-28 06:16:56', NULL, 'Student', 'TLTD_MAIN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_equipment`
--

CREATE TABLE `tbl_equipment` (
  `Equip_ID` int(8) NOT NULL,
  `Tag` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `MODel` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL,
  `Stats` varchar(255) NOT NULL DEFAULT 'Available',
  `Office` varchar(255) DEFAULT NULL,
  `Site` varchar(255) NOT NULL DEFAULT 'MANILA',
  `Purchase Date` date DEFAULT NULL,
  `Condemn Date` date DEFAULT NULL,
  `Checked_By` varchar(255) DEFAULT NULL,
  `Last_Update` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_equipment`
--

INSERT INTO `tbl_equipment` (`Equip_ID`, `Tag`, `type`, `name`, `MODel`, `information`, `Stats`, `Office`, `Site`, `Purchase Date`, `Condemn Date`, `Checked_By`, `Last_Update`) VALUES
(11023401, 'Laptop 1', 'Laptop', 'Samsung', '', 'Laptop with Charger', 'Available', 'TLTD_MAIN', 'MANILA', '2022-06-23', NULL, 'Admin', '2022-06-23 08:00:46'),
(11023352, 'Laptop 2', 'Laptop', 'Samsung Ativ', '', 'Laptop with charger', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023353, 'Overhead Projector 1', 'Overhead Projector', 'HP', '', 'Projector with power cord', 'Available', 'DENT_SCI', 'MANILA', NULL, NULL, NULL, NULL),
(11023354, 'Microphone 1', 'Microphone', 'Magicsing', '', 'Microphone with audio jack', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023355, 'Laptop 3', 'Laptop', 'Toshiba', '', 'Laptop with Chargers', 'Condemned', 'TLTD_MAIN', 'MANILA', NULL, '2022-06-04', 'Admin', '2022-06-09 06:41:20'),
(11023356, 'Overhead Projector 2', 'Overhead Projector', 'HP', '', 'Projector with power cord', 'Available', 'DENT_SCI', 'MANILA', NULL, NULL, NULL, NULL),
(11023357, 'DLP/LCDProjector 1', 'DLP/LCDProjector', 'Cherry mobile', '', 'Projector with power cord', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023358, 'DLP/LCDProjector 2', 'DLP/LCDProjector', 'Toshiba', '', 'projector with power cord', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023359, 'VHSplayer 1', 'VHSplayer', 'Panasonic', '', 'Player with stand', 'Available', 'DENT_SCI', 'MANILA', NULL, NULL, NULL, NULL),
(11023360, 'VHSplayer 2', 'VHSplayer', 'hanabishi', '', 'player with stand', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023361, 'SoundSystem 1', 'SoundSystem', 'Dolby atmos', '', 'sound system with audio jacks', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023362, 'SoundSystem 2', 'SoundSystem', 'kondura', '', 'sound system with love', 'Available', 'DENT_SCI', 'MANILA', NULL, NULL, NULL, NULL),
(11023363, 'DVDplayer 1', 'DVDplayer', 'video city', '', 'DVD with pirated cd', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023364, 'DVDplayer 2', 'DVDplayer', 'Blockbuster', '', 'DVD player with washing machine', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023365, 'VCDplayer 1', 'VCDplayer', 'TGP', '', 'Player with electric fan', 'Available', 'DENT_SCI', 'MANILA', NULL, NULL, NULL, NULL),
(11023366, 'VCDplayer 2', 'VCDplayer', 'tsoshinitsu', '', 'vcd with backup dancers', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023367, 'CDcassettePlayer 1', 'CDcassettePlayer', 'sony', '', 'cassette with health insurance', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023368, 'CDcassettePlayer 2', 'CDcassettePlayer', 'channel', 'hakdog', 'cassette with 50inch tablet', 'Available', 'DENT_SCI', 'MANILA', NULL, NULL, 'Admin', '2022-06-16 15:11:20'),
(11023369, 'Karaoke 1', 'Karaoke', 'sing magic', '', 'karaoke with wonderful tonight singer', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023370, 'Karaoke 2', 'Karaoke', 'geely', '', 'karaoke with scoring', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023371, 'Microphone 2', 'Microphone', 'mike', '', 'microphone with with wifi', 'Available', 'DENT_SCI', 'MANILA', NULL, NULL, NULL, NULL),
(11023372, 'Microphone 3', 'Microphone', 'yulong', '', 'microphone with adjustable seatbelt', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023373, 'DocumentCamera 1', 'DocumentCamera', 'kodak', '', 'camera with birth certificate', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023374, 'DocumentCamera 2', 'DocumentCamera', 'panasonic', '', 'camera with ghost footage', 'Available', 'DENT_SCI', 'MANILA', NULL, NULL, NULL, NULL),
(11023375, 'DigitalvideoCamera 1', 'DigitalvideoCamera', 'samsung', '', 'video camera with water dispenser', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023376, 'DigitalvideoCamera 2', 'DigitalvideoCamera', 'octagon', '', 'video camera with 5 year relationship', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023377, 'DigitalCamera(still) 1', 'DigitalCamera(still)', 'Sony', '', 'camera with removable braces', 'Available', 'DENT_SCI', 'MANILA', NULL, NULL, NULL, NULL),
(11023378, 'DigitalCamera(still) 2', 'DigitalCamera(still)', 'Samsung', '', 'camera with backup plan', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023379, 'DocumentationVideos 1', 'DocumentationVideos', 'n/a', '', 'pirated cinema copy videos', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023380, 'DocumentationVideos 2', 'DocumentationVideos', 'n/a', '', 'cd burned torrent videos', 'Available', 'DENT_SCI', 'MANILA', NULL, NULL, NULL, NULL),
(11023381, 'EducationalVideos 1', 'EducationalVideos', 'n/a', '', 'videos with college diploma', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023382, 'EducationalVideos 2', 'EducationalVideos', 'n/a', '', 'videos with educational masters degree', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023383, 'Music 1', 'Music', 'n/a', '', 'music ft. bugoynakolokoy', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023384, 'Music 2', 'Music', 'n/a', '', 'music with sing along come with me barney', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023385, 'HDMIconnector 1', 'HDMIconnector', 'CDR king', '', 'HDMI with 1km length', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023386, 'HDMIconnector 2', 'HDMIconnector', 'abenson', '', 'HDMI with 5G signal', 'Available', 'DENT_SCI', 'MANILA', NULL, NULL, NULL, NULL),
(11023387, 'VGAconnector 1', 'VGAconnector', 'n/a', '', 'n/a', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023388, 'VGAconnector 2', 'VGAconnector', 'n/a', '', 'n/a', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023389, 'LightningDigitalAVadapter 1', 'LightningDigitalAVadapter', 'n/a', '', 'n/a', 'Available', 'DENT_SCI', 'MANILA', NULL, NULL, NULL, NULL),
(11023390, 'LightningDigitalAVadapter 2', 'LightningDigitalAVadapter', 'n/a', '', 'n/a', 'Available', 'TLTD_MAIN', 'MANILA', NULL, NULL, NULL, NULL),
(11023392, 'Laptop 4', 'Laptop', 'HP', '', 'Laptop with charger', 'Available', 'DENT_SCI', 'MANILA', '2022-06-03', NULL, NULL, NULL),
(11023393, 'Laptop 5', 'Laptop', 'Lenovos', '', 'Laptop with charger', 'Condemned', 'LAH_SUB_CENTER', 'MANILA', '2022-06-10', '2022-06-13', 'Admin', '2022-06-13 10:47:09'),
(11023394, 'ViewingRoom 1', 'ViewingRoom', 'theater room', '', 'film viewing room', 'Available', 'TLTD_MAIN', 'MANILA', '2022-06-14', NULL, NULL, NULL),
(11023395, 'ViewingRoom 2', 'ViewingRoom', 'theater room', '', 'film viewing room', 'Available', 'Dent_Sci', 'MANILA', '2022-06-12', NULL, NULL, NULL),
(11023396, 'ViewingRoom 3', 'ViewingRoom', 'theater room', '', 'film viewing room', 'Available', 'LAH_sub_center', 'MANILA', '2022-05-29', NULL, NULL, NULL),
(11023397, 'Overhead Projector 1', 'Overhead Projector', 'Toshiba', '', 'projector with power cord', 'Available', 'TLTD_MAIN', 'MANILA', '2012-10-09', NULL, 'Admin', '2022-06-09 06:29:39'),
(11023398, 'Laptop 6', 'Laptop', 'HP', '', 'Laptop with charger', 'Available', 'LAH_sub_center', 'MANILA', '2022-06-16', NULL, 'Admin', '2022-06-16 06:44:14'),
(11023399, 'CDcassettePlayer 3', 'CDcassettePlayer ', 'Toshiba', 'tr22320', 'with cd', 'Available', 'LAH_sub_center', 'MANILA', '2022-06-02', NULL, 'Admin', '2022-06-22 16:55:41'),
(11023400, 'DigitalCamera(still) 3', 'DigitalCamera(still) ', 'Kodak', 'wh3455', 'with cd', 'Available', 'LAH_sub_center', 'MANILA', '2022-06-01', NULL, 'Admin', '2022-06-22 17:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `tltd_pass`
--

CREATE TABLE `tltd_pass` (
  `track_id` int(8) NOT NULL,
  `Pass_ID` int(8) NOT NULL,
  `Resrv_ID` int(8) NOT NULL,
  `Eqi_tags` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tltd_pass`
--

INSERT INTO `tltd_pass` (`track_id`, `Pass_ID`, `Resrv_ID`, `Eqi_tags`, `State`, `Location`) VALUES
(1, 1, 0, ' ', 'AVAILABLE', 'TLTD_MAIN'),
(2, 2, 0, ' ', 'AVAILABLE', 'TLTD_MAIN'),
(3, 3, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(4, 4, 0, ' ', 'AVAILABLE', 'TLTD_MAIN'),
(5, 5, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(6, 6, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(7, 7, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(8, 8, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(9, 9, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(10, 10, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(11, 11, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(12, 12, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(13, 13, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(14, 14, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(15, 15, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(16, 16, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(17, 17, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(18, 18, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(19, 19, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(20, 20, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(21, 21, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(22, 22, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(23, 23, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(24, 24, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(25, 25, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(26, 26, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(27, 27, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(28, 28, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(29, 29, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(30, 30, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(31, 31, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(32, 32, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(33, 33, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(34, 34, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(35, 35, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(36, 36, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(37, 37, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(38, 38, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(39, 39, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(40, 40, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(41, 41, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(42, 42, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(43, 43, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(44, 44, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(45, 45, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(46, 46, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(47, 47, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(48, 48, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(49, 49, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(50, 50, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(51, 51, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(52, 52, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(53, 53, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(54, 54, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(55, 55, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(56, 56, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(57, 57, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(58, 58, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(59, 59, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(60, 60, 0, '', 'AVAILABLE', 'TLTD_MAIN'),
(61, 1, 0, ' ', 'AVAILABLE', 'DENT_SCI'),
(62, 2, 0, '', 'AVAILABLE', 'DENT_SCI'),
(63, 3, 0, '', 'AVAILABLE', 'DENT_SCI'),
(64, 4, 0, '', 'AVAILABLE', 'DENT_SCI'),
(65, 5, 0, '', 'AVAILABLE', 'DENT_SCI'),
(66, 6, 0, '', 'AVAILABLE', 'DENT_SCI'),
(67, 7, 0, '', 'AVAILABLE', 'DENT_SCI'),
(68, 8, 0, '', 'AVAILABLE', 'DENT_SCI'),
(69, 9, 0, '', 'AVAILABLE', 'DENT_SCI'),
(70, 10, 0, '', 'AVAILABLE', 'DENT_SCI'),
(71, 11, 0, '', 'AVAILABLE', 'DENT_SCI'),
(72, 12, 0, '', 'AVAILABLE', 'DENT_SCI'),
(73, 13, 0, '', 'AVAILABLE', 'DENT_SCI'),
(74, 14, 0, '', 'AVAILABLE', 'DENT_SCI'),
(75, 15, 0, '', 'AVAILABLE', 'DENT_SCI'),
(76, 16, 0, '', 'AVAILABLE', 'DENT_SCI'),
(77, 17, 0, '', 'AVAILABLE', 'DENT_SCI'),
(78, 18, 0, '', 'AVAILABLE', 'DENT_SCI'),
(79, 19, 0, '', 'AVAILABLE', 'DENT_SCI'),
(80, 20, 0, '', 'AVAILABLE', 'DENT_SCI'),
(81, 21, 0, '', 'AVAILABLE', 'DENT_SCI'),
(82, 22, 0, '', 'AVAILABLE', 'DENT_SCI'),
(83, 23, 0, '', 'AVAILABLE', 'DENT_SCI'),
(84, 24, 0, '', 'AVAILABLE', 'DENT_SCI'),
(85, 25, 0, '', 'AVAILABLE', 'DENT_SCI'),
(86, 26, 0, '', 'AVAILABLE', 'DENT_SCI'),
(87, 27, 0, '', 'AVAILABLE', 'DENT_SCI'),
(88, 28, 0, '', 'AVAILABLE', 'DENT_SCI'),
(89, 29, 0, '', 'AVAILABLE', 'DENT_SCI'),
(90, 30, 0, '', 'AVAILABLE', 'DENT_SCI'),
(91, 31, 0, '', 'AVAILABLE', 'DENT_SCI'),
(92, 32, 0, '', 'AVAILABLE', 'DENT_SCI'),
(93, 33, 0, '', 'AVAILABLE', 'DENT_SCI'),
(94, 34, 0, '', 'AVAILABLE', 'DENT_SCI'),
(95, 35, 0, '', 'AVAILABLE', 'DENT_SCI'),
(96, 36, 0, '', 'AVAILABLE', 'DENT_SCI'),
(97, 37, 0, '', 'AVAILABLE', 'DENT_SCI'),
(98, 38, 0, '', 'AVAILABLE', 'DENT_SCI'),
(99, 39, 0, '', 'AVAILABLE', 'DENT_SCI'),
(100, 40, 0, '', 'AVAILABLE', 'DENT_SCI'),
(101, 41, 0, '', 'AVAILABLE', 'DENT_SCI'),
(102, 42, 0, '', 'AVAILABLE', 'DENT_SCI'),
(103, 43, 0, '', 'AVAILABLE', 'DENT_SCI'),
(104, 44, 0, '', 'AVAILABLE', 'DENT_SCI'),
(105, 45, 0, '', 'AVAILABLE', 'DENT_SCI'),
(106, 46, 0, '', 'AVAILABLE', 'DENT_SCI'),
(107, 47, 0, '', 'AVAILABLE', 'DENT_SCI'),
(108, 48, 0, '', 'AVAILABLE', 'DENT_SCI'),
(109, 49, 0, '', 'AVAILABLE', 'DENT_SCI'),
(110, 50, 0, '', 'AVAILABLE', 'DENT_SCI'),
(111, 51, 0, '', 'AVAILABLE', 'DENT_SCI'),
(112, 52, 0, '', 'AVAILABLE', 'DENT_SCI'),
(113, 53, 0, '', 'AVAILABLE', 'DENT_SCI'),
(114, 54, 0, '', 'AVAILABLE', 'DENT_SCI'),
(115, 55, 0, '', 'AVAILABLE', 'DENT_SCI'),
(116, 56, 0, '', 'AVAILABLE', 'DENT_SCI'),
(117, 57, 0, '', 'AVAILABLE', 'DENT_SCI'),
(118, 58, 0, '', 'AVAILABLE', 'DENT_SCI'),
(119, 59, 0, '', 'AVAILABLE', 'DENT_SCI'),
(120, 60, 0, '', 'AVAILABLE', 'DENT_SCI'),
(121, 1, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(122, 2, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(123, 3, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(124, 4, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(125, 5, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(126, 6, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(127, 7, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(128, 8, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(129, 9, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(130, 10, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(131, 11, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(132, 12, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(133, 13, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(134, 14, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(135, 15, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(136, 16, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(137, 17, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(138, 18, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(139, 19, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(140, 20, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(141, 21, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(142, 22, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(143, 23, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(144, 24, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(145, 25, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(146, 26, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(147, 27, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(148, 28, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(149, 29, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(150, 30, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(151, 31, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(152, 32, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(153, 33, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(154, 34, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(155, 35, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(156, 36, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(157, 37, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(158, 38, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(159, 39, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(160, 40, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(161, 41, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(162, 42, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(163, 43, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(164, 44, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(165, 45, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(166, 46, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(167, 47, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(168, 48, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(169, 49, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(170, 50, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(171, 51, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(172, 52, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(173, 53, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(174, 54, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(175, 55, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(176, 56, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(177, 57, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(178, 58, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(179, 59, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER'),
(180, 60, 0, '', 'AVAILABLE', 'LAH_SUB_CENTER');

-- --------------------------------------------------------

--
-- Table structure for table `utilization`
--

CREATE TABLE `utilization` (
  `U_ID` int(10) NOT NULL,
  `r_day` varchar(255) NOT NULL,
  `Officearea` varchar(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `Laptop` varchar(255) DEFAULT NULL,
  `Overhead Projector` varchar(255) DEFAULT NULL,
  `Microphone` varchar(255) DEFAULT NULL,
  `DLP/LCDProjector` varchar(255) DEFAULT NULL,
  `VHSplayer` varchar(255) DEFAULT NULL,
  `SoundSystem` varchar(255) DEFAULT NULL,
  `DVDplayer` varchar(255) DEFAULT NULL,
  `VCDplayer` varchar(255) DEFAULT NULL,
  `CDcassettePlayer` varchar(255) DEFAULT NULL,
  `Karaoke` varchar(255) DEFAULT NULL,
  `DocumentCamera` varchar(255) DEFAULT NULL,
  `DigitalvideoCamera` varchar(255) DEFAULT NULL,
  `DigitalCamera(still)` varchar(255) DEFAULT NULL,
  `DocumentationVideos` varchar(255) DEFAULT NULL,
  `EducationalVideos` varchar(255) DEFAULT NULL,
  `Music` varchar(255) DEFAULT NULL,
  `HDMIconnector` varchar(255) DEFAULT NULL,
  `VGAconnector` varchar(255) DEFAULT NULL,
  `LightningDigitalAVadapter` varchar(255) DEFAULT NULL,
  `ViewingRoom` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilization`
--

INSERT INTO `utilization` (`U_ID`, `r_day`, `Officearea`, `Name`, `Department`, `Laptop`, `Overhead Projector`, `Microphone`, `DLP/LCDProjector`, `VHSplayer`, `SoundSystem`, `DVDplayer`, `VCDplayer`, `CDcassettePlayer`, `Karaoke`, `DocumentCamera`, `DigitalvideoCamera`, `DigitalCamera(still)`, `DocumentationVideos`, `EducationalVideos`, `Music`, `HDMIconnector`, `VGAconnector`, `LightningDigitalAVadapter`, `ViewingRoom`) VALUES
(128, '2022-06-30', 'TLTD_MAIN', 'BRET SIMOUN FABIAN', 'GRADSCHOOL', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', ''),
(129, '2022-06-23', 'TLTD_MAIN', 'BRET SIMOUN FABIAN', 'GRADSCHOOL', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', ''),
(130, '2022-06-23', 'DENT_SCI', 'BRET SIMOUN FABIAN', 'GRADSCHOOL', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', ''),
(131, '2022-06-25', 'TLTD_MAIN', 'BRET SIMOUN FABIAN', 'GRADSCHOOL', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', ''),
(132, '2022-06-24', 'TLTD_MAIN', 'BRET SIMOUN FABIAN', 'SCITECH', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', ''),
(133, '2022-11-24', 'TLTD_MAIN', 'Bret Simoun Fabian', 'MEDICINE', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', ''),
(134, '2022-11-23', 'TLTD_MAIN', 'BRET SIMOUN FABIAN', 'DENTISTRY', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', ''),
(135, '2022-11-17', 'TLTD_MAIN', 'Bret Simoun Fabian', 'PHARMACY', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`Admin_ID`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `equipmentrepairrequest`
--
ALTER TABLE `equipmentrepairrequest`
  ADD PRIMARY KEY (`Repair_ID`),
  ADD UNIQUE KEY `DescEquipNo` (`DescEquipNo`);

--
-- Indexes for table `instructionalvideoeval`
--
ALTER TABLE `instructionalvideoeval`
  ADD PRIMARY KEY (`Eval_ID`),
  ADD UNIQUE KEY `Evaluator Signature` (`Evaluator Signature`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Res_id`);

--
-- Indexes for table `tbl_equipment`
--
ALTER TABLE `tbl_equipment`
  ADD PRIMARY KEY (`Equip_ID`);

--
-- Indexes for table `tltd_pass`
--
ALTER TABLE `tltd_pass`
  ADD PRIMARY KEY (`track_id`);

--
-- Indexes for table `utilization`
--
ALTER TABLE `utilization`
  ADD PRIMARY KEY (`U_ID`),
  ADD UNIQUE KEY `r_day` (`r_day`,`Officearea`,`Name`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `Admin_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23341288;

--
-- AUTO_INCREMENT for table `equipmentrepairrequest`
--
ALTER TABLE `equipmentrepairrequest`
  MODIFY `Repair_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `instructionalvideoeval`
--
ALTER TABLE `instructionalvideoeval`
  MODIFY `Eval_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Res_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000101;

--
-- AUTO_INCREMENT for table `tbl_equipment`
--
ALTER TABLE `tbl_equipment`
  MODIFY `Equip_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11023402;

--
-- AUTO_INCREMENT for table `tltd_pass`
--
ALTER TABLE `tltd_pass`
  MODIFY `track_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `utilization`
--
ALTER TABLE `utilization`
  MODIFY `U_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
