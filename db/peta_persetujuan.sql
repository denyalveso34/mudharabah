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

 Date: 27/01/2023 11:42:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for peta_persetujuan
-- ----------------------------
DROP TABLE IF EXISTS `peta_persetujuan`;
CREATE TABLE `peta_persetujuan`  (
  `bidang` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_persetujuan` int(0) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `peruntukan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lokasi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keputusan_pkkpr` enum('Disetujui','Disetujui Sebagian','Ditolak Seluruhnya') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `upload_shp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ketentuan_kegiatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kdb` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ketinggian` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `persyaratan_khusus` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_persetujuan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
