<meta http-equiv="refresh" content="0;URL=yonetim.php">

<?php

$ad = $_POST['ad'];
$kullaniciadi = $_POST['kullaniciadi'];
$sifre = $_POST['sifre'];
$posta = $_POST['posta'];
$hakkimda = $_POST['hakkimda'];
$onay = $_POST['onay'];

if(empty($ad)){
echo("<center><b>Adýnýzý Yazmadýnýz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}elseif(empty($kullaniciadi)){
echo("<center><b>Kullanýcý Adýnýzý Yazmadýnýz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}elseif(empty($sifre)){
echo("<center><b>Þifrenizi Yazmadýnýz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}elseif(empty($posta)){
echo("<center><b>E-Postanýzý Yazmadýnýz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else{
include("database.php");
$sql = "insert into uye (ad, kullaniciadi, sifre, email, hakkimda, onay)
values ('$ad', '$kullaniciadi', '$sifre', '$posta','$hakkimda','$onay')";
$kayit = mysql_query($sql);
}
if (isset ($kayit)){
echo "Üye Kaydý Yapýlmýþtýr.";
}
else {
echo "Kayýt Baþarýsýz";
}
?> 
