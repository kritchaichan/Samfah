/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : samfah

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2016-08-25 21:37:22
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
  `Picture_Door_Caption` varchar(100) DEFAULT NULL,
  `DateTime` datetime NOT NULL,
  PRIMARY KEY (`Picture_Door_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=317 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of picture_door
-- ----------------------------
INSERT INTO `picture_door` VALUES ('1', 'CSP002', 'Classic', null, '2015-06-15 06:22:13');
INSERT INTO `picture_door` VALUES ('2', 'CSP003', 'Classic', null, '2015-06-15 11:05:13');
INSERT INTO `picture_door` VALUES ('3', 'CSP004', 'Classic', null, '2015-06-15 20:17:14');
INSERT INTO `picture_door` VALUES ('4', 'CSP005', 'Classic', null, '2015-06-15 12:30:29');
INSERT INTO `picture_door` VALUES ('5', 'CSP006', 'Classic', null, '2015-06-15 13:19:36');
INSERT INTO `picture_door` VALUES ('6', 'CSP007', 'Classic', null, '2015-06-15 07:20:29');
INSERT INTO `picture_door` VALUES ('7', 'CSP008', 'Classic', null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('9', 'CSP010', 'Classic', null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('10', 'CSP011', 'Classic', null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('11', 'CSP012', 'Classic', null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('12', 'CSP013', 'Classic', null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('13', 'CSP014', 'Classic', null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('14', 'CTG001', 'Contemporary', null, '2015-06-15 06:22:13');
INSERT INTO `picture_door` VALUES ('15', 'CTG002', 'Contemporary', null, '2015-06-15 11:05:13');
INSERT INTO `picture_door` VALUES ('16', 'CTG003', 'Contemporary', null, '2015-06-15 20:17:14');
INSERT INTO `picture_door` VALUES ('17', 'CTG004', 'Contemporary', null, '2015-06-15 12:30:29');
INSERT INTO `picture_door` VALUES ('18', 'CTG006', 'Contemporary', null, '2015-06-15 13:19:36');
INSERT INTO `picture_door` VALUES ('19', 'CTG007', 'Contemporary', null, '2015-06-15 07:20:29');
INSERT INTO `picture_door` VALUES ('20', 'CTG008', 'Contemporary', null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('21', 'CTG009', 'Contemporary', null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('22', 'CTP001', 'Contemporary', null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('23', 'CTP002', 'Contemporary', null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('24', 'CTP003', 'Contemporary', null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('25', 'CTP004', 'Contemporary', null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('26', 'CTP005', 'Contemporary', null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('27', 'CTP006', 'Contemporary', null, '2015-06-18 21:02:17');
INSERT INTO `picture_door` VALUES ('28', 'CTP007', 'Contemporary', null, '2015-06-18 21:02:19');
INSERT INTO `picture_door` VALUES ('29', 'CTP008', 'Contemporary', null, '2015-06-18 21:02:21');
INSERT INTO `picture_door` VALUES ('30', 'CTP009', 'Contemporary', null, '2015-06-18 21:02:25');
INSERT INTO `picture_door` VALUES ('31', 'CTP010', 'Contemporary', null, '2015-06-18 21:02:22');
INSERT INTO `picture_door` VALUES ('32', 'CTP011', 'Contemporary', null, '2015-06-18 21:02:26');
INSERT INTO `picture_door` VALUES ('33', 'CTP012', 'Contemporary', null, '2015-06-18 21:02:28');
INSERT INTO `picture_door` VALUES ('34', 'CTP013', 'Contemporary', null, '2015-06-18 21:02:29');
INSERT INTO `picture_door` VALUES ('35', 'CTP014', 'Contemporary', null, '2015-06-18 21:02:30');
INSERT INTO `picture_door` VALUES ('36', 'MDG001', 'Mordern', null, '2015-06-15 06:22:13');
INSERT INTO `picture_door` VALUES ('37', 'MDG004', 'Mordern', null, '2015-06-15 11:05:13');
INSERT INTO `picture_door` VALUES ('38', 'MDG005', 'Mordern', null, '2015-06-15 20:17:14');
INSERT INTO `picture_door` VALUES ('39', 'MDP001', 'Mordern', null, '2015-06-15 12:30:29');
INSERT INTO `picture_door` VALUES ('40', 'MDP002', 'Mordern', null, '2015-06-15 13:19:36');
INSERT INTO `picture_door` VALUES ('41', 'MDP003', 'Mordern', null, '2015-06-15 07:20:29');
INSERT INTO `picture_door` VALUES ('42', 'MDP004', 'Mordern', null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('43', 'MDP005', 'Mordern', null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('44', 'MDP006', 'Mordern', null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('45', 'MDP007', 'Mordern', null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('46', 'MDP008', 'Mordern', null, '2016-08-20 13:00:22');
INSERT INTO `picture_door` VALUES ('47', 'CST001', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('49', 'CST002', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('50', 'CST002', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('51', 'CTG001', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('52', 'CTG001', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('53', 'CTG002', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('54', 'CTG003', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('55', 'CTG004', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('56', 'CTG005', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('57', 'CTG006', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('58', 'CTG007', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('59', 'CTG008', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('60', 'CTG009', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('61', 'CTG002', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('62', 'CTG003', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('63', 'CTG004', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('64', 'CTG005', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('65', 'CTG006', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('66', 'CTG007', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('67', 'CTG008', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('68', 'CTG009', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('69', 'CTP013', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('70', 'CTP014', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('71', 'CTT001', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('72', 'CTP013', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('73', 'CTP014', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('74', 'CTT001', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('75', 'DUP', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('76', 'DUP1', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('77', 'DUP2', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('78', 'DUP3', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('79', 'DUP4', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('80', 'DUP5', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('81', 'DUP6', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('82', 'DUP7', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('83', 'DUP8', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('84', 'DUP9', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('85', 'DUP10', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('86', 'DUP11', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('87', 'DUP12', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('88', 'DUP13', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('89', 'DUP14', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('90', 'DUP15', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('91', 'DUP16', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('92', 'DUP17', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('93', 'DUP18', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('94', 'DUP19', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('95', 'DUP20', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('96', 'DUP21', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('97', 'DUP22', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('98', 'DUP26', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('99', 'DUP', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('100', 'DUP1', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('101', 'DUP2', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('102', 'DUP3', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('103', 'DUP4', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('104', 'DUP5', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('105', 'DUP6', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('106', 'DUP7', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('107', 'DUP8', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('108', 'DUP9', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('109', 'DUP10', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('110', 'DUP11', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('111', 'DUP12', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('112', 'DUP13', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('113', 'DUP14', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('114', 'DUP15', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('115', 'DUP16', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('116', 'DUP17', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('117', 'DUP18', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('118', 'DUP19', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('119', 'DUP20', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('120', 'DUP21', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('121', 'DUP22', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('122', 'DUP26', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('123', 'MDG001', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('124', 'MDG002', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('125', 'MDG003', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('126', 'MDG004', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('127', 'MDG005', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('128', 'MDG001', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('129', 'MDG002', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('130', 'MDG003', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('131', 'MDG004', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('132', 'MDG005', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('133', 'MDP001', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('134', 'MDP002', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('135', 'MDP003', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('136', 'MDP004', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('137', 'MDP005', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('138', 'MDP006', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('139', 'MDP007', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('140', 'MDP008', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('141', 'MDP009', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('142', 'MDP010', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('143', 'MDP011', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('144', 'MDP012', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('145', 'MDP013', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('146', 'MDP014', 'showrooom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('147', 'MDP015', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('148', 'MDP001', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('149', 'MDP002', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('150', 'MDP003', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('151', 'MDP004', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('152', 'MDP005', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('153', 'MDP006', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('154', 'MDP007', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('155', 'MDP008', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('156', 'MDP009', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('157', 'MDP010', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('158', 'MDP011', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('159', 'MDP012', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('160', 'MDP013', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('161', 'MDP014', 'showrooom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('162', 'MDP015', 'Showroom', null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('163', 'folios-1', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('164', 'folios-2', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('165', 'folios-3', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('166', 'folios-4', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('167', 'folios-5', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('168', 'folios-6', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('169', 'folios-7', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('170', 'folios-8', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('171', 'folios-9', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('172', 'folios-10', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('173', 'folios-11', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('174', 'folios-12', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('175', 'folios-13', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('176', 'folios-14', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('177', 'folios-15', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('178', 'folios-16', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('179', 'folios-17', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('180', 'folios-18', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('181', 'folios-19', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('182', 'folios-20', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('183', 'folios-21', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('184', 'folios-22', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('185', 'folios-23', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('186', 'folios-24', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('187', 'folios-25', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('188', 'folios-26', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('189', 'folios-27', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('190', 'folios-28', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('191', 'folios-29', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('192', 'folios-30', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('193', 'folios-31', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('194', 'folios-32', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('195', 'folios-33', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('196', 'folios-34', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('197', 'folios-35', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('198', 'folios-36', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('199', 'folios-37', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('200', 'folios-38', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('201', 'folios-39', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('202', 'folios-40', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('203', 'folios-1', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('204', 'folios-2', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('205', 'folios-3', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('206', 'folios-4', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('207', 'folios-5', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('208', 'folios-6', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('209', 'folios-7', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('210', 'folios-8', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('211', 'folios-9', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('212', 'folios-10', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('213', 'folios-11', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('214', 'folios-12', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('215', 'folios-13', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('216', 'folios-14', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('217', 'folios-15', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('218', 'folios-16', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('219', 'folios-17', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('220', 'folios-18', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('221', 'folios-19', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('222', 'folios-20', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('223', 'folios-21', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('224', 'folios-22', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('225', 'folios-23', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('226', 'folios-24', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('227', 'folios-25', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('228', 'folios-26', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('229', 'folios-27', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('230', 'folios-28', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('231', 'folios-29', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('232', 'folios-30', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('233', 'folios-31', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('234', 'folios-32', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('235', 'folios-33', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('236', 'folios-34', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('237', 'folios-35', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('238', 'folios-36', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('239', 'folios-37', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('240', 'folios-38', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('241', 'folios-39', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('242', 'folios-40', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('243', 'process-1', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('244', 'process-2', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('245', 'process-3', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('246', 'process-4', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('247', 'process-5', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('248', 'process-6', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('249', 'process-7', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('250', 'process-9', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('251', 'process-10', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('252', 'process-11', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('253', 'process-12', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('254', 'process-13', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('255', 'process-14', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('256', 'process-15', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('257', 'process-16', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('258', 'process-17', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('259', 'process-18', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('260', 'process-19', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('261', 'process-20', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('262', 'process-21', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('263', 'process-22', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('264', 'process-23', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('265', 'process-24', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('266', 'process-25', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('267', 'process-26', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('268', 'process-27', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('269', 'process-28', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('270', 'process-8', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('271', 'process-1', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('272', 'process-2', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('273', 'process-3', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('274', 'process-4', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('275', 'process-5', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('276', 'process-6', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('277', 'process-7', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('278', 'process-9', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('279', 'process-10', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('280', 'process-11', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('281', 'process-12', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('282', 'process-13', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('283', 'process-14', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('284', 'process-15', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('285', 'process-16', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('286', 'process-17', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('287', 'process-18', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('288', 'process-19', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('289', 'process-20', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('290', 'process-21', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('291', 'process-22', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('292', 'process-23', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('293', 'process-24', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('294', 'process-25', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('295', 'process-26', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('296', 'process-27', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('297', 'process-28', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('298', 'process-8', 'Process', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('299', 'folios-41', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('300', 'folios-42', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('301', 'folios-43', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('302', 'folios-44', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('303', 'folios-45', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('304', 'folios-46', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('305', 'folios-47', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('306', 'folios-48', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('307', 'folios-49', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('308', 'folios-41', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('309', 'folios-42', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('310', 'folios-43', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('311', 'folios-44', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('312', 'folios-45', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('313', 'folios-46', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('314', 'folios-47', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('315', 'folios-48', 'Folios', null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('316', 'folios-49', 'Folios', null, '2016-08-24 00:00:00');

-- ----------------------------
-- Table structure for picture_door_like
-- ----------------------------
DROP TABLE IF EXISTS `picture_door_like`;
CREATE TABLE `picture_door_like` (
  `LIKE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Picture_Door_ID` varchar(30) NOT NULL,
  `Session_ID` varchar(40) NOT NULL,
  PRIMARY KEY (`LIKE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of picture_door_like
-- ----------------------------
INSERT INTO `picture_door_like` VALUES ('84', '1', '7de9ug4rrdbm0k807o8vih5g03');
INSERT INTO `picture_door_like` VALUES ('85', '2', '7de9ug4rrdbm0k807o8vih5g03');
INSERT INTO `picture_door_like` VALUES ('86', '3', '7de9ug4rrdbm0k807o8vih5g03');
INSERT INTO `picture_door_like` VALUES ('87', '4', '7de9ug4rrdbm0k807o8vih5g03');
INSERT INTO `picture_door_like` VALUES ('88', '9', '7de9ug4rrdbm0k807o8vih5g03');
INSERT INTO `picture_door_like` VALUES ('89', '8', '7de9ug4rrdbm0k807o8vih5g03');
INSERT INTO `picture_door_like` VALUES ('90', '13', '7de9ug4rrdbm0k807o8vih5g03');
INSERT INTO `picture_door_like` VALUES ('91', '12', '7de9ug4rrdbm0k807o8vih5g03');
INSERT INTO `picture_door_like` VALUES ('92', '11', '7de9ug4rrdbm0k807o8vih5g03');
INSERT INTO `picture_door_like` VALUES ('93', '10', '7de9ug4rrdbm0k807o8vih5g03');
INSERT INTO `picture_door_like` VALUES ('94', '5', '7de9ug4rrdbm0k807o8vih5g03');
INSERT INTO `picture_door_like` VALUES ('95', '6', '7de9ug4rrdbm0k807o8vih5g03');
INSERT INTO `picture_door_like` VALUES ('96', '7', '7de9ug4rrdbm0k807o8vih5g03');
INSERT INTO `picture_door_like` VALUES ('97', '2', '50suvda952adj9842964jqbnl6');
INSERT INTO `picture_door_like` VALUES ('98', '6', '50suvda952adj9842964jqbnl6');
INSERT INTO `picture_door_like` VALUES ('99', '7', '50suvda952adj9842964jqbnl6');
INSERT INTO `picture_door_like` VALUES ('100', '13', '50suvda952adj9842964jqbnl6');
INSERT INTO `picture_door_like` VALUES ('101', '12', '50suvda952adj9842964jqbnl6');
INSERT INTO `picture_door_like` VALUES ('102', '11', '50suvda952adj9842964jqbnl6');
INSERT INTO `picture_door_like` VALUES ('103', '10', '50suvda952adj9842964jqbnl6');
INSERT INTO `picture_door_like` VALUES ('104', '5', '50suvda952adj9842964jqbnl6');
INSERT INTO `picture_door_like` VALUES ('105', '8', '50suvda952adj9842964jqbnl6');
INSERT INTO `picture_door_like` VALUES ('106', '9', '50suvda952adj9842964jqbnl6');
INSERT INTO `picture_door_like` VALUES ('107', '4', '50suvda952adj9842964jqbnl6');
INSERT INTO `picture_door_like` VALUES ('108', '3', '50suvda952adj9842964jqbnl6');
INSERT INTO `picture_door_like` VALUES ('109', '1', '50suvda952adj9842964jqbnl6');
INSERT INTO `picture_door_like` VALUES ('110', '7', 'ij7qhrpk8k3hqi5maadnc2dh37');
INSERT INTO `picture_door_like` VALUES ('111', '8', 'ij7qhrpk8k3hqi5maadnc2dh37');
INSERT INTO `picture_door_like` VALUES ('112', '6', 'ij7qhrpk8k3hqi5maadnc2dh37');
INSERT INTO `picture_door_like` VALUES ('113', '11', 'ij7qhrpk8k3hqi5maadnc2dh37');
INSERT INTO `picture_door_like` VALUES ('114', '2', 'ij7qhrpk8k3hqi5maadnc2dh37');
INSERT INTO `picture_door_like` VALUES ('115', '9', 'ij7qhrpk8k3hqi5maadnc2dh37');
INSERT INTO `picture_door_like` VALUES ('116', '13', 'ij7qhrpk8k3hqi5maadnc2dh37');
INSERT INTO `picture_door_like` VALUES ('117', '1', '3o6u3c0ig9u9ucga8quun5def2');
INSERT INTO `picture_door_like` VALUES ('118', '2', '3o6u3c0ig9u9ucga8quun5def2');
INSERT INTO `picture_door_like` VALUES ('119', '6', '3o6u3c0ig9u9ucga8quun5def2');
INSERT INTO `picture_door_like` VALUES ('120', '49', 'rv933237ac1bq9e1umic3bvc95');
INSERT INTO `picture_door_like` VALUES ('121', '48', 'rv933237ac1bq9e1umic3bvc95');
INSERT INTO `picture_door_like` VALUES ('122', '47', 'rv933237ac1bq9e1umic3bvc95');

-- ----------------------------
-- Table structure for user_bo
-- ----------------------------
DROP TABLE IF EXISTS `user_bo`;
CREATE TABLE `user_bo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_bo
-- ----------------------------
INSERT INTO `user_bo` VALUES ('1', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1');
