-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Haz 2022, 22:57:35
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `extraegitim`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blok`
--

CREATE TABLE `blok` (
  `id` int(10) UNSIGNED NOT NULL,
  `Baslik` varchar(100) NOT NULL,
  `metin` text NOT NULL,
  `gorseladi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `blok`
--

INSERT INTO `blok` (`id`, `Baslik`, `metin`, `gorseladi`) VALUES
(1, 'Baslık1', '\r\n\r\n Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, deleniti aut, quasi illum, animi suscipit illo optio excepturi placeat recusandae sequi maiores debitis facilis? Reprehenderit iure aperiam sint praesentium accusantium.\r\n', 'resim2.jpg'),
(2, 'Baslık2', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, deleniti aut, quasi illum, animi suscipit illo optio excepturi placeat recusandae sequi maiores debitis facilis? Reprehenderit iure aperiam sint praesentium accusantium.\r\n\r\n', 'resim1.jpg'),
(3, 'Baslık3', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, deleniti aut, quasi illum, animi suscipit illo optio excepturi placeat recusandae sequi maiores debitis facilis? Reprehenderit iure aperiam sint praesentium accusantium.\r\n\r\n', 'resim6.jpg'),
(4, 'Baslık4', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, deleniti aut, quasi illum, animi suscipit illo optio excepturi placeat recusandae sequi maiores debitis facilis? Reprehenderit iure aperiam sint praesentium accusantium.\r\n', 'resim5.jpg'),
(5, 'Baslık 5', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, deleniti aut, quasi illum, animi suscipit illo optio excepturi placeat recusandae sequi maiores debitis facilis? Reprehenderit iure aperiam sint praesentium accusantium.\r\n', 'resim7.jpg'),
(6, 'Baslık 6', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, deleniti aut, quasi illum, animi suscipit illo optio excepturi placeat recusandae sequi maiores debitis facilis? Reprehenderit iure aperiam sint praesentium accusantium.\r\n', 'img2.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blok`
--
ALTER TABLE `blok`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blok`
--
ALTER TABLE `blok`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
