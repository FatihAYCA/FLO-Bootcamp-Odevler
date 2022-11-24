<?php
error_reporting(0);
require_once 'baglan.php';
$baglan = baglan();


$adet = array();
for ($i=0; $i < 3; $i++) {
        $adet[$i]=$_POST["urun$i"];
}

$sorgu = $baglan->query('select * from sepet1');
$liste = $sorgu->fetchAll();
$sayac2 = $sorgu->rowCount();

for ($i=0; $i < $sayac2; $i++) { 
    $ekle = $liste[$i]["adet"];
    $ekle += $adet[$i];
    $sorgu = $baglan->exec("update sepet1 set adet=$ekle where id=($i+1)");
};
header('location:index.php');
?>