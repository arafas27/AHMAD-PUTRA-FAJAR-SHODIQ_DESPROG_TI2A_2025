<?php
    function perkenalan($nama, $salam){
        echo $salam . ", ";
        echo "Perkenalkan, nama saya " . $nama . "<br>";
        echo "Senang berkenalan dengan Anda <br>";
    }

    // memanggil fungsi
    perkenalan("Hamdana", "Hallo");

    echo "<br>";

    $saya = "Wandi";
    $ucapanSalam = "Selamat Pagi";

    // memanggil lagi
    perkenalan($saya, $ucapanSalam);
?>