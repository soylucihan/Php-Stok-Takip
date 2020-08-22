<?php
if (isset($_REQUEST["kullanici"])) {
include("database.php");
$sql = ("select * from uye");
}
else {
header ("Location: uyari.html");
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
<?php

if (isset($_REQUEST["kullanici"])) {
include "database.php";
$sql = ("select * from uye");
}
else {
header ("Location: uyari.html");
}

include("database.php");


$id = $_GET['id']; 
$sorgu = mysql_query("SELECT *  FROM `depo` WHERE `id` = $id LIMIT 0 , 1");  
while ($ysorgu = mysql_fetch_array($sorgu)) {


$urunadi 		= $ysorgu["urunadi"];
$malzemekodu 	= $ysorgu["malzemekodu"];
$urunkategorisi = $ysorgu["urunkategorisi"];
$birim 			= $ysorgu["birim"];
$miktar 		= $ysorgu["miktar"];
$personel 		= $ysorgu["personel"];
$aciklama 		= $ysorgu["aciklama"];
$birimfiyat		= $ysorgu["birimfiyat"];
$kdv	 		= $ysorgu["kdv"];
$toplamfiyat 	= $ysorgu["toplamfiyat"];
$fiyatbirimi 	= $ysorgu["fiyatbirimi"];
$resim 	= $ysorgu["resim"];
}
echo"<div id=\"urunguncelle\">";
echo"<form name=\"1\" method=\"post\" action=\"guncelle-tamamla.php\">";
echo"<div class=\"urunguncelle1\"><input type=\"text\" name=\"urunadi\"  size=\"25\" border=\"0\" value=\"$urunadi\"></div>";
echo"<div class=\"urunguncelle2\"><input type=\"text\" name=\"malzemekodu\"  size=\"25\" border=\"0\" value=\"$malzemekodu\"></div>";
echo"<div class=\"urunguncelle2\"><SELECT NAME=\"urunkategorisi\"  border=\"0\" value=\"$urunkategorisi\">";
echo"<OPTION VALUE=\"Güvenlik\">Güvenlik";
echo"<OPTION VALUE=\"Fotoğraf Kamera\">Fotoğraf & Kamera";
echo"<OPTION VALUE=\"Elektronik\">Elektronik";
echo"<OPTION VALUE=\"Giyim\">Giyim";
echo"<OPTION VALUE=\"Kitap Dergi\">Kitap & Dergi";
echo"<OPTION VALUE=\"Cep Telefonu\">Cep Telefonu";
echo"<OPTION VALUE=\"Halı\">Halı";
echo"<OPTION VALUE=\"Mobilya\">Mobilya";
echo"</SELECT></div>";
echo"<div class=\"urunguncelle2\"><SELECT NAME=\"birim\" border=\"0\" value=\"$birim\">";
echo"<OPTION VALUE=\"Adet\">Adet";
echo"<OPTION VALUE=\"Metre\">Metre";
echo"<OPTION VALUE=\"Litre\">Litre";
echo"<OPTION VALUE=\"Kilo\">Kilo";
echo"<OPTION VALUE=\"gram\">Gram";
echo"<OPTION VALUE=\"ton\">Ton";
echo"<OPTION VALUE=\"miligram\">Miligram";
echo"<OPTION VALUE=\"milimetre\">Milimetre";
echo"<OPTION VALUE=\"santim\">Santimetre";
echo"<OPTION VALUE=\"metreküp\">Metreküp";
echo"<OPTION VALUE=\"metrekare\">Metrekare";
echo"</SELECT></div>";
echo"<div class=\"urunguncelle2\"><input type=\"text\" name=\"miktar\"  size=\"25\" border=\"0\" value=\"$miktar\"></div>";
echo"<div class=\"urunguncelle2\"><input type=\"text\" name=\"resim\"  size=\"25\" border=\"0\" value=\"$resim\"> <a href=\"#\" onclick=\"javascript:window.open('upload/index.php','upload','height=450,width=450' )\"><font color=\"white\">Yükle!</font></a></div>";
echo"<div class=\"urunguncelle2\"><input type=\"hidden\" name=\"personel\"  size=\"25\" border=\"0\" value=\"$_REQUEST[kullanici]\"></div>";
echo"<div class=\"urunguncelle2\"><input type=\"text\" name=\"aciklama\"  size=\"25\" value=\"$aciklama\"></div>";
echo"<div class=\"urunguncelle2\"><input type=\"text\" name=\"id\"  size=\"25\" value=\"$id\"></div>";
echo"<div class=\"urunguncelle2\"><input type=\"text\" name=\"birimfiyat\"  size=\"25\" value=\"$birimfiyat\"></div>";
echo"<div class=\"urunguncelle2\"><input type=\"text\" name=\"kdv\"  size=\"25\" value=\"$kdv\"></div>";
echo"<div class=\"urunguncelle2\"><input type=\"text\" name=\"toplamfiyat\"  size=\"25\" value=\"$toplamfiyat\"></div>";
echo"<div class=\"urunguncelle2\"><SELECT NAME=\"fiyatbirimi\" border=\"0\">";
echo"<OPTION VALUE=\"Tl\">Tl<OPTION VALUE=\"Usd\">Usd<OPTION VALUE=\"Euro\">Euro</SELECT></div>";
echo"<input type=\"submit\" class=\"kaydet\" name=\"button\" value=\"\" class=\"gonder\"></div>";

if (isset($_REQUEST["kullanici"])) {
include "database.php";
$sql = ("select * from uye");
}
else {
header ("Location: uyari.html");
}
?>
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
					<a href="http://www.cihankaraca.com.tr/stok/phpstokv1.rar" alt="Stok Takip Yazılımı V1.0">
					Php Stok Programı V1.0</a></font></td>
					<td width="870" height="20">
					<p align="center"><b><font face="Agency FB" size="2">2010 
					Copyright <a href="http://www.kraldizayn.com" alt="Web Tasarım Dizayn">
					Kraldizayn</a> 
					| <a href="http://www.cihankaraca.com.tr" alt="Cihan KARACA">
					Cihan KARACA</a> 
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