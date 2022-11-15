<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ana Sayfa - Veritabanı Uygulaması</title>
    </head>
<body>
    <div style="text-align:center;">
    <a href="index.php">YENİ KAYIT</a> - <a href="liste.php">REHBER</a>
    </div>

    <br><br>

</body>
</html>

<?php

error_reporting(0);

$baglan = new PDO("mysql:host=localhost;dbname=rehber;charset=utf8","fatih","1234");
$baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



//FORM ALANLARININ BOŞ BIRAKILMASINA KARŞI ÖNLEM ALDIM, EĞER BOŞ BIRAKILIRSA KAYIT ALANINA GERİ DÖNÜLÜYOR, VERİLER DOĞRU GİRİLİRSE LİSTEYE YÖNLENDİRİLİYOR
if ($_POST["adsoyad"] == "" || $_POST["telefon"] == "") {
    echo "<script>
    alert('Gerekli Alanları Doldurunuz!');
    window.top.location = 'index.php';
    </script>";
} else {
    $adsoyad = $_POST["adsoyad"]; // FORMDAN GELEN BİLGİLERİ ÇEKTİM VERİTABANINA KAYDETMEK ÜZERE DEĞİŞKENE ATADIM
    $telefon = $_POST["telefon"]; // FORMDAN GELEN BİLGİLERİ ÇEKTİM VERİTABANINA KAYDETMEK ÜZERE DEĞİŞKENE ATADIM
    $sorgu = $baglan->prepare('insert into rehber1 values(?,?,?)');
    $ekle = $sorgu->execute(array(NULL,"$adsoyad","$telefon")); //VERİTABANINA FORMDAN GELEN BİLGİLERİ EKLEDİM
    echo "<script>
    alert('Kayıt Başarılı!');
    window.top.location = 'liste.php';
    </script>";
}


?>

