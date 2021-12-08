-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 12:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nba`
--

-- --------------------------------------------------------

--
-- Table structure for table `notifs`
--

CREATE TABLE `notifs` (
  `id` int(3) NOT NULL,
  `byName` varchar(30) NOT NULL,
  `forName` varchar(30) NOT NULL,
  `meta` int(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `link` text NOT NULL,
  `expiry` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifs`
--

INSERT INTO `notifs` (`id`, `byName`, `forName`, `meta`, `category`, `title`, `description`, `link`, `expiry`) VALUES
(1, 'Dr Lekha A', 'MCA 2 sem', 0, 'Registration', 'FINAL CALL FOR REGISTRATION OF FIRST YEAR STUDENTS', 'REGISTER !!', 'https://www.google.com', '2021-03-26 00:00:00.000000'),
(3, 'Tamal Dey', 'MCA 1 sem', 0, 'Exams and Practical Schedule', 'ST WEB ISA1', 'Complete your Projects by 13 March 2021', 'https://www.google.com', '2021-03-19 00:00:00.000000'),
(4, 'Santosh Katti', 'MCA 1 sem', 0, 'Exams and Practical Schedule', 'Python Quiz', 'The Quiz scheduled for this term', 'www.quizizz.com', '2021-03-26 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `type` int(1) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`type`, `name`, `email`, `password`) VALUES
(0, 'Dep Head', 'dephead@ca_pes.edu', 'dephead'),
(1, 'Teacher', 'teacher@ca-pes.edu', 'teacher'),
(2, 'Student', 'student@pes.edu', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifs`
--
ALTER TABLE `notifs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notifs`
--
ALTER TABLE `notifs`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
