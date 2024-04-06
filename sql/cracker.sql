-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 08:02 PM
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
-- Database: `cracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `consignee`
--

CREATE TABLE `consignee` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `gstin` varchar(25) NOT NULL,
  `state` varchar(100) NOT NULL,
  `address1` longtext NOT NULL,
  `address2` longtext NOT NULL,
  `place` varchar(250) NOT NULL,
  `pincode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consignee`
--

INSERT INTO `consignee` (`id`, `name`, `gstin`, `state`, `address1`, `address2`, `place`, `pincode`) VALUES
(4, 'SIMRAN TRADING', '05GBLPS1659K1Z0', 'UTTARKAND', 'KSHETRA ROAD', '', 'RISHIKESH', '242901'),
(5, 'CHANDRA SALES PRIVATE LIMITED', '33AACCC1597R1Z6', 'TAMIL NADU', '5/255 KALAYARKURICHI', '', 'SIVAKASI', '626123'),
(6, 'SRI R A TRANDERS', '831002', 'JHARKHAND', 'NEAR NATARAJ FURNITURE ASH', 'S/O RAM AWTAR GULATI STATI', 'JAMSHEDPUR', '8310002'),
(7, 'NATIONAL FIREWORKS', '09DQGPA1905K1ZY', 'LUCKNOW', 'KAKORI PLOT NO5', 'AMETHIYASALEMPUR', 'UTTAR PRADESH', '226017'),
(8, 'SRI P K TRADERS', '20ABNPG0903A2ZN', 'JHARKHAND', 'NEW PLOT NO 1026 P', 'MOUZA BAHARDHARI', 'JHARKHAND', '832107');

-- --------------------------------------------------------

--
-- Table structure for table `cracker`
--

CREATE TABLE `cracker` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `rate` int(11) NOT NULL,
  `per` varchar(11) NOT NULL,
  `casecontents` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cracker`
--

INSERT INTO `cracker` (`id`, `name`, `rate`, `per`, `casecontents`) VALUES
(9, '2 3/4  Kuruvi', 2970, '1000 Pocket', '1500 Pocket'),
(10, '3 1/2 Lakshmi', 2710, '750 Pocket', '750 Pocket'),
(11, '4 Lakshmi', 2710, '500 Pocket', '500 Pocket'),
(13, '2 3/4 - 36 Deluxe', 0, '250 Pocket', '250 Pocket'),
(14, '2 3/4 - 24 Deluxe', 0, '100 Pocket', '150 Pocket'),
(15, '3 1/2 - 24 Deluxe', 0, '100 Pocket', '150 Pocket'),
(16, '3 1/2 - 50 Deluxe', 0, '75 Pocket', '75 Pocket'),
(17, '4 - 234 Deluxe', 0, '100 Pocket', '100 Pocket'),
(19, 'Stripped Bijili (100 Pcs) (Gold)', 112, '10 Pocket', '300 Pocket'),
(20, 'Red Bijili', 102, '10 Pocket', '300 Pocket'),
(21, 'Atom Bomb Small Green', 110, 'Unit', '36 Unit'),
(23, 'Atom Bomb Small Foils', 122, 'Unit', '36 Unit'),
(24, 'Square Bomb Green', 128, 'Unit', '30 Unit'),
(25, 'Square Bomb Foils', 138, 'Unit', '30 Unit'),
(26, 'Hydro Bomb Green', 167, 'Unit', '25 Unit'),
(27, 'Hydro Bomb Foils', 183, 'Unit', '25 Unit'),
(28, 'King of King Green', 219, 'Unit', '18 Unit'),
(29, 'King Of King Foils', 238, 'Unit', '18 Unit'),
(30, 'Classic Bomb Green', 274, 'Unit', '18 Unit'),
(31, 'Classic Bomb Foils', 284, 'Unit', '15 Unit'),
(32, 'Bullet Bomb Foils', 70, 'Unit', '60 Unit'),
(33, 'Mini Bullter Bomb Foils', 84, 'Unit', '50 Unit'),
(34, 'Deluxe Bullet Bomb', 119, 'Unit', '30 Unit'),
(35, 'Ganga Yamuna (5 Pcs)', 385, 'Unit', '9 Unit'),
(36, '1 1/2 Twinkling Star', 85, 'Unit', '44 Unit'),
(37, 'Power 28', 0, '', ''),
(38, 'Giant 28', 0, '', ''),
(39, 'Giant 56', 0, '', ''),
(40, 'Power 1', 131, '10 Piece', '250 Piece'),
(41, 'Power 2', 262, '10 Piece', '150 Piece');

-- --------------------------------------------------------

--
-- Table structure for table `customerbill`
--

