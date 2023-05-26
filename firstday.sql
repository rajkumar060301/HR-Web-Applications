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

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`name`, `username`, `email`, `phone`, `password`) VALUES
('RAJ KUMAR', 'rajkumar', 'rajkumarktr10@gmail.com', '7764904152', '1234'),
('RAJ KUMAR', 'rajkumar', 'rajkumarktr10@gmail.com', '7764904152', '1234'),
('RAJ KUMAR', 'rajkumar', 'rajkumarktr10@gmail.com', '7764904152', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `terms` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `email`, `password`, `terms`) VALUES
(57, 'sakshi', 'sakshi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'agree'),
(72, 'raj', 'rajkumar@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'agree'),
(73, 'raju', 'raju@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'agree'),
(74, 'raja', 'raja@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'agree'),
(75, 'kk', 'kk@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'agree'),
(76, 'ii', 'ii@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'agree'),
(77, 'rajkumar', 'rajkumar@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'agree'),
(78, 'raka', 'raka@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'agree'),
(79, 'Raj Kumar', 'rajkumar@gmail.com', '325ea5fd9b70e3ccf3d92c07126d8923', 'agree'),
(80, 'Kamal Kumar', 'kamal@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'agree'),
(81, 'Rani Kumari', 'rani@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'agree'),
(82, 'Rahim', 'rahim@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'agree'),
(83, 'Dinesh', 'dinesh@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'agree');

-- --------------------------------------------------------

--
-- Table structure for table `todowork`
--

CREATE TABLE `todowork` (
  `todoid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `punchin` time NOT NULL,
  `punchout` time NOT NULL,
  `task` varchar(255) NOT NULL,
  `lunchin` time NOT NULL,
  `lunchout` time NOT NULL,
  `upwork` varchar(255) NOT NULL,
  `webtracker` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todowork`
--

INSERT INTO `todowork` (`todoid`, `id`, `fname`, `date`, `punchin`, `punchout`, `task`, `lunchin`, `lunchout`, `upwork`, `webtracker`) VALUES
(5, 28, 'Raj Kumar', '2023-05-26', '02:24:12', '00:00:00', '', '00:00:00', '00:00:00', '', ''),
(6, 57, 'Rani kumari', '2023-05-26', '03:19:35', '00:00:00', '', '00:00:00', '00:00:00', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_teammates`
--
ALTER TABLE `add_teammates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todowork`
--
ALTER TABLE `todowork`
  ADD PRIMARY KEY (`todoid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_teammates`
--
ALTER TABLE `add_teammates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `todowork`
--
ALTER TABLE `todowork`
  MODIFY `todoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
