/*
SQLyog Community v10.42 
MySQL - 5.6.17-log : Database - tubespromnet
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tubespromnet` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tubespromnet`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `nama_admin` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id_admin`,`username`,`password`,`nama_admin`,`email`) values (1,'admin','admin','Wiwi Juwita','wijuwita@gmail.com');

/*Table structure for table `balasan` */

DROP TABLE IF EXISTS `balasan`;

CREATE TABLE `balasan` (
  `id_balasan` int(11) NOT NULL AUTO_INCREMENT,
  `id_komentar` int(11) DEFAULT NULL,
  `tgl_balas` date DEFAULT NULL,
  `isi_balasan` text,
  PRIMARY KEY (`id_balasan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `balasan` */

insert  into `balasan`(`id_balasan`,`id_komentar`,`tgl_balas`,`isi_balasan`) values (1,1,'2016-05-12','Sama sama'),(2,5,'2016-05-12','yeyeyyeyeyeyeyyeye');

/*Table structure for table `komentar` */

DROP TABLE IF EXISTS `komentar`;

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) DEFAULT NULL,
  `tgl_post` date DEFAULT NULL,
  `isi_komentar` text,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `komentar` */

insert  into `komentar`(`id_komentar`,`id_member`,`tgl_post`,`isi_komentar`,`status`) values (1,1,'2016-05-11','terimakasih',0),(2,1,'2016-05-11','assssss',0),(3,1,'2016-05-11','thx',0),(4,1,'2016-05-11','sialan',0),(5,1,'2016-05-12','KJSHDKASHK',0),(6,1,'2016-05-12','iiiahfah',0);

/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `nama_member` varchar(50) DEFAULT NULL,
  `email_member` varchar(50) DEFAULT NULL,
  `password_member` varchar(30) DEFAULT NULL,
  `alamat_member` text,
  `nohp_member` char(15) DEFAULT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `member` */

insert  into `member`(`id_member`,`nama_member`,`email_member`,`password_member`,`alamat_member`,`nohp_member`) values (1,'Wiwi Juwita','wijuwita@gmail.com','123456','Subang','082315554361');

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id_transaksi`,`id_member`,`tgl_transaksi`,`total_harga`) values (1,1,'2016-05-04',1000000),(2,1,'2016-05-05',780000);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
