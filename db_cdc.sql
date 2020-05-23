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
  `deskripsi` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table db_cdc.mst_company: ~5 rows (approximately)
/*!40000 ALTER TABLE `mst_company` DISABLE KEYS */;
REPLACE INTO `mst_company` (`id`, `kode_pt`, `nama_pt`, `jenis_pt`, `email_pt`, `deskripsi`, `password`, `image`, `is_active`, `date_input`) VALUES
	(3, 'CP3', 'pt mantap', 'it', 'arthur@jai.co.id', 'Merupakan perusahaan yang bergerak dibidang Teknologi Informasi, bertujuan untuk membantu semua aspe', '$2y$10$HqxtxS99uDW95JEO6VeXh.DTRTXD88onNbWXTIRWjRG2a131RtwHu', 'cowok2.jpg', 2, '2020-05-10 11:06:42'),
	(4, 'CP4', 'pt. abc', 'Programming', 'agus@gmail.com', '', '$2y$10$FHEft3.fuWeCFtKAVe77OuFghLPaO3X9OlaQTnSl2mzjH730ovdd6', 'cowok2.jpg', 1, '2020-05-10 18:20:39'),
	(5, 'CP5', 'aa', 'aa', 'aa@jai.co.id', '', '$2y$10$fB/.ZVRUuMoMnF3IGVlGB./rUYyT7/pr./bRl8NEsfi1VoGKt5TQW', 'cowok2.jpg', 1, '2020-05-10 21:19:43'),
	(6, '', 'PT. INDOFFOD', 'MIE', 'agus@gmail.com', '', '$2y$10$gqTYVG/wwD3lelGE0YseI.lphuyjw2bnt0.xS68z5J/dFzhmMJiDq', '', 0, '2020-05-13 19:29:59'),
	(7, '', 'pt. bri', 'bank', 'kh.bariyyah@gmail.com', '', '$2y$10$nb0oNKkrIqy6zhAHTHlXMeviWKEbGd9p4TnhIHmYOLuSiYrympl9a', '', 0, '2020-05-13 19:30:43');
/*!40000 ALTER TABLE `mst_company` ENABLE KEYS */;

-- Dumping structure for table db_cdc.status
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.status: ~7 rows (approximately)
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
REPLACE INTO `status` (`id`, `table`, `status`, `deskripsi`) VALUES
	(1, 'tbl_alumni', '1-18', 'setiap status = selesei question ke (status)'),
	(2, 'tbl_apply', '0', 'outstanding'),
	(3, 'tbl_apply', '1', 'approved'),
	(4, 'tbl_apply', '2', 'rejected'),
	(5, 'mst_company (is_active)', '0', 'outstanding'),
	(6, 'mst_company (is_active)', '1', 'harus isi MOU'),
	(7, 'mst_company (is_active)', '2', 'approved');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_agenda
