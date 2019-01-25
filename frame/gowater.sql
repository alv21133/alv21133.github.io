-- MySQL dump 10.16  Distrib 10.1.36-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: gowater_update
-- ------------------------------------------------------
-- Server version	10.1.36-MariaDB

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `ID` char(5) NOT NULL,
  `Nama` varchar(45) DEFAULT NULL,
  `Alamat` text,
  `Telp` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('A0001','Suprapto','Kebumen','08123456789');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agenda`
--

DROP TABLE IF EXISTS `agenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agenda` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `pegawai_ID` char(5) NOT NULL,
  `Tanggal` date DEFAULT NULL,
  `Keterangan` text,
  PRIMARY KEY (`No`,`pegawai_ID`),
  KEY `fk_agenda_pegawai1_idx` (`pegawai_ID`),
  CONSTRAINT `fk_agenda_pegawai1` FOREIGN KEY (`pegawai_ID`) REFERENCES `pegawai` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agenda`
--

LOCK TABLES `agenda` WRITE;
/*!40000 ALTER TABLE `agenda` DISABLE KEYS */;
INSERT INTO `agenda` VALUES (1,'P0001','2018-11-01','Rapat Membahas pemasukan  Dan pengeluaran'),(2,'P0001','2018-12-01','Rapat Bulanan');
/*!40000 ALTER TABLE `agenda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `biaya_kerusakan`
--

DROP TABLE IF EXISTS `biaya_kerusakan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `biaya_kerusakan` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `kerusakan_No` int(11) NOT NULL,
  `Biaya` int(11) DEFAULT NULL,
  `Tanggal` date DEFAULT NULL,
  PRIMARY KEY (`No`,`kerusakan_No`),
  KEY `fk_biaya_kerusakan_kerusakan1_idx` (`kerusakan_No`),
  CONSTRAINT `fk_biaya_kerusakan_kerusakan1` FOREIGN KEY (`kerusakan_No`) REFERENCES `kerusakan` (`No`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `biaya_kerusakan`
--

LOCK TABLES `biaya_kerusakan` WRITE;
/*!40000 ALTER TABLE `biaya_kerusakan` DISABLE KEYS */;
INSERT INTO `biaya_kerusakan` VALUES (1,1,20000,'2018-10-22'),(2,2,20000,'2018-11-12'),(3,3,20000,'2018-11-24');
/*!40000 ALTER TABLE `biaya_kerusakan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `ID` char(5) NOT NULL,
  `Nama` varchar(45) DEFAULT NULL,
  `Alamat` text,
  `Telp` varchar(45) DEFAULT NULL,
  `Username` varchar(45) DEFAULT NULL,
  `Password` varchar(500) DEFAULT NULL,
  `Pembayaran` varchar(45) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL,
  `paket` varchar(45) DEFAULT NULL,
  `Saldo` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES ('C0001','Paul Rojak','Kebumen','087135798484','0001','123','Lunas','Verifikasi','p2',2000),('C0002','Sutisna','Kebumen','089369468521','0002','coba1234','Belum Lunas','Verifikasi','p1',8000),('C0003','Aminudin','Kebumen','081122365978','0003','990','Lunas','Verifikasi','p2',0),('C0004','Santoso wibowo','Kebumen','081267894512','0004','123','Lunas','Verifikasi','p2',2000),('C0005','Purwanto','Kebumen','082189798822','0005','123','Lunas','Verifikasi','p1',1000),('C0006','Susanto','Kebumen','087800900321','0006','123','Belum Lunas','Verifikasi','p1',-5000),('C0007','Pamungkas','Kebumen','089871832865','0007','123','Lunas','Verifikasi','p2',3000),('C0008','Sumanto','Kebumen','087089981081','0008','123','Belum Lunas','Verifikasi','p2',-3000),('C009','Mina','Adoh','081284869712',NULL,NULL,NULL,'Belum Verifikasi','p1',NULL);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoice` (
  `No_Pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `Transaksi_No` int(11) NOT NULL,
  `Customer_ID` char(5) NOT NULL,
  `Pegawai_ID` char(5) NOT NULL,
  `Tanggal` date DEFAULT NULL,
  `Total_Pemakaian` int(11) DEFAULT NULL,
  `Biaya` int(11) DEFAULT NULL,
  `Bayar` int(11) DEFAULT NULL,
  PRIMARY KEY (`No_Pembayaran`,`Transaksi_No`,`Customer_ID`,`Pegawai_ID`),
  KEY `fk_Invoice_Pegawai1_idx` (`Pegawai_ID`),
  KEY `fk_Invoice_Transaksi1_idx` (`Transaksi_No`),
  KEY `fk_Invoice_Customer1_idx` (`Customer_ID`),
  CONSTRAINT `fk_Invoice_Customer1` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Invoice_Pegawai1` FOREIGN KEY (`Pegawai_ID`) REFERENCES `pegawai` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Invoice_Transaksi1` FOREIGN KEY (`Transaksi_No`) REFERENCES `transaksi` (`No`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice`
--

LOCK TABLES `invoice` WRITE;
/*!40000 ALTER TABLE `invoice` DISABLE KEYS */;
INSERT INTO `invoice` VALUES (1,1,'C0001','P0001','2018-10-05',20,20000,20000),(2,2,'C0002','P0001','2018-10-05',15,15000,20000),(3,3,'C0003','P0001','2018-10-05',21,21000,20000),(4,4,'C0004','P0001','2018-10-05',18,18000,20000),(5,5,'C0005','P0001','2018-10-05',20,20000,20000),(6,6,'C0006','P0001','2018-10-05',22,22000,20000),(7,7,'C0007','P0001','2018-10-05',19,19000,20000),(8,8,'C0008','P0001','2018-10-05',22,22000,20000),(9,9,'C0001','P0001','2018-11-05',18,18000,20000),(10,10,'C0002','P0001','2018-11-05',17,12000,20000),(11,11,'C0003','P0001','2018-11-05',19,20000,20000),(12,12,'C0004','P0001','2018-11-05',20,18000,20000),(13,13,'C0005','P0001','2018-11-05',19,19000,20000),(14,14,'C0006','P0001','2018-11-05',23,25000,20000),(15,15,'C0007','P0001','2018-11-05',18,17000,20000),(16,16,'C0008','P0001','2018-11-05',21,23000,20000);
/*!40000 ALTER TABLE `invoice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kerusakan`
--

DROP TABLE IF EXISTS `kerusakan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kerusakan` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Customer_ID` char(5) NOT NULL,
  `Keterangan` text,
  `Tanggal` date DEFAULT NULL,
  `lokasi` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`No`,`Customer_ID`),
  KEY `fk_Kerusakan_Customer1_idx` (`Customer_ID`),
  CONSTRAINT `fk_Kerusakan_Customer1` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kerusakan`
--

LOCK TABLES `kerusakan` WRITE;
/*!40000 ALTER TABLE `kerusakan` DISABLE KEYS */;
INSERT INTO `kerusakan` VALUES (1,'C0003','Pipa air pecah','2018-10-20','deket pertigaan'),(2,'C0008','Pipa air pecah','2018-11-10','rumah'),(3,'C0001','Pipa air pecah','2018-11-22','Lapangan');
/*!40000 ALTER TABLE `kerusakan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keuangan`
--

DROP TABLE IF EXISTS `keuangan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `keuangan` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `pemasukan_No` int(11) NOT NULL,
  `pengeluaran_No` int(11) NOT NULL,
  `Total_Pemasukan` int(11) DEFAULT NULL,
  `Total_Pengeluaran` int(11) DEFAULT NULL,
  `Tanggal` date DEFAULT NULL,
  `Total` int(11) DEFAULT NULL,
  PRIMARY KEY (`No`,`pemasukan_No`,`pengeluaran_No`),
  KEY `fk_keuangan_pemasukan1_idx` (`pemasukan_No`),
  KEY `fk_keuangan_pengeluaran1_idx` (`pengeluaran_No`),
  CONSTRAINT `fk_keuangan_pemasukan1` FOREIGN KEY (`pemasukan_No`) REFERENCES `pemasukan` (`No`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_keuangan_pengeluaran1` FOREIGN KEY (`pengeluaran_No`) REFERENCES `pengeluaran` (`No`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keuangan`
--

LOCK TABLES `keuangan` WRITE;
/*!40000 ALTER TABLE `keuangan` DISABLE KEYS */;
INSERT INTO `keuangan` VALUES (1,1,1,160000,20000,'2018-11-01',140000),(2,2,2,160000,40000,'2018-12-01',260000);
/*!40000 ALTER TABLE `keuangan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES ('admin','admin'),('sasori','$argon2i$v=19$m=1024,t=2,p=2$WUkyWHBCc2ZwU3hSbkh6TQ$HjKXvt3jLXHlFA9i92FGlcPIcjqu9d4bQF2PBNuqTSE');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pegawai`
--

DROP TABLE IF EXISTS `pegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pegawai` (
  `ID` char(5) NOT NULL,
  `Nama` varchar(45) DEFAULT NULL,
  `Alamat` text,
  `Telp` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pegawai`
--

LOCK TABLES `pegawai` WRITE;
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
INSERT INTO `pegawai` VALUES ('P0001','Purnomo','Kebumen','083125849920');
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pemakaian`
--

DROP TABLE IF EXISTS `pemakaian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pemakaian` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Customer_ID` char(5) NOT NULL,
  `Tanggal` date DEFAULT NULL,
  `Pemakaian_Bulan_Lalu` int(11) DEFAULT NULL,
  `Pemakaian_Bulan_Ini` int(11) DEFAULT NULL,
  PRIMARY KEY (`No`,`Customer_ID`),
  KEY `fk_Pemakaian_Customer1_idx` (`Customer_ID`),
  CONSTRAINT `fk_Pemakaian_Customer1` FOREIGN KEY (`Customer_ID`) REFERENCES `customer` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pemakaian`
--

LOCK TABLES `pemakaian` WRITE;
/*!40000 ALTER TABLE `pemakaian` DISABLE KEYS */;
INSERT INTO `pemakaian` VALUES (1,'C0001','2018-10-01',0,20),(2,'C0002','2018-10-01',0,15),(3,'C0003','2018-10-01',0,21),(4,'C0004','2018-10-01',0,18),(5,'C0005','2018-10-01',0,20),(6,'C0006','2018-10-01',0,22),(7,'C0007','2018-10-01',0,19),(8,'C0008','2018-10-01',0,22),(9,'C0001','2018-11-01',20,38),(10,'C0002','2018-11-01',15,32),(11,'C0003','2018-11-01',21,40),(12,'C0004','2018-11-01',18,38),(13,'C0005','2018-11-01',20,39),(14,'C0006','2018-11-01',22,45),(15,'C0007','2018-11-01',19,37),(16,'C0008','2018-11-01',22,43),(17,'C0002','2019-01-02',32,15),(18,'C0002','2019-01-03',15,34),(19,'C0002','2019-01-03',15,20);
/*!40000 ALTER TABLE `pemakaian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pemasukan`
--

DROP TABLE IF EXISTS `pemasukan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pemasukan` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Pemasukan` int(11) DEFAULT NULL,
  `Tanggal` date DEFAULT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pemasukan`
--

LOCK TABLES `pemasukan` WRITE;
/*!40000 ALTER TABLE `pemasukan` DISABLE KEYS */;
INSERT INTO `pemasukan` VALUES (1,160000,'2018-10-05'),(2,160000,'2018-11-05');
/*!40000 ALTER TABLE `pemasukan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengeluaran`
--

DROP TABLE IF EXISTS `pengeluaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengeluaran` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Pengeluaran` int(11) DEFAULT NULL,
  `Keterangan` text,
  `Tanggal` date DEFAULT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengeluaran`
--

LOCK TABLES `pengeluaran` WRITE;
/*!40000 ALTER TABLE `pengeluaran` DISABLE KEYS */;
INSERT INTO `pengeluaran` VALUES (1,20000,'Beli peralon','2018-10-30'),(2,40000,'Beli peralon','2018-11-30');
/*!40000 ALTER TABLE `pengeluaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaksi` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Customer_ID` char(5) NOT NULL,
  `Pemakaian_No` int(11) NOT NULL,
  `Biaya` int(11) DEFAULT NULL,
  `Tanggal_Bayar` date DEFAULT NULL,
  `Bayar` int(11) DEFAULT NULL,
  PRIMARY KEY (`No`,`Customer_ID`,`Pemakaian_No`),
  KEY `fk_Transaksi_Customer_idx` (`Customer_ID`),
  KEY `fk_Transaksi_Pemakaian1_idx` (`Pemakaian_No`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` VALUES (1,'C0001',1,20000,'2018-10-05',20000),(2,'C0002',2,15000,'2018-10-05',20000),(3,'C0003',3,21000,'2018-10-05',20000),(4,'C0004',4,18000,'2018-10-05',20000),(5,'C0005',5,20000,'2018-10-05',20000),(6,'C0006',6,22000,'2018-10-05',20000),(7,'C0007',7,19000,'2018-10-05',20000),(8,'C0008',8,22000,'2018-10-05',20000),(9,'C0001',9,18000,'2018-11-05',20000),(10,'C0002',10,12000,'2018-11-05',20000),(11,'C0003',11,20000,'2018-11-05',20000),(12,'C0004',12,18000,'2018-11-05',20000),(13,'C0005',13,19000,'2018-11-05',20000),(14,'C0006',14,25000,'2018-11-05',20000),(15,'C0007',15,17000,'2018-11-05',20000),(16,'C0008',16,23000,'2018-11-05',20000);
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `vcustomer`
--

DROP TABLE IF EXISTS `vcustomer`;
/*!50001 DROP VIEW IF EXISTS `vcustomer`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `vcustomer` (
  `ID` tinyint NOT NULL,
  `Saldo` tinyint NOT NULL,
  `Pemakaian_Bulan_Ini` tinyint NOT NULL,
  `Biaya` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `vcustomer`
--

/*!50001 DROP TABLE IF EXISTS `vcustomer`*/;
/*!50001 DROP VIEW IF EXISTS `vcustomer`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vcustomer` AS select `customer`.`ID` AS `ID`,`customer`.`Saldo` AS `Saldo`,`pemakaian`.`Pemakaian_Bulan_Ini` AS `Pemakaian_Bulan_Ini`,`transaksi`.`Biaya` AS `Biaya` from ((`customer` join `pemakaian` on((`customer`.`ID` = `pemakaian`.`Customer_ID`))) join `transaksi` on((`customer`.`ID` = `transaksi`.`Customer_ID`))) where ((`transaksi`.`Tanggal_Bayar` like '%10%') and (`pemakaian`.`Tanggal` like '%10%')) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-25  1:32:37
