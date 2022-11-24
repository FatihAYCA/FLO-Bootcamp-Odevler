-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 24 Kas 2022, 15:42:07
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sepet`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet1`
--

DROP TABLE IF EXISTS `sepet1`;
CREATE TABLE IF NOT EXISTS `sepet1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urunadi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `adet` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sepet1`
--

INSERT INTO `sepet1` (`id`, `urunadi`, `fiyat`, `adet`) VALUES
(1, 'Ülker Çikolatalı Gofret 40 gr.', '10', 0),
(2, 'Eti Damak Kare Çikolata 60 gr.', '20', 0),
(3, 'Nestle Bitter Çikolata 50 gr.', '20', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
