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
include "database.php";
include "ayarlar.php";
$sayfa = $_GET['sayfa'] ? $_GET['sayfa'] : 0;  
$sayfabasi=50;  
$sorgu=mysql_query("SELECT * FROM `firma` ORDER BY `firma`.`id` ASC"); 
$toplam=mysql_num_rows($sorgu);
$kacsayfa=ceil($toplam/$sayfabasi);
$basla=$sayfa*$sayfabasi; 
echo"<table border=\"1\" width=\"870\" cellspacing=\"0\" cellpadding=\"0\" height=\"63\">";
echo"<tr><td width=\"20\" height=\"30\" align=\"center\">";
echo"<font face=\"Agency FB\">No</font></td><td width=\"150\" height=\"30\" align=\"center\"><font face=\"Agency FB\">Firma Adı</font></td><td width=\"100\" height=\"30\" align=\"center\"><font face=\"Agency FB\">Yetkili</font></td>";
echo"<td width=\"80\" height=\"30\" align=\"center\"><font face=\"Agency FB\">Tipi</font></td><td width=\"80\" height=\"30\" align=\"center\">";
echo"<font face=\"Agency FB\">Kategori</font></td><td width=\"80\" height=\"30\" align=\"center\"><font face=\"Agency FB\">E-Mail</font></td>";
echo"<td width=\"80\" height=\"30\" align=\"center\"><font face=\"Agency FB\">Web</font></td>";
echo"<td width=\"60\" height=\"30\" align=\"center\"><font face=\"Agency FB\">Telefon</font></td><td width=\"60\" height=\"30\" align=\"center\"><font face=\"Agency FB\">Fax</font></td><td width=\"50\" height=\"30\" align=\"center\"><font face=\"Agency FB\">İl</font></td><td width=\"110\" height=\"30\" align=\"center\"><font face=\"Agency FB\">Adres</font></td></tr>";

$bilgi = mysql_query("SELECT * FROM `firma` ORDER BY `firma`.`id` ASC limit $basla, $sayfabasi");	
if($bilgi)
	{	
	while($satir = mysql_fetch_array($bilgi))
	{
	$mesaj = $satir['mesaj'];
echo"<tr><td width=\"20\" height=\"30\">$satir[id]</td>";
echo"<td width=\"150\" height=\"30\">$satir[firmaadi]</td>";
echo"<td width=\"100\" height=\"30\">$satir[yetkili]</td>";
echo"<td width=\"80\" height=\"30\">$satir[kayittipi]</td><td width=\"80\" height=\"30\">$satir[sektor]</td>";
echo"<td width=\"80\" height=\"30\">$satir[email]</td><td width=\"80\" height=\"30\">$satir[web]</td>";
echo"<td width=\"60\" height=\"30\">$satir[tel]</td>";
echo"<td width=\"60\" height=\"30\">$satir[fax]</td>";
echo"<td width=\"50\" height=\"30\">$satir[il]</td>";
echo"<td width=\"110\" height=\"30\">$satir[adres]</td></tr>";
	}

}
echo"</table>";
for ($i=0;$i<$kacsayfa;$i++) { 
if ($sayfa == $i) 
echo "[<b>".$i."</b>]";
else
echo "<a href=liste.php?sayfa=".$i.">".$i."</a>";
    } 
echo"</center>";
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