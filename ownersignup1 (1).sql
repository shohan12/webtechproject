-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 10:53 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ownersignup1`
--

CREATE TABLE `ownersignup1` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `date` varchar(500) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `EmailId` varchar(500) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `ConfirmPassword` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `fileToUpload` varchar(5000) NOT NULL,
  `insert_time` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ownersignup1`
--

INSERT INTO `ownersignup1` (`id`, `firstname`, `lastname`, `username`, `gender`, `date`, `nid`, `Phone`, `EmailId`, `Password`, `ConfirmPassword`, `address`, `fileToUpload`, `insert_time`) VALUES
(1, 'sw', 'po', 'sw', 'male', '2017-11-15', 'lol', '01876925709', 'rezuanshohan3@gmail.com', '789', '789', 'ddde', 'images/images (7).jpg', '2017-11-28 19:21:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ownersignup1`
--
ALTER TABLE `ownersignup1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ownersignup1`
--
ALTER TABLE `ownersignup1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
