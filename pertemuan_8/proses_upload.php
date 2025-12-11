<?php
$targetDirectory = "documents/"; 

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    // Daftar ekstensi gambar yang diperbolehkan
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxSize = 5 * 1024 * 1024; // Maksimum ukuran file: 5 MB

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileTmp = $_FILES['files']['tmp_name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $targetFile = $targetDirectory . basename($fileName);

        
        if (in_array($fileType, $allowedExtensions) && $fileSize <= $maxSize) {

            // Pindahkan file ke folder tujuan
            if (move_uploaded_file($fileTmp, $targetFile)) {
                echo "File <b>$fileName</b> berhasil diunggah.<br>";
                // Menampilkan thumbnail (lebar 200px, tinggi menyesuaikan)
                echo "<img src='$targetFile' width='200'; ><br>";
            } else {
                echo "Gagal mengunggah file <b>$fileName</b>.<br>";
            }

        } else {
            echo "File <b>$fileName</b> tidak valid atau melebihi 5MB.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
