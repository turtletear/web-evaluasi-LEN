-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 01:17 PM
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
(112, 30001234, 0, 0, 0, 90, 3.3, 29, 97),
(113, 30001231, 0, 0, 6.7, 90, 2.2, 27, 91);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'clarisahasya', 'bc5766ab6d36025412287a7703e9f46b'),
(2, 'ariq', '60b48fed8fc21ba660b00022bc06f0ed'),
(3, 'ariqramadhan', 'e10adc3949ba59abbe56e057f20f883e');

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
(4, 12345678, 'Nicholas', 2, 6, '$2y$10$iBV/uxFyWSDGrlxpUzDOpO1EX.9QGMZ5omLXzh2IoaBAcpOWlaAoy'),
(10, 12345567, 'Fhirsa', 3, 9, '$2y$10$HaeFgQ3O.HWu2gifyOm8JOKkav9VgdGWNdQmpAnk9Sm9U.CmjMjfO'),
(11, 1234567, 'Admin P.T', 6, 14, '$2y$10$ifs5BbIZ4pvTI4Omx8BvQOcY3W2crDH/AzOh6L.YJ7ZV73XiSwQnS'),
(12, 10001234, 'Admin Legal', 1, 1, '$2y$10$9jRb00cWOClPRp9KPs8Ww.oqU2KhttZEvILuoLyRbTkNSXIWSqjYC');

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
(8, '20001234', 'Atasan Legal', 1, 1, '$2y$10$UqRIZ/qVmcWnuWzzCCNrHeb/4bmZ9Tojde3WhF20jHooJ8/RCDriq');

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
(3, 1, 'Program Kemitraan & Bina Lingkungan', 1),
(4, 1, 'Manajemen Korporasi', 1),
(5, 2, 'Monitoring & Kualitas Audit', 1),
(6, 2, 'Audit', 1),
(7, 3, 'Penjamin Mutu', 1),
(8, 3, 'Penjaminan Sistem', 1),
(9, 3, 'Keselamatan, Kesehatan Kerja, dan Lingkungan', 1),
(10, 4, 'Keuangan', 1),
(11, 4, 'Akuntansi & Perpajakan', 1),
(12, 5, 'Sumber Daya Manusia', 1),
(13, 5, 'Urusan Umum', 1),
(14, 6, 'Produk Hankam & TIKN', 1),
(15, 6, 'Produk Perkeretaapian', 1),
(16, 6, 'Produk Energi & Traksi', 1),
(17, 7, 'Perencanaaan & Pengendalian Logistik', 1),
(18, 7, 'Operasi Logistik', 1),
(19, 7, 'Pengendalian Persediaan & Operasi Gudang', 1),
(20, 8, 'Perencanaan & Evaluasi Korporasi', 1),
(21, 8, 'Sistem Informasi', 1),
(22, 8, 'Pengembangan Bisnis & Investasi', 1),
(23, 8, 'Manajemen Risiko & Administrasi Kontrak', 1),
(24, 9, 'Pemasaran & Penjualan', 1),
(25, 9, 'Rekayasa Sistem', 1),
(26, 9, 'Komersial', 1),
(27, 10, 'Pemasaran & Penjualan', 1),
(28, 10, 'Rekayasa Sistem', 1),
(29, 10, 'Komersial', 1),
(30, 11, 'Rekayasa Sistem', 1),
(31, 11, 'Komersial', 1),
(32, 12, 'Pemasaran & Penjualan', 1),
(33, 12, 'Rekayasa Sistem', 1),
(34, 12, 'Komersial', 1),
(35, 13, 'Pemasaran & Penjualan', 1),
(36, 13, 'Rekayasa Produksi & Purna Jual', 1),
(37, 13, 'Rekayasa Produk', 1),
(38, 13, 'Perencanaan & Pengendalian Produksi', 1);

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
(3, 'Divisi Penjamin Mutu, Sistem & K3L', 1),
(4, 'Divisi Keuangan & Akuntansi', 1),
(5, 'Divisi Sumber Daya Manusia dan Umum', 1),
(6, 'Divisi Pengembangan Teknologi', 1),
(7, 'Divisi Logistik', 1),
(8, 'Divisi Manajemen Strategi dan Operasi', 1),
(9, 'UB Energi dan Sistem Daya', 1),
(10, 'UB Sistem Transportasi', 1),
(11, 'UB Elektronika Pertahanan', 1),
(12, 'UB Teknologi Informasi, Komunikasi, dan Navigasi', 1),
(13, 'UB Industri', 1);

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
(98, 30001234, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Atasan Legal', 20001234),
(99, 30001231, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -1, 0, 'Atasan Legal', 20001234);

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
  `id_admin_uk` int(11) NOT NULL,
  `date_fill_uk` date NOT NULL,
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

INSERT INTO `karyawan` (`id_karyawan`, `id_evaluasi`, `id_absensi`, `id_divisi`, `id_bagian`, `id_admin_uk`, `date_fill_uk`, `nama`, `nik`, `divisi`, `jabatan`, `bagian`, `nilai_hasil`, `end_periode`, `start_periode`, `status`, `alasan`, `anggaran`, `kode_pagu`) VALUES
(92, 98, 112, 1, 1, 12, '0000-00-00', 'Ariq Musyaffa Ramadhani', 30001234, 'Sekretaris Perusahaan', 'Pejabat Struktural', 'Legal', 0, '2020-11-12', '2020-09-12', '-', '-', '-', '-'),
(93, 99, 113, 1, 1, 12, '0000-00-00', 'Iqbal Firdaus', 30001231, 'Sekretaris Perusahaan', 'Staff', 'Legal', 0, '2020-12-12', '2020-09-12', '-', '-', '-', '-');

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
  ADD KEY `id_evaluasi` (`id_evaluasi`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `id_bagian` (`id_bagian`),
  ADD KEY `id_admin_uk` (`id_admin_uk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_uk`
--
ALTER TABLE `admin_uk`
  MODIFY `id_admin_uk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `atasan`
--
ALTER TABLE `atasan`
  MODIFY `id_atasan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bagian`
--
ALTER TABLE `bagian`
  MODIFY `id_bagian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `evaluasi`
--
ALTER TABLE `evaluasi`
  MODIFY `id_evaluasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

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
  ADD CONSTRAINT `id_evaluasi` FOREIGN KEY (`id_evaluasi`) REFERENCES `evaluasi` (`id_evaluasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `karyawan_ibfk_2` FOREIGN KEY (`id_bagian`) REFERENCES `bagian` (`id_bagian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `karyawan_ibfk_3` FOREIGN KEY (`id_admin_uk`) REFERENCES `admin_uk` (`id_admin_uk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
