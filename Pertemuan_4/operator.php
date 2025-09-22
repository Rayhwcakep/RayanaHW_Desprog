<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali   = $a * $b;
$hasilBagi   = $a / $b;
$sisaBagi    = $a % $b;
$pangkat     = $a ** $b;

echo "Nilai a = {$a} <br>";
echo "Nilai b = {$b} <br><br>";

echo "Hasil Tambah (a + b) = {$hasilTambah} <br>";
echo "Hasil Kurang (a - b) = {$hasilKurang} <br>";
echo "Hasil Kali (a * b) = {$hasilKali} <br>";
echo "Hasil Bagi (a / b) = {$hasilBagi} <br>";
echo "Sisa Bagi (a % b) = {$sisaBagi} <br>";
echo "Hasil Pangkat (a ** b) = {$pangkat} <br><br>";

$hasilSama            = $a == $b;
$hasilTidakSama       = $a != $b;
$hasilLebihKecil      = $a < $b;
$hasilLebihBesar      = $a > $b;
$hasilLebihKecilSama  = $a <= $b;
$hasilLebihBesarSama  = $a >= $b;

echo "Apakah a == b ? " . ($hasilSama ? "True" : "False") . "<br>";
echo "Apakah a != b ? " . ($hasilTidakSama ? "True" : "False") . "<br>";
echo "Apakah a < b ? " . ($hasilLebihKecil ? "True" : "False") . "<br>";
echo "Apakah a > b ? " . ($hasilLebihBesar ? "True" : "False") . "<br>";
echo "Apakah a <= b ? " . ($hasilLebihKecilSama ? "True" : "False") . "<br>";
echo "Apakah a >= b ? " . ($hasilLebihBesarSama ? "True" : "False") . "<br><br>";

$hasilAnd  = $a && $b;
$hasilOr   = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "a AND b = " . ($hasilAnd ? "True" : "False") . "<br>";
echo "a OR b = " . ($hasilOr ? "True" : "False") . "<br>";
echo "NOT a = " . ($hasilNotA ? "True" : "False") . "<br>";
echo "NOT b = " . ($hasilNotB ? "True" : "False") . "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "<br>";

$a = 10; echo "a += b => " . ($a += $b) . "<br>";
$a = 10; echo "a -= b => " . ($a -= $b) . "<br>";
$a = 10; echo "a *= b => " . ($a *= $b) . "<br>";
$a = 10; echo "a /= b => " . ($a /= $b) . "<br>";
$a = 10; echo "a %= b => " . ($a %= $b) . "<br>";

echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br>";

?>
