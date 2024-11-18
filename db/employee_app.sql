/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 8.0.30 : Database - employe_app
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`employe_app` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `employe_app`;

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nip` bigint NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `born_date` date NOT NULL,
  `born_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` int NOT NULL,
  `formation` int NOT NULL,
  `position` int NOT NULL,
  `placed_job` int NOT NULL,
  `work_unit` int NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_delete` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `employee_group_foreign` (`group`),
  KEY `employee_formation_foreign` (`formation`),
  KEY `employee_position_foreign` (`position`),
  KEY `employee_placed_job_foreign` (`placed_job`),
  KEY `employee_work_unit_foreign` (`work_unit`),
  CONSTRAINT `employee_formation_foreign` FOREIGN KEY (`formation`) REFERENCES `formation` (`id`),
  CONSTRAINT `employee_group_foreign` FOREIGN KEY (`group`) REFERENCES `group` (`id`),
  CONSTRAINT `employee_placed_job_foreign` FOREIGN KEY (`placed_job`) REFERENCES `placed_job` (`id`),
  CONSTRAINT `employee_position_foreign` FOREIGN KEY (`position`) REFERENCES `position` (`id`),
  CONSTRAINT `employee_work_unit_foreign` FOREIGN KEY (`work_unit`) REFERENCES `work_unit` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `employee` */

insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (2,12130569352,'Islam','Kiarra Waters II','2024-11-16','Jakarta','572 Nikolaus Parkways Apt. 818\nNorth Lennaburgh, SD 75333-3834','Pria',1,1,5,4,5,'602-304-7141','0',1,'2024-11-16 19:13:17','2024-11-16 19:13:17','2024-11-17 02:13:17',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (3,12130569827,'Islam','Buddy Tillman','2024-11-16','Jakarta','459 Jairo Path\nMorissetteshire, IN 52359','Pria',1,1,5,4,5,'+1 (689) 970-0132','0',1,'2024-11-16 19:14:27','2024-11-16 19:14:27','2024-11-17 02:14:27',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (4,12130569257,'Islam','Miss Emilie Hansen IV','2024-11-16','Jakarta','3413 Ritchie Circles Apt. 710\nLake Percy, NJ 19678','Pria',1,2,5,4,5,'920-491-2001','0',1,'2024-11-16 19:15:59','2024-11-17 15:32:17','2024-11-17 02:15:59',1);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (5,12130569563,'Islam','Rahsaan Lubowitz','2024-11-16','Jakarta','8842 Annetta Knolls Apt. 605\nKuhichaven, KS 78810-1881','Pria',1,1,5,4,5,'+1-417-963-1389','0',1,'2024-11-16 19:21:07','2024-11-16 19:21:07','2024-11-17 02:21:07',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (6,12130569545,'Islam','Miss Lila Kris','2024-11-16','Jakarta','23878 Blanca Common\nSouth Kelvinchester, GA 98277','Pria',1,1,5,4,5,'+15057183040','0',1,'2024-11-16 19:22:50','2024-11-16 19:22:50','2024-11-17 02:22:50',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (7,12130569017,'Islam','Arch Herman III','2024-11-16','Jakarta','974 Jackeline Expressway\nNorth Cristopher, MT 09329','Pria',1,1,5,4,5,'+1.878.347.9335','0',1,'2024-11-16 19:23:04','2024-11-17 07:28:41','2024-11-17 02:23:04',1);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (8,12130569441,'Islam','Alexandria Grady','2024-11-16','Jakarta','2803 Kovacek Circle\nLednerberg, CO 11188-9055','Pria',1,1,5,4,5,'818-664-5629','0',1,'2024-11-16 19:26:37','2024-11-16 19:26:37','2024-11-17 02:26:37',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (9,12130569207,'Islam','Florida Boscoss','2024-11-16','Jakarta','54574 Toni Place Suite 581Port Izabellamouth, CA 27413','Pria',1,1,5,4,5,'3425345345341','0',1,'2024-11-16 19:28:06','2024-11-16 19:28:06','2024-11-17 02:28:06',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (10,12130569230,'Islam','Anthony Wehners','2001-03-07','Jakarta','94656 Mante Crossing Apt. 851Predovicshire, WA 60194-3454','Pria',1,1,5,4,5,'53','043',1,'2024-11-16 19:29:57','2024-11-16 19:29:57','2024-11-17 02:29:57',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (11,12130569344,'Islam','Prof. Jadon Stiedemann III','2024-11-16','Jakarta','21511 Agustina Wall Apt. 288\nTrantowland, NE 38090-7002','Pria',1,1,5,4,5,'1-947-753-7892','0',1,'2024-11-16 19:32:11','2024-11-16 19:32:11','2024-11-17 02:32:11',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (12,12130569425,'Islam','Andres Weissnat','2024-11-16','Jakarta','391 Champlin Path Suite 559\nTressieville, UT 44711','Pria',1,1,5,4,5,'1-240-488-3178','0',1,'2024-11-16 19:35:59','2024-11-16 19:35:59','2024-11-17 02:35:59',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (13,12130569412,'Islam','Alexane Rogahn','2024-11-16','Jakarta','186 Cole Divide\nKertzmannbury, CA 18082','Pria',1,1,5,4,5,'+18484823028','0',1,'2024-11-16 19:36:17','2024-11-16 19:36:17','2024-11-17 02:36:17',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (14,12130569278,'Islam','Micah Grimes','2024-11-16','Jakarta','714 Koepp Squares\nWest Cristinafort, VA 46073','Pria',1,1,5,4,5,'1-331-830-1796','0',1,'2024-11-16 19:37:41','2024-11-17 07:28:53','2024-11-17 02:37:41',1);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (15,12130569419,'Islam','Ariel Wiegand','2024-11-16','Jakarta','5220 Yasmin Island\nO\'Reillyton, NV 12249-8217','Pria',1,1,5,4,5,'+1-539-716-7969','0',1,'2024-11-16 19:37:49','2024-11-16 19:37:49','2024-11-17 02:37:49',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (16,12130569408,'Islam','Benny Jast','2024-11-16','Jakarta','192 Jamil Rest Suite 375\nNew Thaddeuschester, HI 54795','Pria',1,1,5,4,5,'234-283-5468','0',1,'2024-11-16 19:39:41','2024-11-16 19:39:41','2024-11-17 02:39:41',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (17,12130569036,'Islam','Bart Parisian','2024-11-16','Jakarta','602 Odell Street Apt. 681\nPort Camylleport, NY 64073','Pria',1,1,5,4,5,'+1 (341) 665-0680','0',1,'2024-11-16 19:40:31','2024-11-17 07:28:45','2024-11-17 02:40:31',1);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (18,12130569074,'Islam','Prof. Garett Monahan IV','2024-11-16','Jakarta','13178 Hal Stream\nNew Newellport, MI 96146-1206','Pria',1,1,5,4,5,'1-469-577-0276','0',1,'2024-11-16 19:40:51','2024-11-17 15:32:12','2024-11-17 02:40:51',1);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (19,12130569265,'Islam','Prof. Jevon Barrows','2024-11-16','Jakarta','359 Brendan Highway\nSusanatown, WI 80731-7405','Pria',1,1,5,4,5,'1-563-788-4295','0',1,'2024-11-16 19:41:05','2024-11-16 19:41:05','2024-11-17 02:41:05',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (20,12130569247,'Islam','Miss Sienna Ryan V','2024-11-16','Jakarta','846 Buckridge Turnpike\nEldredborough, IN 70594-5563','Pria',1,1,5,4,5,'(267) 385-1229','0',1,'2024-11-16 19:43:36','2024-11-16 19:43:36','2024-11-17 02:43:36',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (21,12130569417,'Islam','Aileen Zieme','2024-11-16','Jakarta','49145 Muller Camp\nPort Carleton, NM 55697','Pria',1,1,5,4,5,'843-628-1373','0',1,'2024-11-16 19:44:59','2024-11-16 19:44:59','2024-11-17 02:44:59',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (22,12130569653,'Islam','Julius Wehner','2024-11-16','Jakarta','9728 Piper Well Apt. 376\nNorth Rupertland, VT 14609','Pria',1,1,5,4,5,'+1 (806) 621-6551','0',1,'2024-11-16 19:46:02','2024-11-16 19:46:02','2024-11-17 02:46:02',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (23,12130569829,'Islam','Kristian Goyette','2024-11-16','Jakarta','8122 Mona Rue\nSouth Justineside, VT 68183-3335','Pria',1,1,5,4,5,'941.847.7103','0',1,'2024-11-16 19:46:26','2024-11-16 19:46:26','2024-11-17 02:46:26',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (24,12130569851,'Islam','Dulce Homenick','2024-11-16','Jakarta','31634 Pouros Village\nHardyfort, WV 96212-6744','Pria',1,1,5,4,5,'986.250.4461','0',1,'2024-11-16 19:47:30','2024-11-16 19:47:30','2024-11-17 02:47:30',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (25,12130569397,'Islam','Mrs. Alexandra Erdman','2024-11-16','Jakarta','45821 Ariane Brooks\nNorth Mireyaport, IA 59341','Pria',1,1,5,4,5,'+13072538133','0',1,'2024-11-16 19:58:29','2024-11-16 19:58:29','2024-11-17 02:58:29',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (26,12130569330,'Islam','Prof. Burley Casper II','2024-11-16','Jakarta','5549 Roberta Trail\nNorth Kellytown, ND 85235-9880','Pria',1,1,5,4,5,'(276) 338-4077','0',1,'2024-11-16 19:58:37','2024-11-16 19:58:37','2024-11-17 02:58:37',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (27,12130569163,'Islam','Thora Stiedemann','2024-11-16','Jakarta','53778 Keon Highway\nRodstad, MS 10146-9942','Pria',1,1,5,4,5,'1-708-968-7943','0',1,'2024-11-16 20:00:13','2024-11-17 07:28:48','2024-11-17 03:00:13',1);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (28,12130569493,'Islam','Americo Larson','2024-11-16','Jakarta','868 Thiel Canyon\nKarleyburgh, TN 45423-3070','Pria',1,1,5,4,5,'+1-341-751-9562','0',1,'2024-11-16 20:00:28','2024-11-16 20:00:28','2024-11-17 03:00:28',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (29,12130569752,'Islam','Jakayla Satterfield','2024-11-16','Jakarta','54322 Walter Highway Suite 001\nWest Juliana, DE 93494','Pria',1,1,5,4,5,'253.857.8765','0',1,'2024-11-16 20:02:37','2024-11-16 20:02:37','2024-11-17 03:02:37',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (39,88812377127,'Protestan','Galih Kurnia Wilojati','1998-10-10','asdasdasd','asdasdasdasd','Pria',1,5,5,2,4,'7999182389812','9888812838812838',1,'2024-11-17 01:22:02','2024-11-17 01:22:02','2024-11-17 08:22:02',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (40,32525235252,'Protestan','dasda','1998-10-10','sdfsfs','dfsfdsf','Pria',2,5,4,2,5,'32523542525','2352352235',1,'2024-11-17 01:46:03','2024-11-17 01:46:03','2024-11-17 08:46:03',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (41,32442434234,'Islam','asdasd','1998-10-10','dfsdf','sdfsfd','Pria',1,3,3,1,6,'234234234324','3266623444232',1,'2024-11-17 01:48:20','2024-11-18 03:20:42','2024-11-17 08:48:20',1);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (42,43773454534,'Protestan','dfsdfs','1998-10-10','5345345345345','5345345345345','Pria',2,5,5,1,4,'345345345345','5345345345343',1,'2024-11-17 03:44:28','2024-11-18 00:08:00','2024-11-17 10:44:28',1);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (43,26254345435,'Katolik','Tesr','1998-10-10','gfdgd','fgdfgdfg','Wanita',1,5,5,2,2,'345345','345345345',1,'2024-11-17 21:02:06','2024-11-17 21:02:06','2024-11-18 04:02:06',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (44,23423423423,'Protestan','asda','2004-03-24','fsdfsd','fsdfsfsdf','Pria',2,5,4,2,4,'2342342342','234266234234',1,'2024-11-17 21:05:02','2024-11-17 21:05:02','2024-11-18 04:05:02',0);
insert  into `employee`(`id`,`nip`,`religion`,`name`,`born_date`,`born_place`,`address`,`gender`,`group`,`formation`,`position`,`placed_job`,`work_unit`,`phone_number`,`tax_number`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (45,12312312312,'Buddha','asdas','1998-10-10','dasdasd','asdasdads','Pria',2,3,11,3,10,'14224124142','123123123123',1,'2024-11-17 21:47:29','2024-11-17 21:47:29','2024-11-18 04:47:29',0);

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `formation` */

DROP TABLE IF EXISTS `formation`;

CREATE TABLE `formation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `group_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_delete` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `formation_group_id_foreign` (`group_id`),
  CONSTRAINT `formation_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `formation` */

insert  into `formation`(`id`,`group_id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (1,1,'IV/e',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `formation`(`id`,`group_id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (2,1,'IV/d',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `formation`(`id`,`group_id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (3,2,'IV/d',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `formation`(`id`,`group_id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (4,2,'IV/b',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `formation`(`id`,`group_id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (5,3,'IV/b',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `formation`(`id`,`group_id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (6,3,'III/d',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `formation`(`id`,`group_id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (7,4,'III/d',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `formation`(`id`,`group_id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (8,4,'III/b',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `formation`(`id`,`group_id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (9,5,'III/b',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `formation`(`id`,`group_id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (10,5,'III/a',1,'2024-11-17 02:13:10','2024-11-17 02:13:10','2024-11-17 02:13:10',0);

/*Table structure for table `group` */

DROP TABLE IF EXISTS `group`;

CREATE TABLE `group` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_delete` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `group` */

insert  into `group`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (1,'ESELON I',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `group`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (2,'ESELON II',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `group`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (3,'ESELON III',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `group`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (4,'ESELON IV',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `group`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (5,'ESELON V',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (2,'2014_10_12_100000_create_password_reset_tokens_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (3,'2019_08_19_000000_create_failed_jobs_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (4,'2019_12_14_000001_create_personal_access_tokens_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (5,'2024_11_13_195021_create_group_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (6,'2024_11_13_195030_create_placed_job_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (7,'2024_11_13_195033_create_work_unit_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (8,'2024_11_13_195040_create_position_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (9,'2024_11_13_195043_create_formation_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (10,'2024_11_13_202032_create_employee_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (11,'2024_11_13_203323_insert_placed_job',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (12,'2024_11_15_033701_insert_work_unit',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (13,'2024_11_15_033749_insert_position',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (14,'2024_11_15_034703_insert_group',1);

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `placed_job` */

DROP TABLE IF EXISTS `placed_job`;

CREATE TABLE `placed_job` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_delete` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `placed_job` */

insert  into `placed_job`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (1,'Jakarta',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `placed_job`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (2,'Bandung',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `placed_job`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (3,'Medan',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `placed_job`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (4,'Solo',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `placed_job`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (5,'Yogyakarta',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `placed_job`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (6,'Malang',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);

/*Table structure for table `position` */

DROP TABLE IF EXISTS `position`;

CREATE TABLE `position` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_delete` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `position` */

insert  into `position`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (1,'Kepala Sekretariat Utama',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `position`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (2,'Penyusun laporan keuangan',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `position`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (3,'Surveyor Pemetaan Pertama',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `position`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (4,'Analis Data Survei dan Pemetaan',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `position`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (5,'Perancang Per-UUan Utama IV/e',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `position`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (6,'Kepala Biro Perencanaan,Kepegawaian dan hukum',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `position`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (7,'Widyaiswara Utama IV/e',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `position`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (8,'Analis Kepegawaian Madya IV/b',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `position`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (9,'Kepala Sub Bidang Kerjasama dan Pelayanan Riset,DKP',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `position`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (10,'Analis Hukum',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `position`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (11,'Peneliti Pertama III/b',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `position`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (12,'Surveyor Pemetaan Muda',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `position`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (13,'Analis Jabatan',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `position`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (14,'Kepala Subbag Kepegawaian',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Admin Traspac','admin@admin.com',NULL,'$2y$12$V71AWEpejDFWFOkmztycO.q2ZWnMmoS.VsP5qJqGBoVcTU2lGPDFG',NULL,NULL,'2024-11-18 07:12:55');

/*Table structure for table `work_unit` */

DROP TABLE IF EXISTS `work_unit`;

CREATE TABLE `work_unit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_delete` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `work_unit` */

insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (1,'Deputi Bidang Reformasi Birokrasi, Akuntabilitas Aparatur dan Pengawasan',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (2,'Deputi Bidang Kelembagaan dan Tata Laksana',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (3,'Deputi Bidang Sumber Daya Manusia Aparatur',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (4,'Deputi Bidang Pelayanan Publik',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (5,'Sekretariat Kementerian',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (6,'Inspektorat Kementerian',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (7,'Biro Umum dan Keuangan',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (8,'Direktorat Standar dan Teknologi Informasi Geospasial',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (9,'Bagian Umum dan Layanan Pengadaan',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (10,'Pusat Pengembangan Kompetensi Informasi Geospasial',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (11,'Biro Umum dan Keuangan',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (12,'Direktorat Sumber Daya Manusia Informasi Geospasial',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (13,'Direktorat Pemetaan Rupabumi Wilayah Laut dan Pantai',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (14,'Biro Umum dan Layanan Pengadaan',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (15,'Biro Hukum',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (16,'Biro Advokasi Perdagangan',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (17,'Direktorat Pengamanan Perdagangan',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (18,'Pusat Pelatihan Sumber Daya Manusia Ekspor dan Jasa Perdagangan',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (19,'Sekretariat Direktorat Jenderal Perdagangan Luar Negeri',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (20,'Direktorat Bina Usaha Perdagangan',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);
insert  into `work_unit`(`id`,`name`,`status`,`created_at`,`updated_at`,`deleted_at`,`is_delete`) values (21,'Direktorat Fasilitasi Ekspor dan Impor',1,'2024-11-17 02:13:09','2024-11-17 02:13:09','2024-11-17 02:13:09',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
