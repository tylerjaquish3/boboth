-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Host: custsql-ipg22.eigbox.net
-- Generation Time: Mar 27, 2018 at 11:17 PM
-- Server version: 5.6.37
-- PHP Version: 4.4.9
-- 
-- Database: `bobothvisionclinic`
-- 
CREATE DATABASE `bobothvisionclinic` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bobothvisionclinic`;

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` VALUES (1, 'fred', '@Bobothvision1');
INSERT INTO `admin` VALUES (2, 'everett', '@Bobothvision1');
INSERT INTO `admin` VALUES (3, 'cole', '@Bobothvision1');
INSERT INTO `admin` VALUES (4, 'maria', '@Bobothvision1');

-- --------------------------------------------------------

-- 
-- Table structure for table `reviews`
-- 

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

-- 
-- Dumping data for table `reviews`
-- 

INSERT INTO `reviews` VALUES (17, '', '2015-08-29 13:14:43', 5, 5, 5, 5, 5, 5, 5, 'easy and kind service!', 1);
INSERT INTO `reviews` VALUES (21, '', '2016-08-10 09:40:57', 5, 5, 5, 5, 5, 5, 5, 'Very kind and patient with kids!', 1);
INSERT INTO `reviews` VALUES (22, '', '2016-08-12 09:29:03', 4, 2, 3, 5, 5, 5, 5, 'Dr Everett was very caring and explained in great detail also went back to charts to last year visit to compare this exam. Great doctor!', 1);
INSERT INTO `reviews` VALUES (23, '', '2016-09-08 09:35:07', 5, 5, 5, 5, 5, 5, 5, '	I enjoyed the staff friendless & willingness to help. Dr. Cole is genuine.', 1);
INSERT INTO `reviews` VALUES (24, '', '2016-10-06 09:35:55', 5, 5, 5, 5, 5, 5, 5, 'Appreciated the thoroughness of my exam and and the time taken to answer questions.', 1);
INSERT INTO `reviews` VALUES (25, '', '2016-10-13 09:37:35', 4, 5, 5, 5, 5, 5, 5, 'Dr. Fred Boboth has been my optometrist for probably twenty years. The eye care is excellent; he and his staff are always courteous, friendly and helpful.', 1);
INSERT INTO `reviews` VALUES (26, '', '2016-10-19 09:38:40', 5, 5, 5, 5, 5, 5, 5, 'Had a nice visit & the reception was the best. The woman went out of her way to help me with my selection & an easier way to get prescriotion easier :-D thank you', 1);
INSERT INTO `reviews` VALUES (27, '', '2017-07-03 10:12:28', 5, 5, 5, 5, 5, 5, 5, 'Loved the environment and the friendly staffðŸ’• Definitely coming back and recommending this palace to my friends and family!', 1);
INSERT INTO `reviews` VALUES (28, 'Jackieeaged', '2017-07-10 04:02:26', 0, 0, 0, 0, 0, 0, 0, 'Vip Download new, Promo Exclusive, Dance Music, Trance, \r\nHouse, Techno DNB, Tracks. \r\nhttps://0daymusic.org', 0);
INSERT INTO `reviews` VALUES (29, '', '2017-07-10 09:58:05', 5, 5, 5, 5, 5, 5, 5, 'Been coming here for about 9 years! Excellent staff. Excellent service.', 1);
INSERT INTO `reviews` VALUES (30, '', '2017-07-10 09:58:56', 5, 5, 5, 5, 5, 5, 5, 'Good,Respectful workers. Fast and good variety of glasses', 1);
INSERT INTO `reviews` VALUES (31, 'Webonlinedomain', '2017-10-30 18:50:57', 5, 5, 5, 5, 5, 5, 5, 'Disclaimer: We are not responsible for any financial loss, data loss, downgrade in search engine rankings, missed customers, undeliverable email or any other damages that you may suffer upon the expiration of bobothvision.com. For more information please refer to section 17.c.1a of our User Agreement. \n\n This is your final notice to renew bobothvision.com: \n\n https://webonlinedomain.com/?n=bobothvision.com&r=c \n\n In the event that bobothvision.com expires, we reserve the right to offer your listing to competing businesses in the same niche and region after 3 business days on an auction basis. \n\n This is the final communication that we are required to send out regarding the expiration of bobothvision.com \n\n Secure Online Payment: \n\n https://webonlinedomain.com/?n=bobothvision.com&r=c \n\n All services will be automatically restored on bobothvision.com if payment is received in full before expiration. Thank you for your cooperation.', 0);
INSERT INTO `reviews` VALUES (32, 'Webupdomain', '2017-11-14 17:12:55', 5, 5, 5, 5, 5, 5, 5, 'Disclaimer: We are not responsible for any financial loss, data loss, downgrade in search engine rankings, missed customers, undeliverable email or any other damages that you may suffer upon the expiration of bobothvision.com. For more information please refer to section 17.c.1a of our User Agreement. \n\n This is your final notice to renew bobothvision.com: \n\n https://webupdomain.com/?n=bobothvision.com&r=c \n\n In the event that bobothvision.com expires, we reserve the right to offer your listing to competing businesses in the same niche and region after 3 business days on an auction basis. \n\n This is the final communication that we are required to send out regarding the expiration of bobothvision.com \n\n Secure Online Payment: \n\n https://webupdomain.com/?n=bobothvision.com&r=c \n\n All services will be automatically restored on bobothvision.com if payment is received in full before expiration. Thank you for your cooperation.', 0);
INSERT INTO `reviews` VALUES (33, 'Netcentraldomain', '2018-02-01 11:27:26', 5, 5, 5, 5, 5, 5, 5, 'Disclaimer: We are not responsible for any financial loss, data loss, downgrade in search engine rankings, missed customers, undeliverable email or any other damages that you may suffer upon the expiration of bobothvision.com. For more information please refer to section 17.c.1a of our User Agreement. \n\n This is your final notice to renew bobothvision.com: \n\n https://netcentraldomain.com/?n=bobothvision.com&r=c \n\n In the event that bobothvision.com expires, we reserve the right to offer your listing to competing businesses in the same niche and region after 3 business days on an auction basis. \n\n This is the final communication that we are required to send out regarding the expiration of bobothvision.com \n\n Secure Online Payment: \n\n https://netcentraldomain.com/?n=bobothvision.com&r=c \n\n All services will be automatically restored on bobothvision.com if payment is received in full before expiration. Thank you for your cooperation.', 0);
