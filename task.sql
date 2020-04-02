-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2020 at 02:40 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtask`
--

CREATE TABLE IF NOT EXISTS `addtask` (
  `title` text NOT NULL,
  `desc` text NOT NULL,
  `date` date NOT NULL,
  `prior` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addtask`
--

INSERT INTO `addtask` (`title`, `desc`, `date`, `prior`) VALUES
('dvffb', 'fgdfgdfgdfgdfgdfgdfgfdgfddfgdf', '2020-04-09', 'C');
