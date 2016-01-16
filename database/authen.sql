-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 19, 2011 at 01:13 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `authen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `User` varchar(20) NOT NULL,
  `Passwd` varchar(320) NOT NULL,
  PRIMARY KEY (`User`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`User`, `Passwd`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
  `joiningyear` int(11) NOT NULL,
  PRIMARY KEY (`joiningyear`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`joiningyear`) VALUES
(2008),
(2009);

-- --------------------------------------------------------

--
-- Table structure for table `depts`
--

CREATE TABLE IF NOT EXISTS `depts` (
  `depts` varchar(20) NOT NULL,
  PRIMARY KEY (`depts`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depts`
--

INSERT INTO `depts` (`depts`) VALUES
('AUTO'),
('CSE'),
('ECE'),
('EEE'),
('EIE'),
('IT'),
('Marine'),
('MECH');

-- --------------------------------------------------------

--
-- Table structure for table `semdates`
--

CREATE TABLE IF NOT EXISTS `semdates` (
  `sem` int(1) NOT NULL,
  `from` date DEFAULT NULL,
  `to` date DEFAULT NULL,
  PRIMARY KEY (`sem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semdates`
--

INSERT INTO `semdates` (`sem`, `from`, `to`) VALUES
(1, '2011-06-01', '2011-12-31'),
(2, '2011-06-01', '2012-05-01'),
(3, '2012-06-01', '2012-11-30'),
(4, '2011-01-01', '2011-05-01'),
(5, NULL, NULL),
(6, NULL, NULL),
(7, NULL, NULL),
(8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `User` varchar(20) NOT NULL,
  `Passwd` varchar(320) NOT NULL,
  PRIMARY KEY (`User`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`User`, `Passwd`) VALUES
('staff1', '81899735839627e263dc3c66dafb36a6');
