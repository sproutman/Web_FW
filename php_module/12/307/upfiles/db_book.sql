-- MySQL dump 10.10
--
-- Host: localhost    Database: db_book
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
-- Table structure for table `tb_admin`
--

DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `pwd` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_admin`
--


/*!40000 ALTER TABLE `tb_admin` DISABLE KEYS */;
LOCK TABLES `tb_admin` WRITE;
INSERT INTO `tb_admin` VALUES (1,'mr','fdb390e945559e74475ed8c8bbb48ca5');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_admin` ENABLE KEYS */;

--
-- Table structure for table `tb_bdxz`
--

DROP TABLE IF EXISTS `tb_bdxz`;
CREATE TABLE `tb_bdxz` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(200) default NULL,
  `content` mediumtext,
  `createtime` datetime default NULL,
  `click` int(8) default NULL,
  `address` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_bdxz`
--


/*!40000 ALTER TABLE `tb_bdxz` DISABLE KEYS */;
LOCK TABLES `tb_bdxz` WRITE;
INSERT INTO `tb_bdxz` VALUES (6,'dd','d','2007-01-29 15:53:29',0,'./admin/upbd/200701291553295215145.jpg');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_bdxz` ENABLE KEYS */;

--
-- Table structure for table `tb_book`
--

DROP TABLE IF EXISTS `tb_book`;
CREATE TABLE `tb_book` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(200) default NULL,
  `addtime` datetime default NULL,
  `click` int(8) default NULL,
  `bookno` varchar(100) default NULL,
  `typeid` int(8) default NULL,
  `seriesid` int(8) default NULL,
  `tpi` varchar(200) default NULL,
  `writer` varchar(200) default NULL,
  `booklist` text,
  `introduce` mediumtext,
  `zishu` int(8) NOT NULL,
  `editiontimes` varchar(200) default NULL,
  `bookpage` int(8) default NULL,
  `price` float default NULL,
  `pdate` date default NULL,
  `picture` varchar(200) default NULL,
  `isnew` int(2) default NULL,
  `istuijian` int(2) default NULL,
  `easetype` int(2) default NULL,
  `isvod` int(2) default NULL,
  `yb` int(8) default NULL,
  `jh` int(8) default NULL,
  `hh` int(8) default NULL,
  `address1` varchar(200) default NULL,
  `address2` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_book`
--


/*!40000 ALTER TABLE `tb_book` DISABLE KEYS */;
LOCK TABLES `tb_book` WRITE;
INSERT INTO `tb_book` VALUES (14,'《ASP数据库开发完全手册》','2007-01-29 11:26:34',0,'112-111-22',1,4,'人民邮电出版社','dd','11','11',11,'11',11,11,'2001-02-02','./admin/upimages/200701291126344630531.jpg',1,1,0,0,0,0,0,'',''),(15,'《Delphi数据库开发完全手册》','2007-01-29 11:27:33',0,'11-20-111',6,1,'人民邮电出版社','11','1','1',11,'1',11,11,'2002-03-03','./admin/upimages/200701291127338295043.jpg',1,1,0,0,0,0,0,'./admin/upfiles/200701291127337597340.jpg',''),(12,'《JSP数据库开发完全手册》','2007-01-29 11:19:37',3,'1-11-1112',3,6,'人民邮电出版社','明日科技','11','111',40000,'1',23,11,'2002-03-03','./admin/upimages/200701291119375825847.jpg',1,1,0,0,0,0,0,'./admin/upfiles/200701291119372207847.jpg','http://www.dangdang.com'),(16,'《ASP完全手册》','2007-01-29 11:28:43',0,'11',1,7,'人民邮电出版社','11','1','1',111,'11',11,11,'2001-01-02','./admin/upimages/200701291128437743448.jpg',1,1,0,0,0,0,0,'','1'),(17,'《Delphi范例宝典》','2007-01-29 11:29:39',1,'112',6,4,'人民邮电出版社','d','1','1',11,'1',11,11,'2002-03-03','./admin/upimages/200701291129393620871.jpg',1,1,0,0,0,0,0,'',''),(18,'《JSP范例宝典》','2007-01-29 11:30:36',9,'112-55',3,4,'人民邮电出版社','11','1','11',11,'11',11,1,'2003-05-05','./admin/upimages/200701291134553337531.jpg',1,1,2,0,1,0,0,'',''),(19,'《PHP数据库开发完全手册》','2007-01-29 11:31:43',0,'11-34-44',2,2,'人民邮电出版社','dd','1','1',11,'1',1,1,'2000-04-04','./admin/upimages/200701291134301399224.jpg',1,1,1,0,0,0,0,'',''),(20,'《c++范例宝典》','2007-01-29 11:32:35',0,'11-33-456',13,2,'人民邮电出版社','11','1','11',1,'1',1,1,'2001-02-02','./admin/upimages/200701291132356300465.jpg',0,1,0,0,0,0,0,'',''),(21,'《ASP范例宝点》','2007-01-29 11:34:08',0,'dd',1,3,'人民邮电出版社','11','111','11',11,'1',11,1,'2000-02-01','./admin/upimages/200701291134086989852.jpg',0,1,1,0,0,0,0,'',''),(22,'《d》','2007-01-29 15:52:25',0,'d',3,4,'人民邮电出版社','d','1','1',11,'1',11,1,'2000-01-02','',0,0,2,0,0,0,0,'',''),(23,'《aaa》','2007-01-30 09:37:42',0,'1111',13,3,'人民邮电出版社','11','1','1',11,'1',1,1,'2001-03-02','',0,0,0,0,0,0,0,'','');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_book` ENABLE KEYS */;

