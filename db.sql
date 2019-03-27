/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.7.21-log : Database - katargeo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`katargeo` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `katargeo`;

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `categoryid` varchar(200) NOT NULL,
  `category_name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `main_subcategory` */

DROP TABLE IF EXISTS `main_subcategory`;

CREATE TABLE `main_subcategory` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `categoryid` varchar(200) DEFAULT NULL,
  `main_subcategory_name` varchar(250) DEFAULT NULL,
  `main_subcategoryid` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(256) DEFAULT NULL,
  `productid` varchar(200) DEFAULT NULL,
  `main_subcategoryid` varchar(200) DEFAULT NULL,
  `subcategoryid` varchar(200) DEFAULT NULL,
  `original_price` decimal(20,2) DEFAULT NULL,
  `discounted_price` decimal(20,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `subcategory` */

DROP TABLE IF EXISTS `subcategory`;

CREATE TABLE `subcategory` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `categoryid` varchar(200) NOT NULL,
  `main_subcategoryid` varchar(200) DEFAULT NULL,
  `subcategory_name` varchar(250) DEFAULT NULL,
  `subcategoryid` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
