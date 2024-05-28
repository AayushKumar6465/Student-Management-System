-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 11:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblclass`
--

CREATE TABLE `tblclass` (
  `id` int(50) NOT NULL,
  `classname` varchar(50) DEFAULT NULL,
  `section` varchar(25) DEFAULT NULL,
  `creationdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblclass`
--

INSERT INTO `tblclass` (`id`, `classname`, `section`, `creationdate`) VALUES
(1, 'Web Dev', 'A', '2024-04-13 11:08:46'),
(2, 'Data Mining', 'B', '2024-04-13 11:10:38'),
(4, 'Network Security', 'D', '2024-04-14 17:00:16');

-- --------------------------------------------------------

--
-- Table structure for table `tblnotic`
--

CREATE TABLE `tblnotic` (
  `id` int(50) NOT NULL,
  `noticetitle` varchar(50) DEFAULT NULL,
  `classid` int(50) DEFAULT NULL,
  `noticemessage` varchar(250) DEFAULT NULL,
  `creationdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblnotic`
--

INSERT INTO `tblnotic` (`id`, `noticetitle`, `classid`, `noticemessage`, `creationdate`) VALUES
(1, 'class timing', 5, 'class timing 10am to 11am tomorrow.', '2024-04-14 16:50:33'),
(2, 'Registration', 12, 'Registration for board exams', '2024-04-14 17:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `tblpublicnotice`
--

CREATE TABLE `tblpublicnotice` (
  `id` int(50) NOT NULL,
  `noticetitle` varchar(50) DEFAULT NULL,
  `noticemessage` varchar(250) DEFAULT NULL,
  `creationdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpublicnotice`
--

INSERT INTO `tblpublicnotice` (`id`, `noticetitle`, `noticemessage`, `creationdate`) VALUES
(1, 'Exams 2024', 'Exams are scheduled to commence on 3rd may.', '2024-04-14 11:01:17'),
(2, 'Internal practical of 5th sem', 'The exams are scheduled to commence on 29th or 30th April.', '2024-04-14 11:13:24'),
(4, 'Holidays', 'Holidays from 10th to 17th April.', '2024-04-14 11:15:42'),
(5, 'Notice 2024', 'this is for testing', '2024-04-14 11:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(50) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `subject` varchar(30) DEFAULT NULL,
  `occupation` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `phone`, `subject`, `occupation`) VALUES
(1, 'John', 'j@gmail.com', 14617237, 'Software Engineering', 'MTECH'),
(3, 'Ramesh', 'ramesh@gmail.com', 1412351235, 'C++', 'MCA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `phone` int(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `fathername` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `usertype`, `password`, `gender`, `dob`, `fathername`) VALUES
(1, 'admin', 8934750, 'ad@mail.com', 'admin', '1234', NULL, NULL, NULL),
(21, 'Amit', 12934125, 'am@gmail.com', 'student', '1234', 'male', '2005-09-16', 'Mohan Kumar'),
(22, 'Manav', 2384582, 'm@gmail.com', 'student', '1234', 'male', '2014-03-04', 'Naresh Kumar '),
(23, 'Aayush ', 2147483647, 'ay@gmail.com', 'student', '1234', 'male', '2004-07-13', 'Naresh Kumar '),
(24, 'Harshit', 2147483647, 'h@gmail.com', 'student', '1234', 'male', '2004-06-21', 'Mr Bhupendra'),
(25, 'Akshat', 278562, 'ak@gmail.com', 'student', '1234', 'male', '2003-02-09', 'Pawan Arora'),
(26, 'Abhishek', 2512216, 'ab@gmail.com', 'student', '1234', 'male', '2004-05-19', 'Sr Abhishek'),
(27, 'Garnet', 275692, 'g@gmail.com', 'student', '1234', 'female', '2003-01-06', 'Ashok Kumar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblclass`
--
ALTER TABLE `tblclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblnotic`
--
ALTER TABLE `tblnotic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpublicnotice`
--
ALTER TABLE `tblpublicnotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
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
-- AUTO_INCREMENT for table `tblclass`
--
ALTER TABLE `tblclass`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblnotic`
--
ALTER TABLE `tblnotic`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpublicnotice`
--
ALTER TABLE `tblpublicnotice`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
