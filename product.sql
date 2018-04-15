-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 09:49 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `descr` longtext
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `image`, `price`, `descr`) VALUES
(7, 'Samsung Galaxy S9+', 'ph7.jpg', 64900, '1. 16MP primary camera with 30fps and 16+8MP front facing camera\r\n2. 15.24 centimeters (6-inch) Super Amoled capacitive touchscreen with 2220 x 1080 pixels resolution 16M color support\r\n3. Android v7 Nougat operating system with 2.2GHz + 1.6GHz Exynos 7885 octa core processor, 6GB RAM, 64GB internal memory expandable up to 256GB and dual SIM (nano+nano) dual-standby (4G+4G)\r\n4. 3500mAH lithium-ion battery providing talk-time of 23 hours\r\n5. 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase'),
(6, 'Samsung Galaxy Note 8', 'ph6.jpeg', 65500, '1. 12MP Dual Camera with Dual OIS, autofocus, 2x optical zoom and 8MP front facing camera with image recording, touch focus and face smile detection\r\n2. 16.05 centimeters (6.3-inch) QHD+ capacitive touchscreen. 1440 x 2960 resolution. 521 ppi pixel density. 18.5.9 aspect ratio\r\n3. Exynos 8895 10nm octa core processor 2.3GHz + 1.7GHz. Mali-G71 MP20 GPU\r\n4. 6GB RAM, 64GB internal memory expandable up to 256GB and dual SIM dual-standby (4G+4G)\r\n5. 3300mAH lithium-ion battery. Upto 22 hours talk-time on 3G\r\n6. 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase'),
(5, 'Apple iPhone 7', 'ph5.jpg', 38799, '1. 12MP primary camera with optical image stabilisation, quad-LED true tone flash and live photos, 4K video recording at 30 fps and slow-motion video recording in 1080p at 120 fps and 7MP front facing camera\r\n2. 11.93 centimeters (4.7-inch) Retina HD 3D-touch capacitive touchscreen with 750 x 1334 pixels resolution\r\n3. iOS v10 operating system with 2.34GHz Apple A10 Fusion chip with integrated M10 motion quad core processor, 2GB RAM, 32GB internal memory and single SIM\r\n4. 1960mAH lithium-ion battery\r\n5. 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase'),
(4, 'Apple iPhone 7 Plus', 'ph4.jpg', 54883, '1. 12MP primary camera with optical zoom at 2x, digital zoom up to 10x, optical image stabilisation, quad-LED true tone flash and live photos, 4K video recording at 30 fps and slow-motion video recording in 1080p at 120 fps and 7MP front facing camera\r\n2. 13.97 centimeters (5.5-inch) Retina HD 3D-touch capacitive touchscreen with 1920 x 1080 pixels resolution\r\n3. iOS v10.0.1 operating system with 2.34 GHz A10 Fusion chip with integrated M10 motion quad core processor, 3GB RAM, 128GB internal memory and single SIM\r\n4. 2900mAH lithium-ion battery\r\n5. 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase'),
(3, 'Apple iPhone 8', 'ph3.jpg', 55999, '1. 11.93 centimeters (4.7-inch) capacitive touchscreen with 1334 x 750 pixels resolution\r\n2. iOS v11 operating system with 1.2GHz Apple A11 Bionic hexa core processor, 2GB RAM, 64GB internal memory and single SIM\r\n3. 1821mAH lithium-ion battery\r\n4. 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase'),
(2, 'Apple iPhone 8 Plus', 'ph2.jpg', 65000, '1. 13.97 centimeters (5.5-inch) capacitive touchscreen with 1920 x 1080 pixels resolution\r\n2. iOS v11 operating system with 1.2GHz Apple A11 Bionic hexa core processor, 2GB RAM, 64GB internal memory and single SIM\r\n3. 2691mAH lithium-ion battery\r\n4. 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase'),
(1, 'Apple iPhone X', 'ph1.jpeg', 76999, '1. 14.73 centimeters (5.8-inch) capacitive touchscreen with 2436 x 1125 pixels resolution\r\n2. iOS v11.1.1 operating system with 1.3GHz Apple A11 Bionic hexa core processor, 3GB RAM, 64GB internal memory and single SIM\r\n3. 2716mAH lithium-ion battery\r\n4. 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase\r\n '),
(8, 'Samsung Galaxy S9', 'ph8.jpg', 57900, '1. 16MP primary camera with 30fps and 16+8MP front facing camera\r\n2. 15.24 centimeters (6-inch) Super Amoled capacitive touchscreen with 2220 x 1080 pixels resolution 16M color support\r\n3. Android v7 Nougat operating system with 2.2GHz + 1.6GHz Exynos 7885 octa core processor, 6GB RAM, 64GB internal memory expandable up to 256GB and dual SIM (nano+nano) dual-standby (4G+4G)\r\n4. 3500mAH lithium-ion battery providing talk-time of 23 hours\r\n5. 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase\r\n'),
(9, 'Samsung Galaxy S8+', 'ph9.jpg', 55990, ' 6.2INCH, EDGE SCREEN, SUPER AMOLED DISPLAY, 64GB INBULIT,4GB RAM(DUOS)'),
(10, 'Samsung Galaxy S8', 'ph10.jpg', 47890, '1. 4 GB RAM | 64 GB ROM | Expandable Upto 256 GB\r\n2. 5.8 inch Quad HD+ Display\r\n3. 12MP Rear Camera | 8MP Front Camera\r\n4. 3000 mAh Battery\r\n5. Exynos 8895 Processor\r\n'),
(11, 'Motorola Moto Z2 Force', 'ph11.jpeg', 34998, '1. 12MP primary camera and 5MP front facing camera\r\n2. 13.97 centimeters (5.5-inch) Full HD AMOLED capacitive touchscreen with 1920 x 1080 pixels resolution\r\n3. Android v7.0 Nougat operating system with 2.2GHz Qualcomm SnapdragonTM 626 processor octa core processor, 4GB RAM, 64GB internal memory expandable up to 2TB and dual SIM dual-standby (4G+4G)\r\n4. 3000mAH lithium-ion battery\r\n5. 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase\r\n'),
(12, 'Motorola Moto X Force', 'ph12.jpg', 19994, '1. 21MP primary camera with dual LED flash, 4x digital zoom, burst mode, night mode, auto HDR, panorama, drag to focus and exposure, video stabilization and 5MP front facing camera\r\n2. 13.72 centimeters (5.4-inch) AMOLED quad HD capacitive touchscreen with 1440 x 2560 pixels resolution and 540 ppi pixel density\r\n3. Android v5 Lollipop operating system with 2GHz Qualcomm Snapdragon 810 MSM8994 octa core processor, Adreno 430 GPU, 3GB RAM, 32GB internal memory expandable up to 2TB and single SIM (nano)\r\n4. 3760mAH lithium-ion battery\r\n'),
(14, 'Anti Shock Back Cover Case for Apple iPhone X (Transparent)', 'a1.jpg', 249, ' '),
(15, 'Belkin 5-Watt Qi Wireless Charging Pad / Wireless Charger for iPhone 8 / 8 Plus and iPhone X', 'a2.jpg', 2966, ' '),
(16, 'MARLAYS iPhone X Full Body Premium Tempered Glass - Sapphire Black', 'a3.jpg', 499, ''),
(17, 'Wayona Metal Spring Lightning to USB Sync and 2.4A Fast Charging Cable Data Cord Compatible with iPhone X/8/7/6s/6/5s/5/SE, iPad Pro/Air/Mini (Silver)', 'a4.jpg', 599, ' '),
(18, 'Classico Lightning to 3.5 mm Headphone Jack Cable Audio Adapter Earphone Cable Audio Converter for Apple iPhone 7/7 Plus/8/8 Plus & iPhone X', 'a5.jpg', 699, ''),
(19, 'ULTRA THIN SHOCK PROOF CLEAR TRANSPARENT Back Cover Case For Apple iPhone 8 Plus (Black)', 'a6.jpg', 1299, ''),
(20, 'ApeCases® Apple iPhone 8 Plus Compatible Bluetooth Music Earphone Bluetooth V4. 1 + EDR With 1 Connect 2 Function Support Handfree Call for iOS & Android Devices', 'a8.jpg', 999, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
