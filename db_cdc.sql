-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_cdc
CREATE DATABASE IF NOT EXISTS `db_cdc` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_cdc`;

-- Dumping structure for table db_cdc.tbl_alumni
CREATE TABLE IF NOT EXISTS `tbl_alumni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `npm` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kode_prodi` varchar(10) NOT NULL,
  `tahun_lulus` varchar(4) NOT NULL,
  `status` int(11) NOT NULL,
  `remark` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table db_cdc.tbl_alumni: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_alumni` DISABLE KEYS */;
REPLACE INTO `tbl_alumni` (`id`, `npm`, `nama`, `telp`, `email`, `kode_prodi`, `tahun_lulus`, `status`, `remark`) VALUES
	(1, '1', 'aaa', '123', '1@a.com', '1', '1234', 1, '');
/*!40000 ALTER TABLE `tbl_alumni` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_tracer
CREATE TABLE IF NOT EXISTS `tbl_tracer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `npm` varchar(100) NOT NULL,
  `kode_pt` varchar(100) NOT NULL,
  `tahun_lulus` varchar(100) NOT NULL,
  `kode_prodi` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `f21` varchar(100) NOT NULL,
  `f22` varchar(100) NOT NULL,
  `f23` varchar(100) NOT NULL,
  `f24` varchar(100) NOT NULL,
  `f25` varchar(100) NOT NULL,
  `f26` varchar(100) NOT NULL,
  `f27` varchar(100) NOT NULL,
  `f301` varchar(100) NOT NULL,
  `f302` varchar(100) NOT NULL,
  `f303` varchar(100) NOT NULL,
  `f401` varchar(100) NOT NULL,
  `f402` varchar(100) NOT NULL,
  `f403` varchar(100) NOT NULL,
  `f404` varchar(100) NOT NULL,
  `f405` varchar(100) NOT NULL,
  `f406` varchar(100) NOT NULL,
  `f407` varchar(100) NOT NULL,
  `f408` varchar(100) NOT NULL,
  `f409` varchar(100) NOT NULL,
  `f410` varchar(100) NOT NULL,
  `f411` varchar(100) NOT NULL,
  `f412` varchar(100) NOT NULL,
  `f413` varchar(100) NOT NULL,
  `f414` varchar(100) NOT NULL,
  `f415` varchar(100) NOT NULL,
  `f416` varchar(100) NOT NULL,
  `f501` varchar(100) NOT NULL,
  `f502` varchar(100) NOT NULL,
  `f503` varchar(100) NOT NULL,
  `f6` varchar(100) NOT NULL,
  `f7` varchar(100) NOT NULL,
  `f7a` varchar(100) NOT NULL,
  `f8` varchar(100) NOT NULL,
  `f901` varchar(100) NOT NULL,
  `f902` varchar(100) NOT NULL,
  `f903` varchar(100) NOT NULL,
  `f904` varchar(100) NOT NULL,
  `f905` varchar(100) NOT NULL,
  `f906` varchar(100) NOT NULL,
  `f1001` varchar(100) NOT NULL,
  `f1002` varchar(100) NOT NULL,
  `f1101` varchar(100) NOT NULL,
  `f1102` varchar(100) NOT NULL,
  `f1201` varchar(100) NOT NULL,
  `f1202` varchar(100) NOT NULL,
  `f1301` varchar(100) NOT NULL,
  `f1302` varchar(100) NOT NULL,
  `f1303` varchar(100) NOT NULL,
  `f14` varchar(100) NOT NULL,
  `f15` varchar(100) NOT NULL,
  `f1601` varchar(100) NOT NULL,
  `f1602` varchar(100) NOT NULL,
  `f1603` varchar(100) NOT NULL,
  `f1604` varchar(100) NOT NULL,
  `f1605` varchar(100) NOT NULL,
  `f1606` varchar(100) NOT NULL,
  `f1607` varchar(100) NOT NULL,
  `f1608` varchar(100) NOT NULL,
  `f1609` varchar(100) NOT NULL,
  `f1610` varchar(100) NOT NULL,
  `f1611` varchar(100) NOT NULL,
  `f1612` varchar(100) NOT NULL,
  `f1613` varchar(100) NOT NULL,
  `f1614` varchar(100) NOT NULL,
  `f171` varchar(100) NOT NULL,
  `f172b` varchar(100) NOT NULL,
  `f173` varchar(100) NOT NULL,
  `f175` varchar(100) NOT NULL,
  `f174b` varchar(100) NOT NULL,
  `f176b` varchar(100) NOT NULL,
  `f175a` varchar(100) NOT NULL,
  `f176ba` varchar(100) NOT NULL,
  `f177` varchar(100) NOT NULL,
  `f178b` varchar(100) NOT NULL,
  `f179` varchar(100) NOT NULL,
  `f1710b` varchar(100) NOT NULL,
  `f1711` varchar(100) NOT NULL,
  `f1712b` varchar(100) NOT NULL,
  `f1713` varchar(100) NOT NULL,
  `f1714b` varchar(100) NOT NULL,
  `f1715` varchar(100) NOT NULL,
  `f1716b` varchar(100) NOT NULL,
  `f1717` varchar(100) NOT NULL,
  `f1718b` varchar(100) NOT NULL,
  `f1719` varchar(100) NOT NULL,
  `f1720b` varchar(100) NOT NULL,
  `f1721` varchar(100) NOT NULL,
  `f1722b` varchar(100) NOT NULL,
  `f1723` varchar(100) NOT NULL,
  `f1724b` varchar(100) NOT NULL,
  `f1725` varchar(100) NOT NULL,
  `f1726b` varchar(100) NOT NULL,
  `f1727` varchar(100) NOT NULL,
  `f1728b` varchar(100) NOT NULL,
  `f1729` varchar(100) NOT NULL,
  `f1730b` varchar(100) NOT NULL,
  `f1731` varchar(100) NOT NULL,
  `f1732b` varchar(100) NOT NULL,
  `f1733` varchar(100) NOT NULL,
  `f1734b` varchar(100) NOT NULL,
  `f1735` varchar(100) NOT NULL,
  `f1736b` varchar(100) NOT NULL,
  `f1737` varchar(100) NOT NULL,
  `f1738b` varchar(100) NOT NULL,
  `f1737a` varchar(100) NOT NULL,
  `f1738ba` varchar(100) NOT NULL,
  `f1739` varchar(100) NOT NULL,
  `f1740b` varchar(100) NOT NULL,
  `f1741` varchar(100) NOT NULL,
  `f1742b` varchar(100) NOT NULL,
  `f1743` varchar(100) NOT NULL,
  `f1744b` varchar(100) NOT NULL,
  `f1745` varchar(100) NOT NULL,
  `f1746b` varchar(100) NOT NULL,
  `f1747` varchar(100) NOT NULL,
  `f1748b` varchar(100) NOT NULL,
  `f1749` varchar(100) NOT NULL,
  `f1750b` varchar(100) NOT NULL,
  `f1751` varchar(100) NOT NULL,
  `f1752b` varchar(100) NOT NULL,
  `f1753` varchar(100) NOT NULL,
  `f1754b` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table db_cdc.tbl_tracer: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_tracer` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_tracer` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
