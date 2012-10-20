-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2012 at 07:40 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `friendbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `gender` enum('f','m') NOT NULL DEFAULT 'm',
  `password` varchar(50) NOT NULL,
  `phone` bigint(255) NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `REG` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `type` enum('a','u') NOT NULL DEFAULT 'u',
  `isActive` enum('y','n') NOT NULL DEFAULT 'y',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `gender`, `password`, `phone`, `DOB`, `REG`, `address`, `email`, `pic`, `type`, `isActive`) VALUES
(1, 'piyush', 'mittal', 'm', '1a1dc91c907325c69271ddf0c944bc72', 1234567890, '1/Jan/1970', '2020-10-12', 'mahadev hostal / next to admim                 ', 'piyush@test.com', 'image001.jpg', 'u', 'y'),
(2, 'admin', 'user', 'm', '1a1dc91c907325c69271ddf0c944bc72', 1234567890, '2/Mar/1972', '2020-10-12', 'csdc\r\n                        ', 'admin@test.com', 'me.png', 'a', 'y'),
(3, 'devesh', 'singhal', 'm', '1a1dc91c907325c69271ddf0c944bc72', 1234567890, '2/Feb/1971', '2020-10-12', 'mahesh nagar                        ', 'devesh@test.com', 'IMG_6559.jpg', 'u', 'y');
