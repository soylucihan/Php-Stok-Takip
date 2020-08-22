<?php
ob_start();

$kullaniciadi = $_POST['kullaniciadi'];
$sifre = $_POST['sifre'];


if ((!$kullaniciadi =="") and (!$sifre =="")) {
include("database.php");
$sql = ("SELECT *  FROM `uye` WHERE `onay` LIKE '1' AND `kullaniciadi` LIKE '$kullaniciadi' AND `sifre` LIKE '$sifre'");
$kontrol = mysql_query($sql);
$kayitsayisi = mysql_num_rows($kontrol);
if ($kayitsayisi == "0") {
echo "<font face=\"verdana\" size=\"2\" color=\"#800000\"><b>Giriþ Sýrasýnda Hata Oluþtu</b><br>";
echo "Þifre veya Kullanýcý Adý Yanlýþ. Tekrar Deneyin Veya<br>";
echo "Üyeliðiniz Admin Onay Beklemektedir.<br>";
} else {
$kontrol_ok = mysql_fetch_array($kontrol);
setcookie ("kullanici", "$kontrol_ok[kullaniciadi]");
header ("Location: malzeme-listeleme.php");
}
}
else {
echo "<font face=\"verdana\" size=\"2\" color=\"#800000\"><b>Giriþ Sýrasýnda Hata Oluþtu</b><br>";
echo "Þifre veya Kullanýcý Adý Yanlýþ. Tekrar Deneyin Veya<br>";
echo "Üyeliðiniz Admin Onay Beklemektedir.<br>";
}
ob_end_flush();
?> 
