-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2017 at 06:16 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `203`
--

-- --------------------------------------------------------

--
-- Table structure for table `uc_address`
--

CREATE TABLE `uc_address` (
  `id_address` int(11) NOT NULL,
  `address` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `region` varchar(45) NOT NULL,
  `postalcode` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uc_configuration`
--

CREATE TABLE `uc_configuration` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `value` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uc_configuration`
--

INSERT INTO `uc_configuration` (`id`, `name`, `value`) VALUES
(1, 'website_name', 'Susan Ice Store'),
(2, 'website_url', 'localhost/'),
(3, 'email', 'noreply@ILoveUserCake.com'),
(4, 'activation', 'false'),
(5, 'resend_activation_threshold', '0'),
(6, 'language', 'models/languages/en.php'),
(7, 'template', 'models/site-templates/default.css'),
(8, 'externalCss', 'https://code.getmdl.io/1.3.0/material.pink-light_blue.min.css'),
(9, 'font', 'https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&lang=en'),
(10, 'externalJs', 'https://code.getmdl.io/1.3.0/material.min.js'),
(11, 'icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');

-- --------------------------------------------------------

--
-- Table structure for table `uc_customer`
--

CREATE TABLE `uc_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_lname` varchar(45) NOT NULL,
  `customer_fname` varchar(45) NOT NULL,
  `customer_address` varchar(45) NOT NULL,
  `customer_email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uc_customer`
--

INSERT INTO `uc_customer` (`customer_id`, `customer_lname`, `customer_fname`, `customer_address`, `customer_email`) VALUES
(6, 'film', 'man', 'filmman@gmail.com', ''),
(7, 'test', 'employee', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `uc_employee`
--

CREATE TABLE `uc_employee` (
  `emp_id` int(11) NOT NULL,
  `Id_address` varchar(45) NOT NULL,
  `emp_contact` varchar(45) NOT NULL,
  `emp_fname` varchar(45) NOT NULL,
  `emp_lname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uc_inventory`
--

CREATE TABLE `uc_inventory` (
  `prod_id` int(11) NOT NULL,
  `item_details` varchar(45) NOT NULL,
  `owner_loginInfo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uc_logs`
--

CREATE TABLE `uc_logs` (
  `lid` int(11) NOT NULL,
  `lsource` int(11) NOT NULL,
  `ldescription` varchar(64) NOT NULL,
  `ldatetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uc_logs`
--

INSERT INTO `uc_logs` (`lid`, `lsource`, `ldescription`, `ldatetime`) VALUES
(1, 1, 'got it correct with question id: 3answered: 2', '2017-02-13 08:54:08');

-- --------------------------------------------------------

--
-- Table structure for table `uc_owner`
--

CREATE TABLE `uc_owner` (
  `owner_id` int(11) NOT NULL,
  `owner_fname` varchar(45) NOT NULL,
  `owner_lname` varchar(45) NOT NULL,
  `owner_loginInfo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uc_pages`
--

CREATE TABLE `uc_pages` (
  `id` int(11) NOT NULL,
  `page` varchar(150) NOT NULL,
  `private` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uc_pages`
--

INSERT INTO `uc_pages` (`id`, `page`, `private`) VALUES
(1, 'account.php', 1),
(2, 'activate-account.php', 0),
(3, 'admin_configuration.php', 1),
(4, 'admin_page.php', 1),
(5, 'admin_pages.php', 1),
(6, 'admin_permission.php', 1),
(7, 'admin_permissions.php', 1),
(8, 'admin_user.php', 1),
(9, 'admin_users.php', 1),
(10, 'forgot-password.php', 0),
(11, 'index.php', 0),
(12, 'left-nav.php', 0),
(13, 'login.php', 0),
(14, 'logout.php', 1),
(15, 'register.php', 0),
(16, 'resend-activation.php', 0),
(17, 'user_settings.php', 1),
(18, 'question_create.php', 0);

-- --------------------------------------------------------

--
-- Table structure for table `uc_permissions`
--

CREATE TABLE `uc_permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uc_permissions`
--

INSERT INTO `uc_permissions` (`id`, `name`) VALUES
(1, 'New Member'),
(2, 'Administrator'),
(3, 'Employee'),
(4, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `uc_permission_page_matches`
--

CREATE TABLE `uc_permission_page_matches` (
  `id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uc_permission_page_matches`
--

INSERT INTO `uc_permission_page_matches` (`id`, `permission_id`, `page_id`) VALUES
(1, 1, 1),
(2, 1, 14),
(3, 1, 17),
(4, 2, 1),
(5, 2, 3),
(6, 2, 4),
(7, 2, 5),
(8, 2, 6),
(9, 2, 7),
(10, 2, 8),
(11, 2, 9),
(12, 2, 14),
(13, 2, 17);

-- --------------------------------------------------------

--
-- Table structure for table `uc_product`
--

CREATE TABLE `uc_product` (
  `prod_id` int(11) NOT NULL,
  `prod_description` char(45) NOT NULL,
  `prod_category` varchar(45) NOT NULL,
  `prod_name` varchar(45) NOT NULL,
  `prod_price` decimal(9,2) NOT NULL,
  `supp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uc_product`
--

INSERT INTO `uc_product` (`prod_id`, `prod_description`, `prod_category`, `prod_name`, `prod_price`, `supp_id`) VALUES
(1, 'asd', 'asd', 'asd', '10.00', 1),
(2, 'Ice', 'bits and pieces of ice', 'Crushed Ice', '100.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uc_shipment`
--

CREATE TABLE `uc_shipment` (
  `shipment_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uc_supplier`
--

CREATE TABLE `uc_supplier` (
  `supp_id` int(11) NOT NULL,
  `supp_name` varchar(45) NOT NULL,
  `supp_address` varchar(45) NOT NULL,
  `supp_contact` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uc_supplier`
--

INSERT INTO `uc_supplier` (`supp_id`, `supp_name`, `supp_address`, `supp_contact`) VALUES
(1, 'Microsoft', 'antartica', '09122222222');

-- --------------------------------------------------------

--
-- Table structure for table `uc_transaction`
--

CREATE TABLE `uc_transaction` (
  `order_id` int(11) NOT NULL,
  `shipment_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `amount` decimal(9,2) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uc_users`
--

CREATE TABLE `uc_users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(150) NOT NULL,
  `activation_token` varchar(225) NOT NULL,
  `last_activation_request` int(11) NOT NULL,
  `lost_password_request` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `title` varchar(150) NOT NULL,
  `sign_up_stamp` int(11) NOT NULL,
  `last_sign_in_stamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uc_users`
--

INSERT INTO `uc_users` (`id`, `user_name`, `display_name`, `password`, `email`, `activation_token`, `last_activation_request`, `lost_password_request`, `active`, `title`, `sign_up_stamp`, `last_sign_in_stamp`) VALUES
(1, 'admin', 'admin', '7f5c26009b4e6dc747e55327a52c74721e114ace7945bfb007429dc9d1c6b29b4', 'cfcpoblete@gmail.com', '8274eb23ad4ad466d3974d55f17c2603', 1486541271, 0, 1, 'New Member', 1486541271, 1488080807),
(3, 'filmman@gmail.com', '6', '0d62a7560828a2584c3db8920701c4277565f12c9dea5682806c5a3cbb65518c3', 'filmman@gmail.com', '17ab731cbe764c40b1d75b3b1a21739d', 1487953501, 0, 1, 'New Member', 1487953501, 0),
(4, '', '7', '97e9119b96162454075fa0bec0f0928a66a8d760bdbf813a244ec9b7fbf87e173', 'testemployee@mail.com', '26155dae393d87f09c74ac9ab66bcee3', 1488080166, 0, 1, 'New Member', 1488080166, 1488080189);

-- --------------------------------------------------------

--
-- Table structure for table `uc_user_permission_matches`
--

CREATE TABLE `uc_user_permission_matches` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uc_user_permission_matches`
--

INSERT INTO `uc_user_permission_matches` (`id`, `user_id`, `permission_id`) VALUES
(1, 1, 2),
(2, 1, 1),
(3, 0, 1),
(4, 0, 1),
(5, 2, 1),
(6, 3, 1),
(7, 4, 1),
(8, 5, 1),
(9, 0, 1),
(10, 0, 1),
(11, 0, 1),
(12, 0, 1),
(13, 2, 1),
(14, 3, 1),
(15, 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uc_address`
--
ALTER TABLE `uc_address`
  ADD PRIMARY KEY (`id_address`);

--
-- Indexes for table `uc_configuration`
--
ALTER TABLE `uc_configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uc_customer`
--
ALTER TABLE `uc_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `uc_employee`
--
ALTER TABLE `uc_employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `uc_inventory`
--
ALTER TABLE `uc_inventory`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `uc_logs`
--
ALTER TABLE `uc_logs`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `uc_owner`
--
ALTER TABLE `uc_owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `uc_pages`
--
ALTER TABLE `uc_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uc_permissions`
--
ALTER TABLE `uc_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uc_permission_page_matches`
--
ALTER TABLE `uc_permission_page_matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uc_product`
--
ALTER TABLE `uc_product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `uc_shipment`
--
ALTER TABLE `uc_shipment`
  ADD PRIMARY KEY (`shipment_id`);

--
-- Indexes for table `uc_supplier`
--
ALTER TABLE `uc_supplier`
  ADD PRIMARY KEY (`supp_id`);

--
-- Indexes for table `uc_transaction`
--
ALTER TABLE `uc_transaction`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `uc_users`
--
ALTER TABLE `uc_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uc_user_permission_matches`
--
ALTER TABLE `uc_user_permission_matches`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uc_address`
--
ALTER TABLE `uc_address`
  MODIFY `id_address` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uc_configuration`
--
ALTER TABLE `uc_configuration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `uc_customer`
--
ALTER TABLE `uc_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `uc_employee`
--
ALTER TABLE `uc_employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uc_inventory`
--
ALTER TABLE `uc_inventory`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uc_logs`
--
ALTER TABLE `uc_logs`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `uc_owner`
--
ALTER TABLE `uc_owner`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uc_pages`
--
ALTER TABLE `uc_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `uc_permissions`
--
ALTER TABLE `uc_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `uc_permission_page_matches`
--
ALTER TABLE `uc_permission_page_matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `uc_product`
--
ALTER TABLE `uc_product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `uc_shipment`
--
ALTER TABLE `uc_shipment`
  MODIFY `shipment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uc_supplier`
--
ALTER TABLE `uc_supplier`
  MODIFY `supp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `uc_transaction`
--
ALTER TABLE `uc_transaction`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uc_users`
--
ALTER TABLE `uc_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `uc_user_permission_matches`
--
ALTER TABLE `uc_user_permission_matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
