-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 05:19 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(255) NOT NULL,
  `nama_guru` text NOT NULL,
  `password_guru` varchar(255) NOT NULL,
  `alamat_guru` varchar(255) NOT NULL,
  `jabatan_guru` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `password_guru`, `alamat_guru`, `jabatan_guru`) VALUES
(14, 'Annisa F H', '9310f83135f238b04af729fec041cca8', 'semarang', 'guru'),
(22, 'Mirza', '89da365c3e674f19d46583d7663e686f', 'semarang', 'Guru'),
(24, 'annisa', 'c9d2cce909ea37234be8af1a1f958805', 'gunungpati', 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lvl` enum('admin','guru') NOT NULL DEFAULT 'guru'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `name`, `password`, `lvl`) VALUES
(1, 'guru', '77e69c137812518e359196bb2f5e9bb9', 'guru'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_materi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_materi`) VALUES
(12, 'Bahasa Indonesia'),
(11, 'Bahasa Inggris '),
(13, 'IPA'),
(14, 'IPS'),
(9, 'Matematika'),
(15, 'PKn'),
(10, 'TIK');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `judul` varchar(255) NOT NULL,
  `id_kelas` int(255) NOT NULL,
  `nama_materi` varchar(255) NOT NULL,
  `tahun` int(11) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `materi` varchar(900) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `id_materi` int(255) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_guru` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`judul`, `id_kelas`, `nama_materi`, `tahun`, `penerbit`, `materi`, `gambar`, `review`, `id_materi`, `id_mapel`, `id_guru`) VALUES
('Bahasa Indonesia Bahasa Bangsaku', 7, 'Bahasa Indonesia', 2008, 'Pusat Perbukuan', 'smp7bhsind MembukaJendelaBhsDanSastraInd.pdf', 'd41d8cd98f00b204e9800998ecf8427eScreenshot_1.png', 'Pengarang : Sarwiji Suwandi Sutarmo																																								', 53, 0, 0),
('Bahasa dan Sastra Indonesia 1', 7, 'Bahasa Indonesia', 2008, 'Pusat Perbukuan Diknas', 'Bahasa dan Sastra Indonesia 1smp7bhsind BhsDanSastraInd.pdf', 'c27898548c8b14c0558e50a1d3a75762Screenshot_2.png', 'Pengarang : Maryati dan Sutopo										', 54, 0, 0),
('Bahasa dan Sastra Indonesia 1', 7, 'Bahasa Indonesia', 2008, 'Pusat Perbukuan Diknas', 'Bahasa dan Sastra Indonesia 1smp7bhsind MembukaJendelaBhsDanSastraInd.pdf', 'c27898548c8b14c0558e50a1d3a75762Screenshot_3.png', 'Pengarang : Dwi Harningsih, Bambang Wisnu dan Septi Lestari 										', 55, 0, 0),
('Bahasa dan Sastra Indonesia 2', 8, 'Bahasa Indonesia', 2008, 'Pusat Perbukuan Diknas', 'Bahasa dan Sastra Indonesia 2smp8bhsind BhsDanSastraInd.pdf', '13b04bdec2edc74ffc0e7022ccde37a9Screenshot_5.png', 'Pengarang : Maryati dan Sutopo										', 57, 0, 0),
('Bahasa Indonesia', 9, 'Bahasa Indonesia', 2008, 'Pusat Perbukuan Departemen Pendidikan Nasional', 'Bahasa Indonesiasmp9bhsind BahasaIndonesia AtikahAnindyarini.pdf', '9a80b45cb78658d5786730ef2f7bd566Screenshot_6.png', 'Pengarang : Atikah Anindya Rini, Yuwono, Suhartono										', 58, 0, 0),
('Bahasa dan Sastra Indonesia', 8, 'Bahasa Indonesia', 2008, 'Pusat Perbukuan Depdiknas', 'Basmp8bhsind Bhs&SasInd DwiHariningsih.pdf', 'b5ca4406a7e0b4f20a0ffa5ffdd8f0a2Screenshot_4.png', 'Pengarang : Dwi Hariningsih, Bambang Wisnu, Septi Lestari																														', 59, 0, 0),
('Bahasa dan Sastra Indonesia 3', 9, 'Bahasa Indonesia', 2008, 'Pusat Perbukuan Diknas', 'Bahasa dan Sastra Indonesia 3smp9bhsind BhsDanSastraInd.pdf', 'a71828bda2941a76395e17cd76bfd9a2Screenshot_8.png', 'Pengarang : Maryati dan Sutopo 										', 61, 0, 0),
('Bahasa Indonesia Bahasa Bangsaku', 9, 'Bahasa Indonesia', 2008, 'Pusat Perbukuan', 'Bahasa Indonesia Bahasa Bangsakusmp9bhsind BahasaKebanggaanku.compressed.pdf', '59a3b0739f50386014c399eb2526eceaScreenshot_7.png', 'Pengarang : Sarwiji Suwandi Sutarmo										', 63, 0, 0),
('Pelajaran Bahasa Indonesia', 9, 'Bahasa Indonesia', 2008, 'Pusat Perbukuan Departemen Pendidikan Nasional', 'Pelajaran Bahasa Indonesiasmp9bhsind PelajaranBhsInd.compressed.pdf', 'c9eb0e6744fabff522b2a9562d0ded3csmp9bhsind PelajaranBhsInd.pdf', 'Pengarang : Tri Retno Murniasih, Sunardi										', 64, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(255) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `email_tamu` varchar(50) NOT NULL,
  `pesan_tamu` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nama_tamu`, `email_tamu`, `pesan_tamu`) VALUES
(6, 'ANNISA FITRIANINGTIYAS HERDAJANTI', 'annisa.caca20@gmail.com', 'sip oke\r\n'),
(7, 'Adelia Puspita Sari', 'a@gmail.com', 'sangat membantu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `nama_materi` (`nama_materi`),
  ADD KEY `id_mapel_2` (`id_mapel`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
