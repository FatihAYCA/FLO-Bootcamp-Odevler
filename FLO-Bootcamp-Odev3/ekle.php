<?php
error_reporting(0);
require_once 'baglan.php';
$baglan = baglan();

$telefonkarakter = strlen(str_replace(" ","",$_POST["telefon"]));
if ($telefonkarakter != 11) {
    echo "<script>
    alert('Bilgiler Geçersiz!');
    window.top.location = 'index.php';
    </script>";
    die();
}

if (isset($_POST["adsoyad"], $_POST["telefon"])) {
    $adsoyad = $_POST["adsoyad"];
    $telefon = $_POST["telefon"]; 
    $sorgu = $baglan->prepare('insert into rehber1 values(?,?,?)');
    $ekle = $sorgu->execute(array(NULL,"$adsoyad","$telefon")); 
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

