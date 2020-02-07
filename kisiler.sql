-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Ara 2017, 11:07:14
-- Sunucu sürümü: 10.1.8-MariaDB
-- PHP Sürümü: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje2`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisiler`
--

CREATE TABLE `kisiler` (
  `id` int(11) NOT NULL,
  `isim` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `soyisim` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `adres` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `tc` int(11) NOT NULL,
  `btarihi` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `bitist` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `odeme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kisiler`
--

INSERT INTO `kisiler` (`id`, `isim`, `soyisim`, `adres`, `tel`, `tc`, `btarihi`, `bitist`, `odeme`) VALUES
(1, 'Hüseyin', 'Özdemir', 'a asdasd a  ', 12312312, 123123213, '2017-12-10', '2017-12-31', 1),
(11, 'gulsen', 'asdasd', 'asdasdasd  2', 2323232, 3232, '2017-12-10', '2017-12-10', 1),
(12, 'ali', 'asd', 'asdasd', 123123, 123, '2017-12-24', '2017-12-23', 2),
(13, 'ali', 'asd', 'asdasd ', 123123, 123, '2017-12-24', '2017-12-23', 2),
(14, 'yeni', 'yeni', 'asdasd', 1235877, 2147483647, '2017-12-09', '2017-12-24', 2),
(15, 'ali', 'ucar', 'aşagı mal no:15 ', 2147483647, 2147483647, '2018-01-01', '2018-02-01', 1),
(16, 'kemal ', 'sunal', 'yeşilçam', 2147483647, 2147483647, '2018-03-09', '2019-09-09', 2),
(17, 'veli', 'ahmetoglu', 'konya', 2147483647, 2147483647, '2017-08-19', '2018-04-13', 1),
(18, 'devran', 'gulsen', 'tokat', 2147483647, 2147483647, '2017-09-16', '2018-03-08', 1),
(19, 'eray ', 'kavuşoğlu', 'dasdasd ', 123456789, 2147483647, '2017-12-07', '2017-12-23', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kisiler`
--
ALTER TABLE `kisiler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kisiler`
--
ALTER TABLE `kisiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
