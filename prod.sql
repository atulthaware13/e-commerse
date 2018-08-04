-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2018 at 05:38 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshoppy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE `cart_tbl` (
  `cart_id` int(30) NOT NULL,
  `prod_id` int(30) NOT NULL,
  `prod_title` varchar(60) NOT NULL,
  `prod_img` varchar(60) NOT NULL,
  `prod_sp` decimal(30,0) NOT NULL,
  `prod_qty` int(10) NOT NULL,
  `total` decimal(60,0) NOT NULL,
  `added_by` varchar(60) NOT NULL,
  `status` int(10) NOT NULL,
  `order_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_tbl`
--

INSERT INTO `cart_tbl` (`cart_id`, `prod_id`, `prod_title`, `prod_img`, `prod_sp`, `prod_qty`, `total`, `added_by`, `status`, `order_no`) VALUES
(9, 19, 'Iphone 5S', 'iPhone-5s.jpeg', '12000', 2, '24000', 'q912bhlou8bdsgtqtmbdsgdp1h', 1, 'shoppycart3546'),
(10, 20, 'Samsung Galaxy S9', 'samsung_galaxy_s8.jpeg', '20000', 1, '20000', 'q912bhlou8bdsgtqtmbdsgdp1h', 1, 'shoppycart3546'),
(13, 17, 'DSLR Camera', 'camera.jpg', '25000', 1, '25000', '75tph8ktprn0gnei8uljcdirm8', 1, 'shoppycart2383'),
(14, 14, 'Mi4i TV', 'Mi.jpg', '12000', 1, '12000', '17m7eldgkap0f8knj84vek9762', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE `category_tbl` (
  `cat_id` int(30) NOT NULL,
  `cat_name` varchar(60) NOT NULL,
  `cat_img` varchar(60) NOT NULL,
  `cat_priority` int(30) NOT NULL,
  `cat_status` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`cat_id`, `cat_name`, `cat_img`, `cat_priority`, `cat_status`) VALUES
(1, 'Electronics', 'electronics.jpg', 0, 1),
(2, 'TVs & Appliances', 'tv.jpg', 0, 1),
(3, 'MEN', 'men.jpg', 1, 1),
(4, 'Women', 'women.jpg', 5, 1),
(5, 'Baby & Kids', 'Baby.jpg', 1, 1),
(6, 'Home & Furniture', 'homefurniture.jpg', 1, 1),
(7, 'Fitness & GYM', 'gym.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `country_tbl`
--

CREATE TABLE `country_tbl` (
  `country_id` int(30) NOT NULL,
  `country_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_tbl`
--

INSERT INTO `country_tbl` (`country_id`, `country_name`) VALUES
(1, 'USA'),
(2, 'India'),
(3, 'Canada'),
(4, 'France'),
(5, 'China');

-- --------------------------------------------------------

--
-- Table structure for table `ms_prod_tbl`
--

CREATE TABLE `ms_prod_tbl` (
  `prod_id` int(30) NOT NULL,
  `prod_title` varchar(60) NOT NULL,
  `prod_brand` varchar(60) NOT NULL,
  `prod_mrp` decimal(60,0) NOT NULL,
  `prod_sp` decimal(60,0) NOT NULL,
  `prod_img` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_prod_tbl`
--

INSERT INTO `ms_prod_tbl` (`prod_id`, `prod_title`, `prod_brand`, `prod_mrp`, `prod_sp`, `prod_img`) VALUES
(1, 'ULHD', 'LG', '65000', '55000', 'myshoppy23-05-2018180451.jpg'),
(2, 'S9+', 'Samsung', '55000', '45000', 'myshoppy23-05-2018182305.jpg'),
(3, 'iPhone X', 'Iphone', '85000', '75000', 'myshoppy23-05-2018183109.jpg'),
(5, 'Jacket', 'LEVIS', '9999', '8999', 'myshoppy23-05-2018183510.jpg'),
(6, 'Shoes', 'NIKE', '8999', '4999', 'myshoppy23-05-2018183614.jpg'),
(7, 'Pixel', 'Google', '65000', '45000', 'myshoppy23-05-2018183705.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ms_users_tbl`
--

CREATE TABLE `ms_users_tbl` (
  `ms_user_id` int(30) NOT NULL,
  `ms_name` varchar(60) NOT NULL,
  `ms_email` varchar(60) NOT NULL,
  `ms_password` varchar(60) NOT NULL,
  `ms_mobile` varchar(60) NOT NULL,
  `ms_image` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_users_tbl`
--

INSERT INTO `ms_users_tbl` (`ms_user_id`, `ms_name`, `ms_email`, `ms_password`, `ms_mobile`, `ms_image`) VALUES
(1, 'Sanjeev', 'sanjeev@gmail.com', 'sanjeev', '8521811098', ''),
(2, 'Prerana', 'prerana@gmail.com', 'prerana', '9875422205', ''),
(3, 'Shreya', 'shreya@gmail.com', 'shreya', '9875422205', ''),
(4, 'Deepak', 'deepak@gmail.com', 'deepak', '7984546405', ''),
(5, 'Prawal', 'kajal@gmail.com', 'prawal', '789254163', ''),
(6, 'Manish', 'manish@gmail.com', '123456', '8774646468', ''),
(7, 'Ronaldo', 'cr7@gmail.com', '1123798', '9874521630', ''),
(8, 'Smriti', 'smriti@gmail.com', '4654464', '4654878502', 'myshoppy23-052018161032.jpg'),
(9, 'Alia', 'alia@gmail.com', '123154', '7458888412', 'myshoppy23-052018161935.jpg'),
(10, 'Deepika', 'deepika@gmail.com', 'deepika', '9874654401', ''),
(11, 'Shakshi', 'shakshi@gmail.com', 'shakshi', '9874354654', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders_tbl`
--

CREATE TABLE `orders_tbl` (
  `order_id` int(30) NOT NULL,
  `order_no` varchar(30) NOT NULL,
  `order_qty` int(30) NOT NULL,
  `order_total` decimal(30,0) NOT NULL,
  `order_by` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_tbl`
--

INSERT INTO `orders_tbl` (`order_id`, `order_no`, `order_qty`, `order_total`, `order_by`, `order_date`, `order_status`) VALUES
(1, 'shoppycart7142', 2, '24000', 1, '2018-06-08', 1),
(2, 'shoppycart9201', 2, '45000', 2, '2018-06-08', 1),
(3, 'shoppycart8221', 3, '42000', 3, '2018-06-09', 1),
(4, 'shoppycart7053', 1, '12000', 2, '2018-06-09', 1),
(17, 'shoppycart1057', 1, '20000', 1, '2018-06-13', 1),
(18, 'shoppycart9491', 1, '20000', 1, '2018-06-13', 1),
(19, 'shoppycart3695', 1, '25000', 5, '2018-06-13', 1),
(20, 'shoppycart6495', 2, '37000', 10, '2018-06-13', 1),
(21, 'shoppycart3789', 2, '40000', 6, '2018-06-13', 1),
(22, 'shoppycart5961', 2, '30000', 7, '2018-06-13', 1),
(23, 'shoppycart3865', 1, '1200', 1, '2018-06-13', 1),
(24, 'shoppycart7618', 2, '40000', 1, '2018-06-14', 1),
(26, 'shoppycart2047', 1, '1200', 2, '2018-06-16', 1),
(29, 'shoppycart4383', 1, '25000', 1, '2018-06-16', 1),
(30, 'shoppycart6734', 2, '30000', 1, '2018-06-16', 1),
(31, 'shoppycart3795', 1, '12000', 5, '2018-06-16', 1),
(32, 'shoppycart3546', 2, '32000', 5, '2018-06-16', 1),
(33, 'shoppycart2326', 1, '25000', 1, '2018-06-16', 1),
(34, 'shoppycart7016', 1, '1200', 1, '2018-06-16', 1),
(35, 'shoppycart9855', 2, '2400', 1, '2018-06-16', 1),
(36, 'shoppycart1794', 1, '25000', 1, '2018-06-16', 1),
(37, 'shoppycart4539', 2, '50000', 1, '2018-06-16', 1),
(38, 'shoppycart2383', 1, '25000', 1, '2018-06-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_history_tbl`
--

CREATE TABLE `payment_history_tbl` (
  `pay_id` int(10) NOT NULL,
  `txnid` varchar(60) NOT NULL,
  `amount` decimal(60,0) NOT NULL,
  `status` varchar(30) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `mode` varchar(30) NOT NULL,
  `bank_ref_num` int(20) NOT NULL,
  `order_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_history_tbl`
--

INSERT INTO `payment_history_tbl` (`pay_id`, `txnid`, `amount`, `status`, `firstname`, `mobileno`, `mode`, `bank_ref_num`, `order_no`) VALUES
(6, '69b1c7b53675d0537e03', '25000', 'failure', 'Prawal', '789254163', 'CC', 181599, 'shoppycart3695'),
(7, '20263669d4738dd01bea', '37000', 'failure', 'Deepika', '9874654401', 'CC', 659709, 'shoppycart6495'),
(8, '97d8e232d0135b74636f', '40000', 'failure', 'Manish', '8774646468', 'CC', 756391, 'shoppycart3789'),
(9, '0ff580f8766e3f9badde', '30000', 'failure', 'Ronaldo', '9874521630', 'CC', 121730, 'shoppycart5961'),
(10, '609e66ca9b1b207d806e', '1200', 'failure', 'Sanjeev', '8521811098', 'CC', 190284, 'shoppycart3865'),
(11, '9864d23a27d99055baa4', '1200', 'failure', 'Prerana', '9875422205', 'CC', 392970, 'shoppycart2047'),
(12, 'e72b8314d550e22065b2', '32000', 'failure', 'Prawal', '789254163', 'CC', 175979, 'shoppycart3546'),
(13, '2df87d9313853d914dce', '25000', 'failure', 'Sanjeev', '8521811098', 'CC', 231566, 'shoppycart2326');

-- --------------------------------------------------------

--
-- Table structure for table `product_img_tbl`
--

CREATE TABLE `product_img_tbl` (
  `img_id` int(30) NOT NULL,
  `img_name` varchar(60) NOT NULL,
  `prod_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_img_tbl`
--

INSERT INTO `product_img_tbl` (`img_id`, `img_name`, `prod_id`) VALUES
(2, 'zoom.jpg', 11),
(3, 'Mi.jpg', 2),
(6, 'Pics1.jpg', 3),
(7, 'fridge.jpg', 2),
(17, 'olay.jpg', 16),
(20, 'ponds.jpg', 17),
(21, 'Mi.jpg', 17),
(22, 'sony.jpg', 17),
(26, '.apple-iphone-5s-16gb.jpg', 19),
(27, 'topic_iphone_5s.png', 19),
(28, 'iPhone-5s.jpeg', 19),
(29, '151_sae.jpg', 20),
(30, 'samsung-galaxy-s9.jpg', 20),
(31, 'samsung_galaxy_s8.jpeg', 20),
(32, 'Men df.jpg', 21),
(33, 'nike1.jpg', 21),
(34, 'nikee.jpg', 21),
(35, 'distressed-jeans.jpg', 22),
(36, 'jeans.jpg', 22),
(37, 'HTB1h184gU3IL1JjSZFMq6yjrFXa0.jpg', 22),
(38, '6-2-jewellery-free-png-image.png', 23),
(39, '71yPA9JDiiL._UL1500_.jpg', 23),
(40, 'G7.jpg', 23);

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `prod_id` int(30) NOT NULL,
  `cat_id` int(30) NOT NULL,
  `subcat_id` int(30) NOT NULL,
  `prod_title` varchar(60) NOT NULL,
  `prod_mrp` decimal(10,0) NOT NULL,
  `prod_sp` double NOT NULL,
  `prod_disc` int(30) NOT NULL,
  `prod_desc` varchar(200) NOT NULL,
  `prod_brand` varchar(60) NOT NULL,
  `prod_img` varchar(60) NOT NULL,
  `best_seller` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`prod_id`, `cat_id`, `subcat_id`, `prod_title`, `prod_mrp`, `prod_sp`, `prod_disc`, `prod_desc`, `prod_brand`, `prod_img`, `best_seller`) VALUES
(2, 2, 8, 'LG Double Door', '18000', 15000, 16, ' Steel, Inverter Compressor)', 'Whirlpool', 'fridge.jpg', 1),
(14, 2, 10, 'Mi4i TV', '15000', 12000, 20, 'washing', 'Onida', 'Mi.jpg', 1),
(17, 1, 5, 'DSLR Camera', '30000', 25000, 16, 'Camera', 'Nikkon', 'camera.jpg', 1),
(19, 1, 1, 'Iphone 5S', '20000', 12000, 60, 'iPhone 5s Experience the Difference.', 'Iphone', 'iPhone-5s.jpeg', 1),
(20, 1, 1, 'Samsung Galaxy S9', '55000', 20000, 45, 'Samsung Galaxy S9 and S9 plus.', 'Samsung', 'samsung_galaxy_s8.jpeg', 1),
(21, 3, 11, 'Nike Shoes', '2500', 1200, 35, 'Nike shoes', 'NIKE', 'nikee.jpg', 1),
(22, 3, 13, 'Jeans', '1500', 1200, 20, 'Jeans', 'LEVIS', 'HTB1h184gU3IL1JjSZFMq6yjrFXa0.jpg', 0),
(23, 4, 18, 'Necklace', '8000', 7000, 12, 'Best Necklace for Girls.', 'Tanishq', 'G7.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register_tbl`
--

CREATE TABLE `register_tbl` (
  `user_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `mobile` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_tbl`
--

INSERT INTO `register_tbl` (`user_id`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'Agam', '8798464625', 'agam@gmail.com', '9c85a3c7fc695d9f7d278f7d409fb09d'),
(2, 'Sanjeev', '5448979582', 'sanjeev@gmail.com', 'sanjeev'),
(4, 'Prawal', '7909091282', 'kajal@gmail.com', 'kajal'),
(5, 'Alia', '2315446545', 'alia@gmail.com', '86c8c6c90abd00c209e39736da1ec1fd'),
(6, 'Deepak', '8686565589', 'deepak@gmail.com', '498b5924adc469aa7b660f457e0fc7e5');

-- --------------------------------------------------------

--
-- Table structure for table `sd_admin_tbl`
--

CREATE TABLE `sd_admin_tbl` (
  `admin_id` int(30) NOT NULL,
  `admin_name` varchar(60) NOT NULL,
  `admin_email` varchar(60) NOT NULL,
  `admin_password` varchar(60) NOT NULL,
  `admin_lastlogin` varchar(60) NOT NULL,
  `admin_lastlogin_ip` varchar(60) NOT NULL,
  `admin_status` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sd_admin_tbl`
--

INSERT INTO `sd_admin_tbl` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_lastlogin`, `admin_lastlogin_ip`, `admin_status`) VALUES
(1, 'Sanjeev', 'sanjeev@gmail.com', 'sanjeev', '2018-04-23', '', 1),
(2, 'Agam', 'agam@gmail.com', 'agam', '2018-04-23', '', 1),
(3, 'Prawal', 'prawal@gmail.com', 'prawal', '2018-04-23', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services_tbl`
--

CREATE TABLE `services_tbl` (
  `services_id` int(30) NOT NULL,
  `services_title` varchar(60) NOT NULL,
  `services_des` varchar(200) NOT NULL,
  `services_image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_tbl`
--

INSERT INTO `services_tbl` (`services_id`, `services_title`, `services_des`, `services_image`) VALUES
(1, 'OOPs', 'Object Oriented Language', 'pics16.jpg'),
(3, 'Java script', 'Javascript is a dynamic computer programming language. It is lightweight and most commonly used as a part of web pages', 'health.jpg'),
(4, 'React Js', 'React makes it painless to create interactive UIs. Design simple views for each state in your application, and React will efficiently update and render just the right components when your data changes', 'sevans.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_tbl`
--

CREATE TABLE `shipping_tbl` (
  `shipping_id` int(30) NOT NULL,
  `ms_user_id` int(11) NOT NULL,
  `ms_name` varchar(60) NOT NULL,
  `ms_email` varchar(60) NOT NULL,
  `ms_password` varchar(60) NOT NULL,
  `ms_mobile` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `area` varchar(60) NOT NULL,
  `landmark` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_tbl`
--

INSERT INTO `shipping_tbl` (`shipping_id`, `ms_user_id`, `ms_name`, `ms_email`, `ms_password`, `ms_mobile`, `city`, `pincode`, `area`, `landmark`) VALUES
(1, 1, 'Sanjeev', 'sanjeev@gmail.com', 'sanjeev', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(2, 2, 'Prerana', 'prerana@gmail.com', 'prerana', '9875422205', 'Pune', 470028, 'Baner, Street No-12 ,Maharashra', 'Near Sadhanand Hotel'),
(3, 3, 'Shreya', 'shreya@gmail.com', 'shreya', '9875422205', 'Pune', 520018, 'Banjara Hills , Masab Tank,Telangana', 'Near Nasheeman Hotel'),
(4, 4, 'Deepak', 'deepak@gmail.com', 'deepak', '7984546405', 'pune', 480051, 'Aundh ,MH', 'Near CCD'),
(5, 5, 'Prawal', 'kajal@gmail.com', 'prawal', '789254163', 'Deoghar', 427008, 'Jharkhand', 'Near Kali-Mandhir'),
(6, 6, 'Manish', 'manish@gmail.com', '123456', '8774646468', '', 0, '', ''),
(7, 7, 'Ronaldo', 'cr7@gmail.com', '1123798', '9874521630', '', 0, '', ''),
(8, 8, 'Smriti', 'smriti@gmail.com', '4654464', '4654878502', '', 0, '', ''),
(9, 9, 'Alia', 'alia@gmail.com', '123154', '7458888412', '', 0, '', ''),
(10, 10, 'Deepika', 'deepika@gmail.com', 'deepika', '9874654401', '', 0, '', ''),
(11, 11, 'Shakshi', 'shakshi@gmail.com', 'shakshi', '9874354654', '', 0, '', ''),
(12, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(13, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(14, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(15, 2, 'Prerana', 'prerana@gmail.com', '', '9875422205', 'Pune', 470028, 'Baner, Street No-12 ,Maharashra', 'Near Sadhanand Hotel'),
(16, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(17, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(18, 5, 'Prawal', 'kajal@gmail.com', '', '789254163', 'Deoghar', 427008, 'Jharkhand', 'Near Kali-Mandhir'),
(19, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(20, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(21, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(22, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(23, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(24, 2, 'Prerana', 'prerana@gmail.com', '', '9875422205', 'Pune', 470028, 'Baner, Street No-12 ,Maharashra', 'Near Sadhanand Hotel'),
(25, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(26, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(27, 5, 'Prawal', 'kajal@gmail.com', '', '789254163', 'Deoghar', 427008, 'Jharkhand', 'Near Kali-Mandhir'),
(28, 10, 'Deepika', 'deepika@gmail.com', '', '9874654401', 'Banglore', 852170, 'GandhiNagar , KA', 'CTC MAll'),
(29, 6, 'Manish', 'manish@gmail.com', '', '8774646468', 'Delhi', 542100, 'KaroelBagh,ND', 'India Gate'),
(30, 7, 'Ronaldo', 'cr7@gmail.com', '', '9874521630', 'Spain', 987980, 'Madrid', 'Near CCD'),
(31, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(32, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(33, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(34, 2, 'Prerana', 'prerana@gmail.com', '', '9875422205', 'Pune', 470028, 'Baner, Street No-12 ,Maharashra', 'Near Sadhanand Hotel'),
(35, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(36, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(37, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(38, 5, 'Prawal', 'kajal@gmail.com', '', '789254163', 'Deoghar', 427008, 'Jharkhand', 'Near Kali-Mandhir'),
(39, 5, 'Prawal', 'kajal@gmail.com', '', '789254163', 'Deoghar', 427008, 'Jharkhand', 'Near Kali-Mandhir'),
(40, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(41, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(42, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(43, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(44, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(45, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar'),
(46, 1, 'Sanjeev', 'sanjeev@gmail.com', '', '8521811098', 'Bokaro', 827012, 'Sector-12 A,Qr.no-1163,JH', 'Near Big Bazaar');

-- --------------------------------------------------------

--
-- Table structure for table `slider_tbl`
--

CREATE TABLE `slider_tbl` (
  `slider_id` int(30) NOT NULL,
  `slider_title` varchar(200) NOT NULL,
  `slider_desc` varchar(200) NOT NULL,
  `slider_link` varchar(100) NOT NULL,
  `slider_image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_tbl`
--

INSERT INTO `slider_tbl` (`slider_id`, `slider_title`, `slider_desc`, `slider_link`, `slider_image`) VALUES
(2, 'xyz', 'dhfkjdshkfjfdfd', '0wdfndnfds', 'pics15.jpg'),
(4, '', '0', '0', 'health.jpg'),
(5, '', '0', '0', '78224.jpg'),
(14, '', '0', '0', 'sevans.jpg'),
(15, '', '0', '0', 'zoom.jpg'),
(16, '', '0', '0', 'ferrari_488.jpg'),
(17, 'sdsds', '0dsdsds', '0dsdsds', 'lamborghini_ankonian_concept_car-wallpaper-1920x1080.jpg'),
(18, 'dsds', '0fdfdfdf', '0rerere', 'Golden Gate - California (4).jpg'),
(19, 'dfndkjfn', '0nfndjfnd', '0nfkjdnfkj', 'ferrari_488.jpg'),
(20, 'Iphone x', 'Release date on 2018-05-15 .Pre-order starts from tomorrow .', 'www.apple.com', 'Apple-iPhone-X.jpg'),
(21, 'Samsung S8', 'Pre-order starts from 12th May 2018.', 'www.samsung.com', 'samsung_galaxy_s8.jpeg'),
(25, 'Nokia 8 Sirocco ', 'Nokia 8 Sirocco ', 'https://gadgets.ndtv.com/nokia-8-sirocco-4632', 'Nokia8.jpeg'),
(26, 'Google Pixel 2', 'Google Pixel 2 Android ', 'https://www.gsmarena.com/google_pixel_2-8733.php', 'google-pixel.jpg'),
(27, 'Iphone 8+', 'Iphone 8 launched on maret', 'www.apple.com', 'Apple-iPhone-X.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subcat_tbl`
--

CREATE TABLE `subcat_tbl` (
  `subcat_id` int(30) NOT NULL,
  `subcat_name` varchar(60) NOT NULL,
  `subcat_img` varchar(60) NOT NULL,
  `subcat_prio` int(30) NOT NULL,
  `subcat_status` int(30) NOT NULL,
  `cat_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat_tbl`
--

INSERT INTO `subcat_tbl` (`subcat_id`, `subcat_name`, `subcat_img`, `subcat_prio`, `subcat_status`, `cat_id`) VALUES
(1, 'Mobile', '', 0, 1, 1),
(3, 'Laptop', '', 0, 1, 1),
(4, 'Televisions', '', 0, 1, 1),
(5, 'Camers', '', 0, 1, 1),
(6, 'Tablet', '', 0, 1, 1),
(7, 'Smart Ultra & HdTv', '', 0, 1, 2),
(8, 'Refrigerators', '', 0, 1, 2),
(9, 'Washing Machine', '', 0, 1, 2),
(10, 'Kitchen Appliances', '', 0, 1, 2),
(11, 'Footwears', '', 0, 1, 3),
(12, 'Top Wears', '', 0, 1, 3),
(13, 'Jeans', '', 0, 1, 3),
(14, 'Watches', 'rolex.jpg', 13, 1, 3),
(15, 'Men\'s Grooming', 'himmen.jpg', 12, 1, 3),
(16, 'Top Wears', 'Men.jpg', 11, 1, 4),
(17, 'Jeans', 'womenjeans.jpg', 9, 1, 4),
(18, 'Jewellery', 'jewellery.jpg', 10, 1, 4),
(19, 'Baby Cares', 'babycare.jpg', 8, 1, 5),
(20, 'Baby Clothings', 'babyclothing.jpg', 5, 1, 5),
(21, 'Furnitures', 'furniture.jpg', 7, 1, 6),
(22, 'Lightings', 'lights.jpg', 4, 1, 6),
(23, 'Health Drinks', 'healthdrinks.png', 3, 1, 7),
(24, 'Exercise & Fitness', 'exercise.jpg', 2, 1, 7),
(25, 'Cricket', 'cricket.jpg', 1, 1, 7),
(26, 'Slippers', 'slipper.jpg', 16, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Samsung J2 Pro', '1.jpg', 100.00),
(2, 'HP Notebook', '2.jpg', 299.00),
(3, 'Panasonic T44 Lite', '3.jpg', 125.00),
(4, 'Skybag', '5.jpg', 25.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category_tbl`
--
ALTER TABLE `category_tbl`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `country_tbl`
--
ALTER TABLE `country_tbl`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `ms_prod_tbl`
--
ALTER TABLE `ms_prod_tbl`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `ms_users_tbl`
--
ALTER TABLE `ms_users_tbl`
  ADD PRIMARY KEY (`ms_user_id`);

--
-- Indexes for table `orders_tbl`
--
ALTER TABLE `orders_tbl`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment_history_tbl`
--
ALTER TABLE `payment_history_tbl`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `product_img_tbl`
--
ALTER TABLE `product_img_tbl`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `register_tbl`
--
ALTER TABLE `register_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `sd_admin_tbl`
--
ALTER TABLE `sd_admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `services_tbl`
--
ALTER TABLE `services_tbl`
  ADD PRIMARY KEY (`services_id`);

--
-- Indexes for table `shipping_tbl`
--
ALTER TABLE `shipping_tbl`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `slider_tbl`
--
ALTER TABLE `slider_tbl`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `subcat_tbl`
--
ALTER TABLE `subcat_tbl`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  MODIFY `cart_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category_tbl`
--
ALTER TABLE `category_tbl`
  MODIFY `cat_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `country_tbl`
--
ALTER TABLE `country_tbl`
  MODIFY `country_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ms_prod_tbl`
--
ALTER TABLE `ms_prod_tbl`
  MODIFY `prod_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ms_users_tbl`
--
ALTER TABLE `ms_users_tbl`
  MODIFY `ms_user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders_tbl`
--
ALTER TABLE `orders_tbl`
  MODIFY `order_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `payment_history_tbl`
--
ALTER TABLE `payment_history_tbl`
  MODIFY `pay_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_img_tbl`
--
ALTER TABLE `product_img_tbl`
  MODIFY `img_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `prod_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `register_tbl`
--
ALTER TABLE `register_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sd_admin_tbl`
--
ALTER TABLE `sd_admin_tbl`
  MODIFY `admin_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services_tbl`
--
ALTER TABLE `services_tbl`
  MODIFY `services_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shipping_tbl`
--
ALTER TABLE `shipping_tbl`
  MODIFY `shipping_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `slider_tbl`
--
ALTER TABLE `slider_tbl`
  MODIFY `slider_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `subcat_tbl`
--
ALTER TABLE `subcat_tbl`
  MODIFY `subcat_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
