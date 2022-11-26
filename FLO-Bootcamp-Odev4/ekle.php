<?php
require_once 'baglan.php';
include 'myclass.php';
$baglan = baglan();

// if ($_POST["tc"] != 11) {
//     echo "<script>
//     alert('Bilgiler Geçersiz!');
//     window.top.location = 'index.php';
//     </script>";
//     die();
// }

$adsoyad = $_POST["adsoyad"]; 
$tc = $_POST["tc"];

$durum = new dogrulama();
$sondurum = $durum->islem1($tc);

$sorgu = $baglan->prepare('insert into dogrula values(?,?,?,?)');
$ekle = $sorgu->execute(array(NULL,"$adsoyad","$tc","$sondurum"));
header('location:index.php');
?>