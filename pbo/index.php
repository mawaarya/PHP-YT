<?php

require_once "database.php";

$usdb=new Database;
echo $usdb->insertData();
echo "<br>";
echo $usdb->db;
echo "<br>";
echo $usdb->ambil();
echo "<br>";
echo $usdb->selectData();
echo "<br>";
echo Database::selectData();
echo "<br>";
$uspenjualan=new Penjualan;
echo $uspenjualan->barang();
echo "<br>";
echo Penjualan::pelanggan();


?>