CREATE TABLE IF NOT EXISTS `tbl_agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pt` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time_1` time NOT NULL,
  `time_2` time NOT NULL,
  `location` varchar(100) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Dumping data for table db_cdc.tbl_agenda: ~14 rows (approximately)
/*!40000 ALTER TABLE `tbl_agenda` DISABLE KEYS */;
REPLACE INTO `tbl_agenda` (`id`, `kode_pt`, `title`, `date_input`, `time_1`, `time_2`, `location`, `content`) VALUES
	(1, 'CP3', 'Agenda Title', '2020-05-13 00:00:00', '07:54:43', '13:54:44', 'Pasuruan', 'Buka Bersama'),
	(2, 'CP3', 'Agenda Title', '2020-05-13 00:00:00', '07:54:43', '13:54:44', 'Pasuruan', 'Buka Bersama'),
	(3, 'CP3', 'Agenda Title', '2020-05-13 00:00:00', '07:54:43', '13:54:44', 'Pasuruan', 'Buka Bersama'),
	(4, 'CP3', 'Agenda Title', '2020-05-13 00:00:00', '07:54:43', '13:54:44', 'Pasuruan', 'Buka Bersama'),
	(5, 'CP3', 'Agenda Title', '2020-05-13 00:00:00', '07:54:43', '13:54:44', 'Pasuruan', 'Buka Bersama'),
	(6, 'CP3', 'Agenda Title', '2020-05-13 00:00:00', '07:54:43', '13:54:44', 'Pasuruan', 'Buka Bersama'),
	(7, 'CP3', 'Agenda Title', '2020-05-13 00:00:00', '07:54:43', '13:54:44', 'Pasuruan', 'Buka Bersama'),
	(8, 'CP3', 'Agenda Title', '2020-05-13 00:00:00', '07:54:43', '13:54:44', 'Pasuruan', 'Buka Bersama'),
	(9, 'CP3', 'Agenda Title', '2020-05-13 00:00:00', '07:54:43', '13:54:44', 'Pasuruan', 'Buka Bersama'),
	(10, 'CP3', 'Agenda Title', '2020-05-13 00:00:00', '07:54:43', '13:54:44', 'Pasuruan', 'Buka Bersama'),
	(11, 'CP3', 'Agenda Title', '2020-05-13 00:00:00', '07:54:43', '13:54:44', 'Pasuruan', 'Buka Bersama'),
	(12, 'CP3', 'Agenda Title', '2020-05-13 00:00:00', '07:54:43', '13:54:44', 'Pasuruan', 'Buka Bersama'),
	(13, 'CP3', 'Agenda Title', '2020-05-13 00:00:00', '07:54:43', '13:54:44', 'Pasuruan', 'Buka Bersama'),
	(14, 'CP3', 'Agenda Title', '2020-05-13 00:00:00', '07:54:43', '13:54:44', 'Pasuruan', 'Buka Bersama');
/*!40000 ALTER TABLE `tbl_agenda` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_apply
CREATE TABLE IF NOT EXISTS `tbl_apply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `cv` varchar(100) NOT NULL,
  `date_apply` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL COMMENT '0=Outstanding, 1=Approved, 2=Rejected',
  `id_vacancy` int(11) NOT NULL DEFAULT '0',
  `kode_pt` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_vacancy` (`id_vacancy`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.tbl_apply: ~14 rows (approximately)
/*!40000 ALTER TABLE `tbl_apply` DISABLE KEYS */;
REPLACE INTO `tbl_apply` (`id`, `nama`, `email`, `jenis_kelamin`, `posisi`, `pesan`, `cv`, `date_apply`, `status`, `id_vacancy`, `kode_pt`) VALUES
	(1, '1', 'email@email.com', 'laki-laki', 'it', 'mantap jaya', 'cowok2.jpg', '2020-05-13 09:42:46', 0, 30, 'CP3'),
	(15, '2', 'email@email.com', 'laki-laki', 'it', 'mantap jaya', 'cowok2.jpg', '2020-05-13 09:42:46', 0, 27, 'CP3'),
	(16, '3', 'email@email.com', 'laki-laki', 'it', 'mantap jaya', 'cowok2.jpg', '2020-05-13 09:42:46', 1, 28, 'CP3'),
	(17, '4', 'email@email.com', 'laki-laki', 'it', 'mantap jaya', 'cowok2.jpg', '2020-05-13 09:42:46', 0, 29, 'CP3'),
	(18, '5', 'email@email.com', 'laki-laki', 'it', 'mantap jaya', 'cowok2.jpg', '2020-05-13 09:42:46', 2, 24, 'CP3'),
	(19, '6', 'email@email.com', 'laki-laki', 'it', 'mantap jaya', 'cowok2.jpg', '2020-05-13 09:42:46', 1, 30, 'CP3'),
	(20, '7', 'email@email.com', 'laki-laki', 'it', 'mantap jaya', 'cowok2.jpg', '2020-05-13 09:42:46', 0, 28, 'CP3'),
	(21, '8', 'email@email.com', 'laki-laki', 'it', 'mantap jaya', 'cowok2.jpg', '2020-05-13 09:42:46', 1, 27, 'CP3'),
	(22, '9', 'email@email.com', 'laki-laki', 'it', 'mantap jaya', 'cowok2.jpg', '2020-05-13 09:42:46', 2, 28, 'CP3'),
	(23, '10', 'email@email.com', 'laki-laki', 'it', 'mantap jaya', 'cowok2.jpg', '2020-05-13 09:42:46', 1, 24, 'CP3'),
	(24, '11', 'email@email.com', 'laki-laki', 'it', 'mantap jaya', 'cowok2.jpg', '2020-05-13 09:42:46', 0, 29, 'CP3'),
	(25, '12', 'email@email.com', 'laki-laki', 'it', 'mantap jaya', 'cowok2.jpg', '2020-05-13 09:42:46', 2, 27, 'CP3'),
	(26, '13', 'email@email.com', 'laki-laki', 'it', 'mantap jaya', 'cowok2.jpg', '2020-05-13 09:42:46', 2, 28, 'CP3'),
	(27, 'Arthur', 'agus@jai.co.id', 'Male', 'Staff IT', 'asdfasdf', '5ec49fbad41f9.pdf', '2020-05-20 10:10:50', 0, 19, 'CP3');
/*!40000 ALTER TABLE `tbl_apply` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_job_seeker
CREATE TABLE IF NOT EXISTS `tbl_job_seeker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `posisi_lamar` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `cv` varchar(50) NOT NULL,
  `date_apply` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table db_cdc.tbl_job_seeker: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_job_seeker` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_job_seeker` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_vacancy
