-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: codeigniter
-- ------------------------------------------------------
-- Server version	5.5.44-0ubuntu0.14.04.1

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
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(80) NOT NULL,
  `tel` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'Marielle','Ullrich','bhansen@yahoo.com','2096729525'),(2,'Dayton','Rogahn','darius77@gmail.com','7560933073'),(3,'Rodrigo','Heller','uwiza@adams.com','1213259073'),(4,'Micah','Roberts','roxane.doyle@marvin.info','2665560695'),(5,'Bernard','Goyette','kihn.maximo@ullrich.com','3907455303'),(6,'Sean','Steuber','lily.hauck@yahoo.com','4276362052'),(7,'Lazaro','Huel','ruth91@hoppe.info','9839789995'),(8,'Heath','Bergnaum','mwalker@sanford.com','2603134887'),(9,'Oswald','Zboncak','wolff.eliseo@hammes.com','4547985818'),(10,'Burnice','Tromp','aweimann@yahoo.com','1503842674'),(11,'Dean','Considine','gardner98@hotmail.com','5490463783'),(12,'Claudia','Zieme','usporer@gmail.com','4578054994'),(13,'Alberto','Rice','kip.dubuque@yahoo.com','2620154442'),(14,'Dixie','Jast','treutel.prudence@moore.com','7026517037'),(15,'Terrill','Ebert','mueller.miles@yahoo.com','3339241050'),(16,'Emily','Corwin','lubowitz.freeman@collins.biz','6199071721'),(17,'Polly','Johnson','chaya.paucek@gmail.com','7489376426'),(18,'Casper','Schimmel','ogleichner@yahoo.com','4606109853'),(19,'Zoila','Lehner','memmerich@hotmail.com','2551343757'),(20,'Margarett','Schuppe','kian.stroman@wolf.com','4952370359'),(21,'Preston','Heathcote','grady.devin@shields.biz','9659464430'),(22,'Vernon','Hamill','bdamore@gmail.com','3707671723'),(23,'Nils','Marvin','katrina52@yahoo.com','2075622837'),(24,'Annamae','Wuckert','dewayne.jaskolski@gaylord.com','4939889852'),(25,'Gisselle','Kuhlman','auer.carmen@schaden.net','6025836461'),(26,'Gage','Hodkiewicz','mattie43@yahoo.com','5169479446'),(27,'Deborah','Kautzer','pamela82@labadie.com','1037225704'),(28,'Americo','Hilpert','casimir.schuster@gmail.com','6382825041'),(29,'Reta','Murphy','roberts.camilla@hotmail.com','9279833354'),(30,'Mittie','Sipes','josue19@larkin.com','9259039080'),(31,'Bobbie','Prohaska','bergstrom.emmet@yahoo.com','6003921854'),(32,'Doug','Terry','usmitham@medhurst.org','4102437188'),(33,'Jennyfer','Hickle','johns.tom@hotmail.com','2467434108'),(34,'Lula','Volkman','gabriel.heathcote@hotmail.com','7919503451'),(35,'Austin','Douglas','penelope.gutmann@jast.biz','9671995589'),(36,'Jean','Nitzsche','oreilly.dion@kessler.com','8975633188'),(37,'Estrella','Bednar','boyer.flavie@yahoo.com','7839807939'),(38,'Mercedes','Lindgren','molly.parker@gusikowski.biz','9115388242'),(39,'Mariam','Stehr','ernser.amaya@gmail.com','5335241070'),(40,'Stuart','Kilback','braeden.klein@bayer.org','2673158894'),(41,'Maryam','Kutch','roma.hartmann@hotmail.com','6961862842'),(42,'Orin','Morar','michael44@sipes.com','8354076527'),(43,'Ciara','Larson','gcollier@hotmail.com','5322214460'),(44,'Ruth','Leannon','mdeckow@hettinger.com','4533840950'),(45,'Vicky','Smith','ruecker.william@gmail.com','3639578952'),(46,'Joany','Hintz','kennedi07@wintheiser.com','2246577518'),(47,'Arnulfo','Kiehn','viviane09@feil.com','3869888083'),(48,'Jettie','Pfeffer','imani.tremblay@hotmail.com','3267378304'),(49,'Adonis','Rempel','stark.salvador@mitchell.net','5031426399'),(50,'Alayna','Botsford','odaugherty@gmail.com','2951609527'),(51,'Jovan','Wolff','velva68@waelchi.com','2163507414'),(52,'Enrique','Nikolaus','willms.candida@yahoo.com','6977496218'),(53,'Isadore','Gorczany','olen08@considine.com','7759947123'),(54,'Mary','McGlynn','mayer.royal@yahoo.com','8192830474'),(55,'Lyda','Mayert','caitlyn56@howe.biz','9086849207'),(56,'Laurine','Barrows','ariane55@labadie.biz','1589856784'),(57,'Charley','Lowe','elinore.keeling@brakus.biz','9801259183'),(58,'Elvera','Okuneva','ylegros@morissette.info','8628902775'),(59,'Gino','Moore','uquigley@parker.com','7609513343'),(60,'Marina','Jenkins','eden00@gmail.com','8128382607'),(61,'Arjun','Becker','kiehn.manuel@gmail.com','2176389104'),(62,'Cordia','Jones','frippin@hotmail.com','6477128052'),(63,'Curtis','Collins','langworth.summer@schaden.com','2122780974'),(64,'Spencer','Ledner','ross.olson@gutkowski.com','6752232918'),(65,'Jackie','Thiel','kylee79@glover.com','3837482622'),(66,'Jorge','Schaden','greenfelder.jany@gmail.com','5125837085'),(67,'Celestino','Hoeger','murray.cordie@gmail.com','9046037059'),(68,'Leonora','Glover','hpaucek@conroy.com','7126177560'),(69,'Aileen','Jacobi','chanel90@gmail.com','8245301280'),(70,'Hector','Lockman','marks.dock@yahoo.com','7817660784'),(71,'Karianne','Gleason','jasper.will@lubowitz.com','4534812588'),(72,'Faustino','Schuster','berta24@yahoo.com','8252588381'),(73,'Jameson','Yost','destin.hudson@mcclure.org','8757725703'),(74,'Maegan','Dooley','romaguera.janessa@hotmail.com','7046198655'),(75,'Eldora','Mante','towne.nina@homenick.com','4775490962'),(76,'Melvin','Herman','veum.derek@murazik.com','9615126810'),(77,'Juwan','Fadel','ross.abbott@crooks.com','1063080904'),(78,'Judson','Skiles','price.kris@gmail.com','1700801947'),(79,'Rosetta','King','marley97@yahoo.com','9994868359'),(80,'Westley','Daniel','emilia96@hotmail.com','2712788059'),(81,'Germaine','Rowe','wolf.kayleigh@yahoo.com','8866579435'),(82,'Beau','Ortiz','zortiz@yahoo.com','3946368838'),(83,'Lowell','Bauch','aufderhar.elliot@gmail.com','1093269795'),(84,'Walker','McKenzie','jarrett.botsford@robel.com','5048577948'),(85,'Gussie','Conroy','america49@hotmail.com','5665677435'),(86,'Tyrique','Waelchi','gerhold.kelly@collier.com','8993771475'),(87,'Roman','Kemmer','collins.alberta@rice.com','9698850024'),(88,'Ottilie','Padberg','mcdermott.lola@gmail.com','4287099249'),(89,'Mandy','Hettinger','colt52@gmail.com','6280073720'),(90,'Rowena','Jakubowski','willms.estell@hotmail.com','3610600182'),(91,'Lonzo','Weber','stiedemann.laurel@hotmail.com','8076603887'),(92,'Rudy','Ankunding','kirsten40@gmail.com','8742840797'),(93,'Sydnie','Casper','braun.dante@wintheiser.com','2662131524'),(94,'Carlotta','Collier','lelah.hudson@hotmail.com','2231437140'),(95,'Wendy','Lemke','aletha.rodriguez@stanton.com','5276911703'),(96,'Creola','Hayes','zbaumbach@grady.net','1687941794'),(97,'Deshaun','Schiller','cindy52@mann.com','5787067434'),(98,'Lukas','Kuhn','esther.stark@turcotte.com','6991308480'),(99,'Aryanna','Schroeder','cassidy19@hotmail.com','5434963530'),(100,'Mckayla','Keebler','schinner.kiera@yahoo.com','3495852070'),(101,'Taurean','Stark','pdurgan@gmail.com','5190319644'),(102,'Euna','Graham','kristian58@schmitt.com','2856212728'),(103,'Shanny','Cassin','leuschke.virginie@hotmail.com','6690091358'),(104,'Sunny','Koch','xander78@murphy.com','7223420222'),(105,'Chaz','Dare','maya59@johnson.com','1317475768'),(106,'Maxwell','Konopelski','zswaniawski@mclaughlin.com','7388385058'),(107,'Harry','Cruickshank','schuyler.renner@schuster.org','6958493040'),(108,'Tess','Quitzon','jonathan.von@considine.com','9153881777'),(109,'Camren','Gaylord','fausto.rosenbaum@gmail.com','1600133257'),(110,'Michele','Rippin','reina.spencer@hotmail.com','3782422546'),(111,'Emmanuelle','Thompson','reynolds.vincenzo@beer.com','1747364370'),(112,'Merl','Toy','augustus28@yahoo.com','6605121491'),(113,'Linwood','Will','andre.pollich@hotmail.com','8967239692'),(114,'Joannie','Gerhold','ztremblay@gmail.com','9076792001'),(115,'Newton','Schamberger','margarete67@barrows.com','2575901404'),(116,'Kevon','Russel','dangelo71@will.net','8123668059'),(117,'Lauriane','Bartell','cristobal61@boehm.com','4511483174'),(118,'Reese','Beahan','zleannon@gmail.com','3352460137'),(119,'Alfredo','Satterfield','adella.block@gmail.com','3909281137'),(120,'Glenda','Gulgowski','qbarton@gmail.com','9072670694'),(121,'Stevie','Harvey','donald.rippin@prohaska.com','9593619036'),(122,'Dion','Christiansen','jayson64@hotmail.com','6425365580'),(123,'Darlene','Crooks','ljenkins@tremblay.org','9907574668'),(124,'Ryder','Leffler','langosh.hollis@bauch.com','8383046732'),(125,'Dayna','Reichel','ortiz.lucious@yahoo.com','5786009533'),(126,'Brooke','Haley','weimann.clement@kertzmann.com','6585848218'),(127,'Doyle','Torphy','martine81@kreiger.net','2403189733'),(128,'Kristina','Grimes','bernardo87@hodkiewicz.com','1414627470'),(129,'Geovany','Parker','conroy.reanna@gmail.com','6521469430'),(130,'Ross','Barton','lorenza03@gottlieb.net','7005258695'),(131,'Ida','Hirthe','simeon.fahey@yahoo.com','3909263116'),(132,'Kyler','Greenholt','lesch.everette@schulist.biz','1717113650'),(133,'Kaela','Swaniawski','little.breanna@mante.com','6909870592'),(134,'Lucius','Kovacek','daryl.cartwright@gmail.com','6566042715'),(135,'Damion','Metz','oleta58@gmail.com','4982685528'),(136,'Kenton','Cole','eschowalter@ernser.com','7195673185'),(137,'Carmelo','Schoen','nova.lebsack@oreilly.com','7585536636'),(138,'Mike','Buckridge','goodwin.stanford@olson.biz','8434366485'),(139,'Alysha','Cronin','tmacejkovic@gmail.com','8723411902'),(140,'Moises','Cummerata','akeem.heathcote@hotmail.com','3829414487'),(141,'Kip','Klein','jerod.orn@gmail.com','3885961606'),(142,'Otilia','Trantow','ckemmer@koch.com','6495091292'),(143,'Ali','Kerluke','rylan.rolfson@hotmail.com','2495552267'),(144,'Kaycee','Effertz','sabrina.brakus@runolfsson.biz','8988508160'),(145,'Sigurd','Treutel','umonahan@gmail.com','6139327941'),(146,'Fabiola','Ziemann','dpowlowski@hotmail.com','2819886787'),(147,'Lavon','Herzog','robel.reed@emard.com','5776544839'),(148,'Arnaldo','Swift','cremin.christy@steuber.com','7202600358'),(149,'Thelma','Kuvalis','kaya.reynolds@hotmail.com','5315906106'),(150,'Percival','Hilll','jules.mohr@gmail.com','4888788083'),(151,'Arch','Jerde','claude.thiel@pfannerstill.com','9253709770'),(152,'Jannie','Hartmann','oliver81@yahoo.com','4979282986'),(153,'Wava','Emmerich','jaydon80@cremin.com','9234685536'),(154,'Estel','Cartwright','hammes.carmel@hotmail.com','2503636918'),(155,'Aurelia','Durgan','yhudson@yahoo.com','5217693012'),(156,'Matilde','Schmeler','daphnee17@macejkovic.org','8658987894'),(157,'Hilario','Sporer','miller.lenore@gmail.com','1349315714'),(158,'Gaston','Emard','ena.nikolaus@yahoo.com','9056745422'),(159,'Jalon','O\'Conner','sheila.bogan@yahoo.com','2542494097'),(160,'Demetris','Bogan','fisher.aliza@gmail.com','9432768407'),(161,'Edna','Runolfsdottir','augusta.kreiger@hotmail.com','3801572734'),(162,'Toni','Gleichner','laurence38@yahoo.com','4525809071'),(163,'Tyshawn','Mraz','wuckert.clair@gmail.com','6903614700'),(164,'Elena','Lebsack','drice@hotmail.com','4607605331'),(165,'Montana','Erdman','nwaters@gmail.com','7231138497'),(166,'Leilani','VonRueden','makenzie96@stracke.com','4220794305'),(167,'Vilma','Beer','awolf@cormier.com','6313754986'),(168,'Jordan','Feil','madelynn57@schamberger.net','5025599732'),(169,'Elinor','Wilderman','agnes.bartell@gmail.com','6201265931'),(170,'Luz','Dickens','lois.denesik@monahan.biz','2897006767'),(171,'Dolores','Watsica','sdouglas@hotmail.com','6684879515'),(172,'Athena','Hane','felton.douglas@howe.com','5720120813'),(173,'Korbin','Kulas','dax.dooley@gmail.com','2160934220'),(174,'Destiney','Hegmann','ghahn@hotmail.com','2204927242'),(175,'Cornell','Murray','rosalee69@hotmail.com','3687685394'),(176,'Johnathan','Strosin','rebeca.ernser@cole.org','6969542953'),(177,'Markus','Kunde','vhowell@hotmail.com','1432062679'),(178,'Jacey','Parisian','predovic.lenora@yahoo.com','3948725074'),(179,'Bonita','Kessler','cristal.brakus@yahoo.com','9845201792'),(180,'Malcolm','Romaguera','srempel@kuphal.info','2270586210'),(181,'Justice','Champlin','korey72@gmail.com','2051969219'),(182,'Chelsea','Nicolas','eda.ankunding@balistreri.com','3054391550'),(183,'Joaquin','Williamson','kris96@considine.com','3450436693'),(184,'Davion','Ratke','lnitzsche@gmail.com','9460099899'),(185,'Simeon','Frami','yking@gmail.com','4223543850'),(186,'Kianna','Fritsch','roberta.muller@kling.org','9397089851'),(187,'Anita','Kub','dweimann@langworth.com','5672573483'),(188,'Kieran','Kassulke','london34@larkin.info','7523736747'),(189,'Garth','Pagac','weldon.purdy@yahoo.com','1518741679'),(190,'Giovanna','McDermott','kerluke.rosendo@gmail.com','8678809222'),(191,'Asa','Reynolds','hheathcote@abbott.com','9071851376'),(192,'Oceane','Reichert','corine73@kuhlman.com','7215515731'),(193,'Lesly','Lynch','hickle.bernadine@hudson.biz','5250210237'),(194,'Dave','Deckow','aroberts@yahoo.com','5862240969'),(195,'Green','Blanda','bernier.abel@vonrueden.com','8756775648'),(196,'Colton','Little','hankunding@kunde.com','2932662533'),(197,'Jacklyn','Langosh','deanna71@hotmail.com','8004992980'),(198,'Lonnie','West','lgusikowski@tromp.net','3333458743'),(199,'Jayce','Dietrich','valerie85@littel.com','6739656782'),(200,'Ike','Shields','dereck.jones@gerlach.com','8945627714');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `owner`
