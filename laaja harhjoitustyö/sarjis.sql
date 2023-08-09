-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 12:29 PM
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
-- Database: `sarjis`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(3, 'tero', '$2y$10$XrgxxdXXow2w0ngyHUye/euyvAKGMoyb3dYraHkoGhcN2/yUyWCJK'),
(4, 'tiina', '$2y$10$41ad56mh3cBttDso9oM7nue7Ca1MbNBm7g7xx9A9Al1MI/HndX58C'),
(5, 'yyyyy', '$2y$10$COV59rdDASw64WNB8whYE.hw/35tyLp2iaNpa2gPTT94fxaYtBlnq');

-- --------------------------------------------------------

--
-- Table structure for table `wantedlist`
--

CREATE TABLE `wantedlist` (
  `book_id` int(11) NOT NULL,
  `book_n` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `omistaja_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wantedlist`
--

INSERT INTO `wantedlist` (`book_id`, `book_n`, `author`, `genre`, `omistaja_id`) VALUES
(54, 'dfgdfg', 'dfgdfgdf', 'dfgdfg', 3),
(55, '4535', '3425', 'dfggf', 3),
(56, 'gfhfgh567', 'fhgfggh4567', 'fhfgh', 3),
(57, 'rteert', 'ert', 'ert', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `wantedlist`
--
ALTER TABLE `wantedlist`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `omistaja_id` (`omistaja_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wantedlist`
--
ALTER TABLE `wantedlist`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wantedlist`
--
ALTER TABLE `wantedlist`
  ADD CONSTRAINT `wantedlist_ibfk_1` FOREIGN KEY (`omistaja_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
