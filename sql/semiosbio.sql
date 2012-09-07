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
INSERT INTO `cms_menu_pages` VALUES (23,2,20,22,'Managed & Field IT Services',10,NULL,NULL,NULL),(29,2,21,22,'Network Design',20,NULL,NULL,NULL),(31,2,22,22,'Network Security Auditing',40,NULL,NULL,NULL),(32,2,24,22,'Online Backup',70,NULL,NULL,NULL),(34,2,30,22,'Disaster & Recovery Planning',30,NULL,NULL,NULL),(35,2,31,22,'DataCenter Hosting',50,NULL,NULL,NULL),(36,2,32,22,'Content Filtering',60,NULL,NULL,NULL),(45,2,52,0,'About Semios<strong>BIO</strong>',10,NULL,NULL,NULL),(46,2,53,0,'Innovation',20,NULL,NULL,NULL),(47,2,54,0,'Solutions',30,NULL,NULL,NULL),(48,2,55,0,'News',40,NULL,NULL,NULL),(49,2,56,0,'Careers',50,NULL,NULL,NULL),(50,2,57,0,'Contact',60,NULL,NULL,NULL),(53,2,62,45,'Company Profile',10,NULL,NULL,NULL),(54,2,63,45,'Strategy',20,NULL,NULL,NULL),(55,2,64,45,'Board of Directors',30,NULL,NULL,NULL),(56,2,65,45,'Advisory',40,NULL,NULL,NULL),(57,2,66,45,'Management',50,NULL,NULL,NULL),(58,2,67,46,'Pheromones',10,NULL,NULL,NULL),(59,2,68,46,'Markets',20,NULL,NULL,NULL),(60,2,69,47,'SemiosGUARD',10,NULL,NULL,NULL),(61,2,70,47,'SemiosNET',20,NULL,NULL,NULL),(62,2,71,48,'Media',10,NULL,NULL,NULL),(63,2,72,48,'News Releases',20,NULL,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=263 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_page_versions`
--

LOCK TABLES `cms_page_versions` WRITE;
/*!40000 ALTER TABLE `cms_page_versions` DISABLE KEYS */;
INSERT INTO `cms_page_versions` VALUES (175,52,'en','About SemiosBIO','<p>About SemiosBIO</p>','1','2012-08-27 20:29:09','2012-08-27 20:29:09','2012-08-27 20:29:09'),(176,53,'en','Innovation','<h1>Innovation</h1>','1','2012-08-27 20:29:35','2012-08-27 20:29:35','2012-08-27 20:29:35'),(177,54,'en','Solutions','','1','2012-08-27 20:30:27','2012-08-27 20:30:27','2012-08-27 20:30:27'),(178,55,'en','News','<h1>News</h1>','1','2012-08-27 20:30:53','2012-08-27 20:30:53','2012-08-27 20:30:53'),(179,56,'en','Careers','<h1>Careers</h1>','1','2012-08-27 20:31:17','2012-08-27 20:31:17','2012-08-27 20:31:17'),(180,57,'en','Contact','<h1>Contact</h1>','1','2012-08-27 20:31:35','2012-08-27 20:31:35','2012-08-27 20:31:35'),(181,58,'en','Home','<p>Home</p>','1','2012-08-27 20:31:59','2012-08-27 20:31:59','2012-08-27 20:31:59'),(182,58,'en','Home','<h1>Semiochemical Based Pest Management&nbsp;</h1>\r\n<p>Semios is the Greek word for \\\"signal\\\" and semiochemistry is the field&nbsp;of science investigating pheromones and other biochemicals used for communication.</p>\r\n<p>Bio is the Greek word for \\\"life\\\", and signifies the ecological benefits&nbsp;of pheromone based pest management.</p>\r\n<p>Semiochemical based pest management solutions, unlike conventional chemical pesticides, are based on nature\\\'s communication pathways&nbsp;and have been proven to be organic and safe.</p>\r\n<p>Chief Scientific Officer Dr. Michael Gilbert and VP of Product Development Chris Van Natto lead a team of researchers in the field of semiochemical synthesis and formulation, utilizing techniques developed initially for the biopharmaceutical industry &ndash; yielding pheromone solutions that are both safe and effective.</p>','1','2012-08-27 20:49:23','2012-08-27 20:49:23','2012-08-27 20:49:23'),(183,58,'en','Home','<h1>Semiochemical Based Pest Management&nbsp;</h1>\r\n<p>Semios is the Greek word for \"signal\" and semiochemistry is the field&nbsp;of science investigating pheromones and other biochemicals used for communication.</p>\r\n<p>Bio is the Greek word for \"life\", and signifies the ecological benefits&nbsp;of pheromone based pest management.</p>\r\n<p>Semiochemical based pest management solutions, unlike conventional chemical pesticides, are based on nature\'s communication pathways&nbsp;and have been proven to be organic and safe.</p>\r\n<p>Chief Scientific Officer Dr. Michael Gilbert and VP of Product Development Chris Van Natto lead a team of researchers in the field of semiochemical synthesis and formulation, utilizing techniques developed initially for the biopharmaceutical industry &ndash; yielding pheromone solutions that are both safe and effective.</p>','1','2012-08-27 20:51:05','2012-08-27 20:51:05','2012-08-27 20:51:05'),(184,58,'en','Home','','1','2012-08-27 20:51:21','2012-08-27 20:51:21','2012-08-27 20:51:21'),(185,52,'en','About SemiosBIO','<h1>Semiochemical Based Pest Management&nbsp;</h1>\r\n<p>Semios is the Greek word for \"signal\" and semiochemistry is the field&nbsp;of science investigating pheromones and other biochemicals used for communication.</p>\r\n<p>Bio is the Greek word for \"life\", and signifies the ecological benefits&nbsp;of pheromone based pest management.</p>\r\n<p>Semiochemical based pest management solutions, unlike conventional chemical pesticides, are based on nature\'s communication pathways&nbsp;and have been proven to be organic and safe.</p>\r\n<p>Chief Scientific Officer Dr. Michael Gilbert and VP of Product Development Chris Van Natto lead a team of researchers in the field of semiochemical synthesis and formulation, utilizing techniques developed initially for the biopharmaceutical industry &ndash; yielding pheromone solutions that are both safe and effective.</p>','1','2012-08-27 20:51:27','2012-08-27 20:51:27','2012-08-27 20:51:27'),(186,52,'en','About SemiosBIO','<h1>Semiochemical Based Pest Management&nbsp;</h1>\r\n<p>Semios is the Greek word for \"signal\" and semiochemistry is the field&nbsp;of science investigating pheromones and other biochemicals used for communication.</p>\r\n<p>Bio is the Greek word for \"life\", and signifies the ecological benefits&nbsp;of pheromone based pest management.</p>\r\n<p>Semiochemical based pest management solutions, unlike conventional chemical pesticides, are based on nature\'s communication pathways&nbsp;and have been proven to be organic and safe.</p>\r\n<p>Chief Scientific Officer Dr. Michael Gilbert and VP of Product Development Chris Van Natto lead a team of researchers in the field of semiochemical synthesis and formulation, utilizing techniques developed initially for the biopharmaceutical industry &ndash; yielding pheromone solutions that are both safe and effective.</p>','1','2012-08-27 21:12:24','2012-08-27 21:12:24','2012-08-27 21:12:24'),(187,52,'en','About SemiosBIO','<h1>Semiochemical Based Pest Management&nbsp;</h1>\r\n<p>Semios is the Greek word for \"signal\" and semiochemistry is the field&nbsp;of science investigating pheromones and other biochemicals used for communication.</p>\r\n<p>Bio is the Greek word for \"life\", and signifies the ecological benefits&nbsp;of pheromone based pest management.</p>\r\n<p>Semiochemical based pest management solutions, unlike conventional chemical pesticides, are based on nature\'s communication pathways&nbsp;and have been proven to be organic and safe.</p>\r\n<p>Chief Scientific Officer Dr. Michael Gilbert and VP of Product Development Chris Van Natto lead a team of researchers in the field of semiochemical synthesis and formulation, utilizing techniques developed initially for the biopharmaceutical industry &ndash; yielding pheromone solutions that are both safe and effective.</p>','1','2012-08-27 21:13:24','2012-08-27 21:13:24','2012-08-27 21:13:24'),(188,58,'en','Home','','1','2012-08-27 21:13:29','2012-08-27 21:13:29','2012-08-27 21:13:29'),(189,58,'en','Home','<h1>Advanced Technology</h1>\r\n<p>SemiosBIO Technologies Inc. is a research company dedicated to developing safe and environmentally-friendly pest management solutions. &nbsp;Our goal is to eliminate the toxic chemical pesticides currently found in our food and in our homes. Our pheromone-based technologies offer effective yet non-toxic approaches to pest management.</p>','1','2012-08-27 22:56:20','2012-08-27 22:56:20','2012-08-27 22:56:20'),(190,53,'en','Innovation','<h1>Innovation</h1>\r\n<table class=\"contentpaneopen\" style=\"margin-bottom: 0px; color: #000000; font-family: arial, sans-serif; font-size: 14px; text-align: left; background-color: #ffffff;\">\r\n<tbody>\r\n<tr>\r\n<td valign=\"top\">\r\n<p style=\"margin-bottom: 0px; font-family: arial, sans-serif; font-size: 10pt; line-height: 12pt;\">Chemical pesticides are often highly toxic substances that kill many species of insects and pests. Although they are advantages to these type of broad-spectrum pesticides, they are also non-discriminatory, threatening non-target species in both treated areas and areas well away from where these pesticides were applied.&nbsp; Pesticides can accumulate in the environment and within the food chain, resulting in long-term negative side-effects.&nbsp; Pests have developed resistance to pesticides, requiring increases in the number or strength of applications or use of combinations of pesticides. Not only are these pesticides underperforming, overuse of these chemicals exacerbates environmental and human safety issues related to these products.<br style=\"margin: 0px; padding: 0px;\" /><br style=\"margin: 0px; padding: 0px;\" />Biopesticides are defined as naturally occurring substances that have the ability to control pests. They are generally non-toxic, used in very low doses and very targeted. In the case of biochemical biopesticides such as pheromones, the products work by modifying pest behaviour. Many insects are known to emit pheromones to attract mates, attract others to favourable locations or warn others away from hazards. SemiosBIO will take advantage of these naturally occurring compounds to develop strategies to control pests through use of repellents or attractants.<br style=\"margin: 0px; padding: 0px;\" /><br style=\"margin: 0px; padding: 0px;\" />There are three key elements to successful biopesticide products: active ingredient, formulation and delivery. The activity of semiochemicals comes from manufactured ingredients that are exact replicates or analogs of naturally occurring semiochemicals. Unlike pesticides, the active ingredients in biopesticides are biodegradable and used in very low doses. A robust formulation is required to maintain the integrity of the active ingredient. The delivery of the active ingredient needs to be controlled in manner that allows for even and constant distribution throughout a treated area. In the case of pheromone biopesticides for use in orchards, the very low level of active ingredient needs to be maintained in the atmosphere directly above the crop for periods up to 4 months.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-08-28 22:19:36','2012-08-28 22:19:36','2012-08-28 22:19:36'),(191,53,'en','Innovation','<h1>Innovation</h1>\r\n<p>Chemical pesticides are often highly toxic substances that kill many species of insects and pests. Although they are advantages to these type of broad-spectrum pesticides, they are also non-discriminatory, threatening non-target species in both treated areas and areas well away from where these pesticides were applied.&nbsp; Pesticides can accumulate in the environment and within the food chain, resulting in long-term negative side-effects.&nbsp; Pests have developed resistance to pesticides, requiring increases in the number or strength of applications or use of combinations of pesticides. Not only are these pesticides underperforming, overuse of these chemicals exacerbates environmental and human safety issues related to these products.<br style=\"margin: 0px; padding: 0px;\" /><br style=\"margin: 0px; padding: 0px;\" />Biopesticides are defined as naturally occurring substances that have the ability to control pests. They are generally non-toxic, used in very low doses and very targeted. In the case of biochemical biopesticides such as pheromones, the products work by modifying pest behaviour. Many insects are known to emit pheromones to attract mates, attract others to favourable locations or warn others away from hazards. SemiosBIO will take advantage of these naturally occurring compounds to develop strategies to control pests through use of repellents or attractants.<br style=\"margin: 0px; padding: 0px;\" /><br style=\"margin: 0px; padding: 0px;\" />There are three key elements to successful biopesticide products: active ingredient, formulation and delivery. The activity of semiochemicals comes from manufactured ingredients that are exact replicates or analogs of naturally occurring semiochemicals. Unlike pesticides, the active ingredients in biopesticides are biodegradable and used in very low doses. A robust formulation is required to maintain the integrity of the active ingredient. The delivery of the active ingredient needs to be controlled in manner that allows for even and constant distribution throughout a treated area. In the case of pheromone biopesticides for use in orchards, the very low level of active ingredient needs to be maintained in the atmosphere directly above the crop for periods up to 4 months.</p>','1','2012-08-28 22:20:28','2012-08-28 22:20:28','2012-08-28 22:20:28'),(192,57,'en','Contact','<h1>Contact</h1>\r\n<p>Research and collaboration opportunities: <a href=\"mailto:mgilbert@semiosbio.com\">mgilbert@semiosbio.com</a></p>\r\n<p>Investment opportunities: <a href=\"mailto:invest@semiosbio.com\">invest@semiosbio.com</a></p>\r\n<p>All other correspondence: <a href=\"mailto:info@semiosbio.com\">info@semiosbio.com</a>&nbsp;</p>\r\n<p>SemiosBIO Technologies Inc.</p>\r\n<p><strong>British Columbia</strong></p>\r\n<div>Discovery Parks Vancouver &nbsp; &nbsp; &nbsp;</div>\r\n<div>320 - 887 Great Northern Way</div>\r\n<div>Vancouver, BC</div>\r\n<div>V5T 4T5</div>\r\n<div>Tel: (604) 202-3245</div>\r\n<div>&nbsp;</div>\r\n<div><strong>Ontario</strong></div>\r\n<div>&nbsp;</div>\r\n<div>Vineland Research and Innovation Centre</div>\r\n<div>4890 Victoria Avenue North</div>\r\n<div>Box 4000 Vineland Stn, ON</div>\r\n<div>L0R 2E0&nbsp;</div>\r\n<div>Tel: (905) 562-0320 x877</div>\r\n<div>&nbsp;</div>','1','2012-08-28 22:22:47','2012-08-28 22:22:47','2012-08-28 22:22:47'),(193,57,'en','Contact','<h1>Contact</h1>\r\n<p>Research and collaboration opportunities: <a href=\"mailto:mgilbert@semiosbio.com\">mgilbert@semiosbio.com</a></p>\r\n<p>Investment opportunities: <a href=\"mailto:invest@semiosbio.com\">invest@semiosbio.com</a></p>\r\n<p>All other correspondence: <a href=\"mailto:info@semiosbio.com\">info@semiosbio.com</a>&nbsp;</p>\r\n<p>SemiosBIO Technologies Inc.</p>\r\n<p><strong>British Columbia</strong></p>\r\n<div><img style=\"float: right;\" src=\"../../../../app/assets/images/discoverypark.jpg\" alt=\"\" />Discovery Parks Vancouver &nbsp; &nbsp; &nbsp;</div>\r\n<div>320 - 887 Great Northern Way</div>\r\n<div>Vancouver, BC</div>\r\n<div>V5T 4T5</div>\r\n<div>Tel: (604) 202-3245</div>\r\n<div>&nbsp;</div>\r\n<div><strong>Ontario</strong></div>\r\n<div>&nbsp;</div>\r\n<div><img src=\"../../../../app/assets/images/vineland.jpeg\" alt=\"\" />Vineland Research and Innovation Centre</div>\r\n<div>4890 Victoria Avenue North</div>\r\n<div>Box 4000 Vineland Stn, ON</div>\r\n<div>L0R 2E0&nbsp;</div>\r\n<div>Tel: (905) 562-0320 x877</div>\r\n<div>&nbsp;</div>','1','2012-08-28 22:25:18','2012-08-28 22:25:18','2012-08-28 22:25:18'),(194,57,'en','Contact','<h1>Contact</h1>\r\n<p>Research and collaboration opportunities: <a href=\"mailto:mgilbert@semiosbio.com\">mgilbert@semiosbio.com</a></p>\r\n<p>Investment opportunities: <a href=\"mailto:invest@semiosbio.com\">invest@semiosbio.com</a></p>\r\n<p>All other correspondence: <a href=\"mailto:info@semiosbio.com\">info@semiosbio.com</a>&nbsp;</p>\r\n<p>SemiosBIO Technologies Inc.</p>\r\n<p><strong>British Columbia</strong></p>\r\n<div><img style=\"float: right;\" src=\"../../../../app/assets/images/discoverypark.jpg\" alt=\"\" />Discovery Parks Vancouver &nbsp; &nbsp; &nbsp;</div>\r\n<div>320 - 887 Great Northern Way</div>\r\n<div>Vancouver, BC</div>\r\n<div>V5T 4T5</div>\r\n<div>Tel: (604) 202-3245</div>\r\n<div>&nbsp;</div>\r\n<div><strong>Ontario</strong></div>\r\n<div>&nbsp;</div>\r\n<div><img style=\"float: right;\" src=\"../../../../app/assets/images/vineland.jpg\" alt=\"\" />Vineland Research and Innovation Centre</div>\r\n<div>4890 Victoria Avenue North</div>\r\n<div>Box 4000 Vineland Stn, ON</div>\r\n<div>L0R 2E0&nbsp;</div>\r\n<div>Tel: (905) 562-0320 x877</div>\r\n<div>&nbsp;</div>','1','2012-08-28 22:28:04','2012-08-28 22:28:04','2012-08-28 22:28:04'),(195,59,'en','Search','<h1>Search</h1>\r\n<p>&lt;cms:search /&gt;</p>','1','2012-08-28 22:38:47','2012-08-28 22:38:47','2012-08-28 22:38:47'),(196,58,'en','Home','<h1>Advanced Technology</h1>\r\n<p>SemiosBIO Technologies Inc. is a research company dedicated to developing safe and environmentally-friendly pest management solutions. &nbsp;Our goal is to eliminate the toxic chemical pesticides currently found in our food and in our homes. Our pheromone-based technologies offer effective yet non-toxic approaches to pest management.</p>\r\n<p><a href=\"../../../../innovation\"><img style=\"float: right;\" src=\"../../../../app/assets/images/learn-more.png\" alt=\"\" /></a></p>','1','2012-08-28 23:26:03','2012-08-28 23:26:03','2012-08-28 23:26:03'),(199,58,'en','Home','<h1>Advanced Technology</h1>\r\n<p>SemiosBIO Technologies Inc. is a research company dedicated to developing safe and environmentally-friendly pest management solutions. &nbsp;Our goal is to eliminate the toxic chemical pesticides currently found in our food and in our homes. Our pheromone-based technologies offer effective yet non-toxic approaches to pest management.</p>\r\n<p style=\"text-align: right;\"><a class=\"button\" href=\"../../../../innovation\">Learn More</a></p>','1','2012-08-29 20:31:41','2012-08-29 20:31:41','2012-08-29 20:31:41'),(200,62,'en','Company Profile','<h1>Company Profile</h1>','1','2012-08-29 20:50:35','2012-08-29 20:50:35','2012-08-29 20:50:35'),(201,63,'en','Strategy','<h1>Strategy</h1>','1','2012-08-29 20:51:25','2012-08-29 20:51:25','2012-08-29 20:51:25'),(202,64,'en','Board of Directors','<h1>Board of Directors</h1>','1','2012-08-29 20:51:54','2012-08-29 20:51:54','2012-08-29 20:51:54'),(203,65,'en','Advisory','<h1>Advisory</h1>','1','2012-08-29 20:53:02','2012-08-29 20:53:02','2012-08-29 20:53:02'),(204,66,'en','Management','<h1>Management</h1>','1','2012-08-29 20:53:29','2012-08-29 20:53:29','2012-08-29 20:53:29'),(205,67,'en','Pheromones','<h1>Pheromones</h1>','1','2012-08-29 20:55:33','2012-08-29 20:55:33','2012-08-29 20:55:33'),(206,68,'en','Market','<h1>Market</h1>','1','2012-08-29 20:55:58','2012-08-29 20:55:58','2012-08-29 20:55:58'),(207,69,'en','SemiosGUARD','<h1>SemiosGUARD</h1>','1','2012-08-29 20:56:36','2012-08-29 20:56:36','2012-08-29 20:56:36'),(208,70,'en','SemiosNET','<h1>SemiosNET</h1>','1','2012-08-29 20:57:12','2012-08-29 20:57:12','2012-08-29 20:57:12'),(209,70,'en','SemiosNET','<h1>SemiosNET</h1>','1','2012-08-29 20:57:22','2012-08-29 20:57:22','2012-08-29 20:57:22'),(210,71,'en','Media','<h1>Media</h1>','1','2012-08-29 20:57:46','2012-08-29 20:57:46','2012-08-29 20:57:46'),(211,72,'en','News Releases','<h1>News Releases</h1>','1','2012-08-29 20:58:36','2012-08-29 20:58:36','2012-08-29 20:58:36'),(212,52,'en','About SemiosBIO','<h1>About semios<strong>BIO</strong></h1>\r\n<p>Founded in 2010, SemiosBIO is a leading discoverer and developer of pheromone based pest control solutions. Its portfolio ranges from proprietary chemical compositions to precision pheromone release and monitoring systems. The company is dedicated to providing high quality solutions to customers to increase their sustainability, productivity, and profitability.</p>','1','2012-08-30 21:19:05','2012-08-30 21:19:05','2012-08-30 21:19:05'),(213,64,'en','Board of Directors','<h1>Board of Directors</h1>\r\n<p><strong>Jack Gin, P.Eng.</strong></p>\r\n<p>Mr. Jack Gin is an experienced technology developer and successful entrepreneur. He was the founder and former chief executive officer of Extreme CCTV (EXC:TSX), a company purchased by Bosch for $93M in 2008. Mr. Gin is also an engineer and brings a depth of technology commercialization and marketing experience to SemiosBIO.&nbsp;</p>\r\n<p><strong>Malcolm Kendall</strong></p>\r\n<p>Mr. Malcolm Kendall has over 25 years of operational management, entrepreneurial, venture capital investment and leadership experience, the majority of which has been focused on company creation and building value in technology and biotechnology companies. Formerly a life science venture capitalist with MDS Capital and Intersouth Partners, he lectures at the Segal Graduate School of business, Simon Fraser University.&nbsp;</p>','1','2012-08-30 21:23:01','2012-08-30 21:23:01','2012-08-30 21:23:01'),(214,64,'en','Board of Directors','<h1>Board of Directors</h1>\r\n<table border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><strong style=\"font-size: 14px;\">Jack Gin, P.Eng.</strong></p>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">Mr. Jack Gin is an experienced technology developer and successful entrepreneur. He was the founder and former chief executive officer of Extreme CCTV (EXC:TSX), a company purchased by Bosch for $93M in 2008. Mr. Gin is also an engineer and brings a depth of technology commercialization and marketing experience to SemiosBIO.&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n<td>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><strong style=\"font-size: 14px;\">Malcolm Kendall</strong></p>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">Mr. Malcolm Kendall has over 25 years of operational management, entrepreneurial, venture capital investment and leadership experience, the majority of which has been focused on company creation and building value in technology and biotechnology companies. Formerly a life science venture capitalist with MDS Capital and Intersouth Partners, he lectures at the Segal Graduate School of business, Simon Fraser University.&nbsp;</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-08-30 21:32:09','2012-08-30 21:32:09','2012-08-30 21:32:09'),(215,64,'en','Board of Directors','<h1>Board of Directors</h1>\r\n<table border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/jack-gin.jpg\" alt=\"\" /></td>\r\n<td>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><strong style=\"font-size: 14px;\">Jack Gin, P.Eng.</strong></p>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">Mr. Jack Gin is an experienced technology developer and successful entrepreneur. He was the founder and former chief executive officer of Extreme CCTV (EXC:TSX), a company purchased by Bosch for $93M in 2008. Mr. Gin is also an engineer and brings a depth of technology commercialization and marketing experience to SemiosBIO.&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/malcolm-kendall.jpg\" alt=\"\" /></td>\r\n<td>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><strong style=\"font-size: 14px;\">Malcolm Kendall</strong></p>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">Mr. Malcolm Kendall has over 25 years of operational management, entrepreneurial, venture capital investment and leadership experience, the majority of which has been focused on company creation and building value in technology and biotechnology companies. Formerly a life science venture capitalist with MDS Capital and Intersouth Partners, he lectures at the Segal Graduate School of business, Simon Fraser University.&nbsp;</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-08-30 21:35:59','2012-08-30 21:35:59','2012-08-30 21:35:59'),(216,64,'en','Board of Directors','<h1>Board of Directors</h1>\r\n<table class=\"transparent\" border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/jack-gin.jpg\" alt=\"\" /></td>\r\n<td>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><strong style=\"font-size: 14px;\">Jack Gin, P.Eng.</strong></p>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">Mr. Jack Gin is an experienced technology developer and successful entrepreneur. He was the founder and former chief executive officer of Extreme CCTV (EXC:TSX), a company purchased by Bosch for $93M in 2008. Mr. Gin is also an engineer and brings a depth of technology commercialization and marketing experience to SemiosBIO.&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/malcolm-kendall.jpg\" alt=\"\" /></td>\r\n<td>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><strong style=\"font-size: 14px;\">Malcolm Kendall</strong></p>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">Mr. Malcolm Kendall has over 25 years of operational management, entrepreneurial, venture capital investment and leadership experience, the majority of which has been focused on company creation and building value in technology and biotechnology companies. Formerly a life science venture capitalist with MDS Capital and Intersouth Partners, he lectures at the Segal Graduate School of business, Simon Fraser University.&nbsp;</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-08-30 21:38:29','2012-08-30 21:38:29','2012-08-30 21:38:29'),(217,64,'en','Board of Directors','<h1>Board of Directors</h1>\r\n<table class=\"transparent\" border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/jack-gin.jpg\" alt=\"\" /></td>\r\n<td>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><strong style=\"font-size: 14px;\">Jack Gin, P.Eng.<br /></strong><span style=\"font-size: 14px;\">Mr. Jack Gin is an experienced technology developer and successful entrepreneur. He was the founder and former chief executive officer of Extreme CCTV (EXC:TSX), a company purchased by Bosch for $93M in 2008. Mr. Gin is also an engineer and brings a depth of technology commercialization and marketing experience to SemiosBIO.&nbsp;</span></p>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/malcolm-kendall.jpg\" alt=\"\" /></td>\r\n<td>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><strong style=\"font-size: 14px;\">Malcolm Kendall<br /></strong><span style=\"font-size: 14px;\">Mr. Malcolm Kendall has over 25 years of operational management, entrepreneurial, venture capital investment and leadership experience, the majority of which has been focused on company creation and building value in technology and biotechnology companies. Formerly a life science venture capitalist with MDS Capital and Intersouth Partners, he lectures at the Segal Graduate School of business, Simon Fraser University.&nbsp;</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-08-30 21:39:07','2012-08-30 21:39:07','2012-08-30 21:39:07'),(218,53,'en','Innovation','<h1>Innovation</h1>\r\n<p>Chemical pesticides are often highly toxic substances that kill many species of insects and pests. Although they are advantages to these type of broad-spectrum pesticides, they are also non-discriminatory, threatening non-target species in both treated areas and areas well away from where these pesticides were applied. &nbsp;Pesticides can accumulate in the environment and within the food chain, resulting in long-term negative side-effects. &nbsp;Pests have developed resistance to pesticides, requiring increases in the number or strength of applications or use of combinations of pesticides. Not only are these pesticides underperforming, overuse of these chemicals exacerbates environmental and human safety issues related to these products.</p>\r\n<p>Biopesticides are defined as naturally occurring substances that have the ability to control pests. They are generally non-toxic, used in very low doses and very targeted. In the case of biochemical biopesticides such as pheromones, the products work by modifying pest behaviour. Many insects are known to emit pheromones to attract mates, attract others to favourable locations or warn others away from hazards. SemiosBIO will take advantage of these naturally occurring compounds to develop strategies to control pests through use of repellents or attractants.</p>\r\n<p>There are three key elements to successful biopesticide products: active ingredient, formulation and delivery. The activity of semiochemicals comes from manufactured ingredients that are exact replicates or analogs of naturally occurring semiochemicals. Unlike pesticides, the active ingredients in biopesticides are biodegradable and used in very low doses. A robust formulation is required to maintain the integrity of the active ingredient. The delivery of the active ingredient needs to be controlled in manner that allows for even and constant distribution throughout a treated area. In the case of pheromone biopesticides for use in orchards, the very low level of active ingredient needs to be maintained in the atmosphere directly above the crop for periods up to 4 months.</p>','1','2012-08-30 21:50:45','2012-08-30 21:50:45','2012-08-30 21:50:45'),(219,67,'en','Pheromones','<h1>Pheromones</h1>\r\n<p>Pheromones, a type of semiochemical, are natural agents used in the communication between insects. SemiosBIO&rsquo;s proprietary semiochemicals relay messages that modify behaviour and minimize the negative impacts of insect pests. Through precise release, pheromones offer safe and sustainable solutions to pest control.&nbsp;</p>','1','2012-08-30 21:51:08','2012-08-30 21:51:08','2012-08-30 21:51:08'),(220,68,'en','Markets','<h1>Markets</h1>\r\n<p>SemiosBIO Technologies Inc. is a new Canadian business dedicated to providing least toxic products and technologies for the control of insect pests. We intend to develop new technologies and provide products that will take advantage of the rapidly growing biopesticides market.</p>\r\n<p>In 2009, the pesticide market was $43B, of which biopesticides represented 3% ($1.3B.) The biopesticide market is expected to grow at a 15% to over $3.3B by 2014. The trend from pesticide to biopesticide preference is increasing as a result of a paradigm shift in the industry and a global aim to reduce the risk of pesticide exposure. The trend has been observed in the increasing consumer demand for organic products and the ban of pesticides by regulators.</p>\r\n<p>We intend to meet the continuing demand for pest control products by providing products and technologies that are favoured by regulators and consumers. We believe that the transition to less harmful, more environmentally sustainable pesticides is in the early growth phase and that we can join the relatively few important biopesticide providers as a leader in the provision of new products and technologies for this market.</p>\r\n<p>SemiosBIO Technologies is concentrating on 4 broad market opportunities for insect control biopesticides and related products:</p>\r\n<p>&nbsp;</p>\r\n<h2>Pest Control Operators (PCO)</h2>\r\n<p>Pest Control Operators, otherwise known as exterminators, provide professional infestation control for residences, commercial and government facilities. Pest targets include cockroaches, bed bugs, termites, ants and several other flying and crawling insect pests.</p>\r\n<p>Most PCO operations obtain their pesticide supplies from distributors dedicated to the professional user market. Next to agriculture and potentially the domestic consumer market, this is likely the largest market for semiosBIO products.</p>\r\n<p>&nbsp;</p>\r\n<h2>Agriculture Markets</h2>\r\n<p>The agriculture market accounted for about 63% of total US pesticide expenditures in 2007 (US EPA) with 25% of this amount dedicated to agricultural insect pests. Pro-rated global agricultural insecticide expenditures based on US percentages and a $50 billion global pesticide market give a current total of $7.9 billion for agricultural insecticides.</p>\r\n<p>As recently as 2000, the organophosphates (OP) accounted for 72% of all insecticide active ingredients. With the passing of the US Food Quality Act in 1996 this class of conventional insecticidal active ingredients has undergone considerable scrutiny world-wide and as of 2007 OPs accounted for 35% of all insecticides in the US.</p>\r\n<p>Besides regulatory issues, more and more consumers are turning to organically certified foods. Manufacturers of mating disruption pheromones are well aware of this and make all efforts to ensure their products are certified for organic use.</p>\r\n<p>Heavy reliance on OPs together with a corresponding loss of these products through de-registration has prompted users to look for appropriate alternatives. Biopesticides are one such alternative and are a rapidly growing part of the global pesticide market. Currently, about 55% of the total biopesticides market dedicated to insect pests of orchards.</p>\r\n<p>The predominant use of orchard biopesticides is in the form of mating disruption pheromones. Mating disruption pheromones drastically reduce mating by interfering with the male insects ability to find females. SemiosBIO intends initial entry into the agricultural pesticide market through provision of new technologies for dispersal of pheromones. SemiosBIO technologies will increase the efficiency and reduce costs for orchard applications of mating disruption pheromones. We also expect that these new application technologies will introduce biopesticides to new crops that are limited by pheromone application technology.</p>\r\n<p>&nbsp;</p>\r\n<h2>Domestic Market</h2>\r\n<p>The home and garden segment accounted for 21% of all pesticide expenditures in the US in 2007. In terms of actual weight of active ingredients, only 8% was dedicated to this segment. This clearly demonstrates that in relation to the cost of producing pesticides companies obtain much higher margins for domestic use pesticides relative to those sold for agricultural use.</p>\r\n<p>Of the total home and garden pesticide market about 61% of expenditures were for insecticides. On a pro-rated basis using US EPA percentages and a global pesticide market of $50 billion, the global domestic insecticide market is currently about $6.4 billion.</p>\r\n<p>Target pests include cockroaches, termites, bed bugs, ants, silverfish, sow bugs and a wide variety of household and garden insect pests.</p>\r\n<h2>Specialty Markets</h2>\r\n<p>There is a number specialty or niche markets for biopesticides. One such market it is related to management of forest pests. Because of limitations in application technology and higher costs associated with mating disruption pheromones, use of biopesticides is currently directed toward high value stands of trees in parks and golf courses. As the company develops new application technologies for agriculture, there will be more work to understand how the technology can be extended to forestry and other uses.</p>','1','2012-08-30 21:52:58','2012-08-30 21:52:58','2012-08-30 21:52:58'),(221,68,'en','Markets','<h1>Markets</h1>\r\n<p>SemiosBIO Technologies Inc. is a new Canadian business dedicated to providing least toxic products and technologies for the control of insect pests. We intend to develop new technologies and provide products that will take advantage of the rapidly growing biopesticides market.</p>\r\n<p>In 2009, the pesticide market was $43B, of which biopesticides represented 3% ($1.3B.) The biopesticide market is expected to grow at a 15% to over $3.3B by 2014. The trend from pesticide to biopesticide preference is increasing as a result of a paradigm shift in the industry and a global aim to reduce the risk of pesticide exposure. The trend has been observed in the increasing consumer demand for organic products and the ban of pesticides by regulators.</p>\r\n<p>We intend to meet the continuing demand for pest control products by providing products and technologies that are favoured by regulators and consumers. We believe that the transition to less harmful, more environmentally sustainable pesticides is in the early growth phase and that we can join the relatively few important biopesticide providers as a leader in the provision of new products and technologies for this market.</p>\r\n<p>SemiosBIO Technologies is concentrating on 4 broad market opportunities for insect control biopesticides and related products:</p>\r\n<p>&nbsp;</p>\r\n<h2>Pest Control Operators (PCO)</h2>\r\n<p>Pest Control Operators, otherwise known as exterminators, provide professional infestation control for residences, commercial and government facilities. Pest targets include cockroaches, bed bugs, termites, ants and several other flying and crawling insect pests.</p>\r\n<p>Most PCO operations obtain their pesticide supplies from distributors dedicated to the professional user market. Next to agriculture and potentially the domestic consumer market, this is likely the largest market for semiosBIO products.</p>\r\n<p>&nbsp;</p>\r\n<h2>Agriculture Markets</h2>\r\n<p>The agriculture market accounted for about 63% of total US pesticide expenditures in 2007 (US EPA) with 25% of this amount dedicated to agricultural insect pests. Pro-rated global agricultural insecticide expenditures based on US percentages and a $50 billion global pesticide market give a current total of $7.9 billion for agricultural insecticides.</p>\r\n<p>As recently as 2000, the organophosphates (OP) accounted for 72% of all insecticide active ingredients. With the passing of the US Food Quality Act in 1996 this class of conventional insecticidal active ingredients has undergone considerable scrutiny world-wide and as of 2007 OPs accounted for 35% of all insecticides in the US.</p>\r\n<p>Besides regulatory issues, more and more consumers are turning to organically certified foods. Manufacturers of mating disruption pheromones are well aware of this and make all efforts to ensure their products are certified for organic use.</p>\r\n<p>Heavy reliance on OPs together with a corresponding loss of these products through de-registration has prompted users to look for appropriate alternatives. Biopesticides are one such alternative and are a rapidly growing part of the global pesticide market. Currently, about 55% of the total biopesticides market dedicated to insect pests of orchards.</p>\r\n<p>The predominant use of orchard biopesticides is in the form of mating disruption pheromones. Mating disruption pheromones drastically reduce mating by interfering with the male insects ability to find females. SemiosBIO intends initial entry into the agricultural pesticide market through provision of new technologies for dispersal of pheromones. SemiosBIO technologies will increase the efficiency and reduce costs for orchard applications of mating disruption pheromones. We also expect that these new application technologies will introduce biopesticides to new crops that are limited by pheromone application technology.</p>\r\n<p>&nbsp;</p>\r\n<h2>Domestic Market</h2>\r\n<p>The home and garden segment accounted for 21% of all pesticide expenditures in the US in 2007. In terms of actual weight of active ingredients, only 8% was dedicated to this segment. This clearly demonstrates that in relation to the cost of producing pesticides companies obtain much higher margins for domestic use pesticides relative to those sold for agricultural use.</p>\r\n<p>Of the total home and garden pesticide market about 61% of expenditures were for insecticides. On a pro-rated basis using US EPA percentages and a global pesticide market of $50 billion, the global domestic insecticide market is currently about $6.4 billion.</p>\r\n<p>Target pests include cockroaches, termites, bed bugs, ants, silverfish, sow bugs and a wide variety of household and garden insect pests.</p>\r\n<p>&nbsp;</p>\r\n<h2>Specialty Markets</h2>\r\n<p>There is a number specialty or niche markets for biopesticides. One such market it is related to management of forest pests. Because of limitations in application technology and higher costs associated with mating disruption pheromones, use of biopesticides is currently directed toward high value stands of trees in parks and golf courses. As the company develops new application technologies for agriculture, there will be more work to understand how the technology can be extended to forestry and other uses.</p>','1','2012-08-30 21:53:22','2012-08-30 21:53:22','2012-08-30 21:53:22'),(222,56,'en','Careers','<h1>Careers</h1>\r\n<p>SemiosBIO is a rapidly-growing biotech research company dedicated to developing safe and environmentally-friendly pest management solutions. Our goal is to eliminate the toxic chemical pesticides found in our food and around our homes. We are assembling an innovative team of professionals to bring our exciting technologies to market. As SemiosBIO continues to expand, additional complementary members will be invited to join our team.</p>','1','2012-08-30 21:54:38','2012-08-30 21:54:38','2012-08-30 21:54:38'),(223,57,'en','Contact','<h1>Contact</h1>\r\n<p>Research and collaboration opportunities: <a href=\"mailto:mgilbert@semiosbio.com\">mgilbert@semiosbio.com<br /></a>Investment opportunities: <a href=\"mailto:invest@semiosbio.com\">invest@semiosbio.com<br /></a>All other correspondence: <a href=\"mailto:info@semiosbio.com\">info@semiosbio.com</a>&nbsp;</p>\r\n<table border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/discoverypark.jpg\" alt=\"\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n<td><img src=\"../../../../app/assets/images/vineland.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><strong style=\"font-size: 14px;\">British Columbia<br /></strong><span style=\"font-size: 14px;\">Discovery Parks Vancouver &nbsp; &nbsp; &nbsp;<br /></span><span style=\"font-size: 14px;\">320 - 887 Great Northern Way<br /></span><span style=\"font-size: 14px;\">Vancouver, BC<br /></span><span style=\"font-size: 14px;\">V5T 4T5<br /></span><span style=\"font-size: 14px;\">Tel: (604) 202-3245</span>&nbsp;</p>\r\n</td>\r\n<td><strong style=\"font-family: \'Open Sans\', sans-serif; font-size: 14px; line-height: 22px;\">Ontario</strong>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><span style=\"font-size: 14px;\">Vineland Research and Innovation Centre</span></div>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">4890 Victoria Avenue North</div>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">Box 4000 Vineland Stn, ON</div>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">L0R 2E0&nbsp;</div>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">Tel: (905) 562-0320 x877&nbsp;</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-08-30 21:57:08','2012-08-30 21:57:08','2012-08-30 21:57:08'),(224,57,'en','Contact','<h1>Contact</h1>\r\n<p>Research and collaboration opportunities: <a href=\"mailto:mgilbert@semiosbio.com\">mgilbert@semiosbio.com<br /></a>Investment opportunities: <a href=\"mailto:invest@semiosbio.com\">invest@semiosbio.com<br /></a>All other correspondence: <a href=\"mailto:info@semiosbio.com\">info@semiosbio.com</a>&nbsp;</p>\r\n<table class=\"transparent\" border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/discoverypark.jpg\" alt=\"\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n<td><img src=\"../../../../app/assets/images/vineland.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><strong style=\"font-size: 14px;\">British Columbia<br /></strong><span style=\"font-size: 14px;\">Discovery Parks Vancouver &nbsp; &nbsp; &nbsp;<br /></span><span style=\"font-size: 14px;\">320 - 887 Great Northern Way<br /></span><span style=\"font-size: 14px;\">Vancouver, BC<br /></span><span style=\"font-size: 14px;\">V5T 4T5<br /></span><span style=\"font-size: 14px;\">Tel: (604) 202-3245</span>&nbsp;</p>\r\n</td>\r\n<td><strong style=\"font-family: \'Open Sans\', sans-serif; font-size: 14px; line-height: 22px;\">Ontario</strong>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><span style=\"font-size: 14px;\">Vineland Research and Innovation Centre</span></div>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">4890 Victoria Avenue North</div>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">Box 4000 Vineland Stn, ON</div>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">L0R 2E0&nbsp;</div>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">Tel: (905) 562-0320 x877&nbsp;</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-08-30 21:57:34','2012-08-30 21:57:34','2012-08-30 21:57:34'),(225,57,'en','Contact','<h1>Contact</h1>\r\n<p><strong>Research and collaboration opportunities:</strong> <a href=\"mailto:mgilbert@semiosbio.com\">mgilbert@semiosbio.com<br /></a><strong>Investment opportunities:</strong> <a href=\"mailto:invest@semiosbio.com\">invest@semiosbio.com<br /></a><strong>All other correspondence:</strong> <a href=\"mailto:info@semiosbio.com\">info@semiosbio.com</a>&nbsp;</p>\r\n<table class=\"transparent\" border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/discoverypark.jpg\" alt=\"\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n<td><img src=\"../../../../app/assets/images/vineland.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><strong style=\"font-size: 14px;\">British Columbia<br /></strong><span style=\"font-size: 14px;\">Discovery Parks Vancouver &nbsp; &nbsp; &nbsp;<br /></span><span style=\"font-size: 14px;\">320 - 887 Great Northern Way<br /></span><span style=\"font-size: 14px;\">Vancouver, BC<br /></span><span style=\"font-size: 14px;\">V5T 4T5<br /></span><span style=\"font-size: 14px;\">Tel: (604) 202-3245</span>&nbsp;</p>\r\n</td>\r\n<td><strong style=\"font-family: \'Open Sans\', sans-serif; font-size: 14px; line-height: 22px;\">Ontario</strong>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><span style=\"font-size: 14px;\">Vineland Research and Innovation Centre</span></div>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">4890 Victoria Avenue North</div>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">Box 4000 Vineland Stn, ON</div>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">L0R 2E0&nbsp;</div>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">Tel: (905) 562-0320 x877&nbsp;</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-08-30 21:58:29','2012-08-30 21:58:29','2012-08-30 21:58:29'),(226,65,'en','Advisory','<h1>Advisory</h1>\r\n<table class=\"transparent\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/len-metcalfe.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Len Metcalfe</strong><br /> Mr. Metcalfe was Chairman and CEO of Dynamic Control Systems Inc. from 1976-1997 a manufacturer of applied laser sensor and machine vision technology. In 1997 Dynamic Control Systems acquired several international sensor manufacturers and became LMI Technologies Inc. Mr. Metcalfe remained Chairman, CEO until 2009 when he retired from the CEO position and remains a Director after LMI was acquired by AUGUSTA Technologie AG. in 2011. Mr Metcalfe is an Independent Director of WebTech Wireless Inc. a public company and also a director of several private companies. Mr Metcalfe is currently an active Entrepreneur, Advisor, Director and Angel Investor.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/david-macdonald.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>David MacDonald, PhD</strong><br /> Dr. Macdonald received his Ph.D. from the University of Alberta and has with over 20 years experience in the life sciences industry. Dr. MacDonald is Vice President, Product Development at Methylation Sciences Inc.(MSI). MSI is a formulation-based pharmaceutical development company located in Vancouver.Prior to current his position, he was CEO of Active Pass Pharmaceuticals and General Manager of Biovail Contract Research, a clinical contract research organization located in Toronto with over 200 employees and $30 M in gross revenue.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/robert-britton.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Prof. Robert Britton, PhD</strong><br /> Prof. Britton completed his B. Sc. degree at the University of Waterloo in 1996 and a PhD at University of British Columbia (UBC). In 2002, he was awarded a NSERC Postdoctoral Fellowship with Professor Ian Paterson at the University of Cambridge. In 2004, Rob accepted a position as Senior Research Chemist in the Process Research group at Merck Frosst Canada before joining the faculty at Simon Fraser University in 2005 as an assistant professor.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/david-smalley.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>David Smalley</strong><br /> David Smalley is a corporate and securities lawyer who has specialized in helping start-up companies overcome legal, strategic and funding challenges. He is presently a director of Scorpio Gold Corporation (TSX-VE: SGN) and corporate secretary of Canaco Resources Inc. (TSX:CAN). He was a director for 7 years of Extreme CCTV Inc. Mr. Smalley is a partner of the Vancouver based law firm, Fraser and Company, LLP. He graduated from University of Victoria with a bachelor of arts degree in 1985 and from University of British Columbia in 1988 with a bachelor of laws degree.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/rob-macdonald.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Rob MacDonald</strong><br /> Mr. Rob MacDonald is a Vancouver-based creative entrepreneur. He currently runs his own boutique marketing agency - banter grace &amp; lollipop - working for clients in the fashion, athletic, wellness, food &amp; beverage, travel &amp; leisure, and urban development industries. His creative experience includes working with (or for) leading brands such as lululemon athletica, the Vancouver 2010 Winter Olympic Games, as well as many other small-midsized brands. Rob was the Founder &amp; CEO of the lifestyle-bicycle brand jorg&amp;olif, 2003-09, operating in Canada and the USA. His marketing leadership at jorg&amp;olif generated $50M+ in media exposure through strategic celebrity interest and media buzz.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/tom-urban.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Tom Urban</strong><br /> Tom Urban began his professional career in banking with Goldman, Sachs &amp; Co. in 1988. He subsequently spent 14 years in the agricultural seeds business with Pioneer Hi-Bred and E.I. DuPont de Nemours primarily in Eastern and Western Europe. In 2004, Tom left DuPont to join the early-stage forestry genetics company, CellFor, Inc. and served as CellFor&rsquo;s CEO until 2012 when the Company was sold to ArborGen, the market leader in the forestry genetics market. Tom received his undergraduate degree from Middlebury College and a Masters of Business Administration from Harvard University.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-08-31 21:05:12','2012-08-31 21:05:12','2012-08-31 21:05:12'),(227,66,'en','Management','<h1>Management</h1>\r\n<table class=\"transparent\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/michael-gilbert.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Michael Gilbert, PhD President and Chief Scientific Officer</strong><br /> Natural product synthetic chemist who has worked in research and development for 16 years. Held scientific and management positions at Cardiome Pharma, Active Pass Pharma, and Merck-Frosst. Worked on discovery, manufacturing, stability testing and quality control of small molecule and biologics clinical products for the pharmaceutical industry. Obtained his PhD from UBC and completed a post-doctoral fellowship at University of Vienna.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/chris-vannatto.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Chris Van Natto, MSc Vice President, Product Development</strong><br /> Experienced entomologist with excellent understanding of pest control. Worked for the past 10 years at Dupont in product development, registration and commercialization of pest control products. Also worked for Hedley pesticides and the Canadian Grain Commission. Obtained his masters from Lakehead University.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-08-31 21:09:16','2012-08-31 21:09:16','2012-08-31 21:09:16'),(228,62,'en','Company Profile','<h1>Company Profile</h1>\r\n<p>Semios is the Greek word for \"signal\" and semiochemistry is the field of science investigating pheromones and other biochemicals used for communication.</p>\r\n<p>Bio is the Greek word for \"life\", and signifies the ecological benefits of pheromone based pest management.</p>\r\n<p>Semiochemical based pest management solutions, unlike conventional chemical pesticides, are based on nature\'s communication pathways and have been proven to be organic and safe.</p>\r\n<p>Chief Scientific Officer Dr. Michael Gilbert and VP of Product Development Chris Van Natto lead a team of researchers in the field of semiochemical synthesis and formulation, utilizing techniques developed initially for the biopharmaceutical industry &ndash; yielding pheromone solutions that are both safe and effective.</p>','1','2012-08-31 21:15:23','2012-08-31 21:15:23','2012-08-31 21:15:23'),(229,63,'en','Strategy','<h1>Strategy</h1>\r\n<p>Coming Soon</p>','1','2012-08-31 21:25:51','2012-08-31 21:25:51','2012-08-31 21:25:51'),(230,54,'en','Solutions','<h1>Solutions</h1>\r\n<p>Coming Soon</p>','1','2012-08-31 21:26:10','2012-08-31 21:26:10','2012-08-31 21:26:10'),(231,69,'en','SemiosGUARD','<h1>SemiosGUARD</h1>\r\n<p>Coming Soon</p>','1','2012-08-31 21:26:25','2012-08-31 21:26:25','2012-08-31 21:26:25'),(232,70,'en','SemiosNET','<h1>SemiosNET</h1>\r\n<p>Coming Soon</p>','1','2012-08-31 21:26:37','2012-08-31 21:26:37','2012-08-31 21:26:37'),(233,71,'en','Media','<h1>Media</h1>','1','2012-08-31 21:27:06','2012-08-31 21:27:06','2012-08-31 21:27:06'),(234,70,'en','SemiosNET','<h1>SemiosNET</h1>\r\n<p>Coming Soon</p>','1','2012-08-31 21:27:15','2012-08-31 21:27:15','2012-08-31 21:27:15'),(235,72,'en','News Releases','<h1>News Releases</h1>','1','2012-08-31 21:27:31','2012-08-31 21:27:31','2012-08-31 21:27:31'),(236,70,'en','SemiosNET','<h1>SemiosNET</h1>\r\n<p>Coming Soon</p>','1','2012-08-31 21:27:50','2012-08-31 21:27:50','2012-08-31 21:27:50'),(237,52,'en','About SemiosBIO','<h1>About semios<strong>BIO</strong></h1>\r\n<p><strong>Founded in 2010, SemiosBIO is a leading discoverer and developer of pheromone based pest control solutions.</strong> Its portfolio ranges from proprietary chemical compositions to precision pheromone release and monitoring systems.&nbsp;The company is dedicated to providing high quality solutions to customers to&nbsp;increase their sustainability, productivity, and profitability.</p>','1','2012-08-31 21:30:59','2012-08-31 21:30:59','2012-08-31 21:30:59'),(238,69,'en','SemiosGUARD','<h1>semios<strong>GUARD</strong></h1>\r\n<h2>Sleep tight, don\'t let the <strong>bed bugs bite.</strong></h2>\r\n<p>A phrase most of the population uses as a bed time blessing. But bedbug infestation is not a bed time blessing, it can be a serious problem that can affect all - young and old. SemiosGUARD is a revolutionary repellent that prevents bedbugs from coming near any area. With the ability to stop bedbugs from traveling on a person or from entering a place of feeding, semiosGUARD provides a protection from infestation. Unlike traditional products which focus on eradication, semiosGUARD provides a layer of protection that aids in detection before an infestation occurs.</p>\r\n<h3>Semios<strong>GUARD</strong> is a completely safe, non-toxic solution.</h3>\r\n<p>SemioBIO\'s proprietary phermones work by stopping bedbugs from reaching their hosts to feed. Once bedbugs cannot feed, they cannon spread and will not continue to infest an area.</p>\r\n<p>With the ability to work effectively in small doses and last from 6 hours to 2 weeks, semiosGUARD is the leader in protecting your family from infestation. At home, traveling or while at work rely on semiosGUARD to work to repel bedbugs to protect sensitive areas.</p>','1','2012-08-31 21:32:50','2012-08-31 21:32:50','2012-08-31 21:32:50'),(239,70,'en','SemiosNET','<h1>semios<strong>NET</strong></h1>\r\n<p>Facing increased regulation and the outright ban of toxic pesticides for insect management, the agricultural sector is struggling to identify effective, economical and sustainable alternatives. Welcome to Semios<strong>NET</strong>. A completely integrated farm, orchard or vineyard management system.</p>\r\n<h3>A cloud-based system it allows you to monitor and control your property remotely; <strong>online, anytime, from anywhere.</strong></h3>\r\n<h2>Complete automation at your fingertips - first of it\'s kind in precision farming. The system allows for multiple platforms of reporting and control including:</h2>\r\n<ul>\r\n<li>Up-to-date spray records with historical data</li>\r\n<li>Live weather reporting right from your farm, including pest pressure and degree day analysis</li>\r\n<li>Protection of your harvest from insects through automated phermone release</li>\r\n</ul>\r\n<p>The system is completely modular allowing you to engage the parts of the system that best fit your needs allowing you to enhance your current process. Complete automation. Complete Integration. Complete access. SemiosNET is the leader in phermone based pest control, meeting grower and regulatory demands at an affordable price. Decrease crop loss, reduce costs and increase reliability with semiosNET.</p>','1','2012-08-31 21:34:53','2012-08-31 21:34:53','2012-08-31 21:34:53'),(240,58,'en','Home','<h1>Advanced Technology</h1>\r\n<p>SemiosBIO Technologies Inc. is a research company dedicated to developing safe and environmentally-friendly pest management solutions. &nbsp;Our goal is to eliminate the toxic chemical pesticides currently found in our food and in our homes. Our pheromone-based technologies offer effective yet non-toxic approaches to pest management.</p>\r\n<p style=\"text-align: right;\"><a class=\"button\" href=\"../../../../about\">Learn More</a></p>','1','2012-08-31 21:49:15','2012-08-31 21:49:15','2012-08-31 21:49:15'),(241,69,'en','SemiosGUARD','<h1>semios<strong>GUARD</strong></h1>\r\n<h2>Sleep tight, don\'t let the <strong>bed bugs bite.</strong></h2>\r\n<p>A phrase most of the population uses as a bed time blessing. But bedbug infestation is not a bed time blessing, it can be a serious problem that can affect all - young and old. SemiosGUARD is a revolutionary repellent that prevents bedbugs from coming near any area. With the ability to stop bedbugs from traveling on a person or from entering a place of feeding, semiosGUARD provides a protection from infestation. Unlike traditional products which focus on eradication, semiosGUARD provides a layer of protection that aids in detection before an infestation occurs.</p>\r\n<h3>Semios<strong>GUARD</strong> is a completely safe, non-toxic solution.</h3>\r\n<p>SemioBIO\'s proprietary phermones work by stopping bedbugs from reaching their hosts to feed. Once bedbugs cannot feed, they cannon spread and will not continue to infest an area.</p>\r\n<p>With the ability to work effectively in small doses and last from 6 hours to 2 weeks, semiosGUARD is the leader in protecting your family from infestation. At home, traveling or while at work rely on semiosGUARD to work to repel bedbugs to protect sensitive areas.</p>','1','2012-09-02 12:27:59','2012-09-02 12:27:59','2012-09-02 12:27:59'),(242,70,'en','SemiosNET','<h1>semios<strong>NET</strong></h1>\r\n<p>Facing increased regulation and the outright ban of toxic pesticides for insect management, the agricultural sector is struggling to identify effective, economical and sustainable alternatives. Welcome to Semios<strong>NET</strong>. A completely integrated farm, orchard or vineyard management system.</p>\r\n<h3>A cloud-based system it allows you to monitor and control your property remotely; <strong>online, anytime, from anywhere.</strong></h3>\r\n<p>Complete automation at your fingertips - first of it\'s kind in precision farming. The system allows for multiple platforms of reporting and control including:</p>\r\n<ul>\r\n<li>Up-to-date spray records with historical data</li>\r\n<li>Live weather reporting right from your farm, including pest pressure and degree day analysis</li>\r\n<li>Protection of your harvest from insects through automated phermone release</li>\r\n</ul>\r\n<p>The system is completely modular allowing you to engage the parts of the system that best fit your needs allowing you to enhance your current process. Complete automation. Complete Integration. Complete access. SemiosNET is the leader in phermone based pest control, meeting grower and regulatory demands at an affordable price. Decrease crop loss, reduce costs and increase reliability with semiosNET.</p>','1','2012-09-02 12:45:02','2012-09-02 12:45:02','2012-09-02 12:45:02'),(243,70,'en','SemiosNET','<h1>semios<strong>NET</strong></h1>\r\n<p>Facing increased regulation and the outright ban of toxic pesticides for insect management, the agricultural sector is struggling to identify effective, economical and sustainable alternatives. Welcome to Semios<strong>NET</strong>. A completely integrated farm, orchard or vineyard management system.</p>\r\n<h2>A cloud-based system it allows you to monitor and control your property remotely; <strong>online, anytime, from anywhere.</strong></h2>\r\n<p>Complete automation at your fingertips - first of it\'s kind in precision farming. The system allows for multiple platforms of reporting and control including:</p>\r\n<ul>\r\n<li>Up-to-date spray records with historical data</li>\r\n<li>Live weather reporting right from your farm, including pest pressure and degree day analysis</li>\r\n<li>Protection of your harvest from insects through automated phermone release</li>\r\n</ul>\r\n<p>The system is completely modular allowing you to engage the parts of the system that best fit your needs allowing you to enhance your current process. Complete automation. Complete Integration. Complete access. SemiosNET is the leader in phermone based pest control, meeting grower and regulatory demands at an affordable price. Decrease crop loss, reduce costs and increase reliability with semiosNET.</p>','1','2012-09-02 12:47:13','2012-09-02 12:47:13','2012-09-02 12:47:13'),(244,63,'en','Strategy','<h1>Strategy</h1>\r\n<p>Coming Soon</p>','1','2012-09-02 21:15:48','2012-09-02 21:15:48','2012-09-02 21:15:48'),(245,54,'en','Solutions','<h1>Solutions</h1>\r\n<table border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><a href=\"../../../../semiosguard\"><img src=\"../../../../app/assets/images/semiosguard-button.png\" alt=\"\" /></a></td>\r\n<td>\r\n<h3><a href=\"../../../../semiosnet\"><img src=\"../../../../app/assets/images/semiosnet-button.png\" alt=\"\" /></a></h3>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;<span style=\"color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 14px; line-height: 30px; background-color: #ffffff;\">SemioBIO\'s proprietary phermones work by stopping bedbugs from reaching their hosts to feed. Once bedbugs cannot feed, they cannon spread and will not continue to infest an area.</span></td>\r\n<td>Testing!</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-09-02 23:21:54','2012-09-02 23:21:54','2012-09-02 23:21:54'),(246,57,'en','Contact','<h1>Contact Us</h1>\r\n<p><strong>Research and collaboration opportunities:</strong> <a href=\"mailto:mgilbert@semiosbio.com\">mgilbert@semiosbio.com<br /></a><strong>Investment opportunities:</strong> <a href=\"mailto:invest@semiosbio.com\">invest@semiosbio.com<br /></a><strong>All other correspondence:</strong> <a href=\"mailto:info@semiosbio.com\">info@semiosbio.com</a>&nbsp;</p>\r\n<table class=\"transparent\" border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/discoverypark.jpg\" alt=\"\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>\r\n<td><img src=\"../../../../app/assets/images/vineland.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><strong style=\"font-size: 14px;\">British Columbia<br /></strong><span style=\"font-size: 14px;\">Discovery Parks Vancouver &nbsp; &nbsp; &nbsp;<br /></span><span style=\"font-size: 14px;\">320 - 887 Great Northern Way<br /></span><span style=\"font-size: 14px;\">Vancouver, BC<br /></span><span style=\"font-size: 14px;\">V5T 4T5<br /></span><span style=\"font-size: 14px;\">Tel: (604) 202-3245</span>&nbsp;</p>\r\n</td>\r\n<td><strong style=\"font-family: \'Open Sans\', sans-serif; font-size: 14px; line-height: 22px;\">Ontario</strong>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><span style=\"font-size: 14px;\">Vineland Research and Innovation Centre</span></div>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">4890 Victoria Avenue North</div>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">Box 4000 Vineland Stn, ON</div>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">L0R 2E0&nbsp;</div>\r\n<div style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">Tel: (905) 562-0320 x877&nbsp;</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-09-02 23:22:21','2012-09-02 23:22:21','2012-09-02 23:22:21'),(247,54,'en','Solutions','<h1>Solutions</h1>\r\n<table class=\"transparent\" border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><a href=\"../../../../semiosguard\"><img src=\"../../../../app/assets/images/semiosguard-button.png\" alt=\"\" /></a></td>\r\n<td>\r\n<h3><a href=\"../../../../semiosnet\"><img src=\"../../../../app/assets/images/semiosnet-button.png\" alt=\"\" /></a></h3>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;<span style=\"color: #666666; font-family: \'Open Sans\', sans-serif; font-size: 14px; line-height: 30px; background-color: #ffffff;\">SemioBIO\'s proprietary phermones work by stopping bedbugs from reaching their hosts to feed. Once bedbugs cannot feed, they cannon spread and will not continue to infest an area.</span></td>\r\n<td>Testing!</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-09-02 23:26:50','2012-09-02 23:26:50','2012-09-02 23:26:50'),(248,54,'en','Solutions','<h1>Solutions</h1>\r\n<table class=\"transparent\" border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><a href=\"../../../../semiosguard\"><img src=\"../../../../app/assets/images/semiosguard-button.png\" alt=\"\" /></a></td>\r\n<td>\r\n<h3><a href=\"../../../../semiosnet\"><img src=\"../../../../app/assets/images/semiosnet-button.png\" alt=\"\" /></a></h3>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Solving the Bedbug Crisis</strong> <br />At the forefront of biopesticide technologic, SemiosBIO has pioneered an entirely new approach to bedbug eradication.</td>\r\n<td><strong>Next Generation Farming</strong> <br />Novel techniques to provide growers with the next generation of precision farming techniques.</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-09-02 23:30:36','2012-09-02 23:30:36','2012-09-02 23:30:36'),(249,54,'en','Solutions','<h1>Solutions</h1>\r\n<p>SemiosBIO helps customers effectively harness biopesticides using precision pest management techniques.</p>\r\n<table class=\"transparent\" border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><a href=\"../../../../semiosguard\"><img src=\"../../../../app/assets/images/semiosguard-button.png\" alt=\"\" /></a></td>\r\n<td>\r\n<h3><a href=\"../../../../semiosnet\"><img src=\"../../../../app/assets/images/semiosnet-button.png\" alt=\"\" /></a></h3>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Solving the Bedbug Crisis</strong> <br />At the forefront of biopesticide technologic, SemiosBIO has pioneered an entirely new approach to bedbug eradication.</td>\r\n<td><strong>Next Generation Farming</strong> <br />Novel techniques to provide growers with the next generation of precision farming techniques.</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-09-02 23:31:42','2012-09-02 23:31:42','2012-09-02 23:31:42'),(250,53,'en','Innovation','<h1>Innovation</h1>\r\n<p>Traditional chemicals used today are often broad spectrum neuro-toxins that are non- discriminatory and threaten both natural biodiversity and human health. These pesticides accumulate in the environment and within the food chain resulting in damage to ecosystems which can take decades to repair. To further complicate the situation, many target pests have developed resistances to chemical pesticides resulting in lower pesticide efficacy, higher dosage requirements, and consequently, increased health and environmental risks.</p>\r\n<p>SemiosBIO uses a novel way to control insect populations. Pheromones, a type of biopesticide, are naturally occurring substances that have the ability to control pests. They are non-toxic, used in very low doses, and very targeted. Since insects already use pheromones they are already present in the natural ecosystem and do not harm other beneficial insects such as bees.</p>\r\n<p>Using natural pheromones coupled with advanced technological distribution systems for both bedbug and agriculture applications, SemiosBIO can precisely control protected areas from insect infestation safely and organically &ndash; whether it be your family home or the local orchard.</p>','1','2012-09-04 17:34:13','2012-09-04 17:34:13','2012-09-04 17:34:13'),(251,67,'en','Pheromones','<h1>Pheromones</h1>\r\n<p>Pheromones, a type of semiochemical, are natural agents used in communications between insects of the same species. SemiosBIO&rsquo;s proprietary semiochemicals relay messages that modify behaviour to minimize the negative impacts of insect pests. Through precise release, pheromones offer safe and sustainable solutions to pest control.</p>','1','2012-09-04 17:36:23','2012-09-04 17:36:23','2012-09-04 17:36:23'),(252,69,'en','SemiosGUARD','<h1>semios<strong>GUARD</strong></h1>\r\n<h2>Sleep tight; don\'t let the <strong>bed bugs bite</strong>.</h2>\r\n<p>A phrase often used as a bed time blessing. But bedbug infestation is not a bed time blessing, it can be a serious problem that can affect all - young and old. SemiosGUARD is a revolutionary repellent that prevents bedbugs from coming near any area. With the ability to stop bedbugs from traveling on a person or from entering a place of feeding, semiosGUARD provides a protection from infestation.</p>\r\n<h3>Semios<strong>GUARD</strong> is a completely safe, non-toxic solution.</h3>\r\n<p>SemioBIO\'s proprietary pheromones work by stopping bedbugs from reaching their hosts to feed. Once bedbugs cannot feed, they cannot reproduce and continue to infest an area.</p>\r\n<p>With the ability to work effectively in small doses and last from 6 hours to 2 weeks, semiosGUARD is the leader in protecting your family from infestation. While at home, traveling or while at work rely on semiosGUARD to repel bedbugs.</p>','1','2012-09-04 17:39:43','2012-09-04 17:39:43','2012-09-04 17:39:43'),(253,70,'en','SemiosNET','<h1>semios<strong>NET</strong></h1>\r\n<p>Facing increased regulation and the outright ban of toxic pesticides for insect management, the agricultural sector is struggling to identify effective, economical and sustainable alternatives. Welcome SemiosNET, a completely integrated crop pest management system.</p>\r\n<h2>A cloud-based system that allows you to monitor and control your property remotely: <strong>online, anytime, from anywhere</strong>.</h2>\r\n<p>Complete automation at your fingertips - first of its kind in precision farming. The system allows for</p>\r\n<ul>\r\n<li>Multiple platforms of reporting and control including:</li>\r\n<li>Up-to-date spray records with historical data</li>\r\n<li>Live weather reporting right from your farm including degree day analysis</li>\r\n</ul>\r\n<p>Protection of your harvest from insects through automated pheromone release The system is completely modular allowing you to engage the parts of the system that best fit your needs. Complete automation. Complete Integration. Complete access. SemiosNET is the leader in pheromone based pest control, meeting grower and regulatory demands at an affordable price. Decrease crop loss, reduce costs and increase reliability with semiosNET.</p>','1','2012-09-04 17:47:51','2012-09-04 17:47:51','2012-09-04 17:47:51'),(254,64,'en','Board of Directors','<h1>Board of Directors</h1>\r\n<table class=\"transparent\" border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/jack-gin.jpg\" alt=\"\" /></td>\r\n<td>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><strong style=\"font-size: 14px;\">Jack Gin, P.Eng.<br /></strong><span style=\"font-size: 14px;\">Mr. Jack Gin is an experienced technology developer and successful entrepreneur. He was the founder and former Chief Executive officer of Extreme CCTV (EXC:TSX), a company purchased by Bosch for $93M in 2008. Mr. Gin is also an engineer and brings a depth of technology commercialization and marketing experience to SemiosBIO.&nbsp;</span></p>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/malcolm-kendall.jpg\" alt=\"\" /></td>\r\n<td>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><strong style=\"font-size: 14px;\">Malcolm Kendall<br /></strong><span style=\"font-size: 14px;\">Mr. Malcolm Kendall has over 25 years of operational management, entrepreneurial, venture capital investment and leadership experience, the majority of which has been focused on company creation and building value in technology and biotechnology companies. Formerly a life science venture capitalist with MDS Capital and Intersouth Partners, he lectures at the Segal Graduate School of business, Simon Fraser University.&nbsp;</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-09-04 17:55:43','2012-09-04 17:55:43','2012-09-04 17:55:43'),(255,65,'en','Advisory','<h1>Advisory</h1>\r\n<table class=\"transparent\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/len-metcalfe.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Len Metcalfe</strong><br /> Mr. Metcalfe was Chairman and CEO of Dynamic Control Systems Inc. a manufacturer of applied laser sensor and machine vision technology from 1976-1997. In 1997 Dynamic Control Systems acquired several international sensor manufacturers and became LMI Technologies Inc. Mr. Metcalfe remained Chairman, CEO until 2009 when he retired from the CEO position and remains a Director after LMI was acquired by AUGUSTA Technologie AG. in 2011. Mr Metcalfe is an Independent Director of WebTech Wireless Inc. a public company and also a director of several private companies. Mr Metcalfe is currently an active Entrepreneur, Advisor, Director and Angel Investor.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/david-macdonald.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>David MacDonald, PhD</strong><br /> Dr. Macdonald received his Ph.D. from the University of Alberta and has with over 20 years experience in the life sciences industry. Dr. MacDonald is Vice President, Product Development at Methylation Sciences Inc.(MSI). MSI is a formulation-based pharmaceutical development company located in Vancouver. Prior to his current position, he was CEO of Active Pass Pharmaceuticals and General Manager of Biovail Contract Research, a clinical contract research organization located in Toronto with over 200 employees and $30 M in gross revenue.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/robert-britton.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Prof. Robert Britton, PhD</strong><br /> Prof. Britton completed his B. Sc. degree at the University of Waterloo in 1996 and a PhD at University of British Columbia (UBC). In 2002, he was awarded a NSERC Postdoctoral Fellowship with Professor Ian Paterson at the University of Cambridge. In 2004, Rob accepted a position as Senior Research Chemist in the Process Research Group at Merck Frosst Canada before joining the faculty at Simon Fraser University in 2005 as an assistant professor.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/david-smalley.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>David Smalley</strong><br /> David Smalley is a corporate and securities lawyer who has specialized in helping start-up companies overcome legal, strategic and funding challenges. He is presently a director of Scorpio Gold Corporation (TSX-VE: SGN) and corporate secretary of Canaco Resources Inc. (TSX:CAN). He was a director for 7 years of Extreme CCTV Inc. Mr. Smalley is a partner of the Vancouver based law firm, Fraser and Company, LLP. He graduated from University of Victoria with a bachelor of arts degree in 1985 and from University of British Columbia in 1988 with a bachelor of laws degree.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/rob-macdonald.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Rob MacDonald</strong><br /> Mr. Rob MacDonald is a Vancouver-based creative entrepreneur. He currently runs his own boutique marketing agency - banter grace &amp; lollipop - working for clients in the fashion, athletic, wellness, food &amp; beverage, travel &amp; leisure, and urban development industries. His creative experience includes working with leading brands such as lululemon athletica, the Vancouver 2010 Winter Olympic Games, as well as many other small-midsized brands. Rob was the Founder &amp; CEO of the lifestyle-bicycle brand jorg&amp;olif, 2003-09, operating in Canada and the USA. His marketing leadership at jorg&amp;olif generated $50M+ in media exposure through strategic celebrity interest and media buzz.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/tom-urban.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Tom Urban</strong><br /> Tom Urban began his professional career in banking with Goldman, Sachs &amp; Co. in 1988. He subsequently spent 14 years in the agricultural seeds business with Pioneer Hi-Bred and E.I. DuPont de Nemours primarily in Eastern and Western Europe. In 2004, Tom left DuPont to join the early-stage forestry genetics company, CellFor Inc and served as CellFor&rsquo;s CEO until 2012 when the Company was sold to ArborGen, the market leader in the forestry genetics market. Tom received his undergraduate degree from Middlebury College and a Masters of Business Administration from Harvard University.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-09-04 18:01:02','2012-09-04 18:01:02','2012-09-04 18:01:02'),(256,65,'en','Advisory','<h1>Advisory</h1>\r\n<table class=\"transparent\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/len-metcalfe.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Len Metcalfe</strong><br /> Mr. Metcalfe was Chairman and CEO of Dynamic Control Systems Inc. a manufacturer of applied laser sensor and machine vision technology from 1976-1997. In 1997 Dynamic Control Systems acquired several international sensor manufacturers and became LMI Technologies Inc. Mr. Metcalfe remained Chairman, CEO until 2009 when he retired from the CEO position and remains a Director after LMI was acquired by AUGUSTA Technologie AG. in 2011. Mr Metcalfe is an Independent Director of WebTech Wireless Inc. a public company and also a director of several private companies. Mr Metcalfe is currently an active Entrepreneur, Advisor, Director and Angel Investor.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/david-macdonald.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>David MacDonald, PhD</strong><br /> Dr. Macdonald received his Ph.D. from the University of Alberta and has with over 20 years experience in the life sciences industry. Dr. MacDonald is Vice President, Product Development at Methylation Sciences Inc.(MSI). MSI is a formulation-based pharmaceutical development company located in Vancouver. Prior to his current position, he was CEO of Active Pass Pharmaceuticals and General Manager of Biovail Contract Research, a clinical contract research organization located in Toronto with over 200 employees and $30 M in gross revenue.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/robert-britton.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Prof. Robert Britton, PhD</strong><br /> Prof. Britton completed his B. Sc. degree at the University of Waterloo in 1996 and a PhD at University of British Columbia (UBC). In 2002, he was awarded a NSERC Postdoctoral Fellowship with Professor Ian Paterson at the University of Cambridge. In 2004, Rob accepted a position as Senior Research Chemist in the Process Research Group at Merck Frosst Canada before joining the faculty at Simon Fraser University in 2005 as an assistant professor.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/david-smalley.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>David Smalley</strong><br /> David Smalley is a corporate and securities lawyer who has specialized in helping start-up companies overcome legal, strategic and funding challenges. He is presently a director of Scorpio Gold Corporation (TSX-VE: SGN) and corporate secretary of Canaco Resources Inc. (TSX:CAN). He was a director for 7 years of Extreme CCTV Inc. Mr. Smalley is a partner of the Vancouver based law firm, Fraser and Company, LLP. He graduated from University of Victoria with a bachelor of arts degree in 1985 and from University of British Columbia in 1988 with a bachelor of laws degree.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/rob-macdonald.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Rob MacDonald</strong><br /> Mr. Rob MacDonald is a Vancouver-based creative entrepreneur. He currently runs his own boutique marketing agency - banter grace &amp; lollipop - working for clients in the fashion, athletic, wellness, food &amp; beverage, travel &amp; leisure, and urban development industries. His creative experience includes working with leading brands such as lululemon athletica, the Vancouver 2010 Winter Olympic Games, as well as many other small-midsized brands. Rob was the Founder &amp; CEO of the lifestyle-bicycle brand jorg&amp;olif, 2003-09, operating in Canada and the USA. His marketing leadership at jorg&amp;olif generated $50M+ in media exposure through strategic celebrity interest and media buzz.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/tom-urban.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Tom Urban</strong><br /> Tom Urban began his professional career in banking with Goldman, Sachs &amp; Co. in 1988. He subsequently spent 14 years in the agricultural seeds business with Pioneer Hi-Bred and E.I. DuPont de Nemours primarily in Eastern and Western Europe. In 2004, Tom left DuPont to join the early-stage forestry genetics company, CellFor Inc., and served as CellFor&rsquo;s CEO until 2012 when the Company was sold to ArborGen, the market leader in the forestry genetics market. Tom received his undergraduate degree from Middlebury College and a Masters of Business Administration from Harvard University.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-09-04 18:01:58','2012-09-04 18:01:58','2012-09-04 18:01:58'),(257,64,'en','Board of Directors','<h1>Board of Directors</h1>\r\n<table class=\"transparent\" border=\"0\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/jack-gin.jpg\" alt=\"\" /></td>\r\n<td>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><strong style=\"font-size: 14px;\">Jack Gin, P.Eng.<br /></strong><span style=\"font-size: 14px;\">Mr. Jack Gin is an experienced technology developer and successful entrepreneur. He was the founder and former Chief Executive Officer of Extreme CCTV (EXC:TSX), a company purchased by Bosch for $93M in 2008. Mr. Gin is also an engineer and brings a depth of technology commercialization and marketing experience to SemiosBIO.&nbsp;</span></p>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\">&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/malcolm-kendall.jpg\" alt=\"\" /></td>\r\n<td>\r\n<p style=\"font-size: 14px; font-family: \'Open Sans\', sans-serif; line-height: 22px;\"><strong style=\"font-size: 14px;\">Malcolm Kendall<br /></strong><span style=\"font-size: 14px;\">Mr. Malcolm Kendall has over 25 years of operational management, entrepreneurial, venture capital investment and leadership experience, the majority of which has been focused on company creation and building value in technology and biotechnology companies. Formerly a life science venture capitalist with MDS Capital and Intersouth Partners, he lectures at the Segal Graduate School of business, Simon Fraser University.&nbsp;</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-09-04 18:03:07','2012-09-04 18:03:07','2012-09-04 18:03:07'),(258,66,'en','Management','<h1>Management</h1>\r\n<table class=\"transparent\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/michael-gilbert.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Michael Gilbert, PhD President and Chief Scientific Officer</strong><br />Michael is a natural product synthetic chemist who has worked in research and development for 16 years. He has held scientific and management positions at Cardiome Pharma, Active Pass Pharma, and Merck-Frosst. Worked on discovery, manufacturing, stability testing and quality control of small molecule and biologics clinical products for the pharmaceutical industry. Michael obtained his PhD from UBC and completed a post-doctoral fellowship at University of Vienna.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/chris-vannatto.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Chris Van Natto, MSc Vice President, Product Development</strong><br /> Experienced entomologist with excellent understanding of pest control. Worked for the past 10 years at Dupont in product development, registration and commercialization of pest control products. Also worked for Hedley pesticides and the Canadian Grain Commission and obtained his masters from Lakehead University.</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-09-04 18:10:27','2012-09-04 18:10:27','2012-09-04 18:10:27'),(259,68,'en','Markets','<h1>Markets</h1>\r\n<p>SemiosBIO Technologies Inc. is a new Canadian business dedicated to providing the least toxic products and technologies for the control of insect pests. We intend to develop new technologies and provide products that will take advantage of the rapidly growing biopesticides market.</p>\r\n<p>In 2009, the pesticide market was $43B, of which biopesticides represented 3% ($1.3B.) The biopesticide market is expected to grow at a 15% to over $3.3B by 2014. The trend from pesticide to biopesticide preference is increasing as a result of a paradigm shift in the industry and a global aim to reduce the risk of pesticide exposure. The trend has been observed in the increasing consumer demand for organic products and the ban of pesticides by regulators.</p>\r\n<p>We intend to meet the continuing demand for pest control products by providing products and technologies that are favoured by regulators and consumers. We believe that the transition to less harmful, more environmentally sustainable pesticides is in the early growth phase and that we can join the relatively few important biopesticide providers as a leader in the provision of new products and technologies for this market.</p>\r\n<p>SemiosBIO Technologies is concentrating on 4 broad market opportunities for insect control biopesticides and related products:</p>\r\n<p>&nbsp;</p>\r\n<h2>Pest Control Operators (PCO)</h2>\r\n<p>Pest Control Operators, otherwise known as exterminators, provide professional infestation control for residences, commercial and government facilities. Pest targets include cockroaches, bed bugs, termites, ants and several other flying and crawling insect pests.</p>\r\n<p>Most PCO operations obtain their pesticide supplies from distributors dedicated to the professional user market. Next to agriculture and potentially the domestic consumer market, this is likely the largest market for semiosBIO products.</p>\r\n<p>&nbsp;</p>\r\n<h2>Agriculture Markets</h2>\r\n<p>The agriculture market accounted for about 63% of total US pesticide expenditures in 2007 (US EPA) with 25% of this amount dedicated to agricultural insect pests. Pro-rated global agricultural insecticide expenditures based on US percentages and a $50 billion global pesticide market give a current total of $7.9 billion for agricultural insecticides.</p>\r\n<p>As recently as 2000, the organophosphates (OP) accounted for 72% of all insecticide active ingredients. With the passing of the US Food Quality Act in 1996 this class of conventional insecticidal active ingredients has undergone considerable scrutiny world-wide and as of 2007 OPs accounted for 35% of all insecticides in the US.</p>\r\n<p>Besides regulatory issues, more and more consumers are turning to organically certified foods. Manufacturers of mating disruption pheromones are well aware of this and make all efforts to ensure their products are certified for organic use.</p>\r\n<p>Heavy reliance on OPs together with a corresponding loss of these products through de-registration has prompted users to look for appropriate alternatives. Biopesticides are one such alternative and are a rapidly growing part of the global pesticide market. Currently, about 55% of the total biopesticides market dedicated to insect pests of orchards.</p>\r\n<p>The predominant use of orchard biopesticides is in the form of mating disruption pheromones. Mating disruption pheromones drastically reduce mating by interfering with the male insects ability to find females. SemiosBIO intends initial entry into the agricultural pesticide market through provision of new technologies for dispersal of pheromones. SemiosBIO technologies will increase the efficiency and reduce costs for orchard applications of mating disruption pheromones. We also expect that these new application technologies will introduce biopesticides to new crops that are limited by pheromone application technology.</p>\r\n<p>&nbsp;</p>\r\n<h2>Domestic Market</h2>\r\n<p>The home and garden segment accounted for 21% of all pesticide expenditures in the US in 2007. In terms of actual weight of active ingredients, only 8% was dedicated to this segment. This clearly demonstrates that in relation to the cost of producing pesticides companies obtain much higher margins for domestic use pesticides relative to those sold for agricultural use.</p>\r\n<p>Of the total home and garden pesticide market about 61% of expenditures were for insecticides. On a pro-rated basis using US EPA percentages and a global pesticide market of $50 billion, the global domestic insecticide market is currently about $6.4 billion.</p>\r\n<p>Target pests include cockroaches, termites, bed bugs, ants, silverfish, sow bugs and a wide variety of household and garden insect pests.</p>\r\n<p>&nbsp;</p>\r\n<h2>Specialty Markets</h2>\r\n<p>There is a number specialty or niche markets for biopesticides. One such market it is related to management of forest pests. Because of limitations in application technology and higher costs associated with mating disruption pheromones, use of biopesticides is currently directed toward high value stands of trees in parks and golf courses. As the company develops new application technologies for agriculture, there will be more work to understand how the technology can be extended to forestry and other uses.</p>','1','2012-09-04 18:11:12','2012-09-04 18:11:12','2012-09-04 18:11:12'),(260,70,'en','SemiosNET','<h1>semios<strong>NET</strong></h1>\r\n<p>Facing increased regulation and the outright ban of toxic pesticides for insect management, the agricultural sector is struggling to identify effective, economical and sustainable alternatives. Welcome SemiosNET, a completely integrated crop pest management system.</p>\r\n<h2>A cloud-based system that allows you to monitor and control your property remotely: <strong>online, anytime, from anywhere</strong>.</h2>\r\n<p>Complete automation at your fingertips - first of its kind in precision farming. The system allows for</p>\r\n<ul>\r\n<li>Multiple platforms of reporting and control including:</li>\r\n<li>Up-to-date spray records with historical data</li>\r\n<li>Live weather reporting right from your farm including degree day analysis</li>\r\n</ul>\r\n<p>Protection of your harvest from insects through automated pheromone release The system is completely modular allowing you to engage the parts of the system that best fit your needs. Complete automation. Complete Integration. Complete access. SemiosNET is the leader in pheromone based pest control, meeting grower and regulatory demands at an affordable price. Decrease crop loss, reduce costs and increase reliability with semiosNET.</p>','1','2012-09-04 18:12:30','2012-09-04 18:12:30','2012-09-04 18:12:30'),(261,65,'en','Advisory','<h1>Advisory</h1>\r\n<table class=\"transparent\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/len-metcalfe.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Len Metcalfe</strong><br /> Mr. Metcalfe was Chairman and CEO of Dynamic Control Systems Inc. a manufacturer of applied laser sensor and machine vision technology from 1976-1997. In 1997 Dynamic Control Systems acquired several international sensor manufacturers and became LMI Technologies Inc. Mr. Metcalfe remained Chairman, CEO until 2009 when he retired from the CEO position and remains a Director after LMI was acquired by AUGUSTA Technologie AG. in 2011. Mr Metcalfe is an Independent Director of WebTech Wireless Inc. a public company and also a director of several private companies. Mr Metcalfe is currently an active Entrepreneur, Advisor, Director and Angel Investor.</p>\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/david-macdonald.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>David MacDonald, PhD</strong><br /> Dr. Macdonald received his Ph.D. from the University of Alberta and has with over 20 years experience in the life sciences industry. Dr. MacDonald is Vice President, Product Development at Methylation Sciences Inc.(MSI). MSI is a formulation-based pharmaceutical development company located in Vancouver. Prior to his current position, he was CEO of Active Pass Pharmaceuticals and General Manager of Biovail Contract Research, a clinical contract research organization located in Toronto with over 200 employees and $30 M in gross revenue.</p>\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/robert-britton.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Prof. Robert Britton, PhD</strong><br /> Prof. Britton completed his B. Sc. degree at the University of Waterloo in 1996 and a PhD at University of British Columbia (UBC). In 2002, he was awarded a NSERC Postdoctoral Fellowship with Professor Ian Paterson at the University of Cambridge. In 2004, Rob accepted a position as Senior Research Chemist in the Process Research Group at Merck Frosst Canada before joining the faculty at Simon Fraser University in 2005 as an assistant professor.</p>\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/david-smalley.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>David Smalley</strong><br /> David Smalley is a corporate and securities lawyer who has specialized in helping start-up companies overcome legal, strategic and funding challenges. He is presently a director of Scorpio Gold Corporation (TSX-VE: SGN) and corporate secretary of Canaco Resources Inc. (TSX:CAN). He was a director for 7 years of Extreme CCTV Inc. Mr. Smalley is a partner of the Vancouver based law firm, Fraser and Company, LLP. He graduated from University of Victoria with a bachelor of arts degree in 1985 and from University of British Columbia in 1988 with a bachelor of laws degree.</p>\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/rob-macdonald.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Rob MacDonald</strong><br /> Mr. Rob MacDonald is a Vancouver-based creative entrepreneur. He currently runs his own boutique marketing agency - banter grace &amp; lollipop - working for clients in the fashion, athletic, wellness, food &amp; beverage, travel &amp; leisure, and urban development industries. His creative experience includes working with leading brands such as lululemon athletica, the Vancouver 2010 Winter Olympic Games, as well as many other small-midsized brands. Rob was the Founder &amp; CEO of the lifestyle-bicycle brand jorg&amp;olif, 2003-09, operating in Canada and the USA. His marketing leadership at jorg&amp;olif generated $50M+ in media exposure through strategic celebrity interest and media buzz.</p>\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/tom-urban.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Tom Urban</strong><br /> Tom Urban began his professional career in banking with Goldman, Sachs &amp; Co. in 1988. He subsequently spent 14 years in the agricultural seeds business with Pioneer Hi-Bred and E.I. DuPont de Nemours primarily in Eastern and Western Europe. In 2004, Tom left DuPont to join the early-stage forestry genetics company, CellFor Inc., and served as CellFor&rsquo;s CEO until 2012 when the Company was sold to ArborGen, the market leader in the forestry genetics market. Tom received his undergraduate degree from Middlebury College and a Masters of Business Administration from Harvard University.</p>\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-09-04 18:44:44','2012-09-04 18:44:44','2012-09-04 18:44:44'),(262,66,'en','Management','<h1>Management</h1>\r\n<table class=\"transparent\">\r\n<tbody>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/michael-gilbert.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Michael Gilbert, PhD President and Chief Scientific Officer</strong><br />Michael is a natural product synthetic chemist who has worked in research and development for 16 years. He has held scientific and management positions at Cardiome Pharma, Active Pass Pharma, and Merck-Frosst. Worked on discovery, manufacturing, stability testing and quality control of small molecule and biologics clinical products for the pharmaceutical industry. Michael obtained his PhD from UBC and completed a post-doctoral fellowship at University of Vienna.</p>\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td><img src=\"../../../../app/assets/images/chris-vannatto.png\" alt=\"\" /></td>\r\n<td>\r\n<p><strong>Chris Van Natto, MSc Vice President, Product Development</strong><br /> Experienced entomologist with excellent understanding of pest control. Worked for the past 10 years at Dupont in product development, registration and commercialization of pest control products. Also worked for Hedley pesticides and the Canadian Grain Commission and obtained his masters from Lakehead University.</p>\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>','1','2012-09-04 18:45:02','2012-09-04 18:45:02','2012-09-04 18:45:02');
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
INSERT INTO `cms_pages` VALUES (20,'managed-it','default','2012-02-28 18:56:35','2012-03-21 23:07:51','1'),(21,'network-design','default','2012-02-28 18:58:55','2012-03-21 22:59:50','1'),(22,'network-security','default','2012-02-28 19:00:40','2012-03-21 23:05:14','1'),(24,'online-backup','default','2012-02-28 19:02:06','2012-03-21 23:03:01','1'),(30,'disaster-recovery','default','2012-03-21 23:04:30','2012-03-21 23:04:30','1'),(31,'datacenter-hosting','default','2012-03-21 23:06:34','2012-03-21 23:06:50','1'),(32,'content-filtering','default','2012-03-21 23:08:28','2012-03-21 23:08:28','1'),(52,'about','default','2012-08-27 20:29:09','2012-08-31 21:30:59','1'),(53,'innovation','default','2012-08-27 20:29:35','2012-09-04 17:34:13','1'),(54,'solutions','default','2012-08-27 20:30:27','2012-09-02 23:31:42','1'),(55,'news','default','2012-08-27 20:30:53','2012-08-27 20:30:53','1'),(56,'careers','default','2012-08-27 20:31:17','2012-08-30 21:54:38','1'),(57,'contact','default','2012-08-27 20:31:35','2012-09-02 23:22:21','1'),(58,'home','home','2012-08-27 20:31:59','2012-08-31 21:49:15','1'),(59,'search','default','2012-08-28 22:38:47','2012-08-28 22:38:47','1'),(62,'company-profile','default','2012-08-29 20:50:35','2012-08-31 21:15:23','1'),(63,'strategy','default','2012-08-29 20:51:25','2012-09-02 21:15:48',''),(64,'board-of-directors','default','2012-08-29 20:51:54','2012-09-04 18:03:07','1'),(65,'advisory','default','2012-08-29 20:53:02','2012-09-04 18:44:44','1'),(66,'management','default','2012-08-29 20:53:29','2012-09-04 18:45:02','1'),(67,'pheromones','default','2012-08-29 20:55:33','2012-09-04 17:36:23','1'),(68,'markets','default','2012-08-29 20:55:58','2012-09-04 18:11:12','1'),(69,'semiosguard','default','2012-08-29 20:56:36','2012-09-04 17:39:43','1'),(70,'semiosnet','default','2012-08-29 20:57:12','2012-09-04 18:12:30','1'),(71,'media','default','2012-08-29 20:57:46','2012-08-31 21:27:06',''),(72,'news-releases','default','2012-08-29 20:58:35','2012-08-31 21:27:31','');
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
INSERT INTO `users` VALUES (1,'semiosbio','info@semiosbio.com','Semios','Bio','2edd0b2843af69431d61658df0f60755','');
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

-- Dump completed on 2012-09-04 20:18:05
