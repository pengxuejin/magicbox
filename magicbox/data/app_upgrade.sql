/*
Navicat MySQL Data Transfer

Source Server         : 192.168.1.22
Source Server Version : 50173
Source Host           : 192.168.1.22:3306
Source Database       : app_upgrade

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2016-03-23 16:54:24
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `ad_info`
-- ----------------------------
DROP TABLE IF EXISTS `ad_info`;
CREATE TABLE `ad_info` (
  `id` bigint(16) unsigned NOT NULL AUTO_INCREMENT,
  `ad_id` bigint(16) NOT NULL,
  `start_time` bigint(16) NOT NULL,
  `end_time` bigint(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ad_info
-- ----------------------------
INSERT INTO `ad_info` VALUES ('17', '26', '1451038800', '1491132400');
INSERT INTO `ad_info` VALUES ('18', '27', '1451038800', '1491132400');
INSERT INTO `ad_info` VALUES ('19', '28', '1451038800', '1491132400');
INSERT INTO `ad_info` VALUES ('20', '25', '1451038800', '1491132400');
INSERT INTO `ad_info` VALUES ('21', '29', '1451038800', '1491132400');
INSERT INTO `ad_info` VALUES ('22', '30', '1451038800', '1491132400');
INSERT INTO `ad_info` VALUES ('23', '31', '1458622800', '1458716400');
INSERT INTO `ad_info` VALUES ('24', '32', '1421038800', '1421132400');
INSERT INTO `ad_info` VALUES ('25', '33', '1458626400', '1458727200');
INSERT INTO `ad_info` VALUES ('26', '34', '1458622800', '1458806400');
INSERT INTO `ad_info` VALUES ('28', '35', '1458622800', '1458806400');
INSERT INTO `ad_info` VALUES ('29', '35', '0', '0');
INSERT INTO `ad_info` VALUES ('30', '35', '0', '0');

-- ----------------------------
-- Table structure for `ad_upgrade`
-- ----------------------------
DROP TABLE IF EXISTS `ad_upgrade`;
CREATE TABLE `ad_upgrade` (
  `id` int(16) unsigned NOT NULL AUTO_INCREMENT,
  `customer` varchar(128) DEFAULT NULL,
  `ad_name` varchar(256) DEFAULT NULL,
  `ad_md5` varchar(32) NOT NULL,
  `ad_url` varchar(256) NOT NULL,
  `ad_duration` int(3) unsigned zerofill DEFAULT '000',
  `mac` varchar(24) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ad_upgrade
-- ----------------------------
INSERT INTO `ad_upgrade` VALUES ('1', null, '1', '', '', '000', '1');
INSERT INTO `ad_upgrade` VALUES ('2', 'TEST_CUSTOMER', 'TEST_NAME', '11111111111111111111111', '11111111111111111111111', '000', '11:22:33:44:55:66');
INSERT INTO `ad_upgrade` VALUES ('3', 'TEST_CUSTOMER', 'TEST_NAME', '222222222222222222222', '222222222222222222222', '000', '11:22:33:44:55:66');
INSERT INTO `ad_upgrade` VALUES ('4', 'TEST_CUSTOMER', 'TEST_NAME', '3333333333333333333333333', '33333333333333333', '000', '11:22:33:44:55:66');
INSERT INTO `ad_upgrade` VALUES ('5', 'TEST_CUSTOMER', 'TEST_NAME', '4444444444444444444444', '444444444444444444', '000', '11:22:33:44:55:66');
INSERT INTO `ad_upgrade` VALUES ('6', 'TEST_CUSTOMER', 'TEST_NAME', '55555555555555555', '55555555555555', '000', '11:22:33:44:55:66');
INSERT INTO `ad_upgrade` VALUES ('7', 'TEST_CUSTOMER', 'TEST_NAME', '666666666666666666', '66666666666666', '000', '11:22:33:44:55:66');
INSERT INTO `ad_upgrade` VALUES ('8', 'TEST_CUSTOMER', 'TEST_NAME', '777777777777777', '77777777777777777777', '000', '11:22:33:44:55:66');
INSERT INTO `ad_upgrade` VALUES ('9', 'TEST_CUSTOMER', 'TEST_NAME', '8888888888888888', '8888888888888', '000', '11:22:33:44:55:66');
INSERT INTO `ad_upgrade` VALUES ('10', 'TEST_CUSTOMER', 'TEST_NAME', '9999999999999999', '999999999999', '000', '00:e0:61:4c:82:4c');
INSERT INTO `ad_upgrade` VALUES ('11', 'TEST_CUSTOMER', 'TEST_NAME', '000000000000000', '000000000000000000000', '000', '11:22:33:44:55:66');
INSERT INTO `ad_upgrade` VALUES ('12', 'TEST_CUSTOMER', 'TEST_NAME', 'aaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', '000', '00:e0:61:4c:82:4c');
INSERT INTO `ad_upgrade` VALUES ('13', 'TEST_CUSTOMER', 'TEST_NAME', 'bbbbbbbbbbbbbbbb', 'bbbbbbbbbbbbbbbbbbbbbbbb', '000', '11:22:33:44:55:66');
INSERT INTO `ad_upgrade` VALUES ('14', 'TEST_CUSTOMER', 'TEST_NAME', 'ccccccccccccccccccccccccc', 'cccccccccccccccccccc', '000', '11:22:33:44:55:66');
INSERT INTO `ad_upgrade` VALUES ('27', '小云子', 'test1', '70d0425ef7523687b44f3593607ed530', 'http://192.168.1.22:8080/video/a_x264_001.mp4', '1560', '00:00:00:00:00:00');
INSERT INTO `ad_upgrade` VALUES ('28', '小云子', 'test2', 'a9cad70253b20bd435b96577b1f35ee0', 'http://192.168.1.22:8080/video/a_x264.mp4', '1560', '00:00:00:00:00:00');
INSERT INTO `ad_upgrade` VALUES ('29', '小云子', 'test3', '0D58572CEC142E4CE54BA90205B4A4AD', 'http://192.168.1.22:8080/video/xuanbin.mp4', '1560', '00:00:00:00:00:00');
INSERT INTO `ad_upgrade` VALUES ('30', '小云子', 'test4', '03174D8701A5DF89868839571CEC8F60', 'http://192.168.1.22:8080/video/liminhao.mp4', '1560', '00:00:00:00:00:00');
INSERT INTO `ad_upgrade` VALUES ('21', '小云子', 'testtst', '70d0425ef7523687b44f3593607ed530', '/tmp/a_x264_001.mp4', '1560', '00:00:00:00:00:00');
INSERT INTO `ad_upgrade` VALUES ('22', '小云子', 'testtst', '70d0425ef7523687b44f3593607ed530', '/tmp/a_x264_001.mp4', '1560', '00:00:00:00:00:00');
INSERT INTO `ad_upgrade` VALUES ('23', '小云子', 'testtst', '70d0425ef7523687b44f3593607ed530', '/tmp/a_x264_001.mp4', '1560', '00:00:00:00:00:00');
INSERT INTO `ad_upgrade` VALUES ('24', '小云子', 'testtst', '70d0425ef7523687b44f3593607ed530', '/tmp/a_x264_001.mp4', '1560', '00:00:00:00:00:00');
INSERT INTO `ad_upgrade` VALUES ('25', '小云子', 'testtst', 'a9cad70253b20bd435b96577b1f35ee0', 'http://192.168.1.22:8080/video/a_x264.mp4', '1560', '00:00:00:00:00:00');
INSERT INTO `ad_upgrade` VALUES ('26', '小云子', 'testtst', '70d0425ef7523687b44f3593607ed530', 'http://192.168.1.22:8080/video/a_x264_001.mp4', '1560', '00:00:00:00:00:00');
INSERT INTO `ad_upgrade` VALUES ('31', '大博科技', 'test7', 'e5ff6ee107d8dc3b799e45d69edbeab5', 'http://192.168.1.22:8080/video/liminhao.mp4', '1560', '00:00:00:00:00:00');
INSERT INTO `ad_upgrade` VALUES ('32', '大博科技', 'test8', 'e5ff6ee107d8dc3b799e45d69edbeab5', 'http://192.168.1.22:8080/video/liminhao.mp4', '1560', '00:e0:61:4c:82:4c');
INSERT INTO `ad_upgrade` VALUES ('33', '大博科技', 'test9', 'de93942453425066b41d4c20b323d6dc', 'http://192.168.1.22:8080/video/xuanbin.mp4', '1680', '00:e0:61:4c:82:4c');
INSERT INTO `ad_upgrade` VALUES ('34', '小云子', 'test5', 'e5ff6ee107d8dc3b799e45d69edbeab5', 'http://192.168.1.22:8080/video/liminhao.mp4', '3060', '00:00:00:00:00:00');
INSERT INTO `ad_upgrade` VALUES ('35', '小云子', 'test5', 'e5ff6ee107d8dc3b799e45d69edbeab5', 'http://192.168.1.22:8080/video/liminhao.mp4', '3060', '00:00:00:00:00:00');

-- ----------------------------
-- Table structure for `app_version`
-- ----------------------------
DROP TABLE IF EXISTS `app_version`;
CREATE TABLE `app_version` (
  `_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `versionName` varchar(128) NOT NULL,
  `tarUrl` varchar(256) NOT NULL,
  `city` varchar(64) DEFAULT NULL,
  `appType` smallint(6) DEFAULT NULL,
  `hardware` varchar(256) DEFAULT NULL,
  `rmac` varchar(20) DEFAULT NULL,
  `createAt` varchar(64) NOT NULL DEFAULT 'CURRENT_TIMESTAMP',
  PRIMARY KEY (`_id`)
) ENGINE=MyISAM AUTO_INCREMENT=560 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of app_version
-- ----------------------------
INSERT INTO `app_version` VALUES ('118', 'Router', 'FDASFASD', 'FDSAFAS', '0', '', '', '2015-11-13 11:32:13');
INSERT INTO `app_version` VALUES ('111', 'HW_1.0', '/home/xingyating/test', '11:22:33:44:55:66', '1', '', '', '2015-11-12 14:08:41');
INSERT INTO `app_version` VALUES ('112', 'DabooRouterRFHome', '/test', '77:88:99:aa:bb:cc', '0', '', '', '2015-11-12 14:56:07');
INSERT INTO `app_version` VALUES ('113', 'Ver_test', 'http://192.168.1.123/test.txt', '', '0', 'Daboowifi_RF', '', '2015-11-12 15:42:50');
INSERT INTO `app_version` VALUES ('115', 'HumanWeight_windows', 'etset', '', '1', 'FEWFSF', '', '2015-11-13 11:18:10');
INSERT INTO `app_version` VALUES ('116', 'RouterRF_HOme', 'QEWERTY', 'ASDFGHJ', '0', '', '', '2015-11-13 11:26:47');
INSERT INTO `app_version` VALUES ('117', 'Routersfdfasdf', 'dsafdsafdfdsfdsfa', 'fdafdsfadsfsdfs', '0', '', '', '2015-11-13 11:30:59');
INSERT INTO `app_version` VALUES ('119', 'FDEFDFD', 'DSFSDFDS', '', '0', 'DFDSFDSF', '', '0000-00-00 00:00:00');
INSERT INTO `app_version` VALUES ('120', 'RFEF', 'EREWRWR', '', '1', 'DEDDEWDEW', '', '0000-00-00 00:00:00');
INSERT INTO `app_version` VALUES ('121', 'REFDFD', 'fasdfasdfas', '', '1', 'fdsfadfs', '', '2015-11-13 14:59:53');
INSERT INTO `app_version` VALUES ('122', 'RFHomeDaboo', 'OOOOO', '', '0', 'WERTT', '', '0000-00-00 00:00:00');
INSERT INTO `app_version` VALUES ('123', 'REIUYMJFV', '555555fdfddfdfdfdf', '', '0', '', '99:88:77:66:66:66', '0000-00-00 00:00:00');
INSERT INTO `app_version` VALUES ('124', 'HFSKSK', 'fjjdjfjdf', 'city', '0', '', '', '0000-00-00 00:00:00');
INSERT INTO `app_version` VALUES ('125', '23r3ewrewq', 'eqrewrqewr', 'qerqerqewr', '0', 'qrewrqw', '22:11:33:44:55:66', '2015-11-13 15:21:27');
INSERT INTO `app_version` VALUES ('126', 'hhhhhhh', 'hhhhhhhh', 'hhhhhh', '0', '', '', '2015-11-13 15:21:48');
INSERT INTO `app_version` VALUES ('127', 'DEFDFD', '/NNNBUUJJKU', '', '1', 'UUUUUU', '', '2015-11-13 16:39:17');
INSERT INTO `app_version` VALUES ('128', 'ROTERERE', '/kjhgfds', '', '1', 'NNNNNNNN', '', '2015-11-16 14:38:52');
INSERT INTO `app_version` VALUES ('129', 'XXXXXXXX', 'XXXXXXXXXX', '', '1', 'XXXXXXXX', '', '0000-00-00 00:00:00');
INSERT INTO `app_version` VALUES ('130', 'fadfasdfadfsadfdfadsfas', 'afdsfadsf', 'fadsfdsf', '1', '', '', '2015-11-16 15:53:14');
INSERT INTO `app_version` VALUES ('131', 'HW_VVVV', 'shanghai', 'wuhan', '1', '', '', '2015-11-16 16:10:59');
INSERT INTO `app_version` VALUES ('132', 'Ver_test2', 'http://1.1.1.1/test2.txt', '123', '0', 'Daboowifi_RF', '11:22:22:33:44:55', '2016-03-07 14:59:00');
INSERT INTO `app_version` VALUES ('133', 'Ver_test3', 'http://1.1.1.1/test3.txt', '456', '0', '', '00:e0:61:4c:82:4c', '2016-03-07 14:59:22');
INSERT INTO `app_version` VALUES ('559', 'tset', '', 'wuhan', '1', '', '', '2016- 3-18 14:42:19');
INSERT INTO `app_version` VALUES ('558', 'aaaaaaaaaa', '', '', '0', 'TESTAAAA', '', '2016- 3-18 14:33:24');

-- ----------------------------
-- Table structure for `goods_info`
-- ----------------------------
DROP TABLE IF EXISTS `goods_info`;
CREATE TABLE `goods_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `picture` varchar(256) NOT NULL,
  `price` int(10) NOT NULL,
  `introduce` varchar(256) DEFAULT NULL,
  `type` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods_info
-- ----------------------------
INSERT INTO `goods_info` VALUES ('17', 'milk', 'http://192.168.1.22:8080/pics/tls.jpg', '0', 'good good milk to eat', '0');
INSERT INTO `goods_info` VALUES ('5', 'apple', 'http://192.168.1.22:8080/pics/apple.png', '0', 'good apple to eat', '1');
INSERT INTO `goods_info` VALUES ('6', 'banana', 'http://192.168.1.22:8080/pics/1.jpg', '0', 'good banana to eat', '1');
INSERT INTO `goods_info` VALUES ('7', 'rice', 'http://192.168.1.22:8080/pics/2.jpg', '0', 'good rice to eat', '2');
INSERT INTO `goods_info` VALUES ('8', 'meat', 'http://192.168.1.22:8080/pics/2.jpg', '0', 'good meat to eat', '3');
INSERT INTO `goods_info` VALUES ('9', 'majia', 'http://192.168.1.22:8080/pics/1.jpg', '0', 'good majia to eat', '3');
INSERT INTO `goods_info` VALUES ('10', 'people', 'http://192.168.1.22:8080/pics/2.jpg', '0', 'good people to eat', '3');
INSERT INTO `goods_info` VALUES ('11', 'omg', 'http://192.168.1.22:8080/pics/3.jpg', '0', 'good', '3');
INSERT INTO `goods_info` VALUES ('12', 'cholocate', 'http://192.168.1.22:8080/pics/4.jpg', '0', 'good cholocate to eat', '3');
INSERT INTO `goods_info` VALUES ('13', 'cholocate', 'http://192.168.1.22:8080/pics/5.jpg', '0', 'good omg to eat', '1');
INSERT INTO `goods_info` VALUES ('14', 'cholocate1', 'http://192.168.1.22:8080/pics/4.jpg', '0', 'good cholocate to eat', '3');
INSERT INTO `goods_info` VALUES ('15', 'bye', 'http://192.168.1.22:8080/pics/5.jpg', '0', 'good bye to eat', '3');
INSERT INTO `goods_info` VALUES ('16', 'goodgood', 'http://192.168.1.22:8080/pics/6.jpg', '0', 'good good to eat', '3');

-- ----------------------------
-- Table structure for `goods_of_machine`
-- ----------------------------
DROP TABLE IF EXISTS `goods_of_machine`;
CREATE TABLE `goods_of_machine` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mac` varchar(20) NOT NULL,
  `goods_id` int(10) NOT NULL,
  `gross_count` int(10) NOT NULL,
  `sales_count` int(10) NOT NULL,
  `coord` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods_of_machine
-- ----------------------------
INSERT INTO `goods_of_machine` VALUES ('1', '00:e0:61:4c:82:4c', '1', '446', '120', '2');
INSERT INTO `goods_of_machine` VALUES ('2', '00:e0:61:4c:82:4c', '2', '500', '0', '0');
INSERT INTO `goods_of_machine` VALUES ('4', '123', '111', '123', '0', '0');
INSERT INTO `goods_of_machine` VALUES ('5', '00:e0:61:4c:82:4c', '8', '100', '61', '0');
INSERT INTO `goods_of_machine` VALUES ('6', '00:e0:61:4c:82:4d', '8', '1200', '0', '17');
INSERT INTO `goods_of_machine` VALUES ('7', '00:e0:61:4c:82:4d', '10', '11', '0', '9');
INSERT INTO `goods_of_machine` VALUES ('8', '00:e0:61:4c:82:4c', '3', '3', '0', '12');
INSERT INTO `goods_of_machine` VALUES ('9', '00:e0:61:4c:82:4d', '800', '1184', '0', '17');
INSERT INTO `goods_of_machine` VALUES ('10', '00:e0:61:4c:82:4d', '100', '100', '0', '9');
INSERT INTO `goods_of_machine` VALUES ('11', '00:00:00:00:00:00', '5', '20', '0', '1');
INSERT INTO `goods_of_machine` VALUES ('12', '00:00:00:00:00:00', '6', '30', '0', '2');
INSERT INTO `goods_of_machine` VALUES ('13', '00:00:00:00:00:00', '7', '40', '0', '3');
INSERT INTO `goods_of_machine` VALUES ('14', '00:00:00:00:00:00', '10', '10', '0', '4');
INSERT INTO `goods_of_machine` VALUES ('15', '00:00:00:00:00:00', '12', '100', '0', '5');
INSERT INTO `goods_of_machine` VALUES ('16', '00:00:00:00:00:00', '13', '200', '0', '6');
INSERT INTO `goods_of_machine` VALUES ('17', '00:00:00:00:00:00', '9', '2', '0', '7');
INSERT INTO `goods_of_machine` VALUES ('18', '00:00:00:00:00:00', '8', '21', '0', '8');
INSERT INTO `goods_of_machine` VALUES ('19', '00:00:00:00:00:00', '14', '211', '0', '9');
INSERT INTO `goods_of_machine` VALUES ('20', '00:00:00:00:00:00', '15', '2111', '0', '10');
INSERT INTO `goods_of_machine` VALUES ('21', '00:00:00:00:00:00', '16', '212', '0', '11');
INSERT INTO `goods_of_machine` VALUES ('22', '00:00:00:00:00:00', '17', '99', '0', '12');
INSERT INTO `goods_of_machine` VALUES ('23', '00:e0:61:4a:b9:00', '7', '200', '0', '1');

-- ----------------------------
-- Table structure for `machine_info`
-- ----------------------------
DROP TABLE IF EXISTS `machine_info`;
CREATE TABLE `machine_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mac` varchar(20) NOT NULL,
  `merchant` varchar(256) NOT NULL,
  `city` varchar(64) NOT NULL,
  `location` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of machine_info
-- ----------------------------
INSERT INTO `machine_info` VALUES ('1', '00:e0:61:4c:82:4c', '大博科技', 'wuhan', '金融港A13-3楼');
INSERT INTO `machine_info` VALUES ('2', '00:e0:61:4c:82:58', '小云子', 'wuhan', '光谷');
INSERT INTO `machine_info` VALUES ('3', '00:00:00:00:00:00', '小云子', 'wuhan', 'wuhan');

-- ----------------------------
-- Table structure for `machine_of_user`
-- ----------------------------
DROP TABLE IF EXISTS `machine_of_user`;
CREATE TABLE `machine_of_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(16) NOT NULL,
  `machine_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of machine_of_user
-- ----------------------------
INSERT INTO `machine_of_user` VALUES ('1', '12345', '1');
INSERT INTO `machine_of_user` VALUES ('2', '12345', '2');
INSERT INTO `machine_of_user` VALUES ('3', '11111', '12313');

-- ----------------------------
-- Table structure for `sales_statistics`
-- ----------------------------
DROP TABLE IF EXISTS `sales_statistics`;
CREATE TABLE `sales_statistics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mac` varchar(20) NOT NULL,
  `goods_id` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `sell_count` int(10) NOT NULL,
  `sell_at` varchar(24) NOT NULL DEFAULT 'CURRENT_TIMESTAMP',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sales_statistics
-- ----------------------------
INSERT INTO `sales_statistics` VALUES ('1', '00:e0:61:4c:82:4c', '8', '5', '10', '2016-03-23 15:00:00');
INSERT INTO `sales_statistics` VALUES ('2', '00:e0:61:4c:82:4c', '1', '3', '20', '2016-03-23 15:00:00');
INSERT INTO `sales_statistics` VALUES ('3', '00:e0:61:4c:82:4c', '8', '5', '10', '2016-03-23 15:00:00');
INSERT INTO `sales_statistics` VALUES ('4', '00:e0:61:4c:82:4c', '1', '3', '20', '2016-03-23 15:00:00');
INSERT INTO `sales_statistics` VALUES ('5', '00:e0:61:4c:82:4c', '8', '5', '10', '2016-03-23 15:00:00');
INSERT INTO `sales_statistics` VALUES ('6', '00:e0:61:4c:82:4c', '1', '3', '20', '2016-03-23 15:00:00');

-- ----------------------------
-- Table structure for `sql_user`
-- ----------------------------
DROP TABLE IF EXISTS `sql_user`;
CREATE TABLE `sql_user` (
  `_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sql_user
-- ----------------------------
INSERT INTO `sql_user` VALUES ('1', 'upgrade', 'upgrade');
INSERT INTO `sql_user` VALUES ('2', '12345', '12345');

-- ----------------------------
-- Table structure for `upgrade_log`
-- ----------------------------
DROP TABLE IF EXISTS `upgrade_log`;
CREATE TABLE `upgrade_log` (
  `_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rmac` varchar(20) NOT NULL,
  `versionID` int(10) unsigned NOT NULL,
  `requestID` varchar(128) NOT NULL,
  `result` int(11) NOT NULL,
  `message` varchar(256) NOT NULL,
  `upgradeType` smallint(6) DEFAULT NULL,
  `createAt` varchar(24) DEFAULT 'CURRENT_TIMESTAMP',
  PRIMARY KEY (`_id`)
) ENGINE=MyISAM AUTO_INCREMENT=457615656 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of upgrade_log
-- ----------------------------
INSERT INTO `upgrade_log` VALUES ('457615622', '00:e0:61:4c:82:4c', '110', 'f007c245928916d3aa16f706', '1', 'get app upgrade record.', '1', '2016-03-16 14:06:50');
INSERT INTO `upgrade_log` VALUES ('457615623', '00:e0:61:4c:82:4c', '110', 'ccb6a7796e70577de53d0098', '1', 'get app upgrade record.', '1', '2016-03-16 14:06:53');
INSERT INTO `upgrade_log` VALUES ('457615624', '00:e0:61:4c:82:4c', '110', 'f064b240a7786cb65dbb3607', '1', 'get app upgrade record.', '1', '2016-03-16 14:31:40');
INSERT INTO `upgrade_log` VALUES ('457615625', '00:e0:61:4c:82:4c', '110', '93c3813160f7bec376686e3a', '1', 'get ad upgrade record.', '3', '2016-03-16 14:31:44');
INSERT INTO `upgrade_log` VALUES ('457615626', '00:e0:61:4c:82:4c', '111', '560a5175b651c619f8d7abee', '0', 'upgrade successful!', '2', '2016-03-16 14:32:12');
INSERT INTO `upgrade_log` VALUES ('457615627', '00:e0:61:4c:82:4c', '111', '560a5175b651c619f8d7abee', '0', 'upgrade successful!', '4', '2016-03-16 14:32:18');
INSERT INTO `upgrade_log` VALUES ('457615628', '00:e0:61:4c:82:4c', '111', '560a5175b651c619f8d7abee', '0', 'upgrade successful!', '4', '2016-03-16 14:32:34');
INSERT INTO `upgrade_log` VALUES ('457615629', '00:e0:61:4c:82:4c', '111', '560a5175b651c619f8d7abee', '0', 'upgrade successful!', '2', '2016-03-16 14:32:36');
INSERT INTO `upgrade_log` VALUES ('457615630', '00:e0:61:4c:82:4c', '111', '560a5175b651c619f8d7abee', '0', 'upgrade successful!', '2', '2016-03-16 17:40:43');
INSERT INTO `upgrade_log` VALUES ('457615631', '00:e0:61:4c:82:4c', '111', '560a5175b651c619f8d7abee', '0', 'upgrade successful!', '2', '2016-03-16 17:45:29');
INSERT INTO `upgrade_log` VALUES ('457615632', '00:e0:61:4c:82:4c', '110', '8f7471583d364f5a7dd1fce1', '1', 'get app upgrade record.', '1', '2016-03-17 10:06:42');
INSERT INTO `upgrade_log` VALUES ('457615633', '00:e0:61:4c:82:4c', '110', '7337927fa339e4584d658cab', '1', 'get app upgrade record.', '1', '2016-03-17 10:06:48');
INSERT INTO `upgrade_log` VALUES ('457615634', '00:e0:61:4c:82:4c', '110', '44f4c6265b5179ed3a5768eb', '1', 'get app upgrade record.', '1', '2016-03-17 10:06:54');
INSERT INTO `upgrade_log` VALUES ('457615635', '00:e0:61:4c:82:4c', '110', '8f965fdeb4e373697d200c0c', '1', 'get ad upgrade record.', '3', '2016-03-21 15:06:44');
INSERT INTO `upgrade_log` VALUES ('457615636', '00:e0:61:4c:82:4c', '110', '57d769bc54dd087e4733b172', '1', 'get ad upgrade record.', '3', '2016-03-21 15:08:31');
INSERT INTO `upgrade_log` VALUES ('457615637', '00:e0:61:4c:82:4c', '111', '560a5175b651c619f8d7abee', '0', 'upgrade successful!', '4', '2016-03-21 16:18:21');
INSERT INTO `upgrade_log` VALUES ('457615638', '00:e0:61:4c:82:4c', '110', '89b1ab237dcdc9aaa9fbc84b', '1', 'get app upgrade record.', '1', '2016-03-22 10:53:37');
INSERT INTO `upgrade_log` VALUES ('457615639', '00:e0:61:4c:82:4c', '113', '96e9ecd2f35f6a2eefedc961', '1', 'get app upgrade record.', '1', '2016-03-22 10:54:39');
INSERT INTO `upgrade_log` VALUES ('457615640', '00:e0:61:4c:82:4c', '111', '560a5175b651c619f8d7abee', '0', 'upgrade successful!', '2', '2016-03-22 14:01:52');
INSERT INTO `upgrade_log` VALUES ('457615641', '00:e0:61:4c:82:4c', '0', '19d78cb50858f35697b46f6a', '1', 'get ad upgrade record.', '3', '2016-03-22 14:05:56');
INSERT INTO `upgrade_log` VALUES ('457615642', '00:e0:61:4c:82:4c', '110', '07e94909fc101530e040a4d3', '0', 'upgrade success.', '4', '2016-03-22 14:27:22');
INSERT INTO `upgrade_log` VALUES ('457615643', '00:e0:61:4c:82:4c', '0', '5132e31f2d7d3eb7ca04adaf', '1', 'get ad upgrade record.', '3', '2016-03-22 14:29:32');
INSERT INTO `upgrade_log` VALUES ('457615644', '00:e0:61:4c:82:4c', '0', 'a56507f2f81b64fbe416fe4e', '0', 'get ad upgrade record.', '3', '2016-03-22 14:29:54');
INSERT INTO `upgrade_log` VALUES ('457615645', '00:e0:61:4c:82:4c', '0', '92bf366c3320cc7714100c78', '0', 'get ad upgrade record.', '3', '2016-03-22 14:30:12');
INSERT INTO `upgrade_log` VALUES ('457615646', '00:e0:61:4c:82:4c', '0', '06907d6ff74c5c2ffe637e8b', '0', 'get ad upgrade record.', '3', '2016-03-23 10:26:01');
INSERT INTO `upgrade_log` VALUES ('457615647', '00:e0:61:4c:82:4c', '0', '8400ca6f35f873f5df13d270', '0', 'get ad upgrade record.', '3', '2016-03-23 10:27:55');
INSERT INTO `upgrade_log` VALUES ('457615648', '00:e0:61:4c:82:4c', '0', '8ccdecee33b5a037c87621b9', '0', 'get ad upgrade record.', '3', '2016-03-23 10:28:01');
INSERT INTO `upgrade_log` VALUES ('457615649', '00:e0:61:4c:82:4c', '0', '5d70721e2ced7d0b8c8fe2c5', '0', 'get ad upgrade record.', '3', '2016-03-23 11:08:09');
INSERT INTO `upgrade_log` VALUES ('457615650', '00:e0:61:4c:82:4c', '111', '560a5175b651c619f8d7abee', '0', 'upgrade successful!', '2', '2016-03-23 13:24:04');
INSERT INTO `upgrade_log` VALUES ('457615651', '00:e0:61:4c:82:4c', '111', '560a5175b651c619f8d7abee', '0', 'upgrade successful!', '2', '2016-03-23 13:26:00');
INSERT INTO `upgrade_log` VALUES ('457615652', '00:e0:61:4c:82:4c', '111', '560a5175b651c619f8d7abee', '0', 'upgrade successful!', '2', '2016-03-23 13:37:17');
INSERT INTO `upgrade_log` VALUES ('457615653', '00:e0:61:4c:82:4c', '111', '560a5175b651c619f8d7abee', '0', 'upgrade successful!', '2', '2016-03-23 13:43:52');
INSERT INTO `upgrade_log` VALUES ('457615654', '00:e0:61:4c:82:4c', '111', '560a5175b651c619f8d7abee', '0', 'upgrade successful!', '2', '2016-03-23 13:45:30');
INSERT INTO `upgrade_log` VALUES ('457615655', '00:e0:61:4c:82:4c', '111', '560a5175b651c619f8d7abee', '0', 'upgrade successful!', '2', '2016-03-23 13:49:38');
