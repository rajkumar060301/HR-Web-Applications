-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 11:53 AM
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
-- Table structure for table `add_teammates`
--

CREATE TABLE `add_teammates` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `dateofjoining` date NOT NULL,
  `emptype` varchar(15) NOT NULL,
  `pemail` varchar(25) NOT NULL,
  `oemail` varchar(25) NOT NULL,
  `adhar` varchar(16) NOT NULL,
  `academics` varchar(255) NOT NULL,
  `paddress` varchar(25) NOT NULL,
  `caddress` varchar(25) NOT NULL,
  `pnumber` text NOT NULL,
  `anumber` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_teammates`
--

INSERT INTO `add_teammates` (`id`, `fname`, `dob`, `dateofjoining`, `emptype`, `pemail`, `oemail`, `adhar`, `academics`, `paddress`, `caddress`, `pnumber`, `anumber`, `image`, `password`) VALUES
(28, 'Raj Kumar', '2001-03-06', '2004-03-06', 'part time', 'raj@gmail.com', 'raja@gmail.com', '465607354253', 'academicsfile/image.jpg', 'Bishariya', 'Sisiya', '7764904452', '8271839070', 'upload/08577fa66033f29.png', 'LaSB0uE4'),
(57, 'Rani kumari', '1222-05-04', '2007-07-08', 'trainee', 'rani@gmail.com', 'ranikumari@gmail.com', '7897444215412', 'academicsfile/add_teammember.sql', 'Katihar', 'Chandigarh', '8271839070', '9065653463', 'upload/dropdown_3_menu_image_3.jpg', 'zUFJuoqQ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_teammates`
--
ALTER TABLE `add_teammates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_teammates`
--
ALTER TABLE `add_teammates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
