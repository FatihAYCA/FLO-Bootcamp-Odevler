<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Rehber - Yeni Kayıt</title>
    </head>
<body>
    <div style="text-align:center;">
    <a href="index.php">YENİ KAYIT</a> - <a href="liste.php">KAYIT LİSTESİ</a>
    </div>
    <h1 style=' text-align:center'>Yeni Kayıt</h1>
   

<form action="ekle.php" method="post" style="text-align:center;">
    <strong>Adınız Soyadınız:</strong><br>
     <input type="text" name="adsoyad" value="" size="30" required>
    <br><br>
    <strong>Telefon Numarınız:</strong> <br>
    <input type="tel" name="telefon" value="" size="30" required>
    <br><br>
    <input type='submit' style=' text-align:center; font-size:medium ; color:aliceblue ; background-color: #4472C4; border: 0.5pt ridge #101B2E; float: center;' value='Bilgileri Kaydet'>
</form>

</body>
</html>