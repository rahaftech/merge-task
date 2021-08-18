-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 02:38 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `control`
--

-- --------------------------------------------------------

--
-- Table structure for table `control_pa`
--

CREATE TABLE `control_pa` (
  `id` int(20) NOT NULL,
  `stop` varchar(20) NOT NULL,
  `back` varchar(20) NOT NULL,
  `lef` varchar(20) NOT NULL,
  `righ` varchar(20) NOT NULL,
  `forw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `control_pa`
--

INSERT INTO `control_pa` (`id`, `stop`, `back`, `lef`, `righ`, `forw`) VALUES
(1, '', '', '', '', 'forw'),
(2, '', '', 'lef', '', ''),
(3, '', '', '', '', 'forw'),
(4, 'stop', '', '', '', ''),
(5, 'stop', '', '', '', ''),
(6, '', '', '', 'righ', ''),
(7, '', '', 'lef', '', ''),
(8, 'stop', '', '', '', ''),
(9, 'stop', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `control_pa`
--
ALTER TABLE `control_pa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `control_pa`
--
ALTER TABLE `control_pa`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
