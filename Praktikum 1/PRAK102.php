<?php
    $jarijari = 4.2;
    $tinggi = 5.4;
    $panjang = 8.9;
    $lebar = 14.7;
    $sisi = 7.9;

    $nim = 3;

    if ( $nim == 2 || $nim == 3 ) {
        $kerucut = 1/3 * 3.14 * $jarijari * $jarijari * $tinggi;
        echo number_format($kerucut, 3);
    }
?>