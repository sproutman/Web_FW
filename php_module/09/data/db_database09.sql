-- MySQL dump 10.10
--
-- Host: localhost    Database: db_database09
-- ------------------------------------------------------
-- Server version	5.0.24a-community-nt-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Temporary table structure for view `chkadmin`
--

DROP TABLE IF EXISTS `chkadmin`;
/*!50001 DROP VIEW IF EXISTS `chkadmin`*/;
/*!50001 CREATE TABLE `chkadmin` (
  `name` varchar(50),
  `pwd` varchar(50)
) */;

--
-- Temporary table structure for view `goods`
--

DROP TABLE IF EXISTS `goods`;
/*!50001 DROP VIEW IF EXISTS `goods`*/;
/*!50001 CREATE TABLE `goods` (
  `id` int(8),
  `name` varchar(200),
  `shuliang` int(8),
  `addtime` datetime,
  `price` float
) */;

--
-- Temporary table structure for view `scoreinfo`
--

DROP TABLE IF EXISTS `scoreinfo`;
/*!50001 DROP VIEW IF EXISTS `scoreinfo`*/;
/*!50001 CREATE TABLE `scoreinfo` (
  `sno` varchar(50),
  `sname` varchar(50),
  `yw` int(8),
  `wy` int(8),
  `sx` int(8)
) */;

--
-- Table structure for table `tb_admin`
--

DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_admin`
--


/*!40000 ALTER TABLE `tb_admin` DISABLE KEYS */;
LOCK TABLES `tb_admin` WRITE;
INSERT INTO `tb_admin` VALUES (1,'mr','mrsoft');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_admin` ENABLE KEYS */;

--
-- Table structure for table `tb_changeview`
--

