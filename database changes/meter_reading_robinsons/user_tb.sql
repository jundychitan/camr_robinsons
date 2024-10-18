-- --------------------------------------------------------
-- Host:                         172.104.188.7
-- Server version:               10.3.35-MariaDB-1:10.3.35+maria~stretch-log - mariadb.org binary distribution
-- Server OS:                    debian-linux-gnu
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

-- Dumping data for table meter_reading_robinsons.user_tb: ~7 rows (approximately)
INSERT INTO `user_tb` (`user_id`, `user_id_sap`, `user_name`, `user_real_name`, `user_job_title`, `user_password`, `user_type`, `user_expiration`, `user_list_src`, `user_access`, `user_email_address`, `user_site_list_ids`, `created_at`, `created_by_user_idx`, `updated_at`, `modified_by_user_idx`) VALUES
	(2030, 'N/A', 'admin.test', 'AMR Opus', 'admin', '$2y$10$Ccmtz5z6SQMlp6oswT0h9.PzCYKk1sGqJZyaOt3jDGlQDyxpntPPy', 'Admin', '9999-12-31', 'AMR', 'ALL', 'karenjoy.sanchez@robinsonsland.com', '0', '2024-06-25 17:54:49', 2012, '2024-08-06 10:57:12', 2030),
	(2042, 'N/A', 'baluyotdaniloangelo', 'Lorem Ipsum', 'Dev', '$2y$10$aWzVE4aRGSmjrMbwuBYulOdnbX2l3leA0rTvMyOgSwBXTzNOuP8le', 'Admin', '9999-12-31', 'AMR', 'ALL', 'baluyotdaniloangelo@gmail.com', '0', '2024-08-05 13:04:47', 2036, '2024-10-11 09:22:46', 2042),
	(2043, 'N/A', 'test user', 'test user', 'admin', '$2y$10$Apyv4p5HQ.YsGNdoLp2sCuOiS6fPsdSantjRE4Qs7NsdW64Z9eh8K', 'Admin', '9999-12-31', 'AMR', 'BYSITE', 'marcgayle.delacruz@robinsonsland.com', '0', '2024-08-06 10:58:36', 2030, '2024-08-31 19:05:01', 2042),
	(2049, 'N/A', 'admin', 'admin', 'admin', '$2y$10$ZhcSQSN8OKos4iv5m76eH.pjF/7o4vrYUoQrMDxGJQRJuic.nAWYm', 'Admin', '9999-12-31', 'AMR', 'ALL', 'admin', '0', '2024-10-09 14:20:10', 2042, '2024-10-09 14:20:10', 0),
	(2050, 'N/A', 'jun.dychitan', 'Jun Dychitan', 'Admin', '$2y$10$Kj1lDAAvaf.YEBQRRaH6eu4l3lml.fXczq0aVlL3rDE8JCZ33JyVG', 'Admin', '9999-12-31', 'AMR', 'ALL', 'jun.dychitan@dec.com.ph', '0', '2024-10-09 15:08:55', 2042, '2024-10-09 15:09:38', 2042),
	(2051, 'N/A', 'daniloangelo.baluyot', 'Centralized Automated Meter Reading', 'daniloangelo.baluyot@dec.com.ph', '$2y$10$MDH9iLjRjxHCYEwIQHj1n.P9d5mGk97zJdK0lNk8y0S.UVg0dGthi', 'Building Engineer', '9999-12-31', 'AMR', 'BYSITE', 'daniloangelo.baluyot@dec.com.ph', '0', '2024-10-09 22:18:15', 2036, '2024-10-14 11:39:55', 2042),
	(2052, 'N/A', 'juan.user', 'User Juan', 'Admin', '$2y$10$pajlXQ0D4FHi2PwwiUqV9.XW2ncACAaA7MFDewg3uBxkJpYNEfVjq', 'Building Engineer', '9999-12-31', 'AMR', 'BYSITE', 'juan.user@email.com', '0', '2024-10-14 13:27:28', 2042, '2024-10-14 13:27:28', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
