<?php

// konfigurasi koneksi ke postgre
$host       =  "10.100.112.80";
$dbuser     =  "itdev";
$dbpass     =  "bdk1dev";
$port       =  "5432";
$dbname    =  "visionanalytics";
$dbtable   = "view_sprint_saldoharian"

// script koneksi php postgree
$link = new PDO("pgsql:dbname=$dbname;host=$host", $dbuser, $dbpass); 
 
if($link)
{
    echo "Koneksi Berhasil";
}else
{
    echo "Gagal melakukan Koneksi";
}
?>

