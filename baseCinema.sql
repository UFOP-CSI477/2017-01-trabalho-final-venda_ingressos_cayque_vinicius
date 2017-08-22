-- MySQL dump 10.13  Distrib 5.7.12, for osx10.9 (x86_64)
--
-- Host: 127.0.0.1    Database: cinema
-- ------------------------------------------------------
-- Server version	5.6.35

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
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (4,'/img/banner1.png','2017-08-21 00:59:09','2017-08-21 00:59:09'),(5,'/img/banner2.png','2017-08-21 00:59:28','2017-08-21 00:59:28'),(6,'/img/banner3.png','2017-08-21 00:59:38','2017-08-21 00:59:38');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carrinhos`
--

DROP TABLE IF EXISTS `carrinhos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrinhos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `sessao_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `carrinhos_sessao_id_foreign` (`sessao_id`),
  KEY `carrinhos_user_id_foreign` (`user_id`),
  CONSTRAINT `carrinhos_sessao_id_foreign` FOREIGN KEY (`sessao_id`) REFERENCES `sessaos` (`id`),
  CONSTRAINT `carrinhos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrinhos`
--

LOCK TABLES `carrinhos` WRITE;
/*!40000 ALTER TABLE `carrinhos` DISABLE KEYS */;
INSERT INTO `carrinhos` VALUES (11,1,2,1,'2017-08-21 01:31:23','2017-08-21 01:31:23'),(12,1,5,5,'2017-08-21 01:31:43','2017-08-21 01:31:43'),(13,1,6,3,'2017-08-21 01:32:04','2017-08-21 01:32:04'),(14,2,2,4,'2017-08-21 20:03:18','2017-08-21 20:03:18');
/*!40000 ALTER TABLE `carrinhos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filmes`
--

DROP TABLE IF EXISTS `filmes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `filmes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(70) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `duracao` varchar(20) NOT NULL,
  `sinopse` longtext NOT NULL,
  `elenco` varchar(200) NOT NULL,
  `diretor` varchar(50) NOT NULL,
  `classificacao` int(2) NOT NULL,
  `capa` varchar(50) NOT NULL,
  `trailer` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filmes`
--

