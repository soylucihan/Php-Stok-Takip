

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT=0;
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;



DROP TABLE IF EXISTS `depo`;
CREATE TABLE IF NOT EXISTS `depo` (
  `resim` varchar(250) NOT NULL,
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `urunadi` varchar(150) CHARACTER SET latin5 NOT NULL DEFAULT '',
  `urunkategorisi` varchar(20) CHARACTER SET latin5 NOT NULL DEFAULT '',
  `birim` varchar(20) CHARACTER SET latin5 NOT NULL DEFAULT '',
  `miktar` varchar(20) CHARACTER SET latin5 NOT NULL DEFAULT '',
  `personel` varchar(50) CHARACTER SET latin5 NOT NULL DEFAULT '',
  `aciklama` text CHARACTER SET latin5 NOT NULL,
  `zaman` datetime NOT NULL,
  `malzemekodu` text CHARACTER SET latin5 NOT NULL,
  `birimfiyat` varchar(25) NOT NULL,
  `kdv` varchar(20) NOT NULL,
  `toplamfiyat` varchar(20) NOT NULL,
  `fiyatbirimi` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;



INSERT DELAYED IGNORE INTO `depo` (`resim`, `id`, `urunadi`, `urunkategorisi`, `birim`, `miktar`, `personel`, `aciklama`, `zaman`, `malzemekodu`, `birimfiyat`, `kdv`, `toplamfiyat`, `fiyatbirimi`) VALUES
('http://i1106.hizliresim.com/2011/6/11/14700.jpg', 1, 'Gümüş Bnc', 'Güvenlik', 'Adet', '150', 'cihan', 'Gümüş Bnc', '2015-04-20 17:54:27', 'şkr-3325', '0.8', '0.1', '0.9', 'Tl'),
('http://i1106.hizliresim.com/2011/6/11/14712.jpg', 2, 'Taiwan Bnc', 'Güvenlik', 'Adet', '310', 'cihan', 'Taiwan Bnc', '2015-04-21 10:44:35', 'Şkr-3320', '0.7', '0.2', '0.9', 'Usd');



DROP TABLE IF EXISTS `firma`;
CREATE TABLE IF NOT EXISTS `firma` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `kayittipi` varchar(25) NOT NULL,
  `yetkili` varchar(25) NOT NULL,
  `firmaadi` varchar(25) NOT NULL,
  `sektor` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `web` varchar(25) NOT NULL,
  `tel` int(100) NOT NULL,
  `fax` int(100) NOT NULL,
  `adres` text NOT NULL,
  `il` varchar(25) NOT NULL,
  `ilce` varchar(25) NOT NULL,
  `vergidairesi` varchar(25) NOT NULL,
  `vergino` varchar(25) NOT NULL,
  `zaman` datetime NOT NULL,
  `personel` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin5 AUTO_INCREMENT=2 ;



INSERT DELAYED IGNORE INTO `firma` (`id`, `kayittipi`, `yetkili`, `firmaadi`, `sektor`, `email`, `web`, `tel`, `fax`, `adres`, `il`, `ilce`, `vergidairesi`, `vergino`, `zaman`, `personel`) VALUES
(1, 'bayi', 'Yeni Bir Firma', 'İsimsiz Firma.', 'guvenlik', 'info@cihan.com.tr', 'http://www.cihan.co', 2121111111, 2121111112, '... Bulvarı .... Sokak No Fid874', 'İstanbul', 'deneme', 'webmaster', '02121111111', '2015-04-21 09:40:26', 'cihan');



DROP TABLE IF EXISTS `uye`;
CREATE TABLE IF NOT EXISTS `uye` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `onay` varchar(20) CHARACTER SET latin5 NOT NULL DEFAULT '',
  `ad` varchar(20) CHARACTER SET latin5 NOT NULL DEFAULT '',
  `kullaniciadi` varchar(20) CHARACTER SET latin5 NOT NULL DEFAULT '',
  `sifre` varchar(20) CHARACTER SET latin5 NOT NULL DEFAULT '',
  `email` varchar(50) CHARACTER SET latin5 NOT NULL DEFAULT '',
  `hakkimda` text CHARACTER SET latin5 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;



INSERT DELAYED IGNORE INTO `uye` (`id`, `onay`, `ad`, `kullaniciadi`, `sifre`, `email`, `hakkimda`) VALUES
(3, '1', 'Yönetim', 'admin', 'admin', 'admin@localhost', 'Bilgi');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
