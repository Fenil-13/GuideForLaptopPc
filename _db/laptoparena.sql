-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 06:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptoparena`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories_category`
--

CREATE TABLE `accessories_category` (
  `Category_No` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `Accessories_category` text NOT NULL,
  `trending_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accessories_category`
--

INSERT INTO `accessories_category` (`Category_No`, `product_id`, `Accessories_category`, `trending_status`) VALUES
(6, 97, 'Gaming Accessories', 'true'),
(7, 98, 'Gaming Accessories', 'false'),
(8, 99, 'Gaming Accessories', 'true'),
(9, 100, 'Gaming Accessories', 'true'),
(10, 109, 'Laptop Accessories', 'false'),
(11, 110, 'Laptop Accessories', 'true'),
(12, 99, 'Laptop Accessories', 'true'),
(13, 100, 'Laptop Accessories', 'false'),
(14, 107, 'General Desk Accessories', 'true'),
(15, 105, 'General Desk Accessories', 'true'),
(16, 106, 'General Desk Accessories', 'true'),
(17, 108, 'General Desk Accessories', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `custome_pc`
--

CREATE TABLE `custome_pc` (
  `custome_no` int(11) NOT NULL,
  `custome_cat` text NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `custome_pc`
--

INSERT INTO `custome_pc` (`custome_no`, `custome_cat`, `product_id`) VALUES
(1, 'PROCESSOR', 11),
(2, 'PROCESSOR', 12),
(3, 'PROCESSOR', 13),
(4, 'PROCESSOR', 14),
(5, 'MOTHERBOARD', 15),
(6, 'MOTHERBOARD', 16),
(7, 'MOTHERBOARD', 17),
(8, 'MOTHERBOARD', 18),
(9, 'RAM', 19),
(10, 'RAM', 20),
(11, 'RAM', 21),
(12, 'RAM', 22),
(13, 'STORAGE', 23),
(14, 'STORAGE', 24),
(15, 'STORAGE', 25),
(16, 'STORAGE', 26),
(17, 'CABINET', 27),
(18, 'CABINET', 28),
(19, 'CABINET', 29),
(20, 'CABINET', 30),
(21, 'COOLER', 31),
(22, 'COOLER', 32),
(23, 'COOLER', 33),
(24, 'COOLER', 34),
(25, 'GRAPHICS', 35),
(26, 'GRAPHICS', 36),
(27, 'GRAPHICS', 37),
(28, 'GRAPHICS', 38);

-- --------------------------------------------------------

--
-- Table structure for table `deal_of_day`
--

CREATE TABLE `deal_of_day` (
  `deal_no` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `slider_show` text NOT NULL,
  `Img_Link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deal_of_day`
--

INSERT INTO `deal_of_day` (`deal_no`, `product_id`, `slider_show`, `Img_Link`) VALUES
(2, 80, 'false', ''),
(3, 81, 'true', '1.png'),
(4, 82, 'true', '2.jpg'),
(5, 83, 'true', '3.png'),
(6, 84, 'true', '4.jpg'),
(7, 85, 'true', '5.jpg'),
(8, 86, 'true', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `desktop_category`
--

CREATE TABLE `desktop_category` (
  `Desktop_No` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `Desktop_category` text NOT NULL,
  `trending_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `desktop_category`
--

INSERT INTO `desktop_category` (`Desktop_No`, `product_id`, `Desktop_category`, `trending_status`) VALUES
(2, 93, 'Gaming Desktop', 'true'),
(3, 94, 'Gaming Desktop', 'true'),
(4, 95, 'Gaming Desktop', 'true'),
(5, 96, 'Gaming Desktop', 'true'),
(6, 101, 'Student Desktop', 'true'),
(7, 102, 'Student Desktop', 'true'),
(8, 103, 'Student Desktop', 'true'),
(9, 104, 'Student Desktop', 'true'),
(10, 101, 'Professional Desktop', 'true'),
(11, 102, 'Professional Desktop', 'true'),
(12, 103, 'Professional Desktop', 'true'),
(13, 104, 'Professional Desktop', 'true'),
(14, 105, 'Workstation Desktop', 'true'),
(15, 106, 'Workstation Desktop', 'true'),
(16, 107, 'Workstation Desktop', 'true'),
(17, 108, 'Workstation Desktop', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `gaming_category`
--

CREATE TABLE `gaming_category` (
  `Gaming_No` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `Gaming_category` text NOT NULL,
  `trending_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gaming_category`
--

INSERT INTO `gaming_category` (`Gaming_No`, `product_id`, `Gaming_category`, `trending_status`) VALUES
(1, 7, 'Gaming Laptop', 'false'),
(2, 8, 'Gaming Desktop', 'false'),
(3, 9, 'Gaming Accessories', 'false'),
(4, 15, 'Gaming Desktop', 'false'),
(5, 83, 'Gaming Laptop', 'true'),
(6, 90, 'Gaming Laptop', 'true'),
(7, 91, 'Gaming Laptop', 'true'),
(8, 92, 'Gaming Laptop', 'true'),
(9, 93, 'Gaming Desktop', 'true'),
(10, 94, 'Gaming Desktop', 'true'),
(11, 95, 'Gaming Desktop', 'true'),
(12, 96, 'Gaming Desktop', 'true'),
(13, 97, 'Gaming Accessories', 'true'),
(14, 98, 'Gaming Accessories', 'true'),
(15, 99, 'Gaming Accessories', 'false'),
(16, 100, 'Gaming Accessories', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `laptop_category`
--

CREATE TABLE `laptop_category` (
  `Laptop_No` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `Laptop_category` text NOT NULL,
  `trending_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `laptop_category`
--

INSERT INTO `laptop_category` (`Laptop_No`, `product_id`, `Laptop_category`, `trending_status`) VALUES
(17, 79, 'Lenovo Laptop', 'true'),
(18, 80, 'Dell Laptop', 'false'),
(19, 81, 'Dell Laptop', 'false'),
(20, 82, 'Dell Laptop', 'false'),
(21, 83, 'Dell Laptop', 'false'),
(22, 84, 'Hp Laptop', 'true'),
(23, 85, 'Hp Laptop', 'false'),
(24, 86, 'Hp Laptop', 'false'),
(25, 87, 'Hp Laptop', 'false'),
(26, 88, 'Lenovo Laptop', 'false'),
(27, 89, 'Lenovo Laptop', 'false'),
(28, 90, 'Lenovo Laptop', 'true'),
(29, 83, 'Gaming Laptop', 'false'),
(30, 91, 'Hp Laptop', 'false'),
(31, 92, 'Hp Laptop', 'true'),
(32, 91, 'Gaming Laptop', 'false'),
(33, 92, 'Gaming Laptop', 'false'),
(34, 90, 'Gaming Laptop', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Description` text NOT NULL,
  `Specification` text NOT NULL,
  `Price` text NOT NULL,
  `Buy_Link` text NOT NULL,
  `Img_Link` text NOT NULL,
  `Preview_Link1` text NOT NULL,
  `Preview_Link2` text NOT NULL,
  `Preview_Link3` text NOT NULL,
  `Preview_Link4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_id`, `Name`, `Description`, `Specification`, `Price`, `Buy_Link`, `Img_Link`, `Preview_Link1`, `Preview_Link2`, `Preview_Link3`, `Preview_Link4`) VALUES
(79, 'Lenovo IdeaPad 3 14\" ', 'Lenovo IdeaPad 3 14\" Laptop, 14.0\" FHD 1920 x 1080 Display, AMD Ryzen 5 3500U Processor, 8GB DDR4 RAM, 256GB SSD, AMD Radeon Vega 8 Graphics, Narrow Bezel, Windows 10, 81W0003QUS, Abyss Blue', '<ul><li> Brand	Lenovo <li><li>  Operating System	Windows 10  <li><li> CPU Manufacturer	AMD  <li><li> Display Size	14 Inches  <li><li> Memory Size	8 GB <li><ul>', '30000', 'https://amzn.to/2WcIvjr', 'l1.jpg', '-', '-', '-', '-'),
(80, 'Dell Inspiron 17 3793', 'Dell Inspiron 17 3793 2020 Premium 17.3” FHD Laptop Notebook Computer, 10th Gen 4-Core Intel Core i5-1035G1 1.0 GHz, 16GB RAM, 512GB SSD + 1TB HDD, DVD,Webcam,Bluetooth,Wi-Fi,HDMI, Win 10 Home\r\n', '<ul><li> Standing screen display size	17.3 Inches <li><li>  Graphics Coprocessor	Intel Graphics <li><li> Operating System	Windows 10 <li><li> Processor Brand	Intel Processor  <li><li> Computer Memory Type	DDR4 SDRAM <li><ul>', '62000', 'https://amzn.to/3gLvmaO', 'd1.jpg', '-', '-', '-', '-'),
(81, ' Dell Inspiron 11 3195', '2020 Newest Dell Inspiron 11 3195 2-in-1 11.6 Inch Touchscreen Laptop (AMD A9-9420e up to 2.7GHz, 4GB DDR4 RAM, 128GB SSD, AMD Radeon R5, WiFi, Bluetooth, HDMI, Windows 10)', '<ul><li> Operating System: Windows 10 Home 64-bit   <li><li> Display: 11.6 inch HD LED touchscreen (1366 x 768) display  <li><li>  Processor: AMD A9-9420e Processor (1 MB L2 cache, 1.8 GHz with Turbo Core Technology up to 2.7 GHz, 2 Cores)  <li><li>  Memory: 4GB DDR4 RAM   <li><li> Hard Drive: 128GB SSD   <li><li> Graphics: AMD Radeon R5 <li><ul>', '32000', 'https://amzn.to/2KpdHcz', 'd2.jpg', '-', '-', '-', '-'),
(82, 'Dell Inspiron 15 5593', 'Dell Inspiron 15 5593: 10th Gen Core i5-1035G1, 256GB SSD, 8GB RAM, 15.6\" Full HD Display, Backlit Keyboard, Windows 10', '<ul><li> Brand	Dell  <li><li> Operating System	Windows 10  <li><li> CPU Manufacturer	Intel  <li><li> Display Size	15.6 Inches  <li><li> Memory Size	8 GB <li><ul>', '55000', 'https://amzn.to/3oPJzq2', 'd3.jpg', '-', '-', '-', '-'),
(83, 'Dell Gaming G3 15 3500', 'Dell Gaming G3 15 3500 - 15 Inch FHD 120Hz Refresh Rate, Intel Core i5-10300H 10th Gen, 8GB DDR4 RAM, 512GB SSD, Nvidia Geforce GTX 1650 Ti 4GB GDDR6, Windows 10 Home Eclipse Black', '<ul><li> CPU:i5 -10300H   <li><li> RAM Size:8 GB  <li><li> Hard Disk Size:512 GB  <li><li>  Graphics Description:GTX 1650 Ti   <li><li>  Style:Black <li><ul>', '75000', 'https://amzn.to/3gG8o4R', 'd4.jpg', '-', '-', '-', '-'),
(84, 'HP EliteBook x360 1030 ', 'HP EliteBook x360 1030 G4 13.3-Inch Touchscreen Laptop with Verizon/AT&T Compatible 4G LTE Wireless Feature (i7-8665U Processor, WiFi+BT5, 512GB SSD, 16GB RAM, HD-IR Camera) Windows 10 Pro', '<ul><li> Brand	HP  <li><li> Series	EliteBook x360 1030 G4 Touch <li><li> Processor Brand	Intel <li><li> Computer Memory Type	SDRAM <li><li>  Flash Memory Size	512 GB <li><ul>', '95000', 'https://amzn.to/2IPBNNu', 'h1.jpg', '-', '-', '-', '-'),
(85, '2020 HP Pavilion x360', '10th Gen Intel Core i5-1035G1 mobile processor 1.0GHz (with Max Turbo Speed of 3.6GHz);Ultra-low-voltage platform. Quad-core, eight-way processing provides maximum high-efficiency power to go.', '<ul><li> Brand	HP  <li><li> Operating System	Windows 10  <li><li> CPU Manufacturer	Intel  <li><li> Display Size	14 Inches  <li><li> Memory Size	8 GB <li><ul>', '45000', 'https://amzn.to/34rqYsD', 'h5.jpg', '-', '-', '-', '-'),
(86, 'HP Chromebook 14-inch HD Laptop', 'Sleek, responsive design: Keep going comfortably with the backlit keyboard and multi-touch touchpad that supports four finger gestures set in a sleek design for moving from room to room or on the road.', '<ul><li> Brand	HP  <li><li> Operating System	Chrome OS  <li><li> CPU Manufacturer	Intel  <li><li> Display Size	14 Inches  <li><li> Memory Size	4 GB <li><ul>', '21000', 'https://amzn.to/34aXeQr', 'h2.jpg', '-', '-', '-', '-'),
(87, 'HP 15-dy1036nr ', 'Stay connected to what matters most with long-lasting battery life and thin and portable, micro-edge bezel design. Built to keep you productive and entertained from anywhere, the HP 15\"\" diagonal laptop features reliable performance and an expansive display, letting you stream, surf and speed through tasks from sun up to sun down.\r\n', '<ul><li> Standing screen display size	15.6 Inches  <li><li> Max Screen Resolution	1920 x 1080 Pixels  <li><li> Memory Speed	2666 MHz  <li><li> Graphics Coprocessor	Intel UHD Graphics  <li><li> Chipset Brand	Intel Card <li><ul>', '45000', 'https://amzn.to/3qQTGfU', 'h3.jpg', '-', '-', '-', '-'),
(88, 'Lenovo ThinkPad X1 ', 'Lenovo ThinkPad X1 Carbon 7th Generation Ultrabook: Core i7-8565U, 16GB RAM, 512GB SSD, 14\" FHD Display, Backlit Keyboard', '<ul><li> Standing screen display size	14 Inches  <li><li> Max Screen Resolution	1920x1080  <li><li> Pixels Memory Speed	1.6 GHz  <li><li> Chipset Brand	Intel Card <li><ul>', '80000', 'https://amzn.to/3aaj61Z', 'l3.jpg', '-', '-', '-', '-'),
(89, 'Lenovo ThinkPad E595', '15.6-inch Full HD (1920 x 1080) IPS 250nits Anti-glare Non-touch, Integrated AMD Radeon Vega 8 Graphics\r\nAMD Ryzen 5 3500U Quad-Core Processor, 2.10 GHz (up to 3.70 GHz), 4MB L3 Cache', '<ul><li> Standing screen display size	15.6 Inches <li><li> Memory Speed	1 GHz <li><li> Graphics Coprocessor	AMD Radeon RX Vega 8 <li><li> Graphics Card Ram Size	1 GB  <li><li> Wireless Type	Bluetooth, 802.11abg, 802.11ac <li><ul>', '53000', 'https://amzn.to/383hvse', 'l4.jpg', '-', '-', '-', '-'),
(90, 'Lenovo - IdeaPad L340 15 Gaming Laptop ', '9th Gen Intel Core i5-9300HF mobile processor\r\n15.6\" Full HD display , 1920 x 1080 resolution\r\n8GB system memory for advanced multitasking', '<ul><li> Graphics Coprocessor	NVIDIA GeForce GTX 1650  <li><li> Item model number	81LK01MSUS  <li><li> Hardware Platform	PC  <li><li> Operating System	Windows 10 <li><ul>', '70000', 'https://amzn.to/3ngrOzL', 'l2.jpg', '-', '-', '-', '-'),
(91, 'HP - Pavilion 15.6\" Gaming Laptop', 'AMD Ryzen 5 4600H Processor\r\n8GB system memory for advanced multitasking\r\n256GB solid state drive (SSD)\r\nNVIDIA GeForce GTX 1650 Graphics', '<ul><li> Brand	HP  <li><li> Operating System	Windows 10 <li><li>  CPU Manufacturer	AMD  <li><li> Display Size	15.6 Inches  <li><li> Memory Size	8 GB <li><ul>', '70000', 'https://amzn.to/2W9nN4d', 'h5.jpg', '-', '-', '-', '-'),
(92, 'HP Pavilion Gaming 15 Laptop,', 'EALISTIC GAMING GRAPHICS: NVIDIA GeForce GTX 1650 (4 GB GDDR5 dedicated). Get all the power you need for a fast, smooth, power-efficient gaming laptop experience. ', '<ul><li> Memory Speed	3200 MHz  <li><li> Graphics Coprocessor	NVIDIA GeForce GTX 1650  <li><li> Chipset Brand	NVIDIA <li><li>  Card Ram Size	4 GB  <li><li> Wireless Type	802.11a/b/g/n/ac, Bluetooth <li><ul>', '55000', 'https://amzn.to/2ILdoZg', 'h4.jpg', '-', '-', '-', '-'),
(93, 'Skytech Archangel Gaming Computer PC Desktop –', 'AMD Ryzen 5 3600 6-Core 12-Thread 3.6GHz (4.2 GHz Max Boost) CPU | 500GB SSD – Up to 30x faster than traditional HDD | B450 Motherboard', '<ul><li> Brand	Skytech Gaming  <li><li> CPU Model	Ryzen 5 3600 <li><li>  Memory Size	16 GB RAM <li><li>  Installed Size	16 GB Series	 <li><li> Archangel 3.0 <li><ul>', '70000', 'https://amzn.to/3gMtT44', 'g1.jpg', '-', '-', '-', '-'),
(94, 'iBUYPOWER Gaming PC Computer', 'System: AMD Ryzen 5 3600 3.6GHz (4.2GHz Max Turbo) | 8GB DDR4 RAM | 240GB SSD | Genuine Windows 10 Home 64-bit\r\nGraphics: AMD Radeon RX 5500 XT 4GB Dedicated Graphics Card | VR Ready | Display Connectors: HDMI, DisplayPort', '<ul><li>  Brand	IBUYPOWER  <li><li> CPU Model	Ryzen 5 3600 <li><li>  Memory Size	8 GB  <li><li> RAM Installed Size	8 GB  <li><li> Series	Trace 4 9310 <li><ul>', '70000', 'https://amzn.to/2WggSpC', 'g2.jpg', '-', '-', '-', '-'),
(95, 'CyberpowerPC Gamer Xtreme VR Gaming PC', 'System: Intel Core i5-10400F 2.9GHz 6-Core | Intel B460 Chipset | 8GB DDR4 | 500GB PCI-E NVMe SSD | Genuine Windows 10 Home 64-bit\r\nNVIDIA GeForce GTX 1660 Super 6GB Video Card | 1x HDMI | 1x DisplayPort', '<ul><li>  Brand	CyberpowerPC  <li><li> CPU Model	Core i5  <li><li> RAM Installed Size	8 GB  <li><li> Series	Gamer Xtreme VR <li><ul>', '85000', 'https://amzn.to/37dOZ82', 'g3.jpg', '-', '-', '-', '-'),
(96, 'MSI MPG Trident AS 10SC-1208US SFF Gaming Desktop', 'Intel Core i7-10700F 8C/16T 2.90-4.80 GHz 16MB Cache\r\nNVIDIA GeForce RTX 2060 Super\r\n16GB DDR4 (2 x 8GB), 2 x DDR4 2666MHz U-DIMM, up to 64GB\r\n1TB M.2 NVMe/PCIe', '<ul><li> Brand	MSI <li><li>  CPU Model	Core i7  <li><li> Memory Size	16  <li><li> RAM Installed Size	16 GB  <li><li> Series	MPG Trident AS 10SC-1208US <li><ul>', '85000', 'https://amzn.to/3nuAGlv', 'g4.jpg', '-', '-', '-', '-'),
(97, 'RGB PC Gaming Accessories Combo Kit', 'Made of high quality ABS material, U-shaped key caps, comfortable gaming Keyboard. Auto changeable 7 Colors cool fashion cracked-pattern gaming mouse, high quality stereo gaming headset with mic', '<ul><li> Connections	USB <li><li>  Brand	Syba  <li><li> Number of Buttons	103  <li><li> Keyboard Description	Gaming  <li><li> Number of Keyboard Keys	103 <li><ul>', '5000', 'https://amzn.to/3nhG1fv', 'a1.jpg', '-', '-', '-', '-'),
(98, 'Wired Gaming One Hand Keyboard', 'Plug & Play: The usb wired gaming keyboard combo is plug and play, no need drivers, connected the usb, then it will work, really simple. Convenient for home, travel, game.', '<ul><li>  Material: ABS  <li><li> Interface: USB  <li><li> Key Number: 35  <li><li>  Keyboard Cable length: 1.6 Meters  <li><li> Lighting Effect: RGB LED Backlit <li><ul>', '2000', 'https://amzn.to/37g6XH6', 'a4.jpg', '-', '-', '-', '-'),
(99, 'IETS GT300 Double Blower Laptop Cooling Pad', 'Sealing rubber ring for enhanced cooling:The seal ring and blower are designed to create superior cooling.Suitable for 14-17 inch laptops, the best choice for gaming laptop cooling.', '<ul><li> Package Dimensions	16.25 x 14.25 x 2.3 inches  <li><li> Item Weight	3.24 pounds  <li><li> Manufacturer	IETS  <li><li> ASIN	B07WVK2ZZ9 <li><ul>', '5000', 'https://amzn.to/3gO7PWK', 'a2.jpg', '-', '-', '-', '-'),
(100, 'Wireless Gaming Mouse', 'This product is sold by VEGCOO, we do not recommend you to buy used products from Amazon Warehouse, If you buy the item from Amazon warehouse, we cannot guarantee the quality of the product!', '<ul><li> Connections	USB <li><li>  Color	C9 Black  <li><li> Brand	VEGCOO  <li><li> Hand Orietation	Ambidextrous  <li><li> Hardware requirements	PC <li><ul>', '1000', 'https://amzn.to/3oVNZf3', 'a3.jpg', '-', '-', '-', '-'),
(101, 'HP 22 All-in-One PC', 'MORE THAN A TOWER: The HP All-in-One PC blends the power of a desktop with the beauty of a slim, modern display into one dependable device designed to grow with you.', '<ul><li> Brand	HP <li><li>  CPU Model	Athlon  <li><li> Memory Size	4 GB  <li><li> RAM Installed Size	4 GB <li><li>  Series	HP 22 All-in-One <li><ul>', '40000', 'https://amzn.to/3a88ctH', 'h1.jpg', '-', '-', '-', '-'),
(102, 'Lenovo IdeaCentre', 'Accelerate everything you do with the IdeaCentre AIO 3. Powered by AMD Ryzen 5 4500U mobile processors with Radeon graphics, this all-in-one computer makes multitasking a breeze.', '<ul><li> Brand	Lenovo  <li><li> CPU Model	Ryzen 5 4500U  <li><li> Memory Size	16 GB  <li><li> RAM Installed Size	16 GB  <li><li> Series	IdeaCentre AIO 3 24 <li><ul>', '50000', 'https://amzn.to/385sfGq', 'l5.jpg', '-', '-', '-', '-'),
(103, 'HP 27 Pavilion All-in-One PC', 'POWER MEETS PERFORMANCE – Leading-edge performance and cutting-edge style give this All-in-One PC the means to tackle demanding projects and enjoy movie marathons, all while looking good anywhere you put it', '<ul><li>  Brand	HP <li><li>  CPU Model	Intel Core i7  <li><li> Memory Size	16 GB  <li><li> RAM Installed Size	16 GB  <li><li> Series	HP 27 Pavilion All-in-One <li><ul>', '95000', 'https://amzn.to/3gOdbkO', 'h5.jpg', '-', '-', '-', '-'),
(104, 'Dell Inspiron 27 ', '10th Gen Intel Core i7-10510U with TURBO BOOST to 4.90GHz (EXTREME-power processor)\r\n32 GB of RAM (ULTRA performance); Graphics RAM up to 6GB\r\n1 TB SSD Drive (MASSIVE pure SSD); HDMI port\r\n27\" Anti-Glare Narrow Border Infinity TOUCH SCREEN', '<ul><li>  Brand	Dell  <li><li> CPU Model	Core i7  <li><li> Memory Size	32 GB <li><li>  RAM Installed Size	32 GB  <li><li> Series	27 7790 Touch <li><ul>', '90000', 'https://amzn.to/3a3OzTI', 'd5.jpg', '-', '-', '-', '-'),
(105, 'Numenn L Shaped Desk', 'Numenn L Shaped Desk Gaming L Shaped Desk, 51\" L Shape Corner Computer Desk, Gaming Desk Table with Large Monitor Riser Stand for Home Office, Sturdy Writing Workstation, Office Desk with Shelf, White', '<ul><li> Color	White  <li><li> Material	Metal &amp; MDF <li><li>  Shape	L-Shape  <li><li> Brand	NUMENN <li><ul>', '5000', 'https://amzn.to/34c2cfQ', 'a5.jpg', '-', '-', '-', '-'),
(106, 'Mr IRONSTONE Large Gaming Desk ', 'Mr IRONSTONE Large Gaming Desk 63\" W x 32\" D Home Office Computer Table, Black Gamer Workstation with Cup Holder, Headphone Hook and 3 Cable Management Holes', '<ul><li> Color	Black  <li><li> Material	MDF+Steel  <li><li> Shape	Rectangle  <li><li> Brand	Mr IRONSTONE  <li><li> Top Material	Engineered Wood <li><ul>', '15000', 'https://amzn.to/3oQrcB0', 'a6.jpg', '-', '-', '-', '-'),
(107, 'SIDUCAL Mobile Standing Desk', 'SIDUCAL Mobile Standing Desk, Rolling Ajustable Computer Desk, Mobile Computer Workstation Adjustable Desks for Home Office for Stand Up, Black', '<ul><li> Color	Black  <li><li> Material	Metal  <li><li> Brand	SIDUCAL  <li><li> Top Material	Engineered Wood <li><ul>', '7000', 'https://amzn.to/2LDiOa1', 'a7.jpg', '-', '-', '-', '-'),
(108, 'VersaDesk Power Pro ', 'VersaDesk Power Pro USA Manufactured | Electric Height-Adjustable Desk Riser | Standing Desk Converter | Sit to Stand Desktop with Keyboard + Mouse Tray | 36\" X 24\" | All Black', '<ul><li>  Color	Black <li><li>  Material	Metal <li><li>  Furniture Finish	Black  <li><li> Shape	Rectangle  <li><li> Brand	VERSADESK <li><ul>', '25000', 'https://amzn.to/3nirwIy', 'a8.jpg', '-', '-', '-', '-'),
(109, 'Laptop Stand', 'Laptop Stand, Two-Layer Adjustable Height Laptop Holder, The Latest Portable Desktop Computer Stand Compatible with MacBook Air Pro, Dell XPS, HP, Lenovo More Laptops Under 17 inches (A-White)', '<ul><li> Color	Silver  <li><li> Brand	Nomakk  <li><li> Material	Aluminum alloy  <li><li> Item Weight	455 Grams <li><ul>', '3000', 'https://amzn.to/3nhRV9b', 'a9.jpg', '-', '-', '-', '-'),
(110, 'Laptop Light for Video Conference Recording', 'Laptop Light for Video Conference Recording, Dimmable LED Selfie Ring Lights with Tripod Stand and Phone Holder for Zoom Meetings Makeup Live Streaming YouTube Vlogging Selfie Photography Computer', '<ul><li> Color: Black-Dual <li><ul>', '3000', 'https://amzn.to/3gOijFA', 'a10.jpg', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tip_category`
--

CREATE TABLE `tip_category` (
  `Tip_No` int(11) NOT NULL,
  `Title` text NOT NULL,
  `tip_desc_short` text NOT NULL,
  `Description` text NOT NULL,
  `Img_Link` text NOT NULL,
  `preview_Img_Link` text NOT NULL,
  `trending_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tip_category`
--

INSERT INTO `tip_category` (`Tip_No`, `Title`, `tip_desc_short`, `Description`, `Img_Link`, `preview_Img_Link`, `trending_status`) VALUES
(1, 'How to Add Css in Button', 'You can use the button tag. For a submit, simply add type=\"submit\". Then use a background image when you want the button to appear as a graphic.', ' You can use the button tag. For a submit, simply add type=\"submit\". Then use a background image when you want the button to appear as a graphic.', 't1.jpg', '', 'true'),
(2, 'How to Add JavaScipt in Html', ' You can add JavaScript code in an HTML document by employing the dedicated HTML tag script that wraps around javascript code.', ' The script tag can be placed in the head section of your HTML, in the body section, or after the body close tag, depending on when you want the JavaScript to load.', 't2.jpg', '', 'true'),
(3, 'How to turn on dark mode in Whatsapp', ' Open WhatsApp and tap on three dots beside search option in top-right corner.In the drop-down menu, click on Settings', 'WhatsApp Messenger, or simply WhatsApp, is an American freeware, cross-platform messaging and Voice over IP service owned by Facebook, Inc. It allows users to send text messages and voice messages, make voice and video calls, and share images, documents, user locations, and other media\r\n\r\nWhatsApp Messenger, or simply WhatsApp, is an American freeware, cross-platform messaging and Voice over IP service owned by Facebook, Inc. It allows users to send text messages and voice messages, make voice and video calls, and share images, documents, user locations, and other media', 't3.jpg', '', 'true'),
(7, '5 Most important tips for (new) PC gamers', 'If you are thinking of joining the PC gaming community exclusively or broadening your horizons from being a console game to a multi-platform gamer, there are some things you should know about PC gaming.', '<p>1. Download Steam\r\n</p><p>2. Always check Reddit\r\n</p><p>3. Don’t rush into buying a game\r\n</p><p>4. Use the Refund option\r\n</p>', 't4.jpg', '34.jpg', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories_category`
--
ALTER TABLE `accessories_category`
  ADD PRIMARY KEY (`Category_No`);

--
-- Indexes for table `custome_pc`
--
ALTER TABLE `custome_pc`
  ADD PRIMARY KEY (`custome_no`);

--
-- Indexes for table `deal_of_day`
--
ALTER TABLE `deal_of_day`
  ADD PRIMARY KEY (`deal_no`);

--
-- Indexes for table `desktop_category`
--
ALTER TABLE `desktop_category`
  ADD PRIMARY KEY (`Desktop_No`);

--
-- Indexes for table `gaming_category`
--
ALTER TABLE `gaming_category`
  ADD PRIMARY KEY (`Gaming_No`);

--
-- Indexes for table `laptop_category`
--
ALTER TABLE `laptop_category`
  ADD PRIMARY KEY (`Laptop_No`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `tip_category`
--
ALTER TABLE `tip_category`
  ADD PRIMARY KEY (`Tip_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories_category`
--
ALTER TABLE `accessories_category`
  MODIFY `Category_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `custome_pc`
--
ALTER TABLE `custome_pc`
  MODIFY `custome_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `deal_of_day`
--
ALTER TABLE `deal_of_day`
  MODIFY `deal_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `desktop_category`
--
ALTER TABLE `desktop_category`
  MODIFY `Desktop_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `gaming_category`
--
ALTER TABLE `gaming_category`
  MODIFY `Gaming_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `laptop_category`
--
ALTER TABLE `laptop_category`
  MODIFY `Laptop_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `tip_category`
--
ALTER TABLE `tip_category`
  MODIFY `Tip_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
