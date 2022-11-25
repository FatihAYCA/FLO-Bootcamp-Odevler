<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>** Ot Master v1.0 **</title>
</head>
<body >
<div style="text-align:center;">
<a href="index.php">Fiyat Güncelleme</a>
<h2 style='text-align:center'>** Ot Master v1.0 **</h2>
<h2 style='text-align:center'>Ot Fiyatlarını Giriniz (1KG)</h2>

<?php
session_start();
error_reporting(0);
$otlar = array();
$otlar[] = "Kekik";
$otlar[] = "Nane";
$otlar[] = "Fesleğen";
$otlar[] = "Reyhan";
$_SESSION["otlar"] = $otlar;

$price = array();
for ($i=0; $i < 4; $i++) { 
    $price[$i] = $_SESSION["fiyat"][$i];
}

echo "<form action='fatura.php' method='post' style='text-align:center;'>
    <table border='1' style='border:2px solid black;borderline:1px; margin-left:auto;margin-right:auto;'>
    <tr>
        <td width='45%'><b>Ot Türü</b></td>
        <td width='25%'><b>Taze Fiyat (1KG)</b></td>
    </tr>";

    for ($i=0; $i < 4; $i++) { 
        echo "<tr>
        <td>$otlar[$i]</td>
        <td>$price[$i]</td>
        </tr>";
    }
echo "</table><br>
        <td><b>Miktar Giriniz (KG) : <b><input type='number' name='miktar'size ='2'  style='text-align:center' required></input></td><br><br>
        <select name='urun' style='font-size:20px;'>
        <option value='Kekik'>Kekik</option>
        <option value='Nane'>Nane</option>
        <option value='Fesleğen'>Fesleğen</option>
        <option value='Reyhan'>Reyhan</option>
        </select>
        <select name='tazelik' style='font-size:20px;'>
        <option value='Taze'>Taze</option>
        <option value='Taze değil'>Taze Değil</option></select>
        <br><br><input type='submit' style=' text-align:center; font-size:medium ; color:aliceblue ; background-color: #4472C4; border: 0.5pt ridge #101B2E; float: center;' value='Fatura Çıktısı Al'></form><br><br>";
?>

</body>
</html>