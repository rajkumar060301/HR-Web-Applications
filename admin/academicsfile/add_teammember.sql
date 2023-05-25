-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 10:28 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firstday`
--

-- --------------------------------------------------------

--
-- Table structure for table `teammates`
--

CREATE TABLE `teammates` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `emptype` varchar(15) NOT NULL,
  `pemail` varchar(25) NOT NULL,
  `oemail` varchar(25) NOT NULL,
  `adhar` varchar(16) NOT NULL,
  `academics` varchar(25) NOT NULL,
  `paddress` varchar(25) NOT NULL,
  `caddress` varchar(25) NOT NULL,
  `pnumber` varchar(10) NOT NULL,
  `anumber` varchar(10) NOT NULL,
  `picture` blob NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teammates`
--
ALTER TABLE `teammates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teammates`
--
ALTER TABLE `teammates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
