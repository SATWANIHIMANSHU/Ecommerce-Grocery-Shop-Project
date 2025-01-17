-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2025 at 08:04 AM
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
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Admin_Name` varchar(100) NOT NULL,
  `Admin_Password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_Name`, `Admin_Password`) VALUES
('Himanshu', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_id`, `Name`) VALUES
(1, 'Kitchen'),
(2, 'Household'),
(3, 'Snack & Beverages'),
(4, 'Personal Care'),
(5, 'Gift Hampers'),
(6, 'Baby Care'),
(7, 'Soft Drinks & Juices'),
(8, 'Bread & Bakery'),
(9, 'Fruits & Vegetables'),
(10, 'Sweet');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `subject`, `email`, `message`, `submitted_at`) VALUES
(1, 'Himanshu', 'order status', 'satwanihimanshu35@gmail.com', 'Please give the order status of orderid 18', '2024-10-15 07:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `customer_feedback`
--

CREATE TABLE `customer_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` text NOT NULL,
  `rating` enum('1','2','3','4','5') NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `customer_feedback`
--

INSERT INTO `customer_feedback` (`id`, `name`, `email`, `feedback`, `rating`, `submitted_at`) VALUES
(2, 'Haresh', 'Haresh@gmail.com', 'Very Good quality and reasonable rates of products', '1', '2024-10-06 06:53:20'),
(3, 'Taher', 'taher@gmail.com', 'very good website', '1', '2024-10-07 04:07:07'),
(4, 'abc', 'abc@gmail.com', 'where is my report', '4', '2024-10-08 04:19:22'),
(5, 'Taher', 'taher@gmail.com', 'WEWEQEQ', '2', '2024-10-08 18:23:21'),
(6, 'Jiten', 'Haresh@gmail.com', 'aqkjiuxxu', '2', '2024-10-09 04:34:55'),
(7, 'Jignesh', 'admin@gmail.com', 'very good', '4', '2024-10-09 18:46:43'),
(8, 'Kuldeep', 'abc@gmail.com', 'aasxsx', '2', '2024-10-09 18:53:03'),
(9, 'Jayesh', 'BHOJANIR13@GMAIL.COM', 'Very good products ', '1', '2024-10-13 08:37:28'),
(10, 'Lavkush Sharma', 'admin@gmail.com', 'Very good Service', '1', '2024-10-14 18:30:47'),
(11, 'Haresh', 'Haresh@gmail.com', 'Very Best Products', '2', '2024-10-14 19:25:30'),
(12, 'Virat Kohli', 'Haresh@gmail.com', 'VERY GOOD', '1', '2025-01-14 19:02:18'),
(13, 'Virat Kohli', 'Haresh@gmail.com', 'VERY GOOD', '1', '2025-01-14 19:05:28'),
(14, 'Virat Kohli', 'Haresh@gmail.com', 'VERY GOOD', '1', '2025-01-14 19:10:13'),
(15, 'Virat Kohli', 'Haresh@gmail.com', 'VERY GOOD', '1', '2025-01-14 19:10:30');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_id` int(100) NOT NULL,
  `Full_Name` text NOT NULL,
  `Phone_No` bigint(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `invoice_number` varchar(20) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL,
  `Total_Amount` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_id`, `Full_Name`, `Phone_No`, `Email`, `Address`, `invoice_number`, `date`, `user_id`, `Total_Amount`) VALUES
