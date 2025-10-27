<?php
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 85],
];

$jumahNilai = 0;

foreach ($daftarNilai as $nilai) {
    $jumahNilai += $nilai[1];
}

$rataRata = $jumahNilai / count($daftarNilai);

echo "Rata-rata nilai kelas yaitu : $rataRata<br>";
echo "Nama-nama yang nilainya diatas rata-rata : <br>";

foreach ($daftarNilai as $nilai) {
    if ($nilai[1] > $rataRata) {
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";

    }
}
?>