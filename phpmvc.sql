-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2024 at 12:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar buku`
--

CREATE TABLE `daftar buku` (
  `id` int(11) NOT NULL,
  `judul buku` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar buku`
--

INSERT INTO `daftar buku` (`id`, `judul buku`, `penulis`, `penerbit`, `harga`) VALUES
(1, 'Kitab Tauhid', 'Ustadz Yazid bin Abdul Qodir Jawas', 'Pustaka Imam Syafi\'i', '90.000'),
(2, 'Fikih Muyassar', 'Syaikh Abdullah Al-Fauzan', 'Pustaka Azzam', '85.000'),
(3, 'Aqidah Wasithiyah', 'Syaikhul Islam Ibnu Taimiyah', 'Pustaka At-Tibyan', '75.000'),
(4, 'Panduan Shalat Sesuai Sunnah', 'Ustadz Yazid bin Abdul Qodir Jawas', 'Pustaka Imam Asy-Syafi\'i', '65.000'),
(5, 'Syarah Ushul Tsalatsah', 'Syaikh Muhammad bin Shalih Al-Utsaimin', 'Darul Haq', '95.000'),
(6, 'Syarah Arba\'in An-Nawawi', 'Syaikh Salim bin Ied Al-Hilali', 'Gema Insani', '70.000'),
(7, 'Tafsir Ibnu Katsir', 'Imam Ibnu Katsir', 'Pustaka Imam Asy-Syafi\'i', '150.000'),
(8, 'Riyadhus Shalihin', 'Imam An-Nawawi', 'Maktabah Al-Iman', '120.000'),
(9, 'Shahih Bukhari', 'Imam Al-Bukhari', 'Pustaka As-Sunnah', '200.000'),
(10, 'Adab Az-Zifaf', 'Syaikh Muhammad Nashiruddin Al-Albani', 'Media Hidayah', '55.000'),
(11, 'Kisah Para Nabi', 'Ibnu Katsir', 'Darus Sunnah', '80.000'),
(12, 'Al-Ushul Ats-Tsalatsah', 'Syaikh Muhammad bin Abdul Wahhab', 'Pustaka At-Tibyan', '50.000'),
(13, 'Manhajus Salikin', 'Syaikh Abdurrahman As-Sa\'di', 'Darul Haq', '60.000'),
(14, 'Kitab Tauhid', 'Syaikh Muhammad bin Abdul Wahhab', 'Pustaka Azzam', '70.000'),
(15, 'Masa\'il Jahiliyah', 'Syaikh Muhammad bin Abdul Wahhab', 'Darul Haq', '40.000'),
(16, 'Kitab Al-Kabair', 'Imam Adz-Dzahabi', 'Darus Sunnah', '65.000'),
(17, 'Sifat Shalat Nabi', 'Syaikh Muhammad Nashiruddin Al-Albani', 'Media Hidayah', '90.000'),
(18, 'Adab Makan Sesuai Sunnah', 'Syaikh Muhammad bin Shalih Al-Utsaimin', 'Pustaka Imam Asy-Syafi\'i', '55.000'),
(19, 'Syarah Hadits Jibril', 'Syaikh Muhammad bin Shalih Al-Utsaimin', 'Pustaka Imam Asy-Syafi\'i', '75.000');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`) VALUES
(1, 'Futuh Iqram Multazam', '2307014', 'futuhiqramm@gmail.com', 'Sistem Informasi'),
(2, 'Fadilah Fatwa', '053709672', 'fadilahfatwa0302@gmail.com', 'PG PAUD'),
(3, 'denu ', '2313', 'radenu@gmail.com', 'Teknik Sipil'),
(4, 'Sabrina', '10302', 'sabrina@gmai.com', 'Teknik Sipil'),
(5, 'Khanaya Tabitha', '102314', 'khanaya@gmail.com', 'Sistem Informasi'),
(19, 'patrick stars', '8888', 'patrikGendut@gmail.com', 'Teknik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar buku`
--
ALTER TABLE `daftar buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar buku`
--
ALTER TABLE `daftar buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
