-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 09:16 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_name` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_name`, `admin_password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `doner_reg`
--

CREATE TABLE `doner_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `bodyw` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` bigint(12) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `ndoner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doner_reg`
--

INSERT INTO `doner_reg` (`id`, `name`, `gender`, `blood`, `bodyw`, `email`, `number`, `city`, `address`, `ndoner`) VALUES
(1, 'prashant chatarwad ', 'male', 'O+', '56', 'prashant@gmail.com', 2147483647, 'Latur', 'latur', 'yes'),
(4, 'Aman Gupta', 'male', 'O-', '56', 'amn@gmail.com', 5687964321, 'Kolhapur', 'kolhapur', 'yes'),
(5, 'sahil', 'male', 'A+', '58', 'sahil@gmail.com', 6598742310, 'Mumbai', 'mumbai', 'Yes'),
(6, 'Sagar Shinde', 'male', 'O-', '56', 'sagar@gmail.com', 9876541230, 'Latur', 'Latur', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `number`, `message`) VALUES
(1, 'Prashant', 'p@gmail.com', '9865321478', 'I want blood '),
(2, 'Manish Jain', 'manish@gmail.com', '9865321478', 'I want O+ blood if available contact me');

-- --------------------------------------------------------

--
-- Table structure for table `need_blood`
--

CREATE TABLE `need_blood` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `blood` varchar(100) NOT NULL,
  `bunit` varchar(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `reason` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `need_blood`
--

INSERT INTO `need_blood` (`id`, `name`, `gender`, `blood`, `bunit`, `dname`, `city`, `address`, `contact`, `email`, `date`, `reason`) VALUES
(1, 'Aman', 'male', 'A2B', '2', 'Dr.amit', 'Pune', 'city hospital', 2147483647, 'a@gmail.com', '2023-06-04', 'accidental case'),
(3, 'Siddhart Malhotra', 'male', 'A1-', '2', 'Dr.Salunke', 'Mumbai', 'mumbai', 6897543210, 'sid@gmail.com', '2023-05-04', 'accidental case'),
(4, 'Akash Munde', 'male', 'O-', '2', 'Dr.Shaikh', 'Jalna', 'City Hospital Jalna', 6598745213, 'ak@gmail.com', '2023-06-04', 'Accident case');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doner_reg`
--
ALTER TABLE `doner_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `need_blood`
--
ALTER TABLE `need_blood`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doner_reg`
--
ALTER TABLE `doner_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `need_blood`
--
ALTER TABLE `need_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