(6, 'Devang', 8190678623, 'admin@gmail.com', 'adsadadsaxzx', 'INV2024100206', '2024-10-10 00:32:29', NULL, 0),
(7, 'Chirag', 7807658765, 'Chiragsatwani49@gmail.com', 'Julelal society,rajpur,sidhpur', 'INV2024100207', '2024-10-10 00:32:29', NULL, 0),
(8, 'Haresh Tanwani', 8791197843, 'Haresh@gmail.com', 'B5,Vatsalya flats,near mahuda road,ahemdabad,gujarat', 'INV2024100308', '2024-10-10 00:32:29', NULL, 0),
(9, 'Taher Madersawala', 9898984545, 'taher@gmail.com', 'Dhinoj', 'INV2024100309', '2024-10-10 00:32:29', NULL, 0),
(10, 'nitusha Soni', 915678383921, 'abc@gmail.com', 'skhdfdsgmfhj', 'INV2024100410', '2024-10-10 00:32:29', NULL, 0),
(11, 'Jignesh', 987899876, 'abc@gmail.com', 'ytytuvhj', 'INV2024100511', '2024-10-10 00:32:29', NULL, 0),
(12, 'himanshu sATWANI', 9878679699, 'admin@gmail.com', 'SDACZXCXDSFDCXC', 'INV2024100612', '2024-10-10 00:32:29', NULL, 0),
(13, 'Pratik', 8791197843, 'himanshusatwani49@gmail.com', 'yihabukjaz', 'INV2024100713', '2024-10-10 00:32:29', NULL, 0),
(14, 'Haresh Tanwani', 8791197843, 'Haresh@gmail.com', '5/Madhubvan Society near highway road,kadi', 'INV2024100814', '2024-10-10 00:32:29', NULL, 0),
(15, 'Devang', 7807658765, 'abc@gmail.com', '5/anand bunglows,near rajpur,sidhpur', 'INV2024100915', '2024-10-10 00:32:29', NULL, 0),
(16, 'Jayesh Satwani', 7807658765, 'BHOJANIR13@GMAIL.COM', 'Laxmi Bhavan,Julelal Society,rajpur,sidhpur', 'INV2024101316', '2024-10-13 14:06:54', 18, 0),
(17, 'Lavkush Sharma', 8791197843, 'admin@gmail.com', 'Raj petrolpump,Mehsana, Gujarat ,India', 'INV2024101417', '2024-10-15 00:00:19', 18, 0),
(18, 'Haresh Tanwani', 987867888, 'Haresh@gmail.com', 'B5,Anand Bunglows,near rajpur,sidhpur,gujarat,india', 'INV2024101418', '2024-10-15 00:54:44', 18, 0),
(19, 'Satwani Lavkush', 7896567321, 'lavkush@gmail.com', '5/anand bunglows near rajpur sidhpur', 'INV2024110919', '2024-11-09 19:19:11', 18, 0),
(20, 'Ritika Sejvani', 9898978787, 'ritika@gmail.com', '67/Julelal society,near jawarnagar,nadiad', 'INV2024110920', '2024-11-09 19:38:01', 18, 0),
(21, 'Lalwani Hitesh', 9876123564, 'lalwani@gmail.com', 'D7/Victoria Heights,kalupur,ahemdabad', 'INV2024110921', '2024-11-09 20:04:50', 18, 669),
(22, 'jayu lalwani', 987899876, 'satwani987@gmail.com', '76/Victor Bunglows,near,rajpur sidhpur', 'INV2024111322', '2024-11-13 18:56:19', 18, 149),
(23, 'Malhar Thakar', 8190678623, 'malhar6565@gmail.com', '56/Sun Plaza,near sg highway,naroda,ahemdabad', 'INV2024111323', '2024-11-13 19:43:34', 22, 320),
(24, 'Haresh Tanwani', 9878679699, 'abc@gmail.com', 'bff vdjfbervaba', 'INV2024111424', '2024-11-14 12:35:47', 23, 200),
(25, 'Haresh Tanwani', 987899876, 'Haresh@gmail.com', 'dscdvvdsvdvf', 'INV2024111425', '2024-11-14 12:46:11', 23, 720),
(26, 'Haresh Tanwani', 8780865332, 'satwanihimanshu35@gmail.com', '67/Madhuvan society,kadi,kalol,gujarat', 'INV2024111426', '2024-11-14 13:37:05', 23, 690),
(27, 'Virat Kohli', 987867888, 'vk263@gmail.com', '56/patel state,near movie hub,sidhpur', 'INV2024111727', '2024-11-17 12:14:56', 24, 1316),
(28, 'Virat Kohli', 8190678623, 'Haresh@gmail.com', '78/Naman Enclave, near sg road, kalupur,ahemdabad', 'INV2024111828', '2024-11-18 19:45:07', 24, 1523),
(29, 'Haresh Tanwani', 7807658765, 'Haresh@gmail.com', '5/Juleleal society, near rajpur, sidhpur', 'INV2024111929', '2024-11-19 12:13:35', 24, 742),
(30, 'Virat Kholi', 8791197899, 'vk263@gmail.com', '75/patelnagar,near sg highway,krishnanagar,unjha', 'INV2024120530', '2024-12-05 19:42:55', 24, 2349),
(31, 'Hardik', 8989898977, 'satyani3347@gmail.com', 'asqsqwssxs', 'INV2024121931', '2024-12-19 19:48:12', 25, 200),
(32, 'Hardik', 8989898977, 'satyani3347@gmail.com', 'asqsqwssxs', 'INV2024121932', '2024-12-19 19:48:37', 25, 0),
(33, 'Haresh Tanwani', 8190678623, 'Haresh@gmail.com', 'sxccsdcxdsaDAASX', 'INV2025011433', '2025-01-15 00:28:47', 24, 869);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `order_amount` decimal(10,2) NOT NULL,
  `reference_id` varchar(255) NOT NULL,
  `transaction_status` varchar(50) DEFAULT NULL,
  `payment_mode` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `transaction_time` datetime DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `order_id`, `order_amount`, `reference_id`, `transaction_status`, `payment_mode`, `message`, `transaction_time`, `signature`, `created_at`) VALUES
