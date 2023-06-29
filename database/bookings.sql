-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 05:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookingmycake`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `order_list` text NOT NULL,
  `pickup` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `name`, `number`, `email`, `address`, `order_list`, `pickup`) VALUES
(1, 'Baba', '08192313133', 'babacake@gmail.com', 'Jalan Baba Rafi 23, Surabaya.', '1. Kue Red Velvet\r\n2. Kue Nastar', 0),
(2, 'Dina', '081293130021', 'dinanana@gmail.com', 'Jalan Surabaya No. 2, Surabaya.', '1. Kue Putri Salju\r\n2. Cake Oreo', 0),
(3, 'Piper', '08210381413', 'piperthecat@gmail.com', 'Jalan Kucing Bandung, No. 21', '1. Nastar\r\n2. Cake Red Velvet    ', 0),
(4, 'Piyu', '08192831912', 'piyupenyu@gmail.com', 'Jalan Pantai Indah No.81', 'Kue Nastar', 1),
(5, 'Maya', '081319311', 'onmayamay@gmail.com', 'Jalan Permata Kasih, No. 21, Sidoarjo.', '1. Cookies Oreo', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
