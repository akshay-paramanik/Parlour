-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2024 at 05:43 PM
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
-- Database: `salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `type` varchar(30) DEFAULT NULL,
  `artist` varchar(20) DEFAULT NULL,
  `apnt_date` date DEFAULT NULL,
  `book_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `type`, `artist`, `apnt_date`, `book_date`, `status`, `user_id`) VALUES
(1, 'sdwd', 'leo chong', '2024-12-12', '2024-06-08 04:35:39', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `imgpath` varchar(100) NOT NULL,
  `apnt_done` int(11) NOT NULL DEFAULT 0,
  `apnt_pendding` int(11) NOT NULL DEFAULT 0,
  `description` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  `experience` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `skill`, `imgpath`, `apnt_done`, `apnt_pendding`, `description`, `time`, `experience`, `gender`) VALUES
(5, 'Leo Chong', 'Hair Stylist', 'uploads/employee/Leo chong.jpg', 0, 0, '  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, itaque natus, eveniet possimus ape', '2024-06-11 06:17:14', 1, 'Male'),
(6, 'Bravo Lusi', 'Spa Spacilist', 'uploads/employee/Bravo Lusi.png', 0, 0, '  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, itaque natus, eveniet possimus ape', '2024-06-11 06:20:24', 2, 'Male'),
(7, 'Druve Rathe', 'Hair styler,faceial', 'uploads/employee/Druve Rathe.png', 0, 0, '  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, itaque natus, eveniet possimus ape', '2024-06-12 08:58:39', 3, 'Male'),
(8, 'Alia Chohan', 'Hair and Nail Expert', 'uploads/employee/alia bhatt.png', 0, 0, '  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, itaque natus, eveniet possimus ape', '2024-06-12 09:12:29', 5, 'Female'),
(9, 'Kerti Yadav', 'Skin and wax', 'uploads/employee/karina kapoor.png', 0, 0, '  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, itaque natus, eveniet possimus ape', '2024-06-12 09:13:33', 1, 'Female'),
(10, 'Monalisha Thakre', 'Hair color & hair cut', 'uploads/employee/monalisha thakre.png', 0, 0, '  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, itaque natus, eveniet possimus ape', '2024-06-12 09:14:23', 12, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `price` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `imagepath` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `price`, `gender`, `imagepath`, `time`) VALUES
(12, 'D 10', 299, 'Male', 'uploads/services/d10.png', '2024-06-11 06:02:45'),
(13, 'Facial', 499, 'Female', 'uploads/services/facial W.png', '2024-06-11 06:03:12'),
(14, 'Facial', 399, 'Male', 'uploads/services/facial.png', '2024-06-11 06:03:45'),
(15, 'Hair Color', 399, 'Female', 'uploads/services/hair colour W.png', '2024-06-11 06:04:10'),
(16, 'Hair Cut', 299, 'Male', 'uploads/services/hair cut M.png', '2024-06-11 06:04:49'),
(17, 'Hair Cut', 499, 'Female', 'uploads/services/hair cut W.png', '2024-06-11 06:05:14'),
(18, 'Hair Spa', 499, 'Male', 'uploads/services/hair spa M.png', '2024-06-11 06:06:15'),
(19, 'Hair Spa', 599, 'Female', 'uploads/services/hair spa W.png', '2024-06-11 06:06:42'),
(20, 'Hair Color', 399, 'Male', 'uploads/services/hair-color M.png', '2024-06-11 06:07:59'),
(21, 'Nail Extention', 799, 'Female', 'uploads/services/nair extentoin.png', '2024-06-11 06:08:51'),
(22, 'O3+', 299, 'Male', 'uploads/services/o3 M.png', '2024-06-11 06:09:26'),
(23, 'O3+', 399, 'Female', 'uploads/services/o3 W.png', '2024-06-11 06:09:51'),
(24, 'Shaving', 299, 'Male', 'uploads/services/shaving.png', '2024-06-11 06:10:49'),
(25, 'Threading', 299, 'Female', 'uploads/services/threading W.png', '2024-06-11 06:11:44'),
(26, 'Waxing Full body', 599, 'Female', 'uploads/services/wax W.png', '2024-06-11 06:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `password` varchar(350) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `appointment` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `password`, `gender`, `appointment`) VALUES
(1, 'Akshay Paramanik', 'akshayparamanik04@gmail.com', 8710077109, '$2y$10$0lljG5nqobyJnxsdpHFdQ.DsCmvPwsy/kJoOYMVi/DZUFBaZN12Ha', 'Male', 0),
(2, 'Samir Paramanik', 'samir12@gmail.com', 9749754443, '$2y$10$QQlwgJ7NjLIpmHpDtKykD.mvcL6dBP/JitsadC5xmTgFPgK7GjSBa', 'Male', 0),
(3, 'sagar', 'akshayparamanik@gmail.com', 4857454, '$2y$10$AzXWP.WQPP3bMcDByaoUR.BnT2IorJtEZlDJuQczOuQlTYy/8x96W', 'Male', 0),
(4, 'Priya Paramanik', 'priya@gmail.com', 7076406874, '$2y$10$lGQ2Wprz3V2GAwPjgxvksOR0A8HFmdDaIOJmc79BtzXeI7rCBjVom', 'Female', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
