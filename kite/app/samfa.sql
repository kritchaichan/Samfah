/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : samfa

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-08-20 15:28:35
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
  `Picture_Door_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Picture_Door_Name` varchar(30) NOT NULL,
  `Picture_Door_Type` varchar(15) NOT NULL,
  `DateTime` datetime NOT NULL,
  PRIMARY KEY (`Picture_Door_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of picture_door
-- ----------------------------
INSERT INTO `picture_door` VALUES ('1', 'CSP002', 'Classic', '2015-06-15 06:22:13');
INSERT INTO `picture_door` VALUES ('2', 'CSP003', 'Classic', '2015-06-15 11:05:13');
INSERT INTO `picture_door` VALUES ('3', 'CSP004', 'Classic', '2015-06-15 20:17:14');
INSERT INTO `picture_door` VALUES ('4', 'CSP005', 'Classic', '2015-06-15 12:30:29');
INSERT INTO `picture_door` VALUES ('5', 'CSP006', 'Classic', '2015-06-15 13:19:36');
INSERT INTO `picture_door` VALUES ('6', 'CSP007', 'Classic', '2015-06-15 07:20:29');
INSERT INTO `picture_door` VALUES ('7', 'CSP008', 'Classic', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('8', 'CSP009', 'Classic', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('9', 'CSP010', 'Classic', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('10', 'CSP011', 'Classic', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('11', 'CSP012', 'Classic', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('12', 'CSP013', 'Classic', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('13', 'CSP014', 'Classic', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('14', 'CTG001', 'Contemporary', '2015-06-15 06:22:13');
INSERT INTO `picture_door` VALUES ('15', 'CTG002', 'Contemporary', '2015-06-15 11:05:13');
INSERT INTO `picture_door` VALUES ('16', 'CTG003', 'Contemporary', '2015-06-15 20:17:14');
INSERT INTO `picture_door` VALUES ('17', 'CTG004', 'Contemporary', '2015-06-15 12:30:29');
INSERT INTO `picture_door` VALUES ('18', 'CTG006', 'Contemporary', '2015-06-15 13:19:36');
INSERT INTO `picture_door` VALUES ('19', 'CTG007', 'Contemporary', '2015-06-15 07:20:29');
INSERT INTO `picture_door` VALUES ('20', 'CTG008', 'Contemporary', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('21', 'CTG009', 'Contemporary', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('22', 'CTP001', 'Contemporary', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('23', 'CTP002', 'Contemporary', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('24', 'CTP003', 'Contemporary', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('25', 'CTP004', 'Contemporary', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('26', 'CTP005', 'Contemporary', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('27', 'CTP006', 'Contemporary', '2015-06-18 21:02:17');
INSERT INTO `picture_door` VALUES ('28', 'CTP007', 'Contemporary', '2015-06-18 21:02:19');
INSERT INTO `picture_door` VALUES ('29', 'CTP008', 'Contemporary', '2015-06-18 21:02:21');
INSERT INTO `picture_door` VALUES ('30', 'CTP009', 'Contemporary', '2015-06-18 21:02:25');
INSERT INTO `picture_door` VALUES ('31', 'CTP010', 'Contemporary', '2015-06-18 21:02:22');
INSERT INTO `picture_door` VALUES ('32', 'CTP011', 'Contemporary', '2015-06-18 21:02:26');
INSERT INTO `picture_door` VALUES ('33', 'CTP012', 'Contemporary', '2015-06-18 21:02:28');
INSERT INTO `picture_door` VALUES ('34', 'CTP013', 'Contemporary', '2015-06-18 21:02:29');
INSERT INTO `picture_door` VALUES ('35', 'CTP014', 'Contemporary', '2015-06-18 21:02:30');
INSERT INTO `picture_door` VALUES ('36', 'MDG001', 'Modern', '2015-06-15 06:22:13');
INSERT INTO `picture_door` VALUES ('37', 'MDG004', 'Modern', '2015-06-15 11:05:13');
INSERT INTO `picture_door` VALUES ('38', 'MDG005', 'Modern', '2015-06-15 20:17:14');
INSERT INTO `picture_door` VALUES ('39', 'MDP001', 'Modern', '2015-06-15 12:30:29');
INSERT INTO `picture_door` VALUES ('40', 'MDP002', 'Modern', '2015-06-15 13:19:36');
INSERT INTO `picture_door` VALUES ('41', 'MDP003', 'Modern', '2015-06-15 07:20:29');
INSERT INTO `picture_door` VALUES ('42', 'MDP004', 'Modern', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('43', 'MDP005', 'Modern', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('44', 'MDP006', 'Modern', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('45', 'MDP007', 'Modern', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('46', 'MDP008', 'Mordern', '2016-08-20 13:00:22');

-- ----------------------------
-- Table structure for picture_door_like
-- ----------------------------
DROP TABLE IF EXISTS `picture_door_like`;
CREATE TABLE `picture_door_like` (
  `LIKE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Picture_Door_ID` varchar(30) NOT NULL,
  `Session_ID` varchar(40) NOT NULL,
  PRIMARY KEY (`LIKE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of picture_door_like
-- ----------------------------
INSERT INTO `picture_door_like` VALUES ('27', '1', 'tjvba0fn8ltllfc5623kmtncv4');
INSERT INTO `picture_door_like` VALUES ('28', '2', 'tjvba0fn8ltllfc5623kmtncv4');
INSERT INTO `picture_door_like` VALUES ('29', '3', 'tjvba0fn8ltllfc5623kmtncv4');
INSERT INTO `picture_door_like` VALUES ('30', '4', 'tjvba0fn8ltllfc5623kmtncv4');
INSERT INTO `picture_door_like` VALUES ('31', '5', 'tjvba0fn8ltllfc5623kmtncv4');
