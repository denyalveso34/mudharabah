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

 Date: 27/01/2023 11:41:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for permohonan
-- ----------------------------
DROP TABLE IF EXISTS `permohonan`;
CREATE TABLE `permohonan`  (
  `id_permohonan` int(0) NOT NULL AUTO_INCREMENT,
  `bidang` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_pemohon` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `npwp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_kantor` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telepon` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_modal` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_kbli` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `judul_kbli` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `skala_usaha` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lokasi_usaha` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `koordinat_geografis` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `luas_tanah` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `penggunaan_tanah` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rencana_teknis` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_tanah` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dinyatakan` enum('Disetujui Seluruhnya','Disetujui Sebagian','Ditolak Seluruhnya') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `koordinat_geografis2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `luas_tanah_disetujui` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_peruntukan` enum('Disetujui Seluruhnya','Disetujui Sebagian','Ditolak Seluruhnya') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_kbli2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `judul_kbli2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rdtr` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kdb` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ketinggian_bangunan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `indikasi_program` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `garis_sempadan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jarak_bebas` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `KDH` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `koefisien_tapak` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jaringan_utilitas` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_permohonan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
