/*
Navicat MySQL Data Transfer

Source Server         : tangdashuai
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : basic

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-12-13 09:19:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` char(3) DEFAULT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `last_login_ip` varchar(100) DEFAULT NULL,
  `last_login_time` int(11) DEFAULT NULL,
  `expire_time` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'Admin', 'admin', '8bfa1a68eb8670d1a591ea70373c45b1', '112', '13178958888', '1', '5a2dee357eec4_thumb.png', '127.0.0.1', '1512970871', '1512970871', '1463362516', '1512959541');

-- ----------------------------
-- Table structure for guanggao
-- ----------------------------
DROP TABLE IF EXISTS `guanggao`;
CREATE TABLE `guanggao` (
  `g_lianjie_A` varchar(255) NOT NULL COMMENT '安卓下载链接',
  `g_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '广告id',
  `g_name` varchar(100) NOT NULL COMMENT '广告名称',
  `g_type` tinyint(1) NOT NULL COMMENT '广告类型',
  `g_info` varchar(500) NOT NULL COMMENT '广告内容描述',
  `picname` varchar(50) DEFAULT NULL,
  `plan_id` int(10) unsigned NOT NULL COMMENT '计划id',
  `status` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '1，开启 2关闭',
  `show_number` int(20) unsigned NOT NULL DEFAULT '0' COMMENT '展示次数',
  `g_lianjie_I` varchar(255) NOT NULL COMMENT '苹果下载链接',
  PRIMARY KEY (`g_id`),
  KEY `show_number` (`show_number`),
  KEY `plan_id` (`plan_id`),
  CONSTRAINT `guanggao_ibfk_1` FOREIGN KEY (`plan_id`) REFERENCES `plan` (`plan_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of guanggao
-- ----------------------------
INSERT INTO `guanggao` VALUES ('asdfasdfas', '1', 'asdfasdfas', '1', 'asdfasdf', null, '1', '1', '0', 'asdfasdf');

-- ----------------------------
-- Table structure for plan
-- ----------------------------
DROP TABLE IF EXISTS `plan`;
CREATE TABLE `plan` (
  `plan_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `limit` int(255) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  `start_time` int(10) DEFAULT NULL,
  `end_time` int(10) DEFAULT NULL,
  `num` int(11) unsigned zerofill DEFAULT '00000000000',
  `plan_width` double DEFAULT NULL,
  `plan_height` double DEFAULT NULL,
  `create_time` int(10) DEFAULT NULL,
  `update_time` int(10) DEFAULT NULL,
  `p_lianjie` varchar(32) NOT NULL,
  PRIMARY KEY (`plan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of plan
-- ----------------------------
INSERT INTO `plan` VALUES ('1', 'adfsadf', '1', '5', '1', '1512662400', '1512748800', '00000000001', '10', '10', '1512747782', '0', 'asdfasdf');

-- ----------------------------
-- Table structure for record
-- ----------------------------
DROP TABLE IF EXISTS `record`;
CREATE TABLE `record` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userip` varchar(10) NOT NULL,
  `plan_id` int(10) unsigned NOT NULL,
  `g_id` int(10) unsigned NOT NULL,
  `num` int(10) NOT NULL DEFAULT '0' COMMENT '点击次数',
  `time` int(20) NOT NULL COMMENT '访问时间',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '展示和统计的类型1表示展示2表示点击',
  PRIMARY KEY (`id`),
  KEY `plan_id` (`plan_id`),
  CONSTRAINT `plan_id` FOREIGN KEY (`plan_id`) REFERENCES `plan` (`plan_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of record
-- ----------------------------
INSERT INTO `record` VALUES ('1', '::1', '1', '1', '1', '1512747857', '1');
INSERT INTO `record` VALUES ('2', '::1', '1', '1', '1', '1512747883', '1');
INSERT INTO `record` VALUES ('3', '::1', '1', '1', '1', '1512747891', '1');
INSERT INTO `record` VALUES ('4', '::1', '1', '1', '1', '1512747892', '2');
INSERT INTO `record` VALUES ('5', '::1', '1', '1', '1', '1512747892', '2');
INSERT INTO `record` VALUES ('6', '::1', '1', '1', '1', '1512747893', '1');
INSERT INTO `record` VALUES ('7', '::1', '1', '1', '1', '1512747893', '2');
INSERT INTO `record` VALUES ('8', '::1', '1', '1', '1', '1512747893', '1');
INSERT INTO `record` VALUES ('9', '::1', '1', '1', '1', '1512748042', '1');
INSERT INTO `record` VALUES ('10', '::1', '1', '1', '1', '1512748042', '1');
INSERT INTO `record` VALUES ('11', '::1', '1', '1', '1', '1512748042', '1');
INSERT INTO `record` VALUES ('12', '::1', '1', '1', '1', '1512748043', '1');
INSERT INTO `record` VALUES ('13', '::1', '1', '1', '1', '1512748043', '1');
INSERT INTO `record` VALUES ('14', '::1', '1', '1', '1', '1512748043', '1');
INSERT INTO `record` VALUES ('15', '::1', '1', '1', '1', '1512748043', '1');
INSERT INTO `record` VALUES ('16', '::1', '1', '1', '1', '1512748043', '1');
INSERT INTO `record` VALUES ('17', '::1', '1', '1', '1', '1512748043', '1');
INSERT INTO `record` VALUES ('18', '::1', '1', '1', '1', '1512748870', '1');
INSERT INTO `record` VALUES ('19', '::1', '1', '1', '1', '1512749033', '1');
INSERT INTO `record` VALUES ('20', '::1', '1', '1', '1', '1512749439', '1');
INSERT INTO `record` VALUES ('21', '127.0.0.1', '1', '1', '1', '1512786795', '1');
INSERT INTO `record` VALUES ('22', '127.0.0.1', '1', '1', '1', '1512786797', '1');
INSERT INTO `record` VALUES ('23', '127.0.0.1', '1', '1', '1', '1512786798', '1');
INSERT INTO `record` VALUES ('24', '127.0.0.1', '1', '1', '1', '1512786798', '1');
INSERT INTO `record` VALUES ('25', '127.0.0.1', '1', '1', '1', '1512786798', '1');
INSERT INTO `record` VALUES ('26', '127.0.0.1', '1', '1', '1', '1512786798', '1');
INSERT INTO `record` VALUES ('27', '127.0.0.1', '1', '1', '1', '1512786798', '1');
INSERT INTO `record` VALUES ('28', '127.0.0.1', '1', '1', '1', '1512786798', '1');
INSERT INTO `record` VALUES ('29', '127.0.0.1', '1', '1', '1', '1512786799', '1');
INSERT INTO `record` VALUES ('30', '127.0.0.1', '1', '1', '1', '1512786799', '1');
INSERT INTO `record` VALUES ('31', '127.0.0.1', '1', '1', '1', '1512786799', '1');
INSERT INTO `record` VALUES ('32', '127.0.0.1', '1', '1', '1', '1512786799', '1');
INSERT INTO `record` VALUES ('33', '127.0.0.1', '1', '1', '1', '1512959368', '1');
INSERT INTO `record` VALUES ('34', '127.0.0.1', '1', '1', '1', '1512970847', '1');
