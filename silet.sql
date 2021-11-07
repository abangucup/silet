-- MariaDB dump 10.19  Distrib 10.5.11-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: silat
-- ------------------------------------------------------
-- Server version	10.5.11-MariaDB-1:10.5.11+maria~focal

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `masyarakat`
--

DROP TABLE IF EXISTS `masyarakat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `masyarakat` (
  `nik` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nik`),
  UNIQUE KEY `masyarakat_email_unique` (`email`),
  UNIQUE KEY `masyarakat_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `masyarakat`
--

LOCK TABLES `masyarakat` WRITE;
/*!40000 ALTER TABLE `masyarakat` DISABLE KEYS */;
INSERT INTO `masyarakat` VALUES ('172316234304','MEYKO MOU','meykomou@gmail.com','meyko','$2y$10$clLzoj3mTrb4vvqKSJ3GxeHQyShdXXJVxWokIunI3SwWYoC73loPG','0435834433','2021-08-07 06:44:26','2021-08-07 06:44:26'),('172316235462','REFLINDA MOBI','reflindamobi@gmail.com','reflindamobi','$2y$10$o4oez3b06lheWbmOTpLWSudJVinXdwsb72O7jzrU1/y00zO2k745S','04358531097','2021-08-07 08:12:25','2021-08-07 08:12:25'),('172316235851','TRISNA RAHIM BASIRU','trisnarahimbasiru@gmail.com','trisnarahimbasiru','$2y$10$In6a.CmUw9bRljdoL9VikOptm7dqSlLkGrxe/V9HMoP93lZFUDj26','04358534423','2021-08-07 08:09:14','2021-08-07 08:09:14'),('172316236113','ARMAN MUSTAFA','armanmutafa@gmail.com','arman','$2y$10$UjezSEEDNIJHy4sLmLA69Or6fPUT1ODKBygBDqbx18UAxYOcWSumS','0435834388','2021-08-07 06:43:43','2021-08-07 06:43:43'),('172316236312','KRIS SULTAN BOTUTIHE','krissultanbotutihe@gmail.com','krissultanbotutihe','$2y$10$cT0gUicP2cn/H/lf8zEQQ.ZwLZu8oqh5pyu/ScAXDwCvlGp7YvXLC','04358584213','2021-08-07 08:51:57','2021-08-07 08:51:57'),('172316236465','IRWAN DAUD','irwandaud@gmail.com','irwan','$2y$10$yLKDOv7/SjdeYVjVGVx99OlXssJkXsBmJWoj1VaivLYQOdVIRE0E2','0435834922','2021-08-07 06:44:58','2021-08-07 06:44:58'),('172316236474','ARYATI LIMONU','aryantilimonu@gmail.com','aryantilimonu','$2y$10$FPhSfChZR8XFxIJSbEhPAe38E8fVf1N/Lyfo2D0mnju1m6viK8nl.','0435833260','2021-08-07 08:50:51','2021-08-07 08:50:51'),('172316236478','SUKRIYANTO MOINTI','sukriyantomointi@gmail.com','sukriyantomointi','$2y$10$d7BjGYhDGem7jx6T5gGv4uzS/5QI/0HpnniuxpOHfwLMpb9JP9A9W','04358582112','2021-08-07 08:51:31','2021-08-07 08:51:31'),('172316236516','FIFI LANTANG','fifilantang@gmail.com','fifilantang','$2y$10$1G4gpBWeCh6dchDmf6zlm.93tdggbUXau6qxUzTqcu3bJNGl5v0e2','04358580120','2021-08-07 14:57:46','2021-08-07 14:57:46'),('172316236593','MAHMUD WAHID','mahmudwahid@gmail.com','mahmudwahid','$2y$10$EXhXdl6YLWT3mySJhFrjg.Dg.XscJ1HaV3jRWI.ghKOeby0fjj4za','04358537071','2021-08-07 06:46:24','2021-08-07 06:46:24'),('172316236877','NURMIN HAMUDA','nurminhamuda@gmail.com','nurminhamuda','$2y$10$i/UPZ/48X1Ft00TuuObT0OERNG/5zqCDVfUCOHZKVhynkNz4.mHri','04358584035','2021-08-07 09:00:54','2021-08-07 09:00:54'),('172316237145','MUHTAR LAJIJI','muhtarlajiji@gmail.com','muhtarlajiji','$2y$10$Ydi4e7rXtSCbWaxTLpNhjuPki19UjYSTors6oZwPZvAIfpbYCQMou','0435833808','2021-08-07 08:48:45','2021-08-07 08:48:45'),('172316237189','ESTER PANIGORO','esterpanigoro@gmail.com','esterpanigoro','$2y$10$T1.8UNeHbff.mKgx7bpbo.DAYNb/O0sE0y3cudVAzc8zCjNM76EM6','0435833277','2021-08-07 08:49:19','2021-08-07 08:49:19'),('172316237444','INDRIYATI DATAU','indriyatidatau@gmail.com','indriyatidatau','$2y$10$Ql4HCZxwEi39VBJuX1lA6.j6AFfqKHgDs/aqoTmurwwyaGU7aLP4u','04358536423','2021-08-07 08:42:59','2021-08-07 08:42:59'),('172316237486','SUNARTI MAMULA','sunartimamula@gmail.com','sunartimamula','$2y$10$KYGvKzH1SrmsxfcVR3n/SObpCLgSRK2aoqTl6dHq4pJz9mijKGjxe','04358531869','2021-08-07 08:11:25','2021-08-07 08:11:25'),('172316237625','SRIWAHYUNI MUSA','sriwahyunimusa@gmail.com','sriwahyunimusa','$2y$10$Sr.INSTgTtNdz5kquvaNfeoa4TxADlakpYUBm3HOUBF3dLC2Gz4xu','04358530693','2021-08-07 08:09:48','2021-08-07 08:09:48'),('172316237921','ANTON PANTO,ST','antonpanto@gmail.com','antonpanto','$2y$10$WdBPZwdH..M91nrr3zFPEumzd/mrZ/l/YC/98OTybbu7OyfZdTvf6','04358525396','2021-08-07 14:49:43','2021-08-07 14:49:43'),('172316237924','ROY DJAMALU','roydjamalu@gmail.com','roydjamalu','$2y$10$B7pijAeI211REn2uVIbCYuUbadMw5WLA20cFJ87/9R/4MpvKTa3I.','04358527900','2021-08-07 06:45:36','2021-08-07 06:45:36'),('172316238211','TAUFIK AHMAD','taufikahmad@gmail.com','taufikahmad','$2y$10$8vR5hHVwz3lpUSjd8O.yuuMyb6xVV8z20xAy3HN7/Zm5ixgkEbAz6','04358583833','2021-08-07 09:03:46','2021-08-07 09:03:46'),('172316238361','POSKESDES PLAMBOYAN','poskesdesplamboyan@gmail.com','poskesdesplamboyan','$2y$10$BLYH2UrReEPAKx2CA0HpdexpbXvRFhilZxWIW7FM4K8gBHr2Ky8Gm','04358530790','2021-08-07 08:10:57','2021-08-07 08:10:57'),('172316238558','CINDI ANGGRENA HENGULI','cindianggrenahenguli@gmail.com','cindianggrenahenguli','$2y$10$vVAY3Tsik/wwYpwL9FLXIeMc78cOaQ5rkqmT45piszfYfw70kZdp2','04358583015','2021-08-07 14:50:12','2021-08-07 14:50:12'),('172316238582','HJ. HATIDJAH DJAKARIA','hatidjahdjakaria@gmail.com','hatidjahdjakaria','$2y$10$O5UdDvpJBy05Z.hkRqvyGehx6l8jipOahRPs738MGVMQWvvA7RX7O','04358529967','2021-08-07 14:56:56','2021-08-07 14:56:56'),('172316238586','ISMAIL ALI','ismailali@gmail.com','ismailali','$2y$10$wND/.GfP7uH7NVCU27DzHO0Iwi.ZIV.38cawnCNG2wBWq4KLEtztK','04358582003','2021-08-07 08:44:56','2021-08-07 08:44:56'),('172316238798','HIMAWAN S. UMAR','himawanumar@gmail.com','himawanumar','$2y$10$xvsqNOYUhjKEp5eYoOt31e8ij9zkTV.8rufyB39RPAzlQV0PTIwVe','04358530197','2021-08-07 14:46:51','2021-08-07 14:46:51'),('172316238874','JENI TARUANI','jenitaruani@gmail.com','jenitaruani','$2y$10$U.x1DY85DSwUC0jsOUFqq.DGOJrbp2apB096i0.yfV/eMoSKOAEOO','04358536133','2021-08-07 09:04:47','2021-08-07 09:04:47'),('172316238893','FITRI USMAN','fitriusman@gmail.com','fitriusman','$2y$10$koSJgqZVO/qvHlX7ar5JR.TGgi2W74WbVO71DotVOJ5Mufb0DkQaW','04358530413','2021-08-07 09:02:18','2021-08-07 09:02:18'),('172316238901','ULFA AKUBA S.PD','ulfaakuba@gmail.com','ulfaakuba','$2y$10$ENY9xFWuP4FZH1STx5Gc/eyofaUMNX.kZ1IRK0x8MC3gAS0J/moRS','04358539067','2021-08-07 09:01:19','2021-08-07 09:01:19'),('172316239024','YULIANA RAHIM','yulianarahim@gmail.com','yulianarahim','$2y$10$p/wGMHzgQ8Nlbx0x1cFFxue7nb5CtcFa4NKsfNf7qEyKMX6PzPHvu','0435833836','2021-08-07 08:49:51','2021-08-07 08:49:51'),('172316239110','NUR OKTAVIANI YUSUF','nuroktavianiyusuf@gmail.com','nuroktavianiyusuf','$2y$10$1EeeeEJYF3HQE7bDntfjneQY3OfrPB1l3ZpvdOt9M6grwMLIgQFqy','04358534317','2021-08-07 08:42:33','2021-08-07 08:42:33'),('172316239341','ISWANTO BAKAR','iswantobakar@gmail.com','iswantobakar','$2y$10$2Oa2RowNLTfWmvIRT1YpjeUl.KwHwP3pYC1a.8p/YEIOySWxWzVv6','04358580242','2021-08-07 14:57:23','2021-08-07 14:57:23'),('172316239360','HASNI ABD GANI','hasnigani@gmail.com','hasnigani','$2y$10$OKs9rV/kng1Dm6j2QAinAeGsLVvK2KwesgzB/O7ngw5B798Dpt7FC','04358581700','2021-08-07 08:44:07','2021-08-07 08:44:07'),('172316239476','ISWANTO BOTUTIHE','iswantobotutihe@gmail.com','iswantobotutihe','$2y$10$7ybGuTl9x501xcqwH2QlV.WnAYANXnRiw8xX8u1bB7lkyvN1Ktloi','04358584655','2021-08-07 08:52:22','2021-08-07 08:52:22'),('172316239603','YASIN PAKAYA','yasinpakaya@gmail.com','yasinpakaya','$2y$10$Jur.tY8NF3sKCs2LCa6XvOXt4NmiQlQ3Ldi8HcBy67o7BkFQm9h0a','04358583567','2021-08-07 09:04:17','2021-08-07 09:04:17'),('172316239711','ABDUL RAHMAN HASAN','abdulrahmanhasan@gmail.com','abdulrahmanhasan','$2y$10$LCywq9A39z9Vym/CWVkdYexa9yK2u7xB1PiAOP1KGDkx6MY/BNn/u','04358582193','2021-08-07 08:45:23','2021-08-07 08:45:23'),('172316239756','FAISAL SULEMAN','faisalsuleman@gmail.com','faisalsuleman','$2y$10$6u0xIQGAT8w6NUz2F8EiZuSa/NGyC81ar3vSQxb.lnti8nyfsBWvy','04358584166','2021-08-07 08:47:06','2021-08-07 08:47:06'),('172316239858','FICKRIYANTO SAIPI','fickriyantosaipi@gmail.com','fickriyantosaipi','$2y$10$KQvT82DPekKO9OQWqshcku.fF1WxjZAe7/RwFDyGvH3Frer5OW6Q2','0435833870','2021-08-07 08:50:23','2021-08-07 08:50:23'),('172316239940','NURYANI HADIA','nuryanihadia@gmail.com','nuryanihadia','$2y$10$KbxmbdiGTxPL5gP50YOHU.YKxC9DSq9mUnQ8BNv/IiFRGmMQKmotG','04358529029','2021-08-07 14:50:46','2021-08-07 14:50:46'),('172316240046','AFIZUL HIDAYAT DARMO','afizulhidayatdarmo@gmail.com','afizulhidayatdarmo','$2y$10$hWY1B6omuj.B9Ru0MbJ5X.bJ3BOb9Zd36xvA9Ashe7O8Wcf6BRhJ6','04358530447','2021-08-07 09:02:45','2021-08-07 09:02:45'),('172316240164','STEVY AGUSTIAN POU','stevyagustianpou@gmail.com','stevyagustianpou','$2y$10$p02RJN31/Zs65kHVMCUkGuTyHq1.dTE7mAPG2Y06E/FMm1tjTcuLS','04358537057','2021-08-07 08:46:30','2021-08-07 08:46:30'),('172316240314','MARYAM ABDULLAH','maryamabdullah@gmail.com','maryamabdullah','$2y$10$4WuQJwV8kgPy2atmEqTq5.lhovgH8nJf68saEkUg5CUnZvzC5BpGW','04358531477','2021-08-07 08:12:49','2021-08-07 08:12:49'),('172316240478','FRIDA WARTABONE','fridawartabone@gmail.com','fridawartabone','$2y$10$7UlqYKatW4BcJz.tg3.uh.v5mkjF0sskb9J/Cu0PTTCQO3LQYEzU2','04358539199','2021-08-07 09:03:13','2021-08-07 09:03:13'),('172316240517','SARDA TOMELO','sardatomelo@gmail.com','sardatomelo','$2y$10$751ArB/EdZTOuR6i7bp4b.r3UvDEqlS.yF6JXXJkpoO73gphk3uU.','04358580036','2021-08-07 08:47:32','2021-08-07 08:47:32'),('172316240678','HARYANTI','haryanti@gmail.com','haryanti','$2y$10$fWTgw3g8Fu/Nuks33WIJiOYig9aq6SAO4x/ac/wZW5H9WTf4KV1a6','04358535440','2021-08-07 08:13:20','2021-08-07 08:13:20'),('172316802530','BAKRI USMAN','bakriusman@gmail.com','bakriusman','$2y$10$E9dCDXmy0JWYd7uQPuZ0zOuj7zUUaBleYqlKmieEMcQj2CUTqAnl2','04358364333','2021-08-07 14:56:18','2021-08-07 14:56:18'),('172316803373','RUSLI ZUBAIR GOBEL','ruslizubairgobel@gmail.com','ruslizubairgobel','$2y$10$tTtJ/yTjm/lpbTc.Td6I1ekNtZxIcoxXNF.JWch36R/uvmlpIzWtK','04358363033','2021-08-07 14:44:47','2021-08-07 14:44:47'),('172316810058','YOPI MAKMUR','yopimakmur@gmail.com','yopimakmur','$2y$10$mhiq.F07/djjmsFjDrFxmuPuQbrQrQ2abBk0nDi2TS333lQQPImq2','04358532321','2021-08-07 14:46:05','2021-08-07 14:46:05'),('172316810366','ISMAIL ABDUL LATIF','ismailabdullatif@gmail.com','ismailabdullatif','$2y$10$hrnMbQmelAie63krEnQ34.3Cqwp5EyRI85fMBlntpiTjA93Lim1Ba','04358582148','2021-08-07 14:52:34','2021-08-07 14:52:34'),('172316810406','SYARIFUDIN PANIGORO','syarifudinpanigoro@gmail.com','syarifudinpanigoro','$2y$10$zM6fxX5.2cn/aiW/ZpV4oOWDHxi5h3VR.A.QC5OqpkNDWnzYoqv4e','04358532247','2021-08-07 14:53:33','2021-08-07 14:53:33'),('172316810564','MOHAMAD MIKRAJ BOTUTIHE','mohamadmikrajbotutihe@gmail.com','mohamadmikrajbotutihe','$2y$10$dQP2OAoGB/BfxgkypwJynutxqtTCryNvHf59GxJ4fK3NTysztpfZO','04358582163','2021-08-07 08:55:12','2021-08-07 08:55:12'),('172316811126','SANTO A DAUD','santodaud@gmail.com','santodaud','$2y$10$G7snZV7EEC18VuzpvFk/I.JyST9/rfED7jq./hrI/RrRBh.7.6Ti2','04358534021','2021-08-07 08:59:05','2021-08-07 08:59:05'),('172316811148','KASIM HUSAIN','kasimhusain@gmail.com','kasimhusain','$2y$10$cTYp89ZVYxjM5Fp9o/B5.eCb4oZpablOq.r5UspTabXfIiD4kmBTW','04358529122','2021-08-07 08:58:39','2021-08-07 08:58:39'),('172316811352','RAHMAT ISWANTO IDRUS','rahmatiswantoidrus@gmail.com','rahmatiswantoidrus','$2y$10$Zp2atm4iWSwvWNFmPCFtFO9Dtbi7p1PiJTzQRSpjsllzoa4bL6Mbq','04358580020','2021-08-07 08:48:16','2021-08-07 08:48:16'),('172316811537','MUSTAPA ABDUL GANI,ST','mustapaabdulgani@gmail.com','mustapaabdulgani','$2y$10$82dT1glaJs/54XSz565XNeApRMEppsmPZEhyktii1FiPBNS7qRF4q','04358534088','2021-08-07 14:47:17','2021-08-07 14:47:17'),('172316812147','FATMA HADJU','fatmahadju@gmail.com','fatmahadju','$2y$10$C1JbihKUlsj1pV/cBxlSl.1EEZKiArsCzMBZ9p7gGJk9meK1beRuS','04358529161','2021-08-07 08:58:13','2021-08-07 08:58:13'),('172316812275','CHANDRA UNA','chandrauna@gmail.com','chandrauna','$2y$10$LOUQv6GbfhWdS7hpnwytyeEzk7Sxb0Fyf9YvvnTvPhLSHHfZEK4lG','04358530178','2021-08-07 14:51:28','2021-08-07 14:51:28'),('172316812352','HARRY AGUNG TALANI','harriagungtalani@gmail.com','harriagungtalani','$2y$10$XdIFdEGmJo/WWh1cpkB58.RWAR008sgdI.NIy4yGZK/34wDC2jhIG','04358584511','2021-08-07 14:53:07','2021-08-07 14:53:07'),('172316812684','NURLELA HALUBANGGA','nurlelahalubangga@gmail.com','nurlelahalubangga','$2y$10$ot.Nf3qLE9mNljYdqQ6Owe/hL4REKghXnGnulm.Pzkg.r/v0XLPoa','04358582133','2021-08-07 08:54:19','2021-08-07 08:54:19'),('172316813255','AGUS DJAFAR','agusdjafar@gmail.com','agusdjafar','$2y$10$RGlw/.CWFYRJPjwGj0hIw.zlbcpLL/8xu8A1HohlsVCkyPHjWO/Lm','04358536464','2021-08-07 15:00:03','2021-08-07 15:00:03'),('172316813270','HANUM HABIBIE','hanumhabibie@gmail.com','hanumhabibie','$2y$10$Z4enBG3fAzPlvDFBkogwpujjtJMAGnq5CmAz1JfcyGCAF1CcMCYKu','04358536111','2021-08-07 14:47:44','2021-08-07 14:47:44'),('172316813466','SIANE HASAN','sianehasan@gmail.com','sianehasan','$2y$10$aymCPrHyd09ALQqDILshFeYCJedPqZZxP7Cf43tU6MKAGvZxuulP.','04358582509','2021-08-07 14:45:09','2021-08-07 14:45:09'),('172316813660','YUZAR LAYA','yuzarlaya@gmail.com','yuzarlaya','$2y$10$kZIkzuhNQUvuhgKzLLOLPOZQJcTQImUK9G5tmIudV3g/bgoIJz60C','04358536167','2021-08-07 14:45:35','2021-08-07 14:45:35'),('172316813932','DELLA ULOLI','dellauloli@gmail.com','dellauloli','$2y$10$sTpw3pWl1JVk6J0UL6f8yeXtYIOWbPQkVJsDzOzv5J9eXcLacNTVG','04358534241','2021-08-07 14:54:19','2021-08-07 14:54:19'),('172316814182','DEWI SARWIYAH','dewisarwiyah@gmail.com','dewisarwiyah','$2y$10$OSUIWMJfFIgkVHCToXjojuNtSAROI8eo25gy8xxS66t9GTeoRjr5W','04358532060','2021-08-07 08:52:48','2021-08-07 08:52:48'),('172316814641','TAUFIK MOOWAGO','taufikmoowago@gmail.com','taufikmoowago','$2y$10$McFFgAHiV2MxC9ia7RPbbO3pKw7PPxZDWuN9GyJcZdYxJ9hU1MIYW','04358529293','2021-08-07 08:59:46','2021-08-07 08:59:46'),('172316814992','RIZAL MASIAGA','rizalmasiaga@gmail.com','rizalmasiaga','$2y$10$4Cj8hFJ1T.LzuFP85hD9VubLU59g4h8WHUd0lzkbsEtq.0a04uaWO','04358536297','2021-08-07 15:00:32','2021-08-07 15:00:32'),('172316815375','HIDAYAT HIMAM','hidayathimam@gmail.com','hidayathimam','$2y$10$LCFDvGJTteWPnQyI1Y7eM.unB31kN0RcUq6UugNObBB5Qo.xTmDi.','04358530706','2021-08-07 14:53:59','2021-08-07 14:53:59'),('172316815898','RISMAN ALI','rismanali@gmail.com','rismanali','$2y$10$M.h50gqIl4APW.JjpG5DYOJRYImoXQSKk/icNCgZ6fB55qHGDKouS','04358534362','2021-08-07 14:59:24','2021-08-07 14:59:24'),('172316815900','SULASTRI ABDULLAH','sulastriabdullah@gmail.com','sulastriabdullah','$2y$10$.VDULQbZMH9zyzf.7uJlB.7vRiNkLB3jdxrqSceKHu/92c0kGy/Om','04358583309','2021-08-07 14:49:12','2021-08-07 14:49:12'),('172316816379','ADITYA KURNIAWAN ADAM','adityakurniawanadam@gmail.com','adityakurniawanadam','$2y$10$rhE0dXQ5tb/W42MfA0F7JuMsv.4KLINRKFNOPBp6EIrB29BAZTGbu','04358536427','2021-08-07 14:59:03','2021-08-07 14:59:03'),('172316816724','JHON TANGAHU','jhontangahu@gmail.com','jhontangahu','$2y$10$3HSJaxWn.OCW3zCDSdAoa.jV.qrp7XX9v944O0o0nSU9ah3IswmIy','04358529241','2021-08-07 14:51:49','2021-08-07 14:51:49'),('172316816832','FIKRAN ABDULLAH','fikranabdullah@gmail.com','fikranabdullah','$2y$10$rwf1mOuGcOP0JUw5BlH4/u/bQUNCIAvp1MX8MNyZjahgfaelyxb5.','04358530130','2021-08-07 14:54:51','2021-08-07 14:54:51'),('172316817094','UPIN','upin@gmail.com','upin','$2y$10$QG7HsBf3JcwpOcaHKb7fM.jikDKNpJqXyRia3W/fF8oLY3rRKoiF6','04358536232','2021-08-07 14:48:21','2021-08-07 14:48:21'),('172316817120','ARIFIN HADJU','arifinhadju@gmail.com','arifinhadju','$2y$10$M5hpXbc1P0yjLCqf2U.XgeTes9UcH2COmIbjX/H5X0fH5AD7goF36','04358580023','2021-08-07 08:53:44','2021-08-07 08:53:44'),('172316817813','ARYAN SULEMAN','aryansuleman@gmail.com','aryansuleman','$2y$10$6ao9HDBz7C0zXXyxWNtWK.Str7lI8ITrD5QYdT32/yti8C.Itvuo2','04358536789','2021-08-07 15:00:56','2021-08-07 15:00:56'),('172316818024','SALMA PANTU','salmapantu@gmail.com','salmapantu','$2y$10$EUohOcad4i5MdJIKxYMfYOLDdftoPIsbxbp0WKg62ygkJXKXJIYMu','04358584221','2021-08-07 08:53:21','2021-08-07 08:53:21'),('172316818570','RUDIS BONEBOLANGO','rudisbonebolango@gmail.com','rudisbonebolango','$2y$10$phJx41aMfgvmIX6TuIgnleOqNcoOD06XkGnCHw9ApL6ddH0SUAnJa','04358583824','2021-08-07 14:58:30','2021-08-07 14:58:30'),('172316819264','HINDRA SULEMAN','hindrasuleman@gmail.com','hindrasuleman','$2y$10$a1dtRnRDmOuJXZwBuoLfI.d9r5sCFf.OHDt3xRL5yzXeEt0mD28Da','04358529309','2021-08-07 09:00:19','2021-08-07 09:00:19'),('172318218695','SELVIYANTI R TOMA','selviyantitoma@gmail.com','selviyantitoma','$2y$10$m9NGLpWKwWouzfhCTA/n1eTzmfDJwd5vhDgSupTpxr4wXXj/p370i','04358690002','2021-08-07 09:01:52','2021-08-07 09:01:52'),('531418013','Salman Mustapa','salmanmustapa1310@gmail.com','salmen','$2y$10$/h3h1HCxU3rOhv5MDvb9P.VpoJ1Y.URXNkVpsqwZBaFM1t/Nhpl36','08531418013','2021-07-29 16:52:52','2021-07-29 16:52:52'),('531418026','Nur Naningsi Mustapa','nurnaningsimustapa04@gmail.com','sinta','$2y$10$xzbLLUicqU6OJ0E3cWgOQu5Za1b7LNAx9Pgp0SUnNx8RaVM.53aZW','08531418026','2021-07-29 18:18:10','2021-07-29 18:18:10');
/*!40000 ALTER TABLE `masyarakat` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_05_30_023828_create_masyarakats_table',1),(5,'2021_05_30_025000_create_pengaduans_table',1),(6,'2021_05_30_030013_create_petugas_table',1),(7,'2021_05_30_030129_create_permintaans_table',1),(8,'2021_05_30_030622_create_tanggapans_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengaduan`
--

