-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 07:00 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `full_name`, `email`, `username`, `password`, `admin_role`) VALUES
(3, 'super admin', 'superadmin@gmail.com', 'admin', '$2y$10$wf50wFuPhde7jU7B5wgMx.SVBxBiZOIYiWFI/A/toKQ6pxE9SUr/S', 'super admin'),
(4, 'admin12', 'admin012@gmail.com', 'admin12', '$2y$10$l.0yH2y1TatwLc1EEjOrS.PEBoQMqb1Y1J13Uv4/IIRPsFbspkwse', 'admin'),
(7, 'Admin56', 'admin056@gmail.com', 'admin56', '$2y$10$pRfgfl6zBsioC9oYu2nia.GD79I.g4PDy0pLmtHJM2yKlkyEMqdnC', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`category_id`, `category_name`) VALUES
(2, 'Beds'),
(4, 'Sofas'),
(5, 'Wardrobes'),
(7, 'Book');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_table`
--

CREATE TABLE `enquiry_table` (
  `enquiry_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `enquiry` varchar(255) NOT NULL,
  `handled_by` varchar(255) NOT NULL,
  `handled_complete` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry_table`
--

INSERT INTO `enquiry_table` (`enquiry_id`, `fullname`, `email`, `telephone`, `enquiry`, `handled_by`, `handled_complete`) VALUES
(14, 'Sam Smith', 'samsmith@gmail.com', '+1223334444', 'This is the best enquiry.', 'admin', 'yes'),
(15, 'John Legend', 'legendjohn@hotmail.com', '+3334444555555', 'This is another enquiry for test.', '', 'no'),
(18, 'Mark Carole', 'markCarole@gmail.com', '+0011223344', 'This is me. mark carole for enquiry test. ', '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `furniture_table`
--

CREATE TABLE `furniture_table` (
  `furniture_id` int(11) NOT NULL,
  `furniture_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furniture_price` int(11) DEFAULT NULL,
  `view` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `furniture_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `furniture_table`
--

INSERT INTO `furniture_table` (`furniture_id`, `furniture_name`, `description`, `furniture_price`, `view`, `furniture_details`, `category_id`, `images`) VALUES
(1, 'Four Poster', 'A beautiful four poster double bed.', 999, 'enable', 'new', 2, '1.jpg'),
(10, 'King', 'A king sized bed with a modern style', 659, 'enable', 'new', 2, '10.jpg'),
(11, 'Corner Sofa', 'A modern styled corner sofa', 699, 'enable', 'second hand', 4, '11.jpg'),
(12, 'Black Leather Sofa', 'A stylish classic. A black leather sofa, not out of place in any home!', 499, 'disable', 'second hand', 4, '12.jpg'),
(13, 'Oak Wardrobe', 'An Oak Wardrobe, two drawers and space to hang all your clothes', 399, 'enable', 'second hand', 5, '13.jpg'),
(21, 'Test', 'This is furniture desc', 66969, 'enable', 'second hand', 5, '111.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `update_table`
--

CREATE TABLE `update_table` (
  `update_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_table`
--

INSERT INTO `update_table` (`update_id`, `title`, `start_date`, `end_date`, `description`, `images`) VALUES
(9, 'Best Sofa Special Offer', '2019-05-05', '2019-05-13', 'The special offer is of sofa which have more sell value but here we have given some offer for you people.', '11.jpg'),
(10, 'Best Sofa', '2019-05-05', '2019-05-16', 'This is the best sofa of today special offers.', '111.jpg'),
(13, 'New Offer', '2019-05-07', '2019-05-10', 'This is the new offer displaying as testing in the page', 'test.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `enquiry_table`
--
ALTER TABLE `enquiry_table`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `furniture_table`
--
ALTER TABLE `furniture_table`
  ADD PRIMARY KEY (`furniture_id`);

--
-- Indexes for table `update_table`
--
ALTER TABLE `update_table`
  ADD PRIMARY KEY (`update_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `enquiry_table`
--
ALTER TABLE `enquiry_table`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `furniture_table`
--
ALTER TABLE `furniture_table`
  MODIFY `furniture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `update_table`
--
ALTER TABLE `update_table`
  MODIFY `update_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
