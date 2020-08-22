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
<meta http-equiv="refresh" content="0;URL=index.php">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
<title><?php echo $site_title ?> v1.0</title>
</head>
<body>

<?php

$kayittipi		= $_POST["kayittipi"];
$yetkili 		= $_POST["yetkili"];
$firmaadi		= $_POST["firmaadi"];
$sektor 		= $_POST["sektor"];
$email 			= $_POST["email"];
$web 			= $_POST["web"];
$tel 			= $_POST["tel"];
$fax 			= $_POST["fax"];
$adres 			= $_POST["adres"];
$il 			= $_POST["il"];
$ilce 			= $_POST["ilce"];
$vergidairesi 	= $_POST["vergidairesi"];
$vergino 		= $_POST["vergino"];
$personel 		= $_POST["personel"];

if(empty($yetkili)){
echo("<center><b>Yetkili Adını Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else
if(empty($firmaadi)){
echo("<center><b>Firma Adını Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else
if(empty($email)){
echo("<center><b>E-Mail Adresini Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else
if(empty($web)){
echo("<center><b>İnternet Adresini Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else
if(empty($tel)){
echo("<center><b>Telefon Numarasını Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else
if(empty($fax)){
echo("<center><b>Fax Numarasını Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else
if(empty($adres)){
echo("<center><b>Adres Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else
if(empty($ilce)){
echo("<center><b>ilçesini Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else
if(empty($vergidairesi)){
echo("<center><b>Vergi Dairesini Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else
if(empty($vergino)){
echo("<center><b>Vergi Numarasını Yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else
{
include "database.php";
$firmakayit = "INSERT INTO `ckaraca_zdefter`.`firma` (`kayittipi` ,`yetkili` ,`firmaadi` ,`sektor` ,`email` ,`web` ,`tel` ,`fax` ,`adres` ,`il` ,`ilce` ,`vergidairesi` ,`vergino` ,`personel`,`zaman` )
VALUES ('$kayittipi', '$yetkili', '$firmaadi', '$sektor', '$email', '$web', '$tel', '$fax', '$adres', '$il', '$ilce', '$vergidairesi', '$vergino','$personel', NOW() ) ";
$kayit = mysql_query($firmakayit);
}
if (isset ($kayit)){
echo "Firma Kaydınız Yapılmıştır.";
}
else {
echo "Firma Kayıt Başarısız";
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