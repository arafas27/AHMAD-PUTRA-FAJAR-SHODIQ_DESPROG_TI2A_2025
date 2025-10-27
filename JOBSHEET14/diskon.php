<?php
$hargaAwal = 120000;
$diskon = 0.20;

if ($hargaAwal >= 100000) {
    $hargaAkhir = $hargaAwal - ($hargaAwal * $diskon);
    echo "Anda Mendapatkan Diskon Sebesar 20%<br>";
} else {
    $hargaAkhir = $hargaAwal;
}

echo "Harga yang harus dibayar adalah Rp.$hargaAkhir";
?>
