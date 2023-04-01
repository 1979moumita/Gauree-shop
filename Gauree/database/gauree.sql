-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 13, 2022 at 04:32 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

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
-- Table structure for table `admin_info`
--

DROP TABLE IF EXISTS `admin_info`;
CREATE TABLE IF NOT EXISTS `admin_info` (
  `admin_id` int(30) NOT NULL AUTO_INCREMENT,
  `adminName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `adminName`, `email`, `Password`) VALUES
(1, 'Monisa Saha Sumi', 'monisasaha077@gmail.com', 'admin321');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `Blog_ID` int(255) NOT NULL,
  `Title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `content` varchar(10000) CHARACTER SET utf8 NOT NULL,
  `Image` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`Blog_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`Blog_ID`, `Title`, `content`, `Image`) VALUES
(101, 'afgani', ' <p>আফগান জুয়েলারী সাধারণত সিলভার মেটাল ও কালারিং গ্লাস এর সংমিশ্রণ।এই টাইপের জুয়েলারীতে সাধারণত কালারিং\r\n                স্টোন এর পরিবর্তে কালারিং মিরর বা গ্লাস ব্যাবহার করা হয়।।কম বয়সী মেয়েদের কাছে এই আফগানী জুয়েলারী ব্যাপক\r\n                জনপ্রিয়। আগে এই জুয়েলারী ভারতের জয়পুরহাটে তৈরী করা হলেও এখন বাংলাদেশ এও এই ধরনের জুয়েলারী সমভাবে তৈরী\r\n                হচ্ছে।অরিজিনাল আফগান জুয়েলারীর দাম অপেক্ষাকৃত বেশি। কিন্তু বাংলাদেশ এ তৈরীকৃত এই জুয়েলারীর দাম\r\n                অপেক্ষাকৃত কম।বাংলাদেশ এ তৈরী এই জুয়েলারীকে অনেক সময় আফগান রেপ্লিকাও বলা হয়</p>', 'afgani.jpg'),
(102, 'South Indian', '<p>সাউথ ইন্ডিয়ান জুয়েলারী ভারতের তামিলনাড়ু ও কর্ণাটকের  ঐতিহ্যবাহী জুয়েলারী। এত সুন্দর ডিজাইন এই জুয়েলারী গুলোর।।।দাম তুলনামূলক বেশি হওয়ায় বাংলাদেশ এ অনেকের পক্ষে এই জুয়েলারী ক্র‍য় করা কষ্ট সাপেক্ষ ব্যাপার। বর্তমানে বাংলাদেশ এ আসল সাউথ ইন্ডিয়ান জুয়েলারীর পাশাপাশি রেপ্লিকা সাউথ ইন্ডিয়ান জুয়েলারী ও পাওয়া যাচ্ছে|</p>', 'blog-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cartID` int(30) NOT NULL AUTO_INCREMENT,
  `amount` int(255) NOT NULL,
  `proID` int(30) NOT NULL,
  `CustomerID` int(100) NOT NULL,
  `flag` int(11) NOT NULL,
  `cflag` int(30) NOT NULL,
  PRIMARY KEY (`cartID`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartID`, `amount`, `proID`, `CustomerID`, `flag`, `cflag`) VALUES
(21, 1, 4, 8, 0, 0),
(22, 1, 2, 8, 0, 0),
(23, 1, 3, 8, 0, 0),
(27, 1, 5, 11, 1, 1),
(32, 1, 7, 11, 1, 0),
(13, 1, 3, 9, 0, 0),
(12, 1, 5, 9, 0, 0),
(11, 1, 1, 9, 0, 0),
(14, 1, 4, 9, 0, 0),
(15, 1, 3, 9, 0, 0),
(16, 1, 5, 10, 0, 0),
(17, 1, 3, 10, 0, 0),
(18, 1, 2, 10, 0, 0),
(24, 1, 3, 8, 0, 0),
(25, 1, 3, 8, 0, 0),
(28, 1, 1, 12, 1, 1),
(29, 1, 5, 12, 1, 0),
(30, 1, 6, 12, 1, 1),
(31, 1, 9, 12, 1, 1),
(33, 1, 4, 11, 1, 1),
(34, 1, 8, 11, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

DROP TABLE IF EXISTS `customer_info`;
CREATE TABLE IF NOT EXISTS `customer_info` (
  `CustomerID` int(100) NOT NULL AUTO_INCREMENT,
  `CustomerName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `PhoneNumber` varchar(14) NOT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`CustomerID`, `CustomerName`, `Email`, `Password`, `Address`, `PhoneNumber`) VALUES
(1, 'Subhanjana Dhar', 'subhanjana@gnail.com', '333', 'Jahangirnagar University,Savar,Dhaka', '+8801731916325'),
(2, 'ridhi ', 'ridhi@yahoo.com', '1234', 'Savar,Dhaka', '+8801731916879'),
(3, 'Risha', 'risha@gmail.com', 'risha12345', 'rangpur', '+8801928374566'),
(4, 'Bithi', 'bithi@gmail.com', 'bithi12345', 'Dhaka', '+8801836488383'),
(6, 'Amit', 'Amit@gmail.com', 'ahsl1234', 'Dhaka', '+8801928374566'),
(8, 'Maleeha Kaikaus', 'mkaikaus@gmail.com', '12345', 'Feni', '+8801636538666'),
(9, 'Afrin Eva', 'eva@gmail.com', '12345', 'Savar', '+8801612345678'),
(10, 'Ratri', 'r10@gmail.com', '12345', 'mirpur', '+8801636538666'),
(11, 'Marium Lofan', 'lofan@gmail.com', '12345', 'Savar', '+8801712345678'),
(12, 'Tisha', 'tisha@gmail.com', '12345', 'Dhaka', '+8801612345678'),
(13, 'Sushmita Saha', 'sushmita@gmail.com', '12345', 'mirpur', '+8801612345678');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

DROP TABLE IF EXISTS `product_info`;
CREATE TABLE IF NOT EXISTS `product_info` (
  `proID` int(30) NOT NULL AUTO_INCREMENT,
  `proName` varchar(255) NOT NULL,
  `proType` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `piece` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`proID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
