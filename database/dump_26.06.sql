/*
Navicat MySQL Data Transfer

Source Server         : MyDB
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : courses

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-06-27 17:38:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for Groups
-- ----------------------------
DROP TABLE IF EXISTS `Groups`;
CREATE TABLE `Groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `dateStart` date DEFAULT NULL,
  `dateEnd` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of Groups
-- ----------------------------
INSERT INTO `Groups` VALUES ('1', 'full stack 1', '2017-06-10', '2017-09-01');
INSERT INTO `Groups` VALUES ('2', 'full stack 2', '2017-06-10', '2017-09-05');
INSERT INTO `Groups` VALUES ('3', 'php', '2017-06-08', '2017-08-31');
INSERT INTO `Groups` VALUES ('4', 'auto testing', '2017-06-09', '2017-09-13');

-- ----------------------------
-- Table structure for Lessons
-- ----------------------------
DROP TABLE IF EXISTS `Lessons`;
CREATE TABLE `Lessons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `desc` text,
  `status` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of Lessons
-- ----------------------------
INSERT INTO `Lessons` VALUES ('1', '1 занятие', 'Вводное занятие', 'состоялось', '2017-06-08');
INSERT INTO `Lessons` VALUES ('2', '2 занятие', 'Настройка phpStorm + debuger + openServer', 'состоялось', '2017-06-10');
INSERT INTO `Lessons` VALUES ('3', '3 занятие', 'Настройка GIT + создание БД + верстка страницы на bootstrap', 'состоялось', '2017-06-22');

-- ----------------------------
-- Table structure for Result
-- ----------------------------
DROP TABLE IF EXISTS `Result`;
CREATE TABLE `Result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `mark` smallint(6) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`user_id`,`task_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Result
-- ----------------------------
INSERT INTO `Result` VALUES ('1', '2', '1', '7', '2017-06-29 17:36:42');
INSERT INTO `Result` VALUES ('2', '1', '2', '5', '2017-05-13 17:37:16');
INSERT INTO `Result` VALUES ('3', '3', '4', '9', '2017-06-30 17:37:35');
INSERT INTO `Result` VALUES ('4', '5', '2', '2', '2017-06-28 17:37:56');

-- ----------------------------
-- Table structure for Tasks
-- ----------------------------
DROP TABLE IF EXISTS `Tasks`;
CREATE TABLE `Tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lesson_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `desc` text,
  PRIMARY KEY (`id`,`lesson_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of Tasks
-- ----------------------------
INSERT INTO `Tasks` VALUES ('1', '2', 'Скачать и установить софт', 'скачать phpStrom + navicat + putty + openServer + winSCP + Sunlime 3');
INSERT INTO `Tasks` VALUES ('2', '2', 'Задачи на работу с матрицами', '3 задания с матричками (задача 3 со *)');
INSERT INTO `Tasks` VALUES ('3', '3', 'Настроить Composer + GIT', '1. Изменить конфиг composer встроенного в openServer; 2. Установить GIT CLI; 3. Завести аккаунт на github.com; 4. Подключить jquery; 5. Повключить bootstrap');

-- ----------------------------
-- Table structure for Users
-- ----------------------------
DROP TABLE IF EXISTS `Users`;
CREATE TABLE `Users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FIO` varchar(255) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of Users
-- ----------------------------
INSERT INTO `Users` VALUES ('1', 'Вассерман Иван Карпович', 'trololo', 'vasser@list.ru', '2');
INSERT INTO `Users` VALUES ('2', 'Баралгин Денис Юзикович', 'hstfvJF03jK', 'baral@gmail.com', '1');
INSERT INTO `Users` VALUES ('3', 'Накурил Падлец Иванович', 'GhsTc6K97L', 'napokuri@pokamamanevidit.ru', '3');
INSERT INTO `Users` VALUES ('4', 'Сидр Забродил Вахтангович', 'DfjHdks63D', 'ko@kok.by', '4');
INSERT INTO `Users` VALUES ('5', 'Лошарик Александр Устал', 'LLsLLsLL0', 'loh@lolo.eu', '3');
INSERT INTO `Users` VALUES ('6', 'Никто Никогда Никому', 'NNN55qaz', 'nnn@mail.ru', '2');
INSERT INTO `Users` VALUES ('7', 'Пхпаев Пхп Пхпаевич ', 'coolphp', 'php@php.net', '3');
SET FOREIGN_KEY_CHECKS=1;
