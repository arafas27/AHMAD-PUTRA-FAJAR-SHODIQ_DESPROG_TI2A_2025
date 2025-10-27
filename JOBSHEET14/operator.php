<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah $a + $b = $hasilTambah<br>";
echo "Hasil Kurang $a - $b = $hasilKurang<br>";
echo "Hasil Kali $a * $b = $hasilKali<br>";
echo "Hasil Bagi $a / $b = $hasilBagi<br>";
echo "Hasil Sisa Bagi $a % $b = $sisaBagi<br>";
echo "Hasil Pangkat $a ** $b = $pangkat<br>";
echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama $a == $b = $hasilSama<br>";
echo "Hasil Tidak Sama $a != $b = $hasilTidakSama<br>";
echo "Hasil Lebih Kecil $a < $b = $hasilLebihKecil<br>";
echo "Hasil Lebih Besar $a > $b = $hasilLebihBesar<br>";
echo "Hasil Lebih Kecil Sama $a <= $b = $hasilLebihKecilSama<br>";
echo "Hasil Lebih Besar Sama $a >= $b = $hasilLebihBesarSama<br>";
echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND $a && $b = $hasilAnd<br>";
echo "Hasil OR $a || $b = $hasilOr<br>";
echo "Hasil NOT A !$a = $hasilNotA<br>";
echo "Hasil NOT B !$b = $hasilNotB<br>";
echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik $a === $b = $hasilIdentik<br>";
echo "Hasil Tidak Identik $a !== $b = $hasilTidakIdentik<br>";
echo "<br>";

?>