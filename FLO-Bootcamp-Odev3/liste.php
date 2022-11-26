<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Kayıt Listesi</title>
    </head>
<body>
    <div style="text-align:center;">
    <a href="index.php">YENİ KAYIT</a> - <a href="liste.php">KAYIT LİSTESİ</a>
    </div>
    <h1 style=' text-align:center'>Kayıt Listesi</h1>

<?php

require_once 'baglan.php';
$baglan = baglan();

$sorgu = $baglan->prepare("select * from rehber1");
$sorgu->execute();
$toplamsatir = $sorgu->rowCount();

echo "<table width='80%' border='1' style='border:1px solid black; margin-left:auto;margin-right:auto;'>
    <tr align='center'>
        <td width = '55%'><b>Adı Soyadı</b></td>
        <td width = '35%'><b>Telefon Numarası</b></td>
        <td width = '10%'><b>İşlem</b></td>
    </tr>";

//Veritabanından verilerimi çektim-Tabloda gerekli sütunlara yazdırdım-A href kullanarak adres çubuğuna id no gönderdim
while ($satir = $sorgu->fetchObject()){
    echo "<tr align='center'>
            <td>$satir->adsoyad </td>
            <td>$satir->telefon </td>
            <td><a href='sil.php?id=$satir->id'>Sil</a></td> 
          </tr>";
}

if ($toplamsatir > 0) {
    echo "<tr align='center'>
            <td colspan='3'><b>Sistemde Toplam -$toplamsatir- Kayıt Var.</b></td>
          </tr>";
}
else {
    echo "<tr align='center'>
            <td colspan='3'><b>Sistemde Kayıtlı Veri Yok!</b></td>
          </tr>";
}
echo "</table>";
?>

</body>
</html>
