<?php
$baglan = new PDO("mysql:host=localhost;dbname=rehber;charset=utf8","fatih","1234");

$silme = $_GET["id"];  //ADRES ÇUBUĞUNDAN SİLİNECEK KAYDIN ID NOSUNU ALDIM

$sorgu = $baglan->prepare("delete from rehber1 where id=?");
$sil = $sorgu->execute(array($silme));  //ADRES ÇUBUĞUNDAN GELEN ID NOLU SATIRI VERİTABANINDAN SİLDİM

header('Location: liste.php'); //LİSTE.PHP ADRESİNE GERİ DÖNDÜM
?>