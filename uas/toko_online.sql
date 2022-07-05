-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 02:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
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
(1, 'Jimmy H', 'jimmy', 'abcde', '082336134341', 'jhedyananta2@gmail.com', 'JL KKO USMAN 40 DANDANGAN KEDIRI');

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
(6, 'Headset'),
(7, 'Pakaian Pria'),
(8, 'Pakaian Wanita'),
(9, 'Buah'),
(10, 'Sayur Mayur');

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
(14, 7, 'pakaian pria1', 100000, 'Keunggulan Produk <br>\r\n- Bahan Lembut <br>\r\n- Cuttingan Rapih <br>\r\n- Jahitan tidak lepas-lepas <br>\r\n- Bentuk tidak kaku <br>\r\n- Warna solid, tidak pudar <br>\r\n- Anti bau <br>\r\n- Bagian ketiak tidak sempit <br>\r\n- Memberikan kesan rapih bersahabat <br>\r\n\r\nSize Chart : <br>\r\nM : Lebar Dada 50 cm, Panjang 70 cm <br>\r\nL : Lebar Dada 53 cm, Panjang 74 cm <br>\r\nXL : Lebar Dada 56 cm, Panjang 77 cm <br>', 'produk1589853370.png', 1, '2020-05-19 01:56:10'),
(15, 7, 'pakaian pria2', 150000, 'bahan katun rayon import <br>\r\nukuran•M L XL <br>\r\nM : P 70 X LD 52 <br>\r\nL : P 72 X LD 54 <br>\r\nXL : P 74 X LD 56 <br>\r\nwarna• merah°navy°hitam°mustard°hijau army <br>\r\n\r\ndijamin adem dan bahanya jatuh <br>\r\njahitan standar garmen <br>', 'produk1589853389.png', 1, '2020-05-19 01:56:29'),
(16, 8, 'pakaian wanita1', 200000, '-bahan tebel,halus,lembut,nyaman dipakai <br>\r\n-resleting aktif,saku samping kanan kiri <br>\r\n-detail gambar full bordir dan ada hoodienya <br>\r\n-must have😍 <br>', 'produk1589853410.png', 1, '2020-05-19 01:56:50'),
(17, 8, 'pakaian wanita2', 400000, 'Bahan : baby suede corduroy <br>\r\nDetail size <br>\r\nLingkar dada : 136cm <br>\r\nPanjang badan : 72-77cm <br>\r\n-bahan lembut,bertexture,adem,ringan dipakai <br>\r\n-kancing full aktif, bisa jadi outer juga😍 <br>\r\n-cutting oversized.. <br>', 'produk1589853431.png', 1, '2020-05-19 01:57:11'),
(18, 9, 'pisang', 15000, '<p>pisang yang dapat dimakan sewaktu mentah adalah pisang klutuk (pisang batu) yang berasa sepat dan enak untuk dibuat rujak. Pisang klutuk beserta kulitnya sering ditambahkan ke dalam rujak untuk mencegah sakit perut atau mules setelah makan rujak.</p>\r\n', 'produk1589853455.png', 1, '2020-05-19 01:57:35'),
(19, 9, 'rambutan', 20000, 'Rambutan binjai berasal dari Sumatera Utara. Rambutan ini memiliki keunggulan pada cita rasa manis dan daging buahya yang cukup tebal. Bentuk buah rambutan binjai berbentuk bulat sedikit lonjong.', 'produk1589853479.png', 1, '2020-05-19 01:57:59'),
(20, 10, 'brokoli', 30000, 'Jenis brokoli ini memiliki kepala bunga berwarna hijau tua dengan tangkap yang tebal.\r\n\r\nKepala bunganya bisa mencapai 10-20 cm, lo. Brokoli calabre dapat tumbuh dengan baik di beberapa jenis iklim sehingga dikenal produktif.\r\n\r\nBrokoli ini bisa dipanen setelah 65 hari, Kids.', 'produk1589853498.png', 1, '2020-05-19 01:58:18'),
(21, 10, 'sayur kol', 40000, 'kol atau kubis yang paling populer. Dinamakan demikian karena daunnya saling menempel erat satu sama lain dan padat yang menyerupai bola meriam.\r\n\r\nDaun kubis hijau atau kubis meriam yang lebat cocok untuk dicacah atau dipotong, termasuk dipisahkan menjadi beberapa helai. Kubis hijau atau kubis meriam biasanya direbus dalam sup sederhana dengan wortel, kentang, daun seledri, dan daging ayam atau sapi.', 'produk1589853518.png', 1, '2020-05-19 01:58:38');

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
