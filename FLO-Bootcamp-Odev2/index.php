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
error_reporting(0);
session_start();
$bilgiler = array("Ülker Çikolatalı Gofret 40 gr.","Eti Damak Kare Çikolata 60 gr.","Nestle Bitter Çikolata 50 gr.");
$fiyatlar = array("10","20","20");
$sayac = 0;

echo "<form method='post' action='sepet.php' style='text-align:center;'>
    <table border='1' width='75%' style='border:1px solid black; margin-left:auto;margin-right:auto;'>
      <tr>
      <td><b>Ürün Adı</b></td>
      <td style='text-align:center'><b>Ürün Fiyatı</b></td>
      <td style='text-align:center'><b>Adet</b></td>
      </tr>";

      foreach ($bilgiler as $bilgi) {
         echo "<tr>
         <td>$bilgi</td>
         <td style='text-align:center'>$fiyatlar[$sayac]</td>
         <td style='text-align:center'><input size= '1' type='value' name='urun$sayac' style ='text-align:center;'></td>
                </tr>";
        $sayac++;
        }
      echo "</table>";
?>
<br>
<input type='submit' style='text-align:center; font-size:medium ; color:aliceblue ; background-color: #4472C4; border: 0.5pt ridge #101B2E;' value='Ürünü Sepete Ekle'>
</form>
<br>
<?php

$adetler1 = array();
for ($j=0; $j < 3; $j++) { 
    $adetler1[$j] = $_SESSION["adetler[$j]"];
}

if ($adetler1[0] == "" && $adetler1[1] == "" && $adetler1[2] == "") {
    echo "<b><div style='text-align:center;'>Sepetiniz Boş</b></div>";
} else {
    $sayac2 = 0;
    echo "
        <table border='1' width='75%' style='border:1px solid black; margin-left:auto;margin-right:auto;'>
        <tr><td colspan='3' style='text-align:center;'><b>Sepetiniz</b></td></tr>
        <tr>
            <td><b>Ürün Adı</b></td>
            <td style='text-align:center'> <b>Adet</b></td>
            <td style='text-align:center'><b>Toplam</b></td>
        </tr>";
            for ($i=0; $i < 3; $i++) { 
                if ($_SESSION["adetler[$i]"] > 0) {
                    $toplam[$i] = $adetler1[$i] * $fiyatlar[$i];
                    echo "<tr>
                    <td>$bilgiler[$i]</td>
                    <td style='text-align:center'>$adetler1[$i]</td>
                    <td style='text-align:center'>$toplam[$i] TL.</td>
                           </tr>";
                }
            }
            $toplamfiyat = $toplam[0] + $toplam[1] + $toplam[2];
            if ($toplamfiyat > 0) {
            echo "<tr>
            <td colspan='2'>Genel Toplam</td>
            <td style='text-align:center'>$toplamfiyat TL.</td>
            </tr>";
        }
         echo "</table><br>
         <form action='sepetisil.php' method='post' style='text-align:center;'> 
         <input type='submit' style=' text-align:center; font-size:medium ; color:aliceblue ; background-color: #4472C4; border: 0.5pt ridge #101B2E;' value='Sepetteki Ürünleri Kaldır'>
         </form>";
}
?>
</body>
</html>