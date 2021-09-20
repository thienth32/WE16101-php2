/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80025
 Source Host           : localhost:3306
 Source Schema         : thi_php2_v2

 Target Server Type    : MySQL
 Target Server Version : 80025
 File Encoding         : 65001

 Date: 05/08/2021 09:41:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for companies
-- ----------------------------
DROP TABLE IF EXISTS `companies`;
CREATE TABLE `companies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `slogan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of companies
-- ----------------------------
BEGIN;
INSERT INTO `companies` VALUES (1, 'Seta', NULL, 'Công ty lập trình có vốn đầu tư từ Mỹ', '2021-08-05 09:39:12', '2021-08-05 09:39:12', 'demo slogan');
INSERT INTO `companies` VALUES (2, 'BH Tech', NULL, 'Công ty lập trình - thành viên của tập đoàn hài hòa', '2021-08-05 09:39:33', '2021-08-05 09:39:33', 'demo slogan 2');
COMMIT;

-- ----------------------------
-- Table structure for employees
-- ----------------------------
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_card_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of employees
-- ----------------------------
BEGIN;
INSERT INTO `employees` VALUES (1, 'Tran', 'Van Nam', 'namtv@gamil.com', NULL, '012345678910', 2, '2021-08-05 09:40:01', '2021-08-05 09:40:01');
INSERT INTO `employees` VALUES (2, 'Nguyen', 'Trung Thanh', 'thanhnt@gmail.com', NULL, '098765432123', 1, '2021-08-05 09:40:20', '2021-08-05 09:40:20');
INSERT INTO `employees` VALUES (3, 'Le', 'Dai Duong', 'duongld@gmail.com', NULL, '456789098762', 1, '2021-08-05 09:40:38', '2021-08-05 09:40:38');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
