
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2016 at 05:25 AM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u982279518_samfa`
--

-- --------------------------------------------------------

--
-- Table structure for table `classic`
--

CREATE TABLE IF NOT EXISTS `classic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

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
-- Table structure for table `modern`
--

CREATE TABLE IF NOT EXISTS `modern` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

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

-- --------------------------------------------------------

--
-- Table structure for table `pic_order`
--

CREATE TABLE IF NOT EXISTS `pic_order` (
  `name_pic` varchar(50) NOT NULL,
  `type` varchar(5) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pic_order`
--

INSERT INTO `pic_order` (`name_pic`, `type`, `date`) VALUES
('Lighthouse', 'jpg', '2015-07-03 15:26:03'),
('Desert', 'jpg', '2015-07-05 12:39:25'),
('Jellyfish', 'jpg', '2015-07-05 12:42:58'),
('Chrysanthemum', 'jpg', '2015-07-05 12:46:13'),
('Hydrangeas', 'jpg', '2015-07-05 12:52:34'),
('Desert', 'jpg', '2015-07-05 12:53:38'),
('Penguins', 'jpg', '2015-07-05 13:16:53'),
('Desert', 'jpg', '2015-07-05 13:35:58'),
('Koala', 'jpg', '2015-07-13 13:36:28'),
('Lighthouse', 'jpg', '2015-07-13 13:37:56'),
('Tulips', 'jpg', '2015-07-13 14:15:39'),
('415622_point-blank_pb_oruzhie_1680x1050_(www_GdeFo', 'jpg', '2015-07-19 11:24:04'),
('IMG_5023', 'jpg', '2015-07-20 08:21:27'),
('IMG_5023', 'jpg', '2015-07-20 08:29:14'),
('IMG_5023', 'jpg', '2015-07-20 08:29:42'),
('IMG_5023', 'jpg', '2015-07-20 08:30:25'),
('IMG_5023', 'jpg', '2015-07-20 08:31:18'),
('Lighthouse', 'jpg', '2015-07-20 08:42:37'),
('Penguins', 'jpg', '2015-07-25 16:49:05'),
('Lighthouse', 'jpg', '2015-07-25 17:06:38'),
('11745522_10205721353410347_7031432255070890401_n20', 'jpg', '2015-08-02 05:19:44'),
('11745522_10205721353410347_7031432255070890401_n20', 'jpg', '2015-08-02 05:20:25'),
('Hydrangeas20150808-025746', 'jpg', '2015-08-08 02:57:46'),
('IMG_502320150809-045949', 'jpg', '2015-08-09 04:59:49'),
('IMG_502320150809-050902', 'jpg', '2015-08-09 05:09:02'),
('IMG_502320150809-052906', 'jpg', '2015-08-09 05:29:06'),
('Koala20151204-064547', 'jpg', '2015-12-04 06:45:47'),
('forever_alone20160706-042431', 'jpg', '2016-07-06 04:24:31');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `order_no` varchar(10) NOT NULL,
  `pic_name` varchar(20) NOT NULL COMMENT 'ชื่อลูกค้า',
  `height` varchar(10) NOT NULL,
  `width` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `accessories` varchar(50) NOT NULL,
  `wood_color` varchar(10) NOT NULL,
  `frame` varchar(10) NOT NULL,
  `remark` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(60) CHARACTER SET utf8 NOT NULL COMMENT 'รหัสสินค้า',
  `deliverd_address` varchar(500) CHARACTER SET utf8 NOT NULL COMMENT 'จำนวนที่สั่งจอง',
  `mobile` varchar(15) NOT NULL COMMENT 'ราคาทั้งหมด',
  `telephone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `line_id` varchar(20) DEFAULT NULL,
  `fbname` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `date_for_order` date NOT NULL COMMENT 'วันที่ทำการจอง',
  `date_for_reserve` datetime NOT NULL,
  `status` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'สถานะ order'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`order_no`, `pic_name`, `height`, `width`, `quantity`, `accessories`, `wood_color`, `frame`, `remark`, `name`, `deliverd_address`, `mobile`, `telephone`, `email`, `line_id`, `fbname`, `delivery_date`, `date_for_order`, `date_for_reserve`, `status`) VALUES
