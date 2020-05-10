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
CREATE DATABASE IF NOT EXISTS `db_cdc` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_cdc`;

-- Dumping structure for table db_cdc.mst_company
CREATE TABLE IF NOT EXISTS `mst_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pt` varchar(50) NOT NULL,
  `nama_pt` varchar(100) NOT NULL,
  `jenis_pt` varchar(100) NOT NULL COMMENT 'Bergerak dibidang apa',
  `email_pt` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table db_cdc.mst_company: ~1 rows (approximately)
/*!40000 ALTER TABLE `mst_company` DISABLE KEYS */;
REPLACE INTO `mst_company` (`id`, `kode_pt`, `nama_pt`, `jenis_pt`, `email_pt`, `password`, `is_active`, `date_input`) VALUES
	(1, '', 'asdgasdf', 'asdgasdf', 'arthur@jai.co.id', 'admin', 0, '2020-05-10 08:38:31');
/*!40000 ALTER TABLE `mst_company` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_agenda
CREATE TABLE IF NOT EXISTS `tbl_agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time_1` time NOT NULL,
  `time_2` time NOT NULL,
  `location` varchar(100) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table db_cdc.tbl_agenda: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_agenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_agenda` ENABLE KEYS */;

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

-- Dumping data for table db_cdc.tbl_alumni: ~1 rows (approximately)
/*!40000 ALTER TABLE `tbl_alumni` DISABLE KEYS */;
REPLACE INTO `tbl_alumni` (`id`, `npm`, `nama`, `telp`, `email`, `kode_prodi`, `tahun_lulus`, `status`, `remark`) VALUES
	(1, '1', 'aaa', '123', '1@a.com', '1', '1234', 2, '');
/*!40000 ALTER TABLE `tbl_alumni` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_contact_us
CREATE TABLE IF NOT EXISTS `tbl_contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `date_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table db_cdc.tbl_contact_us: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_contact_us` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_contact_us` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_menu
CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(50) NOT NULL DEFAULT '',
  `link` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.tbl_menu: ~5 rows (approximately)
/*!40000 ALTER TABLE `tbl_menu` DISABLE KEYS */;
REPLACE INTO `tbl_menu` (`id`, `menu`, `link`) VALUES
	(1, 'About', ''),
	(2, 'Pelatihan', ''),
	(3, 'Artikel', ''),
	(4, 'Lowongan Kerja', ''),
	(5, 'Hubungi Kami', '');
/*!40000 ALTER TABLE `tbl_menu` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_submenu
CREATE TABLE IF NOT EXISTS `tbl_submenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `submenu` varchar(50) NOT NULL DEFAULT '',
  `menu` varchar(50) NOT NULL DEFAULT '',
  `link` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.tbl_submenu: ~6 rows (approximately)
/*!40000 ALTER TABLE `tbl_submenu` DISABLE KEYS */;
REPLACE INTO `tbl_submenu` (`id`, `submenu`, `menu`, `link`) VALUES
	(1, 'Profil', 'About', ''),
	(2, 'Visi & Misi', 'About', ''),
	(3, 'Struktur Organisasi', 'About', ''),
	(4, 'Login', 'About', ''),
	(5, 'Softskills', 'Pelatihan', ''),
	(6, 'Pelatihan Pusat Karir', 'Pelatihan', '');
/*!40000 ALTER TABLE `tbl_submenu` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- Dumping data for table db_cdc.tbl_tracer: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_tracer` DISABLE KEYS */;
REPLACE INTO `tbl_tracer` (`id`, `npm`, `kode_pt`, `tahun_lulus`, `kode_prodi`, `nama`, `telp`, `email`, `f21`, `f22`, `f23`, `f24`, `f25`, `f26`, `f27`, `f301`, `f302`, `f303`, `f401`, `f402`, `f403`, `f404`, `f405`, `f406`, `f407`, `f408`, `f409`, `f410`, `f411`, `f412`, `f413`, `f414`, `f415`, `f416`, `f501`, `f502`, `f503`, `f6`, `f7`, `f7a`, `f8`, `f901`, `f902`, `f903`, `f904`, `f905`, `f906`, `f1001`, `f1002`, `f1101`, `f1102`, `f1201`, `f1202`, `f1301`, `f1302`, `f1303`, `f14`, `f15`, `f1601`, `f1602`, `f1603`, `f1604`, `f1605`, `f1606`, `f1607`, `f1608`, `f1609`, `f1610`, `f1611`, `f1612`, `f1613`, `f1614`, `f171`, `f172b`, `f173`, `f175`, `f174b`, `f176b`, `f175a`, `f176ba`, `f177`, `f178b`, `f179`, `f1710b`, `f1711`, `f1712b`, `f1713`, `f1714b`, `f1715`, `f1716b`, `f1717`, `f1718b`, `f1719`, `f1720b`, `f1721`, `f1722b`, `f1723`, `f1724b`, `f1725`, `f1726b`, `f1727`, `f1728b`, `f1729`, `f1730b`, `f1731`, `f1732b`, `f1733`, `f1734b`, `f1735`, `f1736b`, `f1737`, `f1738b`, `f1737a`, `f1738ba`, `f1739`, `f1740b`, `f1741`, `f1742b`, `f1743`, `f1744b`, `f1745`, `f1746b`, `f1747`, `f1748b`, `f1749`, `f1750b`, `f1751`, `f1752b`, `f1753`, `f1754b`) VALUES
	(1, '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(18, '1', '071050', '1234', '1', 'aaa', '123', '1@a.com', '1', '1', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
/*!40000 ALTER TABLE `tbl_tracer` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_vacancy
CREATE TABLE IF NOT EXISTS `tbl_vacancy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pt` varchar(100) NOT NULL,
  `nama_pt` varchar(100) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `due_date` date NOT NULL,
  `location` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `requirement` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table db_cdc.tbl_vacancy: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_vacancy` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_vacancy` ENABLE KEYS */;

-- Dumping structure for table db_cdc.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `id_sessions` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.user: ~3 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id`, `username`, `password`, `email`, `level`, `blokir`, `id_sessions`) VALUES
	(1, 'agus@gmail.com', '$2y$10$iqyRa5vI.x0IrfQPAvlVYucJE7YMqNMjrW5adwR4CSs1CFn.U0k5e', 'admin@gmai.com', 'admin', 'N', ''),
	(3, 'admin', '$2y$10$mxZ6g.7oFVWvP/9/5bjDh.ShS0TkGoeou.gVa0WKqWDw5l2w/sfHi', 'admin@gmail.com', 'admin', 'N', ''),
	(4, 'agus@gmail.com', '$2y$10$mxZ6g.7oFVWvP/9/5bjDh.ShS0TkGoeou.gVa0WKqWDw5l2w/sfHi', 'admin@gmail.com', 'admin', 'N', '');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
