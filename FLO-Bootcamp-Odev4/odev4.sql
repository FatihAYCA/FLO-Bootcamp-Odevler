-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 22 Kas 2022, 00:28:31
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
-- Veritabanı: `odev4`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dogrula`
--

DROP TABLE IF EXISTS `dogrula`;
CREATE TABLE IF NOT EXISTS `dogrula` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tc` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `dogrula`
--

INSERT INTO `dogrula` (`id`, `adsoyad`, `tc`, `durum`) VALUES
(1, 'Fatih Ayça', '16111960454', 'TC Kimlik Geçerli'),
(2, 'Mehmet Selçuk Batal', '111222333', 'TC Kimlik Geçersiz'),
(3, 'Furkan Ayça', '16105960682', 'TC Kimlik Geçerli'),
(4, 'Ahmet Ayça', '1122', 'TC Kimlik Geçersiz');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
