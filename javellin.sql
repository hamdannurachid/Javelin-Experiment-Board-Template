-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2019 at 02:02 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `javellin`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(3) NOT NULL,
  `isi` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `isi`) VALUES
(22, 'organisasi pemerintahan (pejabat) / diluarnya (lembaga) '),
(23, '- Laki-laki & perempuan usia 17-65 tahun\r\n- Masyarakat sipil / profesional\r\n- Menggunakan alat teknologi (gawai/laptop)\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `learning`
--

CREATE TABLE `learning` (
  `id` int(3) NOT NULL,
  `isi` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learning`
--

INSERT INTO `learning` (`id`, `isi`) VALUES
(5, 'Masyarakat memilki keinginan mengungkapkan ide untuk pemerintah agar kota lebih baik\r\n'),
(6, 'Pemerintah kurang memaksimalkan respon sehingga user tidak puas dengan cara yang sudah ada\r\n'),
(7, 'saat ini belum ada situs / layanan / fasilitator yang menampung aspirasi masyarakat \r\n'),
(8, 'Kurang sosialisasi dari badan terkait untuk menerima masukan dari masyarakat\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `method`
--

CREATE TABLE `method` (
  `id` int(3) NOT NULL,
  `isi` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `method`
--

INSERT INTO `method` (`id`, `isi`) VALUES
(2, '6/10'),
(3, '7/10'),
(4, '8/10'),
(7, '9/10'),
(8, '10/10'),
(9, 'INTERVIEW');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `id` int(3) NOT NULL,
  `isi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`id`, `isi`) VALUES
(5, 'Tidak tahu cara menyampaikan aspirasi pada pemerintah'),
(6, 'Keinginan memberi saran, kritik dan keluhan'),
(19, 'Sulit melaporkan permasalahan pelayanan publik  \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(3) NOT NULL,
  `isi` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `isi`) VALUES
(1, 'VALID'),
(2, 'INVALID');

-- --------------------------------------------------------

--
-- Table structure for table `risk`
--

CREATE TABLE `risk` (
  `id` int(3) NOT NULL,
  `isi` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `risk`
--

INSERT INTO `risk` (`id`, `isi`) VALUES
(1, 'Tidak ada sosialisasi'),
(6, 'tidak puas dengan cara penyampaian yang sudah ada'),
(7, 'tidak ada fasilitator yang menampung aspirasi'),
(8, 'Masyarakat ingin mengungkapkan ide untuk pemerintah\r\n'),
(9, 'Tidak punya alat (smartphone/laptop)\r\n'),
(10, 'Masyarakat tidak paham teknologi\r\n'),
(11, 'Menuntut pemerintahan yang transparan\r\n'),
(12, 'Masyakaat ingin meminta dukungan pemerintah untuk mewujudkan ide anak muda secara cepat\r\n'),
(13, 'Menuntut perbaikan infrastruktur dengan respon cepat\r\n'),
(14, 'Masyarakat butuh dengan kepedulian pemerintah dengan respon \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE `solution` (
  `id` int(3) NOT NULL,
  `isi` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solution`
--

INSERT INTO `solution` (`id`, `isi`) VALUES
(4, 'Membuat	aplikasi	yang bisa menampung aspirasi masyarakat	');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learning`
--
ALTER TABLE `learning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `method`
--
ALTER TABLE `method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `risk`
--
ALTER TABLE `risk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solution`
--
ALTER TABLE `solution`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `learning`
--
ALTER TABLE `learning`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `method`
--
ALTER TABLE `method`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `risk`
--
ALTER TABLE `risk`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `solution`
--
ALTER TABLE `solution`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
