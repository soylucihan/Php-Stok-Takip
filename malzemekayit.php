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
<div id="urunkayit">
<form name="1" method="post" action="kaydet.php">
<div class="urunkayit1"><input type="text" name="urunadi"  size="25" border="0"></div>
<div class="urunkayit2"><input type="text" name="malzemekodu"  size="25" border="0"></div>
<div class="urunkayit2"><SELECT NAME="urunkategorisi"  border="0">
<OPTION VALUE="Güvenlik">Güvenlik
<OPTION VALUE="Fotoğraf Kamera">Fotoğraf & Kamera
<OPTION VALUE="Elektronik">Elektronik
<OPTION VALUE="Giyim">Giyim
<OPTION VALUE="Kitap Dergi">Kitap & Dergi
<OPTION VALUE="Cep Telefonu">Cep Telefonu
<OPTION VALUE="Halı">Halı
<OPTION VALUE="Mobilya">Mobilya
</SELECT></div>
<div class="urunkayit2"><SELECT NAME="birim" border="0">
<OPTION VALUE="Adet">Adet
<OPTION VALUE="Metre">Metre
<OPTION VALUE="Litre">Litre
<OPTION VALUE="Kilo">Kilo
<OPTION VALUE="gram">Gram
<OPTION VALUE="ton">Ton
<OPTION VALUE="miligram">Miligram
<OPTION VALUE="milimetre">Milimetre
<OPTION VALUE="santim">Santimetre
<OPTION VALUE="metreküp">Metreküp
<OPTION VALUE="metrekare">Metrekare
</SELECT></div>
<div class="urunkayit2"><input type="text" name="miktar"  size="25" border="0"></div>
<div class="urunkayit2"><input type="text" name="resim"  size="25" border="0"> <a href="#" onclick="javascript:window.open('upload/index.php','upload','height=450,width=450' )"><font color="white">Yükle!</font></a></div>
<div class="urunkayit2"><input type="hidden" name="personel"  size="25" border="0" value="<? include("database.php"); echo"$_REQUEST[kullanici]";?>"></div>
<div class="urunkayit2"><input type="text" name="aciklama"  size="25"></div>
<div class="urunkayit2"><input type="text" name="birimfiyat"  size="25"></div>
<div class="urunkayit2"><input type="text" name="kdv"  size="25"></div>
<div class="urunkayit2"><input type="text" name="toplamfiyat"  size="25"></div>
<div class="urunkayit2"><SELECT NAME="fiyatbirimi" border="0">
<OPTION VALUE="Tl">Tl
<OPTION VALUE="Usd">Usd
<OPTION VALUE="Euro">Euro
</SELECT></div>
<input type="submit" class="kaydet" name="button" value="" class="gonder">
</div>
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