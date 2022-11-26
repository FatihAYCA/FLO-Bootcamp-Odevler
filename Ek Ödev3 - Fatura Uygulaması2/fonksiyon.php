<?php

function cevherIsim($a) {
    if ($a == "DMR") {
        return "Demir";
    } elseif ($a == "KRM") {
        return "Krom";
    } elseif ($a == "BKR") {
        return "Bakır";
    } elseif ($a == "KMR") {
        return "Kömür";
    }
}

function cevherFiyat($a) {
    if ($a == "DMR") {
        return 1500;
    } elseif ($a == "KRM") {
        return 5000;
    } elseif ($a == "BKR") {
        return 3000;
    } elseif ($a == "KMR") {
        return 500;
    }
}

function taneEtkisi($a,$b) {
    if ($a == 1) {
        return $b * 85 / 100;
    } elseif ($a == 2) {
        return $b * 90 / 100;
    } elseif ($a == 3) {
        return $b;
    }
}

function temizlikEtkisi($a,$b) {
    return $a * $b / 100;
}

?>