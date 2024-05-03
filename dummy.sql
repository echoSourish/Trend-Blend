-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2024 at 01:44 PM
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
-- Database: `dummy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'user', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(5) NOT NULL,
  `image` varchar(300) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `image`, `pname`, `price`) VALUES
(0, 'product-2.jpg', 'polo t-shirt', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `ordered`
--

CREATE TABLE `ordered` (
  `id` int(5) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_address` varchar(300) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_image` varchar(300) NOT NULL,
  `status` varchar(40) NOT NULL,
  `delivery_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordered`
--

INSERT INTO `ordered` (`id`, `customer_name`, `customer_email`, `customer_address`, `product_name`, `product_price`, `product_image`, `status`, `delivery_date`) VALUES
(1, 'test testtt', 'test@gmail.com', '', 'polo t-shirt', 1300, 'product-2.jpg', '', '0000-00-00'),
(2, 'test testtt', 'test@gmail.com', '', 'roadstar shirt', 599, 'product-5.jpg', '', '0000-00-00'),
(3, 'test1 test', 'test1@gmail.com', '', 'polo t-shirt', 1300, 'product-2.jpg', '', '0000-00-00'),
(4, 'sopia smith', 'blue st, ny/nj', '', 'roadstar shirt', 599, 'product-5.jpg', '', '0000-00-00'),
(5, 'tony stark', 'tonystark@gmail.com', 'new york', 'polo t-shirt', 1300, 'product-2.jpg', '', '0000-00-00'),
(6, 'Iron man', 'ironman@gmail.com', 'sydney', 'roadstar shirt', 599, 'product-5.jpg', '', '2024-04-30'),
(7, 'Sourish Laha', 'sourish@email.com', 'kolkata', '15L side bag', 1899, 'product-13.jpg', '', '2024-05-09'),
(8, 'Sourish Laha', 'sourish@email.com', 'kolkata', '10L Backpack', 2599, 'product-7.jpg', '', '2024-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(300) NOT NULL,
  `psize` varchar(20) NOT NULL,
  `uploaddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `category`, `gender`, `brand`, `price`, `description`, `image`, `psize`, `uploaddate`) VALUES
(4, 'polo t-shirt', 't-shirt', 'Male', 'zara ara', 1300, '       lorem lasd sdfalfh          ', 'product-2.jpg', 'XL', '2024-03-06'),
(5, 'roadstar shirt', 'shirt', 'Male', 'roadstar', 599, 'asdsf fggdghg awfa wefadsf asdfadsfsdfadsf ag', 'product-5.jpg', 'XL', '2024-04-25'),
(6, '10L Backpack', 'bags', 'Male', 'american tourister', 2599, '\r\nA leather backpack is a versatile and stylish accessory suitable for various occasions. Typically ', 'product-7.jpg', '', '2024-04-30'),
(7, '15L side bag', 'Bags', 'Male', 'VIP', 1899, '   The adjustable straps ensure comfort during extended wear, while the sleek design adds sophistica', 'product-13.jpg', 'MD', '2024-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `pname` varchar(20) NOT NULL,
  `smail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`pname`, `smail`, `password`) VALUES
('test', 'test@gmail.com', '123'),
('test', 'test@gmail.com', '123'),
('test', 'test@gmail.com', '123'),
('abc', 'abc@gmail.com', '123'),
('z', 'z@gmail.com', '0000'),
('test1', 'test1@gmail.com', '000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered`
--
ALTER TABLE `ordered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ordered`
--
ALTER TABLE `ordered`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