('00001', 'CSP010', '100', '50', '5', 'Door/Windows Frame Glass', 'teak', 'laored', '????????????????????????????????????????????????????????????', '????? ?????', '?????', '?????', '', '?????', '', '', '2015-08-29', '2015-08-09', '2015-08-09 05:59:03', 'Cancel'),
('00002', 'CTG006', '100', '50', '1', 'Door/Windows Frame Glass', 'teak', 'laored', 'ทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบ', 'ทดสอบ ทดสอบ', 'ทดสอบ', '?????', '', '?????', '', 'ทดสอบ', '2015-08-21', '2015-08-09', '2015-08-09 06:15:05', 'Process'),
('00003', 'CTG006', '100', '50', '1', 'Door/Windows Frame Glass', 'teak', 'laored', 'ทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบทดสอบ', 'ทดสอบ ทดสอบ', 'ทดสอบทดสอบ', '?????', '', '?????', '', 'ทดสอบ', '2015-08-27', '2015-08-09', '2015-08-09 06:15:59', 'Cancel'),
('00004', 'MDG005', '213', '21', '1', 'Door/Windows Frame ', 'teak', 'teak', '', 'dfgdfg dfgh', 'dfghdfgh', 'dfghdfgh', 'fghdfgh', 'dfghdfgh', 'akkara.te', 'dfghdfgh', '0000-00-00', '2015-10-08', '2015-10-08 09:24:12', 'Cancel'),
('00005', 'CSP004', '100', '10', '1', 'Door/Windows  ', 'laored', 'teak', '', 'sd asd', 'asd', 'dsa', 'asd', 'asd', 'asd', 'asd', '0000-00-00', '2015-10-30', '2015-10-30 02:38:04', 'Complete'),
('00006', 'MDG004', '200', '100', '1', 'Door/Windows Frame Glass', 'teak', 'laored', '', 'จั่จเจา ข้าขอลา', 'ศาลไทเฮา', '01456456', '012354654', 'qwer@qweqwe.com', '', '', '2015-11-20', '2015-11-02', '2015-11-02 14:25:26', 'Process'),
('00007', 'CSP002', '200', '100', '1', 'Door/Windows Frame Glass', 'teak', 'laored', 'ก็ไม่รู้จะเขียนว่าอะไรดีที่จะให้มันไม่ยาวสักเท่าไหร่อ่ะนะ', 'เปาบุ้นจิ้น ข้าขอม้า', 'ศาเตี้ยหน้าบ้าน', '01231065', '02132164', 'zxc@zxc.vom', 'sada', 'adas', '2015-11-11', '2015-11-02', '2015-11-02 14:35:48', 'Process'),
('00008', 'MDP001', '200', '100', '1', 'Door/Windows Frame ', 'teak', 'laored', 'เทสข้อความยาวๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆๆ', 'Akkara Terananont', '297/2 sailurd Road samutprakan bangkok sasd 11027 as5d4556asd asd5as4', '081-714-2992', '081-714-2992', 'disoder@windowslive.com', 'akkara.te', 'akkara terananont', '2015-11-20', '2015-11-10', '2015-11-10 13:00:57', 'Wait'),
('00009', 'MDG004', '200', '100', '1', 'Door/Windows Frame Glass', 'makalao', 'teak', NULL, 'โจโจ้ โจสตาร์', '1234 newiyrs ', '023154654', '32156464', 'sadad@asdasd', '', '', '2015-11-30', '2015-11-20', '2015-11-20 05:22:54', ''),
('00010', 'MDG004', '200', '100', '1', 'Door/Windows Frame Glass', 'makalao', 'teak', NULL, 'โจโจ้ โจสตาร์', '1234 newiyrs ', '023154654', '32156464', 'sadad@asdasd', '', '', '2015-11-30', '2015-11-20', '2015-11-20 05:23:57', ''),
('00011', 'MDG004', '200', '100', '1', 'Door/Windows Frame Glass', 'makalao', 'teak', NULL, 'โจโจ้ โจสตาร์', '1234 newiyrs ', '023154654', '32156464', 'sadad@asdasd', '', '', '2015-11-30', '2015-11-20', '2015-11-20 05:29:22', ''),
('00012', 'MDG004', '200', '100', '1', 'Door/Windows Frame Glass', 'makalao', 'teak', NULL, 'โจโจ้ โจสตาร์', '1234 newiyrs ', '023154654', '32156464', 'sadad@asdasd', '', '', '2015-11-30', '2015-11-20', '2015-11-20 05:29:59', ''),
('00013', 'MDG004', '200', '100', '1', 'Door/Windows Frame Glass', 'makalao', 'teak', NULL, 'โจโจ้ โจสตาร์', '1234 newiyrs ', '023154654', '32156464', 'sadad@asdasd', '', '', '2015-11-30', '2015-11-20', '2015-11-20 05:30:23', ''),
('00014', 'MDG004', '200', '100', '1', 'Door/Windows Frame Glass', 'makalao', 'teak', NULL, 'โจโจ้ โจสตาร์', '1234 newiyrs ', '023154654', '32156464', 'sadad@asdasd', '', '', '2015-11-30', '2015-11-20', '2015-11-20 05:33:02', ''),
('00015', 'MDG004', '200', '100', '1', 'Door/Windows Frame Glass', 'makalao', 'teak', NULL, 'โจโจ้ โจสตาร์', '1234 newiyrs ', '023154654', '32156464', 'sadad@asdasd', '', '', '2015-11-30', '2015-11-20', '2015-11-20 05:33:51', ''),
('00016', 'CSP005', '200', '100', '1', 'Door/Windows  ', 'teak', 'laored', NULL, 'ทดสอบ ทดสอบ', '123456456465465464654646546464654654654654654564', '121313131', '54654654654654', '1354654', '46546', '654654', '0000-00-00', '2015-11-20', '2015-11-20 05:36:14', ''),
('00017', 'CSP003', '121', '121', '21', 'Door/Windows Frame Glass', 'teak', 'laored', 'หก', 'ฟหก ฟหก', 'ฟหก', '???', '???', '???', '???', 'ฟหก', '2015-11-20', '2015-11-25', '2015-11-25 05:13:06', 'New Order'),
('00018', 'MDP010', '100', '121', '1', ' Frame Glass', 'makalao', 'teak', NULL, 'asd asd', 'asd', 'asd', 'sd', 'asd', 'asd', 'asd', '2015-11-21', '2015-11-25', '2015-11-25 05:14:45', 'Process'),
('00019', 'Koala20151204-064547', '200', '100', '1', 'Door/Windows Frame Glass', 'teak', 'laored', '121212', '1212 12', '121', '1212', '12', '121', '212', '12', '2015-12-12', '2015-12-04', '2015-12-04 06:46:25', 'New Order');

-- --------------------------------------------------------

--
-- Table structure for table `user_bo`
--

CREATE TABLE IF NOT EXISTS `user_bo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_bo`
--

INSERT INTO `user_bo` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
