-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 19, 2019 at 12:16 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `loginproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `studdata`
--

CREATE TABLE IF NOT EXISTS `studdata` (
  `Studentid` int(10) NOT NULL AUTO_INCREMENT,
  `StudentName` varchar(255) NOT NULL,
  `MathsMarks` int(10) NOT NULL,
  `ScienceMarks` int(10) NOT NULL,
  `EnglishMarks` int(10) NOT NULL,
  PRIMARY KEY (`Studentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `studdata`
--

INSERT INTO `studdata` (`Studentid`, `StudentName`, `MathsMarks`, `ScienceMarks`, `EnglishMarks`) VALUES
(1, 'Amit', 85, 85, 75),
(2, 'jyoti', 75, 65, 89);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `createddate` date NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `password`, `gender`, `createddate`, `phone`) VALUES
(3, 'amar', 'amar@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '2019-08-15', '9656895689'),
(4, 'sita', 'sita@gmail.com', '22eb6d573a7bdfd019b97909cbe36141', 'Female', '2019-08-15', '9856895687'),
(5, 'ram', 'ram@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '2019-08-15', '8745874589'),
(6, 'seema', 'seema@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Female', '2019-08-19', '9874569874');
