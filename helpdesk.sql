-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2018 at 04:39 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_kategori` int(4) NOT NULL,
  `isi_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_kategori`, `isi_kategori`) VALUES
(1, 'Rusak'),
(2, 'Tidak Konek');

-- --------------------------------------------------------

--
-- Table structure for table `t_keluar`
--

CREATE TABLE `t_keluar` (
  `id_keluar` varchar(10) NOT NULL,
  `id_masuk` varchar(10) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_masuk`
--

CREATE TABLE `t_masuk` (
  `id_masuk` varchar(100) NOT NULL,
  `id_user` varchar(100) DEFAULT NULL,
  `id_kategori` varchar(20) DEFAULT NULL,
  `deskripsi` text,
  `foto` varchar(250) DEFAULT NULL,
  `tanggal` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_masuk`
--

INSERT INTO `t_masuk` (`id_masuk`, `id_user`, `id_kategori`, `deskripsi`, `foto`, `tanggal`) VALUES
('US 0001', '1', '2', 'safaf', 'foto-nissa-sabyan-duduk-di-toilet-bikin-heboh-181101m.jpg', '2018-11-03'),
('US 0002', '1', '2', 'dasdads', 'download.jpg', '2018-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(300) CHARACTER SET utf8 NOT NULL,
  `alamat` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `no_telp` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `level` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `alamat`, `email`, `no_telp`, `photo`, `level`) VALUES
(1, 'administrator', 'admin', '$2y$10$GG3Rj/oMnH5RSMPtq6juFOuQYGP7DeXqasQC4qBHqfHpuoHk7TTUm', 'jalan selindung', 'admin@admin.com', '082377228970', '13af5724815d8e43a865cbd799adf396.jpg', 'Admin'),
(2, 'Yuranda CS1', 'user', '$2y$10$VE3VGSHFuJvSn6wtYWVuwOMx252mTspa0zrjU8pxPYACemnjQBAgq', NULL, 'irpanseptian55@gmail.com', '0821226606841', NULL, 'Username');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `t_keluar`
--
ALTER TABLE `t_keluar`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indexes for table `t_masuk`
--
ALTER TABLE `t_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
