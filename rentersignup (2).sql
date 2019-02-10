-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 10:54 PM
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
-- Table structure for table `rentersignup`
--

CREATE TABLE `rentersignup` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(60) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `date_of_birth` varchar(45) NOT NULL,
  `contact_no` varchar(45) NOT NULL,
  `address` varchar(50) NOT NULL,
  `NID` varchar(85) NOT NULL,
  `EmailId` varchar(78) NOT NULL,
  `password` varchar(85) NOT NULL,
  `confirm_password` varchar(85) NOT NULL,
  `fileToUpload` varchar(500) NOT NULL,
  `insert_time` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentersignup`
--

INSERT INTO `rentersignup` (`id`, `FirstName`, `LastName`, `UserName`, `gender`, `date_of_birth`, `contact_no`, `address`, `NID`, `EmailId`, `password`, `confirm_password`, `fileToUpload`, `insert_time`) VALUES
(1, 'jjj', 'bb', 'hh', 'male', '2017-11-14', 'hjhj', '', '', '', '', '', '', ''),
(2, 'e', 'r', 'f', 'male', '2017-11-14', 'fd', 'e', 'rf', 'd', 'ef', 'e', '', ''),
(3, 'dwd', 'dwd', 'dwd', 'male', '2017-11-21', '01876925709', 'kllk', 'dwdwd', 'rezuanshohan3@gmail.com', '789', '789', 'images/16640602_1815175928735155_4191592855257422895_n.jpg', ''),
(4, 'pranto', 'sham', 'shams', 'male', '2017-11-15', '01876925709', 'tangail', '45', 'rezuanshohan3@gmail.com', '78', '78', 'images/giphy (6).gif', '2017-11-26 22:15:28'),
(5, 'shohan', 'shohan1', 'sho', 'male', '2017-11-08', '01876925709', 'nikumj', 'ssw', 'rezuanshohan3@gmail.com', '789', '789', 'images/c92083e09ce42dfae23d946b05fd9c4c.jpg', '2017-11-28 18:48:06'),
(6, 'sldllwd', 'dwdw', 'dwdwd', 'male', '2017-12-12', '01876925709', 'dwdwd', 'dwdwd', 'rezuanshohan3@gmail.com', '0195', '0195', 'images/1.docx', '2017-12-02 05:45:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rentersignup`
--
ALTER TABLE `rentersignup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rentersignup`
--
ALTER TABLE `rentersignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
