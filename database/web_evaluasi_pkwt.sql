-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 03:42 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

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
(66, 71129019, 1, 1, 4, 100, 9, 25, 85),
(67, 123456, 0, 0, 0, 100, 0, 30, 100),
(68, 123456777, 0, 2, 8, 50, 0, 27, 90),
(69, 1234567011, 0, 0, 20, 20, 0, 24, 80),
(70, 1301170000, 0, 0, 4, 100, 1, 28, 95),
(71, 130117112, 2, 3, 0, 100, 1, 28, 94),
(72, 1201164111, 2.4, 1.2, 4.7, 85, 0, 28, 92),
(73, 1301174359, 0, 0, 4, 100, 1, 28, 95),
(74, 1201164113, 0, 2.2, 4.4, 90, 2.2, 27, 91),
(75, 1301171212, 2, 0, 0, 100, 1, 29, 97),
(76, 1201162021, 0, 2, 0, 100, 1, 29, 97),
(77, 1301174352, 0, 2, 4, 100, 0, 28, 94),
(78, 1301174353, 0, 0, 18, 100, 0, 25, 82),
(79, 12345679, 14, 0, 0, 100, 2, 25, 84),
(80, 11223333, 0, 0, 4, 100, 9, 26, 87),
(81, 11223322, 0, 0, 4, 100, 0, 29, 96),
(82, 12331232, 2, 2, 0, 100, 0, 29, 96),
(83, 11231151, 0, 2, 0, 100, 1, 29, 97),
(84, 22551126, 0, 2, 0, 100, 4, 28, 94),
(85, 12345670, 0, 0, 0, 100, 2, 29, 98),
(86, 12345990, 0, 0, 0, 100, 2, 29, 98),
(87, 12345678, 1, 0, 0, 100, 2, 29, 97),
(88, 12345678, 0, 0, 0, 100, 0, 30, 100),
(89, 12345600, 0, 3, 0, 100, 2, 28, 95),
(90, 12345688, 3.8, 0, 0, 80, 3.8, 28, 92),
(91, 12345981, 0, 3, 6, 100, 2, 27, 89),
(92, 19247126, 1.1, 0, 2.2, 90, 1.1, 29, 96),
(93, 12394816, 1, 0, 18, 100, 2, 24, 79),
(94, 10294716, 3.3, 0, 0, 30, 0, 29, 97),
(95, 10194817, 0, 0, 0, 100, 2, 29, 98),
(96, 10194817, 0, 0, 0, 100, 2, 29, 98),
(97, 10194817, 0, 0, 0, 100, 2, 29, 98),
(98, 19373716, 0, 2, 2, 100, 1, 28, 95),
(99, 11224161, 0, 2, 2, 100, 2, 28, 94),
(100, 12071918, 2, 1, 4, 100, 1, 28, 92);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'ariqramadhan', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `admin_uk`
--

