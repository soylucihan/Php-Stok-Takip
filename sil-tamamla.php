<meta http-equiv="refresh" content="0;URL=malzeme-listeleme.php">
<?
require('database.php'); 
include "ayarlar.php";
$id = $_POST['id'];

if (isset($_REQUEST["kullanici"])) {
include "database.php";
$sql = ("select * from uye");
}
else {
header ("Location: uyari.html");
}

$sil = ("DELETE FROM depo WHERE id = $id");
$kayit = mysql_query($sil);

if (isset ($kayit)){
echo "Stok Kaydýnýz Yapýlmýþtýr.";
}
else {
echo "Stok Kayýt Baþarýsýz";
}

?>