(1, 'Order_26', 690.00, '5114915001713', 'SUCCESS', 'UPI', 'Simulated response message', '2024-11-14 13:36:22', '89CQY1Zw4cUHwKhYVwhuDFQGNI0pChJ7aFbzpxG+myM=', '2024-11-14 08:08:43'),
(2, 'Order_27', 1316.00, '5114915031182', 'SUCCESS', 'UPI', '', '2024-11-17 12:14:42', 'UdRjl7xRhWOuxH5iOAOQcyebSe/FNKu7lLxsiujT80U=', '2024-11-17 06:46:28'),
(3, 'Order_28', 1523.00, '5114915042645', 'SUCCESS', 'DEBIT_CARD', '', '2024-11-18 19:44:53', 'y3N2i8yaAcvxsH7oEAas0HBbWeRZCUcKz4mFQjYi6xM=', '2024-11-18 14:16:15'),
(4, 'Order_29', 742.00, '5114915048201', 'SUCCESS', 'DEBIT_CARD', '', '2024-11-19 12:13:03', 'fXo5UQQNsJJxwKhxcnloayevPA5UooX5ald9dOvIgx4=', '2024-11-19 06:44:15'),
(7, 'Order_30', 2349.00, '5114915229887', 'SUCCESS', 'NET_BANKING', '', '2024-12-05 19:42:24', '7EbOAr3eIw7gDlHHX1qEaSZTVs1qT/ZLnBSO6p1VNmI=', '2024-12-05 14:13:45'),
(8, 'Order_33', 869.00, '5114915730372', 'SUCCESS', 'DEBIT_CARD', 'Simulated response message', '2025-01-15 00:27:51', 'KGLiVgbNrFzuB8ooho4wZsaUM7Pm4zaETPSY0gmdFok=', '2025-01-14 18:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `created_at`) VALUES
(1, 'oil 5lit', 300.00, NULL, '2024-10-01 17:50:11'),
(2, 'oil 5lit', 300.00, NULL, '2024-10-01 17:50:46'),
(3, 'oil 5lit', 300.00, NULL, '2024-10-01 17:52:57'),
(4, 'oil 5lit', 300.00, NULL, '2024-10-01 17:53:27'),
(5, 'oil 5lit', 300.00, NULL, '2024-10-01 17:53:42'),
(6, 'oil 5lit', 300.00, NULL, '2024-10-01 17:55:50'),
(7, 'oil 5lit', 300.00, NULL, '2024-10-01 17:56:24'),
(8, 'Ghee 5lit', 2234.00, NULL, '2024-10-01 17:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `products_main`
--

CREATE TABLE `products_main` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `old_price` decimal(10,2) DEFAULT NULL,
  `is_new` tinyint(1) DEFAULT 0,
  `page` varchar(255) NOT NULL,
  `sub_page` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `products_main`
--

INSERT INTO `products_main` (`id`, `name`, `image`, `price`, `old_price`, `is_new`, `page`, `sub_page`) VALUES
(45, 'Almonds, 100g', 'uploads/m1.jpg', 149.00, 259.00, 0, 'home', ''),
(46, 'Cashew Nuts, 100g', 'uploads/m2.jpg', 200.00, 420.00, 0, 'home', ''),
(47, 'Pista.., 250g', 'uploads/m3.jpg', 520.00, 760.00, 0, 'home', ''),
(48, 'Freedom Oil, 1L', 'uploads/mk4.jpg', 78.00, 110.00, 0, 'home', ''),
(49, 'Saffola Gold, 1L', 'uploads/mk5.jpg', 130.00, 150.00, 0, 'home', ''),
(50, 'Fortune Oil, 5L', 'uploads/mk6.jpg', 400.00, 550.00, 0, 'home', ''),
(51, 'Yippee Noodles, 65g', 'uploads/mk7.jpg', 15.00, 25.00, 0, 'home', ''),
(52, 'Wheat Pasta, 500g', 'uploads/mk8.jpg', 100.00, 120.00, 0, 'home', ''),
(53, 'Chinese Noodles, 68g', 'uploads/mk9.jpg', 17.00, 29.00, 0, 'home', ''),
(54, 'Zeeba Basmati Rice', 'uploads/k1.jpg', 950.00, 1090.00, 1, 'kitchen', ''),
(55, 'Maiyas Gulab Jamun', 'uploads/k2.jpg', 120.00, 200.00, 0, 'kitchen', ''),
(56, 'Lipton Green Tea', 'uploads/k3.jpg', 384.00, 430.00, 0, 'kitchen', ''),
(57, 'Organicana Red Chilli', 'uploads/k4.jpg', 70.00, 90.00, 0, 'kitchen', ''),
(58, 'MTR Black Pepper', 'uploads/k5.jpg', 67.00, 99.00, 0, 'kitchen', ''),
(59, 'Chataka - Elaichi', 'uploads/k6.jpg', 299.00, 359.00, 0, 'kitchen', ''),
(60, 'Narulag, Less Sugar', 'uploads/k7.jpg', 220.00, 250.00, 0, 'kitchen', ''),
(61, 'Kellogg\'s Chocos Fills', 'uploads/k8.jpg', 175.00, 229.00, 0, 'kitchen', ''),
(62, 'Amul Butter', 'uploads/k9.jpg', 134.00, 159.00, 0, 'kitchen', ''),
(63, 'Snickers Chocolates', 'uploads/k10.jpg', 140.00, 160.00, 0, 'kitchen', ''),
(64, 'Kissan Friut Jam', 'uploads/k11.jpg', 123.00, 150.00, 0, 'kitchen', ''),
(65, 'MTR Vegetable Pickle', 'uploads/k12.jpg', 104.00, 120.00, 0, 'kitchen', ''),
(66, 'Vim Dishwash Gel', 'uploads/a1.jpg', 99.00, 120.00, 0, 'household', ''),
(67, 'Harpic Cleaner', 'uploads/a2.jpg', 134.00, 150.00, 0, 'household', ''),
(68, 'Comfort After Wash', 'uploads/a3.jpg', 306.00, 450.00, 0, 'household', ''),
(69, 'Odonil Blocks (3+1)', 'uploads/a4.jpg', 141.00, 199.00, 0, 'household', ''),
(70, 'SurfExcel Detergent', 'uploads/a5.jpg', 337.00, 380.00, 0, 'household', ''),
(71, 'Sunsilk Shampoo', 'uploads/a6.jpg', 294.00, 325.00, 0, 'household', ''),
(72, 'Gala Leader Floor Mop', 'uploads/a8.jpg', 149.00, 180.00, 0, 'household', ''),
(73, 'Spotzero Spin Mop', 'uploads/a7.jpg', 888.00, 999.00, 0, 'household', ''),
(74, 'Spotzero Zero Dust', 'uploads/a9.jpg', 100.00, 139.00, 0, 'household', ''),
(75, 'All Out Liquid', 'uploads/a10.jpg', 89.00, 120.00, 0, 'household', ''),
(76, 'Wall Hanging', 'uploads/a11.jpg', 349.00, 400.00, 0, 'household', ''),
(77, 'Colin Regular Refill', 'uploads/a12.jpg', 155.00, 180.00, 0, 'household', '');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `message`, `created_at`) VALUES
(1, 'hihckasxnasxs', '2025-01-15 13:58:42'),
(2, 'iducbsdcnsccniuwecbewc', '2025-01-15 14:05:31');

-- --------------------------------------------------------

--
-- Table structure for table `smartbazar`
--

CREATE TABLE `smartbazar` (
  `Sr.no` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(260) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `smartbazar`
--

INSERT INTO `smartbazar` (`Sr.no`, `name`, `email`, `password`, `date`, `city`, `state`) VALUES
(1, 'pratik', 'pratik@gmail.com', '', '2024-08-17 19:04:07', '', ''),
(4, 'himanshu', 'satwani67@gmail.com', '23456', '2024-08-17 19:14:38', '', ''),
(5, 'hitesh', 'hitesh@gmail.com', '0987', '2024-08-17 19:15:12', '', ''),
(8, 'jayesh', 'jayesh@gmail.com', '12345', '2024-08-17 19:28:38', '', ''),
(9, 'Jiten', 'jiten@gmail.com', '1234', '2024-08-18 10:42:16', '', ''),
(10, 'jatin', 'jatin33@gmail.com', '989898', '2024-08-19 11:04:00', '', ''),
(11, 'Vishal', 'vishal@gmail.com', '$2y$10$B3/wq0FuOv07jYz7KacDou7beX48HxqRU61zfqZ6eQ9ELW3SQvHGC', '2024-08-19 11:07:42', '', ''),
(12, 'Sahil', 'sahil333@gmail.com', '$2y$10$S/faks3/5SbOoLnQaeDb5eBy7se/gMWfAti0paT4l2L6tBtuSjZ92', '2024-08-19 12:44:45', '', ''),
(14, 'Taher', 'Taher@gmail.com', '$2y$10$pTTcL8cWacp73XqiZJ8E8.68YtBMZr2NfUOKckxq6vH7IjXOlbcJi', '2024-08-21 11:26:01', '', ''),
(15, 'Kuldeep', 'kuldeep@gmail.com', '$2y$10$hymEN3HjxakKzKvfOu67XOCIt52Xr3vXIsOL4LuHtPV8EcvAcl1bu', '2024-10-04 10:47:33', '', ''),
(16, 'Mohan', 'mohan@gmail.com', '$2y$10$7iqlen0RnGH6NnyUSlU5v.zyYrQ0Hu6Aozow9Cj89rRcoTfr6Ex/a', '2024-10-04 13:06:41', '', ''),
(17, 'Haresh', 'Haresh@gmail.com', '$2y$10$TjCf71tQ574QLTrBa9mjKOzg9XfK9vLpjM4ZnjQ1T2obGQcXsHUXC', '2024-10-06 12:19:34', '', ''),
(18, 'Lavkush', 'lavkush@gmail.com', '$2y$10$YzXHZjrTIdvPK7s.3F1GFuV2xxyrFzZbMBanoYCLR6FD9C3nydpqS', '2024-10-07 09:28:05', '', ''),
(19, 'Himanshu Satwani', 'satwani7878@gmail.com', '$2y$10$9Bq9EDj6/gdVb/491pyDaOQ39eMctYjSV5FDJOD.tp82BUuPfzHki', '2024-10-08 09:25:04', '', ''),
(20, 'abc', 'abc@gmail.com', '$2y$10$6T4t9ELXg4bKJUiRjzYh2eQsGF6yyoZV0cnDJb/idPHymGQofomme', '2024-10-08 09:46:33', '', ''),
(21, 'Jignesh', 'jignesh@gmail.com', '$2y$10$bL5h5R4p1lLCSfACqk0XoOgKu717YeDqlkF6SD4XTfxi.EyRQH0CC', '2024-10-08 10:29:00', '', ''),
(22, 'Malhar Thakar', 'satwanihimanshu35@gmail.com', '$2y$10$KVTx5AmPxnB8uB9AlKISR.p5jqzbd6ysJMqx8JlLY7Xc2zGNoVKu6', '2024-11-13 19:42:07', '', ''),
(23, 'sudhanshu', 'admin@gmail.com', '$2y$10$lkdbZqj99I8Yh0UslZgpfe7JofNpMkQckaKlD4HzyeHuYerjUwnFC', '2024-11-14 12:35:01', '', ''),
(24, 'Virat Kohli', 'vk263@gmail.com', '$2y$10$CYpAdxjz4MVwj7b2CKd7CeWZiysQGb4Pdvj8uJv3qBdNiHS4qCAiG', '2024-11-17 12:13:30', '', ''),
(25, 'Hardik', 'hk@gmail.com', '$2y$10$wpaikn7EmmECP6./MaPReuxAN0XNwhn7UiKCV/kZ7PaFlSeMQylNC', '2024-12-19 19:47:16', '', ''),
(26, 'Akaay Kholi', 'akay@gmail.com', '$2y$10$c4wx9a82xl/zpzFZFPUvCez7/OQMFq.MqiSS489RLC6k/sNKHC6Yy', '2025-01-15 00:42:51', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_id` int(100) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES
(0, 'Almonds, 100g', 149, 1),
(0, 'Cashew Nuts, 100g', 200, 1),
(0, 'Saffola Gold, 1L', 130, 1),
(0, 'Harpic Cleaner', 134, 1),
(0, 'Spotzero Zero Dust', 139, 1),
(3, 'Almonds, 100g', 149, 1),
(3, 'Cashew Nuts, 100g', 200, 1),
(6, 'Saffola Gold, 1L', 130, 1),
(6, 'Pista..., 250g', 520, 1),
(7, 'Madhur Pure Sugar, 1kg', 69, 2),
(8, 'Almonds, 100g', 149, 1),
(8, 'Harpic Cleaner', 134, 2),
(8, 'Sunsilk Shampoo', 294, 3),
(9, 'Almonds, 100g', 149, 1),
(9, 'Cashew Nuts, 100g', 200, 2),
(10, 'Sunsilk Shampoo', 294, 1),
(11, 'Almonds, 100g', 149, 2),
(11, 'Pista..., 250g', 520, 1),
(12, 'Cashew Nuts, 100g', 200, 1),
(12, 'Pista..., 250g', 520, 1),
(13, 'Cashew Nuts, 100g', 200, 1),
(13, 'Pista..., 250g', 520, 2),
(14, 'Almonds, 100g', 121, 2),
(14, 'Indulekha', 332, 2),
(15, 'Harpic Cleaner', 134, 1),
(15, 'Comfort After Wash', 306, 1),
(15, 'Sunsilk Shampoo', 294, 1),
(16, 'Vim Dishwash Gel', 99, 1),
(16, 'Sunsilk Shampoo', 294, 1),
(16, 'Spotzero Zero Dust', 139, 1),
(17, 'Cashew Nuts, 100g', 200, 1),
(17, 'Chinese Noodles, 68g', 11, 1),
(17, 'Almonds, 100g', 121, 1),
(17, 'Madhur Pure Sugar, 1kg', 69, 1),
(18, 'Sunsilk Shampoo', 294, 1),
(18, 'All Out 480 Hours', 89, 1),
(18, 'MTR Black Pepper', 85, 1),
(18, 'Amul\'s India', 134, 1),
(19, 'Almonds, 100g', 149, 1),
(19, 'Chinese Noodles, 68g', 11, 1),
(20, 'Sunsilk Shampoo', 294, 1),
(20, 'Comfort After Wash', 306, 1),
(20, 'SurfExcel', 200, 1),
(21, 'Almonds, 100g', 149, 1),
(21, 'Pista..., 250g', 520, 1),
(22, 'Almonds, 100g', 149, 1),
(23, 'Saffola Gold, 1L', 130, 1),
(23, 'Almonds, 100g', 121, 1),
(23, 'Madhur Pure Sugar, 1kg', 69, 1),
(24, 'Cashew Nuts, 100g', 200, 1),
(25, 'Cashew Nuts, 100g', 200, 1),
(25, 'Pista..., 250g', 520, 1),
(26, 'Almonds, 100g', 149, 1),
(26, 'Wheat Pasta, 500g', 98, 1),
(26, 'Sunsilk Shampoo', 294, 1),
(26, 'Gala Leader Floor Mop', 149, 1),
(27, 'Harpic Cleaner', 134, 1),
(27, 'Sunsilk Shampoo', 294, 1),
(27, 'Spotzero Spin Mop', 888, 1),
(28, 'Cashew Nuts, 100g', 200, 1),
(28, 'Sunsilk Shampoo', 294, 1),
(28, 'Odonil Blocks (3+1)', 141, 1),
(28, 'Spotzero Spin Mop', 888, 1),
(29, 'Pista..., 250g', 520, 1),
(29, 'Maiyas Gulab Jamun', 137, 1),
(29, 'MTR Black Pepper', 85, 1),
(30, 'Zeeba Premium Basmati Rice - 5 KG', 950, 2),
(30, 'Maiyas Gulab Jamun', 137, 2),
(30, 'Kellogg\'s Chocos Fills', 175, 1),
(31, 'Cashew Nuts, 100g', 200, 1),
(33, 'Almonds, 100g', 149, 1),
(33, 'Pista.., 250g', 520, 1),
(33, 'Cashew Nuts, 100g', 200, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_id`),
  ADD UNIQUE KEY `invoice_number` (`invoice_number`),
  ADD KEY `fk_user` (`user_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_main`
--
ALTER TABLE `products_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smartbazar`
--
ALTER TABLE `smartbazar`
  ADD PRIMARY KEY (`Sr.no`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products_main`
--
ALTER TABLE `products_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `smartbazar`
--
ALTER TABLE `smartbazar`
  MODIFY `Sr.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `smartbazar` (`Sr.no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
