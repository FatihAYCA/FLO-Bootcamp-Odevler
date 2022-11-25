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
            <a href="index.php">Fiyat Güncelleme</a> - <a href="fatura.php">FATURA</a> 
</div>

<h2 style='text-align:center'>** Ot Master v1.0 **</h2>
<h3 style='text-align:center'>Ot Fiyatlarını Giriniz (1KG)</h3>


<?php
session_start();
$otlar = array();
$otlar[] = "Kekik";
$otlar[] = "Nane";
$otlar[] = "Fesleğen";
$otlar[] = "Reyhan";

echo "<form action='hesap.php' method='post' style='text-align:center;'>

<table style='border:1px solid black; margin-left:auto;margin-right:auto;'>
    <tr>
        <td width='35%'>Ot Türü</td>
        <td width='35%'>Fiyat(1KG)</td>
    </tr>";
    $sayac = 0;
foreach ($otlar as $ot ) {
    echo "<tr>
            <td>$ot</td>
            <td><input type='value' size='1' name='fiyat$sayac'></td>
        </tr>";
        $sayac++;
}
echo "</table><br>
<input type='submit' style='font-size:medium; margin-left:auto; margin-right:auto;' value='Fiyatları Kaydet'></form>";



?>


</body>
</html>