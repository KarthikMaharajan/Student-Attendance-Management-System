-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 19, 2011 at 01:11 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attendance-it`
--

-- --------------------------------------------------------

--
-- Table structure for table `2008a`
--

CREATE TABLE IF NOT EXISTS `2008a` (
  `RollNo` int(6) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `2011-07-01` varchar(7) NOT NULL,
  `2011-07-02` varchar(7) NOT NULL,
  `2011-07-03` varchar(7) NOT NULL,
  `2011-07-11` varchar(7) NOT NULL,
  `2011-07-10` varchar(7) DEFAULT NULL,
  `2011-07-12` varchar(7) DEFAULT NULL,
  `2011-07-07` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`RollNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2008a`
--

INSERT INTO `2008a` (`RollNo`, `Name`, `2011-07-01`, `2011-07-02`, `2011-07-03`, `2011-07-11`, `2011-07-10`, `2011-07-12`, `2011-07-07`) VALUES
(85001, 'Rajalakshmi.A', 'ppppppp', 'ppppaaa', 'pppaapp', 'nnnnnnn', 'papapan', 'aaaaaaa', 'nnnnnnn');

-- --------------------------------------------------------

--
-- Table structure for table `20091`
--

CREATE TABLE IF NOT EXISTS `20091` (
  `rollno` int(6) NOT NULL,
  `name` varchar(40) NOT NULL,
  `section` varchar(1) NOT NULL,
  `2011-07-26` varchar(7) DEFAULT NULL,
  `2011-07-27` varchar(7) DEFAULT NULL,
  `2011-07-28` varchar(7) DEFAULT NULL,
  `2011-07-29` varchar(7) DEFAULT NULL,
  `2011-07-30` varchar(7) DEFAULT NULL,
  `2011-08-01` varchar(7) DEFAULT NULL,
  `2011-08-02` varchar(7) DEFAULT NULL,
  `2011-08-03` varchar(7) DEFAULT NULL,
  `2011-08-05` varchar(7) DEFAULT NULL,
  `2011-08-06` varchar(7) DEFAULT NULL,
  `2011-08-08` varchar(7) DEFAULT NULL,
  `2011-08-09` varchar(7) DEFAULT NULL,
  `2011-08-10` varchar(7) DEFAULT NULL,
  `2011-08-11` varchar(7) DEFAULT NULL,
  `2011-08-12` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20091`
--

