/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : inputlevel

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 24/11/2023 10:16:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for akses
-- ----------------------------
DROP TABLE IF EXISTS `akses`;
CREATE TABLE `akses`  (
  `id_akses` int NOT NULL AUTO_INCREMENT,
  `id_roles` int NULL DEFAULT NULL,
  `id_menu` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_akses`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 43 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of akses
-- ----------------------------
INSERT INTO `akses` VALUES (26, 1, 1);
INSERT INTO `akses` VALUES (27, 1, 3);
INSERT INTO `akses` VALUES (28, 1, 4);
INSERT INTO `akses` VALUES (29, 1, 5);
INSERT INTO `akses` VALUES (30, 1, 6);
INSERT INTO `akses` VALUES (31, 1, 7);
INSERT INTO `akses` VALUES (40, 2, 4);
INSERT INTO `akses` VALUES (41, 2, 5);
INSERT INTO `akses` VALUES (42, 3, 5);

-- ----------------------------
-- Table structure for datainput
-- ----------------------------
DROP TABLE IF EXISTS `datainput`;
CREATE TABLE `datainput`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of datainput
-- ----------------------------
INSERT INTO `datainput` VALUES (6, 'Yusuf Andi Nugroho', 'Guru');
INSERT INTO `datainput` VALUES (7, 'Desi Ariyani', 'Guru ');

-- ----------------------------
-- Table structure for datanilai
-- ----------------------------
DROP TABLE IF EXISTS `datanilai`;
CREATE TABLE `datanilai`  (
  `id_nilai` int NOT NULL AUTO_INCREMENT,
  `mapel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `mapel_nilai` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_nilai`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of datanilai
-- ----------------------------
INSERT INTO `datanilai` VALUES (8, 'Bahasa Indonesia', '75');

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login`  (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `id_roles` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES (10, 'yusuf', '$2y$10$n9iqnJeAgyS7reTzJZmpiemEn8HGBMsaHTlMmdLUXo4TNUCP04yLO', 1);
INSERT INTO `login` VALUES (13, 'desi', '$2y$10$p2eCP4qSVkO8JBaTwznjIOZb.FxofkbwCpVYZdgnd9Zbk6U8MNEP6', 2);
INSERT INTO `login` VALUES (14, 'akbar', '$2y$10$NXkvNU6ppESZ1n2CDTrbo.DJce5GzmH/ljEDOyY5KdW4Sg5yHp0NG', 3);

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `id_menu` int NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nama_url` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nama_icon` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_menu`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES (1, 'Data login', 'Datalogin', 'fas fa-fw fa-tachometer-alt');
INSERT INTO `menu` VALUES (3, 'Roles', 'Roles', 'fas fa-fw fa-wrench');
INSERT INTO `menu` VALUES (4, 'Data Guru', 'level', 'fas fa-fw fa-folder');
INSERT INTO `menu` VALUES (5, 'Data Siswa', 'Siswa', 'fas fa-fw fa-folder');
INSERT INTO `menu` VALUES (6, 'Data Mapel & Nilai', 'Nilai', 'fas fa-fw fa-chart-area');
INSERT INTO `menu` VALUES (7, 'Data Menu', 'Menu', 'fas fa-fw fa-table');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id_roles` int NOT NULL AUTO_INCREMENT,
  `nama_roles` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_roles`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'SuperAdmin');
INSERT INTO `roles` VALUES (2, 'Guru');
INSERT INTO `roles` VALUES (3, 'Siswa');

-- ----------------------------
-- Table structure for siswa
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa`  (
  `id_siswa` int NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `ttl` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `jenkel` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `tingkatan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `alamat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `agama` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `umur` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_siswa`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO `siswa` VALUES (4, 'Siska Fadillah', '2002-12-01', 'Perempuan', 'SMP', 'Jlegiwinangun', 'Budha', '22');
INSERT INTO `siswa` VALUES (6, 'Risma Anggraini', '1989-01-25', 'Perempuan', 'SD', 'Yogyakarta', 'kristen', '22');
INSERT INTO `siswa` VALUES (7, 'Muhammad Taqi Nabilul Lubab', '2000-01-12', 'laki-laki', 'S1', 'Surakarta', 'Islam', '23');
INSERT INTO `siswa` VALUES (10, 'Danang Iman Pangestu', '1999-12-13', 'Laki-Laki', 'S1', 'Gombong, Kebumen', 'Islam', '24');
INSERT INTO `siswa` VALUES (11, 'Lutfi Atmaja', '2001-11-13', 'Perempuan', 'MA', 'Jl Kranggan', 'Kristen', '22');
INSERT INTO `siswa` VALUES (13, 'Reino Barack', '2001-12-09', 'Laki-Laki', 'D4', 'Jl.Kenanga Jakarta Barat', 'Islam', '22');
INSERT INTO `siswa` VALUES (14, 'Lunami', '2000-12-09', 'Perempuan', 'SMP', 'Jl. Jlegiwinangun Barat Kilometer 100', 'Islam', '23');

SET FOREIGN_KEY_CHECKS = 1;
