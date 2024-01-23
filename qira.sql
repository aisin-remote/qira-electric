-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for qira_db
CREATE DATABASE IF NOT EXISTS `qira_db` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `qira_db`;

-- Dumping structure for table qira_db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table qira_db.migrations: ~6 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(3, '2023_09_08_104842_create_tm_pica_table', 1),
	(4, '2023_09_20_115239_change_tm_pica_table', 1),
	(5, '2023_09_21_090919_create_tt_pica_document_table', 1),
	(6, '2024_01_15_101509_create_henkatens_table', 1);

-- Dumping structure for table qira_db.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table qira_db.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table qira_db.tm_pica
CREATE TABLE IF NOT EXISTS `tm_pica` (
  `id` varchar(191) NOT NULL,
  `tanggal` date NOT NULL,
  `shift` varchar(191) NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(191) NOT NULL,
  `part_number` varchar(191) NOT NULL,
  `nama_produk` varchar(191) NOT NULL,
  `konten_problem` text NOT NULL,
  `sumber_informasi` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL,
  `sudah_sortir` varchar(191) NOT NULL,
  `quantity_sortir` varchar(191) NOT NULL,
  `kondisi_sortir_area` varchar(191) NOT NULL,
  `PIC` varchar(191) NOT NULL,
  `penyebab` text NOT NULL,
  `countermeasure` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipe` varchar(191) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table qira_db.tm_pica: ~2 rows (approximately)
INSERT INTO `tm_pica` (`id`, `tanggal`, `shift`, `jam`, `tempat`, `part_number`, `nama_produk`, `konten_problem`, `sumber_informasi`, `status`, `sudah_sortir`, `quantity_sortir`, `kondisi_sortir_area`, `PIC`, `penyebab`, `countermeasure`, `created_at`, `updated_at`, `tipe`) VALUES
	('9b2078ad-52a4-48b7-b969-980349dceb5e', '2024-01-02', 'B', '12:13:00', 'DC02', '11113-0Y040', 'OPN D72F', 'hgf', 'yfjhh', 'g', 'sudah', '12', 'dew', 'sd', 'sdssdad', 'sdas', '2024-01-19 04:14:18', '2024-01-19 04:14:18', 'CUSTOMER/SUPPLIER PROBLEM'),
	('9b20c2e6-5699-4ed6-a6ff-c1c5d9534ee6', '2024-01-01', 'B', '16:43:00', 'DC02', '11113-0Y040', 'TCC D98E AS', 'sdss', 'sa', 'sa', 'sudah', 'sda', 'sda', 'sad', 'sd', 'sad', '2024-01-19 07:41:51', '2024-01-19 07:41:51', 'CUSTOMER/SUPPLIER PROBLEM'),
	('9b20c48a-66c6-4708-8e53-19a484d2905b', '2024-01-01', 'C', '15:46:00', 'DC02', '11113-BZ020', 'TCC D72F AS', 'sad', 'sad', 'sa', 'belum', 'sad', 'sda', 'sda', 'sad', 'sad', '2024-01-19 07:46:26', '2024-01-19 07:46:26', 'INTERNAL PROBLEM');

-- Dumping structure for table qira_db.tm_problem
CREATE TABLE IF NOT EXISTS `tm_problem` (
  `id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `part_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pcr_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `part_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PIC` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_change` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `progress` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table qira_db.tm_problem: ~2 rows (approximately)
INSERT INTO `tm_problem` (`id`, `updated_at`, `part_number`, `pcr_number`, `part_name`, `status`, `PIC`, `content_change`, `note`, `progress`, `created_at`) VALUES
	('9b264e2b-5973-4452-b103-1f2f1186d7b0', '2024-01-22 01:50:38', '11310-BZ200', 'REG-001', 'TCC 4A91', 'Mass Production', 'Rani', 'Check', 'Check', 'Check yey', '2024-01-22 01:50:25'),
	('9b264e5a-91be-4be7-ad5c-4d488a1989fa', '2024-01-22 01:50:56', '11113-0Y040', 'sas', 'OPN D41E', 'Receive PCR Form Rquest', 'sa', 'sa', 'sad', 'das', '2024-01-22 01:50:56'),
	('9b268efa-ba9f-4449-9377-bec81c201a77', '2024-01-22 04:51:38', '11113-0Y040', 'sdwe', 'OPN D72F', 'Receive PCR Form Rquest', 'ewe', 'weq', 'wqe', 'weq', '2024-01-22 04:51:38'),
	('9b268efc-04f8-4451-a17f-44024459b912', '2024-01-22 04:51:39', '11113-0Y040', 'sdwe', 'OPN D72F', 'Receive PCR Form Rquest', 'ewe', 'weq', 'wqe', 'weq', '2024-01-22 04:51:39');

-- Dumping structure for table qira_db.tt_henkaten
CREATE TABLE IF NOT EXISTS `tt_henkaten` (
  `id` varchar(191) NOT NULL,
  `line` varchar(191) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table qira_db.tt_henkaten: ~0 rows (approximately)

-- Dumping structure for table qira_db.tt_pica_document
CREATE TABLE IF NOT EXISTS `tt_pica_document` (
  `id` varchar(191) NOT NULL,
  `id_pica` varchar(191) NOT NULL,
  `data_verifikasi` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tt_pica_document_id_pica_foreign` (`id_pica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table qira_db.tt_pica_document: ~3 rows (approximately)
INSERT INTO `tt_pica_document` (`id`, `id_pica`, `data_verifikasi`, `created_at`, `updated_at`) VALUES
	('9b2078ad-661e-4278-8894-dc0a3efd0045', '9b2078ad-52a4-48b7-b969-980349dceb5e', '65a9f71ad0f83.xlsx', '2024-01-19 04:14:18', '2024-01-19 04:14:18'),
	('9b20c2e6-64e2-4789-a000-ffc806dca5e8', '9b20c2e6-5699-4ed6-a6ff-c1c5d9534ee6', '65aa27bf57460.xlsx', '2024-01-19 07:41:51', '2024-01-19 07:41:51'),
	('9b20c48a-7633-4d9a-ae8d-f137fd577b86', '9b20c48a-66c6-4708-8e53-19a484d2905b', '65aa28d29e504.xlsx', '2024-01-19 07:46:26', '2024-01-19 07:46:26');

-- Dumping structure for table qira_db.tt_problem_document
CREATE TABLE IF NOT EXISTS `tt_problem_document` (
  `id` varchar(191) NOT NULL,
  `id_problem` varchar(191) NOT NULL,
  `data_verifikasi` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `id_problem` (`id_problem`),
  CONSTRAINT `FK_tt_problem_document_tm_problem` FOREIGN KEY (`id_problem`) REFERENCES `tm_problem` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table qira_db.tt_problem_document: ~0 rows (approximately)

-- Dumping structure for table qira_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `npk` varchar(191) NOT NULL,
  `department` varchar(191) NOT NULL,
  `posisi` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_npk_unique` (`npk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table qira_db.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `name`, `npk`, `department`, `posisi`, `password`, `created_at`, `updated_at`) VALUES
	('19835497-d3e9-4dbb-bf95-4822120afac7', 'Test User SPV', '2020', 'Electric', 'SPV', '$2y$10$tpW6g/7ms.i8wgeDw6PBbOppzFc9iJujqFEN6dUk6AuKoHxgDRcVu', NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