DROP TABLE IF EXISTS `pengaduan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengaduan` (
  `pengaduan_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tgl_pengaduan` datetime NOT NULL,
  `nik` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_pengaduan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_pengaduan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','proses','selesai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pengaduan_id`),
  KEY `pengaduan_nik_foreign` (`nik`),
  CONSTRAINT `pengaduan_nik_foreign` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengaduan`
--

LOCK TABLES `pengaduan` WRITE;
/*!40000 ALTER TABLE `pengaduan` DISABLE KEYS */;
INSERT INTO `pengaduan` VALUES (1,'2021-07-30 08:53:28','531418013','ini pengaduan','ini isi pengaduan','di alamat pengadu','assets/pengaduan/T2e9Rs7ZDp5ZTZ4PQgectvRjuauOEB6yu7DmjrH7.jpg','proses','2021-07-30 00:53:28','2021-07-29 17:48:32'),(2,'2021-07-30 09:04:10','531418013','judul pengaduan','isi pengaduan','alamat pengaduan','assets/pengaduan/kW78Kk8P5D1OQtjbqlwvHInmPMVZ0SDMJuAEA0sh.jpg','proses','2021-07-30 01:04:10','2021-07-29 18:29:12'),(3,'2021-07-30 01:15:57','531418013','judul aduan 3','isi aduan 3','alamat aduan 3','assets/pengaduan/uMUwAubCjg9rq3HV1x3REfADXgPXSFKyvgJjZU6d.jpg','0','2021-07-30 05:15:57','2021-07-30 05:15:57'),(4,'2021-07-30 01:21:03','531418013','judul aduan 3','isi aduan 3','alamat aduan 3','assets/pengaduan/El7yO7CcyThEQHeLCEcNlDZyNLTRuMuUnuxCXbjV.jpg','0','2021-07-30 05:21:03','2021-07-30 05:21:03'),(5,'2021-07-30 01:23:57','531418013','judul aduan 3','isi aduan 3','alamat aduan 3','assets/pengaduan/ok1va2Tw9gKw7TRPPJbo8oGp3r8dnZdcjLvg73mr.jpg','0','2021-07-30 05:23:57','2021-07-30 05:23:57'),(6,'2021-07-30 01:25:56','531418013','judul aduan 3','isi aduan 3','alamat aduan 3','assets/pengaduan/anSxvjGQmHSds7IWcjgXu5qqtwTUU4QYJjEJMs3Y.jpg','0','2021-07-30 05:25:56','2021-07-30 05:25:56'),(7,'2021-07-30 01:26:06','531418013','judul aduan 3','isi aduan 3','alamat aduan 3','assets/pengaduan/PQFCTGsyMRtKtqNGqtwCdMesaK7uirxpMkVVoDg7.jpg','0','2021-07-30 05:26:06','2021-07-30 05:26:06'),(8,'2021-07-30 01:29:05','531418013','judul aduan 3','isi aduan 3','alamat aduan 3','assets/pengaduan/0XF5rMo0mM80BFU5Nq1OBce15dkvBmNc56JFxepL.jpg','selesai','2021-07-30 05:29:05','2021-08-07 20:17:33');
/*!40000 ALTER TABLE `pengaduan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permintaan`
--

DROP TABLE IF EXISTS `permintaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permintaan` (
  `permintaan_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tgl_permintaan` datetime NOT NULL,
  `nik` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_permintaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_permintaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','proses','selesai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`permintaan_id`),
  KEY `permintaan_nik_foreign` (`nik`),
  CONSTRAINT `permintaan_nik_foreign` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permintaan`
--

LOCK TABLES `permintaan` WRITE;
/*!40000 ALTER TABLE `permintaan` DISABLE KEYS */;
INSERT INTO `permintaan` VALUES (1,'2021-07-30 10:20:41','531418026','ini judul permintaan','isi permintaan','alamat permintaan','assets/permintaan/YcHQx0Xxv4nHNI3RBrbzz38LAkhCCXKsnvAEoxtG.jpg','selesai','2021-07-30 02:20:41','2021-07-29 18:32:14');
/*!40000 ALTER TABLE `permintaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `petugas`
--

DROP TABLE IF EXISTS `petugas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `petugas` (
  `id_petugas` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_petugas` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','petugas','kadis') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_petugas`),
  UNIQUE KEY `petugas_email_unique` (`email`),
  UNIQUE KEY `petugas_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `petugas`
--

LOCK TABLES `petugas` WRITE;
/*!40000 ALTER TABLE `petugas` DISABLE KEYS */;
INSERT INTO `petugas` VALUES (1,'Administrator','admin@kominfo.go.id','admin','$2y$10$CtyUBQ659UmdyuK5HZLrKel1VXoFZr9wx1nIizLdgoo.vICCjqYeS','085299116574','admin','2021-07-28 02:00:24','2021-07-28 02:00:24'),(2,'Samsul amri','samsulamri@gmail.com','samsul','$2y$10$wkt2B8R3jRcC6bXrlYhHrOyrVyzOQLfCmiWHz9w6Rd5Jv5lY.SM8q','08531418026','petugas','2021-08-07 05:56:34','2021-08-08 00:16:48'),(3,'Kepala Dinas','kadis@gmail.com','kadis','$2y$10$zxSx.lDCkjqlIOHwdWriAeY4yX3767qhdFu05QsifnnZH5PY3nRM6','08531418022','kadis','2021-08-07 05:57:10','2021-08-07 05:57:10');
/*!40000 ALTER TABLE `petugas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tanggapan`
--

DROP TABLE IF EXISTS `tanggapan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tanggapan` (
  `id_tanggapan` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pengaduan_id` int(11) DEFAULT NULL,
  `permintaan_id` int(11) DEFAULT NULL,
  `tgl_tanggapan` datetime NOT NULL,
  `tanggapan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_petugas` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tanggapan`),
  KEY `tanggapan_id_petugas_foreign` (`id_petugas`),
  CONSTRAINT `tanggapan_id_petugas_foreign` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tanggapan`
--

LOCK TABLES `tanggapan` WRITE;
/*!40000 ALTER TABLE `tanggapan` DISABLE KEYS */;
INSERT INTO `tanggapan` VALUES (1,2,NULL,'2021-07-30 00:00:00','kse proses ulang',1,'2021-07-29 17:28:05','2021-07-29 18:30:56'),(2,1,NULL,'2021-07-30 00:00:00','sedang di pro',1,'2021-07-29 17:48:32','2021-07-29 18:02:58'),(3,NULL,1,'2021-08-08 00:00:00','Laporan Selesai',2,'2021-07-29 18:20:59','2021-08-08 00:26:30'),(4,8,NULL,'2021-08-08 00:00:00','proses ini sebagai contoh tanggapan selesai untuk pemberian notification email',1,'2021-08-07 20:17:33','2021-08-07 20:17:33');
/*!40000 ALTER TABLE `tanggapan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2021-08-18 10:02:31
