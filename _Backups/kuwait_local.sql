-- MySQL dump 10.13  Distrib 5.6.16, for osx10.9 (x86_64)
--
-- Host: localhost    Database: kuwait_local
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `active` int(1) unsigned NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `object` int(10) unsigned DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `rank` int(10) unsigned DEFAULT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'jpg',
  `caption` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (1,1,'2014-04-27 23:20:27','2014-04-27 23:29:51',17,NULL,1,'jpg',''),(2,1,'2014-04-27 23:50:11','2014-04-28 00:01:47',23,NULL,1,'jpg','');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objects`
--

DROP TABLE IF EXISTS `objects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `objects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `active` int(1) unsigned NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `rank` int(10) unsigned DEFAULT NULL,
  `name1` tinytext,
  `name2` tinytext,
  `address1` text,
  `address2` text,
  `city` tinytext,
  `state` tinytext,
  `zip` tinytext,
  `country` tinytext,
  `phone` tinytext,
  `fax` tinytext,
  `url` tinytext,
  `email` tinytext,
  `begin` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `head` tinytext,
  `deck` blob,
  `body` blob,
  `notes` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objects`
--

LOCK TABLES `objects` WRITE;
/*!40000 ALTER TABLE `objects` DISABLE KEYS */;
INSERT INTO `objects` VALUES (1,1,'2014-04-04 17:09:39','2014-04-27 23:46:31',100,'*',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(2,1,'2014-04-04 17:09:54','2014-04-27 22:38:16',100,'*',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(3,1,'2014-04-04 17:10:05','2014-04-04 17:10:05',1000,'_Settings',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(4,1,'2014-04-04 17:11:02','2014-04-04 17:11:02',10,'Culture and Administration',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(5,1,'2014-04-04 17:11:14','2014-04-04 17:11:14',20,'Land of Kuwait',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(6,1,'2014-04-04 17:11:23','2014-04-04 17:11:23',30,'Man of Kuwait',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(7,1,'2014-04-04 17:11:33','2014-04-04 17:11:33',40,'Kuwait Today and Tomorrow',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(8,1,'2014-04-04 17:11:42','2014-04-27 22:38:41',50,'Planetarium',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(9,1,'2014-04-04 17:12:18','2014-04-04 17:12:18',10,'الثقافة والإدارة',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(10,1,'2014-04-04 17:12:41','2014-04-04 17:12:41',20,'أرض الكويت',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(11,1,'2014-04-04 17:13:01','2014-04-04 17:13:01',30,'رجل من الكويت',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(12,1,'2014-04-04 17:13:26','2014-04-04 17:13:26',40,'الكويت اليوم وغدا',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(13,1,'2014-04-04 17:13:51','2014-04-27 22:38:33',50,'القبة السماوية',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(14,1,'2014-04-27 21:10:44','2014-04-27 21:11:04',10,'+English',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(15,1,'2014-04-27 21:10:56','2014-04-27 21:21:59',20,'+العربية',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(16,1,'2014-04-27 21:12:55','2014-04-27 21:12:55',NULL,'Test',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(17,1,'2014-04-27 21:20:15','2014-04-28 00:01:35',10,'About',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'detail',NULL,NULL,NULL,NULL,NULL,'<p>Acquiring Modernity<br />\r\n7 June – 23 November 2014</p>','Pavilion of Kuwait\r\n\r\nCommissioned by the National Council for Culture, Arts and Letters, Kuwait\'s pavilion at the 14th International Architecture Exhibition of la Biennale di Venezia will take place from June 7 until November 23. Housed in the Arsenale, Acquiring Modernity is Kuwait?s second participation after Kethra, which debuted at the 13th International Architecture Exhibition in 2012.\r\n\r\nUnder the supervision of deputy commissioner Zahra Ali Baba and the creative direction of artist-curator Alia Farid, Acquiring Modernity will address the exhibition\'s overarching theme of 100 years of modernity from 1914 to 2014.The pavilion will explore symbols of modernity in Kuwait?s architecture, with a special focus on Michel Ecochard?s Kuwait National Museum, designed in 1960 and completed in 1983.\r\n\r\n\"The pavilion will investigate the arrival of modernity in Kuwait through a number of buildings and projects commissioned by the state as \'modern status symbols,\' particularly the Kuwait National Museum,\" said Farid. \"The investigation will also analyze the current conditions of these buildings towards understanding the impact of modernity on local culture?whether modernist ideals were assimilated, altered, neglected, rejected?and what those reactions convey about contemporary society in Kuwait.\"\r\n\r\nAt the inauguration of Acquiring Modernity, participants will restage the celebratory opening of the Kuwait National Museum in 1983. During the rest of the six-month exhibition, they will continue developing their investigations regarding the role of the museum and the rehabilitation of its programs. Kuwait\'s participation in Venice is only one moment of visibility from a larger project that aims to restore rigorous cultural involvement in the country.\r\n\r\nRepresenting Kuwait at the Biennale Architettura 2014 is a team of 21 individuals engaged in diverse areas of research: Aisha Alsager, Dana Aljouder, Sara Sarago?a Soares, Hassan Hayat, Nesef Al Nesef, Noora Al Musallam, Amara Abdal Figueroa, Gr?inne Hebeler, Abdullah AlHarmi, Samer Mohammed, Nima Algooneh, Liane Al-Ghusain, Adel Al-Qattan, Wafa?a Al-Fraheen, Dalal Al-Sane, Noura Alsager, Maysaa Almumin, Cherihan Nasr, Fatema Alqabandi, Alaa Alawadhi, and Ghazi Al-Mulaifi.\r\n\r\nThe pavilion will also feature collaborations with filmmakers Shakir Abal and Oscar Boyson, graphic design duo Dexter Sinister, and artist Abdullah Al-Awadhi.\r\n\r\nAccompanying the pavilion is a research publication available in English and Arabic, a film set for release in November, and a joint installation with the Nordic Pavilion.\r\n\r\nFor more detailed information about the curator, participants, or the pavilion, please visit our website: www.acquiringmodernity.com.\r\n\r\nAcquiring Modernity is proudly supported by the Ministry of State for Youth Affairs, and real estate partner, United Real Estate Company.\r\n\r\nFor press inquires, please contact?info@acquiringmodernity.com.\r\n\r\nThe NCCAL\r\n\r\nEstablished in 1973 by Amiri Decree, the Council seeks to preserve and promote the arts throughout the country, and aims to cultivate a productive environment for artists. Today, the duties of the organisation vary from maintaining museums, public libraries, and cultural centres, to organising excavations, renovating pre-oil structures, arranging annual cultural festivals, hosting readings and lectures, and representing Kuwait at cultural events abroad. The NCCAL also awards prizes each year for outstanding individuals in the fields of art, art criticism, literature, drama, film, music, translation, and the social sciences.\r\n\r\n\r\n',NULL),(18,1,'2014-04-27 21:20:30','2014-04-27 21:20:30',20,'Affiliates',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(19,1,'2014-04-27 21:20:39','2014-04-27 21:20:39',30,'Calendar',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(20,1,'2014-04-27 21:20:48','2014-04-27 21:20:48',40,'Publications',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(21,1,'2014-04-27 21:20:56','2014-04-27 21:20:56',50,'Videos',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(22,1,'2014-04-27 21:21:04','2014-04-27 21:21:04',60,'Contact',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(23,1,'2014-04-27 21:21:53','2014-04-28 00:01:47',10,'حول',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'detail',NULL,NULL,NULL,NULL,NULL,'','جناح الكويت\r\n\r\nبتكليف من المجلس الوطني للثقافة والفنون والآداب ، وسوف جناح الكويت في معرض العمارة الدولي 14 لل لا بينالي دي فينيسيا في الفترة من 7 يونيو حتى 23 نوفمبر تشرين الثاني. يقع في الأرسينال ، اكتساب الحداثة هي الكويت؟ ق المشاركة الثانية بعد Kethra ، التي لاول مرة في معرض العمارة الدولي 13TH في عام 2012 .\r\n\r\nتحت إشراف نائب مفوض زهرة علي بابا واتجاه الإبداعية لل فنان أمين علياء فريد، سوف اكتساب الحداثة معالجة موضوع المعرض الشامل ل 100 سنة من الحداثة من 1914 إلى 2014.The الجناح سوف تستكشف رموز الحداثة في الكويت ؟ ق العمارة ، مع التركيز بشكل خاص على ميشال Ecochard ؟ متحف الكويت الوطني ، والمصممة في عام 1960 و اكتمل في عام 1983.\r\n\r\nواضاف \"ان التحقيق في جناح وصول الحداثة في الكويت من خلال عدد من المباني والمشاريع بتكليف من قبل الدولة باسم \' رموز الحالة الحديثة، \" وخاصة متحف الكويت الوطني \"، وقال فريد . واضاف ان \" التحقيق أيضا تحليل الظروف الراهنة لهذه المباني نحو فهم تأثير الحداثة على الثقافة المحلية ؟ سواء مندمجون المثل الحداثية أو تتغير المهملة، رفض ؟ وما ينقل هذه التفاعلات حول المجتمع المعاصر في الكويت . \"\r\n\r\nفي افتتاح اكتساب الحداثة ، سيقوم المشاركون restage افتتاح احتفالي لل متحف الكويت الوطني في عام 1983 وخلال ما تبقى من المعرض لمدة ستة أشهر ، وأنها ستواصل تطوير تحقيقاتها بشأن دور المتحف و إعادة تأهيل برامجها. مشاركة الكويت في البندقية هي لحظة واحدة فقط من الرؤية من مشروع أكبر يهدف إلى استعادة تورط الثقافية الصارمة في البلاد.\r\n\r\nيمثل الكويت في بينالي Architettura 2014 هو فريق من 21 فردا تعمل في مجالات متنوعة من الأبحاث : ؟ عائشة Alsager ، دانا Aljouder ، سارة Sarago على سواريس ، حسن الحياة ، Nesef آل Nesef ، نورة المسلم ، العمارة عبدال فيغيروا ، غرام INNE Hebeler ، عبدالله الهرمي، سامر محمد ، نعمة Algooneh ، ليان الغصين ، عادل القطان ، وفاء ؟ على آل Fraheen ، دلال الصانع ، نورا Alsager ، ميساء Almumin ، Cherihan نصر، فاطمة Alqabandi ، علاء العوضي ، وغازي المليفي .\r\n\r\nسوف جناح تتميز أيضا التعاون مع المخرجين شاكر أبا و أوسكار بويسون ، التصميم الجرافيكي الثنائي أيمن شريرة ، والفنان عبد الله العوضي .\r\n\r\nالمصاحبة لل جناح هو منشور البحوث المتاحة باللغتين العربية والإنجليزية ، ومجموعة الفيلم لاطلاق سراح في نوفمبر تشرين الثاني ، و تثبيت مشتركة مع الشمال جناح .\r\n\r\nللحصول على معلومات أكثر تفصيلا حول القيم ، والمشاركين ، أو الجناح ، يرجى زيارة موقعنا على الانترنت : www.acquiringmodernity.com .\r\n\r\nالحصول على الحداثة وتدعم بفخر من قبل وزارة الدولة ل شؤون الشباب ، وشريك العقارات، و شركة العقارات المتحدة .\r\n\r\nلل استفسارات الصحفية، يرجى الاتصال ؟ info@acquiringmodernity.com .\r\n\r\nو NCCAL\r\n\r\nأنشئت في عام 1973 بموجب المرسوم الأميري ، ويسعى المجلس لصون وتعزيز الفنون في جميع أنحاء البلاد ، ويهدف إلى زراعة بيئة منتجة للفنانين . اليوم ، واجبات المنظمة تختلف من الحفاظ على المتاحف والمكتبات العامة ، والمراكز الثقافية ، ل تنظيم الحفريات ، وتجديد هياكل ما قبل النفط ، وترتيب المهرجانات الثقافية السنوية ، واستضافة القراءات و المحاضرات ، وتمثيل الكويت في الفعاليات الثقافية في الخارج. و NCCAL أيضا تقديم الجوائز سنويا ل شخصيات مرموقة في مجالات الفن، و النقد الفني ، والأدب ، والدراما ، والأفلام ، والموسيقى ، والترجمة، والعلوم الاجتماعية .\r\n\r\n\r\n',NULL),(24,1,'2014-04-27 21:22:51','2014-04-27 21:22:51',20,'الشركات التابعة',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(25,1,'2014-04-27 21:23:08','2014-04-27 21:23:08',30,'تقويم',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(26,1,'2014-04-27 21:23:27','2014-04-27 21:23:27',40,'المنشورات',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(27,1,'2014-04-27 21:23:51','2014-04-27 21:23:51',50,'أشرطة الفيديو',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL),(28,1,'2014-04-27 21:24:15','2014-04-27 21:24:15',60,'اتصال',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'','',NULL);
/*!40000 ALTER TABLE `objects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wires`
--

DROP TABLE IF EXISTS `wires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wires` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `active` int(1) unsigned NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `fromid` int(10) unsigned DEFAULT NULL,
  `toid` int(10) unsigned DEFAULT NULL,
  `weight` float NOT NULL DEFAULT '1',
  `notes` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wires`
--

LOCK TABLES `wires` WRITE;
/*!40000 ALTER TABLE `wires` DISABLE KEYS */;
INSERT INTO `wires` VALUES (1,0,'2014-04-04 17:09:39','2014-04-04 17:09:39',0,1,1,NULL),(2,0,'2014-04-04 17:09:54','2014-04-04 17:09:54',0,2,1,NULL),(3,1,'2014-04-04 17:10:05','2014-04-04 17:10:05',0,3,1,NULL),(4,1,'2014-04-04 17:11:02','2014-04-04 17:11:02',1,4,1,NULL),(5,1,'2014-04-04 17:11:14','2014-04-04 17:11:14',1,5,1,NULL),(6,1,'2014-04-04 17:11:23','2014-04-04 17:11:23',1,6,1,NULL),(7,1,'2014-04-04 17:11:33','2014-04-04 17:11:33',1,7,1,NULL),(8,1,'2014-04-04 17:11:42','2014-04-04 17:11:42',1,8,1,NULL),(9,1,'2014-04-04 17:12:18','2014-04-04 17:12:18',2,9,1,NULL),(10,1,'2014-04-04 17:12:41','2014-04-04 17:12:41',2,10,1,NULL),(11,1,'2014-04-04 17:13:01','2014-04-04 17:13:01',2,11,1,NULL),(12,1,'2014-04-04 17:13:26','2014-04-04 17:13:26',2,12,1,NULL),(13,1,'2014-04-04 17:13:51','2014-04-04 17:13:51',2,13,1,NULL),(14,1,'2014-04-27 21:10:44','2014-04-27 21:10:44',0,14,1,NULL),(15,1,'2014-04-27 21:10:56','2014-04-27 21:10:56',0,15,1,NULL),(16,1,'2014-04-27 21:12:22','2014-04-27 21:12:22',14,1,1,NULL),(17,0,'2014-04-27 21:12:55','2014-04-27 21:12:55',1,16,1,NULL),(18,0,'2014-04-27 21:13:05','2014-04-27 21:13:05',15,16,1,NULL),(19,0,'2014-04-27 21:16:40','2014-04-27 21:16:40',15,10,1,NULL),(20,1,'2014-04-27 21:17:06','2014-04-27 21:17:06',15,2,1,NULL),(21,1,'2014-04-27 21:20:15','2014-04-27 21:20:15',14,17,1,NULL),(22,1,'2014-04-27 21:20:30','2014-04-27 21:20:30',14,18,1,NULL),(23,1,'2014-04-27 21:20:39','2014-04-27 21:20:39',14,19,1,NULL),(24,1,'2014-04-27 21:20:48','2014-04-27 21:20:48',14,20,1,NULL),(25,1,'2014-04-27 21:20:56','2014-04-27 21:20:56',14,21,1,NULL),(26,1,'2014-04-27 21:21:04','2014-04-27 21:21:04',14,22,1,NULL),(27,1,'2014-04-27 21:21:53','2014-04-27 21:21:53',15,23,1,NULL),(28,1,'2014-04-27 21:22:51','2014-04-27 21:22:51',15,24,1,NULL),(29,1,'2014-04-27 21:23:08','2014-04-27 21:23:08',15,25,1,NULL),(30,1,'2014-04-27 21:23:27','2014-04-27 21:23:27',15,26,1,NULL),(31,1,'2014-04-27 21:23:51','2014-04-27 21:23:51',15,27,1,NULL),(32,1,'2014-04-27 21:24:15','2014-04-27 21:24:15',15,28,1,NULL);
/*!40000 ALTER TABLE `wires` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-27 17:17:24
