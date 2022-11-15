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

$baglan = new PDO("mysql:host=localhost;dbname=rehber;charset=utf8","fatih","1234");

$sorgu = $baglan->query("select * from rehber1", PDO::FETCH_ASSOC);

$toplamsatir = $sorgu->rowCount(); //TOPLAM KAYDIMI SAYDIRDIM-TABLONUN EN ALTINDA KULLANACAĞIM

echo "<table width='100%' border='1'>
<tr align='center'>
<td width = '55%'><b>Adı Soyadı</b></td>
<td width = '35%'><b>Telefon Numarası</b></td>
<td width = '10%'><b>İşlem</b></td>
</tr>";

//VERİTABANINDAN VERİLERİMİ ÇEKTİM-TABLODA GEREKLİ SÜTUNLARA YAZDIRDIM-SİL BUTONUYLA ADRES ÇUBUĞUNA ID NO VERİSİNİ GÖNDERDİM
while ($satir = $sorgu->fetchObject()){
    echo "<tr align='center'>
    <td>$satir->adsoyad </td>
    <td>$satir->telefon </td>
    <td><a href='sil.php?id=$satir->id'>Sil</a></td> 
    </tr>";
}

//EĞER KAYIT LİSTEMDE VERİ YOKSA VERİ OLMADIĞINI BELİRTMEK AMACIYLA KONTROL YAPTIRDIM-VERİ YOKSA EKRANDA BELİRTTİM.
if ($toplamsatir > 0) {
    echo "<tr align='center'>
<td colspan='3'><b>Sistemde Toplam -$toplamsatir- Kayıt Var.</b></td>
</tr>";

}else {
    echo "<tr align='center'>
<td colspan='3'><b>Sistemde Kayıtlı Veri Yok!</b></td>
</tr>";
}

echo "</table>";
?>

</body>
</html>
