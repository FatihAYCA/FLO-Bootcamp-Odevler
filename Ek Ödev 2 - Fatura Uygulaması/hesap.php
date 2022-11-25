<?php
session_start();
$fiyat = array();
for ($i=0; $i < 4; $i++) {
    $fiyat[$i] = $_POST["fiyat$i"];
    $_SESSION["fiyat$i"] = $fiyat["$i"];
}
var_dump($_SESSION);
$fatih = $_SESSION["fiyat0"];
echo $fatih;

header('location:fatura.php');
?>