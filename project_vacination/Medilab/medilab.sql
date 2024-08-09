-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 03:32 PM
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
-- Database: `medilab`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `vaccination` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `weight` int(10) NOT NULL,
  `age` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `vaccination`, `gender`, `email`, `weight`, `age`) VALUES
(1, 'Aaliyaan', 'yaar vaccine lagani ha', 'm', '0', 972, 2147483647),
(2, 'qwerty ahmed', 'kese ho', 'm', '0', 92, 1234789),
(3, 'qwertyuiop', 'kuch bhi matlab juch bhi', 'm', '0', 92, 1234567890),
(4, 'Aaliyaan', 'efwew', 'm', 'qwerty@gma', 92, 8926871),
(5, 'sir jee', 'efwew', 'm', 'rfb3ib@gm.', 92, 5),
(6, 'Aaliyaan', 'efwew', 'm', 'b3rib@gm.c', 10, 5),
(7, 'qwerty', 'polio', 'm', 'y@gmail.co', 16, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL,
  `cnic` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`, `cnic`) VALUES
(1, 'Aaliyaan', 'aaliyansaad1234@gmail.com', '9cdfb439c7876e703e307864c9167a15', '2023-01-20 14:18:01', 0),
(2, 'sir jee', 'rfb3rib@gm.com', '9cdfb439c7876e703e307864c9167a15', '2023-01-20 14:20:30', 0),
(3, 'qwerty', 'aaliyansaad@yahoo.com', '9cdfb439c7876e703e307864c9167a15', '2023-01-20 14:36:17', 0),
(4, 'Aaliyaa', 'aaliynsaad1234@gmail.com', '9cdfb439c7876e703e307864c9167a15', '2023-01-27 15:29:20', 123456789);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
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
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
