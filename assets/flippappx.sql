-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2021 at 06:04 PM
-- Server version: 8.0.25-0ubuntu0.20.04.1
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flippappx`
--
CREATE DATABASE IF NOT EXISTS `flippappx` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `flippappx`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `username`, `password`) VALUES
(2, 'RAJAN KUMAR', 'rajansharmaa46@gmail.com', 'Rajansharma', '07bce00ca59b33c33c03ad16ef831048'),
(3, 'RAJAN KUMAR', 'rajansharmaa47@gmail.com', 'Rajansharma1', '07bce00ca59b33c33c03ad16ef831048'),
(4, 'RAJAN KUMAR 8', 'rajansharmayt8@gmail.com', 'Rajansharma8', '202cb962ac59075b964b07152d234b70'),
(5, 'RAJAN KUMAR 1', 'test@gmail.com', 'Superman', '123'),
(6, 'RAJAN KUMAR 1', 'new@gmail.com', 'Superman', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `profile_pic`, `email`, `username`, `password`) VALUES
(2, 'RAJAN KUMAR 0', NULL, 'rajansharmayt00@gmail.com', 'Rajansharma00', '123'),
(12, 'RAJAN KUMAR 1', NULL, 'rajansharmaa46@gmail.com', 'Superman', '123'),
(13, 'RAJAN KUMAR 1', NULL, 'rajansharmaa4@gmail.com', 'Superman', '123'),
(14, 'RAJAN KUMAR 1', NULL, 'admin@gmail.com', 'Superman', '1234'),
(15, 'test', NULL, 'dsxtest@gmail.com', 'dsxTest', '12345'),
(16, '1111', 'women_product.jpg', '11@GMAIL.COM', '111', '1111'),
(17, 'RAJAN KUMAR 1', NULL, 'rajan@gmail.com', 'Superman', '123456'),
(18, 'RAJAN KUMAR 1', NULL, 'test@gmail.com', 'Superman', '1234567'),
(19, '', NULL, '', '', ''),
(20, '12312', NULL, 'rajansha@gmail.com', 'Superman', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
