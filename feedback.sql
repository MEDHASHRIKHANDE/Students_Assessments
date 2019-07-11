-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 11, 2019 at 12:38 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notice_board`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(20) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `facility_name` varchar(255) DEFAULT NULL,
  `q1` int(3) NOT NULL,
  `q2` int(3) NOT NULL,
  `q3` int(3) NOT NULL,
  `q4` int(3) NOT NULL,
  `q5` int(3) NOT NULL,
  `q6` int(3) NOT NULL,
  `q7` int(3) NOT NULL,
  `q8` int(3) NOT NULL,
  `q9` int(3) NOT NULL,
  `q10` int(3) NOT NULL,
  `q11` int(3) NOT NULL,
  `q12` int(3) NOT NULL,
  `q13` longtext NOT NULL,
  `q14` longtext NOT NULL,
  `average rating` int(5) NOT NULL,
  `cdate` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_name`, `facility_name`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `average rating`, `cdate`) VALUES
(2, 'name1', '', 4, 4, 3, 4, 4, 2, 1, 1, 1, 1, 4, 4, 'asdfgh', 'asdfgh', 3, '11-07-2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
