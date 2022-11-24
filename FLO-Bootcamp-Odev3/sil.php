<?php
require_once 'baglan.php';
$baglan = baglan();

$silme = $_GET["id"];  //Adres çubuğundan silinecek kaydın ID No'sunu aldım

$sorgu = $baglan->prepare("delete from rehber1 where id=?");
$sil = $sorgu->execute(array($silme));  //Adres çubuğundan gelen ID No'lu satırı sildim

header('Location: liste.php'); 
?>