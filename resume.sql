/*
SQLyog Community v12.4.3 (64 bit)
MySQL - 10.1.29-MariaDB : Database - resume
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`resume` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `resume`;

/*Table structure for table `company` */

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `position` varchar(150) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dateFrom` datetime NOT NULL,
  `dateTo` datetime DEFAULT NULL,
  `profile_id` int(11) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_current` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `company` */

insert  into `company`(`id`,`name`,`position`,`address`,`dateFrom`,`dateTo`,`profile_id`,`createDate`,`updateDate`,`is_current`) values 
(1,'SPI','Contract Analyst','PNaque','2006-08-23 00:00:00','2007-11-22 00:00:00',1,'2018-01-11 23:48:48','2018-01-11 23:48:48',0),
(2,'EU&G','IT/Programmer','Ortigas Center','2008-03-01 00:00:00','2008-07-22 00:00:00',1,'2018-01-11 23:51:05','2018-01-11 23:51:05',0),
(3,'Concentrix','Senior Programmer','Eastwood City','2008-08-01 00:00:00','2011-12-31 00:00:00',1,'2018-01-11 23:52:05','2018-01-11 23:52:05',0),
(4,'Champ','Software Engineer','Makati City','2012-01-01 00:00:00','2012-03-31 00:00:00',1,'2018-01-11 23:53:09','2018-01-11 23:53:09',0),
(5,'RCG IT','Consultant II','Makati City','2012-05-01 00:00:00','2012-11-30 00:00:00',1,'2018-01-11 23:53:48','2018-01-11 23:53:48',0),
(6,'Microsourcing','Senior Programmer','MOA','2013-05-01 00:00:00','2013-11-30 00:00:00',1,'2018-01-11 23:54:27','2018-01-11 23:54:27',0),
(7,'Gumi Asia','DEvOps / Lead Developer','Ortigas','2014-05-01 00:00:00','2015-08-30 00:00:00',1,'2018-01-11 23:55:53','2018-01-11 23:55:53',0),
(8,'HyperGrowth','Senior Programmer/DEVOPS','Pasay','2015-08-01 00:00:00','2016-04-30 00:00:00',1,'2018-01-11 23:57:40','2018-01-11 23:57:40',0),
(9,'Zimi Technology','Web Developer/Technical Lead','Makati City','2016-05-01 00:00:00','2016-11-30 00:00:00',1,'2018-01-11 23:58:49','2018-01-11 23:58:49',0),
(10,'Genesis Gaming','Software Developer','Makati City','2017-11-20 00:00:00','2050-11-30 00:00:00',1,'2018-01-11 23:59:36','2018-01-11 23:59:36',1);

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `className` varchar(255) NOT NULL,
  `type` varchar(200) NOT NULL,
  `contact_details` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `contact` */

insert  into `contact`(`id`,`name`,`className`,`type`,`contact_details`) values 
(2,'Email','glyphicon glyphicon-envelope text-blue','mail','erdan08@yahoo.com'),
(3,'Email','glyphicon glyphicon-envelope text-red','mail','erdan08@gmail.com'),
(4,'Email','glyphicon glyphicon-envelope text-orange','mail','erdan08@hotmail.com'),
(5,'Email','glyphicon glyphicon-envelope text-purple','mail','paulandrefrancisco@yahoo.com.au'),
(6,'Social Media','fa fa-facebook text-aqua','media','paulandre.francisco'),
(7,'Phone','fa fa-phone-square text-purple','call','+639194850506'),
(8,'Skype','fa fa-skype text-aqua','call','paulandre.francisco'),
(9,'Phone','fa fa-phone-square text-purple','call','+639157420269');

/*Table structure for table `education` */

DROP TABLE IF EXISTS `education`;

CREATE TABLE `education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(100) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dateFrom` datetime NOT NULL,
  `dateTo` datetime NOT NULL,
  `createDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `profile_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `education` */

insert  into `education`(`id`,`level`,`institution`,`course`,`address`,`dateFrom`,`dateTo`,`createDate`,`updateDate`,`profile_id`) values 
(1,'Elementary','Holy Spirit Academy','Elementary','Irosin, Sorsogon','1989-06-05 00:00:00','1995-03-31 00:00:00','2018-01-13 22:14:40','2018-01-13 22:14:40',1),
(2,'Highschool','Holy Spirit Academy','Intermediate','Irosin, Sorsogon','1995-06-05 00:00:00','1999-03-31 00:00:00','2018-01-13 22:14:40','2018-01-13 22:14:40',1),
(3,'College','The Lewis College','BS Information Technology','Sorosogon City','2001-06-04 00:00:00','2006-03-31 00:00:00','2018-01-13 22:14:40','2018-01-13 22:14:40',1);

