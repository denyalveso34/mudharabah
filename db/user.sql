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

 Date: 27/01/2023 11:42:47
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` bigint(0) NOT NULL,
  `nama_lengkap` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_kelamin` enum('laki_laki','perempuan','lainnya') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'lainnya',
  `tanggal_lahir` date NULL DEFAULT '2000-01-01',
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telepon` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `role` enum('superadmin','perencanaan','pemanfaatan','pengendalian','anggota') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'anggota',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
