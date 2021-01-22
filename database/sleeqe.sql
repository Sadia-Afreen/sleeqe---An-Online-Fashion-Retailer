-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 07:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sleeqe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `userEmailid` varchar(255) DEFAULT NULL,
  `itemId` int(11) DEFAULT NULL,
  `FromDate` varchar(20) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `userEmailid`, `itemId`, `FromDate`, `message`, `status`) VALUES
(1, 's.afreen07@gmail.com', 5, '13/1/2021', 'To Buy.', 1),
(2, 's.afreen07@gmail.com', 5, '13/1/2021', 'bla bla', 1),
(3, 's.afreen07@gmail.com', 3, '13/1/2021', 'bla bla', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cloths`
--

CREATE TABLE `cloths` (
  `id` int(11) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `overview` longtext DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `image1` longtext NOT NULL,
  `image2` longtext NOT NULL,
  `image3` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cloths`
--

INSERT INTO `cloths` (`id`, `code`, `overview`, `material`, `category`, `size`, `price`, `discount`, `image1`, `image2`, `image3`) VALUES
(3, 'irish', 'comfortable self worked halfsilk shirt!', 'halfsilk', 'shirt', '36/38/40/42/44', 830, 'None', 'irish1.jpg', 'irish2.jpg', 'irish3.jpg'),
(5, 'Seafoam', 'Get additional 10% DISCOUNT on promo price on this beautiful georgette kurti by following us on ig and joining the private group.', 'crepe georgette', 'kurti', '36/38/40/42/44', 1099, '10%', 'Seafoam1.jpg', 'Seafoam2.jpg', ''),
(6, 'Butterscotch1', 'Get this beautiful top to add some sunshine in your life!1', 'georgette1', 'tops1', '36/38/40/42/441', 10501, 'Promo Available1', 'Butterscotch2.jpg', 'Butterscotch1.jpg', 'Butterscotch1.jpg'),
(7, 'Lime Green', 'Feel a bit fresher wearing this lime green top in the summer! ☀\r\nStock limited so hurry and grab yours! ', 'georgette with attached inner', 'tops', '36/38/40/42/44', 1250, 'Promo Available', 'Lime Green1.jpg', 'Lime Green2.jpg', 'Lime Green3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `emailid` varchar(255) DEFAULT NULL,
  `password` longtext DEFAULT NULL,
  `contactno` char(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `emailid`, `password`, `contactno`, `address`) VALUES
(1, 'Sadia Afreen', 's.afreen07@gmail.com', 'b351ebcc5e256fc51edcb1f4e4b72fd2', '01949328244', NULL),
(2, 'Raisa Tahsin', 'raisa.tahsin@gmail.com', '4b8ed057e4f0960d8413e37060d4c175', '01945678910', 'China Building Lane, Azimpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cloths`
--
ALTER TABLE `cloths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cloths`
--
ALTER TABLE `cloths`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
