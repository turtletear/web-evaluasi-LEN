-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
<<<<<<< HEAD
-- Generation Time: Jul 09, 2020 at 04:42 PM
=======
-- Generation Time: Jul 07, 2020 at 06:49 PM
>>>>>>> 4669ac38bbdc69342388e0e4a47c3c54afab53ae
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
<<<<<<< HEAD
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
(78, 1301174353, 0, 0, 18, 100, 0, 25, 82);
=======
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
(63, 1301171222, 0, 0, 0, 100, 0, 30, 100);
>>>>>>> 4669ac38bbdc69342388e0e4a47c3c54afab53ae

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
-- Table structure for table `atasan`
--

CREATE TABLE `atasan` (
  `id_atasan` int(10) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atasan`
--

INSERT INTO `atasan` (`id_atasan`, `nik`, `nama`, `password`) VALUES
(4, '1301174352', 'ariq lagi', '$2y$10$4GhhmIyM7CTkeiCnE9FyvuiPM1pPYVtKR56wdTudo3AnQ9cZFthnu'),
(5, '1301174354', 'Ariq Musyaffa Ramadhani', '$2y$10$.Pyjrza16wCzQvd6.ZXFceufIrKvgAF0bSfEBIp7J6pxWMV8X16Ky'),
(6, '1201164155', 'aweeee', '$2y$10$wpHBFXH5GZuIpNXaaXfZyOQnwNKybglrLMHkEAZONVUolRQr.PgHm');

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
<<<<<<< HEAD
(56, 71129019, '2020-07-09', 6.7, 5.3, 5.3, 6.7, 5.3, 5.3, 6.7, 6.7, 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 60, 85, 'aweee', 1201164155),
(57, 123456, '2020-07-09', 5.3, 5.3, 4, 5.3, 5.3, 4, 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 5.3, 54, 77, 'ariq lagi', 1301174352),
(58, 123456777, '2020-07-09', 5.3, 4, 4, 5.3, 4, 2.7, 1.3, 1.3, 4, 4, 4, 4, 4, 5.3, 6.7, 42, 60, 'Ariq Musyaffa Ramadhani', 1301174354),
(59, 1234567011, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'aweeee', 1201164155),
(60, 1301170000, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Ariq Musyaffa Ramadhani', 1301174354),
(61, 130117112, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Ariq Musyaffa Ramadhani', 1301174354),
(62, 1201164111, '2020-07-09', 6.7, 5.3, 6.7, 5.3, 6.7, 5.3, 2.7, 4, 2.7, 1.3, 1.3, 2.7, 4, 1.3, 2.7, 41, 59, 'ariq lagi', 1301174352),
(63, 1301174359, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Ariq Musyaffa Ramadhani', 1301174354),
(64, 1201164113, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Ariq Musyaffa Ramadhani', 1301174354),
(65, 1301171212, '2020-07-09', 4, 4, 4, 5.3, 2.7, 1.3, 2.7, 1.3, 4, 2.7, 5.3, 5.3, 5.3, 4, 5.3, 40, 57, 'Ariq Musyaffa Ramadhani', 1301174354),
(66, 1201162021, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Ariq Musyaffa Ramadhani', 1301174354),
(67, 1301174352, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Ariq Musyaffa Ramadhani', 1301174354),
(68, 1301174353, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Ariq Musyaffa Ramadhani', 1301174354);
=======
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
(52, 1301171222, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, '-', 0);
>>>>>>> 4669ac38bbdc69342388e0e4a47c3c54afab53ae

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
<<<<<<< HEAD
(55, 56, 66, 'Ed Sheeran', 71129019, 'Div. SDM & Umum', 'Asisten', 'Bag. PKBL', 85, '2020-07-09', '2020-07-09', 'Diperpanjang 6 Bulan', '-', 'Proyek/program', 'SG-774'),
(56, 57, 67, 'ini bawahan ariq lagi', 123456, 'Div. SDM & Umum', 'Pelaksana', 'Bag. Legal', 84, '2020-07-09', '2020-07-09', 'Diputus', 'Hasil Evaluasi Penilaian', '-', '-'),
(57, 58, 68, 'ini bawahan Ariq Musyaffa Ramadhani', 123456777, 'Div. SDM & Umum', 'Ketua', 'Bag. PKBL', 69, '2020-09-09', '2020-07-09', '-', '-', '-', '-'),
(58, 59, 69, 'ini bawahan ariq lagi aweeee', 1234567011, 'Div. SDM & Umum', 'Pelaksana', 'Bag. Legal', 0, '2020-08-09', '2020-07-09', '-', '-', '-', '-'),
(59, 60, 70, 'Ariq Musyaffa Ramadhani Jr.', 1301170000, 'Div. SDM & Umum', 'Pelaksana', 'Bag. PKBL', 0, '2020-07-09', '2020-07-09', '-', '-', '-', '-'),
(60, 61, 71, 'Peter', 130117112, 'Div. SDM & Umum', 'Asisten', 'Bag. Legal', 0, '2020-09-09', '2020-07-09', '-', '-', '-', '-'),
(61, 62, 72, 'Rama', 1201164111, 'Div. SDM & Umum', 'Pelaksana', 'Bag. Legal', 69, '2020-08-09', '2020-07-09', 'diperpanjang 2 tahun', '-', '-', '-'),
(62, 63, 73, 'Kaido', 1301174359, 'Div. SDM & Umum', 'Pelaksana', 'Bag. Legal', 0, '2020-09-09', '2020-07-09', '-', '-', '-', '-'),
(63, 64, 74, 'Kizaru', 1201164113, 'Div. SDM & Umum', 'Fungsional', 'Bag. Legal', 0, '2020-08-09', '2020-07-09', '-', '-', '-', '-'),
(64, 65, 75, 'Marco the phoenix', 1301171212, 'Pirates', 'Captain Division', 'Captain', 69, '2020-08-09', '2020-07-09', '-', '-', '-', '-'),
(65, 66, 76, 'Portgas D. Ace', 1201162021, 'Pirates', 'Captain Division', 'Captain', 0, '2020-09-09', '2020-07-09', '-', '-', '-', '-'),
(66, 67, 77, 'H.Tarjo', 1301174352, 'Div. SDM & Umum', 'Asisten', 'Bag. PKBL', 0, '2020-09-09', '2020-07-09', '-', '-', '-', '-'),
(67, 68, 78, 'Dracule Mihawk', 1301174353, 'Pirates', 'Shichibukai', 'Marine', 0, '2020-08-09', '2020-07-09', '-', '-', '-', '-');
=======
(34, 35, 45, 'Ariq Musyaffa Ramadhani', 1301174354, 'Div. SDM & Umum', 'Pelaksana', 'Marketing', 79, '2020-06-30', '2020-06-30', 'Diperpanjang 3 Bulan', '-', 'Rutin', '6339 mantap'),
(36, 37, 47, 'acha', 130117222, 'Ginyu Force', 'Pentolan', 'Marketing', 91, '2020-08-30', '2020-06-30', 'diperpanjang 2 minggu', '-', '-', '-'),
(37, 38, 48, 'Peter', 1301174359, 'Ginyu Force', 'Pelaksana', 'Nyapu halaman', 0, '2020-06-30', '2020-06-30', '-', '-', '-', '-'),
(38, 39, 49, 'Tarjo', 1201164352, 'MBP', 'Pelaksana', 'PHP', 75, '2020-08-30', '2020-06-30', 'Diputus', 'Hasil Evaluasi Penilaian', '-', '-'),
(39, 40, 50, 'spopovich', 1301174002, 'Strike Force', 'Asisten', 'Sniper', 84, '2021-03-28', '2020-06-30', 'Diputus', 'Hasil Evaluasi Penilaian', '-', '-'),
(40, 41, 51, 'Rama', 1301174111, 'Ginyu Force', 'Fungsional', 'Marketing', 0, '2020-10-01', '2020-07-01', '-', '-', '-', '-'),
(41, 42, 52, 'Bittersweet by najla', 1301174355, 'Div. SDM & Umum', 'Ketua', 'Bag. PKBL', 67, '2020-09-01', '2020-07-01', '-', '-', '-', '-'),
(44, 45, 55, 'Marco the phoenix', 1301174399, 'Shirohige', 'Captain Division', 'Pirates', 86, '2020-08-01', '2020-07-01', '-', '-', '-', '-'),
(45, 46, 56, 'Akainu', 1201164111, 'Navy', 'Fleet Admiral', 'Navy', 63, '2020-08-31', '2020-07-01', '-', '-', '-', '-'),
(46, 47, 57, 'Kizaru', 1201164358, 'Navy', 'Admiral', 'Navy', 0, '2020-09-01', '2020-07-01', '-', '-', '-', '-'),
(47, 48, 58, 'Kaido', 1401111534, 'Pirates', 'Yonko', 'Pirates', 0, '2020-10-01', '2020-07-01', '-', '-', '-', '-'),
(48, 49, 59, 'Kurohige', 1201164357, 'Pirates', 'Yonko', 'Pirates', 0, '2020-09-01', '2020-07-01', '-', '-', '-', '-'),
(49, 50, 60, 'Dracule Mihawk', 1101192573, 'Pirates', 'Shichibukai', 'Pirates', 66, '2021-02-01', '2020-07-10', '-', '-', '-', '-'),
(50, 51, 61, 'Coco', 1301174113, 'Div. SDM & Umum', 'Asisten', 'Bag. PKBL', 74, '2020-08-07', '2020-07-07', 'Diperpanjang 6 Bulan', '-', 'Proyek/program', 'SG-774'),
(52, 52, 63, 'Tarjo mantap mantap', 1301171222, 'Div. SDM & Umum', 'Pentolan', 'Bag. SDM', 0, '2020-08-31', '2020-07-23', '-', '-', '-', '-');
>>>>>>> 4669ac38bbdc69342388e0e4a47c3c54afab53ae

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
-- Indexes for table `atasan`
--
ALTER TABLE `atasan`
  ADD PRIMARY KEY (`id_atasan`);

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
<<<<<<< HEAD
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
=======
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
>>>>>>> 4669ac38bbdc69342388e0e4a47c3c54afab53ae

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `atasan`
--
ALTER TABLE `atasan`
  MODIFY `id_atasan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `evaluasi`
--
ALTER TABLE `evaluasi`
<<<<<<< HEAD
  MODIFY `id_evaluasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
=======
  MODIFY `id_evaluasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
>>>>>>> 4669ac38bbdc69342388e0e4a47c3c54afab53ae

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
<<<<<<< HEAD
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
=======
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
>>>>>>> 4669ac38bbdc69342388e0e4a47c3c54afab53ae

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
