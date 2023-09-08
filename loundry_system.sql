-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 08, 2023 at 04:11 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loundry_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(225) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`) VALUES
(3, '                        AC Wash                                                                                           ', '                        The inside parts of the AC unit is thoroughly cleaned during wet AC service, utilising water and specialised cleaning agents.                        ', '../uploads/acclean.jpg'),
(4, '                        Dry Cleaning                                                                                            ', '                        Dry cleaning is any cleaning process for clothing and textiles using a solvent other than water.                                ', '../uploads/dryclean.jpg'),
(5, '                        Ironing                                                                                          ', '                        Ironing is the use of an iron, usually heated, to remove wrinkles and unwanted creases from fabric                                           ', '../uploads/iron.jpg'),
(6, '                        House Cleaning                                                                       ', '                        Housekeeping includes housecleaning, that is, disposing of rubbish, cleaning dirty surfaces, dusting, and vacuuming.                        ', '../uploads/houseclean.jpg'),
(7, '                        Car Wash                                                                                           ', '                        A car wash, or auto wash is a facility used to clean the exterior, and in some cases the interior, of cars.                                        ', '../uploads/car wash.jpg'),
(8, '                         LPG                                                                                                                                                                    ', '                         LPG stands for “Liquefied Petroleum Gas” and the term is used to describe two Natural Gas Liquids: propane and butane, or a mix of the two.                                                                                           ', '../uploads/lpg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `massage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `massage`) VALUES
(4, 'Raj', 'raj@gmail.com', 'i am a boy..ami unlucky person ami karap..ami pondit e job kori'),
(5, 'lova', 'lova@gmail.com', 'vaiya plz help me....'),
(6, 'lova', 'lova@gmail.com', 'vaiya plz help me....'),
(7, 'Raj', 'raj@gmail.com', 'feuiyi9ohyei9othygioewiotg');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`) VALUES
(15, 'Numquam irure id non', 'Voluptatem cum conse', '../uploads/img3.jpg'),
(16, 'Consequatur consect', 'Autem do obcaecati u', '../uploads/img2.jpg'),
(18, 'Est praesentium ut ', 'Dicta ea nostrud dol', '../uploads/img1.jpg'),
(21, 'Enim autem alias vol', 'Possimus est impedi', '../uploads/Best-Car-Wash-Services-in-Vancouver.jpg'),
(22, 'Dolore magni autem n', 'Ut fuga Quo dolor c', '../uploads/car-wash.jpg'),
(23, 'Amet aliquam labori', 'Rerum non iusto even', '../uploads/benefits_of_a_clean_home_featured_image.jpg'),
(24, 'Pariatur Veritatis ', 'Eligendi omnis repre', '../uploads/1682421722_acjetwash.jpg'),
(25, '                                                 Consectetur amet om                                                                                                                                                ', '                                                 Unde quia cum dolor                                                                         ', '../uploads/top-lp-gas-in-Bangladesh-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `password`) VALUES
(11, 'Raj', 'raj@gmail.com', 1865016322, 'dhaka', '12345678'),
(12, 'lova', 'lova@gmail.com', 1865016322, 'dhaka', '32945678*');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
