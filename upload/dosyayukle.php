<?php

$kaynak      =$_FILES['file']['tmp_name'];//Burasý resminiz kök klasörünün yerini verir
//$isim        =$_FILES['file']['name']; //Resminizin adýný verir
$tip         =$_FILES['file']['type']; // Resminizin tipini verir
$buyukluk    =$_FILES['file']['size']; //Büyüklüðünü verir




$rand =substr(md5(uniqid(rand())),0,5);//Burada oluþturduðumuz rastgele sayýyý yüklediðimiz resimle birleþtiriyoruz.


$desteklenenformatlar = array ("image/jpeg","image/pjpeg","image/png","image/gif");

$kaydedilecekyer = "resimler";
$tag1 = "[img";



if (in_array ($_FILES['file']['type'], $desteklenenformatlar))
{


$dosya = $kaydedilecekyer . "/".$rand.$_FILES['file']['name'];


    if (move_uploaded_file ($_FILES['file']['tmp_name'], $dosya))
        {
            echo "<b>Direkt link : </b>http://localhost/site1/upload/$dosya<br/>";
        }
}
?>
<img src="<?=$dosya?>" /> 