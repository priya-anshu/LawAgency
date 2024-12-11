-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2024 at 03:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawagenc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`, `email`, `contact_number`) VALUES
(2, 'admin_852', '123456', 'Alpha', 'alpha@gmail.com', '9987654321'),
(100, 'priyanshu_9808', '1234', 'Priyanshu Dhyani', 'priyanshu@gmail.com', '9808123123'),
(101, 'ayushrana101', '123', 'Ayush Rana', 'ayushrana101@gmail.com', '9844555222'),
(102, 'avantikakim102', '123', 'Avantika Kimothi', 'avantikaikim@gmail.com', '8885552224');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `username`, `password`, `name`, `email`, `contact_number`, `address`) VALUES
(1, 'shivam12', 'shivam123', 'Shivam Gusain', 'shivam@gmail.com', '1112223333', '123 Main St.ISBT, Dehradun'),
(2, 'Aman12', 'aman123', 'Aman Rawat', 'aman@gmail.com', '4445556666', '456 Elm St.Rio MALL, City2'),
(3, 'john_doe', 'johnPass123', 'John Doe', 'john.doe@example.com', '9876543210', '123 Green St, Springfield'),
(4, 'jane_smith', 'janePass456', 'Jane Smith', 'jane.smith@example.com', '8765432109', '456 Oak Ave, Riverdale'),
(5, 'mike_brown', 'mikePass789', 'Mike Brown', 'mike.brown@example.com', '7654321098', '789 Pine Ln, Centerville'),
(6, 'sara_jones', 'saraPass321', 'Sara Jones', 'sara.jones@example.com', '6543210987', '321 Maple Dr, Brookfield'),
(7, 'david_clark', 'davidPass654', 'David Clark', 'david.clark@example.com', '5432109876', '654 Birch Rd, Lakeview'),
(8, 'emily_white', 'emilyPass987', 'Emily White', 'emily.white@example.com', '4321098765', '987 Cedar St, Hilltown'),
(9, 'paul_martin', 'paulPass111', 'Paul Martin', 'paul.martin@example.com', '3210987654', '111 Elm St, Meadowville'),
(10, 'linda_davis', 'lindaPass222', 'Linda Davis', 'linda.davis@example.com', '2109876543', '222 Willow Way, Forestville'),
(11, 'steve_lee', 'stevePass333', 'Steve Lee', 'steve.lee@example.com', '1098765432', '333 Spruce Blvd, Glenwood'),
(12, 'anna_wilson', 'annaPass444', 'Anna Wilson', 'anna.wilson@example.com', '1987654321', '444 Aspen Ct, Riverside');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `lawyer_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `specialization` varchar(100) DEFAULT NULL,
  `experience_years` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`lawyer_id`, `username`, `password`, `name`, `email`, `contact_number`, `specialization`, `experience_years`) VALUES
(1, 'Ayush7858', 'ayush', 'Ayush Rana', 'ayush@gmail.com', '7778889999', 'Divorce ', 5),
(2, 'Vijay9898', 'vijay', 'Vijay Nautiyal', 'vijay@gmail.com', '0001112222', 'Corporate Law', 8),
(3, 'arjun_mehta', 'arjunPass123', 'Arjun Mehta', 'arjun.mehta@example.com', '9876543210', 'Criminal Law', 7),
(4, 'radhika_sharma', 'radhikaPass456', 'Radhika Sharma', 'radhika.sharma@example.com', '8765432109', 'Family Law', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`lawyer_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `lawyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
