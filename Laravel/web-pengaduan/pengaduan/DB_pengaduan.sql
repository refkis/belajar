-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for pengaduan
CREATE DATABASE IF NOT EXISTS `pengaduan` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `pengaduan`;

-- Dumping structure for table pengaduan.aduan
CREATE TABLE IF NOT EXISTS `aduan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `kategori_aduan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_aduan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_aduan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_aduan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pengaduan.aduan: ~2 rows (approximately)
/*!40000 ALTER TABLE `aduan` DISABLE KEYS */;
INSERT INTO `aduan` (`id`, `user_id`, `kategori_aduan`, `judul_aduan`, `detail_aduan`, `foto_aduan`, `created_at`, `updated_at`) VALUES
	(1, 3, 'Infrastruktur', 'Jalan Berlubang', 'Ada jalan berlubang di daerah bla bla bla', '1592131361.jpg', '2021-11-14 14:17:08', '2021-11-14 14:17:08'),
	(3, 5, 'Pelayanan', 'KTP 1 tahun belum kelar', 'saya mengurus ktp sejak tahun', NULL, '2021-11-15 17:38:47', '2021-11-15 17:38:47');
/*!40000 ALTER TABLE `aduan` ENABLE KEYS */;

-- Dumping structure for table pengaduan.komentar
CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `aduan_id` int(11) NOT NULL,
  `isi_komentar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_komentar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pengaduan.komentar: ~0 rows (approximately)
/*!40000 ALTER TABLE `komentar` DISABLE KEYS */;
/*!40000 ALTER TABLE `komentar` ENABLE KEYS */;

-- Dumping structure for table pengaduan.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pengaduan.migrations: ~6 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2021_11_14_065306_create_pengadu_table', 2),
	(4, '2021_11_14_070821_create_aduan_table', 3),
	(5, '2021_11_14_071805_create_komentar_table', 4),
	(6, '2021_11_14_074429_create_pejabat_table', 5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table pengaduan.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pengaduan.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table pengaduan.pejabat
CREATE TABLE IF NOT EXISTS `pejabat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nip_pejabat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pejabat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pejabat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon_pejabat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar_pejabat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pengaduan.pejabat: ~0 rows (approximately)
/*!40000 ALTER TABLE `pejabat` DISABLE KEYS */;
/*!40000 ALTER TABLE `pejabat` ENABLE KEYS */;

-- Dumping structure for table pengaduan.pengadu
CREATE TABLE IF NOT EXISTS `pengadu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_pengadu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pengadu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_pengadu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pengadu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon_pengadu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pengadu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar_pengadu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pengaduan.pengadu: ~3 rows (approximately)
/*!40000 ALTER TABLE `pengadu` DISABLE KEYS */;
INSERT INTO `pengadu` (`id`, `user_id`, `nik_pengadu`, `nama_pengadu`, `kategori_pengadu`, `alamat_pengadu`, `telepon_pengadu`, `email_pengadu`, `password`, `avatar_pengadu`, `created_at`, `updated_at`) VALUES
	(3, '3', '150501070895', 'Kang Cilok', 'Perorangan', 'Indonesia Raya\r\nMerdeka Merdeka', '0856443244', 'cilok@gmail.com', '12345', 'Picture1.png', '2021-11-15 14:57:29', '2021-11-15 23:27:12'),
	(4, '5', '12345', 'sibro', 'Perorangan', 'dimana', '47167', 'sibro@gmail.com', '$2y$10$lFHHPyhIPQZ4/.fI93peyuHzaobt4smvV5oA8bHct/GtRdhiin5oe', 'sibro.jpg', '2021-11-15 15:07:35', '2021-11-15 15:07:35');
/*!40000 ALTER TABLE `pengadu` ENABLE KEYS */;

-- Dumping structure for table pengaduan.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pengaduan.users: ~4 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `level`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'refki santriono', 'refki@gmail.com', NULL, '$2y$10$0ZvsWAcODUdV00u12Q163.9UkF6LOYINm.UkpQ0VJ6gEtZQ9r1Mdm', 'nKuMy6Us8E81nzx8H025qhbWifzurdtF7UDGsWZCguBj91hukbzCTyOGgOaJ', '2021-11-14 10:26:31', '2021-11-14 10:26:31'),
	(3, 'pengadu', 'Kang Cilok', 'cilok@gmail.com', NULL, '$2y$10$jROpyqs3MFoXjNPWqRGW9ODpdHmlaw/3sJytm7ePTC4lHEhLrBq..', 'YailLciusGR7e2ywsCPcB8KtY6bqB3mOTv6Y6LRXwjgKPfYnIwNBSC6YEZ81', '2021-11-15 14:57:29', '2021-11-15 14:57:29'),
	(4, 'pengadu', 'Mr. Pengadu', 'pengadu@gmail.com', NULL, '$2y$10$kk0.fSP2DVSfEX/IR63qQOVfzqZ0cn96RITdflZvfft6BVoeD7d3u', NULL, NULL, NULL),
	(5, 'pengadu', 'sibro', 'sibro@gmail.com', NULL, '$2y$10$kk0.fSP2DVSfEX/IR63qQOVfzqZ0cn96RITdflZvfft6BVoeD7d3u', 'MhVi2PPuqhAbdhUXMuf5GRs2hiKHxgBYswbEHz1HZA9Z8eNHiCWxFYD9nGsI', '2021-11-15 15:07:35', '2021-11-15 15:07:35');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
