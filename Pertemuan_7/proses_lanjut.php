<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pilihan</title>
</head>
<body>
<div class="container">
    <h2>Hasil Pilihan Anda</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedBuah = $_POST['buah'] ?? '-';
        $selectedWarna = $_POST['warna'] ?? [];
        $selectedJenisKelamin = $_POST['jenis_kelamin'] ?? '-';

        echo "Buah yang Anda pilih: " . htmlspecialchars($selectedBuah);
        echo "<br>";
        if (!empty($selectedWarna)) {
            echo "Warna favorit Anda: " . htmlspecialchars(implode(", ", $selectedWarna));
        } else {
            echo "Warna favorit Anda: Tidak memilih warna.";
        }
        echo "<br>";
        echo "Jenis kelamin Anda: " . htmlspecialchars($selectedJenisKelamin);
    } else {
        echo "Tidak ada data yang dikirim.";
    }
    ?>
</div>
</body>
</html>
