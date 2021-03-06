# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.35)
# Database: bacs383
# Generation Time: 2017-11-16 17:15:00 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table test
# ------------------------------------------------------------

DROP TABLE IF EXISTS `test`;

CREATE TABLE `test` (
  `userID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(30) DEFAULT '',
  `gender` varchar(1) DEFAULT '',
  `timestampTag` timestamp NULL DEFAULT NULL,
  `timeArticle1` time DEFAULT NULL,
  `A1Q1` tinyint(1) DEFAULT NULL,
  `A1Q2` tinyint(1) DEFAULT NULL,
  `A1Q3` tinyint(1) DEFAULT NULL,
  `A1Q4` tinyint(1) DEFAULT NULL,
  `timeArticle2` time DEFAULT NULL,
  `A2Q1` tinyint(1) DEFAULT NULL,
  `A2Q2` tinyint(1) DEFAULT NULL,
  `A2Q3` tinyint(1) DEFAULT NULL,
  `A2Q4` tinyint(1) DEFAULT NULL,
  `prefTheme` char(1) DEFAULT NULL,
  `prefStrength` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
