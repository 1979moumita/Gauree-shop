-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 04:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gauree`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `proID` int(30) NOT NULL,
  `proName` varchar(255) NOT NULL,
  `proType` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `piece` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`proID`, `proName`, `proType`, `price`, `piece`, `image`) VALUES
(1, 'Gajra Set', 'Indian', 1250, 7, '1646580042_gajra set.jpg'),
(2, 'German Silver Set', 'German', 500, 10, '1646580780_german silver set.jpg'),
(3, 'Chokar', 'Bangladeshi', 230, 5, '1646590317_chokar.jpg'),
(4, 'Payel', 'Indian', 120, 6, '1646593121_payel.jpg'),
(5, 'Black Polish Afgani Set', 'Afgani', 330, 10, '1646977947_afgani.jpg'),
(6, 'Bangles', 'indian', 220, 12, '1647093440_cover-bangles.jpg'),
(7, 'Finger Ring', 'Gold Platted', 280, 4, '1647095050_cover3.jpg'),
(8, 'Neck piece', 'oxidied silver', 430, 2, '1647095212_silver.jpg'),
(9, 'Necklace', 'indian', 280, 2, '1647097202_joypuri set.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`proID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `proID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
