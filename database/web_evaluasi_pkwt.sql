-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 23, 2020 at 12:18 PM
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
(30, 19090373, 0, 0, 2.4, 83, 0, 29, 98),
(31, 19030122, 0, 1.6, 2.4, 246, 0, 29, 96),
(32, 19020097, 0, 0, 0, 246, 0, 30, 100),
(33, 19040153, 0.7, 0.7, 1.3, 150, 0, 29, 97),
(34, 19020098, 0, 0.7, 1.3, 150, 0, 29, 98),
(35, 19010082, 0, 0, 0, 150, 0, 30, 100),
(36, 1301174354, 0, 0, 0, 250, 0, 30, 100);

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
(30, 19040153, '2020-06-23', 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 6.7, 70, 100, 'Muten Roshi', 1201164155);

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
  `kontrak_panjang` varchar(255) DEFAULT NULL,
  `kontrak_putus` varchar(255) DEFAULT NULL,
  `anggaran` varchar(255) DEFAULT NULL,
  `kode_pagu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `id_evaluasi`, `id_absensi`, `nama`, `nik`, `divisi`, `jabatan`, `bagian`, `nilai_hasil`, `end_periode`, `start_periode`, `kontrak_panjang`, `kontrak_putus`, `anggaran`, `kode_pagu`) VALUES
(20, 23, 30, 'Dedi', 19090373, 'Sekretaris Perusahaan', 'Pelaksana', 'Bag. PKBL', 86, '2019-12-31', '2019-09-01', '-', '-', '-', '-'),
(21, 27, 31, 'Rangga Anggara Putra', 19030122, 'Div. SDM & Umum', 'Pelaksana', 'Bag. SDM', 69, '2020-02-29', '2019-03-01', '-', '-', '-', '-'),
(22, 29, 32, 'Nadia Audria Muller', 19020097, 'Div. SDM & Umum', 'Pelaksana', 'Bag. SDM', 100, '2020-01-31', '2019-02-01', '-', '-', '-', '-'),
(23, 30, 33, 'Rizal Rahardi, S.E.', 19040153, 'Div. SDM & Umum', 'Fungsional', 'Bag. SDM', 99, '2020-06-23', '2020-06-23', '-', '-', '-', '-'),
(24, NULL, 34, 'Mayang Fajar Sari', 19020098, 'Sekretaris Perusahaan', 'Pelaksana', 'Bag. Legal', 0, '2020-06-23', '2020-06-23', '-', '-', '-', '-'),
(25, NULL, 35, 'Hafizhah Nurindah Novidayanti, S.Ak.', 19010082, 'Bag. Operasi Matra Udara', 'Pelaksana', 'UB. Elhan', 0, '2020-09-30', '2020-06-23', '-', '-', '-', '-'),
(26, 28, 36, 'Ariq Musyaffa Ramadhani', 1301174354, 'Div. SDM & Umum', 'Ketua', 'Marketing', 93, '2020-07-31', '2020-06-23', '-', '-', '-', '-');

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
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `evaluasi`
--
ALTER TABLE `evaluasi`
  MODIFY `id_evaluasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
