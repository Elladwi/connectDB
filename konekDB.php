<?php

// konfigurasi koneksi ke postgre
$host       =  "";
$dbuser     =  "";
$dbpass     =  "";
$port       =  "";
$dbname    =  "";
$dbtable   = ""

// script koneksi php postgree
$link = new PDO("pgsql:dbname=$dbname;host=$host", $dbuser, $dbpass, $dbtable); 
 
if($link)
{
    echo "Koneksi Berhasil";
}else
{
    echo "Gagal melakukan Koneksi";
}
?>