CREATE TABLE `customerbill` (
  `id` int(11) NOT NULL,
  `consignee_name` varchar(500) NOT NULL,
  `state` varchar(250) NOT NULL,
  `state_type` varchar(25) NOT NULL,
  `gstin` varchar(25) NOT NULL,
  `consignee_address` varchar(500) NOT NULL,
  `place` varchar(15) NOT NULL,
  `invoice_no` longtext NOT NULL,
  `invoice_date` varchar(15) NOT NULL,
  `eway_bill` varchar(100) NOT NULL,
  `hsn_code` longtext NOT NULL,
  `vehicle_no` varchar(100) NOT NULL,
  `despatched_from` varchar(15) NOT NULL,
  `despatched_to` varchar(15) NOT NULL,
  `transport_name` varchar(250) NOT NULL,
  `transport_gstin` varchar(50) NOT NULL,
  `carton_from_to` varchar(50) NOT NULL,
  `cracker_name` varchar(250) NOT NULL,
  `carton` int(11) NOT NULL,
  `carton_contents` varchar(250) NOT NULL,
  `contents_type` varchar(250) NOT NULL,
  `qty` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `per` varchar(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `total_carton` int(11) NOT NULL,
  `good_value` varchar(50) NOT NULL,
  `add_p_f` varchar(50) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `discount_amount` varchar(20) NOT NULL,
  `taxable_value` varchar(50) NOT NULL,
  `igst` int(11) NOT NULL,
  `igst_amount` varchar(50) DEFAULT NULL,
  `cgst` int(11) NOT NULL,
  `cgst_amount` varchar(50) DEFAULT NULL,
  `sgst` int(11) NOT NULL,
  `sgst_amount` varchar(50) DEFAULT NULL,
  `round_off` varchar(50) NOT NULL,
  `net_amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerbill`
--

INSERT INTO `customerbill` (`id`, `consignee_name`, `state`, `state_type`, `gstin`, `consignee_address`, `place`, `invoice_no`, `invoice_date`, `eway_bill`, `hsn_code`, `vehicle_no`, `despatched_from`, `despatched_to`, `transport_name`, `transport_gstin`, `carton_from_to`, `cracker_name`, `carton`, `carton_contents`, `contents_type`, `qty`, `rate`, `per`, `amount`, `total_carton`, `good_value`, `add_p_f`, `discount`, `discount_amount`, `taxable_value`, `igst`, `igst_amount`, `cgst`, `cgst_amount`, `sgst`, `sgst_amount`, `round_off`, `net_amount`) VALUES
(6, 'CHANDRA SALES PRIVATE LIMITED', 'TAMIL NADU', 'Intrastate', '33AACCC1597R1Z6', '5/255 KALAYARKURICHI ', 'SIVAKASI', '2', '2024-04-02', 'Gpay', '3604', 'VEH123', 'CHENNAI', 'SIVAKASI', 'CHANDRA', 'CHANDRA123', '111 - 112', 'Rocket Balm', 20, '20 Unit', '', 400, 182, 'Unit', '72800', 20, '72800', '', '5', '3640', '69160', 18, '12448.8', 0, '', 0, '', '-0.80', '81609'),
(9, 'SIMRAN TRADING', 'UTTARKAND', 'Interstate', '05GBLPS1659K1Z0', 'KSHETRA ROAD ', 'RISHIKESH', '3', '2024-04-06', 'Gpay', '3604', 'VEH123', 'CHENNAI', 'SIVAKASI', 'TRANSPORT', 'TRANS123', '110 - 111', 'Red Bijili', 10, '3 Pocket', '', 30, 10, '10 Pocket', '300', 13, '2800', '', '5', '140', '2660', 0, '', 9, '239.4', 9, '239.4', '-0.80', '3139'),
(10, 'SIMRAN TRADING', 'UTTARKAND', 'Interstate', '05GBLPS1659K1Z0', 'KSHETRA ROAD ', 'RISHIKESH', '3', '2024-04-06', 'Gpay', '3604', 'VEH123', 'CHENNAI', 'SIVAKASI', 'TRANSPORT', 'TRANS123', '111 - 112', 'Hydro Bomb Green', 5, '10 Unit', '', 50, 50, 'Unit', '2500', 13, '2800', '', '5', '140', '2660', 0, '', 9, '239.4', 9, '239.4', '-0.80', '3139'),
(14, 'SRI R A TRANDERS', 'JHARKHAND', 'Intrastate', '831002', 'NEAR NATARAJ FURNITURE ASH S/O RAM AWTAR GULATI STATI', 'JAMSHEDPUR', '4', '2024-04-06', 'Gpay', '3604', 'VEH123', 'CHENNAI', 'SIVAKASI', 'TRANSPORT', 'TRANS123', '1 - 2', 'Red Bijili', 10, '30 Pocket', '', 300, 2, '10 Pocket', '600', 30, '600', '', '5', '30', '570', 18, '102.6', 0, '', 0, '', '-0.60', '673'),
(15, 'NATIONAL FIREWORKS', 'LUCKNOW', 'Intrastate', '09DQGPA1905K1ZY', 'KAKORI PLOT NO5 AMETHIYASALEMPUR', 'UTTAR PRADESH', '5', '2024-04-06', 'Gpay', '3604', 'VEH123', 'CHENNAI', 'SIVAKASI', 'NATIONAL TRANSPORT', 'TRANS1234', '1 - 2', '3 1/2 - 50 Deluxe', 10, '5 Pocket', '', 50, 10, '75 Pocket', '500', 33, '42625', '', '10', '4263', '38363', 18, '6905.34', 0, '', 0, '', '-0.34', '45268'),
(16, 'NATIONAL FIREWORKS', 'LUCKNOW', 'Intrastate', '09DQGPA1905K1ZY', 'KAKORI PLOT NO5 AMETHIYASALEMPUR', 'UTTAR PRADESH', '5', '2024-04-06', 'Gpay', '3604', 'VEH123', 'CHENNAI', 'SIVAKASI', 'NATIONAL TRANSPORT', 'TRANS1234', '2 - 3', 'Square Bomb Foils', 5, '3 Unit', '', 15, 15, 'Unit', '375', 33, '42625', '', '10', '4263', '38363', 18, '6905.34', 0, '', 0, '', '-0.34', '45268'),
(17, 'NATIONAL FIREWORKS', 'LUCKNOW', 'Intrastate', '09DQGPA1905K1ZY', 'KAKORI PLOT NO5 AMETHIYASALEMPUR', 'UTTAR PRADESH', '5', '2024-04-06', 'Gpay', '3604', 'VEH123', 'CHENNAI', 'SIVAKASI', 'NATIONAL TRANSPORT', 'TRANS1234', '3 - 4 ', 'Hydro Bomb Green', 10, '25 Unit', '', 250, 167, 'Unit', '41750', 33, '42625', '', '10', '4263', '38363', 18, '6905.34', 0, '', 0, '', '-0.34', '45268'),
(18, 'CHANDRA SALES PRIVATE LIMITED', 'TAMIL NADU', 'Interstate', '33AACCC1597R1Z6', '5/255 KALAYARKURICHI ', 'SIVAKASI', '6', '2024-04-04', 'Gpay', '3604', 'VEH123', 'SIVAKASI', 'CHENNAI', 'CHANDRA TRANSPORT', 'TRANS123', '4 - 5', '4 Lakshmi', 5, '6 Pocket', '', 30, 2710, '500 Pocket', '81300', 51, '120504', '', '25', '30126', '90378', 0, '', 9, '8134.02', 9, '8134.02', '-0.04', '106646'),
(19, 'CHANDRA SALES PRIVATE LIMITED', 'TAMIL NADU', 'Interstate', '33AACCC1597R1Z6', '5/255 KALAYARKURICHI ', 'SIVAKASI', '6', '2024-04-04', 'Gpay', '3604', 'VEH123', 'SIVAKASI', 'CHENNAI', 'CHANDRA TRANSPORT', 'TRANS123', '5 - 6', '3 1/2 - 24 Deluxe', 10, '1 Pocket', '', 10, 10, '100 Pocket', '150', 51, '120504', '', '25', '30126', '90378', 0, '', 9, '8134.02', 9, '8134.02', '-0.04', '106646'),
(20, 'CHANDRA SALES PRIVATE LIMITED', 'TAMIL NADU', 'Interstate', '33AACCC1597R1Z6', '5/255 KALAYARKURICHI ', 'SIVAKASI', '6', '2024-04-04', 'Gpay', '3604', 'VEH123', 'SIVAKASI', 'CHENNAI', 'CHANDRA TRANSPORT', 'TRANS123', '6 - 7', 'Red Bijili', 3, '9 Pocket', '', 27, 102, '10 Pocket', '2754', 51, '120504', '', '25', '30126', '90378', 0, '', 9, '8134.02', 9, '8134.02', '-0.04', '106646'),
(21, 'CHANDRA SALES PRIVATE LIMITED', 'TAMIL NADU', 'Interstate', '33AACCC1597R1Z6', '5/255 KALAYARKURICHI ', 'SIVAKASI', '6', '2024-04-04', 'Gpay', '3604', 'VEH123', 'SIVAKASI', 'CHENNAI', 'CHANDRA TRANSPORT', 'TRANS123', '7 - 8', 'Atom Bomb Small Foils', 5, '10 Unit', '', 50, 122, 'Unit', '6100', 51, '120504', '', '25', '30126', '90378', 0, '', 9, '8134.02', 9, '8134.02', '-0.04', '106646'),
(22, 'CHANDRA SALES PRIVATE LIMITED', 'TAMIL NADU', 'Interstate', '33AACCC1597R1Z6', '5/255 KALAYARKURICHI ', 'SIVAKASI', '6', '2024-04-04', 'Gpay', '3604', 'VEH123', 'SIVAKASI', 'CHENNAI', 'CHANDRA TRANSPORT', 'TRANS123', '8 - 9', 'Square Bomb Green', 10, '10 Unit', '', 100, 128, 'Unit', '12800', 51, '120504', '', '25', '30126', '90378', 0, '', 9, '8134.02', 9, '8134.02', '-0.04', '106646'),
(23, 'CHANDRA SALES PRIVATE LIMITED', 'TAMIL NADU', 'Interstate', '33AACCC1597R1Z6', '5/255 KALAYARKURICHI ', 'SIVAKASI', '6', '2024-04-04', 'Gpay', '3604', 'VEH123', 'SIVAKASI', 'CHENNAI', 'CHANDRA TRANSPORT', 'TRANS123', '9 - 10', 'Hydro Bomb Foils', 10, '5 Unit', '', 50, 183, 'Unit', '9150', 51, '120504', '', '25', '30126', '90378', 0, '', 9, '8134.02', 9, '8134.02', '-0.04', '106646'),
(24, 'CHANDRA SALES PRIVATE LIMITED', 'TAMIL NADU', 'Interstate', '33AACCC1597R1Z6', '5/255 KALAYARKURICHI ', 'SIVAKASI', '6', '2024-04-04', 'Gpay', '3604', 'VEH123', 'SIVAKASI', 'CHENNAI', 'CHANDRA TRANSPORT', 'TRANS123', '10 - 11', 'King Of King Foils', 5, '1 Unit', '', 5, 238, 'Unit', '1190', 51, '120504', '', '25', '30126', '90378', 0, '', 9, '8134.02', 9, '8134.02', '-0.04', '106646'),
(25, 'CHANDRA SALES PRIVATE LIMITED', 'TAMIL NADU', 'Interstate', '33AACCC1597R1Z6', '5/255 KALAYARKURICHI ', 'SIVAKASI', '6', '2024-04-04', 'Gpay', '3604', 'VEH123', 'SIVAKASI', 'CHENNAI', 'CHANDRA TRANSPORT', 'TRANS123', '11 - 12', 'Classic Bomb Green', 8, '2 Unit', '', 16, 274, 'Unit', '4384', 51, '120504', '', '25', '30126', '90378', 0, '', 9, '8134.02', 9, '8134.02', '-0.04', '106646'),
(26, 'CHANDRA SALES PRIVATE LIMITED', 'TAMIL NADU', 'Interstate', '33AACCC1597R1Z6', '5/255 KALAYARKURICHI ', 'SIVAKASI', '6', '2024-04-04', 'Gpay', '3604', 'VEH123', 'SIVAKASI', 'CHENNAI', 'CHANDRA TRANSPORT', 'TRANS123', '12 - 13', 'Mini Bullter Bomb Foils', 2, '7 Unit', '', 14, 84, 'Unit', '1176', 51, '120504', '', '25', '30126', '90378', 0, '', 9, '8134.02', 9, '8134.02', '-0.04', '106646'),
(27, 'CHANDRA SALES PRIVATE LIMITED', 'TAMIL NADU', 'Interstate', '33AACCC1597R1Z6', '5/255 KALAYARKURICHI ', 'SIVAKASI', '6', '2024-04-04', 'Gpay', '3604', 'VEH123', 'SIVAKASI', 'CHENNAI', 'CHANDRA TRANSPORT', 'TRANS123', '13 - 14', 'Giant 56', 15, '1 Unit', '', 15, 100, 'Piece', '1500', 51, '120504', '', '25', '30126', '90378', 0, '', 9, '8134.02', 9, '8134.02', '-0.04', '106646');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `id` int(11) NOT NULL,
  `igst` int(11) NOT NULL,
  `sgst` int(11) NOT NULL,
  `cgst` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`id`, `igst`, `sgst`, `cgst`) VALUES
(1, 18, 9, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consignee`
--
ALTER TABLE `consignee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cracker`
--
ALTER TABLE `cracker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerbill`
--
ALTER TABLE `customerbill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consignee`
--
ALTER TABLE `consignee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cracker`
--
ALTER TABLE `cracker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `customerbill`
--
ALTER TABLE `customerbill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
