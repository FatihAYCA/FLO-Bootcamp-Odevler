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
<a href="index.php">Fiyat Güncelleme</a> - <a href="verigiris.php">Ürün Değiştir</a>
</div>
<h2 style='text-align:center'>** Ot Master v1.0 **</h2>
<h2 style='text-align:center'>******</h2>

<?php
session_start();
//Fonksiyonlarımı farklı bir sayfada tanımlayıp buraya include ettim.
include 'fonksiyon.php';

//Faturada kullanacağım değişkenleri tanımladım, gerekli işlemleri yaptım.
$miktar = $_POST["miktar"];
$urun = $_POST["urun"];
$_SESSION["secilenurun"] = $urun;
$tazelik = $_POST["tazelik"];
$birimfiyat = otBirimFiyat($urun);
$guncelfiyat = tazelikEtkisi($urun,$birimfiyat);
$toplam = $birimfiyat * $miktar;
$gunceltoplam = ($guncelfiyat - $birimfiyat) * $miktar;
$tutar = $guncelfiyat * $miktar;
$kdv = $tutar * 18 / 100;
$geneltoplam = $kdv + $tutar;

//Faturamı yazdırdım.
echo "<table border='1' style='border:3px solid black;borderline:1px; margin-left:auto;margin-right:auto;'>
<tr>
    <td style='text-transform:capitalize' width='45%'><b>Tür</b></td>
    <td style='text-transform:capitalize' width='25%'><b>$urun</b></td>
</tr>
<tr>
    <td style='text-transform:capitalize' width='45%'><b>$urun Miktar (Kg)</b></td>
    <td style='text-transform:capitalize' width='25%'><b>$miktar Kg</b></td>
</tr>
<tr>
    <td style='text-transform:capitalize' width='45%'><b>Tazelik</b></td>
    <td style='text-transform:capitalize' width='25%'><b>$tazelik</b></td>
</tr>
<tr>
    <td style='text-transform:capitalize' width='45%'><b>İşlem Tutarı</b></td>
    <td style='text-transform:capitalize' width='25%'><b>$toplam TL</b></td>
</tr>
<tr>
    <td style='text-transform:capitalize' width='45%'><b>Tazelik Etkisi</b></td>
    <td style='text-transform:capitalize' width='25%'><b>$gunceltoplam TL</b></td>
</tr>
<tr>
    <td style='text-transform:capitalize' width='45%'><b>Tutar</b></td>
    <td style='text-transform:capitalize' width='25%'><b>$tutar TL</b></td>
</tr>
<tr>
    <td style='text-transform:capitalize' width='45%'><b>KDV (18%)</b></td>
    <td style='text-transform:capitalize' width='25%'><b>$kdv TL</b></td>
</tr>
</table>";

echo "<h2 style='text-align:center'>******</h2>";
echo "<h2 style='text-align:center'>FATURA</h2>";
echo "<p style='text-align:center'>OT A.Ş. <br>
* $urun: $miktar KG x $guncelfiyat TL = $tutar <br>
$tazelik .<br>
KDV (18%) = $kdv TL <br>
Genel Toplam: $geneltoplam TL</p>"
?>

</body>
</html>