<?php
// 1. SET COOKIE DULU (sebelum ada output apapun)
// Ini akan mengatur cookie di browser untuk kunjungan berikutnya.
setcookie("user", "Polinema", time() + 3600);

// 2. BARU KIRIM OUTPUT (echo)
// Kita harus selalu cek apakah cookie-nya ada sebelum membacanya.
if (isset($_COOKIE['user'])) {
    // Kode ini akan jalan pada KUNJUNGAN KEDUA (setelah refresh)
    echo "Selamat datang kembali, " . $_COOKIE['user'];
} else {
    // Kode ini akan jalan pada KUNJUNGAN PERTAMA
    echo "Cookie 'user' baru saja di-set. Silakan refresh halaman ini untuk melihat nilainya.";
}
?>