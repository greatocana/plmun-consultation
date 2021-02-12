-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 04:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consultation`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `stud_id` int(11) NOT NULL,
  `stud_no` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Mname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`stud_id`, `stud_no`, `Fname`, `Mname`, `Lname`, `course`, `year`, `password`) VALUES
(1, '123', 'qwe', 'qwe', 'qwe', 'Bachelor of Science in Information Technology', 'qwe', 'qwe'),
(2, '5555', 'asd', 'asd', 'asd', 'Bachelor of Arts in Communication', '1st', '7815696ecbf1c96e6894b779456d330e'),
(3, '000', 'asd', 'asd', 'sad', 'Bachelor of Arts in Communication', '1st', '7815696ecbf1c96e6894b779456d330e'),
(5, '16118504', 'Christian Ralf', 'n/a', 'Ocana', 'Bachelor of Arts in Information Technology', '4th', '39ff21e7fe84e96f9c5e970df323d53a'),
(6, '123', 'samplefname', 'samplemname', 'samplelname', 'Bachelor of Science in Information Technology', '1st', ''),
(8, '1234', 'samplefname', 'samplemname', 'samplelname', 'Bachelor of Science in Information Technology', '1st', 'NjdQVDFLT3RxaWVTVHhiUHpZUktEZz09fDqbCwvDpF90pW7WDoRlpPBp'),
(9, '1234', 'samplefname', 'samplemname', 'samplelname', 'Bachelor of Science in Information Technology', '1st', 'R3QvM3UvK1M3VVoyUkRhL0s4MFVlQT09fDqUJMyPsWXlrzrfv+vHNeRV'),
(10, '51232', '5123', '5123', '5123', 'Bachelor of Science in Business Administration', '4th', 'cmpWM1M1a25ndzFIOUlQRHR2N3pxdz09fDptcC8hXT1uiDB8xoXRz2WV');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