--
-- Table structure for table `tb_bookcz`
--

DROP TABLE IF EXISTS `tb_bookcz`;
CREATE TABLE `tb_bookcz` (
  `id` int(8) NOT NULL auto_increment,
  `createtime` datetime default NULL,
  `title` varchar(200) default NULL,
  `content` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_bookcz`
--


/*!40000 ALTER TABLE `tb_bookcz` DISABLE KEYS */;
LOCK TABLES `tb_bookcz` WRITE;
INSERT INTO `tb_bookcz` VALUES (3,'2007-01-28 14:30:16','dsdsds','dsdsd'),(5,'2007-01-29 15:51:13','dd','dd');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_bookcz` ENABLE KEYS */;

--
-- Table structure for table `tb_bookjj`
--

DROP TABLE IF EXISTS `tb_bookjj`;
CREATE TABLE `tb_bookjj` (
  `id` mediumint(8) NOT NULL auto_increment,
  `name` varchar(200) default NULL,
  `booklist` mediumtext,
  `introduce` mediumtext,
  `addtime` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_bookjj`
--


/*!40000 ALTER TABLE `tb_bookjj` DISABLE KEYS */;
LOCK TABLES `tb_bookjj` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_bookjj` ENABLE KEYS */;

--
-- Table structure for table `tb_bookpl`
--

DROP TABLE IF EXISTS `tb_bookpl`;
CREATE TABLE `tb_bookpl` (
  `id` int(8) NOT NULL auto_increment,
  `createtime` datetime default NULL,
  `title` varchar(200) default NULL,
  `content` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_bookpl`
--


/*!40000 ALTER TABLE `tb_bookpl` DISABLE KEYS */;
LOCK TABLES `tb_bookpl` WRITE;
INSERT INTO `tb_bookpl` VALUES (3,'2007-01-29 15:51:18','dd','dd');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_bookpl` ENABLE KEYS */;

--
-- Table structure for table `tb_bookyj`
--

DROP TABLE IF EXISTS `tb_bookyj`;
CREATE TABLE `tb_bookyj` (
  `id` int(8) NOT NULL auto_increment,
  `createtime` datetime default NULL,
  `title` varchar(200) default NULL,
  `content` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_bookyj`
--


/*!40000 ALTER TABLE `tb_bookyj` DISABLE KEYS */;
LOCK TABLES `tb_bookyj` WRITE;
INSERT INTO `tb_bookyj` VALUES (4,'2007-01-29 15:51:08','dd','d');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_bookyj` ENABLE KEYS */;

--
-- Table structure for table `tb_error`
--

DROP TABLE IF EXISTS `tb_error`;
CREATE TABLE `tb_error` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(200) default NULL,
  `createtime` datetime default NULL,
  `content` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_error`
--


/*!40000 ALTER TABLE `tb_error` DISABLE KEYS */;
LOCK TABLES `tb_error` WRITE;
INSERT INTO `tb_error` VALUES (1,'<<PHP数据库开发完全手册>>第22章有错误','2004-12-02 00:00:00','114'),(2,'<<JSP范例宝典>>光盘程序错误ff','2004-12-06 00:00:00','1444dd'),(3,'<<Delpha从基础到项目开发>>打错字','2006-12-03 00:00:00','44'),(9,'fgfgdfdfdfd','2007-01-28 16:07:24','fgfgfgffdfdf');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_error` ENABLE KEYS */;

--
-- Table structure for table `tb_jq`
--

DROP TABLE IF EXISTS `tb_jq`;
CREATE TABLE `tb_jq` (
  `id` int(8) NOT NULL auto_increment,
  `typeid` int(8) default NULL,
  `createtime` datetime NOT NULL,
  `title` varchar(200) default NULL,
  `content` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_jq`
--


/*!40000 ALTER TABLE `tb_jq` DISABLE KEYS */;
LOCK TABLES `tb_jq` WRITE;
INSERT INTO `tb_jq` VALUES (5,3,'2007-01-29 15:53:20','dd','d'),(4,1,'2007-01-28 14:17:34','ddddfdf','dfdfdfd');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_jq` ENABLE KEYS */;

--
-- Table structure for table `tb_seriestype`
--

DROP TABLE IF EXISTS `tb_seriestype`;
CREATE TABLE `tb_seriestype` (
  `id` mediumint(8) NOT NULL auto_increment,
  `seriesname` varchar(200) default NULL,
  `createtime` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_seriestype`
--


/*!40000 ALTER TABLE `tb_seriestype` DISABLE KEYS */;
LOCK TABLES `tb_seriestype` WRITE;
INSERT INTO `tb_seriestype` VALUES (1,'数据库管理系统开发从技术到实践','2006-12-03 00:00:00'),(2,'编程200例丛书','2009-10-12 00:00:00'),(3,'信息科学与技术丛书','2006-12-06 00:00:00'),(4,'工程应用与项目实践','2009-12-01 00:00:00'),(5,'信息系统开发实例精选丛书','2006-02-06 00:00:00'),(6,'数据库开发关键技术与实例应用','2009-02-01 00:00:00'),(7,'数据库系统开发从基础到实践丛书','2005-12-03 00:00:00'),(8,'软件工程师典藏','0000-00-00 00:00:00'),(11,'fdfdfdfdfdfd','2007-01-26 14:03:51');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_seriestype` ENABLE KEYS */;

--
-- Table structure for table `tb_soft`
--

DROP TABLE IF EXISTS `tb_soft`;
CREATE TABLE `tb_soft` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(200) default NULL,
  `address` varchar(200) default NULL,
  `click` int(8) default NULL,
  `createtime` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_soft`
--


/*!40000 ALTER TABLE `tb_soft` DISABLE KEYS */;
LOCK TABLES `tb_soft` WRITE;
INSERT INTO `tb_soft` VALUES (1,'RealPlayer','./upfiles/HTMLHELP.rar',6,'2004-12-02 00:00:00'),(3,'WinRAR',NULL,5,'2009-04-02 10:00:00'),(4,'极智五笔',NULL,12,'2005-12-10 00:00:00'),(5,'企业QQ',NULL,86,'2005-12-05 00:00:00'),(6,'讯雷',NULL,10,'2003-10-03 00:00:00'),(7,'fgfgf','www.hao123.net',5,'2007-01-27 11:18:25'),(9,'d','http://www.hao123.com',0,'2007-01-29 15:53:53');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_soft` ENABLE KEYS */;

--
-- Table structure for table `tb_tell`
--

DROP TABLE IF EXISTS `tb_tell`;
CREATE TABLE `tb_tell` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(200) default NULL,
  `content` text,
  `createtime` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_tell`
--


/*!40000 ALTER TABLE `tb_tell` DISABLE KEYS */;
LOCK TABLES `tb_tell` WRITE;
INSERT INTO `tb_tell` VALUES (1,'明日科技将出版<<PHP数据库开发完全>>','明日科技将出版<<PHP数据库开发完全>>','2004-12-12 00:00:00'),(2,'明日科技将面向社会招收PHP开发人员','明日科技将出版<<PHP数据库开发完全>>','2006-12-02 00:00:00'),(5,'热发的的大幅度坟地发技','111','2003-12-05 00:00:00'),(6,'反对法反对法赌东道 ','141','2006-00-14 00:00:00');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_tell` ENABLE KEYS */;

--
-- Table structure for table `tb_type`
--

DROP TABLE IF EXISTS `tb_type`;
CREATE TABLE `tb_type` (
  `id` int(8) NOT NULL auto_increment,
  `typename` varchar(200) default NULL,
  `createtime` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_type`
--


/*!40000 ALTER TABLE `tb_type` DISABLE KEYS */;
LOCK TABLES `tb_type` WRITE;
INSERT INTO `tb_type` VALUES (1,'『ASP』类相关图书','2004-12-10 00:00:00'),(2,'『PHP』类相关图书','2005-03-12 00:00:00'),(3,'『JSP』类相关图书','2009-12-10 00:00:00'),(4,'『.net』类相关图书','2006-02-12 00:00:00'),(5,'『VB』类相关图书','2005-12-05 00:00:00'),(6,'『Delphi』类相关图书','0000-00-00 00:00:00'),(7,'『VC』类相关图书','2006-12-06 00:00:00'),(9,'『VF』类相关图书','2007-01-25 08:53:27'),(13,'『PB』类相关图书','2007-01-26 13:12:23');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_type` ENABLE KEYS */;

--
-- Table structure for table `tb_vod`
--

DROP TABLE IF EXISTS `tb_vod`;
CREATE TABLE `tb_vod` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(200) default NULL,
  `createtime` datetime default NULL,
  `jianjie` mediumtext,
  `click` int(8) default NULL,
  `bookid` int(8) default NULL,
  `address` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_vod`
--


/*!40000 ALTER TABLE `tb_vod` DISABLE KEYS */;
LOCK TABLES `tb_vod` WRITE;
INSERT INTO `tb_vod` VALUES (12,'SMIP服务器的安装','2007-01-30 10:00:06','dfdfd',1,14,'./admin/upvods/200701301000064549424.swf'),(13,'dddd','2007-01-30 10:00:16','fdfd',0,12,'./admin/upvods/200701301000167358377.swf');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_vod` ENABLE KEYS */;

--
-- Table structure for table `tb_zyxz`
--

DROP TABLE IF EXISTS `tb_zyxz`;
CREATE TABLE `tb_zyxz` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(200) default NULL,
  `content` mediumtext,
  `createtime` datetime default NULL,
  `click` int(8) default NULL,
  `address` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gb2312;

--
-- Dumping data for table `tb_zyxz`
--


/*!40000 ALTER TABLE `tb_zyxz` DISABLE KEYS */;
LOCK TABLES `tb_zyxz` WRITE;
INSERT INTO `tb_zyxz` VALUES (1,'windows 2000 补丁','windows 2000 补丁windows 2000 补丁windows 2000 补丁windows 2000 补丁windows 2000 补丁windows 2000 补丁windows 2000 补丁windows 2000 补丁windows 2000 补丁windows 2000 补丁','2005-12-16 00:00:00',6,NULL);
UNLOCK TABLES;
/*!40000 ALTER TABLE `tb_zyxz` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

