-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 11:57 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_evaluasi_pkwt`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `nik` int(10) NOT NULL,
  `sakit` float NOT NULL,
  `izin` float NOT NULL,
  `alpa` float NOT NULL,
  `periode` int(11) NOT NULL,
  `terlambat` float NOT NULL,
  `nilai_absen` float NOT NULL,
  `nilai_produktivitas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `nik`, `sakit`, `izin`, `alpa`, `periode`, `terlambat`, `nilai_absen`, `nilai_produktivitas`) VALUES
(30, 19090373, 0, 0, 2.4, 83, 0, 29, 98),
(31, 19030122, 0, 1.6, 2.4, 246, 0, 29, 96),
(32, 19020097, 0, 0, 0, 246, 0, 30, 100),
(33, 19040153, 0.7, 0.7, 1.3, 150, 0, 29, 97),
(34, 19020098, 0, 0.7, 1.3, 150, 0, 29, 98),
(35, 19010082, 0, 0, 0, 150, 0, 30, 100),
(36, 1301174354, 0, 0, 0, 250, 0, 30, 100),
(45, 1301174354, 1, 1, 0, 100, 0, 29, 98),
(47, 130117222, 0, 0, 0, 100, 0, 30, 100),
(48, 1301174359, 2.9, 1.4, 2.9, 70, 1.4, 27, 91),
(49, 1201164352, 1, 1, 2, 100, 1, 28, 95),
(50, 1301174002, 0, 0, 2, 100, 0, 29, 98),
(51, 1301174111, 0, 0, 10, 100, 0, 27, 90),
(52, 1301174355, 0, 3, 0, 100, 0, 29, 97),
(55, 1301174399, 0, 2, 0, 100, 0, 29, 98),
(56, 1201164111, 0, 0, 28.6, 70, 0, 21, 71),
(57, 1201164358, 0, 0, 0, 100, 2, 29, 98),
(58, 1401111534, 0, 2.2, 0, 180, 0, 29, 98),
(59, 1201164357, 0, 9, 0, 100, 0, 27, 91),
(60, 1101192573, 0, 0, 4, 100, 3, 28, 93),
(61, 1301174113, 2, 2, 4, 100, 2, 27, 90),
(62, 130117201, 0, 0, 0, 100, 0, 30, 100),
(63, 1301171222, 0, 0, 0, 100, 0, 30, 100),
(64, 1301174256, 0, 3, 18.2, 33, 3, 23, 76),
(65, 12345677, 0.5, 0, 0, 190, 0.5, 30, 99),
(66, 32165487, 0.8, 0.3, 0, 365, 0.3, 30, 99),
(67, 86745132, 1.6, 1.4, 1.6, 366, 1.1, 28, 94),
(68, 34561287, 0.6, 0.6, 1.1, 180, 0.6, 29, 97),
(69, 13011773, 0, 0, 0, 178, 0, 30, 100),
(70, 12345688, 0.6, 2.2, 0, 180, 0, 29, 97),
(71, 80767328, 1.6, 1.6, 3.3, 365, 1.6, 28, 92),
(72, 57896489, 1.5, 2, 4, 200, 4.5, 26, 88),
(73, 42524115, 1.5, 1.2, 3, 332, 0.3, 28, 94),
(74, 98754321, 0, 0.8, 1.6, 123, 0, 29, 98),
(75, 98754321, 0, 0.8, 1.6, 123, 0, 29, 98),
(76, 98754321, 0, 0.8, 1.6, 123, 0, 29, 98),
(77, 98754321, 0, 0.8, 1.6, 123, 0, 29, 98),
(78, 56341275, 0.8, 0.8, 0, 123, 0, 29, 98),
(79, 56341275, 0.8, 0.8, 0, 123, 0, 29, 98),
(80, 56341275, 0.8, 0.8, 0, 123, 0, 29, 98),
(81, 56341275, 0.8, 0.8, 1.6, 123, 0.8, 29, 96);

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi`
--

CREATE TABLE `evaluasi` (
  `id_evaluasi` int(11) NOT NULL,
  `nik` int(10) NOT NULL,
  `date_fill` date NOT NULL,
  `inisiatif` float NOT NULL,
  `daya_kreatif` float NOT NULL,
  `prob_solve` float NOT NULL,
  `tang_jawab` float NOT NULL,
  `kom_per` float NOT NULL,
  `etika_kerja` float NOT NULL,
  `adap_kerja` float NOT NULL,
  `pelayanan` float NOT NULL,
  `kem_tugas` float NOT NULL,
  `pen_diri` float NOT NULL,
  `kem_komunikasi` float NOT NULL,
  `ker_sama` float NOT NULL,
  `disiplin` float NOT NULL,
  `sis_kerja` float NOT NULL,
  `has_kerja` float NOT NULL,
  `nilai_eval` float NOT NULL,
  `nilai_kinerja` float NOT NULL,
  `nama_atasan` varchar(255) NOT NULL,
  `nik_atasan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluasi`
--

INSERT INTO `evaluasi` (`id_evaluasi`, `nik`, `date_fill`, `inisiatif`, `daya_kreatif`, `prob_solve`, `tang_jawab`, `kom_per`, `etika_kerja`, `adap_kerja`, `pelayanan`, `kem_tugas`, `pen_diri`, `kem_komunikasi`, `ker_sama`, `disiplin`, `sis_kerja`, `has_kerja`, `nilai_eval`, `nilai_kinerja`, `nama_atasan`, `nik_atasan`) VALUES
(23, 19090373, '2020-06-23', 5.3, 4, 6.7, 4, 4, 4, 6.7, 6.7, 6.7, 6.7, 5.3, 5.3, 5.3, 5.3, 5.3, 57, 81, 'Muten Roshi', 1201164155),
(27, 19030122, '2020-06-23', 6.7, 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 4, 4, 2.7, 2.7, 1.3, 1.3, 1.3, 1.3, 40, 57, 'Muten Roshi', 1201164155),
(28, 1301174354, '2020-06-23', 6.7, 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 63, 89, 'Muten Roshi', 1201164155),
(29, 19020097, '2020-06-23', 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 70, 100, 'Muten Roshi', 1201164155),
(30, 19040153, '2020-06-23', 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 70, 100, 'Muten Roshi', 1201164155),
(35, 1301174354, '2020-06-30', 4, 4, 5.3, 4, 4, 4, 5.3, 5.3, 5.3, 5.3, 4, 4, 4, 6.7, 6.7, 50, 72, 'ariq ganteng', 1312313),
(37, 130117222, '2020-06-30', 4, 5.3, 6.7, 5.3, 5.3, 6.7, 5.3, 6.7, 5.3, 6.7, 6.7, 6.7, 5.3, 4, 6.7, 61, 87, 'ariq ganteng', 1312313),
(38, 1301174359, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, '-', 0),
(39, 1201164352, '2020-07-07', 4, 5.3, 5.3, 5.3, 4, 4, 4, 4, 4, 4, 4, 4, 5.3, 5.3, 5.3, 47, 68, 'Muten Roshi', 1201164155),
(40, 1301174002, '2020-07-01', 4, 4, 5.3, 2.7, 5.3, 5.3, 6.7, 4, 6.7, 5.3, 5.3, 6.7, 5.3, 6.7, 5.3, 55, 79, 'ariq', 1312313),
(41, 1301174111, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, '-', 0),
(42, 1301174355, '2020-07-06', 4, 5.3, 6.7, 4, 2.7, 2.7, 4, 2.7, 1.3, 1.3, 5.3, 2.7, 1.3, 5.3, 5.3, 38, 55, 'ariq ganteng', 1312313),
(45, 1301174399, '2020-07-06', 5.3, 4, 4, 6.7, 6.7, 6.7, 2.7, 6.7, 6.7, 2.7, 6.7, 4, 6.7, 6.7, 5.3, 57, 82, 'Ariq Musyaffa Ramadhani', 1234123),
(46, 1201164111, '2020-07-02', 4, 5.3, 5.3, 5.3, 4, 4, 1.3, 5.3, 4, 5.3, 2.7, 1.3, 5.3, 2.7, 4, 42, 60, 'monkey d. garp', 11111111),
(47, 1201164358, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, '-', 0),
(48, 1401111534, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, '-', 0),
(49, 1201164357, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, '-', 0),
(50, 1101192573, '2020-07-02', 6.7, 5.3, 4, 5.3, 4, 4, 4, 2.7, 1.3, 4, 2.7, 1.3, 1.3, 2.7, 5.3, 38, 55, 'monkey d. garp', 11111111),
(51, 1301174113, '2020-07-07', 5.3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 5.3, 5.3, 6.7, 47, 67, 'monkey d. garp', 10099),
(52, 1301171222, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, '-', 0),
(53, 1301174256, '2020-08-05', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 42, 60, 'Clarisa Hasya Yutika', 1301174256),
(54, 12345677, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Clarisa Hasya Yutika', 1301174256),
(55, 32165487, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Clarisa Hasya Yutika', 1301174256),
(56, 86745132, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Clarisa Hasya Yutika', 1301174256),
(57, 34561287, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Clarisa Hasya Yutika', 1301174256),
(58, 13011773, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Clarisa Hasya Yutika', 1301174256),
(59, 12345688, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Clarisa Hasya Yutika', 1301174256),
(60, 80767328, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Clarisa Hasya Yutika', 1301174256),
(61, 57896489, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Clarisa Hasya Yutika', 1301174256),
(62, 42524115, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Clarisa Hasya Yutika', 1301174256),
(63, 56341275, '2020-08-23', 4, 6.7, 2.7, 5.3, 6.7, 5.3, 5.3, 4, 6.7, 4, 6.7, 4, 6.7, 4, 4, 53, 76, 'Clarisa Hasya Yutika', 1301174256);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `id_evaluasi` int(11) DEFAULT NULL,
  `id_absensi` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `id_bagian` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` int(10) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `bagian` varchar(255) NOT NULL,
  `nilai_hasil` float NOT NULL,
  `end_periode` date NOT NULL,
  `start_periode` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `alasan` varchar(255) DEFAULT NULL,
  `anggaran` varchar(255) DEFAULT NULL,
  `kode_pagu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `id_evaluasi`, `id_absensi`, `id_divisi`, `id_bagian`, `nama`, `nik`, `divisi`, `jabatan`, `bagian`, `nilai_hasil`, `end_periode`, `start_periode`, `status`, `alasan`, `anggaran`, `kode_pagu`) VALUES
(20, 23, 30, 1, 1, 'Dedi', 19090373, 'Sekretaris Perusahaan', 'Pelaksana', 'Bag. PKBL', 86, '2019-12-31', '2019-09-01', 'Diperpanjang 6 Bulan', '-', '-', '-'),
(21, 27, 31, 0, 0, 'Rangga Anggara Putra', 19030122, 'Div. SDM & Umum', 'Pelaksana', 'Bag. SDM', 69, '2020-02-29', '2019-03-01', 'Diperpanjang 3 Bulan', '-', 'Rutin', '12'),
(22, 29, 32, 0, 0, 'Nadia Audria Muller', 19020097, 'Div. SDM & Umum', 'Pelaksana', 'Bag. SDM', 100, '2020-01-31', '2019-02-01', '-', '-', '-', '-'),
(23, 30, 33, 0, 0, 'Rizal Rahardi, S.E.', 19040153, 'Div. SDM & Umum', 'Fungsional', 'Bag. SDM', 99, '2020-06-23', '2020-06-23', '-', '-', '-', '-'),
(24, NULL, 34, 0, 0, 'Mayang Fajar Sari', 19020098, 'Sekretaris Perusahaan', 'Pelaksana', 'Bag. Legal', 0, '2020-06-23', '2020-06-23', '-', '-', '-', '-'),
(25, NULL, 35, 0, 0, 'Hafizhah Nurindah Novidayanti, S.Ak.', 19010082, 'Bag. Operasi Matra Udara', 'Pelaksana', 'UB. Elhan', 0, '2020-09-30', '2020-06-23', '-', '-', '-', '-'),
(26, 28, 36, 0, 0, 'Ariq Musyaffa Ramadhani', 1301174354, 'Div. SDM & Umum', 'Ketua', 'Marketing', 93, '2020-07-31', '2020-06-23', '-', '-', '-', '-'),
(34, 35, 45, 0, 0, 'Ariq Musyaffa Ramadhani', 1301174354, 'Div. SDM & Umum', 'Pelaksana', 'Marketing', 79, '2020-06-30', '2020-06-30', 'Diperpanjang 3 Bulan', '-', 'Rutin', '6339 mantap'),
(36, 37, 47, 0, 0, 'acha', 130117222, 'Ginyu Force', 'Pentolan', 'Marketing', 91, '2020-08-30', '2020-06-30', 'diperpanjang 2 minggu', '-', '-', '-'),
(37, 38, 48, 0, 0, 'Peter', 1301174359, 'Ginyu Force', 'Pelaksana', 'Nyapu halaman', 0, '2020-06-30', '2020-06-30', '-', '-', '-', '-'),
(38, 39, 49, 0, 0, 'Tarjo', 1201164352, 'MBP', 'Pelaksana', 'PHP', 75, '2020-08-30', '2020-06-30', 'Diputus', 'Hasil Evaluasi Penilaian', '-', '-'),
(39, 40, 50, 0, 0, 'spopovich', 1301174002, 'Strike Force', 'Asisten', 'Sniper', 84, '2021-03-28', '2020-06-30', 'Diputus', 'Hasil Evaluasi Penilaian', '-', '-'),
(40, 41, 51, 0, 0, 'Rama', 1301174111, 'Ginyu Force', 'Fungsional', 'Marketing', 0, '2020-10-01', '2020-07-01', '-', '-', '-', '-'),
(41, 42, 52, 0, 0, 'Bittersweet by najla', 1301174355, 'Div. SDM & Umum', 'Ketua', 'Bag. PKBL', 67, '2020-09-01', '2020-07-01', '-', '-', '-', '-'),
(44, 45, 55, 0, 0, 'Marco the phoenix', 1301174399, 'Shirohige', 'Captain Division', 'Pirates', 86, '2020-08-01', '2020-07-01', '-', '-', '-', '-'),
(45, 46, 56, 0, 0, 'Akainu', 1201164111, 'Navy', 'Fleet Admiral', 'Navy', 63, '2020-08-31', '2020-07-01', '-', '-', '-', '-'),
(46, 47, 57, 0, 0, 'Kizaru', 1201164358, 'Navy', 'Admiral', 'Navy', 0, '2020-09-01', '2020-07-01', '-', '-', '-', '-'),
(47, 48, 58, 0, 0, 'Kaido', 1401111534, 'Pirates', 'Yonko', 'Pirates', 0, '2020-10-01', '2020-07-01', '-', '-', '-', '-'),
(48, 49, 59, 0, 0, 'Kurohige', 1201164357, 'Pirates', 'Yonko', 'Pirates', 0, '2020-09-01', '2020-07-01', '-', '-', '-', '-'),
(49, 50, 60, 0, 0, 'Dracule Mihawk', 1101192573, 'Pirates', 'Shichibukai', 'Pirates', 66, '2021-02-01', '2020-07-10', '-', '-', '-', '-'),
(50, 51, 61, 0, 0, 'Coco', 1301174113, 'Div. SDM & Umum', 'Asisten', 'Bag. PKBL', 74, '2020-08-07', '2020-07-07', 'Diperpanjang 6 Bulan', '-', 'Proyek/program', 'SG-774'),
(52, 52, 63, 0, 0, 'Tarjo mantap mantap', 1301171222, 'Div. SDM & Umum', 'Pentolan', 'Bag. SDM', 0, '2020-08-31', '2020-07-23', '-', '-', '-', '-'),
(53, 53, 64, 0, 0, 'Adriliano fauzan nazmi', 1301174256, 'divisi', 'jabatan', 'bagian', 65, '2020-07-31', '2020-06-28', 'Diperpanjang 3 Bulan', '-', 'Rutin', '-'),
(54, 54, 65, 0, 0, 'aca', 12345677, 'UB Elektronika Pertahanan', 'staff', 'Rekayasa Sistem', 0, '2020-08-05', '2020-08-05', '-', '-', '-', '-'),
(55, 55, 66, 0, 0, 'Fhirsa Afina', 32165487, 'UB Sistem Transportasi', 'Staff', 'Rekayasa Sistem', 0, '2019-12-31', '2019-01-01', '-', '-', '-', '-'),
(56, 56, 67, 0, 0, 'Kalisa Gea', 86745132, 'Sekretaris Perusahaan', 'Staff', 'Legal', 0, '2020-01-31', '2019-02-09', '-', '-', '-', '-'),
(57, 57, 68, 0, 0, 'Hisyam Adelardi', 34561287, 'UB Industri', 'Staff', 'Pemasaran & Penjualan', 0, '2020-08-01', '2020-01-09', '-', '-', '-', '-'),
(58, 58, 69, 0, 0, 'Dave Franco', 13011773, 'UB Sistem Transportasi', 'Staff', 'Komersial', 0, '2020-08-09', '2020-01-09', '-', '-', '-', '-'),
(59, 59, 70, 0, 0, 'Zhafiraaaa', 12345688, 'Asisten Direksi', 'Staff', '-', 0, '2020-08-09', '2020-01-09', '-', '-', '-', '-'),
(60, 60, 71, 0, 0, 'Anisa Sandy', 80767328, 'Asisten Direksi', 'Staff', '-', 0, '2020-08-09', '2019-08-09', '-', '-', '-', '-'),
(61, 61, 72, 0, 0, 'Tasya', 57896489, 'Satuan Pengawasan Internal', 'Staff', 'Monitoring & Kualitas Audit', 0, '2020-08-09', '2020-08-09', '-', '-', '-', '-'),
(62, 62, 73, 0, 0, 'Hasna Vania', 42524115, 'Divisi Sumber Daya Manusia dan Umum', 'Staff', 'Sumber Daya Manusia', 0, '2020-08-09', '2020-08-09', '-', '-', '-', '-'),
(63, 63, 78, 3, 9, 'Kalisa Gea Cynara', 56341275, 'Divisi Penjamin Mutu, Sistem & K3L', 'Pejabat Struktural', 'Keselamatan, Kesehatan Kerja, dan Lingkungan', 82, '2020-09-05', '2020-07-26', 'Diperpanjang 1 Tahun', '-', 'Rutin', '10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `evaluasi`
--
ALTER TABLE `evaluasi`
  ADD PRIMARY KEY (`id_evaluasi`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_absensi` (`id_absensi`),
  ADD KEY `id_evaluasi` (`id_evaluasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `evaluasi`
--
ALTER TABLE `evaluasi`
  MODIFY `id_evaluasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `id_absensi` FOREIGN KEY (`id_absensi`) REFERENCES `absensi` (`id_absensi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_evaluasi` FOREIGN KEY (`id_evaluasi`) REFERENCES `evaluasi` (`id_evaluasi`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
