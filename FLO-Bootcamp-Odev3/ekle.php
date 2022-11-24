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

require_once 'baglan.php';
$baglan = baglan();

if (isset($_POST["adsoyad"], $_POST["telefon"])) {
    $adsoyad = $_POST["adsoyad"]; // FORMDAN GELEN BİLGİLERİ ÇEKTİM VERİTABANINA KAYDETMEK ÜZERE DEĞİŞKENE ATADIM
    $telefon = $_POST["telefon"]; // FORMDAN GELEN BİLGİLERİ ÇEKTİM VERİTABANINA KAYDETMEK ÜZERE DEĞİŞKENE ATADIM
    $sorgu = $baglan->prepare('insert into rehber1 values(?,?,?)');
    $ekle = $sorgu->execute(array(NULL,"$adsoyad","$telefon")); //VERİTABANINA FORMDAN GELEN BİLGİLERİ EKLEDİM
    echo "<script>
    alert('Kayıt Başarılı!');
    window.top.location = 'liste.php';
    </script>";
    die();
} else {
    echo "<script>
    alert('Kayıt Başarısız!');
    window.top.location = 'index.php';
    </script>";
    die();
}


?>

