-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 11:13 AM
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
-- Database: `onero_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_onero`
--

CREATE TABLE `data_onero` (
  `id_barang` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `featured` varchar(50) NOT NULL,
  `show` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_onero`
--

INSERT INTO `data_onero` (`id_barang`, `title`, `description`, `price`, `quantity`, `image`, `featured`, `show`) VALUES
(1234, 'asdasd tes', 'tes', 200000, 6, 'test', 'Featured', 'Hide'),
(1334, 'b', '', 10000, 1, 'test2', '', ''),
(1341, 'gggggggg', '', 4, 2, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_onero`
--
ALTER TABLE `data_onero`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_onero`
--
ALTER TABLE `data_onero`
  MODIFY `id_barang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1342;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
