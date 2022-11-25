<?php

function otBirimFiyat($a) {
        if ($a == 'Kekik') {
            return $_SESSION['fiyat'][0];
        } elseif ($a == 'Nane') {
            return $_SESSION['fiyat'][1];
        } elseif ($a == 'Fesleğen') {
            return $_SESSION['fiyat'][2];
        } elseif ($a == 'Reyhan') {
            return $_SESSION['fiyat'][3];
        }
}

function tazelikEtkisi($a,$b) {
        if ($a == 'Kekik') {
            if ($_POST['tazelik'] == 'Taze') {
                return $b;
            } else {
                return ($b * 90 / 100);
            }
        } elseif ($a == 'Nane') {
            if ($_POST['tazelik'] == 'Taze') {
                return $b;
            } else {
                return ($b * 80 / 100);
            }
        } elseif ($a == 'Fesleğen') {
            if ($_POST['tazelik'] == 'Taze') {
                return $b;
            } else {
                return ($b * 90 / 100);
            }
        } elseif ($a == 'Reyhan') {
            if ($_POST['tazelik'] == 'Taze') {
                return $$b;
            } else {
                return ($b * 75 / 100);
            }
        }
}

?>
