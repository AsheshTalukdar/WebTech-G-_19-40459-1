-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2021 at 06:25 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demoproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_user`
--

CREATE TABLE `about_user` (
  `id` int(11) NOT NULL,
  `house` varchar(10) NOT NULL,
  `road` varchar(10) NOT NULL,
  `block` varchar(10) NOT NULL,
  `division` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birth` date NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_user`
--

INSERT INTO `about_user` (`id`, `house`, `road`, `block`, `division`, `district`, `gender`, `birth`, `phone`) VALUES
(4, '2', '4', '6', 'Dhaka', 'Dhaka', 'male', '2000-01-06', 172311331),
(5, '77', '66', '55', 'Sylhet', 'Chittagong', 'male', '2002-04-12', 12345678);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `fname`, `lname`, `email`, `password`, `status`) VALUES
(4, 'ashesh11', 'Ashesh', 'Talukdar', 'asheshtalukdar65@gmail.com', 'AAAA#aaaa', 'Pending'),
(5, 'kajol33', 'kajol', 'talukdar', 'a2213123@gmail.com', 'QQQQ#qqqq', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_user`
--
ALTER TABLE `about_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_user`
--
ALTER TABLE `about_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