/*Table structure for table `home_skills` */

DROP TABLE IF EXISTS `home_skills`;

CREATE TABLE `home_skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `home_skills` */

insert  into `home_skills`(`id`,`filename`,`category`) values 
(1,'php.png','language'),
(2,'adminlte.png','template'),
(3,'aws.png','platform'),
(4,'bootstrap.png','template'),
(5,'css.jpg','frontend'),
(6,'doctrine.jpg','language'),
(7,'dql.jpg','language'),
(8,'extjs.png','frontend'),
(9,'fuel.jpg','framework'),
(10,'git.png','versioning'),
(11,'html.jpg','frontend'),
(12,'java.jpg','language'),
(13,'javascript.png','frontend'),
(14,'jquery.png','framework'),
(15,'lamp.png','platform'),
(16,'mysql.png','database'),
(17,'oracle.gif','database'),
(18,'postgre.png','database'),
(19,'propel.png','language'),
(20,'symfony.png','framework'),
(21,'twig.png','template'),
(22,'websockets.png','platform'),
(23,'xml.png','frontend'),
(24,'xslt.png','frontend'),
(25,'go.png','language'),
(26,'python.png','language'),
(27,'dynamo.png','database');

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `classname` varchar(155) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `menu` */

insert  into `menu`(`id`,`name`,`description`,`ordering`,`classname`,`link`) values 
(1,'Profile','Profile',2,'glyphicon glyphicon-user text-aqua','profile'),
(3,'Skills','Skills',4,'glyphicon glyphicon-briefcase text-blue','skills'),
(4,'Employment / Experience','Employment',3,'glyphicon glyphicon-tasks text-gray','employment'),
(5,'Projects','Projects',5,'fa fa-folder-open text-red','projects'),
(6,'Schools Attended','Schools',6,'glyphicon glyphicon-book text-orange','schools'),
(7,'Home','Home',1,'glyphicon glyphicon-home text-green','home'),
(8,'Contacts','Contacts',7,'glyphicon glyphicon-phone-alt text-purple','contacts');

/*Table structure for table `profile` */

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fName` varchar(100) NOT NULL,
  `mInit` varchar(1) NOT NULL,
  `lName` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` int(5) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `status` varchar(55) NOT NULL,
  `birthday` datetime NOT NULL,
  `skill_id` int(11) DEFAULT NULL,
  `createDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `profile` */

insert  into `profile`(`id`,`fName`,`mInit`,`lName`,`sex`,`age`,`address`,`nationality`,`status`,`birthday`,`skill_id`,`createDate`,`updateDate`) values 
(1,'Paul Andre','E','Francisco','Male',35,'Irosin','Filipino','Single','1892-04-08 23:45:22',NULL,'2018-01-11 23:45:50','2018-01-11 23:45:50');

/*Table structure for table `project` */

DROP TABLE IF EXISTS `project`;

CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) NOT NULL,
  `company_id` int(11) NOT NULL,
  `description` varchar(1005) NOT NULL,
  `skill_id` int(11) DEFAULT NULL,
  `createDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `project` */

insert  into `project`(`id`,`project_name`,`company_id`,`description`,`skill_id`,`createDate`,`updateDate`) values 
(1,'Screen Recorder',3,'Records all activity from call center agent while taking the call. Screenshot the monitor while agent is taking the call. Convert the images to video. Delete all the images after conversion. Looks for the avi (sound of the said call). Merge the video and audio into a file video with audio using ffmpeg. Upload the converted file to server and delete all the files in the local pc.Technologies used includes Java, PostgreSQL, ffmpeg, PHP',1,'2018-01-16 21:13:53','2018-01-16 21:13:53'),
(2,'CES',3,'Participate in creation of a centralized CMS that includes the different web applications into one application.Technologies used includes Symfony, EXTJS, PostgreSQL, css, html5',NULL,'2018-02-18 21:24:42','2018-02-18 21:24:42'),
(3,'Disney Passport',5,'Bug fixing and adding features of web based reservation of hotel systems. Participate in scrum. Technologies used includes Zend framework, html5, css, jquery',NULL,'2018-02-18 21:27:48','2018-02-18 21:27:48'),
(4,'Paradise CMS',6,'Create a web-based facebook-like application.Features includes uploading, saving, downloading, printing, comments, likes, tagging, rating of images uploaded. Technologies used includes Symfony2, Doctrine2, MySql, css3, Html5, Jquery, Bootstrap, Isotope',NULL,'2018-02-18 22:06:10','2018-02-18 22:06:10'),
(5,'Brave Frontier',7,'Develop backend services for the mobile game. Includes monitoring of the game server performance using New Relic and AWS. Reports to the team any unusual activity from the server including bugs. Fix bugs assigned by manager or SG team. Develops adhoc request from back office employees to enhance their reporting, game support and other useful tools. Create scripts to automate the usual manual tasks. Mentor junior/new developers, breakdown large task to small tasks and distribute to other developers, participate on developers evaluation. Gathers data from requestors and convert to technical requirements. Technologies used includes PHP, RDS (MySql), DynamoDB (No SQL), css3, html5, Jquery, Memcache, Redis, S3 Bucket, EC2',NULL,'2018-02-18 22:19:55','2018-02-18 22:19:55'),
(6,'Adhoc Services',7,'Create scripts and web sites as requested by Back Office. Functionalities includes editing of data not available on the existing CMS. Develops web apps as reporting tools for Back Office. Generate reports to be used for meetings that should not be visible or accessible to Back Office and should be for Director positions only. Create logs to monitor Gem consumption and tally to see if there are abusive use from the employees and selling or giving free items, gems to players. Technologies used includes PHP, css3, html5, Jquery, AWS Console, Data tables, Bootstrap',NULL,'2018-02-18 22:47:52','2018-02-18 22:47:52'),
(7,'Redis UI',7,'Create web-based application to display redis data and status. This replaced console scripting to edit Redis and is editable already in UI. Technologies used includes PHP, css3, html5, Jquery, Redis, MySql',NULL,'2018-02-18 22:49:52','2018-02-18 22:49:52');

/*Table structure for table `responsibility` */

DROP TABLE IF EXISTS `responsibility`;

CREATE TABLE `responsibility` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `duty` varchar(255) NOT NULL,
  `ordering` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `responsibility` */

insert  into `responsibility`(`id`,`duty`,`ordering`) values 
(1,'Distribute tasks to colleagues after discussion with the manager',1),
(2,'Does adhoc requests / features not available in the web application used by back office employees',2),
(3,'Mentoring Junior developers and other developers',3),
(4,'Orient and guide new developers on their duties and responsibilities',4),
(5,'Automates tools by developing scripts that can run manually and thru a cron job',5),
(6,'Works with counter parts around the world to develop new features and trace bug reported by players and users',6),
(7,'Create core classes used in the backend Game Framework',7),
(8,'Develop UI for redis console application for easier use',8),
(9,'Evaluates technically on other developers as assigned by the manager and director',9),
(10,'Updates manager and director on the task / development',10),
(11,'Participates in gathering data from business requirements and convert to technical or system requirements',11),
(12,'Create common core classes to eliminate code redundancy',12),
(13,'Make sure codes comply with OOP paradigm and MVC pattern',13);

/*Table structure for table `skills` */

DROP TABLE IF EXISTS `skills`;

CREATE TABLE `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_used` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

/*Data for the table `skills` */

insert  into `skills`(`id`,`name`,`category`,`createDate`,`updateDate`,`is_used`) values 
(1,'PHP','Backend','2018-01-09 18:40:01','2018-01-09 18:40:01',1),
(2,'Java','Backend','2018-01-09 18:40:01','2018-01-09 18:40:01',1),
(3,'Python','Backend','2018-01-09 18:42:34','2018-01-09 18:42:34',1),
(4,'Perl','Backend','2018-01-09 18:42:34','2018-01-09 18:42:34',0),
(5,'C','Backend','2018-01-09 18:42:34','2018-01-09 18:42:34',0),
(6,'CPlus','Backend','2018-01-09 18:42:34','2018-01-09 18:42:34',1),
(7,'CSharp','Backend','2018-01-09 18:42:34','2018-01-09 18:42:34',1),
(8,'Assembly','Backend','2018-01-09 19:59:50','2018-01-09 19:59:50',0),
(9,'Go','Backend','2018-01-09 19:59:50','2018-01-09 19:59:50',1),
(10,'Fortran','Backend','2018-01-09 19:59:50','2018-01-09 19:59:50',0),
(11,'VB6','Desktop','2018-01-09 19:59:50','2018-01-09 19:59:50',1),
(12,'FoxPro','Desktop','2018-01-09 19:59:50','2018-01-09 19:59:50',1),
(13,'App','Dektop','2018-01-09 20:07:58','2018-01-09 20:07:58',0),
(14,'ABAP','Backend','2018-01-09 20:07:58','2018-01-09 20:07:58',0),
(17,'ASP','Web','2018-01-09 20:07:58','2018-01-09 20:07:58',1),
(18,'Bash','Scripting','2018-01-09 20:07:58','2018-01-09 20:07:58',1),
(19,'APlus','Desktop','2018-01-09 20:07:58','2018-01-09 20:07:58',0),
(20,'Delphi','Desktop','2018-01-09 20:07:58','2018-01-09 20:07:58',1),
(21,'ActionScript','Web','2018-01-09 20:07:58','2018-01-09 20:07:58',1),
(22,'ASP','Web','2018-01-09 20:07:58','2018-01-09 20:07:58',1),
(23,'C--','Desktop','2018-01-09 20:07:58','2018-01-09 20:07:58',0),
(24,'Cobol','Backend','2018-01-09 20:07:58','2018-01-09 20:07:58',0),
(25,'CoffeeScript','Web','2018-01-09 20:07:58','2018-01-09 20:07:58',0),
(26,'F','Desktop','2018-01-09 20:07:58','2018-01-09 20:07:58',0),
(27,'FSharp','Web','2018-01-09 20:13:19','2018-01-09 20:13:19',0),
(28,'Go','Scripting','2018-01-09 20:13:19','2018-01-09 20:13:19',1),
(29,'Groovy','Web','2018-01-09 20:13:19','2018-01-09 20:13:19',0),
(30,'JSharp','Desktop','2018-01-09 20:13:19','2018-01-09 20:13:19',0),
(31,'Javascript','Web','2018-01-09 20:13:19','2018-01-09 20:13:19',1),
(32,'JavaFX','Web','2018-01-09 20:13:19','2018-01-09 20:13:19',1),
(33,'VIPP','Desktop','2018-01-09 20:13:19','2018-01-09 20:13:19',1),
(34,'Mercury','Desktop','2018-01-09 20:13:19','2018-01-09 20:13:19',0),
(35,'.NET','Web','2018-01-09 20:13:19','2018-01-09 20:13:19',1),
(36,'Objective C','Desktop','2018-01-09 20:13:19','2018-01-09 20:13:19',0),
(37,'Pascal','Desktop','2018-01-09 20:13:19','2018-01-09 20:13:19',0),
(38,'PostSCript','Desktop','2018-01-09 20:13:19','2018-01-09 20:13:19',0),
(39,'PowerShell','Scripting','2018-01-09 20:13:19','2018-01-09 20:13:19',1),
(40,'PL/SQL','Database','2018-01-09 20:13:19','2018-01-09 20:13:19',1),
(41,'SmallTalk','Desktop','2018-01-09 20:19:06','2018-01-09 20:19:06',0),
(42,'SQL','Database','2018-01-09 20:19:06','2018-01-09 20:19:06',1),
(43,'PostGre SQL','Database','2018-01-09 20:19:06','2018-01-09 20:19:06',1),
(44,'MySql','Database','2018-01-09 20:19:06','2018-01-09 20:19:06',1),
(45,'Oracle','Database','2018-01-09 20:19:06','2018-01-09 20:19:06',1),
(46,'DB2','Database','2018-01-09 20:19:06','2018-01-09 20:19:06',0),
(47,'MongoDB','Database','2018-01-09 20:19:06','2018-01-09 20:19:06',1),
(48,'CoucheDB','Database','2018-01-09 20:19:06','2018-01-09 20:19:06',1),
(49,'MSSQL','Database','2018-01-09 20:19:06','2018-01-09 20:19:06',1),
(50,'DynamoDB','Database','2018-01-09 20:19:06','2018-01-09 20:19:06',1),
(51,'HTML','Web','2018-01-09 20:19:06','2018-01-09 20:19:06',1),
(52,'CSS','Web','2018-01-09 20:19:06','2018-01-09 20:19:06',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
