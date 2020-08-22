<?php


// MySQL Bilgileri

$database_host = "localhost";
$database_user = "root";
$database_name = "stok22";
$database_pass = "";

// MySQL Baðlantýsý

$baglan = mysql_connect("$database_host","$database_user","$database_pass") or die (mysql_error());
mysql_select_db("$database_name",$baglan) or die (mysql_error());

// Türkçe Karakter Sorunu
mysql_query("SET NAMES 'latin5'");

?>