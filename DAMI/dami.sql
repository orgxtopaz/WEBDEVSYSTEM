-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 11:33 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dami`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(13, 'zigm', '917b09a4067807a469ecc56899ad3f35305a020c'),
(14, 'dave', 'bfcdf3e6ca6cef45543bfbb57509c92aec9a39fb'),
(19, 'romeo', 'eac85f773d67138f28177b8330730e3e4363c875'),
(21, 'jurick', '85e32494390334d9303b0b81a3b660b9a5b927c0');

-- --------------------------------------------------------

--
-- Table structure for table `archivedproducts`
--

CREATE TABLE `archivedproducts` (
  `archivedId` int(11) NOT NULL,
  `productId` int(255) NOT NULL,
  `productPhoto` varchar(225) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productBrand` varchar(255) NOT NULL,
  `productDescription` varchar(255) NOT NULL,
  `productPrice` int(255) NOT NULL,
  `stocks` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `disableadmin`
--

CREATE TABLE `disableadmin` (
  `disableAdmin` int(11) NOT NULL,
  `adminId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disableadmin`
--

INSERT INTO `disableadmin` (`disableAdmin`, `adminId`, `username`, `password`) VALUES
(13, 18, 'abdul', '3fb86591025780f719fcd21d6fd06a8330659670 ');

-- --------------------------------------------------------

--
-- Table structure for table `disableuser`
--

CREATE TABLE `disableuser` (
  `disableUserId` int(11) NOT NULL,
  `ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `productId` int(255) NOT NULL,
  `productPhoto` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productBrand` varchar(255) NOT NULL,
  `productDescription` varchar(255) NOT NULL,
  `productPrice` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'processed',
  `fullName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactEmail` varchar(255) NOT NULL,
  `paymentMethod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderhistory`
--

CREATE TABLE `orderhistory` (
  `approvedId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `productId` int(255) NOT NULL,
  `productPhoto` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productBrand` varchar(255) NOT NULL,
  `productDescription` varchar(255) NOT NULL,
  `productPrice` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactEmail` varchar(255) NOT NULL,
  `paymentMethod` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderhistory`
--

INSERT INTO `orderhistory` (`approvedId`, `username`, `productId`, `productPhoto`, `productName`, `productBrand`, `productDescription`, `productPrice`, `quantity`, `status`, `fullName`, `address`, `contactEmail`, `paymentMethod`, `result`) VALUES
(73, 'migz', 7, 'https://assets.adidas.com/images/h_840,f_auto,q_auto:sensitive,fl_lossy/6e3f3833fb98421db618ac690105890c_9366/New_Adilette_Sandals_Black_GZ8827_01_standard.jpg   ', ' NEW ADILETTE SANDALS ', 'Adidas  ', ' The same carefree comfort of your staple slides  ', 4000, 2, 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Approve_icon.svg/1200px-Approve_icon.svg.png', 'miguel', 'casay', 'miguel@gmail.com', 'COD', 'approved'),
(74, 'migz', 11, 'https://cdn.shopify.com/s/files/1/0267/1666/8080/products/ReposeGreen_480x.png?v=1604889215   ', ' REPOSE SLIDER SLIPPERS ', 'Sandugo  ', ' Sandugo Repose Sliders slip your feet into a soft, contoured footbed for utmost comfort post-adventure whether outdoor or urban.  ', 250, 5, 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Approve_icon.svg/1200px-Approve_icon.svg.png', 'miguel', 'casay na pud ', 'miguel@gmail.com', 'COD', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `productPhoto` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productBrand` varchar(255) NOT NULL,
  `productDescription` varchar(255) NOT NULL,
  `productPrice` int(255) NOT NULL,
  `stocks` int(11) NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `username`, `productPhoto`, `productName`, `productBrand`, `productDescription`, `productPrice`, `stocks`) VALUES
(7, '', 'https://assets.adidas.com/images/h_840,f_auto,q_auto:sensitive,fl_lossy/6e3f3833fb98421db618ac690105890c_9366/New_Adilette_Sandals_Black_GZ8827_01_standard.jpg ', 'NEW ADILETTE SANDALS ', 'Adidas ', 'The same carefree comfort of your staple slides ', 4000, 98),
(8, '', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/bae22159-3f8e-4986-9237-687ee04d0f7e/air-max-90-se-shoe-0GdsBK.png ', 'Air Max 90 SE ', 'Nike ', 'Nothing as fly, nothing as comfortable, nothing as proven ', 6895, 100),
(9, '', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/474785cc-dd8b-4ea7-a4a8-b3beed71e8cc/air-max-90-se-shoe-7FvRpS.png ', 'Air Max 90 SE ', 'Nike  ', 'Nothing as fly, nothing as comfortable, nothing as proven ', 6895, 100),
(10, '', 'https://cdn.shopify.com/s/files/1/0349/0408/0516/products/HOPI_1800x1800.jpg ', 'MOJO HOPI III ', 'Habagat ', 'Our rubber is harvested from the Philippines southern island of Mindanao. ', 688, 100),
(11, 'migz', 'https://cdn.shopify.com/s/files/1/0267/1666/8080/products/ReposeGreen_480x.png?v=1604889215 ', 'REPOSE SLIDER SLIPPERS ', 'Sandugo ', 'Sandugo Repose Sliders slip your feet into a soft, contoured footbed for utmost comfort post-adventure whether outdoor or urban. ', 2500, 200);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `requestId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `productId` int(255) NOT NULL,
  `productPhoto` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productBrand` varchar(255) NOT NULL,
  `productDescription` varchar(255) NOT NULL,
  `productPrice` int(255) NOT NULL,
  `stocks` int(255) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `email`, `password`, `status`) VALUES
(21, 'migz', 'migz@gmail.com', '4e5a83367b0310a33e43f1d71ef4b980bde91739 ', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `archivedproducts`
--
ALTER TABLE `archivedproducts`
  ADD PRIMARY KEY (`archivedId`);

--
-- Indexes for table `disableadmin`
--
ALTER TABLE `disableadmin`
  ADD PRIMARY KEY (`disableAdmin`);

--
-- Indexes for table `disableuser`
--
ALTER TABLE `disableuser`
  ADD PRIMARY KEY (`disableUserId`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `orderhistory`
--
ALTER TABLE `orderhistory`
  ADD PRIMARY KEY (`approvedId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`requestId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `archivedproducts`
--
ALTER TABLE `archivedproducts`
  MODIFY `archivedId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `disableadmin`
--
ALTER TABLE `disableadmin`
  MODIFY `disableAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `disableuser`
--
ALTER TABLE `disableuser`
  MODIFY `disableUserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orderhistory`
--
ALTER TABLE `orderhistory`
  MODIFY `approvedId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `requestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
