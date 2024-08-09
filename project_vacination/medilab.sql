-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 01:41 PM
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
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `Email`, `password`, `pic`) VALUES
(1, 'Hasnain', 'hasnain@gmail.com', '123', '[value-5]');

-- --------------------------------------------------------

--
-- Table structure for table `al_child_details`
--

CREATE TABLE `al_child_details` (
  `id` int(11) NOT NULL,
  `Child name` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `Weight` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Father name` varchar(255) NOT NULL,
  `Father cnic` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Vacination` varchar(255) NOT NULL,
  `Date time` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Doctor` varchar(255) NOT NULL,
  `Hospital` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `al_child_details`
--

INSERT INTO `al_child_details` (`id`, `Child name`, `Age`, `Weight`, `Status`, `Father name`, `Father cnic`, `Address`, `Email`, `Phone`, `Vacination`, `Date time`, `Gender`, `Doctor`, `Hospital`) VALUES
(95, 'ali', '2', '10kg', '1st dose', 'khalid', '444444444475', 'karachi ', 'khalid@gmail.com', '03432861399', 'polio', '12 4 2023 4:50pm', 'male', 'Amna', 'Jinnah Postgraduate Medical Center');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `ID` int(11) NOT NULL,
  `Child name` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `Vacination` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Weight` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`ID`, `Child name`, `Age`, `Vacination`, `Gender`, `Weight`, `Status`) VALUES
(2, 'name', 'age', 'polio', 'gen', ' 44', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `Booking` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `Name`, `status`, `address`, `Booking`) VALUES
(1, ' ', ' ', ' ', '');

-- --------------------------------------------------------

--
-- Table structure for table `messsage`
--

CREATE TABLE `messsage` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messsage`
--

INSERT INTO `messsage` (`id`, `name`, `email`, `subject`, `message`) VALUES
(70, 'asa', 'noman@gmail.com', 'sasa', 'asdsa');

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
(7, 'qwerty', 'polio', 'm', 'y@gmail.co', 16, 5),
(8, 'hasnain', '2', 'm', 'noman@gmai', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CNIC` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(8, 'hasnain', 'lasnianalikhan039@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0000-00-00 00:00:00', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Date time` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`ID`, `Name`, `Date time`, `status`) VALUES
(1, 'hasnain', '12 4 2023 4:50pm', ' gg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `al_child_details`
--
ALTER TABLE `al_child_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messsage`
--
ALTER TABLE `messsage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `al_child_details`
--
ALTER TABLE `al_child_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messsage`
--
ALTER TABLE `messsage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
