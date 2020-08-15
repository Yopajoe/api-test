-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 11:04 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api-test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `csm`
--

CREATE TABLE `csm` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(16) COLLATE utf8mb4_bin NOT NULL,
  `grades` varchar(16) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `csm`
--

INSERT INTO `csm` (`id`, `name`, `grades`) VALUES
(1, 'Pajo', '6 7 7 10'),
(2, 'Milos', '8'),
(3, 'Marko', '1 2 3');

-- --------------------------------------------------------

--
-- Table structure for table `csmb`
--

CREATE TABLE `csmb` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(16) COLLATE utf8mb4_bin NOT NULL,
  `grades` varchar(16) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `csmb`
--

INSERT INTO `csmb` (`id`, `name`, `grades`) VALUES
(1, 'Milos', '8'),
(2, 'Pajo', '6 7 7 10'),
(3, 'Marko', '1 2 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `csm`
--
ALTER TABLE `csm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csmb`
--
ALTER TABLE `csmb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `csm`
--
ALTER TABLE `csm`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `csmb`
--
ALTER TABLE `csmb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