LOCK TABLES `filmes` WRITE;
/*!40000 ALTER TABLE `filmes` DISABLE KEYS */;
INSERT INTO `filmes` VALUES (1,'Mulher Maravilha','Ação','02:21:00','Treinada desde cedo para ser uma guerreira imbatível, Diana Prince nunca saiu da paradisíaca ilha em que é reconhecida como princesa das Amazonas. Quando o piloto Steve Trevor se acidenta e cai em uma praia do local, ela descobre que uma guerra sem precedentes está se espalhando pelo mundo e decide deixar seu lar certa de que pode parar o conflito. Lutando para acabar com todas as lutas, Diana percebe o alcance de seus poderes e sua verdadeira missão na Terra.','Gal Gadot','Patty Jenkins',12,'https://goo.gl/G9gHF5','https://www.youtube.com/embed/bldAkEUANWA','2017-08-20 06:05:23','2017-08-17 20:34:17'),(2,'Nunca diga o seu nome','Terror','1h 41min','Três estudantes universitários decidem sair para acampar no tranquilo estado do Wisconsin, nos Estados Unidos. Mas os planos de terem alguns dias de diversão e descanso são interrompidos quando suas vidas se cruzam com o temido \"Bye Bye Man\", uma criatura mística e sobrenatural que acaba perseguindo-os. Agora eles vão ter que lutar para sobreviver, contra este que é a raiz de todos os atos maus do homem.','Douglas Smith,Lucien Laviscount,Carrie‑Anne Moss','Stacy Title',18,'https://goo.gl/o19f63','https://www.youtube.com/embed/D1cbyxoNmHs','2017-08-21 01:26:25',NULL),(3,'Festa da salsicha','Animação','1h 29min','Frank, a salsicha, e seus amigos tentam evitar serem comprados e comidos por humanos em um supermercado.','Seth Rogen,James Franco,Kristen Wiig','Conrad Vernon, Greg Tiernan',16,'https://goo.gl/JgzBE7','https://www.youtube.com/embed/FNP0N_QcfFU','2017-08-21 01:28:59',NULL),(4,'A Múmia','Suspense','1h 51min','Nas profundezas do deserto, uma antiga rainha cujo destino foi injustamente tirado está mumificada. Apesar de estar sepultada em sua cripta, ela desperta nos dias atuais. Com uma maldade acumulada ao longo dos anos, ela espelha terror desde as areais do Oriente Médio até os becos de Londres.','Jon Spaihts, Christopher McQuarrie, David Koepp, Dylan Kussman','Alex Kurtzman',16,'https://goo.gl/KBctqv','https://www.youtube.com/embed/vgoK2CtJwlY','2017-08-21 01:22:47','2017-08-20 01:38:48'),(5,'Logan','Ação','2h 21min','Em 2024, os mutantes estão em declínio e as pessoas não sabem o motivo. Uma organização está transformando as crianças mutantes em assassinas e Wolverine, a pedido do Professor Xavier, precisa proteger a jovem e poderosa Laura Kinney, conhecida como X-23. Enquanto isso, o vilão Nathaniel Essex amplia seu projeto de destruição.','Hugh Jackman, Patrick Stewart, Dafne Keen','James Mangold',16,'https://goo.gl/rvEA49','https://www.youtube.com/watch?v=RWSuAC9CYxo','2017-08-20 01:53:08','2017-08-20 01:53:08'),(6,'Os Guardiões','Ação','1h 40m','Em plena Guerra Fria, uma organização secreta chamada \"Patriota\" recrutou um grupo de super-heróis russos, modificando o DNA de quatro indivíduos, com o objetivo de defender o país de ameaças sobrenaturais. Arsus, Khan, Ler e Xenia representam os diferentes povos que compõem a União Soviética, e mantêm suas identidades bem guardadas para, também, não expor aqueles que têm a missão de proteger.','Sebastien Sisak, Anton Pampuchniy, Sanzhar Madiev','Sarik Andreasyan',16,'https://goo.gl/ZcE4kG','https://www.youtube.com/watch?v=MZGNLhFOoWc','2017-08-20 03:01:14','2017-08-20 03:01:14'),(7,'Os Smurfs e a Vila Perdida','Animação','1h 31m','Smurfette não está contente: ela começa a perceber que todos os homens do vilarejo dos Smurfs têm uma função precisa na comunidade, menos ela. Indignada, ela parte em busca de novas descobertas, e conhece uma Floresta Encantada, com diversas criaturas mágicas. Enquanto isso, o vilão Gargamel segue os seus passos.','Demi Lovato, Rainn Wilson','Kelly Asbury',0,'https://goo.gl/mSNvNF','https://www.youtube.com/embed/6BOJBUJt_tM','2017-08-21 01:05:32','2017-08-21 01:03:53'),(8,'Extraordinário','Romance','1h 40min','Auggie Pullman (Jacob Tremblay) é um garoto que nasceu com uma deformação facial. Pela primeira vez, ele irá frequentar uma escola regular, como qualquer outra criança. No quinto ano, ele irá precisar se esforçar para conseguir se encaixar em sua nova realidade.','Jacob Tremblay, Julia Roberts','Stephen Chbosky',10,'https://goo.gl/bf2r1k','https://www.youtube.com/embed/7lyJtY_TPvk','2017-08-21 01:09:35','2017-08-21 01:09:35'),(9,'Liga da Justiça','Ação','Em breve','Impulsionado pela restauração de sua fé na humanidade e inspirado pelo ato altruísta do Superman (Henry Cavill), Bruce Wayne (Ben Affleck) convoca sua nova aliada Diana Prince (Gal Gadot) para o combate contra um inimigo ainda maior, recém-despertado. Juntos, Batman e Mulher-Maravilha buscam e recrutam com agilidade um time de meta-humanos, mas mesmo com a formação da liga de heróis sem precedentes - Batman, Mulher-Maraviha, Aquaman (Jason Momoa), Cyborg (Ray Fisher) e The Flash (Ezra Miller) -, poderá ser tarde demais para salvar o planeta de um catastrófico ataque.','Ben Affleck, Gal Gadot','Zack Snyder',12,'https://goo.gl/gC36Fd','https://www.youtube.com/embed/AkPVYhf5ZeI','2017-08-21 01:14:54','2017-08-21 01:14:54'),(10,'Pica-Pau - O Filme','Animação','Em breve','O brincalhão e travesso Pica-Pau está metido em mais uma de suas divertidas brigas por território, e dessa vez os inimigos são o vigarista Lance Walters (Timothy Omundson) e sua namorada Brittany (Thaila Ayala). Eles estão determinados a construir a sua grande casa dos sonhos mas, para isso, precisam derrubar a casa do Pica-Pau, que promete não deixar barato.','Thayla Ayala, Timothy Omundson','Alex Zamm',0,'https://goo.gl/Pud35m','https://www.youtube.com/embed/JZcPm3qAqJA','2017-08-21 01:19:59','2017-08-21 01:19:59');
/*!40000 ALTER TABLE `filmes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proximos`
--

DROP TABLE IF EXISTS `proximos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proximos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filme_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `proximos_filme_id_foreign` (`filme_id`),
  CONSTRAINT `proximos_filme_id_foreign` FOREIGN KEY (`filme_id`) REFERENCES `filmes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proximos`
--

LOCK TABLES `proximos` WRITE;
/*!40000 ALTER TABLE `proximos` DISABLE KEYS */;
INSERT INTO `proximos` VALUES (4,8,'2017-08-21 01:09:57','2017-08-21 01:09:57'),(5,9,'2017-08-21 01:15:14','2017-08-21 01:15:14'),(6,6,'2017-08-21 01:15:28','2017-08-21 01:15:28'),(7,10,'2017-08-21 01:20:35','2017-08-21 01:20:35'),(8,4,'2017-08-21 20:05:12','2017-08-21 20:05:12');
/*!40000 ALTER TABLE `proximos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessaos`
--

DROP TABLE IF EXISTS `sessaos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filme_id` int(11) NOT NULL,
  `dublado` tinyint(1) NOT NULL,
  `legendado` tinyint(1) NOT NULL,
  `data` varchar(10) NOT NULL,
  `hora` varchar(8) NOT NULL,
  `local` varchar(200) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sessaos_filme_id_foreign` (`filme_id`),
  CONSTRAINT `sessaos_filme_id_foreign` FOREIGN KEY (`filme_id`) REFERENCES `filmes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessaos`
--

LOCK TABLES `sessaos` WRITE;
/*!40000 ALTER TABLE `sessaos` DISABLE KEYS */;
INSERT INTO `sessaos` VALUES (1,1,1,0,'23/07/2017','20:30','ICEA',20.00,'2017-08-20 05:53:27','2017-08-20 04:20:09'),(2,1,1,0,'23/08/2017','21:00','ICEA',25.00,'2017-08-20 04:55:12','2017-08-20 04:55:12'),(3,3,1,1,'12/08/2017','22:00','ICEA',23.00,'2017-08-20 04:57:50','2017-08-20 04:57:50'),(5,7,1,0,'21/08/2017','17:00','ICEA',12.00,'2017-08-21 01:06:22','2017-08-21 01:06:22'),(6,4,0,1,'25/08/2017','19:50','ICEA',18.00,'2017-08-21 01:23:27','2017-08-21 01:23:27'),(7,2,0,1,'23/08/2017','22:00','ICEA',20.00,'2017-08-21 01:25:47','2017-08-21 01:25:47'),(8,8,0,1,'21/08/2017','22:00','ICEA',20.00,'2017-08-21 20:07:13','2017-08-21 20:07:13');
/*!40000 ALTER TABLE `sessaos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `cpf` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `cep` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Vinicius','viniciusarantes1@live.com','$2y$10$8tLty8JAz2ZuLyzVT1BhVOlskRDfn4pKbB8yod.wvrzbCuSGlomEe','jJiLdEtuQqTef0UEM6gt4r5qaQ9RvhWBclfz946NSxVToau93pqHeUlU44EP','2017-08-14 22:20:29','2017-08-19 00:17:37',2,'','','','',0,'0'),(2,'Vinicius Arantes','viniciusarantes2@live.com','$2y$10$vZZJhekdR6kl6fBuZCmP4uuOKwmyJpYshLoNiey9/AIoVycV6pJIK','okhqNCDPzb9PkkB4IGV4Hr1r8HYvO5fjqvwpoamKsADhA1Bkpd9xuwfit8hB','2017-08-19 13:14:42','2017-08-19 13:14:42',1,'113','AP','Catas Altas','630',123,'35969000');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'cinema'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-21 21:03:35
