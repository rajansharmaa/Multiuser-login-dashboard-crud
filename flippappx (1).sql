-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2021 at 12:46 PM
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
CREATE DATABASE IF NOT EXISTS `flippappx` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `flippappx`;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdby` varchar(255) DEFAULT NULL,
  `createdfor` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `created_at`, `createdby`, `createdfor`) VALUES
(135, 'add new blog', 'dsf', '2021-12-07 05:21:44', 'admin', 'all'),
(134, 'for new user', 'nr=ew', '2021-12-07 05:08:01', 'admin', '20'),
(115, 'blog two', 'blog twlo', '2021-12-06 12:37:38', 'admin', '20'),
(128, 'all2', 'all2', '2021-12-07 04:45:05', 'admin', 'all'),
(133, 'for allllll', 'kuch bhi', '2021-12-07 05:07:40', 'admin', 'all'),
(132, 'for user ddd', 'for user', '2021-12-07 05:02:43', 'admin', '14'),
(130, 'we', 'ew', '2021-12-07 04:57:24', 'admin', 'all'),
(131, 'ew', 'we', '2021-12-07 04:57:31', 'admin', 'all');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profile_pic`, `username`, `password`, `role`, `status`) VALUES
(14, 'userrrrsdd', 'user@gmail.com', 'logo.png.png', 'userrrrss', '123456', 'user', 1),
(15, 'adminnn', 'admin@gmail.com', NULL, 'admin', '123456', 'admin', 1),
(16, 'Adminone', 'admin1@gmail.com', NULL, 'adminone', '123456', 'admin', 1),
(17, 'thisisnew', 'thisisnew@gmail.com', NULL, 'thisisnew', '123456', 'user', 1),
(18, 'admin two', 'admintwo@gmail.com', NULL, 'admintwo', '123456', 'admin', 1),
(19, 'dsxnamee', 'dsx@gmail.com', NULL, 'dsx699', '123456', 'user', 1),
(20, 'userrrrrr', 'user3@gmail.com', NULL, 'userrrrrrrr', '123456', 'user', 1),
(21, 'newuserr', 'newuser1@gmail.com', NULL, 'user user', '123456', 'user', 1),
(22, 'newuserrrr', 'newuser@gmail.com', NULL, 'usernewwww', '123456', 'user', 1),
(24, 'erwew', 'wrewer@gmail.com', NULL, 'wertfwre', '4wrt4rwt4w', 'user', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
