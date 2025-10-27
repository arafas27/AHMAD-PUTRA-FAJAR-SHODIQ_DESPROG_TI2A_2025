<?php
// membuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br>";
    echo "Senang berkenalan dengan Anda <br>";
}

// memanggil fungsi
perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "fajar";
$ucapanSalam = "Selamat pagi";

// memanggil lagi
perkenalan($saya);
?>