CREATE TABLE IF NOT EXISTS `tbl_vacancy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pt` varchar(100) NOT NULL,
  `nama_pt` varchar(100) NOT NULL,
  `due_date` date NOT NULL,
  `position` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `requirement` text NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- Dumping data for table db_cdc.tbl_vacancy: ~8 rows (approximately)
/*!40000 ALTER TABLE `tbl_vacancy` DISABLE KEYS */;
REPLACE INTO `tbl_vacancy` (`id`, `kode_pt`, `nama_pt`, `due_date`, `position`, `location`, `job_title`, `salary`, `requirement`, `date_posted`) VALUES
	(19, 'CP3', 'scm', '2020-05-31', 'Staff IT', 'Tulungagung', 'Job Title1', '10000000', 'I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.', '2020-05-19 16:10:52'),
	(24, 'CP3', 'scm', '2020-05-31', 'Staff IT', 'Tulungagung', 'Job Title2', '10000000', 'I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.', '2020-05-19 16:10:51'),
	(25, 'CP3', 'scm', '2020-05-31', 'Staff IT', 'Tulungagung', 'Job Title3', '10000000', 'I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.', '2020-05-19 16:10:51'),
	(26, 'CP3', 'scm', '2020-05-31', 'Staff IT', 'Tulungagung', 'Job Title4', '10000000', 'I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.', '2020-05-19 16:10:50'),
	(27, 'CP3', 'scm', '2020-05-31', 'Staff IT', 'Tulungagung', 'Job Title5', '10000000', 'I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.', '2020-05-19 16:10:50'),
	(28, 'CP3', 'scm', '2020-05-31', 'Staff IT', 'Tulungagung', 'Job Title6', '10000000', 'I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.', '2020-05-19 16:10:49'),
	(29, 'CP3', 'scm', '2020-05-31', 'Staff IT', 'Tulungagung', 'Job Title7', '10000000', 'I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.', '2020-05-19 16:10:49'),
	(30, 'CP3', 'scm', '2020-05-31', 'Staff IT', 'Tulungagung', 'Job Title7', '10000000', 'I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.', '2020-05-19 16:10:48');
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
