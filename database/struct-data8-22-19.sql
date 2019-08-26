-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table boboth.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) unsigned NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table boboth.admin: 5 rows
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `user_name`, `password`, `is_active`) VALUES
	(1, 'fred@boboth.com', '$2y$10$iE9TVg/dU1ZA25tNcjqPcubrqEvZNIcM9hf3BV2f388zV.fzq1Hqq', 1),
	(2, 'everett@boboth.com', '$2y$10$iE9TVg/dU1ZA25tNcjqPcubrqEvZNIcM9hf3BV2f388zV.fzq1Hqq', 1),
	(3, 'cole@boboth.com', '$2y$10$iE9TVg/dU1ZA25tNcjqPcubrqEvZNIcM9hf3BV2f388zV.fzq1Hqq', 1),
	(4, 'maria@boboth.com', '$2y$10$iE9TVg/dU1ZA25tNcjqPcubrqEvZNIcM9hf3BV2f388zV.fzq1Hqq', 1),
	(5, 'tyler@boboth.com', '$2y$10$iE9TVg/dU1ZA25tNcjqPcubrqEvZNIcM9hf3BV2f388zV.fzq1Hqq', 1);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table boboth.quotes
CREATE TABLE IF NOT EXISTS `quotes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table boboth.quotes: ~0 rows (approximately)
/*!40000 ALTER TABLE `quotes` DISABLE KEYS */;
INSERT INTO `quotes` (`id`, `patient_name`, `updated_at`) VALUES
	(1, 'Beatrix Cumberbund', '2019-08-16 14:01:55'),
	(2, 'Lipsmack Pattywack', '2019-08-18 14:02:17'),
	(3, 'Hilberto Hondoberto', '2019-08-19 14:02:38'),
	(4, 'John Smith (BYU)', '2019-08-22 14:02:51');
/*!40000 ALTER TABLE `quotes` ENABLE KEYS */;

-- Dumping structure for table boboth.reviews
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `entry_datetime` datetime NOT NULL,
  `appointments` int(11) NOT NULL,
  `environment` int(11) NOT NULL,
  `staff` int(11) NOT NULL,
  `trust` int(11) NOT NULL,
  `explains` int(11) NOT NULL,
  `listens` int(11) NOT NULL,
  `likelihood` int(11) NOT NULL,
  `comments` varchar(1000) DEFAULT NULL,
  `approved` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- Dumping data for table boboth.reviews: ~14 rows (approximately)
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` (`id`, `user_name`, `entry_datetime`, `appointments`, `environment`, `staff`, `trust`, `explains`, `listens`, `likelihood`, `comments`, `approved`) VALUES
	(17, '', '2015-08-29 13:14:43', 5, 5, 5, 5, 5, 5, 5, 'easy and kind service!', 1),
	(21, '', '2016-08-10 09:40:57', 5, 5, 5, 5, 5, 5, 5, 'Very kind and patient with kids!', 1),
	(22, '', '2016-08-12 09:29:03', 4, 2, 3, 5, 5, 5, 5, 'Dr Everett was very caring and explained in great detail also went back to charts to last year visit to compare this exam. Great doctor!', 1),
	(23, '', '2016-09-08 09:35:07', 5, 5, 5, 5, 5, 5, 5, '	I enjoyed the staff friendless & willingness to help. Dr. Cole is genuine.', 1),
	(24, '', '2016-10-06 09:35:55', 5, 5, 5, 5, 5, 5, 5, 'Appreciated the thoroughness of my exam and and the time taken to answer questions.', 1),
	(25, '', '2016-10-13 09:37:35', 4, 5, 5, 5, 5, 5, 5, 'Dr. Fred Boboth has been my optometrist for probably twenty years. The eye care is excellent; he and his staff are always courteous, friendly and helpful.', 1),
	(26, '', '2016-10-19 09:38:40', 5, 5, 5, 5, 5, 5, 5, 'Had a nice visit & the reception was the best. The woman went out of her way to help me with my selection & an easier way to get prescriotion easier :-D thank you', 1),
	(27, '', '2017-07-03 10:12:28', 5, 5, 5, 5, 5, 5, 5, 'Loved the environment and the friendly staffðŸ’• Definitely coming back and recommending this palace to my friends and family!', 1),
	(28, 'Jackieeaged', '2017-07-10 04:02:26', 0, 0, 0, 0, 0, 0, 0, 'Vip Download new, Promo Exclusive, Dance Music, Trance, \r\nHouse, Techno DNB, Tracks. \r\nhttps://0daymusic.org', 0),
	(29, '', '2017-07-10 09:58:05', 5, 5, 5, 5, 5, 5, 5, 'Been coming here for about 9 years! Excellent staff. Excellent service.', 1),
	(30, '', '2017-07-10 09:58:56', 5, 5, 5, 5, 5, 5, 5, 'Good,Respectful workers. Fast and good variety of glasses', 1),
	(31, 'Webonlinedomain', '2017-10-30 18:50:57', 5, 5, 5, 5, 5, 5, 5, 'Disclaimer: We are not responsible for any financial loss, data loss, downgrade in search engine rankings, missed customers, undeliverable email or any other damages that you may suffer upon the expiration of bobothvision.com. For more information please refer to section 17.c.1a of our User Agreement. \n\n This is your final notice to renew bobothvision.com: \n\n https://webonlinedomain.com/?n=bobothvision.com&r=c \n\n In the event that bobothvision.com expires, we reserve the right to offer your listing to competing businesses in the same niche and region after 3 business days on an auction basis. \n\n This is the final communication that we are required to send out regarding the expiration of bobothvision.com \n\n Secure Online Payment: \n\n https://webonlinedomain.com/?n=bobothvision.com&r=c \n\n All services will be automatically restored on bobothvision.com if payment is received in full before expiration. Thank you for your cooperation.', 0),
	(32, 'Webupdomain', '2017-11-14 17:12:55', 5, 5, 5, 5, 5, 5, 5, 'Disclaimer: We are not responsible for any financial loss, data loss, downgrade in search engine rankings, missed customers, undeliverable email or any other damages that you may suffer upon the expiration of bobothvision.com. For more information please refer to section 17.c.1a of our User Agreement. \n\n This is your final notice to renew bobothvision.com: \n\n https://webupdomain.com/?n=bobothvision.com&r=c \n\n In the event that bobothvision.com expires, we reserve the right to offer your listing to competing businesses in the same niche and region after 3 business days on an auction basis. \n\n This is the final communication that we are required to send out regarding the expiration of bobothvision.com \n\n Secure Online Payment: \n\n https://webupdomain.com/?n=bobothvision.com&r=c \n\n All services will be automatically restored on bobothvision.com if payment is received in full before expiration. Thank you for your cooperation.', 0),
	(33, 'Netcentraldomain', '2018-02-01 11:27:26', 5, 5, 5, 5, 5, 5, 5, 'Disclaimer: We are not responsible for any financial loss, data loss, downgrade in search engine rankings, missed customers, undeliverable email or any other damages that you may suffer upon the expiration of bobothvision.com. For more information please refer to section 17.c.1a of our User Agreement. \n\n This is your final notice to renew bobothvision.com: \n\n https://netcentraldomain.com/?n=bobothvision.com&r=c \n\n In the event that bobothvision.com expires, we reserve the right to offer your listing to competing businesses in the same niche and region after 3 business days on an auction basis. \n\n This is the final communication that we are required to send out regarding the expiration of bobothvision.com \n\n Secure Online Payment: \n\n https://netcentraldomain.com/?n=bobothvision.com&r=c \n\n All services will be automatically restored on bobothvision.com if payment is received in full before expiration. Thank you for your cooperation.', 0);
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
