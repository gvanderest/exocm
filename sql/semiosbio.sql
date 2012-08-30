-- MySQL dump 10.13  Distrib 5.5.9, for osx10.6 (i386)
--
-- Host: localhost    Database: semiosbio
-- ------------------------------------------------------
-- Server version	5.5.9

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
-- Table structure for table `blog_categories`
--

DROP TABLE IF EXISTS `blog_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_categories`
--

LOCK TABLES `blog_categories` WRITE;
/*!40000 ALTER TABLE `blog_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_posts`
--

DROP TABLE IF EXISTS `blog_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_edited` datetime DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `body` text,
  `active` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_posts`
--

LOCK TABLES `blog_posts` WRITE;
/*!40000 ALTER TABLE `blog_posts` DISABLE KEYS */;
INSERT INTO `blog_posts` VALUES (1,'Government of Canada Invests in  Green Pest Management Technology','SemiosBIO','2012-07-26 00:00:00',NULL,'government-of-canada-invests-in-green-pest-managem','<p><em>State-of-the-art network applications put information at farmers\' fingertips</em></p>\r\n<p>Vancouver, British Columbia, July 26, 2012 &ndash; New wireless integrated pest management technology will give farmers timely information on insect activity in their crops, allowing them to more efficiently use biopesticides and reduce their manual monitoring costs. Minister of Canadian Heritage and Member of Parliament James Moore (Port Moody-Westwood-Port Coquitlam) announced today an investment of over $485,000 to SemiosBIO Technologies Inc. (SemiosBIO) to develop three value-added applications to help farmers improve pest management.</p>\r\n<p>\"Our Government\'s top priority is the economy, and investments in innovation are key to ensuring our economy remains strong well into the future,\" said Minister Moore. \"This project will help farmers apply new and innovative technology to deter pests, ensure better crops, and ultimately grow their business. This is investment is great news for farmers and for BC\'s economy.\"</p>\r\n<p>SemiosBIO will develop and test a pheromone tracking system for mating disruption pest control, a camera-monitored pest trap application to monitor insect population changes, and software for recording information. This innovative technology will improve safe pest management methods by enabling growers to monitor their crops and orchards for insect activity and take timely, targeted action with biopesticides, such as pheromones, or traditional pesticides if necessary.&nbsp;</p>\r\n<p>\"SemiosBIO is appreciative of the financial support it will receive from the Government of Canada,\" said Dr. Michael Gilbert, President and Chief Scientific Officer for SemiosBIO Technologies Inc. \"Our innovations will enable growers to adopt efficient, sustainable alternatives for pest management and provide them with precise monitoring and recordkeeping capabilities.\"</p>\r\n<p>The new technology will reduce manual labour costs and bring improvements to efficiency, productivity, crop management, and organic farming. It will help meet a growing regulatory and consumer demand for efficient, effective alternatives for pest management. Improved records management will also help open new markets for Canadian crops.&nbsp;</p>\r\n<p>This project is funded under the Agricultural Innovation Program (AIP)&mdash;a $50-million initiative announced as part of Canada\'s Economic Action Plan 2011. AIP is part of the Government\'s commitment to help Canadian producers benefit from cutting-edge science and technology. AIP boosts the development and commercialization of innovative new products, technologies, and processes for the agricultural sector. For more information about the AIP and other Agriculture and Agri-Food Canada programs, please visit www.agr.gc.ca.</p>\r\n<p>&ndash;30&ndash;&nbsp;</p>\r\n<p>semiosBIO Technologies Inc. contact:<br />Michael Gilbert, PhD<br />President and Chief Scientific Officer<br />604-202-3245<br />mgilbert@semiosbio.com</p>',1),(4,'Mitacs','SemiosBIO','2012-07-21 00:00:00',NULL,'mitacs','<p>SemiosBIO&rsquo;s Work With Bedbugs Featured on Global News&nbsp;Vancouver Firm Advancing Technology with Mitacs Support</p>\r\n<p><a href=\"http://www.globaltvbc.com/video/entrepreneurs+tap+into+student+brain+power/video.html?v=2257073303#stories/video\" target=\"_blank\">Watch Video</a></p>\r\n<p>Vancouver, B.C. - semiosBIO Technology Inc, a Vancouver company developing pesticide-free products to repel bedbugs, was featured on Global BC News on Monday, July 16, 2012. The story highlighted SemiosBIO&rsquo;s utilization of recent university graduates under the Mitacs program to conduct research and development in advancing its bedbud products.</p>\r\n<p>\"SemiosBIO was pleased to be one of two firms who work with Mitacs to be featured on Global News,\" said Michael Gilbert, President and Chief Scientific Officer for semiosBIO. \"Our partnership with Mitacs has contributed significantly to the development of non-toxic pest control products.\"</p>\r\n<p>SemiosBIO Technology Inc. is developing pheromone-based technologies that offer effective, sustainable and non-toxic approaches to pest management. Current efforts are focussed on products with bio-pesticide applications in the agricultural market and for the management of bedbug infestations.</p>\r\n<p>For more information on semiosBIO, visit semiosBIO.com.&nbsp;</p>\r\n<p>&ndash;30&ndash;&nbsp;</p>\r\n<p>semiosBIO Technologies Inc. contact:</p>\r\n<p>Michael Gilbert, PhD<br />President and Chief Scientific Officer<br />604-202-3245<br />mgilbert@semiosbio.com</p>',1),(5,'Bed Bug Control','SemiosBIO','2012-01-13 00:00:00',NULL,'bed-bug-control','<p><iframe src=\"http://www.youtube.com/embed/Fp5S_YitDZc\" frameborder=\"0\" width=\"560\" height=\"315\"></iframe></p>',1);
/*!40000 ALTER TABLE `blog_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_applications`
--

DROP TABLE IF EXISTS `cms_applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_applications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` char(50) DEFAULT NULL,
  `class` char(100) DEFAULT NULL,
  `name` char(100) DEFAULT NULL,
  `rank` int(10) unsigned DEFAULT NULL,
  `icon` char(100) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_applications`
--

LOCK TABLES `cms_applications` WRITE;
/*!40000 ALTER TABLE `cms_applications` DISABLE KEYS */;
INSERT INTO `cms_applications` VALUES (1,'dashboard','CMS\\Admin\\Dashboard','Dashboard',0,'dashboard.png',0),(2,'pages','CMS\\Page\\Admin','Pages',10,'pages.png',0),(5,'files','CMS\\File\\Admin','Files',15,'files.png',0),(6,'users','CMS\\User\\Admin','Users',50,'users.png',0),(12,'galleries','CMS\\Gallery\\Admin','Galleries',20,'galleries.png',0),(13,'forms','CMS\\FormAdmin','Forms',20,'forms.png',-1),(14,'blog','Blog\\Post\\Admin','Blog',30,'blog.png',0),(15,'blog-categories','Blog\\Category\\Admin','Categories',0,'categories.png',14);
/*!40000 ALTER TABLE `cms_applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_form_fields`
--

DROP TABLE IF EXISTS `cms_form_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_form_fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `form_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `help_text` varchar(255) DEFAULT NULL,
  `options` text,
  `required` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_form_fields`
--

LOCK TABLES `cms_form_fields` WRITE;
/*!40000 ALTER TABLE `cms_form_fields` DISABLE KEYS */;
INSERT INTO `cms_form_fields` VALUES (2,NULL,NULL,2,'textbox','Name',NULL,1,NULL,NULL,NULL),(3,NULL,NULL,2,'textbox','Email',NULL,2,NULL,NULL,NULL),(4,NULL,NULL,2,'textarea','Message',NULL,3,NULL,NULL,NULL);
/*!40000 ALTER TABLE `cms_form_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_forms`
--

DROP TABLE IF EXISTS `cms_forms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_forms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `success_message` text,
  `emails` varchar(255) DEFAULT NULL,
  `ccs` varchar(255) DEFAULT NULL,
  `bccs` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_forms`
--

LOCK TABLES `cms_forms` WRITE;
/*!40000 ALTER TABLE `cms_forms` DISABLE KEYS */;
INSERT INTO `cms_forms` VALUES (2,NULL,NULL,'Contact Form','contact','<p>Your message has been successfully submitted.</p>','info@exo.me',NULL,NULL);
/*!40000 ALTER TABLE `cms_forms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_galleries`
--

DROP TABLE IF EXISTS `cms_galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime DEFAULT NULL,
  `date_edited` datetime DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_galleries`
--

LOCK TABLES `cms_galleries` WRITE;
/*!40000 ALTER TABLE `cms_galleries` DISABLE KEYS */;
INSERT INTO `cms_galleries` VALUES (3,NULL,NULL,'Test Gallery','test'),(4,NULL,NULL,'home-slider','home-slider');
/*!40000 ALTER TABLE `cms_galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_gallery_images`
--

DROP TABLE IF EXISTS `cms_gallery_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_gallery_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime DEFAULT NULL,
  `date_edited` datetime DEFAULT NULL,
  `gallery_id` int(10) unsigned DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `caption` text,
  `filename` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_gallery_images`
--

LOCK TABLES `cms_gallery_images` WRITE;
/*!40000 ALTER TABLE `cms_gallery_images` DISABLE KEYS */;
INSERT INTO `cms_gallery_images` VALUES (8,NULL,NULL,3,123,NULL,NULL,'20070509_gorilla.jpg'),(11,NULL,NULL,3,33,NULL,NULL,'20111230-landing1.jpg'),(12,NULL,NULL,4,NULL,NULL,NULL,'slide1.jpg');
/*!40000 ALTER TABLE `cms_gallery_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_languages`
--

DROP TABLE IF EXISTS `cms_languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` char(50) DEFAULT NULL,
  `name` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_languages`
--

LOCK TABLES `cms_languages` WRITE;
/*!40000 ALTER TABLE `cms_languages` DISABLE KEYS */;
INSERT INTO `cms_languages` VALUES (1,'en','English');
/*!40000 ALTER TABLE `cms_languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_menu_pages`
--

DROP TABLE IF EXISTS `cms_menu_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_menu_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `page_id` int(10) unsigned DEFAULT NULL,
  `parent_id` int(10) unsigned DEFAULT '0',
  `name` char(50) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `type` char(20) DEFAULT NULL,
  `target` char(20) DEFAULT NULL,
  `url` char(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menu_page` (`menu_id`,`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_menu_pages`
--

LOCK TABLES `cms_menu_pages` WRITE;
/*!40000 ALTER TABLE `cms_menu_pages` DISABLE KEYS */;
INSERT INTO `cms_menu_pages` VALUES (23,2,20,22,'Managed & Field IT Services',10,NULL,NULL,NULL),(29,2,21,22,'Network Design',20,NULL,NULL,NULL),(31,2,22,22,'Network Security Auditing',40,NULL,NULL,NULL),(32,2,24,22,'Online Backup',70,NULL,NULL,NULL),(34,2,30,22,'Disaster & Recovery Planning',30,NULL,NULL,NULL),(35,2,31,22,'DataCenter Hosting',50,NULL,NULL,NULL),(36,2,32,22,'Content Filtering',60,NULL,NULL,NULL),(45,2,52,0,'About Semios<strong>BIO</strong>',10,NULL,NULL,NULL),(46,2,53,0,'Innovation',20,NULL,NULL,NULL),(47,2,54,0,'Solutions',30,NULL,NULL,NULL),(48,2,55,0,'News',40,NULL,NULL,NULL),(49,2,56,0,'Careers',50,NULL,NULL,NULL),(50,2,57,0,'Contact',60,NULL,NULL,NULL),(53,2,62,45,'Company Profile',10,NULL,NULL,NULL),(54,2,63,45,'Strategy',20,NULL,NULL,NULL),(55,2,64,45,'Board of Directors',30,NULL,NULL,NULL),(56,2,65,45,'Advisory',40,NULL,NULL,NULL),(57,2,66,45,'Management',50,NULL,NULL,NULL),(58,2,67,46,'Pheromones',10,NULL,NULL,NULL),(59,2,68,46,'Market',20,NULL,NULL,NULL),(60,2,69,47,'SemiosGUARD',10,NULL,NULL,NULL),(61,2,70,47,'SemiosNET',20,NULL,NULL,NULL),(62,2,71,48,'Media',10,NULL,NULL,NULL),(63,2,72,48,'News Releases',20,NULL,NULL,NULL);
/*!40000 ALTER TABLE `cms_menu_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_menus`
--

DROP TABLE IF EXISTS `cms_menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(50) DEFAULT NULL,
  `slug` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_menus`
--

LOCK TABLES `cms_menus` WRITE;
/*!40000 ALTER TABLE `cms_menus` DISABLE KEYS */;
INSERT INTO `cms_menus` VALUES (2,'Main','main');
/*!40000 ALTER TABLE `cms_menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_page_versions`
--

DROP TABLE IF EXISTS `cms_page_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_page_versions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(10) unsigned NOT NULL,
  `language` char(10) DEFAULT 'en',
  `title` char(100) DEFAULT NULL,
  `content` text,
  `published` enum('0','1') DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_edited` datetime DEFAULT NULL,
  `date_published` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `language` (`language`),
  KEY `date_created` (`date_created`),
  KEY `date_edited` (`date_edited`),
  KEY `date_published` (`date_published`)
) ENGINE=InnoDB AUTO_INCREMENT=212 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_page_versions`
--

LOCK TABLES `cms_page_versions` WRITE;
/*!40000 ALTER TABLE `cms_page_versions` DISABLE KEYS */;
INSERT INTO `cms_page_versions` VALUES (175,52,'en','About SemiosBIO','<p>About SemiosBIO</p>','1','2012-08-27 20:29:09','2012-08-27 20:29:09','2012-08-27 20:29:09'),(176,53,'en','Innovation','<h1>Innovation</h1>','1','2012-08-27 20:29:35','2012-08-27 20:29:35','2012-08-27 20:29:35'),(177,54,'en','Solutions','','1','2012-08-27 20:30:27','2012-08-27 20:30:27','2012-08-27 20:30:27'),(178,55,'en','News','<h1>News</h1>','1','2012-08-27 20:30:53','2012-08-27 20:30:53','2012-08-27 20:30:53'),(179,56,'en','Careers','<h1>Careers</h1>','1','2012-08-27 20:31:17','2012-08-27 20:31:17','2012-08-27 20:31:17'),(180,57,'en','Contact','<h1>Contact</h1>','1','2012-08-27 20:31:35','2012-08-27 20:31:35','2012-08-27 20:31:35'),(181,58,'en','Home','<p>Home</p>','1','2012-08-27 20:31:59','2012-08-27 20:31:59','2012-08-27 20:31:59'),(182,58,'en','Home','<h1>Semiochemical Based Pest Management&nbsp;</h1>\r\n<p>Semios is the Greek word for \\\"signal\\\" and semiochemistry is the field&nbsp;of science investigating pheromones and other biochemicals used for communication.</p>\r\n<p>Bio is the Greek word for \\\"life\\\", and signifies the ecological benefits&nbsp;of pheromone based pest management.</p>\r\n<p>Semiochemical based pest management solutions, unlike conventional chemical pesticides, are based on nature\\\'s communication pathways&nbsp;and have been proven to be organic and safe.</p>\r\n<p>Chief Scientific Officer Dr. Michael Gilbert and VP of Product Development Chris Van Natto lead a team of researchers in the field of semiochemical synthesis and formulation, utilizing techniques developed initially for the biopharmaceutical industry &ndash; yielding pheromone solutions that are both safe and effective.</p>','1','2012-08-27 20:49:23','2012-08-27 20:49:23','2012-08-27 20:49:23'),(183,58,'en','Home','<h1>Semiochemical Based Pest Management&nbsp;</h1>\r\n<p>Semios is the Greek word for \"signal\" and semiochemistry is the field&nbsp;of science investigating pheromones and other biochemicals used for communication.</p>\r\n<p>Bio is the Greek word for \"life\", and signifies the ecological benefits&nbsp;of pheromone based pest management.</p>\r\n<p>Semiochemical based pest management solutions, unlike conventional chemical pesticides, are based on nature\'s communication pathways&nbsp;and have been proven to be organic and safe.</p>\r\n<p>Chief Scientific Officer Dr. Michael Gilbert and VP of Product Development Chris Van Natto lead a team of researchers in the field of semiochemical synthesis and formulation, utilizing techniques developed initially for the biopharmaceutical industry &ndash; yielding pheromone solutions that are both safe and effective.</p>','1','2012-08-27 20:51:05','2012-08-27 20:51:05','2012-08-27 20:51:05'),(184,58,'en','Home','','1','2012-08-27 20:51:21','2012-08-27 20:51:21','2012-08-27 20:51:21'),(185,52,'en','About SemiosBIO','<h1>Semiochemical Based Pest Management&nbsp;</h1>\r\n<p>Semios is the Greek word for \"signal\" and semiochemistry is the field&nbsp;of science investigating pheromones and other biochemicals used for communication.</p>\r\n<p>Bio is the Greek word for \"life\", and signifies the ecological benefits&nbsp;of pheromone based pest management.</p>\r\n<p>Semiochemical based pest management solutions, unlike conventional chemical pesticides, are based on nature\'s communication pathways&nbsp;and have been proven to be organic and safe.</p>\r\n<p>Chief Scientific Officer Dr. Michael Gilbert and VP of Product Development Chris Van Natto lead a team of researchers in the field of semiochemical synthesis and formulation, utilizing techniques developed initially for the biopharmaceutical industry &ndash; yielding pheromone solutions that are both safe and effective.</p>','1','2012-08-27 20:51:27','2012-08-27 20:51:27','2012-08-27 20:51:27'),(186,52,'en','About SemiosBIO','<h1>Semiochemical Based Pest Management&nbsp;</h1>\r\n<p>Semios is the Greek word for \"signal\" and semiochemistry is the field&nbsp;of science investigating pheromones and other biochemicals used for communication.</p>\r\n<p>Bio is the Greek word for \"life\", and signifies the ecological benefits&nbsp;of pheromone based pest management.</p>\r\n<p>Semiochemical based pest management solutions, unlike conventional chemical pesticides, are based on nature\'s communication pathways&nbsp;and have been proven to be organic and safe.</p>\r\n<p>Chief Scientific Officer Dr. Michael Gilbert and VP of Product Development Chris Van Natto lead a team of researchers in the field of semiochemical synthesis and formulation, utilizing techniques developed initially for the biopharmaceutical industry &ndash; yielding pheromone solutions that are both safe and effective.</p>','1','2012-08-27 21:12:24','2012-08-27 21:12:24','2012-08-27 21:12:24'),(187,52,'en','About SemiosBIO','<h1>Semiochemical Based Pest Management&nbsp;</h1>\r\n<p>Semios is the Greek word for \"signal\" and semiochemistry is the field&nbsp;of science investigating pheromones and other biochemicals used for communication.</p>\r\n<p>Bio is the Greek word for \"life\", and signifies the ecological benefits&nbsp;of pheromone based pest management.</p>\r\n<p>Semiochemical based pest management solutions, unlike conventional chemical pesticides, are based on nature\'s communication pathways&nbsp;and have been proven to be organic and safe.</p>\r\n<p>Chief Scientific Officer Dr. Michael Gilbert and VP of Product Development Chris Van Natto lead a team of researchers in the field of semiochemical synthesis and formulation, utilizing techniques developed initially for the biopharmaceutical industry &ndash; yielding pheromone solutions that are both safe and effective.</p>','1','2012-08-27 21:13:24','2012-08-27 21:13:24','2012-08-27 21:13:24'),(188,58,'en','Home','','1','2012-08-27 21:13:29','2012-08-27 21:13:29','2012-08-27 21:13:29'),(189,58,'en','Home','<h1>Advanced Technology</h1>\r\n<p>SemiosBIO Technologies Inc. is a research company dedicated to developing safe and environmentally-friendly pest management solutions. &nbsp;Our goal is to eliminate the toxic chemical pesticides currently found in our food and in our homes. Our pheromone-based technologies offer effective yet non-toxic approaches to pest management.</p>','1','2012-08-27 22:56:20','2012-08-27 22:56:20','2012-08-27 22:56:20'),(190,53,'en','Innovation','<h1>Innovation</h1>\r\n<table class=\"contentpaneopen\" style=\"margin-bottom: 0px; color: #000000; font-family: arial, sans-serif; font-size: 14px; text-align: left; background-color: #ffffff;\">\r\n<tbody>\r\n<tr>\r\n<td valign=\"top\">\r\n<p style=\"margin-bottom: 0px; font-family: arial, sans-serif; font-size: 10pt; line-height: 12pt;\">Chemical pesticides are often highly toxic substances that kill many species of insects and pests. Although they are advantages to these type of broad-spectrum pesticides, they are also non-discriminatory, threatening non-target species in both treated areas and areas well away from where these pesticides were applied.&nbsp; Pesticides can accumulate in the environment and within the food chain, resulting in long-term negative side-effects.&nbsp; Pests have developed resistance to pesticides, requiring increases in the number or strength of applications or use of combinations of pesticides. Not only are these pesticides underperforming, overuse of these chemicals exacerbates environmental and human safety issues related to these products.<br style=\"margin: 0px; padding: 0px;\" /><br style=\"margin: 0px; padding: 0px;\" />Biopesticides are defined as naturally occurring substances that have the ability to control pests. They are generally non-toxic, used in very low doses and very targeted. In the case of biochemical biopesticides such as pheromones, the products work by modifying pest behaviour. Many insects are known to emit pheromones to attract mates, attract others to favourable locations or warn others away from hazards. SemiosBIO will take advantage of these naturally occurring compounds to develop strategies to control pests through use of repellents or attractants.<br style=\"margin: 0px; padding: 0px;\" /><br style=\"margin: 0px; padding: 0px;\" />There are three key elements to successful biopesticide products: active ingredient, formulation and delivery. The activity of semiochemicals comes from manufactured ingredients that are exact replicates or analogs of naturally occurring semiochemicals. Unlike pesticides, the active ingredients in biopesticides are biodegradable and used in very low doses. A robust formulation is required to maintain the integrity of the active ingredient. The delivery of the active ingredient needs to be controlled in manner that allows for even and constant distribution throughout a treated area. In the case of pheromone biopesticides for use in orchards, the very low level of active ingredient needs to be maintained in the atmosphere directly above the crop for periods up to 4 months.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-08-28 22:19:36','2012-08-28 22:19:36','2012-08-28 22:19:36'),(191,53,'en','Innovation','<h1>Innovation</h1>\r\n<p>Chemical pesticides are often highly toxic substances that kill many species of insects and pests. Although they are advantages to these type of broad-spectrum pesticides, they are also non-discriminatory, threatening non-target species in both treated areas and areas well away from where these pesticides were applied.&nbsp; Pesticides can accumulate in the environment and within the food chain, resulting in long-term negative side-effects.&nbsp; Pests have developed resistance to pesticides, requiring increases in the number or strength of applications or use of combinations of pesticides. Not only are these pesticides underperforming, overuse of these chemicals exacerbates environmental and human safety issues related to these products.<br style=\"margin: 0px; padding: 0px;\" /><br style=\"margin: 0px; padding: 0px;\" />Biopesticides are defined as naturally occurring substances that have the ability to control pests. They are generally non-toxic, used in very low doses and very targeted. In the case of biochemical biopesticides such as pheromones, the products work by modifying pest behaviour. Many insects are known to emit pheromones to attract mates, attract others to favourable locations or warn others away from hazards. SemiosBIO will take advantage of these naturally occurring compounds to develop strategies to control pests through use of repellents or attractants.<br style=\"margin: 0px; padding: 0px;\" /><br style=\"margin: 0px; padding: 0px;\" />There are three key elements to successful biopesticide products: active ingredient, formulation and delivery. The activity of semiochemicals comes from manufactured ingredients that are exact replicates or analogs of naturally occurring semiochemicals. Unlike pesticides, the active ingredients in biopesticides are biodegradable and used in very low doses. A robust formulation is required to maintain the integrity of the active ingredient. The delivery of the active ingredient needs to be controlled in manner that allows for even and constant distribution throughout a treated area. In the case of pheromone biopesticides for use in orchards, the very low level of active ingredient needs to be maintained in the atmosphere directly above the crop for periods up to 4 months.</p>','1','2012-08-28 22:20:28','2012-08-28 22:20:28','2012-08-28 22:20:28'),(192,57,'en','Contact','<h1>Contact</h1>\r\n<p>Research and collaboration opportunities: <a href=\"mailto:mgilbert@semiosbio.com\">mgilbert@semiosbio.com</a></p>\r\n<p>Investment opportunities: <a href=\"mailto:invest@semiosbio.com\">invest@semiosbio.com</a></p>\r\n<p>All other correspondence: <a href=\"mailto:info@semiosbio.com\">info@semiosbio.com</a>&nbsp;</p>\r\n<p>SemiosBIO Technologies Inc.</p>\r\n<p><strong>British Columbia</strong></p>\r\n<div>Discovery Parks Vancouver &nbsp; &nbsp; &nbsp;</div>\r\n<div>320 - 887 Great Northern Way</div>\r\n<div>Vancouver, BC</div>\r\n<div>V5T 4T5</div>\r\n<div>Tel: (604) 202-3245</div>\r\n<div>&nbsp;</div>\r\n<div><strong>Ontario</strong></div>\r\n<div>&nbsp;</div>\r\n<div>Vineland Research and Innovation Centre</div>\r\n<div>4890 Victoria Avenue North</div>\r\n<div>Box 4000 Vineland Stn, ON</div>\r\n<div>L0R 2E0&nbsp;</div>\r\n<div>Tel: (905) 562-0320 x877</div>\r\n<div>&nbsp;</div>','1','2012-08-28 22:22:47','2012-08-28 22:22:47','2012-08-28 22:22:47'),(193,57,'en','Contact','<h1>Contact</h1>\r\n<p>Research and collaboration opportunities: <a href=\"mailto:mgilbert@semiosbio.com\">mgilbert@semiosbio.com</a></p>\r\n<p>Investment opportunities: <a href=\"mailto:invest@semiosbio.com\">invest@semiosbio.com</a></p>\r\n<p>All other correspondence: <a href=\"mailto:info@semiosbio.com\">info@semiosbio.com</a>&nbsp;</p>\r\n<p>SemiosBIO Technologies Inc.</p>\r\n<p><strong>British Columbia</strong></p>\r\n<div><img style=\"float: right;\" src=\"../../../../app/assets/images/discoverypark.jpg\" alt=\"\" />Discovery Parks Vancouver &nbsp; &nbsp; &nbsp;</div>\r\n<div>320 - 887 Great Northern Way</div>\r\n<div>Vancouver, BC</div>\r\n<div>V5T 4T5</div>\r\n<div>Tel: (604) 202-3245</div>\r\n<div>&nbsp;</div>\r\n<div><strong>Ontario</strong></div>\r\n<div>&nbsp;</div>\r\n<div><img src=\"../../../../app/assets/images/vineland.jpeg\" alt=\"\" />Vineland Research and Innovation Centre</div>\r\n<div>4890 Victoria Avenue North</div>\r\n<div>Box 4000 Vineland Stn, ON</div>\r\n<div>L0R 2E0&nbsp;</div>\r\n<div>Tel: (905) 562-0320 x877</div>\r\n<div>&nbsp;</div>','1','2012-08-28 22:25:18','2012-08-28 22:25:18','2012-08-28 22:25:18'),(194,57,'en','Contact','<h1>Contact</h1>\r\n<p>Research and collaboration opportunities: <a href=\"mailto:mgilbert@semiosbio.com\">mgilbert@semiosbio.com</a></p>\r\n<p>Investment opportunities: <a href=\"mailto:invest@semiosbio.com\">invest@semiosbio.com</a></p>\r\n<p>All other correspondence: <a href=\"mailto:info@semiosbio.com\">info@semiosbio.com</a>&nbsp;</p>\r\n<p>SemiosBIO Technologies Inc.</p>\r\n<p><strong>British Columbia</strong></p>\r\n<div><img style=\"float: right;\" src=\"../../../../app/assets/images/discoverypark.jpg\" alt=\"\" />Discovery Parks Vancouver &nbsp; &nbsp; &nbsp;</div>\r\n<div>320 - 887 Great Northern Way</div>\r\n<div>Vancouver, BC</div>\r\n<div>V5T 4T5</div>\r\n<div>Tel: (604) 202-3245</div>\r\n<div>&nbsp;</div>\r\n<div><strong>Ontario</strong></div>\r\n<div>&nbsp;</div>\r\n<div><img style=\"float: right;\" src=\"../../../../app/assets/images/vineland.jpg\" alt=\"\" />Vineland Research and Innovation Centre</div>\r\n<div>4890 Victoria Avenue North</div>\r\n<div>Box 4000 Vineland Stn, ON</div>\r\n<div>L0R 2E0&nbsp;</div>\r\n<div>Tel: (905) 562-0320 x877</div>\r\n<div>&nbsp;</div>','1','2012-08-28 22:28:04','2012-08-28 22:28:04','2012-08-28 22:28:04'),(195,59,'en','Search','<h1>Search</h1>\r\n<p>&lt;cms:search /&gt;</p>','1','2012-08-28 22:38:47','2012-08-28 22:38:47','2012-08-28 22:38:47'),(196,58,'en','Home','<h1>Advanced Technology</h1>\r\n<p>SemiosBIO Technologies Inc. is a research company dedicated to developing safe and environmentally-friendly pest management solutions. &nbsp;Our goal is to eliminate the toxic chemical pesticides currently found in our food and in our homes. Our pheromone-based technologies offer effective yet non-toxic approaches to pest management.</p>\r\n<p><a href=\"../../../../innovation\"><img style=\"float: right;\" src=\"../../../../app/assets/images/learn-more.png\" alt=\"\" /></a></p>','1','2012-08-28 23:26:03','2012-08-28 23:26:03','2012-08-28 23:26:03'),(199,58,'en','Home','<h1>Advanced Technology</h1>\r\n<p>SemiosBIO Technologies Inc. is a research company dedicated to developing safe and environmentally-friendly pest management solutions. &nbsp;Our goal is to eliminate the toxic chemical pesticides currently found in our food and in our homes. Our pheromone-based technologies offer effective yet non-toxic approaches to pest management.</p>\r\n<p style=\"text-align: right;\"><a class=\"button\" href=\"../../../../innovation\">Learn More</a></p>','1','2012-08-29 20:31:41','2012-08-29 20:31:41','2012-08-29 20:31:41'),(200,62,'en','Company Profile','<h1>Company Profile</h1>','1','2012-08-29 20:50:35','2012-08-29 20:50:35','2012-08-29 20:50:35'),(201,63,'en','Strategy','<h1>Strategy</h1>','1','2012-08-29 20:51:25','2012-08-29 20:51:25','2012-08-29 20:51:25'),(202,64,'en','Board of Directors','<h1>Board of Directors</h1>','1','2012-08-29 20:51:54','2012-08-29 20:51:54','2012-08-29 20:51:54'),(203,65,'en','Advisory','<h1>Advisory</h1>','1','2012-08-29 20:53:02','2012-08-29 20:53:02','2012-08-29 20:53:02'),(204,66,'en','Management','<h1>Management</h1>','1','2012-08-29 20:53:29','2012-08-29 20:53:29','2012-08-29 20:53:29'),(205,67,'en','Pheromones','<h1>Pheromones</h1>','1','2012-08-29 20:55:33','2012-08-29 20:55:33','2012-08-29 20:55:33'),(206,68,'en','Market','<h1>Market</h1>','1','2012-08-29 20:55:58','2012-08-29 20:55:58','2012-08-29 20:55:58'),(207,69,'en','SemiosGUARD','<h1>SemiosGUARD</h1>','1','2012-08-29 20:56:36','2012-08-29 20:56:36','2012-08-29 20:56:36'),(208,70,'en','SemiosNET','<h1>SemiosNET</h1>','1','2012-08-29 20:57:12','2012-08-29 20:57:12','2012-08-29 20:57:12'),(209,70,'en','SemiosNET','<h1>SemiosNET</h1>','1','2012-08-29 20:57:22','2012-08-29 20:57:22','2012-08-29 20:57:22'),(210,71,'en','Media','<h1>Media</h1>','1','2012-08-29 20:57:46','2012-08-29 20:57:46','2012-08-29 20:57:46'),(211,72,'en','News Releases','<h1>News Releases</h1>','1','2012-08-29 20:58:36','2012-08-29 20:58:36','2012-08-29 20:58:36');
/*!40000 ALTER TABLE `cms_page_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_pages`
--

DROP TABLE IF EXISTS `cms_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` char(50) DEFAULT NULL,
  `template` char(50) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_edited` datetime DEFAULT NULL,
  `active` enum('1','0') DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `date_created` (`date_created`),
  KEY `date_edited` (`date_edited`),
  KEY `active` (`active`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_pages`
--

LOCK TABLES `cms_pages` WRITE;
/*!40000 ALTER TABLE `cms_pages` DISABLE KEYS */;
INSERT INTO `cms_pages` VALUES (20,'managed-it','default','2012-02-28 18:56:35','2012-03-21 23:07:51','1'),(21,'network-design','default','2012-02-28 18:58:55','2012-03-21 22:59:50','1'),(22,'network-security','default','2012-02-28 19:00:40','2012-03-21 23:05:14','1'),(24,'online-backup','default','2012-02-28 19:02:06','2012-03-21 23:03:01','1'),(30,'disaster-recovery','default','2012-03-21 23:04:30','2012-03-21 23:04:30','1'),(31,'datacenter-hosting','default','2012-03-21 23:06:34','2012-03-21 23:06:50','1'),(32,'content-filtering','default','2012-03-21 23:08:28','2012-03-21 23:08:28','1'),(52,'about','default','2012-08-27 20:29:09','2012-08-27 21:13:24','1'),(53,'innovation','default','2012-08-27 20:29:35','2012-08-28 22:20:28','1'),(54,'solutions','default','2012-08-27 20:30:27','2012-08-27 20:30:27','1'),(55,'news','default','2012-08-27 20:30:53','2012-08-27 20:30:53','1'),(56,'careers','default','2012-08-27 20:31:17','2012-08-27 20:31:17','1'),(57,'contact','default','2012-08-27 20:31:35','2012-08-28 22:28:04','1'),(58,'home','home','2012-08-27 20:31:59','2012-08-29 20:31:41','1'),(59,'search','default','2012-08-28 22:38:47','2012-08-28 22:38:47','1'),(62,'company-profile','default','2012-08-29 20:50:35','2012-08-29 20:50:35','1'),(63,'strategy','default','2012-08-29 20:51:25','2012-08-29 20:51:25','1'),(64,'board-of-directors','default','2012-08-29 20:51:54','2012-08-29 20:51:54','1'),(65,'advisory','default','2012-08-29 20:53:02','2012-08-29 20:53:02','1'),(66,'management','default','2012-08-29 20:53:29','2012-08-29 20:53:29','1'),(67,'pheromones','default','2012-08-29 20:55:33','2012-08-29 20:55:33','1'),(68,'market','default','2012-08-29 20:55:58','2012-08-29 20:55:58','1'),(69,'semiosguard','default','2012-08-29 20:56:36','2012-08-29 20:56:36','1'),(70,'semiosnet','default','2012-08-29 20:57:12','2012-08-29 20:57:22','1'),(71,'media','default','2012-08-29 20:57:46','2012-08-29 20:57:46','1'),(72,'news-releases','default','2012-08-29 20:58:35','2012-08-29 20:58:35','1');
/*!40000 ALTER TABLE `cms_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_user_permissions`
--

DROP TABLE IF EXISTS `cms_user_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_user_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `application_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `permission` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_user_permissions`
--

LOCK TABLES `cms_user_permissions` WRITE;
/*!40000 ALTER TABLE `cms_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `cms_user_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_users`
--

DROP TABLE IF EXISTS `cms_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(50) DEFAULT NULL,
  `first_name` char(20) DEFAULT NULL,
  `last_name` char(20) DEFAULT NULL,
  `email` char(100) DEFAULT NULL,
  `password` char(50) DEFAULT NULL,
  `active` enum('1','0') DEFAULT '1',
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_users`
--

LOCK TABLES `cms_users` WRITE;
/*!40000 ALTER TABLE `cms_users` DISABLE KEYS */;
INSERT INTO `cms_users` VALUES (1,'gui','Guillaume','VanderEst','gui@exodus.io','cc03e747a6afbbcbf8be7668acfebee5','1','270644_10150648600530567_612695566_19045076_352090_n.jpg'),(5,'kevin','Kevin','Skrepnek','kevin@skrepnek.ca','202cb962ac59075b964b07152d234b70','1','20070509_gorilla.jpg');
/*!40000 ALTER TABLE `cms_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `realestate_listings`
--

DROP TABLE IF EXISTS `realestate_listings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `realestate_listings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `price` decimal(10,0) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `realestate_listings`
--

LOCK TABLES `realestate_listings` WRITE;
/*!40000 ALTER TABLE `realestate_listings` DISABLE KEYS */;
INSERT INTO `realestate_listings` VALUES (2,'Gorilla','fff',9999999999,''),(3,'Ffff','',0,'270644_10150648600530567_612695566_19045076_352090_n.jpg');
/*!40000 ALTER TABLE `realestate_listings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `store_attributes`
--

DROP TABLE IF EXISTS `store_attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `store_attributes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `store_attributes`
--

LOCK TABLES `store_attributes` WRITE;
/*!40000 ALTER TABLE `store_attributes` DISABLE KEYS */;
/*!40000 ALTER TABLE `store_attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `store_categories`
--

DROP TABLE IF EXISTS `store_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `store_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `store_categories`
--

LOCK TABLES `store_categories` WRITE;
/*!40000 ALTER TABLE `store_categories` DISABLE KEYS */;
INSERT INTO `store_categories` VALUES (1,NULL,NULL,'Coasters','coasters',NULL);
/*!40000 ALTER TABLE `store_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `store_category_products`
--

DROP TABLE IF EXISTS `store_category_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `store_category_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `category_id` int(10) unsigned DEFAULT NULL,
  `product_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_product` (`category_id`,`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `store_category_products`
--

LOCK TABLES `store_category_products` WRITE;
/*!40000 ALTER TABLE `store_category_products` DISABLE KEYS */;
INSERT INTO `store_category_products` VALUES (1,NULL,NULL,1,1);
/*!40000 ALTER TABLE `store_category_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `store_product_attributes`
--

DROP TABLE IF EXISTS `store_product_attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `store_product_attributes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `attribute_id` int(10) unsigned DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `weight` decimal(10,2) DEFAULT NULL,
  `sku_append` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `store_product_attributes`
--

LOCK TABLES `store_product_attributes` WRITE;
/*!40000 ALTER TABLE `store_product_attributes` DISABLE KEYS */;
/*!40000 ALTER TABLE `store_product_attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `store_product_types`
--

DROP TABLE IF EXISTS `store_product_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `store_product_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `store_product_types`
--

LOCK TABLES `store_product_types` WRITE;
/*!40000 ALTER TABLE `store_product_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `store_product_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `store_products`
--

DROP TABLE IF EXISTS `store_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `store_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `description` text,
  `featured` int(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  UNIQUE KEY `sku` (`sku`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `store_products`
--

LOCK TABLES `store_products` WRITE;
/*!40000 ALTER TABLE `store_products` DISABLE KEYS */;
INSERT INTO `store_products` VALUES (1,NULL,NULL,'Fake Coaster','fake-coaster','FAKECOASTER','This is a fake coaster.  It\'s neat, but super-fake.',1);
/*!40000 ALTER TABLE `store_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `store_skus`
--

DROP TABLE IF EXISTS `store_skus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `store_skus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `weight` decimal(10,2) DEFAULT NULL,
  `product_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sku` (`sku`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `store_skus`
--

LOCK TABLES `store_skus` WRITE;
/*!40000 ALTER TABLE `store_skus` DISABLE KEYS */;
INSERT INTO `store_skus` VALUES (1,NULL,NULL,'ABC123',20.00,1.00,1,'Example Combo');
/*!40000 ALTER TABLE `store_skus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@domain.com','Admin','User','5f4dcc3b5aa765d61d8327deb882cf99','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-08-29 21:53:54
