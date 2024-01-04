-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 05:35 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account_power2pay_affiliate`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities`
--

CREATE TABLE `tbl_activities` (
  `id` int(11) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `activities` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_activities`
--

INSERT INTO `tbl_activities` (`id`, `mobile`, `activities`, `created_at`) VALUES
(1, '08109677821', 'Saved Passport', '2023-08-25 00:26:01'),
(2, '08109677821', 'Uploded Id Card Details', '2023-08-25 00:26:27'),
(3, '08109677821', 'Uploded Id Card Details', '2023-08-25 00:30:34'),
(4, '08109677821', 'Updated Profile Details', '2023-08-25 00:33:41'),
(5, '08109677821', 'Sent Bank Edit Request', '2023-08-25 00:35:11'),
(6, '08109677821', 'Changed Password', '2023-08-25 00:36:19'),
(7, '6308445014', 'Registered On Affiliate Marketing', '2023-08-28 13:22:24'),
(8, '6308445014', 'Registered On Affiliate Marketing', '2023-08-28 13:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banks`
--

CREATE TABLE `tbl_banks` (
  `id` int(11) NOT NULL,
  `bank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_banks`
--

INSERT INTO `tbl_banks` (`id`, `bank`) VALUES
(1, 'Access Bank Plc'),
(2, 'Citibank Nigeria Limited'),
(3, 'Ecobank Nigeria Plc'),
(4, 'Fidelity Bank Plc'),
(5, 'First Bank Nigeria Limited'),
(6, 'First City Monument Bank Plc'),
(7, 'Globus Bank Limited'),
(8, 'Guaranty Trust Bank Plc'),
(9, 'Heritage Banking Company Ltd'),
(10, 'Keystone Bank Limited'),
(11, 'Parallex Bank Ltd'),
(12, 'Polaris Bank Plc'),
(13, 'Premium Trust Bank '),
(14, 'Providus Bank'),
(15, 'Stanbic IBTC Bank Plc'),
(16, 'Standard Chartered Bank Nigeria Ltd'),
(17, 'Sterling Bank Plc'),
(18, 'SunTrust Bank Nigeria Limited'),
(19, 'Titan Trust Bank Ltd'),
(20, 'Union Bank Of Nigeria Plc'),
(21, 'United Bank For Africa'),
(22, 'Unity Bank Plc'),
(23, 'Wema Bank Plc'),
(24, 'Zenith Bank Plc'),
(25, 'Opay  '),
(26, 'Kuda MFB'),
(27, 'Moniepoint MFB'),
(28, 'PalmPay');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank_edit_request`
--

CREATE TABLE `tbl_bank_edit_request` (
  `id` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bank_edit_request`
--

INSERT INTO `tbl_bank_edit_request` (`id`, `reason`, `account_number`, `bank_name`, `mobile`) VALUES
(1, 'I don\'t Know', '0639642601', 'Ecobank Nigeria Plc', '08109677821'),
(2, 'just testing', '0639642601', 'Access Bank Plc', '08109677821');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank_info`
--

CREATE TABLE `tbl_bank_info` (
  `id` int(11) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bank_info`
--

INSERT INTO `tbl_bank_info` (`id`, `account_number`, `bank_name`, `mobile`) VALUES
(1, '0639642601', 'Guaranty Trust Bank Plc', '08109677821'),
(2, '', '', '6308445014'),
(3, '', '', '6308445014');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `attached_brandid` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `mobile`, `password`, `attached_brandid`, `status`, `pin`) VALUES
(4, 'Simply Adeshina', 'abdulsamadadeshina4@gmail.com', '08109677821', '12345', '', 'Open', '1111'),
(5, 'Testing Update', 'simplyadeshina@gmail.com', '6308445014', '123', '', 'Open', '1111'),
(6, 'Testing Update', 'simplyadeshina@gmail.com', '6308445014', '123', '', 'Open', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_info`
--

CREATE TABLE `tbl_user_info` (
  `id` int(11) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `idcardno` varchar(255) NOT NULL,
  `idcardimg` text NOT NULL,
  `passport` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_info`
--

INSERT INTO `tbl_user_info` (`id`, `mobile`, `address`, `idcardno`, `idcardimg`, `passport`) VALUES
(1, '08109677821', 'asdfghjk,l.;iuytrewesdxfcvjnl.dfgsdrasfgcnm jkghusraseaedggjghok', '1234567890', 'public/idcards/08109677821.jpg', 'public/passports/08109677821.png'),
(2, '6308445014', '', '', '', ''),
(3, '6308445014', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_activities`
--
ALTER TABLE `tbl_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banks`
--
ALTER TABLE `tbl_banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bank_edit_request`
--
ALTER TABLE `tbl_bank_edit_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bank_info`
--
ALTER TABLE `tbl_bank_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_info`
--
ALTER TABLE `tbl_user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_activities`
--
ALTER TABLE `tbl_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_banks`
--
ALTER TABLE `tbl_banks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_bank_edit_request`
--
ALTER TABLE `tbl_bank_edit_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_bank_info`
--
ALTER TABLE `tbl_bank_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user_info`
--
ALTER TABLE `tbl_user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
