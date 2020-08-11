-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 02:01 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `dev_id` int(5) NOT NULL,
  `dev_status` int(1) NOT NULL,
  `dev_name` varchar(50) NOT NULL,
  `id_cat` int(5) NOT NULL,
  `id_room` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`dev_id`, `dev_status`, `dev_name`, `id_cat`, `id_room`) VALUES
(13, 1, 'Lights', 1, 1),
(14, 1, 'TV', 2, 1),
(15, 1, 'Music', 3, 1),
(16, 1, 'AC', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `modes`
--

CREATE TABLE `modes` (
  `id` int(5) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_room` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modes`
--

INSERT INTO `modes` (`id`, `id_cat`, `id_room`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `moods_cat`
--

CREATE TABLE `moods_cat` (
  `cat_id` int(5) NOT NULL,
  `cat_status` int(1) NOT NULL,
  `cat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `moods_cat`
--

INSERT INTO `moods_cat` (`cat_id`, `cat_status`, `cat_name`) VALUES
(1, 1, 'Study'),
(2, 1, 'Relax'),
(3, 1, 'Chill');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(4) NOT NULL,
  `room_status` int(1) NOT NULL,
  `room_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_status`, `room_name`) VALUES
(1, 1, 'Bed Room'),
(2, 1, 'Drying Room'),
(3, 1, 'Rest room'),
(4, 1, 'Kitchen'),
(5, 1, 'Store');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `user_status` int(1) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_fullname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(12) NOT NULL,
  `user_pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_status`, `user_name`, `user_fullname`, `user_email`, `user_phone`, `user_pass`) VALUES
(1, 1, 'khizer', 'Muhammad Khizer Sajjad', 'mkhizersajjad@gmail.com', '03440177155', '123'),
(2, 1, 'khizer', 'Khizer Sajjad', 'mkhizersajjad1436@gmail.com', '03094118718', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`dev_id`);

--
-- Indexes for table `modes`
--
ALTER TABLE `modes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moods_cat`
--
ALTER TABLE `moods_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `dev_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `modes`
--
ALTER TABLE `modes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `moods_cat`
--
ALTER TABLE `moods_cat`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
