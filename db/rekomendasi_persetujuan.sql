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

 Date: 27/01/2023 11:42:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for rekomendasi_persetujuan
-- ----------------------------
DROP TABLE IF EXISTS `rekomendasi_persetujuan`;
CREATE TABLE `rekomendasi_persetujuan`  (
  `id_rekomendasi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_pemohon` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NPWP` int(0) NOT NULL,
  `alamat` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telepon` int(0) NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_modal` int(0) NOT NULL,
  `kode_kbli` int(0) NOT NULL,
  `judul_kbli` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `skala_usaha` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_usaha` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kelurahan` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kecamatan` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kota` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `provinsi` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `koordinat` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `luas_tanah` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `penggunaan_tanah` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rencana_teknis` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_tanah` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `persetujuan_pkkpr` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kesimpulan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `koordinat_disetujui` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `luas_tanah_disetujui` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_peruntukan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_kbli_pkkpr` int(0) NOT NULL,
  `judul_kbli_pkkpr` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kegiatan_rdtr` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kdb` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ketinggian_bangunan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `indikasi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `persyaratan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `garis_sempadan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jarak_minimum` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kdh` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `koefisien_tapak` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jaringan_utilitas` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ketentuan_tambahan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ketentuan_lain` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
