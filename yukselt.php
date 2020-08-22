<meta http-equiv="refresh" content="0;URL=malzeme-listeleme.php">
<?

include("database.php");

if (isset($_REQUEST["kullanici"])) {
include "database.php";
$sql = ("select * from uye");
}
else {
header ("Location: uyari.html");
}

$id = $_POST['id'];
$miktar2 = $_POST['miktar2']; 

$sorgu = mysql_query("SELECT * FROM depo WHERE id = $id");  
while ($ysorgu = mysql_fetch_array($sorgu)) {

$miktar 		= $ysorgu["miktar"];

$miktar = $miktar;
$miktar2 = $miktar2;
$cikar = $miktar + $miktar2;

} 

$sql = ("UPDATE depo SET miktar = $cikar WHERE id = $id");
$kayit = mysql_query($sql);

if (isset ($kayit)){
echo "";
}
else {
echo "Satýþ Yapýlamamaýþtýr.";
}
?>