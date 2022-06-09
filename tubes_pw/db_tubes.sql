-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 01:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bukawarung`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'Hansen Bipaldo Silitonga', 'admin', 'admin', '+628954226897078', 'hansensorga@gmail.com', 'Jl. Setiabudi 193 Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(4, 'Obat Demam'),
(5, 'Obat Batuk'),
(6, 'Perban'),
(7, 'Plester'),
(8, 'Suplemen Tubuh'),
(9, 'Masker Bedah'),
(10, 'Betadine');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `data_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `data_created`) VALUES
(5, 4, 'Paracetamol', 30000, 'Obat yang bermanfaat untuk menurunkan demam\r\ncara pemakaian :\r\n3 x 1, 1 tablet sesudah makan', 'od1.jpg', 1, '2022-06-01 10:47:06'),
(6, 4, 'Panadol', 40000, 'Obat ini bermanfaat untuk meredakan demam\r\ncara pemakaian :\r\n2 x 1, 1 tablet sesudah makan\r\n', 'od2.jpg', 1, '2022-06-01 10:47:06'),
(7, 4, 'Sanmol', 25000, 'Bermanfaat untuk meredakan demam\r\ncara pemakaian :\r\n3 x 1, 15 ml sesudah makan\r\n', 'od3.jpg', 1, '2022-06-01 10:47:06'),
(8, 5, 'Obat Batuk Woods', 20000, 'Bermanfaat untuk meredakan batuk berdahak\r\nCara pemakaian :\r\n3 x 1, 15ml sesudah makan\r\n', 'ob1.jpg', 1, '2022-06-01 10:47:06'),
(9, 5, 'Obat batuk OBH Combi', 30000, 'Bermanfaat untuk meredakan batuk berdahak dan tidak berdahak.\r\nCara pemakaian :\r\n3 x 1, 15ml sesudah makan\r\n\r\n', 'ob2.jpg', 1, '2022-06-01 10:47:06'),
(10, 5, 'Obat Batuk Vicks', 35000, 'Bermanfaat untuk meredakan tenggorokan gatal dan batuk berdahak.\r\nCara pemakaian :\r\n2 x 1, 15ml sesudah makan\r\n', 'ob3.jpg', 1, '2022-06-01 10:47:06'),
(11, 6, 'Perban Allevyn Adhesive', 50000, 'Perban yang cocok untuk membalut luka yang basah\r\n', 'perban1.jpg', 1, '2022-06-01 10:47:06'),
(12, 6, 'Perban Kasa Husada', 40000, 'Perban yang cocok untuk digunakan menutup luka yang kering\r\n', 'perban2.jpg', 1, '2022-06-01 10:47:06'),
(13, 6, 'Perban Hypafix', 150000, 'Perban yang cocok untuk membalut setiap jenis luka baik itu kering maupun basah dengan bahan perban yang elastis\r\n', 'perban3.jpg', 1, '2022-06-01 10:47:06'),
(14, 7, 'Plester Hansaplast', 10000, 'plester yang mudah digunakan untuk merekatkan perban luka  \r\n', 'plester1.jpg', 1, '2022-06-01 10:47:06'),
(15, 7, 'Plester Leukoplast', 150000, 'Plester yang mudah digunakan untuk merekatkan perban yang dipakai', 'plester2.jpg', 1, '2022-06-01 10:47:06'),
(16, 8, 'Enervon - C', 35000, 'Suplemen tubuh yang bermanfaat untuk menambah nutrisi dan stamina yang dibutuhkan untuk tubuh\r\n', 'suplemen1.jpg', 1, '2022-06-01 10:47:06'),
(17, 8, 'Natures Plus', 50000, 'Suplemen tubuh yang bermanfaat untuk menambah asupan nutrisi yang dibutuhkan tubuh', 'suplemen2.jpg', 1, '2022-06-01 10:47:06'),
(18, 9, 'Jiaaosi', 150000, 'Masker yang berguna untuk mencegah masuknya virus melalui hidung dan mulut', 'm1.jpg', 1, '2022-06-01 10:47:06'),
(19, 9, 'C - care', 120000, 'Masker yang berguna untuk mencegah masuknya virus melalui hidung dan mulut\r\n', 'm2.jpg', 1, '2022-06-01 10:47:06'),
(20, 10, 'Betadine', 30000, 'Bermanfaat untuk menyembuhkan luka berdarah\r\n', 'b.jpg', 1, '2022-06-01 10:47:06'),
(21, 10, 'Betadine Obat Kumur', 40000, 'Bermanfaat untuk membersihkan mulut dan gigi dari kuman dan virus\r\n', 'bok.jpg', 1, '2022-06-01 01:58:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
