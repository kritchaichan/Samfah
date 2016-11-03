/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : samfah

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-10-10 21:34:17
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customers
-- ----------------------------
INSERT INTO `customers` VALUES ('00001', 'Akkara', 'Terananont', '297/2 Sailurt Road Tambol Taiban Samutprakan 10270', '-', '0817142992', 'disoder@windowslive.com', 'akkara.te', 'akkara terananont', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('000001', '2016-09-25', '2016-09-25 18:58:13', '00001');

-- ----------------------------
-- Table structure for orders_details
-- ----------------------------
DROP TABLE IF EXISTS `orders_details`;
CREATE TABLE `orders_details` (
  `Orders_Details_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Order_ID` int(6) unsigned zerofill NOT NULL,
  `Picture_Door_ID` varchar(30) NOT NULL,
  `Orders_Details_Height` decimal(6,2) NOT NULL,
  `Orders_Details_Width` decimal(6,2) NOT NULL,
  `Orders_Details_Thickness` decimal(2,2) NOT NULL,
  `Orders_Details_Accessories_Framing` varchar(3) NOT NULL,
  `Orders_Details_Accessories_GlassWork` varchar(3) NOT NULL,
  `Orders_Details_Wood_for_Door` varchar(10) NOT NULL,
  `Orders_Details_Wood_for_Framing` varchar(10) NOT NULL,
  `Orders_Details_Remark` varchar(1000) DEFAULT NULL,
  `Orders_Details_Delivery_Date` date DEFAULT NULL,
  PRIMARY KEY (`Orders_Details_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders_details
-- ----------------------------
INSERT INTO `orders_details` VALUES ('1', '000001', '1', '200.00', '150.00', '0.99', 'yes', 'yes', 'teak', 'teak', 'Test asdadfjasdfkljalsdfkj;asldfjv;lasfkjav;lsfkjalvjfwef', '2016-09-25');

-- ----------------------------
-- Table structure for picture_door
-- ----------------------------
DROP TABLE IF EXISTS `picture_door`;
CREATE TABLE `picture_door` (
  `Picture_Door_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Picture_Door_Name` varchar(30) NOT NULL,
  `Picture_Door_Type` varchar(15) NOT NULL,
  `Picture_Door_Caption` varchar(100) DEFAULT NULL,
  `Picture_Door_Sequence_Number` int(11) DEFAULT NULL,
  `DateTime` datetime NOT NULL,
  PRIMARY KEY (`Picture_Door_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=324 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of picture_door
-- ----------------------------
INSERT INTO `picture_door` VALUES ('1', 'CSP002', 'Classic', '1212121211212112', '1', '2015-06-15 06:22:13');
INSERT INTO `picture_door` VALUES ('2', 'CSP003', 'Classic', '', '2', '2015-06-15 11:05:13');
INSERT INTO `picture_door` VALUES ('3', 'CSP004', 'Classic', '', '3', '2015-06-15 20:17:14');
INSERT INTO `picture_door` VALUES ('4', 'CSP005', 'Classic', '', '4', '2015-06-15 12:30:29');
INSERT INTO `picture_door` VALUES ('5', 'CSP006', 'Classic', '', '2', '2015-06-15 13:19:36');
INSERT INTO `picture_door` VALUES ('6', 'CSP007', 'Classic', '', '2', '2015-06-15 07:20:29');
INSERT INTO `picture_door` VALUES ('7', 'CSP008', 'Classic', '', '2', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('9', 'CSP010', 'Classic', '', '2', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('10', 'CSP011', 'Classic', '', '2', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('11', 'CSP012', 'Classic', '', '2', '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('12', 'CSP013', 'Classic', null, null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('13', 'CSP014', 'Classic', null, null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('16', 'CTG003', 'Contemporary', null, null, '2015-06-15 20:17:14');
INSERT INTO `picture_door` VALUES ('17', 'CTG004', 'Contemporary', null, null, '2015-06-15 12:30:29');
INSERT INTO `picture_door` VALUES ('18', 'CTG006', 'Contemporary', null, null, '2015-06-15 13:19:36');
INSERT INTO `picture_door` VALUES ('19', 'CTG007', 'Contemporary', null, null, '2015-06-15 07:20:29');
INSERT INTO `picture_door` VALUES ('20', 'CTG008', 'Contemporary', null, null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('21', 'CTG009', 'Contemporary', null, null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('22', 'CTP001', 'Contemporary', null, null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('23', 'CTP002', 'Contemporary', null, null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('24', 'CTP003', 'Contemporary', null, null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('25', 'CTP004', 'Contemporary', null, null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('26', 'CTP005', 'Contemporary', null, null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('27', 'CTP006', 'Contemporary', null, null, '2015-06-18 21:02:17');
INSERT INTO `picture_door` VALUES ('28', 'CTP007', 'Contemporary', null, null, '2015-06-18 21:02:19');
INSERT INTO `picture_door` VALUES ('29', 'CTP008', 'Contemporary', null, null, '2015-06-18 21:02:21');
INSERT INTO `picture_door` VALUES ('30', 'CTP009', 'Contemporary', null, null, '2015-06-18 21:02:25');
INSERT INTO `picture_door` VALUES ('31', 'CTP010', 'Contemporary', null, null, '2015-06-18 21:02:22');
INSERT INTO `picture_door` VALUES ('32', 'CTP011', 'Contemporary', null, null, '2015-06-18 21:02:26');
INSERT INTO `picture_door` VALUES ('33', 'CTP012', 'Contemporary', null, null, '2015-06-18 21:02:28');
INSERT INTO `picture_door` VALUES ('34', 'CTP013', 'Contemporary', null, null, '2015-06-18 21:02:29');
INSERT INTO `picture_door` VALUES ('35', 'CTP014', 'Contemporary', null, null, '2015-06-18 21:02:30');
INSERT INTO `picture_door` VALUES ('36', 'MDG001', 'Mordern', null, null, '2015-06-15 06:22:13');
INSERT INTO `picture_door` VALUES ('37', 'MDG004', 'Mordern', null, null, '2015-06-15 11:05:13');
INSERT INTO `picture_door` VALUES ('38', 'MDG005', 'Mordern', null, null, '2015-06-15 20:17:14');
INSERT INTO `picture_door` VALUES ('39', 'MDP001', 'Mordern', null, null, '2015-06-15 12:30:29');
INSERT INTO `picture_door` VALUES ('40', 'MDP002', 'Mordern', null, null, '2015-06-15 13:19:36');
INSERT INTO `picture_door` VALUES ('41', 'MDP003', 'Mordern', null, null, '2015-06-15 07:20:29');
INSERT INTO `picture_door` VALUES ('42', 'MDP004', 'Mordern', null, null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('43', 'MDP005', 'Mordern', null, null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('44', 'MDP006', 'Mordern', null, null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('45', 'MDP007', 'Mordern', null, null, '2015-06-15 23:24:18');
INSERT INTO `picture_door` VALUES ('46', 'MDP008', 'Mordern', null, null, '2016-08-20 13:00:22');
INSERT INTO `picture_door` VALUES ('47', 'CST001', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('49', 'CST002', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('50', 'CST002', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('51', 'CTG001', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('52', 'CTG001', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('53', 'CTG002', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('54', 'CTG003', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('55', 'CTG004', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('56', 'CTG005', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('57', 'CTG006', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('58', 'CTG007', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('59', 'CTG008', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('60', 'CTG009', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('61', 'CTG002', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('62', 'CTG003', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('63', 'CTG004', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('64', 'CTG005', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('65', 'CTG006', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('66', 'CTG007', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('67', 'CTG008', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('68', 'CTG009', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('69', 'CTP013', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('70', 'CTP014', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('71', 'CTT001', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('72', 'CTP013', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('73', 'CTP014', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('74', 'CTT001', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('75', 'DUP', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('76', 'DUP1', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('77', 'DUP2', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('78', 'DUP3', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('79', 'DUP4', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('80', 'DUP5', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('81', 'DUP6', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('82', 'DUP7', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('83', 'DUP8', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('84', 'DUP9', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('85', 'DUP10', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('86', 'DUP11', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('87', 'DUP12', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('88', 'DUP13', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('89', 'DUP14', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('90', 'DUP15', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('91', 'DUP16', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('92', 'DUP17', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('93', 'DUP18', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('94', 'DUP19', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('95', 'DUP20', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('96', 'DUP21', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('97', 'DUP22', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('98', 'DUP26', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('123', 'MDG001', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('124', 'MDG002', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('125', 'MDG003', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('126', 'MDG004', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('127', 'MDG005', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('128', 'MDG001', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('129', 'MDG002', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('130', 'MDG003', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('131', 'MDG004', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('132', 'MDG005', 'Showroom', null, null, '2016-08-23 00:00:00');
INSERT INTO `picture_door` VALUES ('163', 'folios-1', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('203', 'folios-1', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('204', 'folios-2', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('205', 'folios-3', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('206', 'folios-4', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('207', 'folios-5', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('208', 'folios-6', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('209', 'folios-7', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('210', 'folios-8', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('211', 'folios-9', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('212', 'folios-10', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('213', 'folios-11', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('214', 'folios-12', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('215', 'folios-13', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('216', 'folios-14', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('217', 'folios-15', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('218', 'folios-16', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('219', 'folios-17', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('220', 'folios-18', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('221', 'folios-19', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('222', 'folios-20', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('223', 'folios-21', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('224', 'folios-22', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('225', 'folios-23', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('226', 'folios-24', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('227', 'folios-25', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('228', 'folios-26', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('229', 'folios-27', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('230', 'folios-28', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('231', 'folios-29', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('232', 'folios-30', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('233', 'folios-31', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('234', 'folios-32', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('235', 'folios-33', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('236', 'folios-34', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('237', 'folios-35', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('238', 'folios-36', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('239', 'folios-37', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('240', 'folios-38', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('241', 'folios-39', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('242', 'folios-40', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('243', 'process-1', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('244', 'process-2', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('245', 'process-3', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('246', 'process-4', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('247', 'process-5', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('248', 'process-6', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('249', 'process-7', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('250', 'process-9', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('251', 'process-10', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('252', 'process-11', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('253', 'process-12', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('254', 'process-13', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('255', 'process-14', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('256', 'process-15', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('257', 'process-16', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('258', 'process-17', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('259', 'process-18', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('261', 'process-20', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('262', 'process-21', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('263', 'process-22', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('264', 'process-23', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('265', 'process-24', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('266', 'process-25', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('267', 'process-26', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('268', 'process-27', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('269', 'process-28', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('270', 'process-8', 'Process', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('299', 'folios-41', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('300', 'folios-42', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('301', 'folios-43', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('302', 'folios-44', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('303', 'folios-45', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('304', 'folios-46', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('305', 'folios-47', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('306', 'folios-48', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('307', 'folios-49', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('308', 'folios-41', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('309', 'folios-42', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('310', 'folios-43', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('311', 'folios-44', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('312', 'folios-45', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('313', 'folios-46', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('314', 'folios-47', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('315', 'folios-48', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('316', 'folios-49', 'Folios', null, null, '2016-08-24 00:00:00');
INSERT INTO `picture_door` VALUES ('318', 'TEST', 'Showroom', 'TEST', null, '2016-08-27 10:26:24');
INSERT INTO `picture_door` VALUES ('321', 'qwerty', 'Process', '123', null, '2016-08-27 10:31:29');
INSERT INTO `picture_door` VALUES ('323', 'aaa2', 'Folios', 'aaa2', null, '2016-08-27 10:36:24');

-- ----------------------------
-- Table structure for picture_door_like
-- ----------------------------
DROP TABLE IF EXISTS `picture_door_like`;
CREATE TABLE `picture_door_like` (
  `LIKE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Picture_Door_ID` varchar(30) NOT NULL,
  `Session_ID` varchar(40) NOT NULL,
  PRIMARY KEY (`LIKE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of picture_door_like
-- ----------------------------
INSERT INTO `picture_door_like` VALUES ('1', '10', 'ugv3pgri8nr80jjptvoactv7v4');
INSERT INTO `picture_door_like` VALUES ('2', '11', 'ugv3pgri8nr80jjptvoactv7v4');
INSERT INTO `picture_door_like` VALUES ('3', '13', 'ugv3pgri8nr80jjptvoactv7v4');
INSERT INTO `picture_door_like` VALUES ('4', '12', 'ugv3pgri8nr80jjptvoactv7v4');
INSERT INTO `picture_door_like` VALUES ('5', '54', 'cgb94l081qf78encjn9dsuuqd3');
INSERT INTO `picture_door_like` VALUES ('6', '53', 'cgb94l081qf78encjn9dsuuqd3');
INSERT INTO `picture_door_like` VALUES ('7', '59', 'cgb94l081qf78encjn9dsuuqd3');
INSERT INTO `picture_door_like` VALUES ('8', '60', 'cgb94l081qf78encjn9dsuuqd3');
INSERT INTO `picture_door_like` VALUES ('9', '69', 'cgb94l081qf78encjn9dsuuqd3');
INSERT INTO `picture_door_like` VALUES ('10', '70', 'cgb94l081qf78encjn9dsuuqd3');
INSERT INTO `picture_door_like` VALUES ('11', '76', 'cgb94l081qf78encjn9dsuuqd3');
INSERT INTO `picture_door_like` VALUES ('12', '270', '7h8uethlhtr3n4gomire42csh3');

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
