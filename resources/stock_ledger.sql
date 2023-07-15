-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 05:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock_ledger`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(5) NOT NULL,
  `dep_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`) VALUES
(1, 'Director\'s Office'),
(2, 'Student Affairs'),
(3, 'Library'),
(4, 'Hostel G/B'),
(5, 'Medical Center'),
(6, 'Training Division'),
(7, 'Physical Education'),
(8, 'Premises Management'),
(9, 'Security'),
(10, 'Interdisciplinary Studies'),
(11, 'Civil Engineering'),
(12, 'Mechanical Engineering'),
(13, 'Maritime Studies'),
(14, 'Polymer/Chemical Engineering'),
(15, 'Textile Engineering'),
(16, 'Electrical & Electronic Engineering'),
(17, 'IT Division'),
(18, 'Workshops'),
(19, 'Audit Section'),
(20, 'System Management Unit'),
(21, 'Maintenance (SEC)');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` varchar(5) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `type_id` int(11) NOT NULL,
  `min_stock_limit` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `type_id`, `min_stock_limit`) VALUES
('1', 'Petrol', 2, 5),
('10', 'Glue Bottle', 1, 5),
('2', 'Diesel', 2, 5),
('3', 'Blue Pen', 1, 15),
('4', 'Black Pen', 1, 15),
('5', 'Eraser', 1, 15),
('6', 'Red Pen', 1, 15),
('7', 'Ruler - Plastic', 1, 15),
('8', 'Marker Pen Blue', 1, 5),
('9', 'File Covers', 1, 10);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_view`
-- (See below for the actual view)
--
CREATE TABLE `product_view` (
`type_id` int(11)
,`type_name` varchar(55)
,`pro_id` varchar(5)
,`pro_name` varchar(50)
,`min_stock_limit` int(5)
);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(5) NOT NULL,
  `grn` varchar(5) DEFAULT NULL,
  `sir` varchar(5) DEFAULT NULL,
  `po_no` varchar(5) DEFAULT NULL,
  `issue_no` varchar(5) DEFAULT NULL,
  `pro_id` varchar(5) NOT NULL,
  `date` datetime NOT NULL,
  `dep_id` int(5) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `unit_price` double NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `grn`, `sir`, `po_no`, `issue_no`, `pro_id`, `date`, `dep_id`, `supplier`, `unit_price`, `quantity`, `price`, `description`) VALUES
(3, '258', NULL, '256', NULL, '3', '2023-07-12 00:00:00', NULL, 'Asin paint', 10, 25, 250, 'For book shop'),
(4, '1255', NULL, '12', NULL, '10', '2023-08-05 00:00:00', NULL, 'Bakery', 50, 60, 3000, 'gumm'),
(5, '1255', NULL, '12', NULL, '2', '2023-08-05 00:00:00', NULL, 'Bakery', 250, 50, 12500, 'For bus'),
(6, '25', NULL, '256', NULL, '10', '2023-07-12 00:00:00', NULL, 'OIC', 60, 25, 1500, ''),
(7, '55', NULL, '60', NULL, '2', '2023-07-02 00:00:00', NULL, 'Ceypetco', 350, 2, 700, '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `stock_view`
-- (See below for the actual view)
--
CREATE TABLE `stock_view` (
`pro_id` varchar(5)
,`pro_name` varchar(50)
,`min_stock_limit` int(5)
,`available_stock` decimal(32,0)
,`SUM(t2.price)` double
);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'Stationary 3.1'),
(2, 'Fuel 3.2'),
(3, 'Uniform 3.3'),
(4, 'Mech 3.4'),
(5, 'Chemi 3.5'),
(6, 'Medical 3.6'),
(7, 'Other 3.7'),
(8, 'Tyres 4.1'),
(9, 'Printing 5.10'),
(10, 'Scroll 6.20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `fname`, `lname`, `password`, `department`) VALUES
(1, 'asf', 'Asluf', 'Ahamed', 'asf100', 'admin'),
(3, 'dh@', 'dhana', 'aa', 'asf100', 'IT'),
(4, 'nas@gmail.com', 'Nasik', 'Moh', 'asf100', 'Civil');

-- --------------------------------------------------------

--
-- Structure for view `product_view`
--
DROP TABLE IF EXISTS `product_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_view`  AS  select `t2`.`type_id` AS `type_id`,`t2`.`type_name` AS `type_name`,`t1`.`pro_id` AS `pro_id`,`t1`.`pro_name` AS `pro_name`,`t1`.`min_stock_limit` AS `min_stock_limit` from (`product` `t1` join `type` `t2` on(`t1`.`type_id` = `t2`.`type_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `stock_view`
--
DROP TABLE IF EXISTS `stock_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stock_view`  AS  select `t1`.`pro_id` AS `pro_id`,`t1`.`pro_name` AS `pro_name`,`t1`.`min_stock_limit` AS `min_stock_limit`,sum(`t2`.`quantity`) AS `available_stock`,sum(`t2`.`price`) AS `SUM(t2.price)` from (`stock` `t2` join `product` `t1` on(`t2`.`pro_id` = `t1`.`pro_id`)) group by `t2`.`pro_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `dep_id` (`dep_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`dep_id`) REFERENCES `department` (`dep_id`),
  ADD CONSTRAINT `stock_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
