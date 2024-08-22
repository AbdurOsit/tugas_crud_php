-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for universitas_negeri_london
CREATE DATABASE IF NOT EXISTS `universitas_negeri_london` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `universitas_negeri_london`;

-- Dumping structure for table universitas_negeri_london.daftar_dosen
CREATE TABLE IF NOT EXISTS `daftar_dosen` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `NO_INDUK` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Tempat_Lahir` varchar(50) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `kualifikasi_akademik` varchar(20) DEFAULT NULL,
  `tahun_lulus` int DEFAULT NULL,
  `Bidang_Keahlian` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table universitas_negeri_london.daftar_dosen: ~20 rows (approximately)
INSERT INTO `daftar_dosen` (`id`, `NO_INDUK`, `Nama`, `alamat`, `jenis_kelamin`, `Tempat_Lahir`, `Tanggal_Lahir`, `kualifikasi_akademik`, `tahun_lulus`, `Bidang_Keahlian`, `updated_at`) VALUES
	(2, '130631100124', 'Prof. DR. M. Abi Said Almubarok, S.Pd., M.Eng.', 'Jember', 'L', 'Osaka', '1985-09-02', 'Strata III', 2010, 'Pemrograman', '2024-08-07 07:41:40'),
	(3, '130631100125', 'Ahmad Rofiq Zamhuri, MH.', 'sampang', 'L', 'London', '1980-03-12', 'Strata II', 2013, 'Hukum Perdata', '2024-08-07 07:41:41'),
	(4, '130631100126', 'Ahmad Shobirin, M.Hum', 'bangkalan', 'L', 'Singapore', '1981-02-11', 'Strata II', 2015, 'Humaniora', '2024-08-07 07:41:42'),
	(5, '130631100127', 'DR. Ahmad Fuad Hasan, MH.', 'pamekasan', 'L', 'kuala Lumpur', '1983-04-23', 'Strata III', 2014, 'Hukum Pidana', '2024-08-07 07:41:43'),
	(6, '130631100128', 'Ahmad Nasrudin, M.Pd.', 'sumenep', 'L', 'Los Angeles', '1982-02-15', 'Strata II', 2010, 'Pendidikan', '2024-08-07 07:41:44'),
	(7, '130631100129', 'Ana Zulfa Mubarokah, MH.', 'pamekasan', 'P', 'Kopenhagen', '1987-10-08', 'Strata II', 2011, 'Hukum Pidana', '2024-08-07 07:41:45'),
	(8, '130631100130', 'Eva Rosidatul Afifah,M.Pd.', 'sumenep', 'P', 'Los Angeles', '1984-12-25', 'Strata II', 2015, 'Pendidikan', '2024-08-07 07:41:46'),
	(9, '130631100131', 'DR. Fauzi Afifi, MPd.', 'Surabaya', 'L', 'Osaka', '1985-05-19', 'Strata II', 2013, 'Pendidikan', '2024-08-07 07:41:47'),
	(10, '130631100132', 'DR. Hanifatul Masruroh , M.Hum', 'pamekasan', 'P', 'Madrid', '1980-06-19', 'Strata III', 2010, 'Humaniora', '2024-08-07 07:41:47'),
	(11, '130631100133', 'Laila Faiqotul Jannah, MT.', 'bangkalan', 'P', 'Osaka', '1985-11-17', 'Strata II', 2013, 'elektronika', '2024-08-07 07:41:48'),
	(12, '130631100134', 'DR. M. Aris Dermawan, M.Kom.', 'Jember', 'L', 'London', '1983-12-06', 'Strata III', 2015, 'Pemrograman', '2024-08-07 07:41:51'),
	(13, '130631100135', 'Muslihatun Aimah, M.Pd.', 'pamekasan', 'P', 'Singapore', '1981-03-05', 'Strata II', 2014, 'Pendidikan', '2024-08-07 07:41:49'),
	(14, '130631100136', 'Rifatul Jannah, M.Si.', 'Los Angeles', 'P', 'kuala Lumpur', '1985-08-01', 'Strata II', 2010, 'Matematika', '2024-08-07 07:41:50'),
	(15, '130631100137', 'Tsuaibatun Nafiah, MH.', 'Jember', 'P', 'Paris', '1983-08-17', 'Strata II', 2011, 'Hukum Perdata', '2024-08-07 07:41:52'),
	(16, '130631100138\r\n\r\n', 'DR. Siti Magfirotin, M.Si.', 'Los Angeles', 'P', 'Kopenhagen', '1985-04-13', 'Strata III', 2015, 'Fisika', '2024-08-07 07:41:53'),
	(17, '130631100139', 'Siti Mukholifah, M.Pd.', 'bangkalan', 'P', 'Tokyo', '1982-01-01', 'Strata II', 2012, 'Pendidikan', '2024-08-07 07:41:54'),
	(18, '130631100140', 'DR. Ulviatul Arofah, M.Si.', 'sampang', 'P', 'Madrid', '1984-05-05', 'Strata III', 2016, 'Kimia', '2024-08-07 07:41:56'),
	(19, '0863574', 'Dea Afrizal m', 'Indonesia', 'L', 'Indonesia', '2024-08-06', 'Strata I', 2027, 'Software Einginer', '2024-08-07 07:42:00'),
	(21, '675764747', 'Terserah', 'bayus', 'L', 'blsdwjdsqs', '2024-09-06', 'llulus', 2000, 'SIJA', NULL),
	(22, '923612673901', 'Dea Afrizal', 'Jakarta', 'L', 'Jakarta', '2024-08-22', 'S1', 2059, 'Pemrograman', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
