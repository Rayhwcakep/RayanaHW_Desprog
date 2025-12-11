<?php
// FILE: bookingtiket.php

// Wajib untuk menggunakan session, letakkan di baris paling atas
session_start();

// Daftar gunung untuk dropdown
$daftar_gunung = [
    "Gunung Semeru", "Gunung Rinjani", "Gunung Bromo", "Gunung Ijen",
    "Gunung Prau", "Gunung Gede", "Gunung Papandayan"
];

// Variabel untuk menampung pesan/notifikasi
$pesan_notifikasi = '';

// LOGIKA PEMROSESAN FORM SAAT DI-SUBMIT
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // JIKA TOMBOL 'BOOKING' DARI FORM PERTAMA DITEKAN
    // Menggunakan 'if' di sini
    if (isset($_POST['submit_booking'])) {
        $gunung_dipilih = htmlspecialchars($_POST['gunung']);
        $tanggal_dipilih = htmlspecialchars($_POST['periode']);

        $_SESSION['booking_gunung'] = $gunung_dipilih;
        $_SESSION['booking_tanggal'] = $tanggal_dipilih;

        header("Location: " . $_SERVER["PHP_SELF"] . "#data-section");
        exit();
    }
    // JIKA TOMBOL 'SIMPAN DATA ANDA' DARI FORM KEDUA DITEKAN
    // Menggunakan 'elseif' untuk memastikan hanya satu blok yang berjalan
    elseif (isset($_POST['submit_data'])) {
        if (isset($_SESSION['booking_gunung'], $_SESSION['booking_tanggal'])) {
            $gunung = $_SESSION['booking_gunung'];
            $tanggal = $_SESSION['booking_tanggal'];

            $nama = htmlspecialchars($_POST['nama']);
            $ktp = htmlspecialchars($_POST['ktp']);
            $telp = htmlspecialchars($_POST['telp']);
            $gender = htmlspecialchars($_POST['gender']);
            $email = htmlspecialchars($_POST['email']);
            
            // Mengambil data dari 'textarea' saran & kritik
            $saran = isset($_POST['saran']) && !empty($_POST['saran']) ? htmlspecialchars($_POST['saran']) : 'Tidak ada saran yang diberikan.';

            $pesan_notifikasi = "
                <div class='hasil-akhir'>
                    <h3>PENDAFTARAN BERHASIL!</h3>
                    <p>Data booking Anda telah kami terima dan akan diverifikasi.</p>
                    <ul>
                        <li><strong>Nama:</strong> $nama</li>
                        <li><strong>No KTP:</strong> $ktp</li>
                        <li><strong>No Telp:</strong> $telp</li>
                        <li><strong>Email:</strong> $email</li>
                        <li><strong>Jenis Kelamin:</strong> $gender</li>
                        <li><strong>Gunung Tujuan:</strong> $gunung</li>
                        <li><strong>Tanggal Pendakian:</strong> $tanggal</li>
                        <li><strong>Saran & Kritik:</strong> $saran</li>
                    </ul>
                </div>
            "; 
            session_unset();
            session_destroy(); 
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Tiket Pendakian</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="bookingtiket.css">
    <link rel="stylesheet" href="panduan.css">
    <link rel="stylesheet" href="beranda.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="hero-container">
        <header class="navbar-container">
            <nav class="navbar">
                <div class="nav-left">
                    <a href="#" class="logo">TIKET PENDAKIAN</a>
                    <ul class="nav-menu">
                        <li><a href="bookingtiket.php">BOOKING</a></li>
                        <li><a href="beranda.html">BERANDA</a></li>
                        <li><a href="panduan.html">PANDUAN</a></li>
                    </ul>
                </div>
                <div class="nav-right">
                    <a href="#" class="account-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span>ACCOUNT</span>
                    </a>
                </div>
            </nav>
        </header>
        <main class="hero-content">
            <h1>BOOKING TIKET ONLINE</h1>
            <p>AMANKAN TIKET KALIAN DENGAN BOOKING TIKET ONLINE LEBIH AWAL</p>
            <a href="#pilih-gunung">
                <div class="scroll-down">
                    <span>&darr;</span> SCROLL DOWN
                </div>
            </a>
        </main>
    </div>

    <section class="booking-section" id="pilih-gunung">
        <div class="booking-content">
            <div class="section-title">
                <span class="number">01</span>
                <h2>PILIH GUNUNG YANG KAMU KUNJUNGI</h2>
            </div>
            
            <?php
                if (!empty($pesan_notifikasi)) {
                    echo $pesan_notifikasi;
                }
            ?>
            
            <form class="booking-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="input-group">
                    <label for="gunung">PILIH GUNUNG</label>
                    <select name="gunung" id="gunung" required>
                        <option value="" disabled selected>-- Pilih Gunung --</option>
                        <?php foreach ($daftar_gunung as $gunung) { echo "<option value=\"$gunung\">$gunung</option>"; } ?>
                    </select>
                </div>
                
                <div class="input-group">
                    <label for="periode">PILIH TANGGAL</label>
                    <input type="date" id="periode" name="periode" required>
                </div>
                
                <button type="submit" name="submit_booking">BOOKING</button>
            </form>
            
        </div>
        <div class="booking-image">
            <img src="img/bokingtiket1.jpg" alt="Pemandangan gunung dengan danau">
        </div>
    </section>

    <section id="data-section" class="data-section">
        <div class="form-card">
            <div class="form-image">
                <img src="img/bokingtiket2.jpg" alt="Danau Ranu Kumbolo di Gunung Semeru">
            </div>
            <div class="form-fields">
                <details open>
                    <summary>ISI DATA ANDA DISINI</summary>
                    
                    <?php if (isset($_SESSION['booking_gunung'])): ?>
                    <div class="info-booking">
                        <p>Anda memesan untuk <strong><?php echo $_SESSION['booking_gunung']; ?></strong> pada tanggal <strong><?php echo $_SESSION['booking_tanggal']; ?></strong>. Silakan lengkapi data diri Anda.</p>
                    </div>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#data-section" method="POST">
                        <label for="nama">NAMA :</label>
                        <input type="text" id="nama" name="nama" required>
                        <label for="ktp">NO KTP :</label>
                        <input type="text" id="ktp" name="ktp" required>
                        <label for="telp">NO TELP :</label>
                        <input type="text" id="telp" name="telp" required>
                        <label for="email">EMAIL : </label>
                        <input type="text" id="email" name="email" required>
                        <label>JENIS KELAMIN :</label>
                        <div class="radio-group">
                            <input type="radio" id="laki" name="gender" value="Laki-laki" checked>
                            <label for="laki">LAKI-LAKI</label>
                            <input type="radio" id="perempuan" name="gender" value="Perempuan">
                            <label for="perempuan">PEREMPUAN</label>
                        </div>

                        <button type="submit" name="submit_data">SIMPAN DATA ANDA</button>
                    </form>
                    <?php else: ?>
                    <div class="info-booking">
                        <p>Silakan pilih gunung dan tanggal pendakian pada langkah 01 di atas terlebih dahulu.</p>
                    </div>
                    <?php endif; ?>

                </details>
            </div>
        </div>
        <div class="section-text">
            <div class="section-title">
                <span class="number">02</span>
                <h2>LENGKAPI DATA</h2>
            </div>
            <p>Lengkapi datamu dengan seksama, dihimbau untuk crossceck lagi data anda, apabila terdapat ketidaksesuaian, maka permohonan tiket pendakian tidak dapat di proses.</p>
        </div>
    </section>

    <section class="verification-section" id="verification-section">
    <div class="section-text">
        <div class="section-title">
            <span class="number">03</span>
            <h2>SIMPAN DAN VERIFIKASI</h2>
        </div>
        <p>Simpan data anda dengan baik, karena akan di verifikasi oleh pihak 
            basecamp pada hari anda mendaki, screenshot data anda agar memudahkan anda ketika saat di 
            basecamp tidak ada sinyal yang memungkinkan bisa memuat data anda.</p>
        <form class="feedback-form" action="
        <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#data-section" method="POST">
            <label for="pesan_feedback">SARAN DAN KRITIK :</label>
            <textarea id="pesan_feedback" name="pesan_feedback" rows="5" required></textarea>
            <button type="submit" name="submit_feedback">KIRIM</button>
        </form>
    </div>

    <div class="verification-image">
        <img src="img/bokingtiket3.jpg" alt="Orang berdiri di tepi danau berkabut">
    </div>
</section>

    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-column">
                <h4>Tiket Pendakian</h4>
                <p>BOOKING ONLINE SELAMA 24 JAM. AMANKAN PERJALANAN ANDA UNTUK BERPETUALANGAN DI GUNUNG.</p>
                <span>contact us: 082749594943</span>
            </div>
            <div class="footer-column">
                <h4>akses cepat</h4>
                <ul>
                <li><a href="beranda.html">beranda</a></li>
                <li><a href="bookingtiket.php">booking tiket</a></li>
                <li><a href="panduan.html">Panduan</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>ikuti jejak kami</h4>
                <ul>
                    <li><a href="#">instagram</a></li>
                    <li><a href="#">facebook</a></li>
                    <li><a href="#">youtube</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>