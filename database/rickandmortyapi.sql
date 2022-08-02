/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MariaDB
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : rickandmortyapi

 Target Server Type    : MariaDB
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 02/08/2022 11:43:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for character_episodes
-- ----------------------------
DROP TABLE IF EXISTS `character_episodes`;
CREATE TABLE `character_episodes`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `character_id` bigint(20) UNSIGNED NOT NULL,
  `episode_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of character_episodes
-- ----------------------------
INSERT INTO `character_episodes` VALUES (1, 1, 1, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (2, 1, 2, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (3, 1, 3, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (4, 1, 4, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (5, 1, 5, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (6, 1, 6, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (7, 1, 7, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (8, 1, 8, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (9, 1, 9, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (10, 1, 10, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (11, 1, 11, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (12, 2, 1, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (13, 2, 2, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (14, 2, 3, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (15, 2, 4, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (16, 2, 5, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (17, 2, 6, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (18, 2, 7, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (19, 2, 8, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (20, 2, 9, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (21, 2, 10, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (22, 2, 11, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (23, 3, 6, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (24, 3, 7, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (25, 3, 8, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (26, 3, 9, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (27, 3, 10, NULL, NULL, NULL);
INSERT INTO `character_episodes` VALUES (28, 3, 11, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for characters
-- ----------------------------
DROP TABLE IF EXISTS `characters`;
CREATE TABLE `characters`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Alive','Dead','unknown') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unknown',
  `species` enum('Human','Alien','unknown') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unknown',
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Male','Female','unknown') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unknown',
  `origin_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of characters
-- ----------------------------
INSERT INTO `characters` VALUES (1, 'Rick Sanchez', 'Alive', 'Human', '', 'Male', '1', '3', '1.jpeg', NULL, NULL, NULL);
INSERT INTO `characters` VALUES (2, 'Morty Smith', 'Alive', 'Human', '', 'Male', '0', '3', '2.jpeg', NULL, NULL, NULL);
INSERT INTO `characters` VALUES (3, 'Summer Smith', 'Alive', 'Human', '', 'Female', '20', '20', '3.jpeg', NULL, NULL, NULL);
INSERT INTO `characters` VALUES (4, 'Beth Smith', 'Alive', 'Human', '', 'Female', '20', '20', '4.jpeg', NULL, NULL, NULL);
INSERT INTO `characters` VALUES (5, 'Jerry Smith', 'Alive', 'Human', '', 'Male', '20', '20', '5.jpeg', NULL, NULL, NULL);
INSERT INTO `characters` VALUES (6, 'Abadango Cluster Princess', 'Alive', 'Alien', '', 'Female', '2', '2', '6.jpeg', NULL, NULL, NULL);
INSERT INTO `characters` VALUES (7, 'Abradolf Lincler', 'unknown', 'Human', 'Genetic experiment\"', 'Male', '20', '21', '7.jpeg', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for episodes
-- ----------------------------
DROP TABLE IF EXISTS `episodes`;
CREATE TABLE `episodes`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_date` date NOT NULL,
  `episode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of episodes
-- ----------------------------
INSERT INTO `episodes` VALUES (1, 'Pilot', '2013-12-02', 'S01E01', NULL, NULL, NULL);
INSERT INTO `episodes` VALUES (2, 'Lawnmower Dog', '2013-12-09', 'S01E02', NULL, NULL, NULL);
INSERT INTO `episodes` VALUES (3, 'Anatomy Park', '2013-12-16', 'S01E03', NULL, NULL, NULL);
INSERT INTO `episodes` VALUES (4, 'M. Night Shaym-Aliens!', '2014-01-13', 'S01E04', NULL, NULL, NULL);
INSERT INTO `episodes` VALUES (5, 'Meeseeks and Destroy', '2014-01-20', 'S01E05', NULL, NULL, NULL);
INSERT INTO `episodes` VALUES (6, 'Rick Potion #9', '2014-01-27', 'S01E06', NULL, NULL, NULL);
INSERT INTO `episodes` VALUES (7, 'Raising Gazorpazorp', '2014-03-10', 'S01E07', NULL, NULL, NULL);
INSERT INTO `episodes` VALUES (8, 'Rixty Minutes', '2014-03-17', 'S01E08', NULL, NULL, NULL);
INSERT INTO `episodes` VALUES (9, 'Something Ricked This Way Comes', '2014-03-24', 'S01E09', NULL, NULL, NULL);
INSERT INTO `episodes` VALUES (10, 'Close Rick-counters of the Rick Kind', '2014-04-07', 'S01E10', NULL, NULL, NULL);
INSERT INTO `episodes` VALUES (11, 'Ricksy Business', '2014-04-14', 'S01E11', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for location_residents
-- ----------------------------
DROP TABLE IF EXISTS `location_residents`;
CREATE TABLE `location_residents`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `character_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of location_residents
-- ----------------------------
INSERT INTO `location_residents` VALUES (1, 3, 1, NULL, NULL, NULL);
INSERT INTO `location_residents` VALUES (2, 3, 2, NULL, NULL, NULL);
INSERT INTO `location_residents` VALUES (3, 20, 3, NULL, NULL, NULL);
INSERT INTO `location_residents` VALUES (4, 20, 4, NULL, NULL, NULL);
INSERT INTO `location_residents` VALUES (5, 20, 5, NULL, NULL, NULL);
INSERT INTO `location_residents` VALUES (6, 2, 6, NULL, NULL, NULL);
INSERT INTO `location_residents` VALUES (7, 21, 7, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for locations
-- ----------------------------
DROP TABLE IF EXISTS `locations`;
CREATE TABLE `locations`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Planet','Cluster','Dream','Fantasy town','Space station','Microverse','TV','Resort','unknown') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unknown',
  `dimension` enum('Dimension C-137','Dimension 5-126','Fantasy Dimension','Cronenberg Dimension','Replacement Dimension','unknown') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unknown',
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of locations
-- ----------------------------
INSERT INTO `locations` VALUES (1, 'Earth (C-137)', 'Planet', 'Dimension C-137', NULL, NULL, NULL);
INSERT INTO `locations` VALUES (2, 'Abadango', 'Cluster', 'unknown', NULL, NULL, NULL);
INSERT INTO `locations` VALUES (3, 'Citadel of Ricks', 'Space station', 'unknown', NULL, NULL, NULL);
INSERT INTO `locations` VALUES (4, 'Worldender\'s lair', 'Planet', 'unknown', NULL, NULL, NULL);
INSERT INTO `locations` VALUES (5, 'Anatomy Park', 'Microverse', 'Dimension C-137', NULL, NULL, NULL);
INSERT INTO `locations` VALUES (6, 'Interdimensional Cable', 'TV', 'unknown', NULL, NULL, NULL);
INSERT INTO `locations` VALUES (7, 'Immortality Field Resort', 'Resort', 'unknown', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (15, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (16, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (17, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (18, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (19, '2022_08_01_200142_create_characters_table', 1);
INSERT INTO `migrations` VALUES (20, '2022_08_01_200306_create_episodes_table', 1);
INSERT INTO `migrations` VALUES (21, '2022_08_01_200327_create_locations_table', 1);
INSERT INTO `migrations` VALUES (22, '2022_08_02_141929_create_character_episodes_table', 2);
INSERT INTO `migrations` VALUES (23, '2022_08_02_142300_create_location_residents_table', 2);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `last_used_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
