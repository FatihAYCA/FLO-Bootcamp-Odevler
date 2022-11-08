<?php
session_start();
error_reporting(0);

$adetler = array();
for ($i=0; $i < 3; $i++) { 
    if ($_POST["urun$i"] > 0) {
        $adetler[$i] = ($_POST["urun$i"]);
        $_SESSION["adetler[$i]"] = $adetler[$i] + $_SESSION["adetler[$i]"];
    }
}




if ($adetler[0] > 0 || $adetler[1] > 0 || $adetler[2] > 0) {
    echo "<script>
    alert('Başarılı: Ürünleriniz Sepete Başarıyla Eklendi!');
    window.top.location = 'index.php';
    </script>";
  } else {
    echo "<script>
    alert('Sepete Ürün Eklemelisiniz!');
    window.top.location = 'index.php';
    </script>";
}


  ?>