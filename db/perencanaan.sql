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

 Date: 27/01/2023 11:41:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for perencanaan
-- ----------------------------
DROP TABLE IF EXISTS `perencanaan`;
CREATE TABLE `perencanaan`  (
  `bidang` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_perencanaan` int(0) NOT NULL AUTO_INCREMENT,
  `status` enum('tersimpan','diajukan','dirapatkan') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `judul_kegiatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `uraian_kegiatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_kegiatan` date NULL DEFAULT NULL,
  `file` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `foto` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id_perencanaan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
