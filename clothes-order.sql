-- Create database
CREATE DATABASE IF NOT EXISTS `clothes_order`;
USE `clothes_order`;

-- Create table tbl_admin
CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Insert data into tbl_admin
INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'quan', 'quan1', '123');

-- Create table tbl_category
CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Insert data into tbl_category
INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(27, 'Clothes 1', 'Clothes_Category_1.jpg', 'Yes', 'Yes'),
(28, 'Clothes 2', 'Clothes_Category_2.jpg', 'Yes', 'Yes'),
(33, 'Clothes 3', 'Clothes_Category_3.jpg', 'Yes', 'Yes'),
(34, '4', 'Clothes_Category_254.jpg', 'Yes', 'Yes');

-- Create table tbl_clothes (schema based on partial view, modify as necessary)
CREATE TABLE `tbl_clothes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Insert data into tbl_clothes (add data as necessary)

-- Create table tbl_oder
CREATE TABLE `tbl_oder` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `clothes` varchar(150) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Insert data into tbl_oder (add data as necessary)

COMMIT;
