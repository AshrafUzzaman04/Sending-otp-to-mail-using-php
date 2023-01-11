-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 09:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fa_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(250) NOT NULL,
  `name` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `country` varchar(500) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `dob` date NOT NULL,
  `img` varchar(5000) NOT NULL,
  `join_t` varchar(30) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `email`, `mobile`, `password`, `status`, `address`, `country`, `gender`, `dob`, `img`, `join_t`, `date_time`) VALUES
(79, 'fadsf  sdfasd ', 'af', 'ashraf.uzzaman04082004@gmail.com', 'aaaafsasdf', 'asdfasdf', '', 'afadsf', 'asfdaf ', 'Male', '2005-06-05', '', NULL, '2023-01-11 20:34:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
