<meta http-equiv="refresh" content="0;URL=yonetim.php">
<?

include("database.php");

if (isset($_REQUEST["kullanici"])) {
include "database.php";
$sql = ("select * from uye");
}
else {
header ("Location: admingiris.html");
}

$id = $_GET['id'];

$sql = ("UPDATE uye SET onay = 1 WHERE id = $id");
$kayit = mysql_query($sql);

if (isset ($kayit)){
echo "";
}
else {
echo "Satýþ Yapýlamamaýþtýr.";
}
?>