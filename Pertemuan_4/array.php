<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];
$nilai=[];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai <60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (lulus) <br>";
    $nilaiLulus[]= $nilai;
}

echo "daftar nilai siswa yang lulus: " . implode(',', $nilaiLulus);

echo "<br><br>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPelangganLimaTahun = [];

foreach ($daftarKaryawan as $Karyawan) {
    if ($Karyawan[1] > 5) {
        $karyawanPelangganLimaTahun[] = $Karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: <br>"
 . implode(",", $karyawanPelangganLimaTahun);

echo "<br><br>";

$daftarNilai = [
    'Matematika'=> [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

echo "<br>";

$nilaiSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$total = 0;
$jumlah = 0;

foreach ($nilaiSiswa as $siswa) {
    $total += $siswa[1];
    $jumlah++;
}

$rataRata = $total / $jumlah;

echo "Rata-rata kelas: $rataRata <br>";
echo "Daftar siswa dengan nilai di atas rata-rata:<br>";

foreach ($nilaiSiswa as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "Nama: {$siswa[0]}, Nilai: {$siswa[1]} <br>";
    }
}
?>