<meta http-equiv="refresh" content="0;URL=malzeme-listeleme.php">
<?php 
require('database.php'); 

if (isset($_REQUEST["kullanici"])) {
include("database.php");
$sql = ("select * from uye");
}
else {
header ("Location: uyari.html");
}

$id = $_POST['id'];
$urunadi = $_POST['urunadi']; 
$malzemekodu = $_POST['malzemekodu']; 
$urunkategorisi = $_POST['urunkategorisi']; 
$birim = $_POST['birim']; 
$miktar = $_POST['miktar']; 
$personel = $_POST['personel']; 
$aciklama = $_POST['aciklama']; 
$birimfiyat = $_POST['birimfiyat']; 
$kdv = $_POST['kdv']; 
$toplamfiyat = $_POST['toplamfiyat']; 
$fiyatbirimi = $_POST['fiyatbirimi']; 
$resim = $_POST['resim']; 

include("database.php");

$sql = ("UPDATE depo SET id = '$id',resim = '$resim',urunadi = '$urunadi', malzemekodu = '$malzemekodu', urunkategorisi = '$urunkategorisi', birim = '$birim', personel = '$personel', birimfiyat = '$birimfiyat', kdv = '$kdv', toplamfiyat = '$toplamfiyat', fiyatbirimi = '$fiyatbirimi' WHERE id = $id");
$kayit = mysql_query($sql);
if (isset ($kayit)){
echo "Stok Kaydýnýz Yapýlmýþtýr.";
}
else {
echo "Stok Kayýt Baþarýsýz";
}

if (isset($_REQUEST["kullanici"])) {
include("database.php");
$sql = ("select * from uye");
}
else {
header ("Location: uyari.html");
}
?> 