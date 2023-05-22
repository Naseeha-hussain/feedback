-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 06, 2020 at 02:54 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noidatut_feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
   `fcid` bigint(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `fmail` varchar(255) DEFAULT NULL,
  `fmob` varchar(255) DEFAULT NULL,
  `fqual` varchar(255) DEFAULT NULL,
  `fexp` varchar(255) DEFAULT NULL,
  `frating` varchar(255) DEFAULT NULL,
  `sub1` varchar(255) DEFAULT NULL,
  `sub2` varchar(255) DEFAULT NULL,
  `sub3` varchar(255) DEFAULT NULL,
  `sub4` varchar(255) DEFAULT NULL,
  `sub5` varchar(255) DEFAULT NULL,
  `sub6` varchar(255) DEFAULT NULL,
  `sub7` varchar(255) DEFAULT NULL,
  `sub8` varchar(255) DEFAULT NULL,
  `sub9` varchar(255) DEFAULT NULL,
  `sub10` varchar(255) DEFAULT NULL,
  `specialization` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `fcid`,`fname`, `fmail`, `fmob`, `fqual`, `fexp`, `frating`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `sub8`, `sub9`, `sub10`, `specialization`, `pic`, `designation`, `status`, `date`) VALUES
(17, '0001','Shreya Malviya', 's.malviya@noidatut.com', '8767', 'Ph.D', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Computer Science ', '', 'Head of the Department CSE', 'Active', '2020-04-06 20:18:57'),
(15, '0002','Sweta Rai', 'swetarai@test.com', '76567654567', 'M.Tech', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cse', '', 'Assistant Professor', 'Active', '2020-04-06 19:59:21'),
(16,'0003', 'Shrinav Malviya', 's@malviya.com', '8767876788', 'Pursuing Ph. D', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Computer Science ', '', 'Assistant Professor', 'Active', '2020-04-06 20:00:03'),
(12, '0004','Mrs P. Sharma', 'psharma@gmail.com', '+987*****87', 'Masters of Technology', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Computer Science ', '', 'Assistant Professor', 'Active', '2020-03-24 16:46:09'),
(9,'0005', 'Dr. Aadarsh Malviya ', 'aadarsh.malviya@niu.edu.in', '+917042055476', 'Doctor of Philosophy', '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Computer Science ', 'aadarsh.jpg', 'Assistant Professor', 'Active', '2020-03-24 16:38:31'),
(14, '0006','Mr. S. Tiwari', 'st@gmail.com', '085****1788', 'Master of Computer Application', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Computer Science ', '', 'Assistant Professor', 'Active', '2020-03-24 16:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `fbid` int(11) NOT NULL AUTO_INCREMENT,
  `batch` varchar(25) NOT NULL,
   `sem` int(11) NOT NULL,
   `sec` varchar(5) NOT NULL,
  `stnm` varchar(255) DEFAULT NULL,
  `stem` varchar(255) DEFAULT NULL,
  `fnm` varchar(255) DEFAULT NULL,
  `sub` varchar(255) DEFAULT NULL,
  `pun` int(11) DEFAULT NULL,
  `con` int(11) DEFAULT NULL,
  `eleq` int(11) DEFAULT NULL,
  `syll` int(11) DEFAULT NULL,
  `approach` int(11) DEFAULT NULL,
  `grading` int(11) DEFAULT NULL,
  `clk` int(11) NOT NULL,
  `fbf` int(11) NOT NULL,
  `adv` int(11) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`fbid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fbid`,`batch`,`sem`,`sec`, `stnm`, `stem`, `fnm`, `sub`, `pun`, `con`, `eleq`, `syll`, `approach`, `grading`, `clk`,`fbf`,`adv`, `date`) VALUES
(8, '2020-2024',6, 'Mathumithra M',810020104053, 'Aadarsh Malviya', 'Operating system', 1, 1, 4, 3, 2, 2,5,5,5, , '2023-04-25 19:47:42'),
(8, '2020-2024',6, 'Mathumithra M',810020104053,  'Mukhtar Yusuf', 'Java Programming Lab', 1, 1, 4, 3, 2, 2,5,5,5, , '2023-04-25 19:47:42'),

(8, '2020-2024',6, 'Mathumithra M',810020104053, 'Aadarsh Malviya', 'Operating system', 1, 1, 4, 3, 2, 2,5,5,5, , '2023-04-25 19:47:42'),
-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(255) NOT NULL,
  `scode` varchar(255) DEFAULT NULL,
  `sfaculty` varchar(255) DEFAULT NULL,
  `ssem` varchar(255) DEFAULT NULL,
   `dept`  varchar(255) NOT NULL,
  `sy` varchar(255) DEFAULT NULL,
 `sec`  varchar(255) NOT NULL,
  `batch` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sid`, `sname`, `scode`, `sfaculty`, `ssem`, `dept`,`sy`, `sec`,`sr`, `batch`, `duration`) VALUES
(12, 'Environmental Studies  Humanities', 'BCA-205', 'Shreya Malviya', '2', 'CSE','1','B','2020-2024', '2020-03-24 16:56:31'),
(9, 'Discrete Mathematics    Core', 'BCA-202 ', 'Mrs P. Sharma, '2', 'CSE','1','B','2020-2024', '2020-03-24 16:56:31'),
(10, 'Introduction to Operating System  ', 'BCA-203 ', 'Sweta Rai', '2', 'CSE','1','B','2020-2024', '2020-03-24 16:56:31'),
(11, 'Object Oriented Programming using Java', 'BCA-204 ', 'Shrinav Malviya'', '2', 'CSE','1','B','2020-2024', '2020-03-24 16:56:31'),
(8, 'Computer Organization and Architecture   Allied ', 'BCA-201 ', 'Shrinav Malviya', '2', 'CSE','1','B','2020-2024', '2020-03-24 16:56:31'),
(13, 'Java Programming Lab', 'BCA-251 ', 'Dr. Aadarsh Malviya', '2', 'CSE','1','B','2020-2024', '2020-03-24 16:56:31'),
(15, 'Financial Accounting ', 'BCA-401 ', 'Mr. S. Tiwari'', '2', 'CSE','1','B','2020-2024', '2020-03-24 16:56:31'),
(16, 'Business Statistics', 'BCA-402', 'Dr. Aadarsh Malviya', '2', 'CSE','1','B','2020-2024', '2020-03-24 16:56:31'),
(13, 'Java Programming Lab', 'BCA-251 ', 'Dr. Aadarsh Malviya', '2', 'CSE','1','B','2020-2024', '2020-03-24 16:56:31'),
(14, 'Operating System Lab', 'BCA-252 ', 'Mr. S. Tiwari', '2', 'CSE','1','B','2020-2024', '2020-03-24 16:56:31'),

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(255) NOT NULL,
  `sreg` bigint(25) NOT NULL,
  `sbatch` varchar(255) NOT NULL,
  `ssem` varchar(255) NOT NULL,
  `ssec` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `student` (`sid`, `sname`, `sreg`, `sbatch`, `ssem`, `ssec`) VALUES
(72, 'Mathumithra M', '810020104720', '2024', '6', 'B'),
(72, 'Swetha K', '810020104077', '2024', '6', 'B'),
(72, 'Naseeha  M', '810020104053', '2024', '6', 'B'),
(72, 'Shruthi  S', '810020104068', '2024', '6', 'B'),


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
//ADMIN LOGIN -USERNAME:admin  PASSWORD-password