-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Haz 2024, 20:16:36
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `siparis`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `order_product`
--

CREATE TABLE `order_product` (
  `urunkodu` varchar(255) NOT NULL,
  `kod` varchar(255) NOT NULL,
  `varkod` varchar(255) NOT NULL,
  `barcode` varchar(255) NOT NULL,
  `urunadi` varchar(255) NOT NULL,
  `fatura_adi` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `fiyat` float NOT NULL,
  `miktar` int(11) NOT NULL,
  `birim` varchar(255) NOT NULL,
  `kdv` int(11) NOT NULL,
  `siparis_kodu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
