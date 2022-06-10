-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Haz 2022, 22:57:52
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
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `id` int(10) UNSIGNED NOT NULL,
  `HaberBasligi` varchar(100) NOT NULL,
  `HaberIcerigi` text NOT NULL,
  `HaberfotoAdi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`id`, `HaberBasligi`, `HaberIcerigi`, `HaberfotoAdi`) VALUES
(1, 'Tüm gözler Merkez Bankası\'nın faiz kararında! Ekonomistler tek bir tahminde birleşti', 'Merkez Bankası, 2022 yılının 5. faiz kararını bugün saat 14.00\'de açıklayacak. Milyonlar Merkez\'in vereceği kararı merakla beklerken, ekonomistlerin katıldığı anketlere göre faizin yüzde 14\'te sabit kalması bekleniyor.\r\nTürkiye Cumhuriyet Merkez Bankası, mayıs ayı faiz kararı için geri sayım başladı. Milyonların merakla beklediği karar bugün saat 14.00\'de açıklanacak.\r\n\r\n2022\'DE FAİZ SABİT KALDI\r\nTCMB, geçen yılın son 4 toplantısında faizde toplam 500 baz puan indirime gittikten sonra, bu yılın ilk 4 toplantısında bir değişiklik yapmadı. Politika faizi yüzde 14 seviyesinde dururken, gözler şimdi alınacak yeni faiz kararında.', 'resim1.jpg'),
(2, 'Hastane koridorunda şaşırtan arşiv! Hastalardan topladılar', 'Antalya\'da, çocukların solunum ve sindirim yollarından çıkarılan yabancı cisimler, hastane koridorunda sergileniyor. Koleksiyonu andıran panolarda; madeni para, çengelli iğneler, yorgan iğnesi, kalemtıraş, çivi, vida, pil, kuru yemiş parçaları, oyun hamuru, toplu iğne ve mıknatıslar dikkat çekiyor.', 'resim2.jpg'),
(3, '1975 model Pontiac otomobili fiyatı dudak uçuklatıyor!', 'Yassıada mağduru Adalet Partisi milletvekillerinden Ali Saim Kaymak’ın kullandığı 47 yaşındaki klasik araç, Sivas’ta satışa sunuldu.\r\n\r\n \r\n\r\nTamamen orijinal olan 1975 model aracı 2022 model araç bedeli isteniyor.Marka ismini Kızılderili Şefi Pontiac Obwandiyag\'dan alan klasik otomobil, orijinalliği ile dikkat çekiyor.\r\n\r\n \r\n\r\nTamamen orijinalliği ile korunarak günümüze ulaşan araç, Yassıada mağdurlarından olan eski Adalet Partisi Konya Milletvekili Ali Saim Kaymak tarafından Türkiye’ye getirildi.\r\n\r\nKaymak, Chicago’da üniversite öğrenimini sürdürürken satın aldığı otomobilini eğitimini tamamlamasının ardından Türkiye’ye getirdi. Otomobil vekilin vefatının ardından çocukları tarafından kapalı garajda tutuldu.', 'resim3.jpg'),
(4, 'Stefan Kuntz, Lüksemburg maçı öncesi konuştu: \"Kalede kimin oynayacağını söyledik\"', 'UEFA Uluslar C Ligi’ndeki 3’üncü maçında yarın deplasmanda Lüksemburg’un konuğu olacak A Milli Futbol Takımı’nda teknik direktör Stefan Kuntz, basın toplantısında açıklamalarda bulundu.\r\n\r\nLüksemburg’un Faroe Adaları ve Litvanya’dan daha iyi bir takım olduğunu ifade eden Kuntz, \"Lüksemburg taktiksel olarak, Faroe Adaları ve Litvanya’dan üstün bir takım. 3. galibiyeti arıyoruz. Lüksemburg, bireysel ve taktiksel olarak bakınca gruptaki en ciddi rakip. Diğer maçlara göre daha zor olacağını bekleyebiliriz. Oyuncularımızı en mükemmel şekilde hazırlamaya çalıştık. Rıdvan’ın ağrıları var, yarınki maç için riske etmeyeceğiz\" şeklinde konuştu.', 'resim4.jpg'),
(5, 'Bakan Nebati: Türkiye ilgi odağı olmaya devam edecek', 'Hazine ve Maliye Bakanı Nureddin Nebati yurt dışı yerleşikler için düzenlenecek tahsisli swap enstrümanıyla Türk Lirası cinsi varlıklara erişim imkanının genişletileceğini ve Türkiye\'nin yabancı yatırımcılar için ilgi odağı olmaya devam edeceğini söyledi.', 'resim5.jpg'),
(6, '540 milyar metreküplük Karadeniz gazı için borular döşenmeye başladı', 'Karadeniz’de bulunan 540 milyar metreküplük doğalgazın karaya nakli için 170 kilometrelik hatta doğalgaz boruları döşenecek. Boruların denize indirilmesi için 13 Haziran günü Cumhurbaşkanı Recep Tayyip Erdoğan’ın da katılımıyla tören düzenlenmesi bekleniyor. Öte yandan doğalgazın ana dağıtım hattına bağlanması için karada da boru döşeme çalışmaları başladı.', 'resim6.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
