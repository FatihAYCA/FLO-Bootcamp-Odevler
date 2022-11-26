<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>** Cevher v1.0 **</title>
</head>
<body >
<div style="text-align:center;">
<a href="index.php"><h2>Yeni Fatura</h2></a>
</div>
<h1 style='text-align:center'>** Cevher v1.0 **</h1>

<?php
include 'fonksiyon.php';

$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$kod = $_POST["kod"];
$buyukluk = $_POST["buyukluk"];
$temizlik = $_POST["temizlik"];
$miktar = $_POST["miktar"];

$cevher = cevherIsim($kod);//Cevher adı
$normalfiyat = cevherFiyat($kod);//Normal birim fiyat
$taneEtkisi = taneEtkisi($buyukluk,$normalfiyat);//Tane etkili fiyat
$temizliketkisi = temizlikEtkisi($temizlik,$taneEtkisi);//Temizlik etkisi eklendikten sonraki fiyat
$temizlikfarki = $temizliketkisi - $taneEtkisi;
$toplam = $temizliketkisi * $miktar;//Toplam fiyat
$kdv = $toplam * 8 / 100;
$geneltoplam = $toplam + $kdv;

if ($buyukluk == 1) {
    $tane = "Erik";
    $yuzde = "-%15";
} elseif ($buyukluk == 2) {
    $tane = "Portakal";
    $yuzde = "-%10";
} elseif ($buyukluk == 3) {
    $tane = "Karpuz";
    $yuzde = "%0";
}

echo "<table border='1' style='border:1px solid black; margin-left:auto;margin-right:auto;'>
<tr><td width='30%' colspan='2'><b><h2 style='text-align:center'>** Fatura **</h2></b></td></tr>
<tr><td width='35%'><b>Alıcı</b></td>
<td width='35%'>$ad $soyad</td></tr>
<tr><td width='25%'><b>Cevher Türü</b></td>
<td width='15%'>$cevher</td></tr>
<tr><td width='15%'><b>Normal Birim Fiyat</b></td>
<td width='15%'>$normalfiyat TON/TL</td></tr>
<tr><td width='15%'><b>Tane</b></td>
<td width='15%'>$tane ($yuzde)</td></tr>
<tr><td width='15%'><b>$tane Fiyat</b></td>
<td width='15%'>$taneEtkisi TON/TL</td></tr>
<tr><td width='15%'><b>Temizlik</b></td>
<td width='15%'>%$temizlik</td></tr>
<tr><td width='15%'><b>Etkisi</b></td>
<td width='15%'>$temizlikfarki TL</td></tr>
<tr><td width='15%' colspan='2' style='text-align:center'><b>Temizlik Etkisi Sonrası</b></td></tr>
<tr><td width='15%'><b>Birim Fiyat</b></td>
<td width='15%'>$temizliketkisi TON/TL</td></tr>
<tr><td width='15%'><b>Toplam</b></td>
<td width='15%'>$toplam TL</td></tr>
<tr><td width='15%'><b>KDV (%8)</b></td>
<td width='15%'>$kdv TL</td></tr>
<tr><td width='15%'><b>Genel Toplam</b></td>
<td width='15%'>$geneltoplam TL</td></tr>
<tr><td width='15%' colspan='2' style='text-align:center'><b>** Mega Madencilik, 2016 **</b></td></tr>


"

?>

</body>
</html>