DROP TABLE IF EXISTS `tb_changeview`;
CREATE TABLE `tb_changeview` (
  `id` int(8) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `userpwd` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_changeview`
--


/*!40000 ALTER TABLE `tb_changeview` DISABLE KEYS */;
LOCK TABLES `tb_changeview` WRITE;
INSERT INTO `tb_changeview` VALUES (1,'mrlzh','12345678'),(2,'mrjx','87654321');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_changeview` ENABLE KEYS */;

--
-- Table structure for table `tb_goods`
--

DROP TABLE IF EXISTS `tb_goods`;
CREATE TABLE `tb_goods` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  `shuliang` int(8) NOT NULL,
  `addtime` datetime NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_goods`
--


/*!40000 ALTER TABLE `tb_goods` DISABLE KEYS */;
LOCK TABLES `tb_goods` WRITE;
INSERT INTO `tb_goods` VALUES (1,'主板',12,'2007-03-12 00:00:00',600),(2,'显示卡',34,'2007-04-20 00:00:00',500);
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_goods` ENABLE KEYS */;

--
-- Table structure for table `tb_leaveword`
--

DROP TABLE IF EXISTS `tb_leaveword`;
CREATE TABLE `tb_leaveword` (
  `id` int(8) NOT NULL auto_increment,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_leaveword`
--


/*!40000 ALTER TABLE `tb_leaveword` DISABLE KEYS */;
LOCK TABLES `tb_leaveword` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_leaveword` ENABLE KEYS */;

--
-- Table structure for table `tb_modifypro`
--

DROP TABLE IF EXISTS `tb_modifypro`;
CREATE TABLE `tb_modifypro` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_modifypro`
--


/*!40000 ALTER TABLE `tb_modifypro` DISABLE KEYS */;
LOCK TABLES `tb_modifypro` WRITE;
INSERT INTO `tb_modifypro` VALUES (1,'mrsoft','12345678'),(2,'mr','87654321');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_modifypro` ENABLE KEYS */;

--
-- Table structure for table `tb_reg`
--

DROP TABLE IF EXISTS `tb_reg`;
CREATE TABLE `tb_reg` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_reg`
--


/*!40000 ALTER TABLE `tb_reg` DISABLE KEYS */;
LOCK TABLES `tb_reg` WRITE;
INSERT INTO `tb_reg` VALUES (1,'mrlzh','25d55ad283aa400af464c76d713c07ad','jlnu_lzh***@163.com','吉林长春');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_reg` ENABLE KEYS */;

--
-- Table structure for table `tb_reply`
--

DROP TABLE IF EXISTS `tb_reply`;
CREATE TABLE `tb_reply` (
  `id` int(8) NOT NULL auto_increment,
  `lwid` int(8) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_reply`
--


/*!40000 ALTER TABLE `tb_reply` DISABLE KEYS */;
LOCK TABLES `tb_reply` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_reply` ENABLE KEYS */;

--
-- Table structure for table `tb_sco`
--

DROP TABLE IF EXISTS `tb_sco`;
CREATE TABLE `tb_sco` (
  `id` int(8) NOT NULL auto_increment,
  `sid` int(8) NOT NULL,
  `yw` float NOT NULL,
  `wy` float NOT NULL,
  `sx` float NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_sco`
--


/*!40000 ALTER TABLE `tb_sco` DISABLE KEYS */;
LOCK TABLES `tb_sco` WRITE;
INSERT INTO `tb_sco` VALUES (5,3,85,78,98),(2,1,98,75,80),(3,2,75,86,98),(4,2,79,80,95),(6,3,78,89,82);
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_sco` ENABLE KEYS */;

--
-- Table structure for table `tb_score`
--

DROP TABLE IF EXISTS `tb_score`;
CREATE TABLE `tb_score` (
  `id` int(8) NOT NULL auto_increment,
  `sid` int(8) NOT NULL,
  `yw` int(8) NOT NULL,
  `wy` int(8) NOT NULL,
  `sx` int(8) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_score`
--


/*!40000 ALTER TABLE `tb_score` DISABLE KEYS */;
LOCK TABLES `tb_score` WRITE;
INSERT INTO `tb_score` VALUES (1,1,88,60,94),(2,2,60,85,76),(3,3,56,90,75),(4,4,76,86,78);
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_score` ENABLE KEYS */;

--
-- Table structure for table `tb_stu`
--

DROP TABLE IF EXISTS `tb_stu`;
CREATE TABLE `tb_stu` (
  `id` int(8) NOT NULL auto_increment,
  `sname` varchar(50) NOT NULL,
  `sno` varchar(50) NOT NULL,
  `sage` int(4) NOT NULL,
  `saddress` varchar(200) NOT NULL,
  `ssfzh` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_stu`
--


/*!40000 ALTER TABLE `tb_stu` DISABLE KEYS */;
LOCK TABLES `tb_stu` WRITE;
INSERT INTO `tb_stu` VALUES (3,'lzh','0312317',18,'吉林省长春市','22010245****'),(2,'lbh','0312316',17,'吉林省吉林市','20211032855*****');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_stu` ENABLE KEYS */;

--
-- Table structure for table `tb_student`
--

DROP TABLE IF EXISTS `tb_student`;
CREATE TABLE `tb_student` (
  `id` int(8) NOT NULL auto_increment,
  `sno` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_student`
--


/*!40000 ALTER TABLE `tb_student` DISABLE KEYS */;
LOCK TABLES `tb_student` WRITE;
INSERT INTO `tb_student` VALUES (1,'0312315','刘小华'),(2,'0312316','金星星'),(3,'0312317','黄小全'),(4,'0312318','李小林');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_student` ENABLE KEYS */;

--
-- Table structure for table `tb_test`
--

DROP TABLE IF EXISTS `tb_test`;
CREATE TABLE `tb_test` (
  `t_id` varchar(20) default NULL,
  `t_name` varchar(20) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_test`
--


/*!40000 ALTER TABLE `tb_test` DISABLE KEYS */;
LOCK TABLES `tb_test` WRITE;
INSERT INTO `tb_test` VALUES ('mr0001','mrsoft');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_test` ENABLE KEYS */;

/*!50003 SET @OLD_SQL_MODE=@@SQL_MODE*/;
DELIMITER ;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `test_tri` BEFORE INSERT ON `tb_test` FOR EACH ROW set new.t_name='mrsoft' */;;

DELIMITER ;
/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;

--
-- Table structure for table `tb_test_tri`
--

DROP TABLE IF EXISTS `tb_test_tri`;
CREATE TABLE `tb_test_tri` (
  `name` varchar(20) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_test_tri`
--


/*!40000 ALTER TABLE `tb_test_tri` DISABLE KEYS */;
LOCK TABLES `tb_test_tri` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_test_tri` ENABLE KEYS */;

--
-- Table structure for table `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_user`
--


/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
LOCK TABLES `tb_user` WRITE;
INSERT INTO `tb_user` VALUES (1,'mr','mrsoft');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;

--
-- Table structure for table `tb_zy`
--

DROP TABLE IF EXISTS `tb_zy`;
CREATE TABLE `tb_zy` (
  `id` int(8) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `money` float NOT NULL,
  `flag` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_zy`
--


/*!40000 ALTER TABLE `tb_zy` DISABLE KEYS */;
LOCK TABLES `tb_zy` WRITE;
INSERT INTO `tb_zy` VALUES (1,'明日科技',877,'mrsoft'),(2,'mr',123,'mr');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_zy` ENABLE KEYS */;

--
-- Temporary table structure for view `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
/*!50001 DROP VIEW IF EXISTS `userinfo`*/;
/*!50001 CREATE TABLE `userinfo` (
  `username` varchar(50)
) */;

--
-- Dumping routines for database 'db_database09'
--
DELIMITER ;;
/*!50003 DROP PROCEDURE IF EXISTS `pro_reg` */;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_CREATE_USER"*/;;
/*!50003 CREATE*/ /*!50020 DEFINER=`root`@`localhost`*/ /*!50003 PROCEDURE `pro_reg`(in nc varchar(50),in pwd varchar(50),in email varchar(50),in address varchar(50))
begin
insert into tb_reg(name,pwd,email,address) values (nc,pwd,email,address);
end */;;
/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE*/;;
DELIMITER ;

--
-- Final view structure for view `chkadmin`
--

/*!50001 DROP TABLE IF EXISTS `chkadmin`*/;
/*!50001 DROP VIEW IF EXISTS `chkadmin`*/;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `chkadmin` AS select `tb_admin`.`name` AS `name`,`tb_admin`.`pwd` AS `pwd` from `tb_admin` */;

--
-- Final view structure for view `goods`
--

/*!50001 DROP TABLE IF EXISTS `goods`*/;
/*!50001 DROP VIEW IF EXISTS `goods`*/;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `goods` AS select `tb_goods`.`id` AS `id`,`tb_goods`.`name` AS `name`,`tb_goods`.`shuliang` AS `shuliang`,`tb_goods`.`addtime` AS `addtime`,`tb_goods`.`price` AS `price` from `tb_goods` */;

--
-- Final view structure for view `scoreinfo`
--

/*!50001 DROP TABLE IF EXISTS `scoreinfo`*/;
/*!50001 DROP VIEW IF EXISTS `scoreinfo`*/;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `scoreinfo` AS select `tb_student`.`sno` AS `sno`,`tb_student`.`sname` AS `sname`,`tb_score`.`yw` AS `yw`,`tb_score`.`wy` AS `wy`,`tb_score`.`sx` AS `sx` from (`tb_student` join `tb_score`) where (`tb_student`.`id` = `tb_score`.`sid`) */;

--
-- Final view structure for view `userinfo`
--

/*!50001 DROP TABLE IF EXISTS `userinfo`*/;
/*!50001 DROP VIEW IF EXISTS `userinfo`*/;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `userinfo` AS select `tb_changeview`.`username` AS `username` from `tb_changeview` */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

