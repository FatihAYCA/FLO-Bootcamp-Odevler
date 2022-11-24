
<?php

require_once 'baglan.php';
$baglan = baglan();

$sorgu = $baglan->query('select * from sepet1');
$liste = $sorgu->fetchAll();
$sayac2 = $sorgu->rowCount();

for ($i=0; $i < $sayac2; $i++) { 
    $sorgu = $baglan->exec("update sepet1 set adet=0 where id=($i+1)");
};

echo "<script>
alert('Sepetteki Ürünler Kaldırıldı!');
window.top.location = 'index.php';
</script>";


?>
