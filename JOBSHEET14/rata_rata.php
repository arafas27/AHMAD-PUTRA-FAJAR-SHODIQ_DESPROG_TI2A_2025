<?php
$daftarNilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;

sort($daftarNilai);

array_shift($daftarNilai);
array_shift($daftarNilai);

array_pop($daftarNilai);
array_pop($daftarNilai);

foreach ($daftarNilai as $nilai) {
    $totalNilai += $nilai;
}

$rataRata = $totalNilai / count($daftarNilai);
echo "Jumlah Nilai Setelah Mengabaikan 2 Nilai Tertinggi dan terendah : $totalNilai<br>";
echo "Rata-rata Nilai : $rataRata";

?>