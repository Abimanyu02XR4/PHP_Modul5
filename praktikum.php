<?php
    function keliling_bk($sisi1,$sisi2,$sisi3,$sisi4){
        return $sisi1 + $sisi2 + $sisi3 + $sisi4;
    }
    function luas_bk($diagonal1,$diagonal2){
        return $diagonal1 * $diagonal2 / 2;
    }
    $s1=12;
    $s2=90;
    $s3=100;
    $s4=31;
    echo "Keliling Belah Ketupat dengan sisi $s1 + $s2 +$s3 +$s4 adalah : ";
    echo keliling_bk($s1,$s2,$s3,$s4);

    $d1=90;
    $d2=70;
    echo "<br>Luas belahketupat dengan diagonal $d1 dan $d2 adalah : ";
    echo luas_bk($d1,$d2);
?>