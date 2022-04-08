-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 01:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_absen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `kode_mapel` int(3) NOT NULL,
  `hari` varchar(7) NOT NULL,
  `tanggal` date NOT NULL,
  `id_siswa` int(8) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `kelompok_belajar` varchar(12) NOT NULL,
  `nilai` int(3) NOT NULL,
  `ket` text NOT NULL,
  `id_absensi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_absensi`
--

INSERT INTO `tb_absensi` (`kode_mapel`, `hari`, `tanggal`, `id_siswa`, `nama_siswa`, `kelompok_belajar`, `nilai`, `ket`, `id_absensi`) VALUES
(11, 'senin', '2022-04-10', 10192105, 'mispaqul attoriq', '2', 100, 'bagus', 1),
(22, 'selasa', '2022-04-12', 10192106, 'rimuru-sama', '1', 90, 'bagus\r\n', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `kode_guru` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `alamat_guru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`kode_guru`, `nama_guru`, `alamat_guru`) VALUES
(111, 'guru agama', 'dirumah\r\n'),
(222, 'guru iptek', 'disekolah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `kode_mapel` int(3) NOT NULL,
  `mapel` varchar(15) NOT NULL,
  `kode_guru` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`kode_mapel`, `mapel`, `kode_guru`) VALUES
(11, 'pabp', 111),
(22, 'usk', 222);

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(8) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `asal_sekolah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama_siswa`, `alamat_siswa`, `kelas`, `asal_sekolah`) VALUES
(10192105, 'mispaqul attoriq', 'dirumah', 'xii rpl 3', 'nicha'),
(10192106, 'rimuru-sama', 'dijonggol', '2', 'adi sanggoro'),
(10192107, 'gojo satoru', 'asasdsa', '1', 'chd'),
(10192108, 'gomuko', 'anime', '2', 'tokyo univ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`kode_guru`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `kode_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `kode_mapel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10192110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
