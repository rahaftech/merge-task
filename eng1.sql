-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 يوليو 2021 الساعة 12:13
-- إصدار الخادم: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eng1`
--

-- --------------------------------------------------------

--
-- بنية الجدول `eng_info`
--

CREATE TABLE `eng_info` (
  `ID` int(20) NOT NULL,
  `engine1` int(5) NOT NULL,
  `engine2` int(5) NOT NULL,
  `engine3` int(5) NOT NULL,
  `engine4` int(5) NOT NULL,
  `engine5` int(5) NOT NULL,
  `engine6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `eng_info`
--

INSERT INTO `eng_info` (`ID`, `engine1`, `engine2`, `engine3`, `engine4`, `engine5`, `engine6`) VALUES
(1, 90, 90, 90, 90, 90, 111),
(2, 122, 63, 124, 46, 55, 112),
(4, 122, 39, 126, 155, 139, 41),
(5, 90, 90, 90, 90, 90, 90),
(6, 90, 90, 90, 90, 90, 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eng_info`
--
ALTER TABLE `eng_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eng_info`
--
ALTER TABLE `eng_info`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
