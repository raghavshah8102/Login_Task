-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 04, 2023 at 09:12 PM
-- Server version: 8.0.33
-- PHP Version: 8.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LoginPage`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessType`
--

CREATE TABLE `accessType` (
  `id` int NOT NULL,
  `access_type` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `accessType`
--

INSERT INTO `accessType` (`id`, `access_type`) VALUES
(1, 'admin'),
(2, 'teacher'),
(3, 'student'),
(4, 'librarian');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `id` int NOT NULL,
  `chapter_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`id`, `chapter_name`) VALUES
(3, 'chapter1'),
(7, 'chapter3');

-- --------------------------------------------------------

--
-- Table structure for table `chapter_subject`
--

CREATE TABLE `chapter_subject` (
  `id` int NOT NULL,
  `chap_id` int NOT NULL,
  `sub_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chapter_subject`
--

INSERT INTO `chapter_subject` (`id`, `chap_id`, `sub_id`) VALUES
(1, 3, 7),
(2, 3, 7),
(3, 7, 9);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Roll_no` int NOT NULL,
  `city` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `Roll_no`, `city`, `password`) VALUES
(5, 'Raghav', 'raghav@gmail.com', 1, 'ahemdabad', 'raghav123'),
(6, 'Raj', 'raj@gmail.com', 2, 'Vapi', 'raj123'),
(7, 'Karan', 'karan@gmail.com', 3, 'surat', 'karan123'),
(9, 'Parth', 'parth@gmail.com', 8, 'Amd', 'parth123'),
(10, 'Prince', 'prince@gmail.com', 5, 'Bala', 'prince123'),
(11, 'Mann', 'mann@gmail.com', 4, 'Maninagar', 'mann123'),
(12, 'Krunal', 'krunal@gmail.com', 6, 'Rajkot', 'krunal123'),
(13, 'Akash', 'Akash@gmail.com', 6, 'Anand', 'akash123'),
(14, 'Hemu', 'hemu@gmail.com', 10, 'Raj', 'hemu123');

-- --------------------------------------------------------

--
-- Table structure for table `standard`
--

CREATE TABLE `standard` (
  `id` int NOT NULL,
  `standard` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `standard`
--

INSERT INTO `standard` (`id`, `standard`) VALUES
(1, '3'),
(3, '1'),
(4, '2');

-- --------------------------------------------------------

--
-- Table structure for table `student_standard`
--

CREATE TABLE `student_standard` (
  `id` int NOT NULL,
  `standard_id` int NOT NULL,
  `student_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student_standard`
--

INSERT INTO `student_standard` (`id`, `standard_id`, `student_id`) VALUES
(1, 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int NOT NULL,
  `subject_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_name`) VALUES
(5, 'Bio'),
(7, 'English'),
(8, 'Gujrati'),
(9, 'Maths'),
(12, 'Sanskrit'),
(13, 'Maths'),
(14, 'Chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `subject_standard`
--

CREATE TABLE `subject_standard` (
  `id` int NOT NULL,
  `standard_id` int NOT NULL,
  `sub_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subject_standard`
--

INSERT INTO `subject_standard` (`id`, `standard_id`, `sub_id`) VALUES
(1, 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `userType`
--

CREATE TABLE `userType` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `user_access_type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userType`
--

INSERT INTO `userType` (`id`, `user_id`, `user_access_type`) VALUES
(1, 1, 1),
(2, 2, 3),
(3, 3, 4),
(4, 4, 1),
(5, 5, 1),
(6, 10, 3),
(7, 11, 2),
(8, 13, 3),
(9, 14, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessType`
--
ALTER TABLE `accessType`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapter_subject`
--
ALTER TABLE `chapter_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standard`
--
ALTER TABLE `standard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_standard`
--
ALTER TABLE `student_standard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_standard`
--
ALTER TABLE `subject_standard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userType`
--
ALTER TABLE `userType`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessType`
--
ALTER TABLE `accessType`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chapter_subject`
--
ALTER TABLE `chapter_subject`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `standard`
--
ALTER TABLE `standard`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_standard`
--
ALTER TABLE `student_standard`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subject_standard`
--
ALTER TABLE `subject_standard`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userType`
--
ALTER TABLE `userType`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
