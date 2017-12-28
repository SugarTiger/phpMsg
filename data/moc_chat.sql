/*
Navicat MySQL Data Transfer

Source Server         : 本地MySQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : moc_chat

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-12-28 19:08:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for chat_log
-- ----------------------------
DROP TABLE IF EXISTS `chat_log`;
CREATE TABLE `chat_log` (
  `log_id` int(11) NOT NULL,
  `rec` varchar(255) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `is_new` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of chat_log
-- ----------------------------
