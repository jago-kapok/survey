/*
 Navicat Premium Data Transfer

 Source Server         : DB VirtualBox
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : 10.0.44.211:3306
 Source Schema         : dtks

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 22/03/2022 16:14:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for apakah_perokok
-- ----------------------------
DROP TABLE IF EXISTS `apakah_perokok`;
CREATE TABLE `apakah_perokok`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of apakah_perokok
-- ----------------------------
INSERT INTO `apakah_perokok` VALUES (1, 'Ya, setiap hari');
INSERT INTO `apakah_perokok` VALUES (2, 'Ya, tidak setiap hari');
INSERT INTO `apakah_perokok` VALUES (3, 'Tidak');
INSERT INTO `apakah_perokok` VALUES (4, 'Tidak tahu');

-- ----------------------------
-- Table structure for cara_memperoleh_airminum
-- ----------------------------
DROP TABLE IF EXISTS `cara_memperoleh_airminum`;
CREATE TABLE `cara_memperoleh_airminum`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cara_memperoleh_airminum
-- ----------------------------
INSERT INTO `cara_memperoleh_airminum` VALUES (1, 'Membeli eceran');
INSERT INTO `cara_memperoleh_airminum` VALUES (2, 'Langganan');
INSERT INTO `cara_memperoleh_airminum` VALUES (3, 'Tidak membeli');

-- ----------------------------
-- Table structure for daya_listrik
-- ----------------------------
DROP TABLE IF EXISTS `daya_listrik`;
CREATE TABLE `daya_listrik`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of daya_listrik
-- ----------------------------
INSERT INTO `daya_listrik` VALUES (1, '450 watt');
INSERT INTO `daya_listrik` VALUES (2, '900 watt');
INSERT INTO `daya_listrik` VALUES (3, '1300 watt');
INSERT INTO `daya_listrik` VALUES (4, '2200 watt');
INSERT INTO `daya_listrik` VALUES (5, 'Lebih dari 2200 watt');
INSERT INTO `daya_listrik` VALUES (6, 'Tanpa meteran');

-- ----------------------------
-- Table structure for energi_untuk_memasak
-- ----------------------------
DROP TABLE IF EXISTS `energi_untuk_memasak`;
CREATE TABLE `energi_untuk_memasak`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of energi_untuk_memasak
-- ----------------------------
INSERT INTO `energi_untuk_memasak` VALUES (1, 'Listrik');
INSERT INTO `energi_untuk_memasak` VALUES (2, 'Gas 5,5 kg / blue gaz');
INSERT INTO `energi_untuk_memasak` VALUES (3, 'Gas 12 kg');
INSERT INTO `energi_untuk_memasak` VALUES (4, 'Gas 3 kg');
INSERT INTO `energi_untuk_memasak` VALUES (5, 'Gas kota / meteran PGN');
INSERT INTO `energi_untuk_memasak` VALUES (6, 'Biogas');
INSERT INTO `energi_untuk_memasak` VALUES (7, 'Minyak tanah');
INSERT INTO `energi_untuk_memasak` VALUES (8, 'Briket');
INSERT INTO `energi_untuk_memasak` VALUES (9, 'Arang');
INSERT INTO `energi_untuk_memasak` VALUES (10, 'Kayu bakar');
INSERT INTO `energi_untuk_memasak` VALUES (11, 'Lainnya');
INSERT INTO `energi_untuk_memasak` VALUES (12, 'Tidak memasak di rumah');

-- ----------------------------
-- Table structure for estimasi_pengeluaran
-- ----------------------------
DROP TABLE IF EXISTS `estimasi_pengeluaran`;
CREATE TABLE `estimasi_pengeluaran`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of estimasi_pengeluaran
-- ----------------------------
INSERT INTO `estimasi_pengeluaran` VALUES (1, '5.000 - 25.000');
INSERT INTO `estimasi_pengeluaran` VALUES (2, '25.001 - 50.000');
INSERT INTO `estimasi_pengeluaran` VALUES (3, '50.001 - 100.000');
INSERT INTO `estimasi_pengeluaran` VALUES (4, '100.001 - 200.000');
INSERT INTO `estimasi_pengeluaran` VALUES (5, '200.001 - 300.000');
INSERT INTO `estimasi_pengeluaran` VALUES (6, '300.001 - 500.000');
INSERT INTO `estimasi_pengeluaran` VALUES (7, 'Lebih dari 500.000');

-- ----------------------------
-- Table structure for hasil_pencacahan
-- ----------------------------
DROP TABLE IF EXISTS `hasil_pencacahan`;
CREATE TABLE `hasil_pencacahan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of hasil_pencacahan
-- ----------------------------
INSERT INTO `hasil_pencacahan` VALUES (1, 'Terisi lengkap');
INSERT INTO `hasil_pencacahan` VALUES (2, 'Tidak ada ART / responden yang dapat memberi jawaban sampai akhir masa pencacahan');
INSERT INTO `hasil_pencacahan` VALUES (3, 'Rumah tangga tidak ditemukan');
INSERT INTO `hasil_pencacahan` VALUES (4, 'Responden menolak');
INSERT INTO `hasil_pencacahan` VALUES (5, 'Rumah tangga pindah / bangunan sudah tidak ada');
INSERT INTO `hasil_pencacahan` VALUES (6, 'Bagian dari rumah tangga di dokumen lain');

-- ----------------------------
-- Table structure for hewan_ternak
-- ----------------------------
DROP TABLE IF EXISTS `hewan_ternak`;
CREATE TABLE `hewan_ternak`  (
  `ternak_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NULL DEFAULT NULL,
  `sapi` int(11) NULL DEFAULT NULL,
  `kerbau` int(11) NULL DEFAULT NULL,
  `kuda` int(11) NULL DEFAULT NULL,
  `babi` int(11) NULL DEFAULT NULL,
  `kambing` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`ternak_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of hewan_ternak
-- ----------------------------

-- ----------------------------
-- Table structure for hubungan_keluarga
-- ----------------------------
DROP TABLE IF EXISTS `hubungan_keluarga`;
CREATE TABLE `hubungan_keluarga`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of hubungan_keluarga
-- ----------------------------
INSERT INTO `hubungan_keluarga` VALUES (1, 'Kepala keluarga');
INSERT INTO `hubungan_keluarga` VALUES (2, 'Istri / suami');
INSERT INTO `hubungan_keluarga` VALUES (3, 'Anak');
INSERT INTO `hubungan_keluarga` VALUES (4, 'Menantu');
INSERT INTO `hubungan_keluarga` VALUES (5, 'Cucu');
INSERT INTO `hubungan_keluarga` VALUES (6, 'Orang tua / mertua');
INSERT INTO `hubungan_keluarga` VALUES (7, 'Pembantu rumah tangga');
INSERT INTO `hubungan_keluarga` VALUES (8, 'Lainnya');

-- ----------------------------
-- Table structure for hubungan_rumah_tangga
-- ----------------------------
DROP TABLE IF EXISTS `hubungan_rumah_tangga`;
CREATE TABLE `hubungan_rumah_tangga`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of hubungan_rumah_tangga
-- ----------------------------
INSERT INTO `hubungan_rumah_tangga` VALUES (1, 'Kepala rumah tangga');
INSERT INTO `hubungan_rumah_tangga` VALUES (2, 'Istri / suami');
INSERT INTO `hubungan_rumah_tangga` VALUES (3, 'Anak');
INSERT INTO `hubungan_rumah_tangga` VALUES (4, 'Menantu');
INSERT INTO `hubungan_rumah_tangga` VALUES (5, 'Cucu');
INSERT INTO `hubungan_rumah_tangga` VALUES (6, 'Orang tua / mertua');
INSERT INTO `hubungan_rumah_tangga` VALUES (7, 'Pembantu rumah tangga');
INSERT INTO `hubungan_rumah_tangga` VALUES (8, 'Lainnya');

-- ----------------------------
-- Table structure for ijazah_terakhir
-- ----------------------------
DROP TABLE IF EXISTS `ijazah_terakhir`;
CREATE TABLE `ijazah_terakhir`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of ijazah_terakhir
-- ----------------------------
INSERT INTO `ijazah_terakhir` VALUES (1, 'Tidak punya ijazah');
INSERT INTO `ijazah_terakhir` VALUES (2, 'SD / sederajat');
INSERT INTO `ijazah_terakhir` VALUES (3, 'SMP / sederajat');
INSERT INTO `ijazah_terakhir` VALUES (4, 'SMA / sederajat');
INSERT INTO `ijazah_terakhir` VALUES (5, 'D1 / D2 / D3');
INSERT INTO `ijazah_terakhir` VALUES (6, 'D4 / S1');
INSERT INTO `ijazah_terakhir` VALUES (7, 'S2 / S3');

-- ----------------------------
-- Table structure for jabatan_pekerjaan
-- ----------------------------
DROP TABLE IF EXISTS `jabatan_pekerjaan`;
CREATE TABLE `jabatan_pekerjaan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jabatan_pekerjaan
-- ----------------------------
INSERT INTO `jabatan_pekerjaan` VALUES (1, 'Berusaha sendiri');
INSERT INTO `jabatan_pekerjaan` VALUES (2, 'Berusaha dibantu buruh tidak tetap / buruh tidak dibayar');
INSERT INTO `jabatan_pekerjaan` VALUES (3, 'Berusaha dibantu buruh tetap / buruh dibayar');
INSERT INTO `jabatan_pekerjaan` VALUES (4, 'Buruh / karyawan / pegawai swasta');
INSERT INTO `jabatan_pekerjaan` VALUES (5, 'PNS / TNI / Polri / BUMN / BUMD / anggota legislatif');
INSERT INTO `jabatan_pekerjaan` VALUES (6, 'Pekerja bebas pertanian');
INSERT INTO `jabatan_pekerjaan` VALUES (7, 'Pekerja bebas non-pertanian');
INSERT INTO `jabatan_pekerjaan` VALUES (8, 'Pekerja keluarga / tidak dibayar');

-- ----------------------------
-- Table structure for jenis_atap
-- ----------------------------
DROP TABLE IF EXISTS `jenis_atap`;
CREATE TABLE `jenis_atap`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jenis_atap
-- ----------------------------
INSERT INTO `jenis_atap` VALUES (1, 'Beton');
INSERT INTO `jenis_atap` VALUES (2, 'Genteng');
INSERT INTO `jenis_atap` VALUES (3, 'Seng');
INSERT INTO `jenis_atap` VALUES (4, 'Asbes');
INSERT INTO `jenis_atap` VALUES (5, 'Kayu / sirap');
INSERT INTO `jenis_atap` VALUES (6, 'Bambu');
INSERT INTO `jenis_atap` VALUES (7, 'Jerami / ijuk / daun-daunan / rumbia');
INSERT INTO `jenis_atap` VALUES (8, 'Lainnya');

-- ----------------------------
-- Table structure for jenis_bantuan
-- ----------------------------
DROP TABLE IF EXISTS `jenis_bantuan`;
CREATE TABLE `jenis_bantuan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jenis_bantuan
-- ----------------------------
INSERT INTO `jenis_bantuan` VALUES (1, 'Program Petani Mandiri');
INSERT INTO `jenis_bantuan` VALUES (2, 'Bantuan Langsung Tunai Daerah');
INSERT INTO `jenis_bantuan` VALUES (3, 'Universal Health Coverage');
INSERT INTO `jenis_bantuan` VALUES (4, 'Aladin / RLTH');
INSERT INTO `jenis_bantuan` VALUES (5, 'Program Keluarga Harapan');
INSERT INTO `jenis_bantuan` VALUES (6, 'Bantuan Sosial Tunai');
INSERT INTO `jenis_bantuan` VALUES (7, 'Kartu Pedagang Produktif');
INSERT INTO `jenis_bantuan` VALUES (8, 'Bantuan Langsung Tunai Dana Desa');
INSERT INTO `jenis_bantuan` VALUES (9, 'Bansos Asistensi Disabilitas');
INSERT INTO `jenis_bantuan` VALUES (10, 'Penyediaan Air Bersih');
INSERT INTO `jenis_bantuan` VALUES (11, 'Beasiswa');
INSERT INTO `jenis_bantuan` VALUES (12, 'Jatim Puspa');
INSERT INTO `jenis_bantuan` VALUES (13, 'Rantang Kasih Moe');
INSERT INTO `jenis_bantuan` VALUES (14, 'DAK Madrasah Aliyah');
INSERT INTO `jenis_bantuan` VALUES (15, 'Bansos Anak Yatim');
INSERT INTO `jenis_bantuan` VALUES (16, 'Pembangunan Jamban Sehat');
INSERT INTO `jenis_bantuan` VALUES (17, 'Bantuan Pangan Non Tunai Daerah');
INSERT INTO `jenis_bantuan` VALUES (18, 'Bantuan Pangan Non Tunai Pusat');
INSERT INTO `jenis_bantuan` VALUES (19, 'Santunan Duka');
INSERT INTO `jenis_bantuan` VALUES (20, 'Bantuan Orang Sakit Menahun');

-- ----------------------------
-- Table structure for jenis_dinding
-- ----------------------------
DROP TABLE IF EXISTS `jenis_dinding`;
CREATE TABLE `jenis_dinding`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jenis_dinding
-- ----------------------------
INSERT INTO `jenis_dinding` VALUES (1, 'Tembok');
INSERT INTO `jenis_dinding` VALUES (2, 'Plesteran anyaman bambu / kawat');
INSERT INTO `jenis_dinding` VALUES (3, 'Kayu / papan');
INSERT INTO `jenis_dinding` VALUES (4, 'Anyaman bambu');
INSERT INTO `jenis_dinding` VALUES (5, 'Batang kayu');
INSERT INTO `jenis_dinding` VALUES (6, 'Bambu');
INSERT INTO `jenis_dinding` VALUES (7, 'Lainnya');

-- ----------------------------
-- Table structure for jenis_disabilitas
-- ----------------------------
DROP TABLE IF EXISTS `jenis_disabilitas`;
CREATE TABLE `jenis_disabilitas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jenis_disabilitas
-- ----------------------------
INSERT INTO `jenis_disabilitas` VALUES (1, 'Penyandang Disabilitas Fisik');
INSERT INTO `jenis_disabilitas` VALUES (2, 'Penyandang Disabilitas Netra');
INSERT INTO `jenis_disabilitas` VALUES (3, 'Penyandang Disabilitas Rungu');
INSERT INTO `jenis_disabilitas` VALUES (4, 'Penyandang Disabilitas Wicara');
INSERT INTO `jenis_disabilitas` VALUES (5, 'Penyandang Disabilitas Rungu dan Wicara');
INSERT INTO `jenis_disabilitas` VALUES (6, 'Penyandang Disabilitas Netra dan Fisik');
INSERT INTO `jenis_disabilitas` VALUES (7, 'Penyandang Disabilitas Netra, Rungu dan Wicara');
INSERT INTO `jenis_disabilitas` VALUES (8, 'Penyandang Disabilitas Rungu, Wicara dan Fisik');
INSERT INTO `jenis_disabilitas` VALUES (9, 'Penyandang Disabilitas Rungu, Wicara, Netra dan Fisik');
INSERT INTO `jenis_disabilitas` VALUES (10, 'Penyandang Disabilitas Intelektual');
INSERT INTO `jenis_disabilitas` VALUES (11, 'Penyandang Disabilitas Mental (OMK dan CDK)');
INSERT INTO `jenis_disabilitas` VALUES (12, 'Penyandang Disabilitas Ganda / Multi');
INSERT INTO `jenis_disabilitas` VALUES (13, 'Non Penyandang Disabilitas');

-- ----------------------------
-- Table structure for jenis_lantai
-- ----------------------------
DROP TABLE IF EXISTS `jenis_lantai`;
CREATE TABLE `jenis_lantai`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jenis_lantai
-- ----------------------------
INSERT INTO `jenis_lantai` VALUES (1, 'Marmer / granit');
INSERT INTO `jenis_lantai` VALUES (2, 'Keramik');
INSERT INTO `jenis_lantai` VALUES (3, 'Parket / vinil / karpet');
INSERT INTO `jenis_lantai` VALUES (4, 'Ubin / tegel / teraso');
INSERT INTO `jenis_lantai` VALUES (5, 'Kayu / papan');
INSERT INTO `jenis_lantai` VALUES (6, 'Semen / bata merah');
INSERT INTO `jenis_lantai` VALUES (7, 'Bambu');
INSERT INTO `jenis_lantai` VALUES (8, 'Tanah');
INSERT INTO `jenis_lantai` VALUES (9, 'Lainnya');

-- ----------------------------
-- Table structure for jenis_toilet
-- ----------------------------
DROP TABLE IF EXISTS `jenis_toilet`;
CREATE TABLE `jenis_toilet`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jenis_toilet
-- ----------------------------
INSERT INTO `jenis_toilet` VALUES (1, 'Leher angsa');
INSERT INTO `jenis_toilet` VALUES (2, 'Plengsengan dengan tutup');
INSERT INTO `jenis_toilet` VALUES (3, 'Plengsengan tanpa tutup');
INSERT INTO `jenis_toilet` VALUES (4, 'Cemplung / cubluk');

-- ----------------------------
-- Table structure for jenis_usaha_dimiliki
-- ----------------------------
DROP TABLE IF EXISTS `jenis_usaha_dimiliki`;
CREATE TABLE `jenis_usaha_dimiliki`  (
  `jenis_usaha_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NULL DEFAULT NULL,
  `keterangan_sosial_ekonomi_id` int(11) NULL DEFAULT NULL,
  `jumlah_pekerja_dibayar` int(11) NULL DEFAULT NULL,
  `jumlah_pekerja_tidak_dibayar` int(11) NULL DEFAULT NULL,
  `registrasi_usaha` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `omset_usaha_perbulan` char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`jenis_usaha_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jenis_usaha_dimiliki
-- ----------------------------

-- ----------------------------
-- Table structure for jenjang_pendidikan
-- ----------------------------
DROP TABLE IF EXISTS `jenjang_pendidikan`;
CREATE TABLE `jenjang_pendidikan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jenjang_pendidikan
-- ----------------------------
INSERT INTO `jenjang_pendidikan` VALUES (1, 'SD / SDLB');
INSERT INTO `jenjang_pendidikan` VALUES (2, 'Paket A');
INSERT INTO `jenjang_pendidikan` VALUES (3, 'Madrasah Ibtidaiyah');
INSERT INTO `jenjang_pendidikan` VALUES (4, 'SMP / SMPLB');
INSERT INTO `jenjang_pendidikan` VALUES (5, 'Paket B');
INSERT INTO `jenjang_pendidikan` VALUES (6, 'Madrasah Tsanawiyah');
INSERT INTO `jenjang_pendidikan` VALUES (7, 'SMA / SMK / SMALB');
INSERT INTO `jenjang_pendidikan` VALUES (8, 'Paket C');
INSERT INTO `jenjang_pendidikan` VALUES (9, 'Madrasah Aliyah');
INSERT INTO `jenjang_pendidikan` VALUES (10, 'Perguruan Tinggi');

-- ----------------------------
-- Table structure for kondisi_atap
-- ----------------------------
DROP TABLE IF EXISTS `kondisi_atap`;
CREATE TABLE `kondisi_atap`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of kondisi_atap
-- ----------------------------
INSERT INTO `kondisi_atap` VALUES (1, 'Bagus / kualitas tinggi');
INSERT INTO `kondisi_atap` VALUES (2, 'Jelek / kualitas rendah');

-- ----------------------------
-- Table structure for kondisi_dinding
-- ----------------------------
DROP TABLE IF EXISTS `kondisi_dinding`;
CREATE TABLE `kondisi_dinding`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of kondisi_dinding
-- ----------------------------
INSERT INTO `kondisi_dinding` VALUES (1, 'Bagus / kualitas tinggi');
INSERT INTO `kondisi_dinding` VALUES (2, 'Jelek / kualitas rendah');

-- ----------------------------
-- Table structure for lapangan_usaha
-- ----------------------------
DROP TABLE IF EXISTS `lapangan_usaha`;
CREATE TABLE `lapangan_usaha`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of lapangan_usaha
-- ----------------------------
INSERT INTO `lapangan_usaha` VALUES (1, 'Pertanian tanaman padi dan palawija');
INSERT INTO `lapangan_usaha` VALUES (2, 'Hortikultura');
INSERT INTO `lapangan_usaha` VALUES (3, 'Perkebunan');
INSERT INTO `lapangan_usaha` VALUES (4, 'Perikanan Tangkap');
INSERT INTO `lapangan_usaha` VALUES (5, 'Perikanan Budidaya');
INSERT INTO `lapangan_usaha` VALUES (6, 'Peternakan');
INSERT INTO `lapangan_usaha` VALUES (7, 'Kehutanan dan pertanian lainnya');
INSERT INTO `lapangan_usaha` VALUES (8, 'Pertambangan / penggalian');
INSERT INTO `lapangan_usaha` VALUES (9, 'Industri pengolahan');
INSERT INTO `lapangan_usaha` VALUES (10, 'Ketenagalistrikan');
INSERT INTO `lapangan_usaha` VALUES (11, 'Bangunan / Konstruksi');
INSERT INTO `lapangan_usaha` VALUES (12, 'Perdagangan');
INSERT INTO `lapangan_usaha` VALUES (13, 'Hotel dan rumah makan');
INSERT INTO `lapangan_usaha` VALUES (14, 'Transportasi dan pergudangan');
INSERT INTO `lapangan_usaha` VALUES (15, 'Angkutan ojek motor / online');
INSERT INTO `lapangan_usaha` VALUES (16, 'Informasi dan komunikasi');
INSERT INTO `lapangan_usaha` VALUES (17, 'Keuangan dan asuransi');
INSERT INTO `lapangan_usaha` VALUES (18, 'Jasa pendidikan');
INSERT INTO `lapangan_usaha` VALUES (19, 'Jasa kesehatan');
INSERT INTO `lapangan_usaha` VALUES (20, 'Jasa kemasyarakatan, pemerintahan dan perorangan');
INSERT INTO `lapangan_usaha` VALUES (21, 'Pemulung');
INSERT INTO `lapangan_usaha` VALUES (22, 'Lainnya');

-- ----------------------------
-- Table structure for main_aset
-- ----------------------------
DROP TABLE IF EXISTS `main_aset`;
CREATE TABLE `main_aset`  (
  `ab_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NULL DEFAULT NULL,
  `tabung_gas_3kg` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tabung_gas_5kg` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tabung_gas_12kg` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kulkas` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pemanas_air` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telepon` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `televisi_flat` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `perhiasan_10gr` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rekening_bank` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `komputer_laptop` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sepeda_motor` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mobil` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `perahu` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `perahu_motor` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lahan` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lahan_luas` decimal(11, 3) NULL DEFAULT NULL,
  `rumah_lain` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sapi` int(11) NULL DEFAULT NULL,
  `kerbau` int(11) NULL DEFAULT NULL,
  `kuda` int(11) NULL DEFAULT NULL,
  `kambing` int(11) NULL DEFAULT NULL,
  `kelinci` int(11) NULL DEFAULT NULL,
  `unggas` int(11) NULL DEFAULT NULL,
  `perikanan` int(11) NULL DEFAULT NULL,
  `memiliki_usaha` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `estimasi_pengeluaran` int(11) NULL DEFAULT NULL,
  `estimasi_pengeluaran_non_makanan` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`ab_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of main_aset
-- ----------------------------
INSERT INTO `main_aset` VALUES (5, 8, 'Tidak', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Ya', 2500.000, 'Tidak', 4, 0, 0, 2, NULL, NULL, NULL, 'Ya', 5, NULL);
INSERT INTO `main_aset` VALUES (6, 10, 'Ya', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Ya', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', NULL, 'Ya', 0, 0, 0, 0, 0, 10, 0, 'Ya', 5, 6);

-- ----------------------------
-- Table structure for main_foto_lokasi
-- ----------------------------
DROP TABLE IF EXISTS `main_foto_lokasi`;
CREATE TABLE `main_foto_lokasi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NULL DEFAULT NULL,
  `foto1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `foto2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `foto3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `foto4` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `latitude` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `longitude` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of main_foto_lokasi
-- ----------------------------
INSERT INTO `main_foto_lokasi` VALUES (5, 8, '220314054600540306057.png', '2203140546005403060571.png', '220314054600540306057.jpg', '2203140546005403060572.png', '-7.160959603708158', '111.86582246745022');
INSERT INTO `main_foto_lokasi` VALUES (6, 10, '', '', '', '', '1', '2');

-- ----------------------------
-- Table structure for main_jenis_bantuan
-- ----------------------------
DROP TABLE IF EXISTS `main_jenis_bantuan`;
CREATE TABLE `main_jenis_bantuan`  (
  `mjb_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NULL DEFAULT NULL,
  `jenis_bantuan_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`mjb_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of main_jenis_bantuan
-- ----------------------------
INSERT INTO `main_jenis_bantuan` VALUES (6, 8, 1);
INSERT INTO `main_jenis_bantuan` VALUES (7, 8, 5);
INSERT INTO `main_jenis_bantuan` VALUES (8, 8, 11);
INSERT INTO `main_jenis_bantuan` VALUES (9, 8, 15);
INSERT INTO `main_jenis_bantuan` VALUES (10, 8, 17);

-- ----------------------------
-- Table structure for main_keterangan_perumahan
-- ----------------------------
DROP TABLE IF EXISTS `main_keterangan_perumahan`;
CREATE TABLE `main_keterangan_perumahan`  (
  `kp_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NULL DEFAULT NULL,
  `status_bangunan_1a` int(11) NULL DEFAULT NULL,
  `status_lahan_1b` int(11) NULL DEFAULT NULL,
  `luas_lantai_2` decimal(11, 3) NULL DEFAULT NULL,
  `jenis_lantai_3` int(11) NULL DEFAULT NULL,
  `jenis_dinding_4a` int(11) NULL DEFAULT NULL,
  `kondisi_dinding_4b` int(11) NULL DEFAULT NULL,
  `jenis_atap_5a` int(11) NULL DEFAULT NULL,
  `kondisi_atap_5b` int(11) NULL DEFAULT NULL,
  `jumlah_kamar_6` int(11) NULL DEFAULT NULL,
  `sumber_airminum_7` int(11) NULL DEFAULT NULL,
  `cara_memperoleh_airminum_8` int(11) NULL DEFAULT NULL,
  `sumber_listrik_9a` int(11) NULL DEFAULT NULL,
  `daya_listrik_9b` int(11) NULL DEFAULT NULL,
  `id_pelanggan_9c` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `energi_untuk_memasak_10` int(11) NULL DEFAULT NULL,
  `status_toilet_11a` int(11) NULL DEFAULT NULL,
  `jenis_toilet_11b` int(11) NULL DEFAULT NULL,
  `tpa_12` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`kp_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of main_keterangan_perumahan
-- ----------------------------
INSERT INTO `main_keterangan_perumahan` VALUES (4, 8, 1, 1, 2500.000, 1, 1, 1, 1, 1, 4, 1, 2, 1, 3, '085608560856', 2, 1, 2, 1);
INSERT INTO `main_keterangan_perumahan` VALUES (5, 10, 4, NULL, 1400.000, 1, 1, 1, 1, 1, 3, 1, 2, 2, NULL, '', 4, 1, 2, 1);
INSERT INTO `main_keterangan_perumahan` VALUES (6, 11, 2, NULL, 1300.000, 2, 1, 1, 2, 1, 3, 2, 2, 2, NULL, '', 4, 1, 3, 1);

-- ----------------------------
-- Table structure for main_keterangan_petugas_dan_responden
-- ----------------------------
DROP TABLE IF EXISTS `main_keterangan_petugas_dan_responden`;
CREATE TABLE `main_keterangan_petugas_dan_responden`  (
  `kpdr_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NULL DEFAULT NULL,
  `tanggal_pencacahan` datetime(0) NULL DEFAULT NULL,
  `nama_pencacah` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_pencacah` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_pemeriksaan` datetime(0) NULL DEFAULT NULL,
  `nama_pemeriksa` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_pemeriksa` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hasil_pencacahan` int(11) NULL DEFAULT NULL,
  `bagian_no_ruta` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kpdr_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of main_keterangan_petugas_dan_responden
-- ----------------------------
INSERT INTO `main_keterangan_petugas_dan_responden` VALUES (12, 8, '2022-03-08 00:00:00', 'Harry Kane', '010', '2022-03-10 00:00:00', 'Son Heung Min', '007', 1, '0');
INSERT INTO `main_keterangan_petugas_dan_responden` VALUES (14, 10, '2022-03-14 00:00:00', 'Harry Kane', NULL, '2022-03-15 00:00:00', 'Son Heung Min', NULL, 1, NULL);
INSERT INTO `main_keterangan_petugas_dan_responden` VALUES (15, 11, '2022-03-01 00:00:00', 'Harry Kane', NULL, '2022-03-03 00:00:00', 'Son Heung Min', NULL, 1, NULL);

-- ----------------------------
-- Table structure for main_keterangan_sosial_ekonomi
-- ----------------------------
DROP TABLE IF EXISTS `main_keterangan_sosial_ekonomi`;
CREATE TABLE `main_keterangan_sosial_ekonomi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NULL DEFAULT NULL,
  `no_urut_keluarga` int(11) NULL DEFAULT NULL,
  `nik_anggota` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_anggota` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hubungan_rumah_tangga_id` int(11) NULL DEFAULT NULL,
  `hubungan_keluarga_id` int(11) NULL DEFAULT NULL,
  `jenis_kelamin` int(11) NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `umur` int(11) NULL DEFAULT NULL,
  `status_perkawinan_id` int(11) NULL DEFAULT NULL,
  `status_kehamilan` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `penyakit_kronis_id` int(11) NULL DEFAULT NULL,
  `jenis_disabilitas_id` int(11) NULL DEFAULT NULL,
  `apakah_perokok_id` int(11) NULL DEFAULT NULL,
  `partisipasi_sekolah_id` int(11) NULL DEFAULT NULL,
  `jenjang_pendidikan_id` int(11) NULL DEFAULT NULL,
  `kelas_tertinggi` char(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ijazah_terakhir_id` int(11) NULL DEFAULT NULL,
  `status_bekerja` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lapangan_usaha_id` int(11) NULL DEFAULT NULL,
  `jabatan_pekerjaan_id` int(11) NULL DEFAULT NULL,
  `status_anggota_ruta_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of main_keterangan_sosial_ekonomi
-- ----------------------------
INSERT INTO `main_keterangan_sosial_ekonomi` VALUES (33, 8, 1, '3522221011900003', 'Toby Alderweireld', NULL, 1, 1, '1990-11-10', 32, 2, NULL, 12, 13, 3, 2, 10, '10', 6, 'Ya', 18, 5, 1);
INSERT INTO `main_keterangan_sosial_ekonomi` VALUES (34, 8, 2, '3522221011900002', 'Toby Alderweireld', NULL, 1, 1, '1990-11-10', 32, 2, NULL, 12, 13, 3, 2, 10, '10', 6, 'Ya', 0, 0, 1);
INSERT INTO `main_keterangan_sosial_ekonomi` VALUES (35, 10, 1, '3522151011900001', 'C. Eriksen', NULL, 1, 1, '1990-11-10', 32, 2, NULL, 12, 13, 3, 2, 10, '10', 6, 'Ya', 13, 1, 1);

-- ----------------------------
-- Table structure for main_pengenalan_tempat
-- ----------------------------
DROP TABLE IF EXISTS `main_pengenalan_tempat`;
CREATE TABLE `main_pengenalan_tempat`  (
  `main_id` int(11) NOT NULL AUTO_INCREMENT,
  `provinsi_id` int(11) NULL DEFAULT NULL,
  `kabupaten_id` int(11) NULL DEFAULT NULL,
  `kecamatan_id` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `desa_id` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rt` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rw` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dusun` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_urut_ruta` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_krt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_kk_krt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jumlah_art` int(11) NULL DEFAULT NULL,
  `jumlah_keluarga` int(11) NULL DEFAULT NULL,
  `relasi_no_kk` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_by` int(11) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`main_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of main_pengenalan_tempat
-- ----------------------------
INSERT INTO `main_pengenalan_tempat` VALUES (8, 35, 22, '352209', '3522092008', '005', '001', '-', 'Jl. Gotong Royong No. 5', '11111', 'Toby Alderweireld', '3522221011900003', 4, 1, NULL, 1, '2022-03-14 16:47:13', NULL, NULL);
INSERT INTO `main_pengenalan_tempat` VALUES (10, 35, 22, '352212', '3522122017', '003', '001', '', 'Gang Sempit Nomor Buncit', NULL, 'C. Eriksen', '3522151011900002', 4, NULL, '', 1, '2022-03-17 14:30:10', NULL, NULL);
INSERT INTO `main_pengenalan_tempat` VALUES (11, 35, 22, '352211', '3522112006', '001', '001', '', 'Gang Lebar', NULL, 'Hugo Lloris', '3522221011900001', 3, NULL, '', 1, '2022-03-18 08:31:17', NULL, NULL);

-- ----------------------------
-- Table structure for main_pengenalan_tempat_detail
-- ----------------------------
DROP TABLE IF EXISTS `main_pengenalan_tempat_detail`;
CREATE TABLE `main_pengenalan_tempat_detail`  (
  `ptd_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NULL DEFAULT NULL,
  `no_kk_id` int(11) NULL DEFAULT NULL,
  `no_kk` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ptd_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of main_pengenalan_tempat_detail
-- ----------------------------

-- ----------------------------
-- Table structure for main_usaha_dimiliki
-- ----------------------------
DROP TABLE IF EXISTS `main_usaha_dimiliki`;
CREATE TABLE `main_usaha_dimiliki`  (
  `usaha_id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NULL DEFAULT NULL,
  `nama_id` int(11) NULL DEFAULT NULL,
  `lapangan_usaha_id` int(11) NULL DEFAULT NULL,
  `pegawai_dibayar` int(11) NULL DEFAULT NULL,
  `pegawai_tidak_dibayar` int(11) NULL DEFAULT NULL,
  `registrasi_usaha` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `omset_perbulan` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`usaha_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of main_usaha_dimiliki
-- ----------------------------
INSERT INTO `main_usaha_dimiliki` VALUES (2, 8, 33, 18, 0, 0, 'Tidak', 0);
INSERT INTO `main_usaha_dimiliki` VALUES (3, 10, 35, 13, 5, 0, 'Ya', 10000000);

-- ----------------------------
-- Table structure for partisipasi_sekolah
-- ----------------------------
DROP TABLE IF EXISTS `partisipasi_sekolah`;
CREATE TABLE `partisipasi_sekolah`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of partisipasi_sekolah
-- ----------------------------
INSERT INTO `partisipasi_sekolah` VALUES (1, 'Masih sekolah');
INSERT INTO `partisipasi_sekolah` VALUES (2, 'Tidak bersekolah lagi');
INSERT INTO `partisipasi_sekolah` VALUES (3, 'Tidak / belum pernah sekolah');

-- ----------------------------
-- Table structure for penyakit_kronis
-- ----------------------------
DROP TABLE IF EXISTS `penyakit_kronis`;
CREATE TABLE `penyakit_kronis`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of penyakit_kronis
-- ----------------------------
INSERT INTO `penyakit_kronis` VALUES (1, 'Hipertensi (tekanan darah tinggi)');
INSERT INTO `penyakit_kronis` VALUES (2, 'Rematik');
INSERT INTO `penyakit_kronis` VALUES (3, 'Asma');
INSERT INTO `penyakit_kronis` VALUES (4, 'Masalah jantung');
INSERT INTO `penyakit_kronis` VALUES (5, 'Diabetes (kencing manis)');
INSERT INTO `penyakit_kronis` VALUES (6, 'Tuberculosis (TBC)');
INSERT INTO `penyakit_kronis` VALUES (7, 'Stroke');
INSERT INTO `penyakit_kronis` VALUES (8, 'Kanker atau tumor ganas');
INSERT INTO `penyakit_kronis` VALUES (9, 'Gagal ginjal');
INSERT INTO `penyakit_kronis` VALUES (10, 'Lainnya (paru-paru flek dsb)');
INSERT INTO `penyakit_kronis` VALUES (11, 'Covid-19');
INSERT INTO `penyakit_kronis` VALUES (12, 'Tidak ada');

-- ----------------------------
-- Table structure for ref_desa
-- ----------------------------
DROP TABLE IF EXISTS `ref_desa`;
CREATE TABLE `ref_desa`  (
  `id` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_kecamatan` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_desa` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  INDEX `INDEX`(`id_kecamatan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of ref_desa
-- ----------------------------
INSERT INTO `ref_desa` VALUES ('3522151014', '352215', 'Kelurahan', 'Banjarejo');
INSERT INTO `ref_desa` VALUES ('3522152015', '352215', 'Desa', 'Campurjo');
INSERT INTO `ref_desa` VALUES ('3522151001', '352215', 'Kelurahan', 'Jetak');
INSERT INTO `ref_desa` VALUES ('3522151011', '352215', 'Kelurahan', 'Kadipaten');
INSERT INTO `ref_desa` VALUES ('3522152017', '352215', 'Desa', 'Kalirejo');
INSERT INTO `ref_desa` VALUES ('3522151013', '352215', 'Kelurahan', 'Karang Pacar');
INSERT INTO `ref_desa` VALUES ('3522152008', '352215', 'Desa', 'Kauman');
INSERT INTO `ref_desa` VALUES ('3522151005', '352215', 'Kelurahan', 'Kepatihan');
INSERT INTO `ref_desa` VALUES ('3522151007', '352215', 'Kelurahan', 'Klangon');
INSERT INTO `ref_desa` VALUES ('3522151009', '352215', 'Kelurahan', 'Ledok Kulon');
INSERT INTO `ref_desa` VALUES ('3522151010', '352215', 'Kelurahan', 'Ledok Wetan');
INSERT INTO `ref_desa` VALUES ('3522151004', '352215', 'Kelurahan', 'Mojo Kampung');
INSERT INTO `ref_desa` VALUES ('3522152016', '352215', 'Desa', 'Mulyoagung');
INSERT INTO `ref_desa` VALUES ('3522151012', '352215', 'Kelurahan', 'Ngrowo');
INSERT INTO `ref_desa` VALUES ('3522152002', '352215', 'Desa', 'Pacul');
INSERT INTO `ref_desa` VALUES ('3522152018', '352215', 'Desa', 'Semanding');
INSERT INTO `ref_desa` VALUES ('3522152003', '352215', 'Desa', 'Sukorejo');
INSERT INTO `ref_desa` VALUES ('3522151006', '352215', 'Kelurahan', 'Sumbang');
INSERT INTO `ref_desa` VALUES ('3522132013', '352213', 'Desa', 'Balenrejo');
INSERT INTO `ref_desa` VALUES ('3522132006', '352213', 'Desa', 'Bulaklo');
INSERT INTO `ref_desa` VALUES ('3522132007', '352213', 'Desa', 'Bulu');
INSERT INTO `ref_desa` VALUES ('3522132010', '352213', 'Desa', 'Kabunan');
INSERT INTO `ref_desa` VALUES ('3522132020', '352213', 'Desa', 'Kedungbondo');
INSERT INTO `ref_desa` VALUES ('3522132019', '352213', 'Desa', 'Kedungdowo');
INSERT INTO `ref_desa` VALUES ('3522132008', '352213', 'Desa', 'Kemamang');
INSERT INTO `ref_desa` VALUES ('3522132003', '352213', 'Desa', 'Kenep');
INSERT INTO `ref_desa` VALUES ('3522132015', '352213', 'Desa', 'Lengkong');
INSERT INTO `ref_desa` VALUES ('3522132014', '352213', 'Desa', 'Margomulyo');
INSERT INTO `ref_desa` VALUES ('3522132002', '352213', 'Desa', 'Mayangkawis');
INSERT INTO `ref_desa` VALUES ('3522132016', '352213', 'Desa', 'Mulyoagung');
INSERT INTO `ref_desa` VALUES ('3522132023', '352213', 'Desa', 'Mulyorejo');
INSERT INTO `ref_desa` VALUES ('3522132009', '352213', 'Desa', 'Ngadiluhur');
INSERT INTO `ref_desa` VALUES ('3522132005', '352213', 'Desa', 'Penganten');
INSERT INTO `ref_desa` VALUES ('3522132021', '352213', 'Desa', 'Pilang Gede');
INSERT INTO `ref_desa` VALUES ('3522132004', '352213', 'Desa', 'Poh Bogo');
INSERT INTO `ref_desa` VALUES ('3522132018', '352213', 'Desa', 'Prambatan');
INSERT INTO `ref_desa` VALUES ('3522132022', '352213', 'Desa', 'Sarirejo');
INSERT INTO `ref_desa` VALUES ('3522132017', '352213', 'Desa', 'Sekaran');
INSERT INTO `ref_desa` VALUES ('3522132001', '352213', 'Desa', 'Sidobandung');
INSERT INTO `ref_desa` VALUES ('3522132011', '352213', 'Desa', 'Sobontoro');
INSERT INTO `ref_desa` VALUES ('3522132012', '352213', 'Desa', 'Suwaloh');
INSERT INTO `ref_desa` VALUES ('3522102020', '352210', 'Desa', 'Banjaran');
INSERT INTO `ref_desa` VALUES ('3522102002', '352210', 'Desa', 'Banjaranyar');
INSERT INTO `ref_desa` VALUES ('3522102006', '352210', 'Desa', 'Baureno');
INSERT INTO `ref_desa` VALUES ('3522102005', '352210', 'Desa', 'Blongsong');
INSERT INTO `ref_desa` VALUES ('3522102016', '352210', 'Desa', 'Bumiayu');
INSERT INTO `ref_desa` VALUES ('3522102001', '352210', 'Desa', 'Drajat');
INSERT INTO `ref_desa` VALUES ('3522102012', '352210', 'Desa', 'Gajah');
INSERT INTO `ref_desa` VALUES ('3522102015', '352210', 'Desa', 'Gunungsari');
INSERT INTO `ref_desa` VALUES ('3522102024', '352210', 'Desa', 'Kadungrejo');
INSERT INTO `ref_desa` VALUES ('3522102013', '352210', 'Desa', 'Kalisari');
INSERT INTO `ref_desa` VALUES ('3522102018', '352210', 'Desa', 'Karangdayu');
INSERT INTO `ref_desa` VALUES ('3522102017', '352210', 'Desa', 'Kauman');
INSERT INTO `ref_desa` VALUES ('3522102025', '352210', 'Desa', 'Lebaksari');
INSERT INTO `ref_desa` VALUES ('3522102003', '352210', 'Desa', 'Ngemplak');
INSERT INTO `ref_desa` VALUES ('3522102019', '352210', 'Desa', 'Pasinan');
INSERT INTO `ref_desa` VALUES ('3522102022', '352210', 'Desa', 'Pomahan');
INSERT INTO `ref_desa` VALUES ('3522102023', '352210', 'Desa', 'Pucangarum');
INSERT INTO `ref_desa` VALUES ('3522102009', '352210', 'Desa', 'Selorejo');
INSERT INTO `ref_desa` VALUES ('3522102021', '352210', 'Desa', 'Sembunglor');
INSERT INTO `ref_desa` VALUES ('3522102004', '352210', 'Desa', 'Sraturejo');
INSERT INTO `ref_desa` VALUES ('3522102011', '352210', 'Desa', 'Sumuragung');
INSERT INTO `ref_desa` VALUES ('3522102014', '352210', 'Desa', 'Tanggungan');
INSERT INTO `ref_desa` VALUES ('3522102010', '352210', 'Desa', 'Tlogoagung');
INSERT INTO `ref_desa` VALUES ('3522102007', '352210', 'Desa', 'Trojalu');
INSERT INTO `ref_desa` VALUES ('3522102008', '352210', 'Desa', 'Tulungagung');
INSERT INTO `ref_desa` VALUES ('3522052001', '352205', 'Desa', 'Bubulan');
INSERT INTO `ref_desa` VALUES ('3522052002', '352205', 'Desa', 'Cancung');
INSERT INTO `ref_desa` VALUES ('3522052003', '352205', 'Desa', 'Clebung');
INSERT INTO `ref_desa` VALUES ('3522052005', '352205', 'Desa', 'Ngorogunung');
INSERT INTO `ref_desa` VALUES ('3522052004', '352205', 'Desa', 'Sumber Bendo');
INSERT INTO `ref_desa` VALUES ('3522062002', '352206', 'Desa', 'Dander');
INSERT INTO `ref_desa` VALUES ('3522062003', '352206', 'Desa', 'Growok');
INSERT INTO `ref_desa` VALUES ('3522062006', '352206', 'Desa', 'Jatiblimbing');
INSERT INTO `ref_desa` VALUES ('3522062010', '352206', 'Desa', 'Karangsono');
INSERT INTO `ref_desa` VALUES ('3522062005', '352206', 'Desa', 'Kunci');
INSERT INTO `ref_desa` VALUES ('3522062008', '352206', 'Desa', 'Mojoranu');
INSERT INTO `ref_desa` VALUES ('3522062016', '352206', 'Desa', 'Ngablak');
INSERT INTO `ref_desa` VALUES ('3522062007', '352206', 'Desa', 'Ngraseh');
INSERT INTO `ref_desa` VALUES ('3522062015', '352206', 'Desa', 'Ngulanan');
INSERT INTO `ref_desa` VALUES ('3522062013', '352206', 'Desa', 'Ngumpak Dalem');
INSERT INTO `ref_desa` VALUES ('3522062001', '352206', 'Desa', 'Ngunut');
INSERT INTO `ref_desa` VALUES ('3522062009', '352206', 'Desa', 'Sendangrejo');
INSERT INTO `ref_desa` VALUES ('3522062011', '352206', 'Desa', 'Sumber Agung');
INSERT INTO `ref_desa` VALUES ('3522062004', '352206', 'Desa', 'Sumber Arum');
INSERT INTO `ref_desa` VALUES ('3522062014', '352206', 'Desa', 'Sumber Tlaseh');
INSERT INTO `ref_desa` VALUES ('3522062012', '352206', 'Desa', 'Sumodikaran');
INSERT INTO `ref_desa` VALUES ('3522282002', '352228', 'Desa', 'Begadon');
INSERT INTO `ref_desa` VALUES ('3522282007', '352228', 'Desa', 'Beged');
INSERT INTO `ref_desa` VALUES ('3522282006', '352228', 'Desa', 'Bonorejo');
INSERT INTO `ref_desa` VALUES ('3522282005', '352228', 'Desa', 'Brabowan');
INSERT INTO `ref_desa` VALUES ('3522282011', '352228', 'Desa', 'Cengungklung');
INSERT INTO `ref_desa` VALUES ('3522282001', '352228', 'Desa', 'Gayam');
INSERT INTO `ref_desa` VALUES ('3522282008', '352228', 'Desa', 'Katur');
INSERT INTO `ref_desa` VALUES ('3522282012', '352228', 'Desa', 'Manukan');
INSERT INTO `ref_desa` VALUES ('3522282004', '352228', 'Desa', 'Mojodelik');
INSERT INTO `ref_desa` VALUES ('3522282009', '352228', 'Desa', 'Ngraho');
INSERT INTO `ref_desa` VALUES ('3522282003', '352228', 'Desa', 'Ringintunggal');
INSERT INTO `ref_desa` VALUES ('3522282010', '352228', 'Desa', 'Sudu');
INSERT INTO `ref_desa` VALUES ('3522262001', '352226', 'Desa', 'Gondang');
INSERT INTO `ref_desa` VALUES ('3522262002', '352226', 'Desa', 'Jari');
INSERT INTO `ref_desa` VALUES ('3522262005', '352226', 'Desa', 'Krondonan');
INSERT INTO `ref_desa` VALUES ('3522262004', '352226', 'Desa', 'Pajeng');
INSERT INTO `ref_desa` VALUES ('3522262007', '352226', 'Desa', 'Pragelan');
INSERT INTO `ref_desa` VALUES ('3522262003', '352226', 'Desa', 'Sambongrejo');
INSERT INTO `ref_desa` VALUES ('3522262006', '352226', 'Desa', 'Senganten');
INSERT INTO `ref_desa` VALUES ('3522162010', '352216', 'Desa', 'Brenggolo');
INSERT INTO `ref_desa` VALUES ('3522162011', '352216', 'Desa', 'Grebegan');
INSERT INTO `ref_desa` VALUES ('3522162006', '352216', 'Desa', 'Kalitidu');
INSERT INTO `ref_desa` VALUES ('3522162020', '352216', 'Desa', 'Leran');
INSERT INTO `ref_desa` VALUES ('3522162014', '352216', 'Desa', 'Mayanggeneng');
INSERT INTO `ref_desa` VALUES ('3522162015', '352216', 'Desa', 'Mayangrejo');
INSERT INTO `ref_desa` VALUES ('3522162008', '352216', 'Desa', 'Mlaten');
INSERT INTO `ref_desa` VALUES ('3522162023', '352216', 'Desa', 'Mojo');
INSERT INTO `ref_desa` VALUES ('3522162017', '352216', 'Desa', 'Mojosari');
INSERT INTO `ref_desa` VALUES ('3522162022', '352216', 'Desa', 'Ngringinrejo');
INSERT INTO `ref_desa` VALUES ('3522162019', '352216', 'Desa', 'Ngujo');
INSERT INTO `ref_desa` VALUES ('3522162013', '352216', 'Desa', 'Panjunan');
INSERT INTO `ref_desa` VALUES ('3522162016', '352216', 'Desa', 'Pilangsari');
INSERT INTO `ref_desa` VALUES ('3522162018', '352216', 'Desa', 'Pungpungan');
INSERT INTO `ref_desa` VALUES ('3522162021', '352216', 'Desa', 'Sukoharjo');
INSERT INTO `ref_desa` VALUES ('3522162007', '352216', 'Desa', 'Sumengko');
INSERT INTO `ref_desa` VALUES ('3522162009', '352216', 'Desa', 'Talok');
INSERT INTO `ref_desa` VALUES ('3522162012', '352216', 'Desa', 'Wotan Ngare');
INSERT INTO `ref_desa` VALUES ('3522112023', '352211', 'Desa', 'Bakung');
INSERT INTO `ref_desa` VALUES ('3522112022', '352211', 'Desa', 'Bungur');
INSERT INTO `ref_desa` VALUES ('3522112006', '352211', 'Desa', 'Cangakan');
INSERT INTO `ref_desa` VALUES ('3522112014', '352211', 'Desa', 'Caruban');
INSERT INTO `ref_desa` VALUES ('3522112018', '352211', 'Desa', 'Gedongarum');
INSERT INTO `ref_desa` VALUES ('3522112005', '352211', 'Desa', 'Kabalan');
INSERT INTO `ref_desa` VALUES ('3522112002', '352211', 'Desa', 'Kanor');
INSERT INTO `ref_desa` VALUES ('3522112019', '352211', 'Desa', 'Kedungprimpen');
INSERT INTO `ref_desa` VALUES ('3522112024', '352211', 'Desa', 'Nglarangan');
INSERT INTO `ref_desa` VALUES ('3522112012', '352211', 'Desa', 'Palembon');
INSERT INTO `ref_desa` VALUES ('3522112010', '352211', 'Desa', 'Pesen');
INSERT INTO `ref_desa` VALUES ('3522112017', '352211', 'Desa', 'Pilang');
INSERT INTO `ref_desa` VALUES ('3522112004', '352211', 'Desa', 'Piyak');
INSERT INTO `ref_desa` VALUES ('3522112016', '352211', 'Desa', 'Prigi');
INSERT INTO `ref_desa` VALUES ('3522112011', '352211', 'Desa', 'Samberan');
INSERT INTO `ref_desa` VALUES ('3522112007', '352211', 'Desa', 'Sarangan');
INSERT INTO `ref_desa` VALUES ('3522112013', '352211', 'Desa', 'Sedeng');
INSERT INTO `ref_desa` VALUES ('3522112001', '352211', 'Desa', 'Semambung');
INSERT INTO `ref_desa` VALUES ('3522112009', '352211', 'Desa', 'Simbatan');
INSERT INTO `ref_desa` VALUES ('3522112021', '352211', 'Desa', 'Simorejo');
INSERT INTO `ref_desa` VALUES ('3522112025', '352211', 'Desa', 'Sroyo');
INSERT INTO `ref_desa` VALUES ('3522112015', '352211', 'Desa', 'Sumberwangi');
INSERT INTO `ref_desa` VALUES ('3522112003', '352211', 'Desa', 'Tambahrejo');
INSERT INTO `ref_desa` VALUES ('3522112008', '352211', 'Desa', 'Tejo');
INSERT INTO `ref_desa` VALUES ('3522112020', '352211', 'Desa', 'Temu');
INSERT INTO `ref_desa` VALUES ('3522142014', '352214', 'Desa', 'Bakalan');
INSERT INTO `ref_desa` VALUES ('3522142005', '352214', 'Desa', 'Bangilan');
INSERT INTO `ref_desa` VALUES ('3522142002', '352214', 'Desa', 'Bendo');
INSERT INTO `ref_desa` VALUES ('3522142013', '352214', 'Desa', 'Bogo');
INSERT INTO `ref_desa` VALUES ('3522142017', '352214', 'Desa', 'Kalianyar');
INSERT INTO `ref_desa` VALUES ('3522142011', '352214', 'Desa', 'Kapas');
INSERT INTO `ref_desa` VALUES ('3522142010', '352214', 'Desa', 'Kedaton');
INSERT INTO `ref_desa` VALUES ('3522142021', '352214', 'Desa', 'Klampok');
INSERT INTO `ref_desa` VALUES ('3522142001', '352214', 'Desa', 'Kumpul Rejo');
INSERT INTO `ref_desa` VALUES ('3522142015', '352214', 'Desa', 'Mojodeso');
INSERT INTO `ref_desa` VALUES ('3522142019', '352214', 'Desa', 'Ngampel');
INSERT INTO `ref_desa` VALUES ('3522142003', '352214', 'Desa', 'Padang Mentoyo');
INSERT INTO `ref_desa` VALUES ('3522142009', '352214', 'Desa', 'Plesungan');
INSERT INTO `ref_desa` VALUES ('3522142020', '352214', 'Desa', 'Sambiroto');
INSERT INTO `ref_desa` VALUES ('3522142006', '352214', 'Desa', 'Sembung');
INSERT INTO `ref_desa` VALUES ('3522142012', '352214', 'Desa', 'Semen Pinggir');
INSERT INTO `ref_desa` VALUES ('3522142016', '352214', 'Desa', 'Sukowati');
INSERT INTO `ref_desa` VALUES ('3522142007', '352214', 'Desa', 'Tanjung Harjo');
INSERT INTO `ref_desa` VALUES ('3522142004', '352214', 'Desa', 'Tapelan');
INSERT INTO `ref_desa` VALUES ('3522142018', '352214', 'Desa', 'Tikusan');
INSERT INTO `ref_desa` VALUES ('3522142008', '352214', 'Desa', 'Wedi');
INSERT INTO `ref_desa` VALUES ('3522202001', '352220', 'Desa', 'Batokan');
INSERT INTO `ref_desa` VALUES ('3522202005', '352220', 'Desa', 'Besah');
INSERT INTO `ref_desa` VALUES ('3522202002', '352220', 'Desa', 'Betet');
INSERT INTO `ref_desa` VALUES ('3522202008', '352220', 'Desa', 'Kasiman');
INSERT INTO `ref_desa` VALUES ('3522202007', '352220', 'Desa', 'Ngaglik');
INSERT INTO `ref_desa` VALUES ('3522202006', '352220', 'Desa', 'Sambeng');
INSERT INTO `ref_desa` VALUES ('3522202009', '352220', 'Desa', 'Sekaran');
INSERT INTO `ref_desa` VALUES ('3522202004', '352220', 'Desa', 'Sidomukti');
INSERT INTO `ref_desa` VALUES ('3522202010', '352220', 'Desa', 'Tambakmerak');
INSERT INTO `ref_desa` VALUES ('3522202003', '352220', 'Desa', 'Tembeling');
INSERT INTO `ref_desa` VALUES ('3522252005', '352225', 'Desa', 'Beji');
INSERT INTO `ref_desa` VALUES ('3522252003', '352225', 'Desa', 'Hargomulyo');
INSERT INTO `ref_desa` VALUES ('3522252001', '352225', 'Desa', 'Kawengan');
INSERT INTO `ref_desa` VALUES ('3522252004', '352225', 'Desa', 'Kedewan');
INSERT INTO `ref_desa` VALUES ('3522252002', '352225', 'Desa', 'Wonocolo');
INSERT INTO `ref_desa` VALUES ('3522082001', '352208', 'Desa', 'Babad');
INSERT INTO `ref_desa` VALUES ('3522082023', '352208', 'Desa', 'Balongcabe');
INSERT INTO `ref_desa` VALUES ('3522082003', '352208', 'Desa', 'Dayukidul');
INSERT INTO `ref_desa` VALUES ('3522082017', '352208', 'Desa', 'Drokilo');
INSERT INTO `ref_desa` VALUES ('3522082011', '352208', 'Desa', 'Duwel');
INSERT INTO `ref_desa` VALUES ('3522082013', '352208', 'Desa', 'Geger');
INSERT INTO `ref_desa` VALUES ('3522082019', '352208', 'Desa', 'Jamberejo');
INSERT INTO `ref_desa` VALUES ('3522082010', '352208', 'Desa', 'Kedungadem');
INSERT INTO `ref_desa` VALUES ('3522082014', '352208', 'Desa', 'Kedungrejo');
INSERT INTO `ref_desa` VALUES ('3522082007', '352208', 'Desa', 'Kendung');
INSERT INTO `ref_desa` VALUES ('3522082012', '352208', 'Desa', 'Kepoh Kidul');
INSERT INTO `ref_desa` VALUES ('3522082006', '352208', 'Desa', 'Kesongo');
INSERT INTO `ref_desa` VALUES ('3522082015', '352208', 'Desa', 'Megale');
INSERT INTO `ref_desa` VALUES ('3522082008', '352208', 'Desa', 'Mlideg');
INSERT INTO `ref_desa` VALUES ('3522082018', '352208', 'Desa', 'Mojorejo');
INSERT INTO `ref_desa` VALUES ('3522082022', '352208', 'Desa', 'Ngrandu');
INSERT INTO `ref_desa` VALUES ('3522082004', '352208', 'Desa', 'Panjang');
INSERT INTO `ref_desa` VALUES ('3522082002', '352208', 'Desa', 'Pejok');
INSERT INTO `ref_desa` VALUES ('3522082020', '352208', 'Desa', 'Sidomulyo');
INSERT INTO `ref_desa` VALUES ('3522082016', '352208', 'Desa', 'Sidorejo');
INSERT INTO `ref_desa` VALUES ('3522082021', '352208', 'Desa', 'Tlogoagung');
INSERT INTO `ref_desa` VALUES ('3522082005', '352208', 'Desa', 'Tondomulo');
INSERT INTO `ref_desa` VALUES ('3522082009', '352208', 'Desa', 'Tumbrasanom');
INSERT INTO `ref_desa` VALUES ('3522092010', '352209', 'Desa', 'Balongdowo');
INSERT INTO `ref_desa` VALUES ('3522092014', '352209', 'Desa', 'Bayemgede');
INSERT INTO `ref_desa` VALUES ('3522092019', '352209', 'Desa', 'Betet');
INSERT INTO `ref_desa` VALUES ('3522092008', '352209', 'Desa', 'Brangkal');
INSERT INTO `ref_desa` VALUES ('3522092018', '352209', 'Desa', 'Bumirejo');
INSERT INTO `ref_desa` VALUES ('3522092002', '352209', 'Desa', 'Cengkir');
INSERT INTO `ref_desa` VALUES ('3522092020', '352209', 'Desa', 'Jipo');
INSERT INTO `ref_desa` VALUES ('3522092023', '352209', 'Desa', 'Karangan');
INSERT INTO `ref_desa` VALUES ('3522092003', '352209', 'Desa', 'Kepoh');
INSERT INTO `ref_desa` VALUES ('3522092006', '352209', 'Desa', 'Krangkong');
INSERT INTO `ref_desa` VALUES ('3522092009', '352209', 'Desa', 'Mojosari');
INSERT INTO `ref_desa` VALUES ('3522092022', '352209', 'Desa', 'Mudung');
INSERT INTO `ref_desa` VALUES ('3522092007', '352209', 'Desa', 'Nglumber');
INSERT INTO `ref_desa` VALUES ('3522092021', '352209', 'Desa', 'Ngranggon Anyar');
INSERT INTO `ref_desa` VALUES ('3522092001', '352209', 'Desa', 'Pejok');
INSERT INTO `ref_desa` VALUES ('3522092012', '352209', 'Desa', 'Pohwates');
INSERT INTO `ref_desa` VALUES ('3522092004', '352209', 'Desa', 'Sidomukti');
INSERT INTO `ref_desa` VALUES ('3522092005', '352209', 'Desa', 'Simorejo');
INSERT INTO `ref_desa` VALUES ('3522092024', '352209', 'Desa', 'Sugihwaras');
INSERT INTO `ref_desa` VALUES ('3522092016', '352209', 'Desa', 'Sumberagung');
INSERT INTO `ref_desa` VALUES ('3522092025', '352209', 'Desa', 'Sumbergede');
INSERT INTO `ref_desa` VALUES ('3522092011', '352209', 'Desa', 'Sumberoto');
INSERT INTO `ref_desa` VALUES ('3522092015', '352209', 'Desa', 'Tlogorejo');
INSERT INTO `ref_desa` VALUES ('3522092013', '352209', 'Desa', 'Turigede');
INSERT INTO `ref_desa` VALUES ('3522092017', '352209', 'Desa', 'Woro');
INSERT INTO `ref_desa` VALUES ('3522172007', '352217', 'Desa', 'Banaran');
INSERT INTO `ref_desa` VALUES ('3522172001', '352217', 'Desa', 'Dukuh Lor');
INSERT INTO `ref_desa` VALUES ('3522172002', '352217', 'Desa', 'Kacangan');
INSERT INTO `ref_desa` VALUES ('3522172012', '352217', 'Desa', 'Kedungrejo');
INSERT INTO `ref_desa` VALUES ('3522172003', '352217', 'Desa', 'Kemiri');
INSERT INTO `ref_desa` VALUES ('3522172013', '352217', 'Desa', 'Ketileng');
INSERT INTO `ref_desa` VALUES ('3522172016', '352217', 'Desa', 'Kliteh');
INSERT INTO `ref_desa` VALUES ('3522172014', '352217', 'Desa', 'Malo');
INSERT INTO `ref_desa` VALUES ('3522172008', '352217', 'Desa', 'Ngujung');
INSERT INTO `ref_desa` VALUES ('3522172004', '352217', 'Desa', 'Petak');
INSERT INTO `ref_desa` VALUES ('3522172006', '352217', 'Desa', 'Rendeng');
INSERT INTO `ref_desa` VALUES ('3522172018', '352217', 'Desa', 'Semlaran');
INSERT INTO `ref_desa` VALUES ('3522172005', '352217', 'Desa', 'Sudah');
INSERT INTO `ref_desa` VALUES ('3522172015', '352217', 'Desa', 'Sukorejo');
INSERT INTO `ref_desa` VALUES ('3522172009', '352217', 'Desa', 'Sumberejo');
INSERT INTO `ref_desa` VALUES ('3522172010', '352217', 'Desa', 'Tambakromo');
INSERT INTO `ref_desa` VALUES ('3522172019', '352217', 'Desa', 'Tanggir');
INSERT INTO `ref_desa` VALUES ('3522172011', '352217', 'Desa', 'Tinawun');
INSERT INTO `ref_desa` VALUES ('3522172017', '352217', 'Desa', 'Trembes');
INSERT INTO `ref_desa` VALUES ('3522172020', '352217', 'Desa', 'Tulungagung');
INSERT INTO `ref_desa` VALUES ('3522222006', '352222', 'Desa', 'Geneng');
INSERT INTO `ref_desa` VALUES ('3522222001', '352222', 'Desa', 'Kalangan');
INSERT INTO `ref_desa` VALUES ('3522222003', '352222', 'Desa', 'Margomulyo');
INSERT INTO `ref_desa` VALUES ('3522222005', '352222', 'Desa', 'Meduri');
INSERT INTO `ref_desa` VALUES ('3522222002', '352222', 'Desa', 'Ngelo');
INSERT INTO `ref_desa` VALUES ('3522222004', '352222', 'Desa', 'Sumberejo');
INSERT INTO `ref_desa` VALUES ('3522032005', '352203', 'Desa', 'Bondol');
INSERT INTO `ref_desa` VALUES ('3522032002', '352203', 'Desa', 'Karangmangu');
INSERT INTO `ref_desa` VALUES ('3522032003', '352203', 'Desa', 'Ngambon');
INSERT INTO `ref_desa` VALUES ('3522032001', '352203', 'Desa', 'Nglampin');
INSERT INTO `ref_desa` VALUES ('3522032004', '352203', 'Desa', 'Sengon');
INSERT INTO `ref_desa` VALUES ('3522042009', '352204', 'Desa', 'Bandungrejo');
INSERT INTO `ref_desa` VALUES ('3522042016', '352204', 'Desa', 'Bareng');
INSERT INTO `ref_desa` VALUES ('3522042001', '352204', 'Desa', 'Butoh');
INSERT INTO `ref_desa` VALUES ('3522042013', '352204', 'Desa', 'Dukohkidul');
INSERT INTO `ref_desa` VALUES ('3522042015', '352204', 'Desa', 'Jampet');
INSERT INTO `ref_desa` VALUES ('3522042017', '352204', 'Desa', 'Jelu');
INSERT INTO `ref_desa` VALUES ('3522042005', '352204', 'Desa', 'Kolong');
INSERT INTO `ref_desa` VALUES ('3522042004', '352204', 'Desa', 'Mediyunan');
INSERT INTO `ref_desa` VALUES ('3522042007', '352204', 'Desa', 'Ngadiluwih');
INSERT INTO `ref_desa` VALUES ('3522042011', '352204', 'Desa', 'Ngantru');
INSERT INTO `ref_desa` VALUES ('3522042008', '352204', 'Desa', 'Ngasem');
INSERT INTO `ref_desa` VALUES ('3522042012', '352204', 'Desa', 'Sambong');
INSERT INTO `ref_desa` VALUES ('3522042006', '352204', 'Desa', 'Sendangharjo');
INSERT INTO `ref_desa` VALUES ('3522042003', '352204', 'Desa', 'Setren');
INSERT INTO `ref_desa` VALUES ('3522042010', '352204', 'Desa', 'Tengger');
INSERT INTO `ref_desa` VALUES ('3522042002', '352204', 'Desa', 'Trenggulunan');
INSERT INTO `ref_desa` VALUES ('3522042014', '352204', 'Desa', 'Wadang');
INSERT INTO `ref_desa` VALUES ('3522012015', '352201', 'Desa', 'Bancer');
INSERT INTO `ref_desa` VALUES ('3522012008', '352201', 'Desa', 'Blimbing Gede');
INSERT INTO `ref_desa` VALUES ('3522012004', '352201', 'Desa', 'Jumok');
INSERT INTO `ref_desa` VALUES ('3522012009', '352201', 'Desa', 'Kalirejo');
INSERT INTO `ref_desa` VALUES ('3522012016', '352201', 'Desa', 'Klempun');
INSERT INTO `ref_desa` VALUES ('3522012001', '352201', 'Desa', 'Luwihaji');
INSERT INTO `ref_desa` VALUES ('3522012006', '352201', 'Desa', 'Mojorejo');
INSERT INTO `ref_desa` VALUES ('3522012003', '352201', 'Desa', 'Nganti');
INSERT INTO `ref_desa` VALUES ('3522012007', '352201', 'Desa', 'Ngraho');
INSERT INTO `ref_desa` VALUES ('3522012012', '352201', 'Desa', 'Pandan');
INSERT INTO `ref_desa` VALUES ('3522012014', '352201', 'Desa', 'Payaman');
INSERT INTO `ref_desa` VALUES ('3522012002', '352201', 'Desa', 'Sugih Waras');
INSERT INTO `ref_desa` VALUES ('3522012005', '352201', 'Desa', 'Sumberagung');
INSERT INTO `ref_desa` VALUES ('3522012013', '352201', 'Desa', 'Sumberarum');
INSERT INTO `ref_desa` VALUES ('3522012011', '352201', 'Desa', 'Tanggungan');
INSERT INTO `ref_desa` VALUES ('3522012010', '352201', 'Desa', 'Tapelan');
INSERT INTO `ref_desa` VALUES ('3522192014', '352219', 'Desa', 'Banjarjo');
INSERT INTO `ref_desa` VALUES ('3522192006', '352219', 'Desa', 'Cendono');
INSERT INTO `ref_desa` VALUES ('3522192009', '352219', 'Desa', 'Dengok');
INSERT INTO `ref_desa` VALUES ('3522192015', '352219', 'Desa', 'Kebunagung');
INSERT INTO `ref_desa` VALUES ('3522192016', '352219', 'Desa', 'Kendung');
INSERT INTO `ref_desa` VALUES ('3522192011', '352219', 'Desa', 'Kuncen');
INSERT INTO `ref_desa` VALUES ('3522192005', '352219', 'Desa', 'Ngasinan');
INSERT INTO `ref_desa` VALUES ('3522192004', '352219', 'Desa', 'Ngeper');
INSERT INTO `ref_desa` VALUES ('3522192013', '352219', 'Desa', 'Ngradin');
INSERT INTO `ref_desa` VALUES ('3522192008', '352219', 'Desa', 'Nguken');
INSERT INTO `ref_desa` VALUES ('3522192010', '352219', 'Desa', 'Padangan');
INSERT INTO `ref_desa` VALUES ('3522192002', '352219', 'Desa', 'Prangi');
INSERT INTO `ref_desa` VALUES ('3522192003', '352219', 'Desa', 'Purworejo');
INSERT INTO `ref_desa` VALUES ('3522192007', '352219', 'Desa', 'Sidorejo');
INSERT INTO `ref_desa` VALUES ('3522192012', '352219', 'Desa', 'Sonorejo');
INSERT INTO `ref_desa` VALUES ('3522192001', '352219', 'Desa', 'Tebon');
INSERT INTO `ref_desa` VALUES ('3522182012', '352218', 'Desa', 'Donan');
INSERT INTO `ref_desa` VALUES ('3522182010', '352218', 'Desa', 'Gapluk');
INSERT INTO `ref_desa` VALUES ('3522182004', '352218', 'Desa', 'Kaliombo');
INSERT INTO `ref_desa` VALUES ('3522182011', '352218', 'Desa', 'Kuniran');
INSERT INTO `ref_desa` VALUES ('3522182002', '352218', 'Desa', 'Ngrejeng');
INSERT INTO `ref_desa` VALUES ('3522182001', '352218', 'Desa', 'Pelem');
INSERT INTO `ref_desa` VALUES ('3522182008', '352218', 'Desa', 'Pojok');
INSERT INTO `ref_desa` VALUES ('3522182006', '352218', 'Desa', 'Punggur');
INSERT INTO `ref_desa` VALUES ('3522182009', '352218', 'Desa', 'Purwosari');
INSERT INTO `ref_desa` VALUES ('3522182007', '352218', 'Desa', 'Sedahkidul');
INSERT INTO `ref_desa` VALUES ('3522182005', '352218', 'Desa', 'Tinumpuk');
INSERT INTO `ref_desa` VALUES ('3522182003', '352218', 'Desa', 'Tlatah');
INSERT INTO `ref_desa` VALUES ('3522272006', '352227', 'Desa', 'Bareng');
INSERT INTO `ref_desa` VALUES ('3522272001', '352227', 'Desa', 'Bobol');
INSERT INTO `ref_desa` VALUES ('3522272005', '352227', 'Desa', 'Deling');
INSERT INTO `ref_desa` VALUES ('3522272004', '352227', 'Desa', 'Klino');
INSERT INTO `ref_desa` VALUES ('3522272002', '352227', 'Desa', 'Miyono');
INSERT INTO `ref_desa` VALUES ('3522272003', '352227', 'Desa', 'Sekar');
INSERT INTO `ref_desa` VALUES ('3522072005', '352207', 'Desa', 'Alasgung');
INSERT INTO `ref_desa` VALUES ('3522072016', '352207', 'Desa', 'Balongrejo');
INSERT INTO `ref_desa` VALUES ('3522072001', '352207', 'Desa', 'Bareng');
INSERT INTO `ref_desa` VALUES ('3522072012', '352207', 'Desa', 'Bulu');
INSERT INTO `ref_desa` VALUES ('3522072002', '352207', 'Desa', 'Drenges');
INSERT INTO `ref_desa` VALUES ('3522072017', '352207', 'Desa', 'Genjor');
INSERT INTO `ref_desa` VALUES ('3522072015', '352207', 'Desa', 'Glagah Wangi');
INSERT INTO `ref_desa` VALUES ('3522072007', '352207', 'Desa', 'Glagahan');
INSERT INTO `ref_desa` VALUES ('3522072009', '352207', 'Desa', 'Jatitengah');
INSERT INTO `ref_desa` VALUES ('3522072014', '352207', 'Desa', 'Kedungdowo');
INSERT INTO `ref_desa` VALUES ('3522072013', '352207', 'Desa', 'Nglajang');
INSERT INTO `ref_desa` VALUES ('3522072008', '352207', 'Desa', 'Panemon');
INSERT INTO `ref_desa` VALUES ('3522072004', '352207', 'Desa', 'Panunggalan');
INSERT INTO `ref_desa` VALUES ('3522072006', '352207', 'Desa', 'Siwalan');
INSERT INTO `ref_desa` VALUES ('3522072010', '352207', 'Desa', 'Sugihwaras');
INSERT INTO `ref_desa` VALUES ('3522072011', '352207', 'Desa', 'Trate');
INSERT INTO `ref_desa` VALUES ('3522072003', '352207', 'Desa', 'Wedoro');
INSERT INTO `ref_desa` VALUES ('3522242010', '352224', 'Desa', 'Duyungan');
INSERT INTO `ref_desa` VALUES ('3522242009', '352224', 'Desa', 'Jumput');
INSERT INTO `ref_desa` VALUES ('3522242002', '352224', 'Desa', 'Kalicilik');
INSERT INTO `ref_desa` VALUES ('3522242004', '352224', 'Desa', 'Klepek');
INSERT INTO `ref_desa` VALUES ('3522242008', '352224', 'Desa', 'Pacing');
INSERT INTO `ref_desa` VALUES ('3522242007', '352224', 'Desa', 'Purwoasri');
INSERT INTO `ref_desa` VALUES ('3522242001', '352224', 'Desa', 'Semawot');
INSERT INTO `ref_desa` VALUES ('3522242011', '352224', 'Desa', 'Semen Kidul');
INSERT INTO `ref_desa` VALUES ('3522242012', '352224', 'Desa', 'Sidodadi');
INSERT INTO `ref_desa` VALUES ('3522242013', '352224', 'Desa', 'Sidorejo');
INSERT INTO `ref_desa` VALUES ('3522242006', '352224', 'Desa', 'Sitiaji');
INSERT INTO `ref_desa` VALUES ('3522242003', '352224', 'Desa', 'Sukosewu');
INSERT INTO `ref_desa` VALUES ('3522242014', '352224', 'Desa', 'Sumberejo Kidul');
INSERT INTO `ref_desa` VALUES ('3522242005', '352224', 'Desa', 'Tegalkodo');
INSERT INTO `ref_desa` VALUES ('3522122005', '352212', 'Desa', 'Banjarjo');
INSERT INTO `ref_desa` VALUES ('3522122024', '352212', 'Desa', 'Bogangin');
INSERT INTO `ref_desa` VALUES ('3522122018', '352212', 'Desa', 'Butoh');
INSERT INTO `ref_desa` VALUES ('3522122012', '352212', 'Desa', 'Deru');
INSERT INTO `ref_desa` VALUES ('3522122022', '352212', 'Desa', 'Jatigede');
INSERT INTO `ref_desa` VALUES ('3522122017', '352212', 'Desa', 'Karang Dinoyo');
INSERT INTO `ref_desa` VALUES ('3522122014', '352212', 'Desa', 'Karangdowo');
INSERT INTO `ref_desa` VALUES ('3522122007', '352212', 'Desa', 'Kayulemah');
INSERT INTO `ref_desa` VALUES ('3522122003', '352212', 'Desa', 'Kedungrejo');
INSERT INTO `ref_desa` VALUES ('3522122026', '352212', 'Desa', 'Margoagung');
INSERT INTO `ref_desa` VALUES ('3522122019', '352212', 'Desa', 'Mejuwet');
INSERT INTO `ref_desa` VALUES ('3522122004', '352212', 'Desa', 'Mlinjeng');
INSERT INTO `ref_desa` VALUES ('3522122002', '352212', 'Desa', 'Ngampal');
INSERT INTO `ref_desa` VALUES ('3522122015', '352212', 'Desa', 'Pejambon');
INSERT INTO `ref_desa` VALUES ('3522122013', '352212', 'Desa', 'Pekuwon');
INSERT INTO `ref_desa` VALUES ('3522122020', '352212', 'Desa', 'Prayungan');
INSERT INTO `ref_desa` VALUES ('3522122010', '352212', 'Desa', 'Sambongrejo');
INSERT INTO `ref_desa` VALUES ('3522122011', '352212', 'Desa', 'Sendangagung');
INSERT INTO `ref_desa` VALUES ('3522122025', '352212', 'Desa', 'Sumberharjo');
INSERT INTO `ref_desa` VALUES ('3522122006', '352212', 'Desa', 'Sumberrejo');
INSERT INTO `ref_desa` VALUES ('3522122021', '352212', 'Desa', 'Sumuragung');
INSERT INTO `ref_desa` VALUES ('3522122023', '352212', 'Desa', 'Talun');
INSERT INTO `ref_desa` VALUES ('3522122008', '352212', 'Desa', 'Teleng');
INSERT INTO `ref_desa` VALUES ('3522122001', '352212', 'Desa', 'Tlogohaji');
INSERT INTO `ref_desa` VALUES ('3522122016', '352212', 'Desa', 'Tulungrejo');
INSERT INTO `ref_desa` VALUES ('3522122009', '352212', 'Desa', 'Wotan');
INSERT INTO `ref_desa` VALUES ('3522022007', '352202', 'Desa', 'Bakalan');
INSERT INTO `ref_desa` VALUES ('3522022016', '352202', 'Desa', 'Dolokgede');
INSERT INTO `ref_desa` VALUES ('3522022010', '352202', 'Desa', 'Gading');
INSERT INTO `ref_desa` VALUES ('3522022013', '352202', 'Desa', 'Gamongan');
INSERT INTO `ref_desa` VALUES ('3522022002', '352202', 'Desa', 'Jatimulyo');
INSERT INTO `ref_desa` VALUES ('3522022008', '352202', 'Desa', 'Jawik');
INSERT INTO `ref_desa` VALUES ('3522022018', '352202', 'Desa', 'Kacangan');
INSERT INTO `ref_desa` VALUES ('3522022014', '352202', 'Desa', 'Kalisumber');
INSERT INTO `ref_desa` VALUES ('3522022005', '352202', 'Desa', 'Maling Mati');
INSERT INTO `ref_desa` VALUES ('3522022015', '352202', 'Desa', 'Mulyorejo');
INSERT INTO `ref_desa` VALUES ('3522022001', '352202', 'Desa', 'Napis');
INSERT INTO `ref_desa` VALUES ('3522022003', '352202', 'Desa', 'Ngrancang');
INSERT INTO `ref_desa` VALUES ('3522022011', '352202', 'Desa', 'Pengkol');
INSERT INTO `ref_desa` VALUES ('3522022017', '352202', 'Desa', 'Sendangrejo');
INSERT INTO `ref_desa` VALUES ('3522022009', '352202', 'Desa', 'Sukorejo');
INSERT INTO `ref_desa` VALUES ('3522022006', '352202', 'Desa', 'Tambak Rejo');
INSERT INTO `ref_desa` VALUES ('3522022012', '352202', 'Desa', 'Tanjung');
INSERT INTO `ref_desa` VALUES ('3522022004', '352202', 'Desa', 'Turi');
INSERT INTO `ref_desa` VALUES ('3522212008', '352221', 'Desa', 'Bakulan');
INSERT INTO `ref_desa` VALUES ('3522212006', '352221', 'Desa', 'Belun');
INSERT INTO `ref_desa` VALUES ('3522212011', '352221', 'Desa', 'Buntalan');
INSERT INTO `ref_desa` VALUES ('3522212009', '352221', 'Desa', 'Jono');
INSERT INTO `ref_desa` VALUES ('3522212002', '352221', 'Desa', 'Kedungsari');
INSERT INTO `ref_desa` VALUES ('3522212001', '352221', 'Desa', 'Kedungsumber');
INSERT INTO `ref_desa` VALUES ('3522212010', '352221', 'Desa', 'Ngujung');
INSERT INTO `ref_desa` VALUES ('3522212012', '352221', 'Desa', 'Pancur');
INSERT INTO `ref_desa` VALUES ('3522212005', '352221', 'Desa', 'Pandantoyo');
INSERT INTO `ref_desa` VALUES ('3522212003', '352221', 'Desa', 'Papringan');
INSERT INTO `ref_desa` VALUES ('3522212004', '352221', 'Desa', 'Soko');
INSERT INTO `ref_desa` VALUES ('3522212007', '352221', 'Desa', 'Temayang');
INSERT INTO `ref_desa` VALUES ('3522232001', '352223', 'Desa', 'Banjarsari');
INSERT INTO `ref_desa` VALUES ('3522232007', '352223', 'Desa', 'Guyangan');
INSERT INTO `ref_desa` VALUES ('3522232011', '352223', 'Desa', 'Kandangan');
INSERT INTO `ref_desa` VALUES ('3522232010', '352223', 'Desa', 'Kanten');
INSERT INTO `ref_desa` VALUES ('3522232004', '352223', 'Desa', 'Mori');
INSERT INTO `ref_desa` VALUES ('3522232005', '352223', 'Desa', 'Padang');
INSERT INTO `ref_desa` VALUES ('3522232012', '352223', 'Desa', 'Pagerwesi');
INSERT INTO `ref_desa` VALUES ('3522232008', '352223', 'Desa', 'Sranak');
INSERT INTO `ref_desa` VALUES ('3522232009', '352223', 'Desa', 'Sumbang Timun');
INSERT INTO `ref_desa` VALUES ('3522232006', '352223', 'Desa', 'Sumberrejo');
INSERT INTO `ref_desa` VALUES ('3522232003', '352223', 'Desa', 'Trucuk');
INSERT INTO `ref_desa` VALUES ('3522232002', '352223', 'Desa', 'Tulungrejo');

-- ----------------------------
-- Table structure for ref_kecamatan
-- ----------------------------
DROP TABLE IF EXISTS `ref_kecamatan`;
CREATE TABLE `ref_kecamatan`  (
  `id` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kecamatan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of ref_kecamatan
-- ----------------------------
INSERT INTO `ref_kecamatan` VALUES ('352201', 'Ngraho');
INSERT INTO `ref_kecamatan` VALUES ('352202', 'Tambakrejo');
INSERT INTO `ref_kecamatan` VALUES ('352203', 'Ngambon');
INSERT INTO `ref_kecamatan` VALUES ('352204', 'Ngasem');
INSERT INTO `ref_kecamatan` VALUES ('352205', 'Bubulan');
INSERT INTO `ref_kecamatan` VALUES ('352206', 'Dander');
INSERT INTO `ref_kecamatan` VALUES ('352207', 'Sugihwaras');
INSERT INTO `ref_kecamatan` VALUES ('352208', 'Kedungadem');
INSERT INTO `ref_kecamatan` VALUES ('352209', 'Kepohbaru');
INSERT INTO `ref_kecamatan` VALUES ('352210', 'Baureno');
INSERT INTO `ref_kecamatan` VALUES ('352211', 'Kanor');
INSERT INTO `ref_kecamatan` VALUES ('352212', 'Sumberrejo');
INSERT INTO `ref_kecamatan` VALUES ('352213', 'Balen');
INSERT INTO `ref_kecamatan` VALUES ('352214', 'Kapas');
INSERT INTO `ref_kecamatan` VALUES ('352215', 'Bojonegoro');
INSERT INTO `ref_kecamatan` VALUES ('352216', 'Kalitidu');
INSERT INTO `ref_kecamatan` VALUES ('352217', 'Malo');
INSERT INTO `ref_kecamatan` VALUES ('352218', 'Purwosari');
INSERT INTO `ref_kecamatan` VALUES ('352219', 'Padangan');
INSERT INTO `ref_kecamatan` VALUES ('352220', 'Kasiman');
INSERT INTO `ref_kecamatan` VALUES ('352221', 'Temayang');
INSERT INTO `ref_kecamatan` VALUES ('352222', 'Margomulyo');
INSERT INTO `ref_kecamatan` VALUES ('352223', 'Trucuk');
INSERT INTO `ref_kecamatan` VALUES ('352224', 'Sukosewu');
INSERT INTO `ref_kecamatan` VALUES ('352225', 'Kedewan');
INSERT INTO `ref_kecamatan` VALUES ('352226', 'Gondang');
INSERT INTO `ref_kecamatan` VALUES ('352227', 'Sekar');
INSERT INTO `ref_kecamatan` VALUES ('352228', 'Gayam');

-- ----------------------------
-- Table structure for status_anggota_ruta
-- ----------------------------
DROP TABLE IF EXISTS `status_anggota_ruta`;
CREATE TABLE `status_anggota_ruta`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of status_anggota_ruta
-- ----------------------------
INSERT INTO `status_anggota_ruta` VALUES (1, 'Tinggal di RUTA');
INSERT INTO `status_anggota_ruta` VALUES (2, 'Meninggal');
INSERT INTO `status_anggota_ruta` VALUES (3, 'Tidak tinggal di RUTA / pindah');
INSERT INTO `status_anggota_ruta` VALUES (4, 'Anggota RUTA baru');
INSERT INTO `status_anggota_ruta` VALUES (5, 'Kesalahan Perlist');
INSERT INTO `status_anggota_ruta` VALUES (6, 'Tidak ditemukan');

-- ----------------------------
-- Table structure for status_bangunan
-- ----------------------------
DROP TABLE IF EXISTS `status_bangunan`;
CREATE TABLE `status_bangunan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of status_bangunan
-- ----------------------------
INSERT INTO `status_bangunan` VALUES (1, 'Milik sendiri');
INSERT INTO `status_bangunan` VALUES (2, 'Kontrak / sewa');
INSERT INTO `status_bangunan` VALUES (3, 'Bebas sewa / menumpang');
INSERT INTO `status_bangunan` VALUES (4, 'Dinas / tanah kas desa');
INSERT INTO `status_bangunan` VALUES (5, 'Lainnya');

-- ----------------------------
-- Table structure for status_lahan
-- ----------------------------
DROP TABLE IF EXISTS `status_lahan`;
CREATE TABLE `status_lahan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of status_lahan
-- ----------------------------
INSERT INTO `status_lahan` VALUES (1, 'Milik sendiri');
INSERT INTO `status_lahan` VALUES (2, 'Milik orang lain');
INSERT INTO `status_lahan` VALUES (3, 'Tanah negara');
INSERT INTO `status_lahan` VALUES (4, 'Lainnya');

-- ----------------------------
-- Table structure for status_perkawinan
-- ----------------------------
DROP TABLE IF EXISTS `status_perkawinan`;
CREATE TABLE `status_perkawinan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of status_perkawinan
-- ----------------------------
INSERT INTO `status_perkawinan` VALUES (1, 'Belum kawin');
INSERT INTO `status_perkawinan` VALUES (2, 'Kawin / nikah');
INSERT INTO `status_perkawinan` VALUES (3, 'Cerai hidup');
INSERT INTO `status_perkawinan` VALUES (4, 'Cerai mati');

-- ----------------------------
-- Table structure for status_toilet
-- ----------------------------
DROP TABLE IF EXISTS `status_toilet`;
CREATE TABLE `status_toilet`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of status_toilet
-- ----------------------------
INSERT INTO `status_toilet` VALUES (1, 'Ada, digunakan hanya ART sendiri');
INSERT INTO `status_toilet` VALUES (2, 'Ada, digunakan bersama ART tertentu');
INSERT INTO `status_toilet` VALUES (3, 'Ada, di MCK komunal');
INSERT INTO `status_toilet` VALUES (4, 'Ada, di MCK umum / siapapun menggunakan');
INSERT INTO `status_toilet` VALUES (5, 'Ada, ART tidak menggunakan');
INSERT INTO `status_toilet` VALUES (6, 'Tidak ada');

-- ----------------------------
-- Table structure for sumber_airminum
-- ----------------------------
DROP TABLE IF EXISTS `sumber_airminum`;
CREATE TABLE `sumber_airminum`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sumber_airminum
-- ----------------------------
INSERT INTO `sumber_airminum` VALUES (1, 'Air kemasan bermerk');
INSERT INTO `sumber_airminum` VALUES (2, 'Air isi ulang');
INSERT INTO `sumber_airminum` VALUES (3, 'Leding');
INSERT INTO `sumber_airminum` VALUES (4, 'Sumur bor / pompa');
INSERT INTO `sumber_airminum` VALUES (5, 'Sumur terlindung');
INSERT INTO `sumber_airminum` VALUES (6, 'Sumur tak terlindung');
INSERT INTO `sumber_airminum` VALUES (7, 'Mata air terlindung');
INSERT INTO `sumber_airminum` VALUES (8, 'Mata air tak terlindung');
INSERT INTO `sumber_airminum` VALUES (9, 'Air permukaan (sungai / danau / waduk / kolam / irigasi)');
INSERT INTO `sumber_airminum` VALUES (10, 'Air hujan');
INSERT INTO `sumber_airminum` VALUES (11, 'Lainnya');

-- ----------------------------
-- Table structure for sumber_listrik
-- ----------------------------
DROP TABLE IF EXISTS `sumber_listrik`;
CREATE TABLE `sumber_listrik`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sumber_listrik
-- ----------------------------
INSERT INTO `sumber_listrik` VALUES (1, 'Listrik PLN meteran');
INSERT INTO `sumber_listrik` VALUES (2, 'Listrik PLN non meteran');
INSERT INTO `sumber_listrik` VALUES (3, 'Listrik non PLN');
INSERT INTO `sumber_listrik` VALUES (4, 'Bukan listrik');

-- ----------------------------
-- Table structure for tpa
-- ----------------------------
DROP TABLE IF EXISTS `tpa`;
CREATE TABLE `tpa`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tpa
-- ----------------------------
INSERT INTO `tpa` VALUES (1, 'Tangki septik');
INSERT INTO `tpa` VALUES (2, 'IPAL');
INSERT INTO `tpa` VALUES (3, 'Kolam / sawah / sungai / danau / laut');
INSERT INTO `tpa` VALUES (4, 'Lubang tanah');
INSERT INTO `tpa` VALUES (5, 'Pantai / tanah lapang / kebun');
INSERT INTO `tpa` VALUES (6, 'Lainnya');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_fullname` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_level` int(11) NULL DEFAULT NULL,
  `user_manager` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 460 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, '3522151014', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Banjarejo', 1, '352215');
INSERT INTO `user` VALUES (2, '3522152015', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Campurjo', 1, '352215');
INSERT INTO `user` VALUES (3, '3522151001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Jetak', 1, '352215');
INSERT INTO `user` VALUES (4, '3522151011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kadipaten', 1, '352215');
INSERT INTO `user` VALUES (5, '3522152017', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kalirejo', 1, '352215');
INSERT INTO `user` VALUES (6, '3522151013', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Karang Pacar', 1, '352215');
INSERT INTO `user` VALUES (7, '3522152008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kauman', 1, '352215');
INSERT INTO `user` VALUES (8, '3522151005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kepatihan', 1, '352215');
INSERT INTO `user` VALUES (9, '3522151007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Klangon', 1, '352215');
INSERT INTO `user` VALUES (10, '3522151009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ledok Kulon', 1, '352215');
INSERT INTO `user` VALUES (11, '3522151010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ledok Wetan', 1, '352215');
INSERT INTO `user` VALUES (12, '3522151004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mojo Kampung', 1, '352215');
INSERT INTO `user` VALUES (13, '3522152016', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mulyoagung', 1, '352215');
INSERT INTO `user` VALUES (14, '3522151012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngrowo', 1, '352215');
INSERT INTO `user` VALUES (15, '3522152002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pacul', 1, '352215');
INSERT INTO `user` VALUES (16, '3522152018', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Semanding', 1, '352215');
INSERT INTO `user` VALUES (17, '3522152003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sukorejo', 1, '352215');
INSERT INTO `user` VALUES (18, '3522151006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumbang', 1, '352215');
INSERT INTO `user` VALUES (19, '3522132013', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Balenrejo', 1, '352213');
INSERT INTO `user` VALUES (20, '3522132006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bulaklo', 1, '352213');
INSERT INTO `user` VALUES (21, '3522132007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bulu', 1, '352213');
INSERT INTO `user` VALUES (22, '3522132010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kabunan', 1, '352213');
INSERT INTO `user` VALUES (23, '3522132020', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kedungbondo', 1, '352213');
INSERT INTO `user` VALUES (24, '3522132019', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kedungdowo', 1, '352213');
INSERT INTO `user` VALUES (25, '3522132008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kemamang', 1, '352213');
INSERT INTO `user` VALUES (26, '3522132003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kenep', 1, '352213');
INSERT INTO `user` VALUES (27, '3522132015', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Lengkong', 1, '352213');
INSERT INTO `user` VALUES (28, '3522132014', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Margomulyo', 1, '352213');
INSERT INTO `user` VALUES (29, '3522132002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mayangkawis', 1, '352213');
INSERT INTO `user` VALUES (30, '3522132016', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mulyoagung', 1, '352213');
INSERT INTO `user` VALUES (31, '3522132023', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mulyorejo', 1, '352213');
INSERT INTO `user` VALUES (32, '3522132009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngadiluhur', 1, '352213');
INSERT INTO `user` VALUES (33, '3522132005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Penganten', 1, '352213');
INSERT INTO `user` VALUES (34, '3522132021', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pilang Gede', 1, '352213');
INSERT INTO `user` VALUES (35, '3522132004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Poh Bogo', 1, '352213');
INSERT INTO `user` VALUES (36, '3522132018', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Prambatan', 1, '352213');
INSERT INTO `user` VALUES (37, '3522132022', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sarirejo', 1, '352213');
INSERT INTO `user` VALUES (38, '3522132017', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sekaran', 1, '352213');
INSERT INTO `user` VALUES (39, '3522132001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sidobandung', 1, '352213');
INSERT INTO `user` VALUES (40, '3522132011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sobontoro', 1, '352213');
INSERT INTO `user` VALUES (41, '3522132012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Suwaloh', 1, '352213');
INSERT INTO `user` VALUES (42, '3522102020', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Banjaran', 1, '352210');
INSERT INTO `user` VALUES (43, '3522102002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Banjaranyar', 1, '352210');
INSERT INTO `user` VALUES (44, '3522102006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Baureno', 1, '352210');
INSERT INTO `user` VALUES (45, '3522102005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Blongsong', 1, '352210');
INSERT INTO `user` VALUES (46, '3522102016', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bumiayu', 1, '352210');
INSERT INTO `user` VALUES (47, '3522102001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Drajat', 1, '352210');
INSERT INTO `user` VALUES (48, '3522102012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Gajah', 1, '352210');
INSERT INTO `user` VALUES (49, '3522102015', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Gunungsari', 1, '352210');
INSERT INTO `user` VALUES (50, '3522102024', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kadungrejo', 1, '352210');
INSERT INTO `user` VALUES (51, '3522102013', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kalisari', 1, '352210');
INSERT INTO `user` VALUES (52, '3522102018', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Karangdayu', 1, '352210');
INSERT INTO `user` VALUES (53, '3522102017', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kauman', 1, '352210');
INSERT INTO `user` VALUES (54, '3522102025', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Lebaksari', 1, '352210');
INSERT INTO `user` VALUES (55, '3522102003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngemplak', 1, '352210');
INSERT INTO `user` VALUES (56, '3522102019', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pasinan', 1, '352210');
INSERT INTO `user` VALUES (57, '3522102022', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pomahan', 1, '352210');
INSERT INTO `user` VALUES (58, '3522102023', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pucangarum', 1, '352210');
INSERT INTO `user` VALUES (59, '3522102009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Selorejo', 1, '352210');
INSERT INTO `user` VALUES (60, '3522102021', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sembunglor', 1, '352210');
INSERT INTO `user` VALUES (61, '3522102004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sraturejo', 1, '352210');
INSERT INTO `user` VALUES (62, '3522102011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumuragung', 1, '352210');
INSERT INTO `user` VALUES (63, '3522102014', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tanggungan', 1, '352210');
INSERT INTO `user` VALUES (64, '3522102010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tlogoagung', 1, '352210');
INSERT INTO `user` VALUES (65, '3522102007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Trojalu', 1, '352210');
INSERT INTO `user` VALUES (66, '3522102008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tulungagung', 1, '352210');
INSERT INTO `user` VALUES (67, '3522052001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bubulan', 1, '352205');
INSERT INTO `user` VALUES (68, '3522052002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Cancung', 1, '352205');
INSERT INTO `user` VALUES (69, '3522052003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Clebung', 1, '352205');
INSERT INTO `user` VALUES (70, '3522052005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngorogunung', 1, '352205');
INSERT INTO `user` VALUES (71, '3522052004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumber Bendo', 1, '352205');
INSERT INTO `user` VALUES (72, '3522062002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Dander', 1, '352206');
INSERT INTO `user` VALUES (73, '3522062003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Growok', 1, '352206');
INSERT INTO `user` VALUES (74, '3522062006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Jatiblimbing', 1, '352206');
INSERT INTO `user` VALUES (75, '3522062010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Karangsono', 1, '352206');
INSERT INTO `user` VALUES (76, '3522062005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kunci', 1, '352206');
INSERT INTO `user` VALUES (77, '3522062008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mojoranu', 1, '352206');
INSERT INTO `user` VALUES (78, '3522062016', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngablak', 1, '352206');
INSERT INTO `user` VALUES (79, '3522062007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngraseh', 1, '352206');
INSERT INTO `user` VALUES (80, '3522062015', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngulanan', 1, '352206');
INSERT INTO `user` VALUES (81, '3522062013', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngumpak Dalem', 1, '352206');
INSERT INTO `user` VALUES (82, '3522062001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngunut', 1, '352206');
INSERT INTO `user` VALUES (83, '3522062009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sendangrejo', 1, '352206');
INSERT INTO `user` VALUES (84, '3522062011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumber Agung', 1, '352206');
INSERT INTO `user` VALUES (85, '3522062004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumber Arum', 1, '352206');
INSERT INTO `user` VALUES (86, '3522062014', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumber Tlaseh', 1, '352206');
INSERT INTO `user` VALUES (87, '3522062012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumodikaran', 1, '352206');
INSERT INTO `user` VALUES (88, '3522282002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Begadon', 1, '352228');
INSERT INTO `user` VALUES (89, '3522282007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Beged', 1, '352228');
INSERT INTO `user` VALUES (90, '3522282006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bonorejo', 1, '352228');
INSERT INTO `user` VALUES (91, '3522282005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Brabowan', 1, '352228');
INSERT INTO `user` VALUES (92, '3522282011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Cengungklung', 1, '352228');
INSERT INTO `user` VALUES (93, '3522282001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Gayam', 1, '352228');
INSERT INTO `user` VALUES (94, '3522282008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Katur', 1, '352228');
INSERT INTO `user` VALUES (95, '3522282012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Manukan', 1, '352228');
INSERT INTO `user` VALUES (96, '3522282004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mojodelik', 1, '352228');
INSERT INTO `user` VALUES (97, '3522282009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngraho', 1, '352228');
INSERT INTO `user` VALUES (98, '3522282003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ringintunggal', 1, '352228');
INSERT INTO `user` VALUES (99, '3522282010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sudu', 1, '352228');
INSERT INTO `user` VALUES (100, '3522262001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Gondang', 1, '352226');
INSERT INTO `user` VALUES (101, '3522262002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Jari', 1, '352226');
INSERT INTO `user` VALUES (102, '3522262005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Krondonan', 1, '352226');
INSERT INTO `user` VALUES (103, '3522262004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pajeng', 1, '352226');
INSERT INTO `user` VALUES (104, '3522262007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pragelan', 1, '352226');
INSERT INTO `user` VALUES (105, '3522262003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sambongrejo', 1, '352226');
INSERT INTO `user` VALUES (106, '3522262006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Senganten', 1, '352226');
INSERT INTO `user` VALUES (107, '3522162010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Brenggolo', 1, '352216');
INSERT INTO `user` VALUES (108, '3522162011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Grebegan', 1, '352216');
INSERT INTO `user` VALUES (109, '3522162006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kalitidu', 1, '352216');
INSERT INTO `user` VALUES (110, '3522162020', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Leran', 1, '352216');
INSERT INTO `user` VALUES (111, '3522162014', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mayanggeneng', 1, '352216');
INSERT INTO `user` VALUES (112, '3522162015', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mayangrejo', 1, '352216');
INSERT INTO `user` VALUES (113, '3522162008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mlaten', 1, '352216');
INSERT INTO `user` VALUES (114, '3522162023', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mojo', 1, '352216');
INSERT INTO `user` VALUES (115, '3522162017', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mojosari', 1, '352216');
INSERT INTO `user` VALUES (116, '3522162022', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngringinrejo', 1, '352216');
INSERT INTO `user` VALUES (117, '3522162019', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngujo', 1, '352216');
INSERT INTO `user` VALUES (118, '3522162013', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Panjunan', 1, '352216');
INSERT INTO `user` VALUES (119, '3522162016', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pilangsari', 1, '352216');
INSERT INTO `user` VALUES (120, '3522162018', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pungpungan', 1, '352216');
INSERT INTO `user` VALUES (121, '3522162021', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sukoharjo', 1, '352216');
INSERT INTO `user` VALUES (122, '3522162007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumengko', 1, '352216');
INSERT INTO `user` VALUES (123, '3522162009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Talok', 1, '352216');
INSERT INTO `user` VALUES (124, '3522162012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Wotan Ngare', 1, '352216');
INSERT INTO `user` VALUES (125, '3522112023', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bakung', 1, '352211');
INSERT INTO `user` VALUES (126, '3522112022', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bungur', 1, '352211');
INSERT INTO `user` VALUES (127, '3522112006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Cangakan', 1, '352211');
INSERT INTO `user` VALUES (128, '3522112014', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Caruban', 1, '352211');
INSERT INTO `user` VALUES (129, '3522112018', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Gedongarum', 1, '352211');
INSERT INTO `user` VALUES (130, '3522112005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kabalan', 1, '352211');
INSERT INTO `user` VALUES (131, '3522112002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kanor', 1, '352211');
INSERT INTO `user` VALUES (132, '3522112019', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kedungprimpen', 1, '352211');
INSERT INTO `user` VALUES (133, '3522112024', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Nglarangan', 1, '352211');
INSERT INTO `user` VALUES (134, '3522112012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Palembon', 1, '352211');
INSERT INTO `user` VALUES (135, '3522112010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pesen', 1, '352211');
INSERT INTO `user` VALUES (136, '3522112017', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pilang', 1, '352211');
INSERT INTO `user` VALUES (137, '3522112004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Piyak', 1, '352211');
INSERT INTO `user` VALUES (138, '3522112016', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Prigi', 1, '352211');
INSERT INTO `user` VALUES (139, '3522112011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Samberan', 1, '352211');
INSERT INTO `user` VALUES (140, '3522112007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sarangan', 1, '352211');
INSERT INTO `user` VALUES (141, '3522112013', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sedeng', 1, '352211');
INSERT INTO `user` VALUES (142, '3522112001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Semambung', 1, '352211');
INSERT INTO `user` VALUES (143, '3522112009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Simbatan', 1, '352211');
INSERT INTO `user` VALUES (144, '3522112021', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Simorejo', 1, '352211');
INSERT INTO `user` VALUES (145, '3522112025', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sroyo', 1, '352211');
INSERT INTO `user` VALUES (146, '3522112015', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumberwangi', 1, '352211');
INSERT INTO `user` VALUES (147, '3522112003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tambahrejo', 1, '352211');
INSERT INTO `user` VALUES (148, '3522112008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tejo', 1, '352211');
INSERT INTO `user` VALUES (149, '3522112020', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Temu', 1, '352211');
INSERT INTO `user` VALUES (150, '3522142014', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bakalan', 1, '352214');
INSERT INTO `user` VALUES (151, '3522142005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bangilan', 1, '352214');
INSERT INTO `user` VALUES (152, '3522142002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bendo', 1, '352214');
INSERT INTO `user` VALUES (153, '3522142013', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bogo', 1, '352214');
INSERT INTO `user` VALUES (154, '3522142017', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kalianyar', 1, '352214');
INSERT INTO `user` VALUES (155, '3522142011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kapas', 1, '352214');
INSERT INTO `user` VALUES (156, '3522142010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kedaton', 1, '352214');
INSERT INTO `user` VALUES (157, '3522142021', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Klampok', 1, '352214');
INSERT INTO `user` VALUES (158, '3522142001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kumpul Rejo', 1, '352214');
INSERT INTO `user` VALUES (159, '3522142015', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mojodeso', 1, '352214');
INSERT INTO `user` VALUES (160, '3522142019', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngampel', 1, '352214');
INSERT INTO `user` VALUES (161, '3522142003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Padang Mentoyo', 1, '352214');
INSERT INTO `user` VALUES (162, '3522142009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Plesungan', 1, '352214');
INSERT INTO `user` VALUES (163, '3522142020', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sambiroto', 1, '352214');
INSERT INTO `user` VALUES (164, '3522142006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sembung', 1, '352214');
INSERT INTO `user` VALUES (165, '3522142012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Semen Pinggir', 1, '352214');
INSERT INTO `user` VALUES (166, '3522142016', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sukowati', 1, '352214');
INSERT INTO `user` VALUES (167, '3522142007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tanjung Harjo', 1, '352214');
INSERT INTO `user` VALUES (168, '3522142004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tapelan', 1, '352214');
INSERT INTO `user` VALUES (169, '3522142018', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tikusan', 1, '352214');
INSERT INTO `user` VALUES (170, '3522142008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Wedi', 1, '352214');
INSERT INTO `user` VALUES (171, '3522202001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Batokan', 1, '352220');
INSERT INTO `user` VALUES (172, '3522202005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Besah', 1, '352220');
INSERT INTO `user` VALUES (173, '3522202002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Betet', 1, '352220');
INSERT INTO `user` VALUES (174, '3522202008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kasiman', 1, '352220');
INSERT INTO `user` VALUES (175, '3522202007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngaglik', 1, '352220');
INSERT INTO `user` VALUES (176, '3522202006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sambeng', 1, '352220');
INSERT INTO `user` VALUES (177, '3522202009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sekaran', 1, '352220');
INSERT INTO `user` VALUES (178, '3522202004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sidomukti', 1, '352220');
INSERT INTO `user` VALUES (179, '3522202010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tambakmerak', 1, '352220');
INSERT INTO `user` VALUES (180, '3522202003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tembeling', 1, '352220');
INSERT INTO `user` VALUES (181, '3522252005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Beji', 1, '352225');
INSERT INTO `user` VALUES (182, '3522252003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Hargomulyo', 1, '352225');
INSERT INTO `user` VALUES (183, '3522252001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kawengan', 1, '352225');
INSERT INTO `user` VALUES (184, '3522252004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kedewan', 1, '352225');
INSERT INTO `user` VALUES (185, '3522252002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Wonocolo', 1, '352225');
INSERT INTO `user` VALUES (186, '3522082001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Babad', 1, '352208');
INSERT INTO `user` VALUES (187, '3522082023', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Balongcabe', 1, '352208');
INSERT INTO `user` VALUES (188, '3522082003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Dayukidul', 1, '352208');
INSERT INTO `user` VALUES (189, '3522082017', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Drokilo', 1, '352208');
INSERT INTO `user` VALUES (190, '3522082011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Duwel', 1, '352208');
INSERT INTO `user` VALUES (191, '3522082013', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Geger', 1, '352208');
INSERT INTO `user` VALUES (192, '3522082019', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Jamberejo', 1, '352208');
INSERT INTO `user` VALUES (193, '3522082010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kedungadem', 1, '352208');
INSERT INTO `user` VALUES (194, '3522082014', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kedungrejo', 1, '352208');
INSERT INTO `user` VALUES (195, '3522082007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kendung', 1, '352208');
INSERT INTO `user` VALUES (196, '3522082012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kepoh Kidul', 1, '352208');
INSERT INTO `user` VALUES (197, '3522082006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kesongo', 1, '352208');
INSERT INTO `user` VALUES (198, '3522082015', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Megale', 1, '352208');
INSERT INTO `user` VALUES (199, '3522082008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mlideg', 1, '352208');
INSERT INTO `user` VALUES (200, '3522082018', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mojorejo', 1, '352208');
INSERT INTO `user` VALUES (201, '3522082022', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngrandu', 1, '352208');
INSERT INTO `user` VALUES (202, '3522082004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Panjang', 1, '352208');
INSERT INTO `user` VALUES (203, '3522082002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pejok', 1, '352208');
INSERT INTO `user` VALUES (204, '3522082020', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sidomulyo', 1, '352208');
INSERT INTO `user` VALUES (205, '3522082016', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sidorejo', 1, '352208');
INSERT INTO `user` VALUES (206, '3522082021', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tlogoagung', 1, '352208');
INSERT INTO `user` VALUES (207, '3522082005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tondomulo', 1, '352208');
INSERT INTO `user` VALUES (208, '3522082009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tumbrasanom', 1, '352208');
INSERT INTO `user` VALUES (209, '3522092010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Balongdowo', 1, '352209');
INSERT INTO `user` VALUES (210, '3522092014', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bayemgede', 1, '352209');
INSERT INTO `user` VALUES (211, '3522092019', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Betet', 1, '352209');
INSERT INTO `user` VALUES (212, '3522092008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Brangkal', 1, '352209');
INSERT INTO `user` VALUES (213, '3522092018', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bumirejo', 1, '352209');
INSERT INTO `user` VALUES (214, '3522092002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Cengkir', 1, '352209');
INSERT INTO `user` VALUES (215, '3522092020', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Jipo', 1, '352209');
INSERT INTO `user` VALUES (216, '3522092023', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Karangan', 1, '352209');
INSERT INTO `user` VALUES (217, '3522092003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kepoh', 1, '352209');
INSERT INTO `user` VALUES (218, '3522092006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Krangkong', 1, '352209');
INSERT INTO `user` VALUES (219, '3522092009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mojosari', 1, '352209');
INSERT INTO `user` VALUES (220, '3522092022', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mudung', 1, '352209');
INSERT INTO `user` VALUES (221, '3522092007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Nglumber', 1, '352209');
INSERT INTO `user` VALUES (222, '3522092021', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngranggon Anyar', 1, '352209');
INSERT INTO `user` VALUES (223, '3522092001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pejok', 1, '352209');
INSERT INTO `user` VALUES (224, '3522092012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pohwates', 1, '352209');
INSERT INTO `user` VALUES (225, '3522092004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sidomukti', 1, '352209');
INSERT INTO `user` VALUES (226, '3522092005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Simorejo', 1, '352209');
INSERT INTO `user` VALUES (227, '3522092024', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sugihwaras', 1, '352209');
INSERT INTO `user` VALUES (228, '3522092016', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumberagung', 1, '352209');
INSERT INTO `user` VALUES (229, '3522092025', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumbergede', 1, '352209');
INSERT INTO `user` VALUES (230, '3522092011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumberoto', 1, '352209');
INSERT INTO `user` VALUES (231, '3522092015', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tlogorejo', 1, '352209');
INSERT INTO `user` VALUES (232, '3522092013', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Turigede', 1, '352209');
INSERT INTO `user` VALUES (233, '3522092017', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Woro', 1, '352209');
INSERT INTO `user` VALUES (234, '3522172007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Banaran', 1, '352217');
INSERT INTO `user` VALUES (235, '3522172001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Dukuh Lor', 1, '352217');
INSERT INTO `user` VALUES (236, '3522172002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kacangan', 1, '352217');
INSERT INTO `user` VALUES (237, '3522172012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kedungrejo', 1, '352217');
INSERT INTO `user` VALUES (238, '3522172003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kemiri', 1, '352217');
INSERT INTO `user` VALUES (239, '3522172013', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ketileng', 1, '352217');
INSERT INTO `user` VALUES (240, '3522172016', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kliteh', 1, '352217');
INSERT INTO `user` VALUES (241, '3522172014', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Malo', 1, '352217');
INSERT INTO `user` VALUES (242, '3522172008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngujung', 1, '352217');
INSERT INTO `user` VALUES (243, '3522172004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Petak', 1, '352217');
INSERT INTO `user` VALUES (244, '3522172006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Rendeng', 1, '352217');
INSERT INTO `user` VALUES (245, '3522172018', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Semlaran', 1, '352217');
INSERT INTO `user` VALUES (246, '3522172005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sudah', 1, '352217');
INSERT INTO `user` VALUES (247, '3522172015', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sukorejo', 1, '352217');
INSERT INTO `user` VALUES (248, '3522172009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumberejo', 1, '352217');
INSERT INTO `user` VALUES (249, '3522172010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tambakromo', 1, '352217');
INSERT INTO `user` VALUES (250, '3522172019', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tanggir', 1, '352217');
INSERT INTO `user` VALUES (251, '3522172011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tinawun', 1, '352217');
INSERT INTO `user` VALUES (252, '3522172017', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Trembes', 1, '352217');
INSERT INTO `user` VALUES (253, '3522172020', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tulungagung', 1, '352217');
INSERT INTO `user` VALUES (254, '3522222006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Geneng', 1, '352222');
INSERT INTO `user` VALUES (255, '3522222001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kalangan', 1, '352222');
INSERT INTO `user` VALUES (256, '3522222003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Margomulyo', 1, '352222');
INSERT INTO `user` VALUES (257, '3522222005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Meduri', 1, '352222');
INSERT INTO `user` VALUES (258, '3522222002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngelo', 1, '352222');
INSERT INTO `user` VALUES (259, '3522222004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumberejo', 1, '352222');
INSERT INTO `user` VALUES (260, '3522032005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bondol', 1, '352203');
INSERT INTO `user` VALUES (261, '3522032002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Karangmangu', 1, '352203');
INSERT INTO `user` VALUES (262, '3522032003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngambon', 1, '352203');
INSERT INTO `user` VALUES (263, '3522032001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Nglampin', 1, '352203');
INSERT INTO `user` VALUES (264, '3522032004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sengon', 1, '352203');
INSERT INTO `user` VALUES (265, '3522042009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bandungrejo', 1, '352204');
INSERT INTO `user` VALUES (266, '3522042016', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bareng', 1, '352204');
INSERT INTO `user` VALUES (267, '3522042001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Butoh', 1, '352204');
INSERT INTO `user` VALUES (268, '3522042013', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Dukohkidul', 1, '352204');
INSERT INTO `user` VALUES (269, '3522042015', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Jampet', 1, '352204');
INSERT INTO `user` VALUES (270, '3522042017', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Jelu', 1, '352204');
INSERT INTO `user` VALUES (271, '3522042005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kolong', 1, '352204');
INSERT INTO `user` VALUES (272, '3522042004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mediyunan', 1, '352204');
INSERT INTO `user` VALUES (273, '3522042007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngadiluwih', 1, '352204');
INSERT INTO `user` VALUES (274, '3522042011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngantru', 1, '352204');
INSERT INTO `user` VALUES (275, '3522042008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngasem', 1, '352204');
INSERT INTO `user` VALUES (276, '3522042012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sambong', 1, '352204');
INSERT INTO `user` VALUES (277, '3522042006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sendangharjo', 1, '352204');
INSERT INTO `user` VALUES (278, '3522042003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Setren', 1, '352204');
INSERT INTO `user` VALUES (279, '3522042010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tengger', 1, '352204');
INSERT INTO `user` VALUES (280, '3522042002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Trenggulunan', 1, '352204');
INSERT INTO `user` VALUES (281, '3522042014', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Wadang', 1, '352204');
INSERT INTO `user` VALUES (282, '3522012015', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bancer', 1, '352201');
INSERT INTO `user` VALUES (283, '3522012008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Blimbing Gede', 1, '352201');
INSERT INTO `user` VALUES (284, '3522012004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Jumok', 1, '352201');
INSERT INTO `user` VALUES (285, '3522012009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kalirejo', 1, '352201');
INSERT INTO `user` VALUES (286, '3522012016', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Klempun', 1, '352201');
INSERT INTO `user` VALUES (287, '3522012001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Luwihaji', 1, '352201');
INSERT INTO `user` VALUES (288, '3522012006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mojorejo', 1, '352201');
INSERT INTO `user` VALUES (289, '3522012003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Nganti', 1, '352201');
INSERT INTO `user` VALUES (290, '3522012007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngraho', 1, '352201');
INSERT INTO `user` VALUES (291, '3522012012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pandan', 1, '352201');
INSERT INTO `user` VALUES (292, '3522012014', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Payaman', 1, '352201');
INSERT INTO `user` VALUES (293, '3522012002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sugih Waras', 1, '352201');
INSERT INTO `user` VALUES (294, '3522012005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumberagung', 1, '352201');
INSERT INTO `user` VALUES (295, '3522012013', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumberarum', 1, '352201');
INSERT INTO `user` VALUES (296, '3522012011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tanggungan', 1, '352201');
INSERT INTO `user` VALUES (297, '3522012010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tapelan', 1, '352201');
INSERT INTO `user` VALUES (298, '3522192014', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Banjarjo', 1, '352219');
INSERT INTO `user` VALUES (299, '3522192006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Cendono', 1, '352219');
INSERT INTO `user` VALUES (300, '3522192009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Dengok', 1, '352219');
INSERT INTO `user` VALUES (301, '3522192015', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kebunagung', 1, '352219');
INSERT INTO `user` VALUES (302, '3522192016', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kendung', 1, '352219');
INSERT INTO `user` VALUES (303, '3522192011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kuncen', 1, '352219');
INSERT INTO `user` VALUES (304, '3522192005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngasinan', 1, '352219');
INSERT INTO `user` VALUES (305, '3522192004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngeper', 1, '352219');
INSERT INTO `user` VALUES (306, '3522192013', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngradin', 1, '352219');
INSERT INTO `user` VALUES (307, '3522192008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Nguken', 1, '352219');
INSERT INTO `user` VALUES (308, '3522192010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Padangan', 1, '352219');
INSERT INTO `user` VALUES (309, '3522192002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Prangi', 1, '352219');
INSERT INTO `user` VALUES (310, '3522192003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Purworejo', 1, '352219');
INSERT INTO `user` VALUES (311, '3522192007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sidorejo', 1, '352219');
INSERT INTO `user` VALUES (312, '3522192012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sonorejo', 1, '352219');
INSERT INTO `user` VALUES (313, '3522192001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tebon', 1, '352219');
INSERT INTO `user` VALUES (314, '3522182012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Donan', 1, '352218');
INSERT INTO `user` VALUES (315, '3522182010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Gapluk', 1, '352218');
INSERT INTO `user` VALUES (316, '3522182004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kaliombo', 1, '352218');
INSERT INTO `user` VALUES (317, '3522182011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kuniran', 1, '352218');
INSERT INTO `user` VALUES (318, '3522182002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngrejeng', 1, '352218');
INSERT INTO `user` VALUES (319, '3522182001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pelem', 1, '352218');
INSERT INTO `user` VALUES (320, '3522182008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pojok', 1, '352218');
INSERT INTO `user` VALUES (321, '3522182006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Punggur', 1, '352218');
INSERT INTO `user` VALUES (322, '3522182009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Purwosari', 1, '352218');
INSERT INTO `user` VALUES (323, '3522182007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sedahkidul', 1, '352218');
INSERT INTO `user` VALUES (324, '3522182005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tinumpuk', 1, '352218');
INSERT INTO `user` VALUES (325, '3522182003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tlatah', 1, '352218');
INSERT INTO `user` VALUES (326, '3522272006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bareng', 1, '352227');
INSERT INTO `user` VALUES (327, '3522272001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bobol', 1, '352227');
INSERT INTO `user` VALUES (328, '3522272005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Deling', 1, '352227');
INSERT INTO `user` VALUES (329, '3522272004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Klino', 1, '352227');
INSERT INTO `user` VALUES (330, '3522272002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Miyono', 1, '352227');
INSERT INTO `user` VALUES (331, '3522272003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sekar', 1, '352227');
INSERT INTO `user` VALUES (332, '3522072005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Alasgung', 1, '352207');
INSERT INTO `user` VALUES (333, '3522072016', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Balongrejo', 1, '352207');
INSERT INTO `user` VALUES (334, '3522072001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bareng', 1, '352207');
INSERT INTO `user` VALUES (335, '3522072012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bulu', 1, '352207');
INSERT INTO `user` VALUES (336, '3522072002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Drenges', 1, '352207');
INSERT INTO `user` VALUES (337, '3522072017', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Genjor', 1, '352207');
INSERT INTO `user` VALUES (338, '3522072015', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Glagah Wangi', 1, '352207');
INSERT INTO `user` VALUES (339, '3522072007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Glagahan', 1, '352207');
INSERT INTO `user` VALUES (340, '3522072009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Jatitengah', 1, '352207');
INSERT INTO `user` VALUES (341, '3522072014', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kedungdowo', 1, '352207');
INSERT INTO `user` VALUES (342, '3522072013', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Nglajang', 1, '352207');
INSERT INTO `user` VALUES (343, '3522072008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Panemon', 1, '352207');
INSERT INTO `user` VALUES (344, '3522072004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Panunggalan', 1, '352207');
INSERT INTO `user` VALUES (345, '3522072006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Siwalan', 1, '352207');
INSERT INTO `user` VALUES (346, '3522072010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sugihwaras', 1, '352207');
INSERT INTO `user` VALUES (347, '3522072011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Trate', 1, '352207');
INSERT INTO `user` VALUES (348, '3522072003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Wedoro', 1, '352207');
INSERT INTO `user` VALUES (349, '3522242010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Duyungan', 1, '352224');
INSERT INTO `user` VALUES (350, '3522242009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Jumput', 1, '352224');
INSERT INTO `user` VALUES (351, '3522242002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kalicilik', 1, '352224');
INSERT INTO `user` VALUES (352, '3522242004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Klepek', 1, '352224');
INSERT INTO `user` VALUES (353, '3522242008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pacing', 1, '352224');
INSERT INTO `user` VALUES (354, '3522242007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Purwoasri', 1, '352224');
INSERT INTO `user` VALUES (355, '3522242001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Semawot', 1, '352224');
INSERT INTO `user` VALUES (356, '3522242011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Semen Kidul', 1, '352224');
INSERT INTO `user` VALUES (357, '3522242012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sidodadi', 1, '352224');
INSERT INTO `user` VALUES (358, '3522242013', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sidorejo', 1, '352224');
INSERT INTO `user` VALUES (359, '3522242006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sitiaji', 1, '352224');
INSERT INTO `user` VALUES (360, '3522242003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sukosewu', 1, '352224');
INSERT INTO `user` VALUES (361, '3522242014', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumberejo Kidul', 1, '352224');
INSERT INTO `user` VALUES (362, '3522242005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tegalkodo', 1, '352224');
INSERT INTO `user` VALUES (363, '3522122005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Banjarjo', 1, '352212');
INSERT INTO `user` VALUES (364, '3522122024', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bogangin', 1, '352212');
INSERT INTO `user` VALUES (365, '3522122018', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Butoh', 1, '352212');
INSERT INTO `user` VALUES (366, '3522122012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Deru', 1, '352212');
INSERT INTO `user` VALUES (367, '3522122022', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Jatigede', 1, '352212');
INSERT INTO `user` VALUES (368, '3522122017', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Karang Dinoyo', 1, '352212');
INSERT INTO `user` VALUES (369, '3522122014', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Karangdowo', 1, '352212');
INSERT INTO `user` VALUES (370, '3522122007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kayulemah', 1, '352212');
INSERT INTO `user` VALUES (371, '3522122003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kedungrejo', 1, '352212');
INSERT INTO `user` VALUES (372, '3522122026', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Margoagung', 1, '352212');
INSERT INTO `user` VALUES (373, '3522122019', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mejuwet', 1, '352212');
INSERT INTO `user` VALUES (374, '3522122004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mlinjeng', 1, '352212');
INSERT INTO `user` VALUES (375, '3522122002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngampal', 1, '352212');
INSERT INTO `user` VALUES (376, '3522122015', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pejambon', 1, '352212');
INSERT INTO `user` VALUES (377, '3522122013', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pekuwon', 1, '352212');
INSERT INTO `user` VALUES (378, '3522122020', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Prayungan', 1, '352212');
INSERT INTO `user` VALUES (379, '3522122010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sambongrejo', 1, '352212');
INSERT INTO `user` VALUES (380, '3522122011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sendangagung', 1, '352212');
INSERT INTO `user` VALUES (381, '3522122025', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumberharjo', 1, '352212');
INSERT INTO `user` VALUES (382, '3522122006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumberrejo', 1, '352212');
INSERT INTO `user` VALUES (383, '3522122021', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumuragung', 1, '352212');
INSERT INTO `user` VALUES (384, '3522122023', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Talun', 1, '352212');
INSERT INTO `user` VALUES (385, '3522122008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Teleng', 1, '352212');
INSERT INTO `user` VALUES (386, '3522122001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tlogohaji', 1, '352212');
INSERT INTO `user` VALUES (387, '3522122016', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tulungrejo', 1, '352212');
INSERT INTO `user` VALUES (388, '3522122009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Wotan', 1, '352212');
INSERT INTO `user` VALUES (389, '3522022007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bakalan', 1, '352202');
INSERT INTO `user` VALUES (390, '3522022016', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Dolokgede', 1, '352202');
INSERT INTO `user` VALUES (391, '3522022010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Gading', 1, '352202');
INSERT INTO `user` VALUES (392, '3522022013', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Gamongan', 1, '352202');
INSERT INTO `user` VALUES (393, '3522022002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Jatimulyo', 1, '352202');
INSERT INTO `user` VALUES (394, '3522022008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Jawik', 1, '352202');
INSERT INTO `user` VALUES (395, '3522022018', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kacangan', 1, '352202');
INSERT INTO `user` VALUES (396, '3522022014', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kalisumber', 1, '352202');
INSERT INTO `user` VALUES (397, '3522022005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Maling Mati', 1, '352202');
INSERT INTO `user` VALUES (398, '3522022015', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mulyorejo', 1, '352202');
INSERT INTO `user` VALUES (399, '3522022001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Napis', 1, '352202');
INSERT INTO `user` VALUES (400, '3522022003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngrancang', 1, '352202');
INSERT INTO `user` VALUES (401, '3522022011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pengkol', 1, '352202');
INSERT INTO `user` VALUES (402, '3522022017', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sendangrejo', 1, '352202');
INSERT INTO `user` VALUES (403, '3522022009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sukorejo', 1, '352202');
INSERT INTO `user` VALUES (404, '3522022006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tambak Rejo', 1, '352202');
INSERT INTO `user` VALUES (405, '3522022012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tanjung', 1, '352202');
INSERT INTO `user` VALUES (406, '3522022004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Turi', 1, '352202');
INSERT INTO `user` VALUES (407, '3522212008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Bakulan', 1, '352221');
INSERT INTO `user` VALUES (408, '3522212006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Belun', 1, '352221');
INSERT INTO `user` VALUES (409, '3522212011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Buntalan', 1, '352221');
INSERT INTO `user` VALUES (410, '3522212009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Jono', 1, '352221');
INSERT INTO `user` VALUES (411, '3522212002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kedungsari', 1, '352221');
INSERT INTO `user` VALUES (412, '3522212001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kedungsumber', 1, '352221');
INSERT INTO `user` VALUES (413, '3522212010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Ngujung', 1, '352221');
INSERT INTO `user` VALUES (414, '3522212012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pancur', 1, '352221');
INSERT INTO `user` VALUES (415, '3522212005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pandantoyo', 1, '352221');
INSERT INTO `user` VALUES (416, '3522212003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Papringan', 1, '352221');
INSERT INTO `user` VALUES (417, '3522212004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Soko', 1, '352221');
INSERT INTO `user` VALUES (418, '3522212007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Temayang', 1, '352221');
INSERT INTO `user` VALUES (419, '3522232001', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Banjarsari', 1, '352223');
INSERT INTO `user` VALUES (420, '3522232007', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Guyangan', 1, '352223');
INSERT INTO `user` VALUES (421, '3522232011', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kandangan', 1, '352223');
INSERT INTO `user` VALUES (422, '3522232010', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kanten', 1, '352223');
INSERT INTO `user` VALUES (423, '3522232004', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Mori', 1, '352223');
INSERT INTO `user` VALUES (424, '3522232005', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Padang', 1, '352223');
INSERT INTO `user` VALUES (425, '3522232012', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Pagerwesi', 1, '352223');
INSERT INTO `user` VALUES (426, '3522232008', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sranak', 1, '352223');
INSERT INTO `user` VALUES (427, '3522232009', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumbang Timun', 1, '352223');
INSERT INTO `user` VALUES (428, '3522232006', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Sumberrejo', 1, '352223');
INSERT INTO `user` VALUES (429, '3522232003', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Trucuk', 1, '352223');
INSERT INTO `user` VALUES (430, '3522232002', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Tulungrejo', 1, '352223');
INSERT INTO `user` VALUES (431, '352201', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Ngraho', 2, '22');
INSERT INTO `user` VALUES (432, '352202', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Tambakrejo', 2, '22');
INSERT INTO `user` VALUES (433, '352203', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Ngambon', 2, '22');
INSERT INTO `user` VALUES (434, '352204', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Ngasem', 2, '22');
INSERT INTO `user` VALUES (435, '352205', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Bubulan', 2, '22');
INSERT INTO `user` VALUES (436, '352206', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Dander', 2, '22');
INSERT INTO `user` VALUES (437, '352207', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Sugihwaras', 2, '22');
INSERT INTO `user` VALUES (438, '352208', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Kedungadem', 2, '22');
INSERT INTO `user` VALUES (439, '352209', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Kepohbaru', 2, '22');
INSERT INTO `user` VALUES (440, '352210', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Baureno', 2, '22');
INSERT INTO `user` VALUES (441, '352211', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Kanor', 2, '22');
INSERT INTO `user` VALUES (442, '352212', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Sumberrejo', 2, '22');
INSERT INTO `user` VALUES (443, '352213', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Balen', 2, '22');
INSERT INTO `user` VALUES (444, '352214', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Kapas', 2, '22');
INSERT INTO `user` VALUES (445, '352215', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Bojonegoro', 2, '22');
INSERT INTO `user` VALUES (446, '352216', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Kalitidu', 2, '22');
INSERT INTO `user` VALUES (447, '352217', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Malo', 2, '22');
INSERT INTO `user` VALUES (448, '352218', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Purwosari', 2, '22');
INSERT INTO `user` VALUES (449, '352219', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Padangan', 2, '22');
INSERT INTO `user` VALUES (450, '352220', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Kasiman', 2, '22');
INSERT INTO `user` VALUES (451, '352221', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Temayang', 2, '22');
INSERT INTO `user` VALUES (452, '352222', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Margomulyo', 2, '22');
INSERT INTO `user` VALUES (453, '352223', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Trucuk', 2, '22');
INSERT INTO `user` VALUES (454, '352224', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Sukosewu', 2, '22');
INSERT INTO `user` VALUES (455, '352225', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Kedewan', 2, '22');
INSERT INTO `user` VALUES (456, '352226', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Gondang', 2, '22');
INSERT INTO `user` VALUES (457, '352227', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Sekar', 2, '22');
INSERT INTO `user` VALUES (458, '352228', '$2a$12$WwKK5FUgtI6NEuqY4l7g9OlSxdAvw3rg7d2lfNABpKymDMjAevaQW', 'Kec. Gayam', 2, '22');
INSERT INTO `user` VALUES (459, 'guest', '$2y$10$wwyLL2psoR4fUte35O/UYOc3qveaHMo2IwxZasZgtNSGI1DGfUfXO', 'Guest', 3, NULL);

SET FOREIGN_KEY_CHECKS = 1;
