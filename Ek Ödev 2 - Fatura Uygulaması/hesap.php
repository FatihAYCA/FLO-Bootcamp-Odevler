<?php
session_start();
$fiyat = array();
for ($i=0; $i < 4; $i++) {
    $fiyat[$i] = $_POST["fiyat$i"];
    $_SESSION["fiyat"][$i] = $fiyat["$i"];
}
$miktar = $_POST["miktar"];
$urun = $_POST["urun"];
$tazelik = $_POST["tazelik"];
header('location:verigiris.php');
?>