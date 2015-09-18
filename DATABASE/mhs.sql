/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.0.45-community-nt-log : Database - mhs
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`mhs` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `mhs`;

/*Table structure for table `tbl_jurusan` */

DROP TABLE IF EXISTS `tbl_jurusan`;

CREATE TABLE `tbl_jurusan` (
  `kd_jrs` varchar(15) NOT NULL,
  `nm_jrs` varchar(35) default NULL,
  PRIMARY KEY  (`kd_jrs`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `tbl_jurusan` */

insert  into `tbl_jurusan`(`kd_jrs`,`nm_jrs`) values ('SI','SISTEM INFORMASI');

/*Table structure for table `tbl_mhs` */

DROP TABLE IF EXISTS `tbl_mhs`;

CREATE TABLE `tbl_mhs` (
  `npm` varchar(15) NOT NULL,
  `nm_mhs` varchar(30) default NULL,
  `kd_jrs` varchar(14) default NULL,
  `nm_jrs` varchar(25) default NULL,
  `angkatan` varchar(25) default NULL,
  PRIMARY KEY  (`npm`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `tbl_mhs` */

insert  into `tbl_mhs`(`npm`,`nm_mhs`,`kd_jrs`,`nm_jrs`,`angkatan`) values ('1131','rizki ramadani','si','sistem informasi','2011');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
