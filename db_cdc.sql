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
	(3, 'CP3', 'pt mantap', 'it', 'arthur@jai.co.id', '', '$2y$10$HqxtxS99uDW95JEO6VeXh.DTRTXD88onNbWXTIRWjRG2a131RtwHu', 'cowok2.jpg', 1, '2020-05-10 11:06:42'),
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

-- Dumping data for table db_cdc.status: ~6 rows (approximately)
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

-- Dumping structure for table db_cdc.tbl_achievement
CREATE TABLE IF NOT EXISTS `tbl_achievement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL DEFAULT '',
  `deskripsi` text NOT NULL,
  `company` varchar(10) NOT NULL DEFAULT '',
  `jobseeker` varchar(10) NOT NULL DEFAULT '',
  `lowongan` varchar(10) NOT NULL DEFAULT '',
  `kursus` varchar(10) NOT NULL DEFAULT '',
  `gambar` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.tbl_achievement: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_achievement` DISABLE KEYS */;
REPLACE INTO `tbl_achievement` (`id`, `judul`, `deskripsi`, `company`, `jobseeker`, `lowongan`, `kursus`, `gambar`) VALUES
	(1, 'Sukses saya', 'Hasil pencapaian', '1234', '564', '45', '13', '');
/*!40000 ALTER TABLE `tbl_achievement` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_agenda
CREATE TABLE IF NOT EXISTS `tbl_agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pt` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `time_1` datetime NOT NULL,
  `time_2` datetime NOT NULL,
  `location` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- Dumping data for table db_cdc.tbl_agenda: ~23 rows (approximately)
/*!40000 ALTER TABLE `tbl_agenda` DISABLE KEYS */;
REPLACE INTO `tbl_agenda` (`id`, `kode_pt`, `title`, `time_1`, `time_2`, `location`, `content`, `date_input`) VALUES
	(3, 'CP3', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(9, 'CP3', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(10, 'CP3', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(14, 'CP3', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(15, 'CP3', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(16, 'CP3', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(17, 'CP3', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(18, 'CP3', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(19, 'CP3', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(20, 'CP3', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(22, 'CP3', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(23, 'CP3', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(24, 'CP3', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(25, 'CP3', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(26, 'CP3', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(27, 'CP3', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(28, 'CP4', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(29, 'CP4', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(30, 'CP4', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(31, 'CP4', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(32, 'CP4', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(33, 'CP4', 'Agenda Title', '2020-05-13 07:54:43', '2020-05-13 13:54:44', 'Pasuruan', 'Buka Bersama', '2020-05-13 00:00:00'),
	(35, 'CP3', 'Agenda Pertumbuhan Penduduk Di Indonesia', '2020-05-13 14:58:00', '2020-05-14 14:58:00', 'Indonesia', '<p>Agenda yang akan diselenggarakan adalah sebuah agenda yang tidak disangka sangka keberadaannya</p>\r\n', '2020-05-13 14:59:29');
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

-- Dumping data for table db_cdc.tbl_alumni: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_alumni` DISABLE KEYS */;
REPLACE INTO `tbl_alumni` (`id`, `npm`, `nama`, `telp`, `email`, `kode_prodi`, `tahun_lulus`, `status`, `remark`) VALUES
	(1, '1', 'aaa', '123', '1@a.com', '1', '1234', 18, '');
/*!40000 ALTER TABLE `tbl_alumni` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.tbl_apply: ~13 rows (approximately)
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
	(26, '13', 'email@email.com', 'laki-laki', 'it', 'mantap jaya', 'cowok2.jpg', '2020-05-13 09:42:46', 2, 28, 'CP3');
/*!40000 ALTER TABLE `tbl_apply` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_artikel
CREATE TABLE IF NOT EXISTS `tbl_artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL DEFAULT '',
  `menu` varchar(50) NOT NULL DEFAULT '',
  `sub_menu` varchar(50) NOT NULL DEFAULT '',
  `gambar` varchar(255) NOT NULL DEFAULT '',
  `konten` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.tbl_artikel: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_artikel` DISABLE KEYS */;
REPLACE INTO `tbl_artikel` (`id`, `judul`, `menu`, `sub_menu`, `gambar`, `konten`) VALUES
	(2, 'Visi & Misi', 'About', 'Visi & Misi', '', '<p><strong>Visi </strong></p>\r\n\r\n<p><strong>&ldquo;</strong>Menjadi pusat karir yang berkontribusi bagi pengembangan karir calon lulusan dan alumni UNIKAMA&rdquo;</p>\r\n\r\n<p>Misi</p>\r\n\r\n<ol>\r\n	<li>Menyelenggarakan pengembangan diri calon lulusan dan alumni untuk memasuki dunia kerja</li>\r\n	<li>Membangun kemitraan strategis dengan dunia usaha dan dunia industri</li>\r\n	<li>Mengelola informasi ketenagakerjaan yang relevan dengan kebutuhan calon lulusan dan alumni</li>\r\n	<li>Menyelenggarakan tracer study tingkat universitas yang berkualitas sesuasi dengan kebutuhan pengembangan karir lulusan dan kebutuhan pengguna lulusan</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n'),
	(3, 'Pelatihan', 'About', '', '', '<p>okokokokokokokok</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>yayayayay</p>\r\n\r\n<p>&nbsp;</p>\r\n');
/*!40000 ALTER TABLE `tbl_artikel` ENABLE KEYS */;

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

-- Dumping structure for table db_cdc.tbl_footer
CREATE TABLE IF NOT EXISTS `tbl_footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(50) NOT NULL DEFAULT '',
  `alamat` varchar(255) NOT NULL DEFAULT '',
  `telp` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `website` varchar(50) NOT NULL DEFAULT '',
  `taut1` varchar(50) NOT NULL DEFAULT '',
  `link1` varchar(50) NOT NULL DEFAULT '',
  `taut2` varchar(50) NOT NULL DEFAULT '',
  `link2` varchar(50) NOT NULL DEFAULT '',
  `taut3` varchar(50) NOT NULL DEFAULT '',
  `link3` varchar(50) NOT NULL DEFAULT '',
  `taut4` varchar(50) NOT NULL DEFAULT '',
  `link4` varchar(50) NOT NULL DEFAULT '',
  `taut5` varchar(50) NOT NULL DEFAULT '',
  `link5` varchar(50) NOT NULL DEFAULT '',
  `facebook` varchar(50) NOT NULL DEFAULT '',
  `instagram` varchar(50) NOT NULL DEFAULT '',
  `twitter` varchar(50) NOT NULL DEFAULT '',
  `youtube` varchar(50) NOT NULL DEFAULT '',
  `skype` varchar(50) NOT NULL DEFAULT '',
  `pinterest` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.tbl_footer: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_footer` DISABLE KEYS */;
REPLACE INTO `tbl_footer` (`id`, `logo`, `alamat`, `telp`, `email`, `website`, `taut1`, `link1`, `taut2`, `link2`, `taut3`, `link3`, `taut4`, `link4`, `taut5`, `link5`, `facebook`, `instagram`, `twitter`, `youtube`, `skype`, `pinterest`) VALUES
	(1, 'logo.png', 'Jl. S.Supriadi No.48 Malang Jawa Timur, Indonesia', '(+62)341-801488', 'email@unikama.ac.id', 'www.unikama.ac.id', 'Unikama Official', 'https://unikama.ac.id', 'Kemenristekdikti', 'https://ristekdikti.go.id', 'LPPM Unikama', 'https://lppm.unikama.ac.id', 'Kemahasiswaan', 'https://mhs.unikama.ac.id', 'Info PMB', 'https://infopmb.unikama.ac.id', '1', '2', '3', '4', '5', '6');
/*!40000 ALTER TABLE `tbl_footer` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_galeri_gb
CREATE TABLE IF NOT EXISTS `tbl_galeri_gb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) NOT NULL DEFAULT '',
  `menu` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.tbl_galeri_gb: ~14 rows (approximately)
/*!40000 ALTER TABLE `tbl_galeri_gb` DISABLE KEYS */;
REPLACE INTO `tbl_galeri_gb` (`id`, `gambar`, `menu`) VALUES
	(1, '1.jpg', '1'),
	(2, '1.jpg', '1'),
	(3, '1.jpg', '1'),
	(4, '1.jpg', '1'),
	(5, '2.jpg', '2'),
	(6, '2.jpg', '2'),
	(7, '2.jpg', '2'),
	(8, '2.jpg', '2'),
	(9, '3.jpg', '3'),
	(10, '3.jpg', '3'),
	(11, '3.jpg', '3'),
	(12, '3.jpg', '3'),
	(13, '4.jpg', '4'),
	(14, '4.jpg', '4'),
	(15, '4.jpg', '4'),
	(16, '4.jpg', '4');
/*!40000 ALTER TABLE `tbl_galeri_gb` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_galeri_menu
CREATE TABLE IF NOT EXISTS `tbl_galeri_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.tbl_galeri_menu: ~4 rows (approximately)
/*!40000 ALTER TABLE `tbl_galeri_menu` DISABLE KEYS */;
REPLACE INTO `tbl_galeri_menu` (`id`, `menu`) VALUES
	(1, 'Training Softskills'),
	(2, 'Psikotes'),
	(3, 'Job Fair'),
	(4, 'MoU');
/*!40000 ALTER TABLE `tbl_galeri_menu` ENABLE KEYS */;

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

-- Dumping structure for table db_cdc.tbl_logo
CREATE TABLE IF NOT EXISTS `tbl_logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.tbl_logo: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_logo` DISABLE KEYS */;
REPLACE INTO `tbl_logo` (`id`, `logo`) VALUES
	(11, 'logo.png');
/*!40000 ALTER TABLE `tbl_logo` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_member
CREATE TABLE IF NOT EXISTS `tbl_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.tbl_member: ~25 rows (approximately)
/*!40000 ALTER TABLE `tbl_member` DISABLE KEYS */;
REPLACE INTO `tbl_member` (`id`, `gambar`) VALUES
	(5, 'student1.jpg'),
	(6, 'student2.jpg'),
	(7, 'student3.jpg'),
	(8, 'student4.jpg'),
	(9, 'student5.jpg'),
	(10, 'student6.jpg'),
	(11, 'student7.jpg'),
	(12, 'student8.jpg'),
	(13, 'student3.jpg'),
	(14, 'student1.jpg'),
	(15, 'student2.jpg'),
	(16, 'student4.jpg'),
	(17, 'student5.jpg'),
	(18, 'student6.jpg'),
	(19, 'student7.jpg'),
	(20, 'student8.jpg'),
	(21, 'student1.jpg'),
	(22, 'student2.jpg'),
	(23, 'student3.jpg'),
	(24, 'student4.jpg'),
	(25, 'student5.jpg'),
	(26, 'student6.jpg'),
	(27, 'student7.jpg'),
	(28, 'student8.jpg'),
	(29, 'student8.jpg');
/*!40000 ALTER TABLE `tbl_member` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_menu
CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(50) NOT NULL DEFAULT '',
  `link` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.tbl_menu: ~6 rows (approximately)
/*!40000 ALTER TABLE `tbl_menu` DISABLE KEYS */;
REPLACE INTO `tbl_menu` (`id`, `menu`, `link`) VALUES
	(1, 'About', ''),
	(2, 'Pelatihan', ''),
	(3, 'Artikel', ''),
	(4, 'Lowongan Kerja', 'http://ub.ac.id'),
	(6, 'Hubungi Kami', ''),
	(7, 'Hubungi Kami', 'backend/dashboard/apa');
/*!40000 ALTER TABLE `tbl_menu` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_menu_kaki
CREATE TABLE IF NOT EXISTS `tbl_menu_kaki` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(50) NOT NULL DEFAULT '',
  `link` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.tbl_menu_kaki: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbl_menu_kaki` DISABLE KEYS */;
REPLACE INTO `tbl_menu_kaki` (`id`, `menu`, `link`) VALUES
	(1, 'Tracer Study', ''),
	(2, 'Counseling Career', ''),
	(3, 'Training Softskills', '');
/*!40000 ALTER TABLE `tbl_menu_kaki` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_partner
CREATE TABLE IF NOT EXISTS `tbl_partner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL DEFAULT '',
  `gambar` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.tbl_partner: ~10 rows (approximately)
/*!40000 ALTER TABLE `tbl_partner` DISABLE KEYS */;
REPLACE INTO `tbl_partner` (`id`, `nama`, `gambar`) VALUES
	(3, 'PT. Pertamina', 'pertamina-head.jpg'),
	(4, 'PT. Tokopedia', 'h.png'),
	(5, 'PT. Nestle', 'd.png'),
	(6, 'PT. PLN', 'c.png'),
	(7, 'PT. Indonesia Power', 'b.jpg'),
	(8, 'PT. Jatim Autocomp Indonesia', 'a.jpg'),
	(9, 'Bank BCA', 'bca-head.jpg'),
	(10, 'Toyota', 'g.png'),
	(11, 'PT. Wijaya Karya', 'i.jpg'),
	(12, 'Samsung', 'samsung-head.jpg'),
	(13, 'PT. YAZAKI', 'a.jpg');
/*!40000 ALTER TABLE `tbl_partner` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_says
CREATE TABLE IF NOT EXISTS `tbl_says` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL DEFAULT '',
  `profesi` varchar(100) NOT NULL DEFAULT '',
  `testimoni` text NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.tbl_says: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbl_says` DISABLE KEYS */;
REPLACE INTO `tbl_says` (`id`, `nama`, `profesi`, `testimoni`, `gambar`) VALUES
	(4, 'Agus', 'Karyawan Swasta', 'Menurut saya ini adalah aplikasi yang sangat bagus, bayangkan setelah lulus saya cukup mendaftar di aplikasi ini dan kemudian apply di suatu perusahaan, dan saat ini saya sudah diterima bekerja disebuah PMA perusahaan Jepang.', 's1.jpg'),
	(5, 'Arthur', 'Karyawan PMA', 'Ini menarik hanya tinggal klik dan upload CV, kemudian saya mendapat panggilan dan diterima bekerja di perusahaan asing.', 's2.jpg'),
	(6, 'Weni', 'Dokter', 'aplikasi bagus sekali', 'comment3.jpg');
/*!40000 ALTER TABLE `tbl_says` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_slide
CREATE TABLE IF NOT EXISTS `tbl_slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.tbl_slide: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_slide` DISABLE KEYS */;
REPLACE INTO `tbl_slide` (`id`, `gambar`) VALUES
	(34, 'slide1.jpg'),
	(35, 'slide2.jpg'),
	(36, 'slide3.JPG'),
	(37, 'slide4.JPG'),
	(39, 'slide5.JPG');
/*!40000 ALTER TABLE `tbl_slide` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_submenu
CREATE TABLE IF NOT EXISTS `tbl_submenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `submenu` varchar(50) NOT NULL DEFAULT '',
  `menu` varchar(50) NOT NULL DEFAULT '',
  `link` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.tbl_submenu: ~6 rows (approximately)
/*!40000 ALTER TABLE `tbl_submenu` DISABLE KEYS */;
REPLACE INTO `tbl_submenu` (`id`, `submenu`, `menu`, `link`) VALUES
	(1, 'Profil', 'About', 'backend/dashboard/prodi'),
	(2, 'Visi & Misi', 'About', ''),
	(3, 'Struktur Organisasi', 'About', ''),
	(4, 'Login', 'About', 'backend/dashboard'),
	(5, 'Softskills', 'Pelatihan', ''),
	(8, 'Pelatihan Pusat Karir', 'Pelatihan', 'belum ada link');
/*!40000 ALTER TABLE `tbl_submenu` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_testimoni
CREATE TABLE IF NOT EXISTS `tbl_testimoni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gb_utama` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.tbl_testimoni: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_testimoni` DISABLE KEYS */;
REPLACE INTO `tbl_testimoni` (`id`, `gb_utama`) VALUES
	(1, 'bg6.jpg'),
	(13, '1.jpg');
/*!40000 ALTER TABLE `tbl_testimoni` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Dumping data for table db_cdc.tbl_tracer: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_tracer` DISABLE KEYS */;
REPLACE INTO `tbl_tracer` (`id`, `npm`, `kode_pt`, `tahun_lulus`, `kode_prodi`, `nama`, `telp`, `email`, `f21`, `f22`, `f23`, `f24`, `f25`, `f26`, `f27`, `f301`, `f302`, `f303`, `f401`, `f402`, `f403`, `f404`, `f405`, `f406`, `f407`, `f408`, `f409`, `f410`, `f411`, `f412`, `f413`, `f414`, `f415`, `f416`, `f501`, `f502`, `f503`, `f6`, `f7`, `f7a`, `f8`, `f901`, `f902`, `f903`, `f904`, `f905`, `f906`, `f1001`, `f1002`, `f1101`, `f1102`, `f1201`, `f1202`, `f1301`, `f1302`, `f1303`, `f14`, `f15`, `f1601`, `f1602`, `f1603`, `f1604`, `f1605`, `f1606`, `f1607`, `f1608`, `f1609`, `f1610`, `f1611`, `f1612`, `f1613`, `f1614`, `f171`, `f172b`, `f173`, `f175`, `f174b`, `f176b`, `f175a`, `f176ba`, `f177`, `f178b`, `f179`, `f1710b`, `f1711`, `f1712b`, `f1713`, `f1714b`, `f1715`, `f1716b`, `f1717`, `f1718b`, `f1719`, `f1720b`, `f1721`, `f1722b`, `f1723`, `f1724b`, `f1725`, `f1726b`, `f1727`, `f1728b`, `f1729`, `f1730b`, `f1731`, `f1732b`, `f1733`, `f1734b`, `f1735`, `f1736b`, `f1737`, `f1738b`, `f1737a`, `f1738ba`, `f1739`, `f1740b`, `f1741`, `f1742b`, `f1743`, `f1744b`, `f1745`, `f1746b`, `f1747`, `f1748b`, `f1749`, `f1750b`, `f1751`, `f1752b`, `f1753`, `f1754b`) VALUES
	(20, '1', '071050', '1234', '1', 'aaa', '123', '1@a.com', '1', '1', '1', '1', '1', '1', '1', '1', '2', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'mertua', '1', '2', '', '5', '3', '1', '1', '1', '2', '3', '4', '5', 'mertua saya', '1', '', '', '', '', '', '', '', '', '5', '4', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', 'mama', '1', '1', '2', '3', '2', '3', '4', '4', '5', '5', '4', '4', '3', '3', '2', '2', '1', '1', '2', '2', '3', '3', '4', '4', '5', '5', '4', '4', '3', '3', '2', '2', '1', '1', '2', '2', '3', '3', '4', '4', '5', '5', '4', '4', '3', '3', '2', '2', '1', '1', '2', '2', '3', '3', '4', '4', '5', '5');
/*!40000 ALTER TABLE `tbl_tracer` ENABLE KEYS */;

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
	(19, 'CP3', 'scm', '2020-05-12', 'Staff IT', 'Tulungagung', 'Job Title1', '10000000', 'I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.', '2020-05-13 07:56:19'),
	(24, 'CP3', 'scm', '2020-05-12', 'Staff IT', 'Tulungagung', 'Job Title2', '10000000', 'I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.', '2020-05-13 07:56:20'),
	(25, 'CP3', 'scm', '2020-05-12', 'Staff IT', 'Tulungagung', 'Job Title3', '10000000', 'I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.', '2020-05-13 07:56:20'),
	(26, 'CP3', 'scm', '2020-05-12', 'Staff IT', 'Tulungagung', 'Job Title4', '10000000', 'I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.', '2020-05-13 07:56:20'),
	(27, 'CP3', 'scm', '2020-05-12', 'Staff IT', 'Tulungagung', 'Job Title5', '10000000', 'I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.', '2020-05-13 07:56:21'),
	(28, 'CP3', 'scm', '2020-05-12', 'Staff IT', 'Tulungagung', 'Job Title6', '10000000', 'I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.', '2020-05-13 07:56:21'),
	(29, 'CP3', 'scm', '2020-05-12', 'Staff IT', 'Tulungagung', 'Job Title7', '10000000', 'I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.', '2020-05-13 07:56:22'),
	(30, 'CP3', 'scm', '2020-05-12', 'Staff IT', 'Tulungagung', 'Job Title7', '10000000', 'I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.', '2020-05-13 07:56:22');
/*!40000 ALTER TABLE `tbl_vacancy` ENABLE KEYS */;

-- Dumping structure for table db_cdc.tbl_video
CREATE TABLE IF NOT EXISTS `tbl_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL DEFAULT '',
  `deskripsi` varchar(255) NOT NULL DEFAULT '',
  `link_youtube` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_cdc.tbl_video: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_video` DISABLE KEYS */;
REPLACE INTO `tbl_video` (`id`, `judul`, `deskripsi`, `link_youtube`) VALUES
	(1, 'Watch Our Activity', 'Kehidupan yang besar dimulai dari mimpi yang besar ~ Agus Salim', 'http://www.youtube.com/watch?v=1iIZeIy7TqM');
/*!40000 ALTER TABLE `tbl_video` ENABLE KEYS */;

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
