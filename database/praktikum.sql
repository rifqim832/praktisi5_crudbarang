-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 06:15 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(10) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `kategori_barang` varchar(50) DEFAULT NULL,
  `deskripsi_barang` text DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `stock_barang` int(11) DEFAULT NULL,
  `supplier_barang` varchar(50) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`, `kategori_barang`, `deskripsi_barang`, `harga_beli`, `harga_jual`, `stock_barang`, `supplier_barang`, `tanggal_masuk`) VALUES
(1, 'BRG001', 'Laptop Asus', 'Elektronik', 'Laptop Asus ROG 15 inch', 12000000, 15000000, 20, 'PT. Tech Supply', '2024-05-01'),
(2, 'BRG002', 'Meja Kantor', 'Perabot', 'Meja kantor kayu jati', 1500000, 2000000, 35, 'CV. Furniture', '2024-05-02'),
(3, 'BRG003', 'Printer Canon', 'Elektronik', 'Printer Canon Pixma', 800000, 1200000, 50, 'PT. Print Media', '2024-05-03'),
(4, 'BRG004', 'AC Samsung', 'Elektronik', 'AC Samsung 1 PK', 3000000, 4500000, 15, 'PT. Cool Air', '2024-05-04'),
(5, 'BRG005', 'Kursi Kantor', 'Perabot', 'Kursi kantor ergonomis', 500000, 750000, 60, 'CV. Furniture', '2024-05-05'),
(6, 'BRG006', 'TV LG 42 inch', 'Elektronik', 'TV LG LED 42 inch', 3500000, 5000000, 25, 'PT. Visual Media', '2024-05-06'),
(7, 'BRG007', 'Kulkas Sharp', 'Elektronik', 'Kulkas Sharp 2 pintu', 2500000, 3500000, 10, 'PT. Home Comfort', '2024-05-07'),
(8, 'BRG008', 'Mesin Cuci LG', 'Elektronik', 'Mesin cuci LG 7kg', 2200000, 3000000, 18, 'PT. Clean Tech', '2024-05-08'),
(9, 'BRG009', 'Lemari Pakaian', 'Perabot', 'Lemari pakaian 3 pintu', 1800000, 2500000, 22, 'CV. Furniture', '2024-05-09'),
(10, 'BRG010', 'Kompor Gas', 'Elektronik', 'Kompor gas 2 tungku', 400000, 600000, 40, 'PT. Kitchen Pro', '2024-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `alamat` text DEFAULT NULL,
  `mata_kuliah_favorit` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `npm`, `angkatan`, `kelas`, `alamat`, `mata_kuliah_favorit`, `email`, `jenis_kelamin`, `tanggal_lahir`) VALUES
(1, 'Ahmad Bin Jafar', '1412220022', 2022, 'A', 'Jl. Sudirman\nNo. 10 RT 01 RW 02 Desa Sumber Kec. Jenu, Tuban', 'Pemrograman Web', 'ahmad@example.com', 'Laki-laki', '0000-00-00'),
(2, 'Budi Prasetyo', '1412220023', 2022, 'B', 'Jl. Pahlawan\nNo. 5 RT 02 RW 03 Desa Karangasem Kec. Bancar, Tuban', 'Sistem Basis Data', 'budi@example.com', 'Laki-laki', '2001-12-10'),
(3, 'Citra Putri Utami', '1412220024', 2022, 'C', 'Jl.\nDiponegoro No. 15 RT 03 RW 04 Desa Karang Anyar Kec. Jenu,\nTuban', 'Pengembangan Aplikasi Mobile', 'citra@example.com', 'Perempuan', '2002-02-20'),
(4, 'Dewi Lestari', '1412220025', 2022, 'D', 'Jl. A. Yani No.\n20 RT 04 RW 05 Desa Kalitengah Kec. Merakurak, Tuban', 'Analisis Algoritma', 'dewi@example.com', 'Perempuan', '2003-08-25'),
(5, 'Eko Prasetyo', '1412220026', 2022, 'E', 'Jl. Raya Tuban -\nBojonegoro No. 25 RT 05 RW 06 Desa Kalidawir Kec. Tuban,\nTuban', 'Desain Grafis', 'eko@example.com', 'Laki-laki', '2004-10-05'),
(6, 'Fani Indah Sari', '1412220027', 2022, 'F', 'Jl.\nCendrawasih No. 30 RT 06 RW 07 Desa Kedungwaru Kec.\nPlumpang, Tuban', 'Manajemen Proyek', 'fani@example.com', 'Perempuan', '2005-04-12'),
(7, 'Gita Lestari', '1412220028', 2022, 'G', 'Jl. Gajah Mada\nNo. 35 RT 07 RW 08 Desa Jatiroto Kec. Widang, Tuban', 'Pengantar Sistem Informasi', 'gita@example.com', 'Perempuan', '2006-07-30'),
(8, 'Hadi Prasetyo', '1412220029', 2022, 'H', 'Jl. KH. Hasyim\nAsyari No. 40 RT 08 RW 09 Desa Sidokare Kec. Jatirogo,\nTuban', 'Rekayasa Perangkat Lunak', 'hadi@example.com', 'Laki-laki', '2007-03-18'),
(9, 'Indra Setiawan', '1412220030', 2022, 'I', 'Jl. Kusuma\nBangsa No. 45 RT 09 RW 10 Desa Kenduruan Kec. Bancar,\nTuban', 'Pemrograman Lanjut', 'indra@example.com', '', '2008-01-08'),
(10, 'Joko Susilo', '1412220031', 2022, 'J', 'Jl. Kartini No.\n50 RT 10 RW 11 Desa Jatirogo Kec. Jatirogo, Tuban', 'Basis\nData Terdistribusi', 'joko@example.com', 'Laki-laki', '2009-11-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `npm` (`npm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
