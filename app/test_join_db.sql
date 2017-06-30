-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2017 at 02:06 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_join_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_persons`
--

CREATE TABLE `tb_persons` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `position` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_persons`
--

INSERT INTO `tb_persons` (`id`, `firstname`, `lastname`, `position`) VALUES
(1, 'Rafon', 'Amista', 1),
(2, 'Shiela Angela', 'Amista', 2),
(5, 'Yoona Angela', 'Amista', 3),
(6, 'Baby Pierce Philipp', 'Amista', 2),
(11, 'asdsadsa', 'sdasdasd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_positions`
--

CREATE TABLE `tb_positions` (
  `id` int(11) NOT NULL,
  `title` enum('CEO','President','Vice-President','Rank and File') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_positions`
--

INSERT INTO `tb_positions` (`id`, `title`) VALUES
(1, 'CEO'),
(2, 'President'),
(3, 'Vice-President'),
(4, 'Rank and File');

-- --------------------------------------------------------

--
-- Table structure for table `tb_subordinates`
--

CREATE TABLE `tb_subordinates` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `position` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_subordinates`
--

INSERT INTO `tb_subordinates` (`id`, `firstname`, `lastname`, `manager_id`, `position`) VALUES
(1, 'Felipe', 'Amista', 1, 4),
(3, 'Beth', 'Amista', 5, 4),
(4, 'Twila', 'Amista', 6, 4),
(5, 'Jusan', 'Amista', 6, 4),
(6, 'Yaboy', 'Amista', 1, 4),
(7, 'Baby Yoona', 'Amista', 2, 4),
(8, 'Pirsoy', 'Amista', 2, 4),
(9, 'Testname', 'Testlastname', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_subordinates_pets`
--

CREATE TABLE `tb_subordinates_pets` (
  `id` int(10) NOT NULL,
  `subordinate_id` int(11) NOT NULL,
  `pet` enum('dog','cat','fish') NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_subordinates_pets`
--

INSERT INTO `tb_subordinates_pets` (`id`, `subordinate_id`, `pet`, `name`) VALUES
(3, 8, 'dog', 'Killer'),
(4, 8, 'cat', 'fluffy'),
(5, 7, 'fish', 'nemo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_persons`
--
ALTER TABLE `tb_persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_positions`
--
ALTER TABLE `tb_positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_subordinates`
--
ALTER TABLE `tb_subordinates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_subordinates_pets`
--
ALTER TABLE `tb_subordinates_pets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_persons`
--
ALTER TABLE `tb_persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_positions`
--
ALTER TABLE `tb_positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_subordinates`
--
ALTER TABLE `tb_subordinates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_subordinates_pets`
--
ALTER TABLE `tb_subordinates_pets`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
