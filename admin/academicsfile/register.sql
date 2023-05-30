-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 11:52 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
