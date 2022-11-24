<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Rehber - Yeni Kayıt</title>
    </head>
<body>
    <h1 style=' text-align:center'>Doğrulama</h1>
   
<form action="ekle.php" method="post" style="text-align:center;">
    <strong>Ad Soyad:</strong><br>
     <input type="text" name="adsoyad" value="" size="30" required>
    <br><br>
    <strong>TC Kimlik Numarası:</strong> <br>
    <input type="value" name="tc" value="" size="30" required>
    <br><br>
    <input type='submit' style=' text-align:center; font-size:medium ; color:aliceblue ; background-color: #4472C4; border: 0.5pt ridge #101B2E; float: center;' value='Doğrula ve Kaydet'>
</form>
<br><br>

<?php
require_once 'baglan.php';
$baglan = baglan();

$sorgu = $baglan->query("select * from dogrula order by id asc");

echo "<table width='100%' border='1'>
<tr align='center'>
<td width = '15%'><b>ID</b></td>
<td width = '25%'><b>Adı Soyadı</b></td>
<td width = '35%'><b>TC Kimlik No</b></td>
<td width = '35%'><b>Durum</b></td>
</tr>";


while ($satir = $sorgu->fetchObject()){
    echo "<tr align='center'>
    <td>$satir->id</td>
    <td>$satir->adsoyad</td>
    <td>$satir->tc</td>
    <td>$satir->durum</td>
    </tr>";
}

?>


</body>
</html>