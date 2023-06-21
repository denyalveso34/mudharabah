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

 Date: 27/01/2023 11:41:39
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for pengendalian
-- ----------------------------
DROP TABLE IF EXISTS `pengendalian`;
CREATE TABLE `pengendalian`  (
  `bidang` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_pengendalian` bigint(0) NOT NULL AUTO_INCREMENT,
  `status` enum('tersimpan','diajukan','diinformasikan') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tema` enum('Umum','Penilaian Pelaksanaan KKPR dan Pernyataan Mandiri Pelaku UMK','Penilaian Perwujudan RTR','Pemberian Insentif dan Disinsentif','Pengenaan Sanksi Administratif','Penyelesaian Sengketa Penataan Ruang','Pengawasan Penataan Ruang') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_kegiatan` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `agenda_rapat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_kegiatan` date NULL DEFAULT NULL,
  `kode` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lokasi_persil` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tindak_lanjut` enum('Tersimpan','Null','Undangan Klasifikasi','Berita Acara','Telaah Staff','Nota Dinas','Kajian Teknis','Lainnya ........') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kronologis` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `file_materi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `file_undangan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_pengendalian`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
