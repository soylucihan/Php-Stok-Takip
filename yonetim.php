<? 


$sayfaSifreleme ='1'; # 1 acik , 0 kapali 

$kullaniciAdi = 'admin'; 

$sifre = '21082008'; 




function yetkiKontrol($kullaniciAdi,$sifre) { 

if(empty($_SERVER['PHP_AUTH_USER']) || empty($_SERVER['PHP_AUTH_PW']) || $_SERVER['PHP_AUTH_USER'] != $kullaniciAdi || $_SERVER['PHP_AUTH_PW'] != $sifre) { 

header('WWW-Authenticate: Basic realm=kullanici adi ve sifreyi girin'); 

die(header('HTTP/1.0 401 Unauthorized')); 

} 

} 



# Sayfa Sifreleme aciksa 

if($sayfaSifreleme =='1') { 

# Veri ve sifre kontrolu 

yetkiKontrol($kullaniciAdi,$sifre); 

} 
?>
<?php
if (isset($_REQUEST["kullanici"])) {
include("database.php");
$sql = ("SELECT * FROM `uye` WHERE `admin` LIKE '1'");
}
else {
header ("Location: admingiris.html");
}
?>
<html>

<head>
<meta http-equiv="Content-Language" content="tr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<link rel="stylesheet" type="text/css" href="images/style.css" />
<title>Php Stok Programı V1</title>
</head>

<body bgcolor="#3399FF">

<div align="center">
	<table border="0" width="990" cellpadding="0" height="526" style="border-collapse: collapse" bgcolor="#FFFFFF">
		<tr>
			<td width="396" height="66" align="center">
			<img border="0" src="images/logo.jpg" width="396" height="66"></td>
			<td width="66" height="66" align="center">
			<a href="firmakayit.php">
			<img border="0" src="images/firmaekle.jpg" width="66" height="66"></a></td>
			<td width="66" height="66" align="center">
			<a href="sat.php">
			<img border="0" src="images/sat.jpg" width="66" height="66"></a></td>
			<td width="66" height="66" align="center">
			<a href="al.php">
			<img border="0" src="images/al.jpg" width="66" height="66"></a></td>
			<td width="66" height="66" align="center"><a href="giris.html">
			<img border="0" src="images/giris.jpg" width="66" height="66" alt="Personel Girişi"></a></td>
			<td width="66" height="66" align="center">
			<a href="malzemekayit.php">
			<img border="0" src="images/malzeme.jpg" width="66" height="66" alt="Malzeme Kayıt Formu"></a></td>
			<td width="66" height="66" align="center">
			<a href="malzeme-listeleme.php">
			<img border="0" src="images/liste.jpg" width="66" height="66" alt="Malzeme Listeleme"></a></td>
			<td width="66" height="66" align="center">
			<a href="stok-yukselt.php">
			<img border="0" src="images/satis.jpg" width="66" height="66" alt="Stok Yükselt"></a></td>
			<td width="66" height="66" align="center">
			<a href="stok-azalt.php">
			<img border="0" src="images/alis.jpg" width="66" height="66" alt=" Stok Azalt"></a></td>
			<td width="66" height="66" align="center">
			<a href="cikis.php">
			<img border="0" src="images/cikis.jpg" width="66" height="66" alt="Personel Çıkışı"></a></td>
		</tr>
		<tr>
			<td width="796" colspan="10" align="center">
			<table border="0" width="990" cellspacing="0" cellpadding="0" height="459">
				<tr>
					<td width="120" height="60" align="center">
					<a href="stok-listele.php">
					<img border="0" src="images/stoklistele.jpg" width="120" height="60" alt="Stokta Olanları Listele"></a></td>
					<td width="870" rowspan="5" valign="top">
					<div align="center">
					<p align="center"></p>
					<p align="center"></p>
					<p align="center"></p>
					<p align="center"></p>
					<p align="center"><b>
					<font face="Agency FB" size="7" color="#FF0000">Yönetim 
					Paneli</font></b></p>
					<p align="center"><a href="onay.php">
					<img border="0" src="images/bekleyen.jpg" width="128" height="170"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="onayla.php">
					<img border="0" src="images/onay.jpg" width="128" height="170"></a></p>
					<p align="center"><a href="ekle.php">
					<img border="0" src="images/perekle.jpg" width="128" height="170"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="firmakayit.php">
					<img border="0" src="images/firmaekler.jpg" width="128" height="170"></a><br>
					<a href="firma-listeleme.php">
					<img border="0" src="images/1396.png" width="128" height="170" alt="Firmaları Listele"></a>
					</td>
				</tr>
				<tr>
					<td width="120" height="60" align="center">
					<a href="stok-biten.php">
					<img border="0" src="images/stokbiten.jpg" width="120" height="60" alt="Stokta Olmayanları Listele"></a></td>
				</tr>
				<tr>
					<td width="120" height="60" align="center">
					<a href="malzeme-listeleme.php">
					<img border="0" src="images/tumlistele.jpg" width="120" height="60" alt="Tümünü Listele"></a></td>
				</tr>
				<tr>
					<td width="120" align="center">
					<form name="arama" id="arama" action="arama.php" method="post">
					<input name="arama" id="arama" size="15" type="text">
					<input name="button" class="arama" type="submit" value="">
					</form>					
					</td>
				</tr>
				<tr>
					<td width="120" align="center">
					<a href="index.php">
					<img border="0" src="images/yanlogo.jpg" width="66" height="404" alt="Stok Takip Yazılımı Anasayfası"></a></td>
				</tr>
				<tr>
					<td width="120" height="20">
					<p align="center"><font face="Arial" size="1">
					<a href="" alt="Stok Takip Yazılımı V1.0">
					Php Stok Programı V1.0</a></font></td>
					<td width="870" height="20">
					<p align="center"><b><font face="Agency FB" size="2">2015 
					Copyright 
					| <a href="" alt="Cihan">
					Cihan </a> 
					Tüm Hakları Saklıdır.</font></b></td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>

</body>

</html>
<?php
if (isset($_REQUEST["kullanici"])) {
include("database.php");
$sql = ("select * from uye");
}
else {
header ("Location: uyari.html");
}
?>