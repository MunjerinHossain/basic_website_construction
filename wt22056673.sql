-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2024 at 02:28 PM
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
-- Database: `db_22056673`
--

-- --------------------------------------------------------

--
-- Table structure for table `Author`
--

CREATE TABLE `Author` (
  `authorId` varchar(10) NOT NULL,
  `authorName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Author`
--

INSERT INTO `Author` (`authorId`, `authorName`) VALUES
('A001', 'John Lewis'),
('A002', 'William Loftus'),
('A003', 'Paul Deitel'),
('A004', 'David'),
('A005', 'Jessica'),
('A006', 'Chris');

-- --------------------------------------------------------

--
-- Table structure for table `Authorship`
--

CREATE TABLE `Authorship` (
  `bookId` varchar(10) NOT NULL,
  `authorId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Authorship`
--

INSERT INTO `Authorship` (`bookId`, `authorId`) VALUES
('B001', 'A001'),
('B001', 'A002'),
('B002', 'A003'),
('B003', 'A004'),
('B003', 'A005'),
('B003', 'A006');

-- --------------------------------------------------------

--
-- Table structure for table `Book`
--

CREATE TABLE `Book` (
  `bookId` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Book`
--

INSERT INTO `Book` (`bookId`, `title`) VALUES
('B001', 'Java Software Solutions'),
('B002', 'Internet and World Wide Web'),
('B003', 'Mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `Report`
--

CREATE TABLE `Report` (
  `bookId` varchar(10) NOT NULL,
  `reviewerId` varchar(10) NOT NULL,
  `rating` int(11) DEFAULT 1,
  `reviewDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Report`
--

INSERT INTO `Report` (`bookId`, `reviewerId`, `rating`, `reviewDate`) VALUES
('B001', 'R001', 5, '2024-06-21 11:11:59'),
('B001', 'R003', 4, '2024-09-24 11:11:59'),
('B002', 'R002', 4, '2024-07-22 12:11:59'),
('B002', 'R003', 5, '2024-10-25 12:11:59'),
('B003', 'R003', 3, '2024-08-23 13:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `Reviewer`
--

CREATE TABLE `Reviewer` (
  `reviewerId` varchar(10) NOT NULL,
  `reviewerName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Reviewer`
--

INSERT INTO `Reviewer` (`reviewerId`, `reviewerName`) VALUES
('R001', 'Donald'),
('R002', 'Vladimir'),
('R003', 'Theresa');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `rating` int(1) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `rating`, `comment`, `created_at`) VALUES
(1, 'fee', 2, 'rere', '2024-04-18 15:29:54'),
(2, 'test', 5, 'test rate', '2024-04-18 15:30:44'),
(7, 'test 2', 4, 'comment test', '2024-04-19 10:21:08'),
(8, 'Test 3', 1, 'Like with the other methods, formatting is important.', '2024-04-19 11:30:21'),
(9, 'Munjerin', 5, 'Munjerin is testing', '2024-04-19 11:55:57'),
(10, 'Shovon', 3, 'Test', '2024-04-19 11:58:57'),
(11, 'Shovon 2', 2, 'test', '2024-04-19 12:08:30'),
(12, 'ss', 2, 'sa', '2024-04-19 12:10:57'),
(13, 'Hasib Sakib', 5, 'Good Book', '2024-04-19 12:27:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`authorId`);

--
-- Indexes for table `Authorship`
--
ALTER TABLE `Authorship`
  ADD PRIMARY KEY (`bookId`,`authorId`),
  ADD KEY `authorId` (`authorId`);

--
-- Indexes for table `Book`
--
ALTER TABLE `Book`
  ADD PRIMARY KEY (`bookId`);

--
-- Indexes for table `Report`
--
ALTER TABLE `Report`
  ADD PRIMARY KEY (`bookId`,`reviewerId`),
  ADD KEY `reviewerId` (`reviewerId`);

--
-- Indexes for table `Reviewer`
--
ALTER TABLE `Reviewer`
  ADD PRIMARY KEY (`reviewerId`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Authorship`
--
ALTER TABLE `Authorship`
  ADD CONSTRAINT `authorship_ibfk_1` FOREIGN KEY (`bookId`) REFERENCES `book` (`bookId`),
  ADD CONSTRAINT `authorship_ibfk_2` FOREIGN KEY (`authorId`) REFERENCES `author` (`authorId`);

--
-- Constraints for table `Report`
--
ALTER TABLE `Report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`bookId`) REFERENCES `book` (`bookId`),
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`reviewerId`) REFERENCES `reviewer` (`reviewerId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
