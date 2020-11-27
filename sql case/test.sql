/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for test
CREATE DATABASE IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `test`;

-- Dumping structure for table test.offices
CREATE TABLE IF NOT EXISTS `offices` (
  `id` int PRIMARY KEY AUTO_INCREMENT COMMENT 'ID офиса',
  `name` text COMMENT 'Наименование офиса'
)ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Офисы';

-- Dumping data for table test.offices: ~0 rows (approximately)
/*!40000 ALTER TABLE `offices` DISABLE KEYS */;
INSERT INTO `offices` (`id`, `name`) VALUES
	(1, 'Mercury'),
	(2, 'Venera'),
	(3, 'Earth');
/*!40000 ALTER TABLE `offices` ENABLE KEYS */;

-- Dumping structure for table test.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int PRIMARY KEY AUTO_INCREMENT COMMENT 'ID пользователя',
  `name` varchar(50) DEFAULT NULL COMMENT 'ФИО пользователя',
  `office_id` int NOT NULL COMMENT 'offices.id - ID офиса',
  CONSTRAINT users_offices_fk
  FOREIGN KEY (office_id)  REFERENCES offices (id)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Пользователи';

-- Dumping data for table test.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `office_id`) VALUES
	(1, 'Alfa', 1),
	(2, 'Beta', 1),
	(3, 'Gamma', 2),
	(4, 'Delta', 3),
	(5, 'Epsilon', 3),
	(6, 'Zetta', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
