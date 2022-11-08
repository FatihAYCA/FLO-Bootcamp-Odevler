<html><body>
<?php
session_start();

for ($i=0; $i < 3; $i++) { 
    unset ($_SESSION ["adetler[$i]"]);
}


if (isset ($_SESSION ["adetler"])) {
    echo "<script>
    alert('session silindi');
    window.top.location = 'index.php';
    </script>";
} else {
    echo "<script>
    alert('Sepetteki Ürünler Kaldırıldı!');
    window.top.location = 'index.php';
    </script>";
}
?>
</body></html>