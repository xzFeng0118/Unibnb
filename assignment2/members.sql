-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2021 at 04:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `UniBnB`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `abn` varchar(255) DEFAULT NULL,
  `access` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `firstname`, `lastname`, `email`, `phone`, `password`, `abn`, `access`) VALUES
(1, 'YM', 'Xu', 'test@test.com', '12345678', '1234567890', '44444', 'manager'),
(2, 'hosttest', '1', 'hosttest@test.com', '4', '1233211234567', '44444', 'host'),
(3, 'clienttest', '22', 'clienttest@test.com', '12', '1233211234567', '44444', 'client'),
(4, '23', 'fsdfdsf', '', '', '', '1234', 'host'),
(5, '23435', '5435', '234@5.com', '445554455', '1234', '44444', 'client'),
(6, 'gdfsff', 'ssfsf', '122231@gmail.com', '432535', 'erfsdsfdsfd', '44444', 'host'),
(7, '11111', '11111', '1231111@gmail.com', '432535', '1111111', '111', 'client'),
(8, '', '', '', '', '', '', 'host'),
(9, 'fsdfdg', 'dgdgdgdf', 'dfg@dfg', '432535', '', 'fdsfsfs', 'host'),
(10, 'fsfs', '5435', '234@5.com', '432535', '1111', '123', 'host');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
