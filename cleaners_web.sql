-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 01:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cleaners_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('nadara@gmail.com', 'nadara123**');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointmentNo` varchar(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `cleaner` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `contact` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointmentNo`, `fullname`, `cleaner`, `time`, `date`, `nic`, `contact`) VALUES
('A002', 'Arjun weerathunga', 'Bimal Hettiarachchi', '10.00am', 'Tuesday', '195625698563', 777810235),
('A001', 'Kamal Gunawardane', 'Sanath piris', '9.00am', 'Monday', '198725659845', 775866325),
('A003', 'Kamala perera', 'Nuwan silva', '11.00am', 'Wendsday', '198436152489', 714589632);

-- --------------------------------------------------------

--
-- Table structure for table `appointmentsdateandtime`
--

CREATE TABLE `appointmentsdateandtime` (
  `dateAndTime` varchar(255) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointmentsdateandtime`
--

INSERT INTO `appointmentsdateandtime` (`dateAndTime`, `fName`, `lName`) VALUES
('Monday', 'Sanath ', 'Perera'),
('Monday', 'Sanath ', 'Perera'),
('Tuesday', 'Bimal ', 'Hettiarachchi'),
('Wendsday', 'Nuwan ', 'Silva'),
('Thursday', 'Indra ', 'Perera'),
('Friday', 'Sandun ', 'De silva'),
('Saturday', 'Ramani ', 'Wijerathna');

-- --------------------------------------------------------

--
-- Table structure for table `cleaners`
--

CREATE TABLE `cleaners` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rePassword` varchar(255) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `midInitial` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `refNo` varchar(255) NOT NULL,
  `contact` decimal(20,0) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cleaners`
--

INSERT INTO `cleaners` (`username`, `password`, `rePassword`, `fName`, `midInitial`, `lName`, `refNo`, `contact`, `email`) VALUES
('test', 'test', 'test', 'test', 'test', 'test', 'test', 0, 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rePassword` varchar(255) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `midInitial` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `contact` decimal(20,0) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`username`, `password`, `rePassword`, `fName`, `midInitial`, `lName`, `age`, `gender`, `address`, `nic`, `contact`, `email`) VALUES
('test', 'test', 'test', 'test', 'test', 'test', 0, 'test', 'test', 'test', 0, 'test@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointmentNo`);

--
-- Indexes for table `cleaners`
--
ALTER TABLE `cleaners`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