INSERT INTO `20091` (`rollno`, `name`, `section`, `2011-07-26`, `2011-07-27`, `2011-07-28`, `2011-07-29`, `2011-07-30`, `2011-08-01`, `2011-08-02`, `2011-08-03`, `2011-08-05`, `2011-08-06`, `2011-08-08`, `2011-08-09`, `2011-08-10`, `2011-08-11`, `2011-08-12`) VALUES
(95001, 'R.S. Arun Kumar', 'a', 'pppnnpn', 'aappooo', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'pppaaon', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95002, 'K.K. Balaji', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'aaaaaa', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95005, 'G. Nivetha', 'a', 'pppnapn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95011, 'P. Balachandran', 'a', 'npnnnpn', 'lllllll', 'ppppppp', 'ppppppp', 'apppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95012, 'S. Balaji', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppa', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95013, 'S.H. Manjula', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'annnann', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95015, 'K. Jothilakshmi', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'aaaanaa', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnna'),
(95016, 'T. Ishwarya', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95018, 'K.M. Ilakkiya', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95019, 'S. Aparna', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'annnann', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95022, 'T.S. Abinaya', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95024, 'S. Abdul Kapoor', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95025, 'J. Manjula', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95026, 'M.K.B Kiruthiga', 'a', 'nannnan', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95027, 'S.G. Nivethitha', 'a', 'npnnnpn', 'lllllll', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95028, 'S.P. Manikanda Dhasarathi', 'a', 'npnnnpn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95029, 'K. Nivethika', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95030, 'D. Abhishek', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95038, 'B. Jennifer', 'a', 'nannnan', 'ooooooo', 'apppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95101, 'K.C. Archana', 'a', 'nannnan', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95102, 'V.S. Arvinth', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95104, 'K.J. Dhanarekha', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95105, 'K.R. Humsini', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95106, 'S.P. Ishita', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95107, 'S.S. Karthika', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95108, 'R.G. Kirthika', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95117, 'T.S. Balaji', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'aaaaaaa', 'nnnnnnp'),
(95301, 'S. Aswini', 'a', 'npnnnpn', 'lllllll', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95302, 'P. Bharathi', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95303, 'M. Janani', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'aaaaaaa', 'ppppppp', 'nnnnnnp'),
(95304, 'A. Karthikeyan', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95305, 'V. Lakshmi Abinaya', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95311, 'A. Md Sulthan Alaudeen', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(105908, 'S. Srikanth', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(105910, 'S. Deepak', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(105913, 'V.Shanmuga Sundaram', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(105914, 'K. Geethayazhini', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(105917, 'J. Abdhul Khadar', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(105919, 'S. Seetha Ramkumar', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(105921, 'M. Shobiya', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(105923, 'A.K. Anand Babu', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(105926, 'R. Joshwa', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(105928, 'S. Esanth Basha', 'a', 'npnnnpn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'ppppnpp', 'ppppppp', 'ppppppp', 'ppppppn', 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp'),
(95003, 'K.K. Vinothini', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95004, 'S. Viji', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95006, 'T.R. Prasanth', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95007, 'S. Yazhini', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95008, 'R. Rajeswari', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95010, 'M. Preethi', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95014, 'S.M. Priyanka', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95017, 'P. Pandimeena', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95020, 'C. Swedha', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95021, 'N. Subhasini', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95023, 'R. Thangam', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95031, 'S. Theiventhiran', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95032, 'A. Prabavathi', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95033, 'R. Suresh Babu', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95034, 'P. Rajesh Kannan', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95035, 'T.N. Swathi', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95036, 'G.S.D. Yazhini Devi', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95037, 'C. Snekha', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95110, 'M.J. Saranya', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95111, 'C.D. Shalini', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95112, 'P.R. Sailesh Kumar', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95114, 'J.J. Vishnu', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95306, 'R. Pavithra', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95307, 'G. Preethi', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95308, 'L. Siddharth Gupta', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95309, 'S. Sharmilee', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95310, 'A. Shwetha', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(105901, 'T.S.Vigneshwaran', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(105902, 'M.J.Prasanna Kumar', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(105903, 'K.Ayyankalai', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(105904, 'M.Syed Nizamdeen', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(105905, 'N.S. Rajkumar', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(105906, 'B. Ram Thivakar', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(105907, 'S. Hariprasath', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(105909, 'P. Nivedhitha', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(105911, 'R. Raghu', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(105912, 'A. Karthick Pandian', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(105916, 'R. Siva Kumar', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(105918, 'A.H. Sudharshanan', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(105920, 'T. Murugesan', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(105922, 'G. Saravana Murugan', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(105924, 'G. Veera Sakthi', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(105925, 'S.M. Qyastheen', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(105927, 'G. Vijaya Kumar', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(105929, 'P. Jeevarajakumari', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(105931, 'J. Pandi Durai', 'b', 'nnnnnnn', 'aaaaaaa', 'ppppppp', 'ppppppp', 'nnnnnnn', 'ppppppp', 'ppppppp', 'pnpnpnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn', 'nnnnnnn'),
(95040, 'P.Dolly', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pnnnpnn', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'ppppppp', 'nnnnnnp');

-- --------------------------------------------------------

--
-- Table structure for table `20121`
--

CREATE TABLE IF NOT EXISTS `20121` (
  `rollno` int(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `section` varchar(1) NOT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20121`
--


-- --------------------------------------------------------

--
-- Table structure for table `20122`
--

CREATE TABLE IF NOT EXISTS `20122` (
  `rollno` int(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `section` varchar(1) NOT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20122`
--


-- --------------------------------------------------------

--
-- Table structure for table `20123`
--

CREATE TABLE IF NOT EXISTS `20123` (
  `rollno` int(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `section` varchar(1) NOT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20123`
--


-- --------------------------------------------------------

--
-- Table structure for table `20124`
--

CREATE TABLE IF NOT EXISTS `20124` (
  `rollno` int(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `section` varchar(1) NOT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20124`
--


-- --------------------------------------------------------

--
-- Table structure for table `20125`
--

CREATE TABLE IF NOT EXISTS `20125` (
  `rollno` int(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `section` varchar(1) NOT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20125`
--


-- --------------------------------------------------------

--
-- Table structure for table `20126`
--

CREATE TABLE IF NOT EXISTS `20126` (
  `rollno` int(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `section` varchar(1) NOT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20126`
--


-- --------------------------------------------------------

--
-- Table structure for table `20127`
--

CREATE TABLE IF NOT EXISTS `20127` (
  `rollno` int(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `section` varchar(1) NOT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `20127`
--

