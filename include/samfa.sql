/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : samfa

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2016-07-19 22:25:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for customers
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `Customer_ID` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `Customer_FirstName` varchar(30) NOT NULL,
  `Customer_LastName` varchar(30) NOT NULL,
  `Customer_Address` varchar(500) NOT NULL,
  `Customer_Phone` varchar(9) DEFAULT NULL,
  `Customer_Mobile` varchar(10) NOT NULL,
  `Customer_Email` varchar(30) NOT NULL,
  `Customer_LineID` varchar(20) DEFAULT NULL,
  `Customer_FBName` varchar(20) DEFAULT NULL,
  `Customer_Status` varchar(10) NOT NULL,
  PRIMARY KEY (`Customer_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customers
-- ----------------------------

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `Order_ID` int(6) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `Date_for_Orders` date NOT NULL,
  `Date_for_Reserve` datetime NOT NULL,
  `Customer_ID` int(5) unsigned zerofill NOT NULL,
  PRIMARY KEY (`Order_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------

-- ----------------------------
-- Table structure for orders_details
-- ----------------------------
DROP TABLE IF EXISTS `orders_details`;
CREATE TABLE `orders_details` (
  `Orders_Details_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Order_ID` int(6) unsigned zerofill NOT NULL,
  `Picture_Door_ID` varchar(30) NOT NULL,
  `Orders_Details_Height` decimal(4,2) NOT NULL,
  `Orders_Details_Width` decimal(4,2) NOT NULL,
  `Orders_Details_Thickness` decimal(2,2) NOT NULL,
  `Orders_Details_Accessories_Framing` varchar(3) NOT NULL,
  `Orders_Details_Accessories_GlassWork` varchar(3) NOT NULL,
  `Orders_Details_Wood_for_Door` varchar(10) NOT NULL,
  `Orders_Details_Wood_for_Framing` varchar(10) NOT NULL,
  `Orders_Details_Remark` varchar(1000) DEFAULT NULL,
  `Orders_Details_Delivery_Date` date DEFAULT NULL,
  PRIMARY KEY (`Orders_Details_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders_details
-- ----------------------------

-- ----------------------------
-- Table structure for picture_door
-- ----------------------------
DROP TABLE IF EXISTS `picture_door`;
CREATE TABLE `picture_door` (
  `Picture_Door_ID` varchar(30) NOT NULL,
  `Picture_Door_Name` varchar(30) NOT NULL,
  `Picture_Door_Type` varchar(15) NOT NULL,
  `DateTime` datetime NOT NULL,
  PRIMARY KEY (`Picture_Door_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of picture_door
-- ----------------------------
INSERT INTO `picture_door` VALUES ('CSP002', 'CSP002', 'Classic', '2015-06-15 06:22:13');
INSERT INTO `picture_door` VALUES ('CSP003', 'CSP003', 'Classic', '2015-06-15 11:05:13');
INSERT INTO `picture_door` VALUES ('CSP004', 'CSP004', 'Classic', '2015-06-15 20:17:14');
INSERT INTO `picture_door` VALUES ('CSP005', 'CSP005', 'Classic', '2015-06-15 12:30:29');
INSERT INTO `picture_door` VALUES ('CSP006', 'CSP006', 'Classic', '2015-06-15 13:19:36');
INSERT INTO `picture_door` VALUES ('CSP007', 'CSP007', 'Classic', '2015-06-15 07:20:29');
INSERT INTO `picture_door` VALUES ('CSP008', 'CSP008', 'Classic', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('CSP009', 'CSP009', 'Classic', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('CSP010', 'CSP010', 'Classic', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('CSP011', 'CSP011', 'Classic', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('CSP012', 'CSP012', 'Classic', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('CSP013', 'CSP013', 'Classic', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('CSP014', 'CSP014', 'Classic', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('CTG001', 'CTG001', 'Contemporary', '2015-06-15 06:22:13');
INSERT INTO `picture_door` VALUES ('CTG002', 'CTG002', 'Contemporary', '2015-06-15 11:05:13');
INSERT INTO `picture_door` VALUES ('CTG003', 'CTG003', 'Contemporary', '2015-06-15 20:17:14');
INSERT INTO `picture_door` VALUES ('CTG004', 'CTG004', 'Contemporary', '2015-06-15 12:30:29');
INSERT INTO `picture_door` VALUES ('CTG006', 'CTG006', 'Contemporary', '2015-06-15 13:19:36');
INSERT INTO `picture_door` VALUES ('CTG007', 'CTG007', 'Contemporary', '2015-06-15 07:20:29');
INSERT INTO `picture_door` VALUES ('CTG008', 'CTG008', 'Contemporary', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('CTG009', 'CTG009', 'Contemporary', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('CTP001', 'CTP001', 'Contemporary', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('CTP002', 'CTP002', 'Contemporary', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('CTP003', 'CTP003', 'Contemporary', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('CTP004', 'CTP004', 'Contemporary', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('CTP005', 'CTP005', 'Contemporary', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('CTP006', 'CTP006', 'Contemporary', '2015-06-18 21:02:17');
INSERT INTO `picture_door` VALUES ('CTP007', 'CTP007', 'Contemporary', '2015-06-18 21:02:19');
INSERT INTO `picture_door` VALUES ('CTP008', 'CTP008', 'Contemporary', '2015-06-18 21:02:21');
INSERT INTO `picture_door` VALUES ('CTP009', 'CTP009', 'Contemporary', '2015-06-18 21:02:25');
INSERT INTO `picture_door` VALUES ('CTP010', 'CTP010', 'Contemporary', '2015-06-18 21:02:22');
INSERT INTO `picture_door` VALUES ('CTP011', 'CTP011', 'Contemporary', '2015-06-18 21:02:26');
INSERT INTO `picture_door` VALUES ('CTP012', 'CTP012', 'Contemporary', '2015-06-18 21:02:28');
INSERT INTO `picture_door` VALUES ('CTP013', 'CTP013', 'Contemporary', '2015-06-18 21:02:29');
INSERT INTO `picture_door` VALUES ('CTP014', 'CTP014', 'Contemporary', '2015-06-18 21:02:30');
INSERT INTO `picture_door` VALUES ('MDG001', 'MDG001', 'Modern', '2015-06-15 06:22:13');
INSERT INTO `picture_door` VALUES ('MDG004', 'MDG004', 'Modern', '2015-06-15 11:05:13');
INSERT INTO `picture_door` VALUES ('MDG005', 'MDG005', 'Modern', '2015-06-15 20:17:14');
INSERT INTO `picture_door` VALUES ('MDP001', 'MDP001', 'Modern', '2015-06-15 12:30:29');
INSERT INTO `picture_door` VALUES ('MDP002', 'MDP002', 'Modern', '2015-06-15 13:19:36');
INSERT INTO `picture_door` VALUES ('MDP003', 'MDP003', 'Modern', '2015-06-15 07:20:29');
INSERT INTO `picture_door` VALUES ('MDP004', 'MDP004', 'Modern', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('MDP005', 'MDP005', 'Modern', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('MDP006', 'MDP006', 'Modern', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('MDP007', 'MDP007', 'Modern', '2015-06-15 23:24:18');
