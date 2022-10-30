<?php

$agilsayisi = 4;  // Çiftlikteki ağıl sayısı.
$agilmax = 50;  // Ağılın alabildiği max. koyun sayısı.
$toplamkoyun = 200;  // Çiftlikteki toplam koyun sayısı.
$toplamkapasite = $agilmax * $agilsayisi; // Çiftliğin toplam kapasitesi.
$toplam = $toplamkoyun; // for döngüsünde toplam koyun sayısıyla işlem yaptığım için for döngüsünün dışında toplam koyunu tekrar değişkene atadım.


echo "Toplam Ağıl: $agilsayisi <br>";
echo "Toplam Kapasite: " . $toplamkapasite . "<br>";
echo "Toplam Koyun: $toplamkoyun <br><br>";

for ($i=$agilsayisi; $i > 0 ; $i--) { 
    echo "$i. Ağıl" . ": ";

    if ($toplamkoyun > $agilmax) {
        echo $agilmax . "<br>";
    }
    elseif ($toplamkoyun > 0) {
        echo $toplamkoyun . "<br>";
    }
    else {
        echo "0" . "<br>";
    }
    $toplamkoyun = $toplamkoyun - $agilmax ;
}

if ($toplam > ($agilmax * $agilsayisi)) {
    echo "<br>Dışarıda Kalan: " . ($toplam - ($agilmax * $agilsayisi)) . " Koyun";
}

?>