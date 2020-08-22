<?
include "database.php";
include "ayarlar.php";

if (isset($_REQUEST["kullanici"])) {
include("database.php");
$sql = ("select * from uye");
}
else {
header ("Location: uyari.html");
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
<title><?php echo $site_title ?> v1.0</title>
</head>
<body>
<meta http-equiv="refresh" content="0;URL=malzeme-listeleme.php">
<?php

$urunadi 		= $_POST["urunadi"];
$malzemekodu 	= $_POST["malzemekodu"];
$urunkategorisi = $_POST["urunkategorisi"];
$birim 			= $_POST["birim"];
$miktar 		= $_POST["miktar"];
$personel 		= $_POST["personel"];
$aciklama 		= $_POST["aciklama"];
$birimfiyat 	= $_POST["birimfiyat"];
$kdv 			= $_POST["kdv"];
$toplamfiyat 	= $_POST["toplamfiyat"];
$fiyatbirimi 	= $_POST["fiyatbirimi"];
$resim 	= $_POST["resim"];

if(empty($urunadi)){
echo("<center><b>Ürün Adını Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else
if(empty($miktar)){
echo("<center><b>Ürün Miktarını Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else
if(empty($personel)){
echo("<center><b>Personel İsmini Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else
if(empty($malzemekodu)){
echo("<center><b>Malzeme Kodunu Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else
if(empty($birimfiyat)){
echo("<center><b>Birim Fiyatını Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else
if(empty($kdv)){
echo("<center><b>Kdv Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else
if(empty($toplamfiyat)){
echo("<center><b>Toplam Fiyatı Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else{
include "database.php";
$sql = (" insert into `depo` (`resim`,`urunadi`,`malzemekodu`,`urunkategorisi`,`birim`,`miktar`,`personel`,`aciklama`,`birimfiyat`,`kdv`,`toplamfiyat`,`fiyatbirimi`,`zaman`)
VALUES ('$resim','$urunadi','$malzemekodu','$urunkategorisi','$birim','$miktar','$personel','$aciklama','$birimfiyat','$kdv','$toplamfiyat','$fiyatbirimi', NOW() );");
$kayit = mysql_query($sql);
}
if (isset ($kayit)){
echo "Stok Kaydınız Yapılmıştır.";
}
else {
echo "Stok Kayıt Başarısız";
}
if (isset($_REQUEST["kullanici"])) {
include("database.php");
$sql = ("select * from uye");
}
else {
header ("Location: uyari.html");
}
?> 
</body>
</html>