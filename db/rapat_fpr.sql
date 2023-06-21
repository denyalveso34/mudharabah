/*
 Navicat Premium Data Transfer

 Source Server         : FREEDB
 Source Server Type    : MySQL
 Source Server Version : 80028
 Source Host           : sql.freedb.tech:3306
 Source Schema         : freedb_kulino_fprpu

 Target Server Type    : MySQL
 Target Server Version : 80028
 File Encoding         : 65001

 Date: 27/01/2023 11:42:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for rapat_fpr
-- ----------------------------
DROP TABLE IF EXISTS `rapat_fpr`;
CREATE TABLE `rapat_fpr`  (
  `id_rapat` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bidang` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `judul_kegiatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
