<meta http-equiv="refresh" content="0;URL=malzeme-listeleme.php">
<?
include "database.php";

$malzemekodu		= $_GET["malzemekodu"];
$miktar2	= $_GET["miktar2"];
$sorgu = mysql_query("SELECT *  FROM depo WHERE malzemekodu LIKE '$malzemekodu'");  
while ($ysorgu = mysql_fetch_array($sorgu)) {
$id			=$ysorgu["id"];
$miktar 	= $ysorgu["miktar"];

$miktar = $miktar;
$miktar2 = $miktar2;
$cikar = $miktar - $miktar2;
}
$sql = ("UPDATE depo SET miktar = $cikar WHERE id=$id");
$kayit = mysql_query($sql);

if (isset ($kayit)){
echo "";
}
else {
echo "Satýþ Yapýlamamaýþtýr.";
}
?>