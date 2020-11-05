-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 11:15 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyermanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `administrator_id` varchar(20) NOT NULL,
  `city` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`administrator_id`, `city`, `address`) VALUES
('Admin010101', 'Dhaka', 'Dhanmondi 32, dhaka -1212');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `description` varchar(300) NOT NULL,
  `client_id` varchar(20) NOT NULL,
  `lawyer_id` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `date`, `description`, `client_id`, `lawyer_id`, `status`) VALUES
(2, '2019-04-24', 'ok test', 'Client5cbab2a1987da', 'Lawyer5cba0637a2a93', 'Pending'),
(3, '2019-04-22', 'test ok', 'Client5cbab2a1987da', 'Lawyer5cba06796f40b', 'Pending'),
(4, '2019-04-17', 'eygdshjdfcd', 'Client5cbab2a1987da', 'Lawyer5cbb38fddeafa', 'Pending'),
(5, '2019-04-24', 'ok ', 'Client5cbb36c2cfd64', 'Lawyer5cbb38fddeafa', 'Pending'),
(6, '2019-04-17', 'jdncdjkfc', 'Client5cbb36c2cfd64', 'Lawyer5cba0637a2a93', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` varchar(20) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `full_address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `contact_number`, `full_address`, `city`, `zip_code`, `image`) VALUES
('Client5cb6315a228dd', '01782343423', 'djbhd', 'Dhaka', '111 ', '20190420074817_24774766_1437963912919320_8170347638881.jpg'),
('Client5cbab2a1987da', '01780003423', 'ssdsd', 'Barishal', '1000', '20190420074817_24774766_1437963912919320_8170347638881673647_n.jpg '),
('Client5cbb36c2cfd64', '01782343423', 'dhaka', 'Dhaka', '1234 ', '20190420171202_Entity Relationship Diagram.jpeg ');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `lawyer_id` varchar(20) NOT NULL,
  `contact_Number` varchar(15) NOT NULL,
  `university_College` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `passing_year` varchar(100) NOT NULL,
  `full_address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `practise_Length` varchar(100) NOT NULL,
  `case_handle` varchar(500) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`lawyer_id`, `contact_Number`, `university_College`, `degree`, `passing_year`, `full_address`, `city`, `zip_code`, `practise_Length`, `case_handle`, `speciality`, `image`) VALUES
('Lawyer5cba0637a2a93', '01725655111', 'dfdfd', 'LLB', '2011', '32 sdsd', 'Dhaka', 's323', '1-5 years', 'Criminal matter,Civil matter,Writ Jurisdiction,', 'Commercial Law', '1575882.jpg'),
('Lawyer5cba06796f40b', '01725655222', 'de23', 'LLM', '2008', '32 dxd3c3 3e', 'Chittagong', 'dd', '6-10 years', 'Criminal matter,Civil matter,Writ Jurisdiction,', 'Commercial Law', '41463624_394349607765000_4230660266800.png'),
('Lawyer5cba0723cc8f9', '01725000111', 'dfdfd', 'LLB', '2012', '32', 'Chittagong', '42r23r', '16-20 years', 'Civil matter,Writ Jurisdiction,Company law,Labour Law,Property Law,', 'Investment Law', '41463624_394349607765000_4230660266800447488_n.png'),
('Lawyer5cbab501ee0df', '01725000022', 'saxsd', 'LLM', '2016', 'dewwsdcc', 'Dhaka', 'ed32wed', '11-15 years', 'Commercial matter,Construction law,Information Technology,Family Law,Religious Matter,Investment Matter,', 'Construction Law', '20190420075825_IMG_20180214_230821.jpg'),
('Lawyer5cbb38fddeafa', '01782343423', 'dia', 'LLB', '2013', '1', 'Dhaka', '1212', '1-5 years', 'Contract law,Commercial matter,Construction law,Information Technology,', 'IT Law', '20190420172133_IAR_icon-2000x1126.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` varchar(20) NOT NULL,
  `first_Name` varchar(100) NOT NULL,
  `last_Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `first_Name`, `last_Name`, `email`, `password`, `status`, `role`) VALUES
('Admin010101', 'Ershad', 'Husam', 'admin@gmail.com', 'admin', 'Active', 'Admin'),
('Client5cb6315a228dd', 'ok', 'ok1', 'kaji@gmail.com ', '05622 ', 'Block', 'User'),
('Client5cbab2a1987da', 'hosen', 'ersad', 'ho@gmail.com ', '99122 ', 'Active', 'User'),
('Client5cbb36c2cfd64', 'Arman', 'hosen', 'rocks@gmail.com ', '098765', 'Active', 'User'),
('Lawyer5cba0637a2a93', 'Husam', 'hosen', 'h@gmail.com ', '121212', 'Active', 'Lawyer'),
('Lawyer5cba06796f40b', 'Ersha', 'husam', 'sd@gmail.com', '40296 ', 'Active', 'Lawyer'),
('Lawyer5cba0723cc8f9', 'hello', 'ok', 'he@gmail.com ', '91351 ', 'Active', 'Lawyer'),
('Lawyer5cbab501ee0df', 'arman', 'khan', 'arma@gmail.com', '45357 ', 'Active', 'Lawyer'),
('Lawyer5cbb38fddeafa', 'mahadi', 'Mahin', 'rocks2as@gmail.com ', '99549 ', 'Active', 'Lawyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`administrator_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`lawyer_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
