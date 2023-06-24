-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2019 at 10:17 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `saikat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`slno`, `username`, `password`) VALUES
(5, 'admin', '12345'),
(6, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `agencyt`
--

CREATE TABLE IF NOT EXISTS `agencyt` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `ownername` text NOT NULL,
  `agency` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `place` text NOT NULL,
  `owner` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`slno`),
  KEY `agency` (`agency`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `agencyt`
--

INSERT INTO `agencyt` (`slno`, `ownername`, `agency`, `email`, `place`, `owner`, `gender`, `mobile`, `image`) VALUES
(44, 'saikat mudi', 'noorie', 'saikatmudi76@gmail.com', 'asansol', '1234', 'male', 8765432198, 'upload/abc.jpg'),
(48, 'somnath dutta', 'parivahan', 'somnathdutta123@gmail.com', 'asansol', '87659', 'male', 9564046208, 'upload/abc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `agencyt1`
--

CREATE TABLE IF NOT EXISTS `agencyt1` (
  `ownername` text NOT NULL,
  `agency` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agencyt1`
--

INSERT INTO `agencyt1` (`ownername`, `agency`, `email`, `place`, `owner`, `mobile`) VALUES
('sk', 'noorie', 'saikatmudi76@GMAIL.COM', 'asansol', '1234', 2147483647),
('sudu', 'vehicles', 'somnathdutta@gmail.com', 'durgapur', '1234', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `email` varchar(50) NOT NULL,
  `wheretostart` text NOT NULL,
  `wheretostop` text NOT NULL,
  `vehicletype` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=150 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`slno`, `firstname`, `lastname`, `mobile`, `email`, `wheretostart`, `wheretostop`, `vehicletype`, `date`, `image`) VALUES
(139, 'sombnath', 'dutta', 7001946928, 'saikatmudi76@gmail.com', 'parbelia', 'asansol', 'bike', '2019-07-11', 'upload/abc.jpg'),
(142, 'saikat', 'mudi', 7001946928, 'saikatmudi76@gmail.com', 'parbelia', 'asansol', 'bike', '2019-07-12', 'upload/abc.jpg'),
(146, 'sudeshna', 'pal', 7001946928, 'sudeshna123@gmail.com', 'asansol', 'durgapur', 'tank', '2019-07-13', 'upload/pooja-bose-photos-in-salwar-kameez-9340.jpeg'),
(147, 'argha', 'banerjee', 9342786541, 'arghabanerjee@gmail.com', 'parbelia', 'asansol', 'truck', '2019-07-20', 'upload/abc.jpg'),
(148, 'manas', 'roy', 8765432198, 'saikatmudi76@gmail.com', 'parbelia', 'asansol', 'truck', '2019-07-13', 'upload/abc.jpg'),
(149, 'saikat', 'mudi', 8765432198, 'saikatmudi76@gmail.com', 'parbelia', 'asansol', 'truck', '2019-07-13', 'upload/abc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vehicleuser`
--

CREATE TABLE IF NOT EXISTS `vehicleuser` (
  `slno` bigint(255) NOT NULL AUTO_INCREMENT,
  `agency` varchar(20) COLLATE armscii8_bin NOT NULL,
  `owner` varchar(20) COLLATE armscii8_bin NOT NULL,
  `email` varchar(50) COLLATE armscii8_bin NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `license` varchar(50) COLLATE armscii8_bin NOT NULL,
  `place` varchar(20) COLLATE armscii8_bin NOT NULL,
  `vehicletype` varchar(20) COLLATE armscii8_bin NOT NULL,
  `drivername` varchar(20) COLLATE armscii8_bin NOT NULL,
  `vlicense` varchar(50) COLLATE armscii8_bin NOT NULL,
  `availablefrom` time NOT NULL,
  `availableupto` time NOT NULL,
  `asofnow` text COLLATE armscii8_bin NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin AUTO_INCREMENT=62 ;

--
-- Dumping data for table `vehicleuser`
--

INSERT INTO `vehicleuser` (`slno`, `agency`, `owner`, `email`, `mobile`, `license`, `place`, `vehicletype`, `drivername`, `vlicense`, `availablefrom`, `availableupto`, `asofnow`) VALUES
(47, 'noorie', 'somnath dutta', 'somnath76@gmail.com', 7001977667, 'West Bengal', 'asansol', 'bike', 'som', '', '08:59:00', '09:59:00', 0x616374697665),
(49, 'noorie', 'sudeshna gupta', 'sudeshna123@gmail.com', 9876543210, '7654321', 'durgapur', 'tank', 'sudu', '', '05:37:00', '03:59:00', 0x616374697665),
(51, 'noorie', 'sudeshna', 'sudeshna123@gmail.com', 9867542312, '1234', 'asansol', 'truck', 'sudu', '', '03:04:00', '05:06:00', 0x616374697665),
(52, 'noorie', 'somnath dutta', 'somnathpal@gmail.com', 7001946928, '1234', 'asansol', 'truck', 'som', '', '23:00:00', '03:04:00', 0x616374697665),
(54, 'noorie', 'sudeshna gupta', 'sudeshna123@gmail.com', 7001946928, '1234', 'asansol', 'bike', 'sk', '', '05:51:00', '23:59:00', 0x616374697665),
(55, 'noorie', 'somnath dutta', 'somnathpal@gmail.com', 9876543210, '1234', 'asansol', 'truck', 'sk', 'ghgf', '06:59:00', '08:48:00', 0x616374697665),
(56, 'noorie', 'sk', 'saikatmudi76@GMAIL.COM', 2147483647, '1234', '', 'bike', 'argha', '878787', '06:59:00', '06:06:00', 0x6e6f7420616374697665),
(57, 'noorie', 'sk', 'saikatmudi76@GMAIL.COM', 2147483647, '1234', '', 'marcedis', 'argha', '1234', '23:53:00', '07:37:00', 0x616374697665),
(58, 'vehicles', 'sudu', 'somnathdutta@gmail.com', 2147483647, '1234', 'durgapur', 'truck', 'sudeshna', '6543', '06:08:00', '07:59:00', 0x616374697665),
(59, 'noorie', 'sk', 'saikatmudi76@GMAIL.COM', 2147483647, '1234', 'asansol', 'truck', 'sk', '1234', '03:59:00', '08:39:00', 0x616374697665),
(60, 'noorie', 'sk', 'saikatmudi76@GMAIL.COM', 2147483647, '1234', 'asansol', 'truck', 'sk', '1234', '03:04:00', '04:05:00', 0x616374697665),
(61, 'vehicles', 'sudu', 'somnathdutta@gmail.com', 2147483647, '1234', 'durgapur', 'truck', 'sk', '1234', '03:04:00', '04:05:00', 0x616374697665);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
