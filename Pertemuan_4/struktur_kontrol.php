<?php

$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A <br>";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B <br>";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C <br>";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D <br>";
} 

echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer,";

echo "<br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor <br>";

echo "<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br>";

$daftar_nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

$tertinggi1 = 0; $tertinggi2 = 0;
$terendah1 = 100; $terendah2 = 100;
$total_nilaiAkhir = 0;

foreach ($daftar_nilai as $nilai) {
    if ($nilai > $tertinggi1) {
        $tertinggi2 = $tertinggi1; $tertinggi1 = $nilai;
    } else if ($nilai > $tertinggi2) {
        $tertinggi2 = $nilai;

    } if ($nilai < $terendah1) {
        $terendah2 = $terendah1; $terendah1 = $nilai;
    } else if ($nilai < $terendah2) {
        $terendah2 = $nilai;
    }
}

foreach ($daftar_nilai as $nilai) {
    if ($nilai == $tertinggi1 || $nilai == $tertinggi2 
    || $nilai == $terendah1 || $nilai == $terendah2) {
        continue;
    }
    $total_nilaiAkhir += $nilai;
}

$rata_rata = $total_nilaiAkhir / 6;

echo "Nilai yang di-skip adalah: $tertinggi1, $tertinggi2, $terendah1, $terendah2 <br>";
echo "Total nilai akhir: $total_nilaiAkhir <br>";
echo "Rata-rata setelah skip: $rata_rata";

echo "<br>";

$harga = 120000;
$diskon = 0;

if ($harga > 100000) {
    $diskon = 0.20 * $harga;
}

$hargaAkhir = $harga - $diskon;

echo "<br>";

echo "Harga produk: Rp $harga <br>";
echo "Diskon: Rp $diskon <br>";
echo "Total yang harus dibayar: Rp $hargaAkhir <br>";

echo "<br>";

$poin = 700;

echo "Total skor pemain adalah: $poin <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . ($poin > 500 ? "YA" : "TIDAK");
?>


