<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>** Cevher v1.0 **</title>
</head>
<body >


<h2 style='text-align:center'>** Cevher v1.0 **</h2>



<?php


echo "<form action='fatura.php' method='post' style='text-align:center;'>
<table border='1' style='border:1px solid black; margin-left:auto;margin-right:auto;'>
<tr><td width='55%' colspan='2'><b>Müşterinin</b></td></tr>
<tr><td width='55%'>Adı:</td>
<td><input type='text' name='ad' required></tr>
<tr><td width='55%'>Soyadı:</td>
<td><input type='text' name='soyad' required></tr>
<tr><td width='55%' colspan='2'><b>Cevherin</b></td></tr>
<tr><td width='55%'>Kodu:</td>
<td><input type='text' name='kod' required></tr>
<tr><td width='55%'>Tane Büyüklüğü:</td>
<td><input type='number' name='buyukluk' required></tr>
<tr><td width='55%'>Temizlik Oranı (%):</td>
<td><input type='number' name='temizlik' required></tr>
<tr><td width='55%'>Miktar (TON):</td>
<td><input type='number' name='miktar' required></tr>
</table>
<br><input type='submit' style='font-size:medium; margin-left:auto; margin-right:auto;' value='Fatura Çıktısı Al'>
</form>";



?>


</body>
</html>