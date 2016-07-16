-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2015 at 01:16 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sf`
--

-- --------------------------------------------------------

--
-- Table structure for table `classic`
--

CREATE TABLE IF NOT EXISTS `classic` (
`id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classic`
--

INSERT INTO `classic` (`id`, `name`, `type`, `date`) VALUES
(1, 'CSP002', 'Classic', '2015-06-15 06:22:13'),
(2, 'CSP003', 'Classic', '2015-06-15 11:05:13'),
(3, 'CSP004', 'Classic', '2015-06-15 20:17:14'),
(4, 'CSP005', 'Classic', '2015-06-15 12:30:29'),
(5, 'CSP006', 'Classic', '2015-06-15 13:19:36'),
(6, 'CSP007', 'Classic', '2015-06-15 07:20:29'),
(9, 'CSP008', 'Classic', '2015-06-15 23:24:18'),
(10, 'CSP009', 'Classic', '2015-06-15 23:24:18'),
(11, 'CSP010', 'Classic', '2015-06-15 23:24:18'),
(12, 'CSP011', 'Classic', '2015-06-15 23:24:18'),
(13, 'CSP012', 'Classic', '2015-06-15 23:24:18'),
(14, 'CSP013', 'Classic', '2015-06-15 23:24:18'),
(15, 'CSP014', 'Classic', '2015-06-15 23:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `contemporary`
--

CREATE TABLE IF NOT EXISTS `contemporary` (
`id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contemporary`
--

INSERT INTO `contemporary` (`id`, `name`, `type`, `date`) VALUES
(1, 'CTG001', 'Contemporary', '2015-06-15 06:22:13'),
(2, 'CTG002', 'Contemporary', '2015-06-15 11:05:13'),
(3, 'CTG003', 'Contemporary', '2015-06-15 20:17:14'),
(4, 'CTG004', 'Contemporary', '2015-06-15 12:30:29'),
(5, 'CTG006', 'Contemporary', '2015-06-15 13:19:36'),
(6, 'CTG007', 'Contemporary', '2015-06-15 07:20:29'),
(9, 'CTG008', 'Contemporary', '2015-06-15 23:24:18'),
(10, 'CTG009', 'Contemporary', '2015-06-15 23:24:18'),
(11, 'CTP001', 'Contemporary', '2015-06-15 23:24:18'),
(12, 'CTP002', 'Contemporary', '2015-06-15 23:24:18'),
(13, 'CTP003', 'Contemporary', '2015-06-15 23:24:18'),
(14, 'CTP004', 'Contemporary', '2015-06-15 23:24:18'),
(15, 'CTP005', 'Contemporary', '2015-06-15 23:24:18'),
(16, 'CTP006', 'Contemporary', '2015-06-18 21:02:17'),
(17, 'CTP007', 'Contemporary', '2015-06-18 21:02:19'),
(18, 'CTP008', 'Contemporary', '2015-06-18 21:02:21'),
(19, 'CTP009', 'Contemporary', '2015-06-18 21:02:25'),
(20, 'CTP010', 'Contemporary', '2015-06-18 21:02:22'),
(21, 'CTP011', 'Contemporary', '2015-06-18 21:02:26'),
(22, 'CTP012', 'Contemporary', '2015-06-18 21:02:28'),
(23, 'CTP013', 'Contemporary', '2015-06-18 21:02:29'),
(24, 'CTP014', 'Contemporary', '2015-06-18 21:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(5) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `type`, `date`) VALUES
(4, 'test', 'jpg', '2015-05-15 08:27:54'),
(7, '288', 'jpg', '2015-05-15 08:41:39'),
(8, '215', '0bc2a', '2015-05-15 08:41:49'),
(9, '977', 'jpg', '2015-05-15 08:49:39'),
(10, 'joe', 'jpg', '2015-05-19 14:27:31'),
(11, '977', 'jpg', '2015-05-19 14:42:27'),
(12, '154', 'jpg', '2015-06-16 17:11:22'),
(13, '151', 'jpg', '2015-06-16 17:36:53'),
(14, '159', 'jpg', '2015-06-16 17:37:36'),
(15, '168', 'jpg', '2015-06-16 17:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `modern`
--

CREATE TABLE IF NOT EXISTS `modern` (
`id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modern`
--

INSERT INTO `modern` (`id`, `name`, `type`, `date`) VALUES
(1, 'MDG001', 'Modern', '2015-06-15 06:22:13'),
(2, 'MDG004', 'Modern', '2015-06-15 11:05:13'),
(3, 'MDG005', 'Modern', '2015-06-15 20:17:14'),
(4, 'MDP001', 'Modern', '2015-06-15 12:30:29'),
(5, 'MDP002', 'Modern', '2015-06-15 13:19:36'),
(6, 'MDP003', 'Modern', '2015-06-15 07:20:29'),
(9, 'MDP004', 'Modern', '2015-06-15 23:24:18'),
(10, 'MDP005', 'Modern', '2015-06-15 23:24:18'),
(11, 'MDP006', 'Modern', '2015-06-15 23:24:18'),
(12, 'MDP007', 'Modern', '2015-06-15 23:24:18'),
(13, 'MDP008', 'Modern', '2015-06-15 23:24:18'),
(14, 'MDP009', 'Modern', '2015-06-15 23:24:18'),
(15, 'MDP010', 'Modern', '2015-06-15 23:24:18'),
(16, 'MDP011', 'Modern', '2015-06-18 20:56:51'),
(17, 'MDP012', 'Modern', '2015-06-18 20:56:55'),
(18, 'MDP013', 'Modern', '2015-06-18 20:56:59'),
(19, 'MDP014', 'Modern', '2015-06-18 20:57:00'),
(20, 'MDP015', 'Modern', '2015-06-18 20:57:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classic`
--
ALTER TABLE `classic`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contemporary`
--
ALTER TABLE `contemporary`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modern`
--
ALTER TABLE `modern`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classic`
--
ALTER TABLE `classic`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `contemporary`
--
ALTER TABLE `contemporary`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `modern`
--
ALTER TABLE `modern`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
