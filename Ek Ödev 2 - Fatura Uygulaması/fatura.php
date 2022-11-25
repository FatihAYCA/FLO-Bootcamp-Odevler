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

<h2 style='text-align:center'>Ot Fiyatlarını Giriniz (1KG)</h2>

<?php
session_start();
error_reporting(0);
$otlar = array();
$otlar[] = "Kekik";
$otlar[] = "Nane";
$otlar[] = "Fesleğen";
$otlar[] = "Reyhan";

$price = array();
for ($i=0; $i < 4; $i++) { 
    $price[$i] = $_SESSION["fiyat$i"];
}

echo "<form action='deneme.php' method='post' style='text-align:center;'>
    <table border='1' style='border:2px solid black;borderline:1px; margin-left:auto;margin-right:auto;'>
    <tr>
        <td width='35%'><b>Ot Türü</b></td>
        <td width='20%'><b>Fiyat (1KG)</b></td>
        <td width='15%'><b>Kg Giriniz (Taze)</b></td>
        <td width='15%'><b>Kg Giriniz (Taze Değil)</b></td>
    </tr>";

    for ($i=0; $i < 4; $i++) { 
        echo "<tr>
        <td width='25%'>$otlar[$i]</td>
        <td width='25%''>$price[$i]</td>
        <td><input type='text' name='tazeurunkg$i'size ='1'  style='text-align:center'></input></td>
        <td><input type='text' name='urunkg$i'size ='1'  style='text-align:center'></input></td>
        </tr>";
    }
echo "</table><input type='submit' style=' text-align:center; font-size:medium ; color:aliceblue ; background-color: #4472C4; border: 0.5pt ridge #101B2E; float: center;' value='Bilgileri Kaydet'></form><br><br>";


//Ot Türünü Kullanıcıdan İstedim
// echo "<form method='POST' action='fatura.php'>Ürün Seçiniz:
//     <select name='urun'>";
// for ($i=0; $i < 4; $i++) { 
//     echo "
//     <option value='$otlar[$i]'>$otlar[$i]</option>";
// }

// echo "</select><input type='submit'></form>";
// $urun = $_POST["urun"];
// $_SESSION["secilenurun"] = $urun;
// echo "<form method='POST' action='fatura.php'>Tazelik Durumu:
//     <select name='tazelik'>
//     <option value='taze'>Taze</option>
//     <option value='degil'>Taze Değil</option>
// </select><input type='submit'></form>";
// $tazelik = $_POST["tazelik"];


//     echo "<form method='POST' action=''>Ürün Seçiniz:
//         <select name='urun'>";
//     for ($i=0; $i < 4; $i++) { 
//         echo "
//         <option value='$otlar[$i]'>$otlar[$i]</option>";
//     }
//     echo "</select><input type='submit'></form>";
//     $_SESSION["secilenurun"] = $_POST["urun"];

//     echo "<form method='POST' action='' name='tazelik'>Tazelik Durumu:
//         <select name='tazelik'>
//         <option value='taze'>Taze</option>
//         <option value='degil'>Taze Değil</option>
//     </select><input type='submit'></form>";
//     $_SESSION["tazelikdurum"] = $_POST["tazelik"];

// var_dump($_SESSION);
// echo $secilen;
?>

</body>
</html>