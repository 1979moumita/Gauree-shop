-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 12, 2022 at 12:28 PM
-- Server version: 10.4.13-MariaDB
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
