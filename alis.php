 <meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<?
include "database.php";
$firma		= $_POST["firma"];
$depo		= $_POST["depo"];
$miktar2	= $_POST["miktar2"];
$sorgu = mysql_query("SELECT *  FROM depo WHERE id = $depo");  
while ($ysorgu = mysql_fetch_array($sorgu)) {
$id			=$ysorgu["id"];
$urunadi	=$ysorgu["urunadi"];
$birimfiyat	=$ysorgu["birimfiyat"];
$kdv	=$ysorgu["kdv"];
$toplamfiyat	=$ysorgu["toplamfiyat"];
$fiyatbirimi	=$ysorgu["fiyatbirimi"];
$malzemekodu	=$ysorgu["malzemekodu"];
$personel	=$ysorgu["personel"];
}
$sorgu = mysql_query("SELECT *  FROM firma WHERE id = $firma");  
while ($ysorgu = mysql_fetch_array($sorgu)) {
$id			=$ysorgu["id"];
$yetkili	=$ysorgu["yetkili"];
$firmaadi	=$ysorgu["firmaadi"];
$tel	=$ysorgu["tel"];
$adres	=$ysorgu["adres"];
echo"<div align=\"center\"><table border=\"1\" width=\"817\" cellspacing=\"0\" cellpadding=\"0\" height=\"130\">";
echo"<tr><td width=\"116\"><p align=\"center\"><b>Adet</b></td><td width=\"91\"><p align=\"center\"><b>Malzeme Kodu</b></td>";
echo"<td width=\"143\"><p align=\"center\"><b>Malzeme</b></td><td width=\"92\"><p align=\"center\"><b>Teslim Alan</b></td>";
echo"<td width=\"132\"><p align=\"center\"><b>Birim Fiyat</b></td><td width=\"105\"><p align=\"center\"><b>Kdv</b></td>";
echo"<td width=\"122\" colspan=\"2\"><p align=\"center\"><b>Toplam Fiyat</b></td></tr><tr>";
echo"<td width=\"116\"><p align=\"center\"><b>$miktar2</b></td><td width=\"91\"><p align=\"center\"><b>$malzemekodu</b></td>";
echo"<td width=\"143\"><p align=\"center\"><b>$urunadi</b></td><td width=\"92\"><p align=\"center\"><b>cihankaraca</b></td>";
echo"<td width=\"132\"><p align=\"center\"><b>$birimfiyat $fiyatbirimi</b></td>";
echo"<td width=\"105\"><p align=\"center\"><b>$kdv $fiyat birimi</b></td>	<td width=\"122\" colspan=\"2\">";
echo"<p align=\"center\"><b>$toplamfiyat $fiyatbirimi</b></td></tr><tr>";
echo"<td width=\"116\"><p align=\"center\"><b>Firma</b></td><td width=\"91\">";
echo"<p align=\"center\"><b>Yetkili</b></td><td width=\"143\"><p align=\"center\"><b>Telefon</b></td>";
echo"<td width=\"92\"><p align=\"center\"><b>Teslim Eden</b></td><td width=\"311\" colspan=\"3\">";
echo"<p align=\"center\"><b>Adres</b></td><td width=\"121\"><p align=\"center\"><b>Tarih</b></td>";
echo"</tr><tr><td width=\"116\" align=\"center\"><b>$firmaadi</b></td>";
echo"<td width=\"91\" align=\"center\"><b>$yetkili</b></td><td width=\"143\" align=\"center\"><b>$tel</b></td>";
echo"<td width=\"92\" align=\"center\"><input type=\"text\" name=\"talan\" size=\"15\"></td>";
echo"<td width=\"311\" colspan=\"3\" align=\"center\"><p align=\"center\"><b>$adres</b></td>";
echo"<td width=\"121\" align=\"center\"><b><input type=\"text\" name=\"tarih\" size=\"21\"></b></td></tr></table><br><br><br>";
echo"<a href=\"alis-tamamla.php?malzemekodu=$malzemekodu&miktar2=$miktar2\"><img src=\"images\sec2.jpg\" alt=\"İşlemi Tamamla\" border=\"0\"></a> - ";
echo"<a href=\"javascript:print('satis.php' )\"><img src=\"images\yazdir.png\" alt=\"yazıcı Çıktısı Al\" border=\"0\"></a>";
}
?>