<?php
class dogrulama
{
    function islem1($a)
        {
            if (strlen($a) == 11 
            && ctype_digit($a) 
            && $a[0] != 0 
            && ((((($a[0] + $a[2] + $a[4] + $a[6] + $a[8]) * 7) - ($a[1] + $a[3] + $a[5] + $a[7])) % 10 ) == $a[9]) 
            && ((($a[0] + $a[1] + $a[2] + $a[3] + $a[4] + $a[5] + $a[6] + $a[7] + $a[8] + $a[9]) % 10 ) == $a[10])) {
                return "TC Kimlik Geçerli";
            } else {
                return "TC Kimlik Geçersiz";
            }
        }
}
?>