--

DROP TABLE IF EXISTS `owner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `owner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `owner`
--

LOCK TABLES `owner` WRITE;
/*!40000 ALTER TABLE `owner` DISABLE KEYS */;
INSERT INTO `owner` VALUES (1,'user123','password123');
/*!40000 ALTER TABLE `owner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `physical_table`
--

DROP TABLE IF EXISTS `physical_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `physical_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `size` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `physical_table`
--

LOCK TABLES `physical_table` WRITE;
/*!40000 ALTER TABLE `physical_table` DISABLE KEYS */;
INSERT INTO `physical_table` VALUES (1,1,4),(2,2,4),(3,3,2),(4,4,8),(5,5,4),(6,6,2),(7,7,6),(8,8,4),(9,9,8),(10,10,4),(11,11,4),(12,12,6),(13,13,6),(14,14,2),(15,15,4),(16,16,6),(17,17,8),(18,18,2),(19,19,8),(20,20,6);
/*!40000 ALTER TABLE `physical_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start` varchar(25) NOT NULL,
  `end` varchar(25) NOT NULL,
  `size` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`),
  KEY `table_id` (`table_id`),
  CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`table_id`) REFERENCES `physical_table` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` VALUES (1,'1457334000','1457337600',8,140,19),(2,'1457334000','1457337600',8,28,17),(3,'1457334000','1457337600',5,79,16),(4,'1457337600','1457341200',3,184,1),(5,'1457337600','1457341200',7,9,19),(6,'1457337600','1457341200',7,53,17),(7,'1457341200','1457344800',8,141,19),(8,'1457341200','1457344800',4,77,1),(9,'1457341200','1457344800',2,64,6),(10,'1457344800','1457348400',5,8,16),(11,'1457344800','1457348400',7,83,19),(12,'1457344800','1457348400',4,49,10),(13,'1457344800','1457348400',8,118,17),(14,'1457348400','1457352000',2,186,14),(15,'1457348400','1457352000',2,130,3),(16,'1457348400','1457352000',2,30,6),(17,'1457348400','1457352000',4,183,1),(18,'1457348400','1457352000',7,172,19),(19,'1457352000','1457355600',7,158,19),(20,'1457355600','1457359200',2,152,14),(21,'1457355600','1457359200',4,51,1),(22,'1457355600','1457359200',7,155,19),(23,'1457355600','1457359200',4,66,2),(24,'1457359200','1457362800',3,134,1),(25,'1457359200','1457362800',6,31,16),(26,'1457359200','1457362800',4,127,2),(27,'1457359200','1457362800',1,147,6),(28,'1457359200','1457362800',2,123,3),(29,'1457362800','1457366400',5,50,16),(30,'1457362800','1457366400',6,55,20),(31,'1457366400','1457370000',6,120,16),(32,'1457366400','1457370000',1,86,14),(33,'1457366400','1457370000',5,89,20),(34,'1457366400','1457370000',5,59,13),(35,'1457370000','1457373600',8,171,19),(36,'1457370000','1457373600',7,34,17),(37,'1457373600','1457377200',7,56,19),(38,'1457373600','1457377200',3,6,1),(39,'1457373600','1457377200',3,7,2),(40,'1457373600','1457377200',4,25,10),(41,'1457420400','1457424000',3,106,1),(42,'1457420400','1457424000',6,102,16),(43,'1457420400','1457424000',5,159,20),(44,'1457424000','1457427600',2,165,14),(45,'1457424000','1457427600',5,76,16),(46,'1457424000','1457427600',1,191,3),(47,'1457427600','1457431200',1,197,14),(48,'1457427600','1457431200',1,17,3),(49,'1457431200','1457434800',8,65,19),(50,'1457431200','1457434800',1,62,14),(51,'1457434800','1457438400',4,131,1),(52,'1457434800','1457438400',2,149,6),(53,'1457434800','1457438400',1,196,14),(54,'1457434800','1457438400',3,119,10),(55,'1457438400','1457442000',2,73,14),(56,'1457438400','1457442000',5,178,16),(57,'1457438400','1457442000',2,67,3),(58,'1457438400','1457442000',7,82,19),(59,'1457442000','1457445600',7,26,19),(60,'1457445600','1457449200',6,103,16),(61,'1457445600','1457449200',7,96,19),(62,'1457449200','1457452800',3,189,1),(63,'1457449200','1457452800',7,105,19),(64,'1457449200','1457452800',4,20,2),(65,'1457452800','1457456400',4,132,1),(66,'1457452800','1457456400',6,176,16),(67,'1457456400','1457460000',7,194,19),(68,'1457456400','1457460000',8,113,17),(69,'1457456400','1457460000',3,115,10),(70,'1457460000','1457463600',2,74,14),(71,'1457460000','1457463600',4,161,1),(72,'1457460000','1457463600',8,160,19),(73,'1457506800','1457510400',5,148,16),(74,'1457506800','1457510400',4,92,1),(75,'1457506800','1457510400',2,190,6),(76,'1457510400','1457514000',1,22,14),(77,'1457510400','1457514000',7,156,19),(78,'1457510400','1457514000',2,93,3),(79,'1457514000','1457517600',2,71,14),(80,'1457514000','1457517600',7,170,19),(81,'1457514000','1457517600',3,88,1),(82,'1457517600','1457521200',6,169,16),(83,'1457517600','1457521200',2,138,14),(84,'1457517600','1457521200',7,91,19),(85,'1457521200','1457524800',3,142,1),(86,'1457521200','1457524800',3,38,10),(87,'1457524800','1457528400',6,181,16),(88,'1457524800','1457528400',6,23,20),(89,'1457528400','1457532000',2,11,14),(90,'1457528400','1457532000',3,121,1),(91,'1457528400','1457532000',4,41,10),(92,'1457528400','1457532000',5,19,16),(93,'1457532000','1457535600',5,16,16),(94,'1457532000','1457535600',2,145,14),(95,'1457532000','1457535600',1,150,3),(96,'1457535600','1457539200',2,70,14),(97,'1457535600','1457539200',6,104,16),(98,'1457539200','1457542800',7,99,19),(99,'1457539200','1457542800',6,110,16),(100,'1457539200','1457542800',7,81,17),(101,'1457539200','1457542800',5,10,12),(102,'1457542800','1457546400',4,5,1),(103,'1457542800','1457546400',3,185,10),(104,'1457542800','1457546400',3,4,2),(105,'1457542800','1457546400',4,69,15),(106,'1457546400','1457550000',3,1,1),(107,'1457546400','1457550000',6,48,16),(108,'1457546400','1457550000',1,199,6),(109,'1457546400','1457550000',4,107,2),(110,'1457593200','1457596800',1,95,14),(111,'1457596800','1457600400',5,87,16),(112,'1457600400','1457604000',7,125,19),(113,'1457600400','1457604000',1,151,14),(114,'1457600400','1457604000',4,60,1),(115,'1457604000','1457607600',8,126,19),(116,'1457604000','1457607600',7,136,17),(117,'1457607600','1457611200',8,154,19),(118,'1457607600','1457611200',3,144,1),(119,'1457611200','1457614800',3,58,1),(120,'1457611200','1457614800',6,137,16),(121,'1457614800','1457618400',2,54,14),(122,'1457618400','1457622000',5,167,16),(123,'1457618400','1457622000',4,146,1),(124,'1457618400','1457622000',4,117,2),(125,'1457622000','1457625600',5,35,16),(126,'1457622000','1457625600',8,47,19),(127,'1457625600','1457629200',5,3,16),(128,'1457625600','1457629200',7,108,19),(129,'1457625600','1457629200',8,40,17),(130,'1457629200','1457632800',3,36,1),(131,'1457629200','1457632800',8,188,19),(132,'1457632800','1457636400',2,192,14),(133,'1457632800','1457636400',6,39,16),(134,'1457632800','1457636400',8,78,19),(135,'1457679600','1457683200',7,33,19),(136,'1457679600','1457683200',3,15,1),(137,'1457679600','1457683200',8,111,17),(138,'1457683200','1457686800',1,42,14),(139,'1457683200','1457686800',4,68,1),(140,'1457683200','1457686800',3,180,10),(141,'1457683200','1457686800',4,168,2),(142,'1457686800','1457690400',8,182,19),(143,'1457686800','1457690400',6,27,16),(144,'1457686800','1457690400',8,44,17),(145,'1457690400','1457694000',2,164,14),(146,'1457690400','1457694000',6,129,16),(147,'1457694000','1457697600',8,163,19),(148,'1457694000','1457697600',8,37,17),(149,'1457694000','1457697600',2,75,18),(150,'1457694000','1457697600',7,94,9),(151,'1457697600','1457701200',6,177,16),(152,'1457697600','1457701200',8,2,19),(153,'1457697600','1457701200',1,187,18),(154,'1457701200','1457704800',4,43,1),(155,'1457701200','1457704800',1,198,6),(156,'1457704800','1457708400',1,29,14),(157,'1457704800','1457708400',4,143,1),(158,'1457704800','1457708400',6,193,16),(159,'1457704800','1457708400',5,124,20),(160,'1457708400','1457712000',8,98,19),(161,'1457708400','1457712000',8,90,17),(162,'1457712000','1457715600',4,45,1),(163,'1457715600','1457719200',6,12,16),(164,'1457715600','1457719200',6,174,20),(165,'1457719200','1457722800',7,195,19),(166,'1457766000','1457769600',3,162,1),(167,'1457766000','1457769600',6,52,16),(168,'1457769600','1457773200',5,18,16),(169,'1457769600','1457773200',6,157,20),(170,'1457773200','1457776800',8,80,19),(171,'1457776800','1457780400',2,61,14),(172,'1457780400','1457784000',1,166,14),(173,'1457780400','1457784000',3,24,1),(174,'1457780400','1457784000',7,139,19),(175,'1457780400','1457784000',2,109,6),(176,'1457784000','1457787600',1,85,14),(177,'1457784000','1457787600',5,175,16),(178,'1457784000','1457787600',4,46,1),(179,'1457784000','1457787600',8,57,19),(180,'1457787600','1457791200',8,100,19),(181,'1457787600','1457791200',4,200,1),(182,'1457787600','1457791200',2,101,6),(183,'1457791200','1457794800',3,122,1),(184,'1457791200','1457794800',2,14,6),(185,'1457794800','1457798400',6,116,16),(186,'1457794800','1457798400',5,133,20),(187,'1457794800','1457798400',5,97,13),(188,'1457798400','1457802000',4,32,1),(189,'1457798400','1457802000',3,135,10),(190,'1457798400','1457802000',4,128,2),(191,'1457802000','1457805600',7,179,19),(192,'1457802000','1457805600',4,112,1),(193,'1457802000','1457805600',7,13,17),(194,'1457805600','1457809200',6,173,16),(195,'1457805600','1457809200',8,63,19),(196,'1457805600','1457809200',2,21,18),(197,'1457805600','1457809200',6,153,20);
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `open` int(11) NOT NULL,
  `close` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `owner_id` (`owner_id`),
  CONSTRAINT `restaurant_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restaurant`
--

LOCK TABLES `restaurant` WRITE;
/*!40000 ALTER TABLE `restaurant` DISABLE KEYS */;
INSERT INTO `restaurant` VALUES (1,'Kreiger Inc',1,0,0);
/*!40000 ALTER TABLE `restaurant` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-09 16:21:08