CREATE TABLE `admin_uk` (
  `id_admin_uk` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `id_bagian` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_uk`
--

INSERT INTO `admin_uk` (`id_admin_uk`, `nik`, `nama`, `id_divisi`, `id_bagian`, `password`) VALUES
(4, 12345678, 'Nicholas', 2, 6, '$2y$10$iBV/uxFyWSDGrlxpUzDOpO1EX.9QGMZ5omLXzh2IoaBAcpOWlaAoy');

-- --------------------------------------------------------

--
-- Table structure for table `atasan`
--

CREATE TABLE `atasan` (
  `id_atasan` int(10) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `id_bagian` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atasan`
--

INSERT INTO `atasan` (`id_atasan`, `nik`, `nama`, `id_divisi`, `id_bagian`, `password`) VALUES
(4, '1301174352', 'ariq lagi', 1, 1, '$2y$10$4GhhmIyM7CTkeiCnE9FyvuiPM1pPYVtKR56wdTudo3AnQ9cZFthnu'),
(5, '1301174354', 'Ariq Musyaffa Ramadhani', 2, 5, '$2y$10$.Pyjrza16wCzQvd6.ZXFceufIrKvgAF0bSfEBIp7J6pxWMV8X16Ky'),
(6, '1201164155', 'aweeee', 3, 8, '$2y$10$wpHBFXH5GZuIpNXaaXfZyOQnwNKybglrLMHkEAZONVUolRQr.PgHm'),
(9, '12345678', 'Leonardo', 2, 6, '$2y$10$DKhhPd6wUlvf1cJ.j6VmzO5oxeH3oFnEngFs0rGgyelEqUNoPILxi');

-- --------------------------------------------------------

--
-- Table structure for table `bagian`
--

CREATE TABLE `bagian` (
  `id_bagian` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `nama_bagian` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bagian`
--

INSERT INTO `bagian` (`id_bagian`, `id_divisi`, `nama_bagian`, `status`) VALUES
(1, 1, 'Legal', 1),
(2, 1, 'Komunikasi Korporasi', 1),
(3, 1, 'Program Kemitraan & Bina Lingkungan', 0),
(4, 1, 'Manajemen Korporasi', 1),
(5, 2, 'Monitoring & Kualitas Audit', 1),
(6, 2, 'Audit', 1),
(7, 3, 'Penjamin Mutu', 1),
(8, 3, 'Penjaminan Sistem', 1),
(9, 3, 'Keselamatan, Kesehatan Kerja, dan Lingkungan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`, `status`) VALUES
(1, 'Sekretaris Perusahaan', 1),
(2, 'Satuan Pengawasan Internal', 1),
(3, 'Divisi Penjamin Mutu, Sistem & K3L', 1);

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
(56, 71129019, '2020-07-09', 6.7, 5.3, 5.3, 6.7, 5.3, 5.3, 6.7, 6.7, 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 60, 85, 'aweee', 1201164155),
(57, 123456, '2020-07-09', 5.3, 5.3, 4, 5.3, 5.3, 4, 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 54, 77, 'ariq lagi', 1301174352),
(58, 123456777, '2020-07-09', 5.3, 4, 4, 5.3, 4, 2.7, 1.3, 1.3, 4, 4, 4, 4, 4, 5.3, 6.7, 42, 60, 'Ariq Musyaffa Ramadhani', 1301174354),
(59, 1234567011, '2020-07-16', 5.3, 4, 5.3, 5.3, 5.3, 5.3, 4, 4, 4, 5.3, 4, 4, 2.7, 2.7, 2.7, 45, 64, 'aweeee', 1201164155),
(60, 1301170000, '2020-07-09', 4, 4, 5.3, 5.3, 1.3, 1.3, 5.3, 1.3, 1.3, 2.7, 1.3, 1.3, 5.3, 2.7, 1.3, 31, 44, 'Ariq Musyaffa Ramadhani', 1301174354),
(61, 130117112, '2020-07-13', 4, 4, 6.7, 6.7, 5.3, 5.3, 6.7, 5.3, 5.3, 5.3, 5.3, 6.7, 5.3, 4, 6.7, 58, 83, 'Ariq Musyaffa Ramadhani', 1301174354),
(62, 1201164111, '2020-07-09', 6.7, 5.3, 6.7, 5.3, 6.7, 5.3, 2.7, 4, 2.7, 1.3, 1.3, 2.7, 4, 1.3, 2.7, 41, 59, 'ariq lagi', 1301174352),
(63, 1301174359, '2020-07-16', 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 70, 100, 'Ariq Musyaffa Ramadhani', 1301174354),
(64, 1201164113, '2020-07-14', 4, 4, 6.7, 5.3, 6.7, 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 4, 4, 4, 6.7, 54, 77, 'Ariq Musyaffa Ramadhani', 1301174354),
(65, 1301171212, '2020-07-09', 4, 4, 4, 5.3, 2.7, 1.3, 2.7, 1.3, 4, 2.7, 5.3, 5.3, 5.3, 4, 5.3, 40, 57, 'Ariq Musyaffa Ramadhani', 1301174354),
(66, 1201162021, '2020-07-09', 5.3, 6.7, 5.3, 6.7, 5.3, 5.3, 2.7, 6.7, 5.3, 4, 4, 4, 4, 5.3, 4, 52, 75, 'Ariq Musyaffa Ramadhani', 1301174354),
(67, 1301174352, '2020-07-16', 4, 4, 5.3, 6.7, 2.7, 4, 1.3, 6.7, 5.3, 4, 6.7, 5.3, 4, 5.3, 4, 49, 69, 'Ariq Musyaffa Ramadhani', 1301174354),
(68, 1301174353, '2020-07-13', 4, 4, 5.3, 2.7, 6.7, 5.3, 4, 5.3, 5.3, 6.7, 5.3, 5.3, 4, 2.7, 2.7, 49, 69, 'Ariq Musyaffa Ramadhani', 1301174354),
(69, 12345679, '2020-08-04', 4, 5.3, 1.3, 4, 1.3, 5.3, 4, 2.7, 1.3, 1.3, 6.7, 2.7, 5.3, 1.3, 5.3, 36, 52, 'aweeee', 1201164155),
(70, 11223333, '2020-07-16', 4, 5.3, 5.3, 4, 4, 4, 4, 5.3, 5.3, 5.3, 4, 4, 5.3, 4, 4, 47, 68, 'Ariq Musyaffa Ramadhani', 1301174354),
(71, 11223322, '2020-08-03', 2.7, 4, 5.3, 6.7, 6.7, 5.3, 5.3, 5.3, 4, 5.3, 4, 2.7, 1.3, 1.3, 2.7, 44, 63, 'Ariq Musyaffa Ramadhani', 1301174354),
(72, 12331232, '2020-07-16', 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 4, 6.7, 5.3, 5.3, 5.3, 5.3, 5.3, 56, 80, 'Ariq Musyaffa Ramadhani', 1301174354),
(73, 11231151, '2020-07-17', 6.7, 5.3, 5.3, 5.3, 5.3, 4, 4, 4, 5.3, 4, 5.3, 5.3, 4, 5.3, 4, 51, 73, 'Ariq Musyaffa Ramadhani', 1301174354),
(74, 22551126, '2020-07-17', 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 6.7, 6.7, 5.3, 6.7, 6.7, 5.3, 6.7, 5.3, 4, 60, 85, 'Ariq Musyaffa Ramadhani', 1301174354),
(75, 12345670, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Ariq Musyaffa Ramadhani', 1301174354),
(76, 12345990, '2020-08-03', 6.7, 2.7, 4, 1.3, 5.3, 6.7, 6.7, 1.3, 2.7, 5.3, 4, 2.7, 4, 5.3, 1.3, 42, 60, 'Ariq Musyaffa Ramadhani', 1301174354),
(77, 12345678, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'aweeee', 1201164155),
(78, 12345678, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'aweeee', 1201164155),
(79, 12345600, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'aweeee', 1201164155),
(80, 12345688, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'aweeee', 1201164155),
(81, 12345981, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'aweeee', 1201164155),
(82, 19247126, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'aweeee', 1201164155),
(83, 12394816, '2020-08-06', 4, 6.7, 5.3, 4, 1.3, 2.7, 1.3, 2.7, 2.7, 1.3, 1.3, 4, 2.7, 4, 4, 34, 48, 'Ariq Musyaffa Ramadhani', 1301174354),
(84, 10294716, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Ariq Musyaffa Ramadhani', 1301174354),
(85, 11224161, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Ariq Musyaffa Ramadhani', 1301174354),
(86, 12071918, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Ariq Musyaffa Ramadhani', 1301174354);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `id_evaluasi` int(11) DEFAULT NULL,
  `id_absensi` int(11) NOT NULL,
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

INSERT INTO `karyawan` (`id_karyawan`, `id_evaluasi`, `id_absensi`, `nama`, `nik`, `divisi`, `jabatan`, `bagian`, `nilai_hasil`, `end_periode`, `start_periode`, `status`, `alasan`, `anggaran`, `kode_pagu`) VALUES
(55, 56, 66, 'Ed Sheeran', 71129019, 'Div. SDM & Umum', 'Asisten', 'Bag. PKBL', 85, '2020-07-09', '2020-07-09', 'Diperpanjang 6 Bulan', '-', 'Proyek/program', 'SG-774'),
(59, 60, 70, 'Ariq Musyaffa Ramadhani Jr.', 1301170000, 'Div. SDM & Umum', 'Pelaksana', 'Bag. PKBL', 59, '2020-07-09', '2020-07-09', '-', '-', '-', '-'),
(60, 61, 71, 'Peter', 130117112, 'Div. SDM & Umum', 'Asisten', 'Bag. Legal', 86, '2020-09-09', '2020-07-09', '-', '-', '-', '-'),
(61, 62, 72, 'Rama', 1201164111, 'Div. SDM & Umum', 'Pelaksana', 'Bag. Legal', 69, '2020-08-09', '2020-07-09', 'diperpanjang 2 tahun', '-', '-', '-'),
(62, 63, 73, 'Kaido', 1301174359, 'Div. SDM & Umum', 'Pelaksana', 'Bag. Legal', 98, '2020-09-09', '2020-07-09', 'diperpanjang 2 tahun', '-', 'Rutin', 'SG-774 custom'),
(63, 64, 74, 'Kizaru', 1201164113, 'Div. SDM & Umum', 'Fungsional', 'Bag. Legal', 81, '2020-08-09', '2020-07-09', '-', '-', '-', '-'),
(64, 65, 75, 'Marco the phoenix', 1301171212, 'Pirates', 'Captain Division', 'Captain', 69, '2020-08-09', '2020-07-09', '-', '-', '-', '-'),
(65, 66, 76, 'Portgas D. Ace', 1201162021, 'Pirates', 'Captain Division', 'Captain', 81, '2020-09-09', '2020-07-09', 'mantap', '-', '-', '-'),
(66, 67, 77, 'H.Tarjo', 1301174352, 'Div. SDM & Umum', 'Asisten', 'Bag. PKBL', 77, '2020-09-09', '2020-07-09', 'diperpanjang 15 Bulan', '-', 'Proyek/program', '-'),
(67, 68, 78, 'Dracule Mihawk', 1301174353, 'Pirates', 'Shichibukai', 'Marine', 74, '2020-08-09', '2020-07-09', 'Diputus', 'Kegiatan Proyek/Program Selesai', '-', '-'),
(69, 70, 80, 'kakarotto', 11223333, 'UB Elektronika Pertahanan', 'Pelaksana', 'Komersial', 73, '2020-10-16', '2020-07-16', 'Diputus', 'Hasil Evaluasi Penilaian', '-', '-'),
(70, 71, 81, 'mamat', 11223322, 'Divisi Logistik', 'Asisten', 'Operasi Logistik', 73, '2020-11-17', '2020-07-16', 'Diperpanjang 3 Bulan', '-', 'Rutin', 'SG-774'),
(71, 72, 82, 'Steve', 12331232, 'UB Teknologi Informasi, Komunikasi, dan Navigasi', 'Ketua', 'Komersial', 85, '2020-09-17', '2020-07-17', 'Diperpanjang 1 Tahun', '-', 'Rutin', '-'),
(72, 73, 83, 'Super Vegito', 11231151, 'Divisi Pengembangan Teknologi', 'Ketua', 'Produk Energi & Traksi', 80, '2020-08-17', '2020-07-17', 'Diperpanjang 3 Bulan', '-', 'Proyek/program', 'SG-73122'),
(73, 74, 84, 'Arnim Zola', 22551126, 'Divisi Pengembangan Teknologi', 'Ketua', 'Produl Hankam & TIKN', 88, '2020-08-17', '2020-07-17', 'Diperpanjang 2 tahun', '-', 'Proyek/program', 'SGM-009'),
(74, 76, 86, 'Ariq Musyaffa Ramadhani', 12345990, 'Sekretaris Perusahaan', 'Ketua', 'Legal', 71, '2020-08-03', '2020-08-03', 'Diputus', 'Hasil Evaluasi Penilaian', '-', '-'),
(75, 77, 87, 'Diana', 12345678, 'UB Energi dan Sistem Daya', 'Ketua', 'Pemasaran & Penjualan', 0, '2020-09-03', '2020-08-03', '-', '-', '-', '-'),
(76, 79, 89, 'azmi', 12345600, 'UB Sistem Transportasi', 'Pelaksana', 'Rekayasa Sistem', 0, '2020-08-03', '2020-08-03', '-', '-', '-', '-'),
(77, 80, 90, 'ulya', 12345688, 'UB Elektronika Pertahanan', 'Asisten', 'Komersial', 0, '2020-10-03', '2020-08-03', '-', '-', '-', '-'),
(78, 81, 91, 'jojo', 12345981, 'UB Teknologi Informasi, Komunikasi, dan Navigasi', 'Pelaksana', 'Komersial', 0, '2020-08-03', '2020-08-03', '-', '-', '-', '-'),
(79, 82, 92, 'nicholas', 19247126, 'UB Industri', 'Asisten', 'Rekayasa Produk', 0, '2020-10-03', '2020-08-03', '-', '-', '-', '-'),
(80, 83, 93, 'lalalisa', 12394816, 'Sekretaris Perusahaan', 'Pejabat Struktural', 'Program Kemitraan & Bina Lingkungan', 58, '2020-10-06', '2020-08-06', 'Diperpanjang 1 Tahun', '-', 'Proyek/program', 'SG-774'),
(81, 84, 94, 'robin', 10294716, 'Divisi Penjamin Mutu, Sistem & K3L', 'Pejabat Struktural', 'Keselamatan, Kesehatan Kerja, dan Lingkungan', 0, '2020-09-08', '2020-08-08', '-', '-', '-', '-'),
(82, 86, 100, 'spopovich', 12071918, 'Satuan Pengawasan Internal', 'Staff', 'Monitoring & Kualitas Audit', 0, '2020-10-15', '2020-08-15', '-', '-', '-', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `admin_uk`
--
ALTER TABLE `admin_uk`
  ADD PRIMARY KEY (`id_admin_uk`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `id_bagian` (`id_bagian`);

--
-- Indexes for table `atasan`
--
ALTER TABLE `atasan`
  ADD PRIMARY KEY (`id_atasan`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `id_bagian` (`id_bagian`);

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`id_bagian`),
  ADD KEY `id_divisi` (`id_divisi`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

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
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_uk`
--
ALTER TABLE `admin_uk`
  MODIFY `id_admin_uk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `atasan`
--
ALTER TABLE `atasan`
  MODIFY `id_atasan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bagian`
--
ALTER TABLE `bagian`
  MODIFY `id_bagian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `evaluasi`
--
ALTER TABLE `evaluasi`
  MODIFY `id_evaluasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_uk`
--
ALTER TABLE `admin_uk`
  ADD CONSTRAINT `admin_uk_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_uk_ibfk_2` FOREIGN KEY (`id_bagian`) REFERENCES `bagian` (`id_bagian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `atasan`
--
ALTER TABLE `atasan`
  ADD CONSTRAINT `atasan_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `atasan_ibfk_2` FOREIGN KEY (`id_bagian`) REFERENCES `bagian` (`id_bagian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bagian`
--
ALTER TABLE `bagian`
  ADD CONSTRAINT `bagian_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE;

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
