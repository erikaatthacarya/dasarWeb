<?php 
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Nilai a: {$a} <br>";
echo "Nilai b: {$b} <br>";
echo "Hasil penjumlahan (a + b): {$hasilTambah} <br>";
echo "Hasil pengurangan (a - b): {$hasilKurang} <br>";
echo "Hasil perkalian (a * b): {$hasilKali} <br>";
echo "Hasil pembagian (a / b): {$hasilBagi} <br>";
echo "Sisa bagi (a % b): {$sisaBagi} <br>";
echo "Pangkat (a ** b): {$pangkat} <br>";
echo "Hasil and (a && b): {$hasilAnd} <br>";
echo "Hasil or (a || b): {$hasilOr} <br>";
echo "Hasil notA (!a): {$hasilNotA} <br>";
var_dump($hasilNotA);
echo "<br>";
echo "Hasil notB (!b): {$hasilNotB} <br>";
var_dump($hasilNotB);
echo "<br>";
echo "Hasil dari \$a += \$b adalah: $a<br>";
echo "Hasil dari \$a %= \$b adalah: $a<br>";
echo "Hasil identik dari {$a} === {$b} adalah ";
var_dump($hasilIdentik);
echo "<br>";
echo "Hasil tidak identik dari {$a} !== {$b} adalah ";
var_dump($hasilIdentik);
echo "<br>";
echo "<br>";
echo "Studi kasus";
echo "<br>";
$totalKursi = 45;
$kursiTerisi = 28;
$kursiKosong = $totalKursi - $kursiTerisi;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;
echo "Total kursi: {$totalKursi} <br>";
echo "Kursi yang ditempati: {$kursiTerisi} <br>";
echo "Kursi yang masih kosong: {$kursiKosong} <br>";
echo "Persentase kursi yang masih kosong: " . number_format($persentaseKosong, 2) . "%<br>";

?>