-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2025 at 03:39 PM
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
-- Database: `form_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','staff') NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(15) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `gender` text NOT NULL,
  `experience` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `contact_no`, `created_at`, `gender`, `experience`) VALUES
(11, 'mawi wowie', 'asdas', 'staff', 'gacitarsaiah@gmail.com', '123123213', '2025-12-10 06:33:17', 'Male', ''),
(12, 'mawi wowie', 'asdas', 'staff', 'gacitarsaiah@gmail.com', '123123213', '2025-12-10 06:36:53', 'Male', ''),
(13, 'asdas', 'asda', 'staff', 'admin@bakery.com', '123123', '2025-12-10 06:37:40', 'Male', ''),
(14, 'asdas', 'asda', 'staff', 'admin@bakery.com', '123123', '2025-12-10 06:38:13', 'Male', 'No'),
(15, 'Rsaiahklent', 'asdasd', 'staff', 'abella.reyland@yahoo.com', '123123', '2025-12-10 06:38:22', 'Male', 'No'),
(16, 'sadsa', 'asdas', 'staff', 'admin@bakery.com', '123123', '2025-12-10 06:41:51', 'Female', 'Yes'),
(17, 'sda', 'asdasd', 'staff', 'vean.gacita.coc@phinmaed.com', '123123', '2025-12-10 06:46:17', 'Male', 'Yes'),
(18, 'jessel', 'shibal', 'staff', 'jessel@gmail.com', '124234', '2025-12-10 06:52:26', 'Male', 'Yes'),
(19, 'jessel', 'shibal', 'staff', 'jessel@gmail.com', '124234', '2025-12-10 07:33:49', 'Male', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
