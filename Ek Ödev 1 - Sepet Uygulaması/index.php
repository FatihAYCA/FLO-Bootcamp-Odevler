<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >

<?php

require_once 'baglan.php';
$baglan = baglan();

echo "<form method='post' action='sepet.php'>
    <table border='1' width='100%'>
      <tr>
      <td  width = '45%' style='text-align:left'><b>Ürün Adı</b></td>
      <td width = '25%' style='text-align:center'><b>Ürün Fiyatı</b></td>
      <td width = '15%' style='text-align:center'><b>Adet</b></td>
      </tr>";

$sorgu = $baglan->query("select * from sepet1 order by id asc");

$sayac = 0;
while ($satir = $sorgu->fetchObject()){
echo "<tr align='center'>
        <td style='text-align:left'>$satir->urunadi</td>
        <td>$satir->fiyat</td>
        <td><input size= '1' type='value' name='urun$sayac' style ='text-align:center;'>
        <input type='hidden' name='kontrol' value='1'</td>

    </tr>";
$sayac++;
}
echo "</table>";

?>
<br>
<input type='submit' style=' text-align:center; font-size:medium ; color:aliceblue ; background-color: #4472C4; border: 0.5pt ridge #101B2E; float: right;' value='Ürünü Sepete Ekle'>
</form>
<br><br>
<?php


$toplamfiyat = 0;
$sorgu = $baglan->query("select * from sepet1");

// if ($toplamfiyat != 0) {
//     # code...
// } else {
//     echo "Sepetiniz Boş";
// }
while ($satir = $sorgu->fetchObject()){
    $fiyat = ($satir->adet) * ($satir->fiyat);
    $toplamfiyat += $fiyat;
}
$sorgu = $baglan->query("select * from sepet1");

if ($toplamfiyat > 0) {
    echo "<table width='100%' border='1'>
<tr align='center'>
<td  width = '45%' style='text-align:left'><b>Ürün Adı</b></td>
<td width = '25%'><b>Adet</b></td>
<td width = '15%'><b>Fiyat</b></td>
</tr>";
    while ($satir = $sorgu->fetchObject()){
        $fiyat = ($satir->adet) * ($satir->fiyat);
        echo "<tr align='center'>
        <td style='text-align:left'>$satir->urunadi</td>
        <td>$satir->adet</td>
        <td>$fiyat TL</td>
        </tr>
    ";
    }
    echo "<tr>
    <td colspan='2'><b>Toplam Fiyat</b></td>
    <td style='text-align:center'><b>$toplamfiyat TL</b></td>
    </tr>
    </table>";
    echo "<br><form action='sepetisil.php' method='post'> 
             <input type='submit' style=' text-align:center; font-size:medium ; color:aliceblue ; background-color: #4472C4; border: 0.5pt ridge #101B2E; float: right;' value='Sepetteki Ürünleri Kaldır'>
             </form>";
} else {
    echo "<center><font size='7'> Sepetiniz Boş</font></center>";
}

?>
</body>
</html>