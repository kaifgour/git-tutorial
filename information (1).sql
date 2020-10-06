-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2020 at 11:29 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `number` int(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `name`, `email`, `number`, `address`) VALUES
(2, 'hiansid', 'kaifi252000@gm', 121313313, 'kajsbdiuwedbmndc'),
(3, 'hiansid', 'kaifi252000@gm', 121313313, 'kajsbdiuwedbmndc'),
(4, 'kaif', 'kaifi252000@gmail.co', 1234566, 'kajsbdiuwedbmndc'),
(5, 'kaif', 'kaifi252000@gmail.co', 1234566, 'kajsbdiuwedbmndc'),
(6, 'kaif', 'kaifi252000@gmail.co', 1234566, 'kajsbdiuwedbmndc'),
(7, 'kaif', 'kaifi252000@gmail.co', 1234566, 'kajsbdiuwedbmndc'),
(8, 'kaif', 'kaifi252000@gmail.co', 1234566, 'kajsbdiuwedbmndc'),
(9, 'kaif', 'kaifi252000@gmail.co', 1234566, 'kajsbdiuwedbmndc'),
(10, 'kaif', 'kaifi252000@gmail.co', 1321, 'kajsbdiuwedbmndc'),
(11, 'kaif', 'kaifi252000@gmail.co', 1321, 'kajsbdiuwedbmndc'),
(12, 'rohan', 'kaifi252000@gmail.co', 9978776, 'kwdiwhuigedhxj'),
(13, 'harry', 'hafrry@i9792', 1235475, 'kajsbdiuwedbmndc'),
(14, 'hiansid', 'kaifi252000@gmail.co', 1234566789, 'kajsbdiuwedbmndc'),
(15, 'hiansid', 'kaifi252000@gmail.co', 1234566789, 'kajsbdiuwedbmndc'),
(16, 'hiansid', 'kaifi252000@gmail.co', 1133, 'kajsbdiuwedbmndc'),
(17, 'hiansid', 'kaifi252000@gmail.co', 1133, 'kajsbdiuwedbmndc'),
(18, 'hiansid', 'kaifi252000@gmail.co', 1133, 'kajsbdiuwedbmndc'),
(19, 'hiansid', 'kaifi252000@gmail.co', 1133, 'kajsbdiuwedbmndc'),
(20, 'hiansid', 'kaifi252000@gmail.co', 1133, 'kajsbdiuwedbmndc'),
(21, 'hiansid', 'kaifi252000@gmail.co', 1133, 'kajsbdiuwedbmndc'),
(22, 'hiansid', 'kaifi252000@gmail.co', 1133, 'kajsbdiuwedbmndc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
