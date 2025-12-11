<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh HTML Aman</title>
</head>
<body>
    <h2>Html Aman</h2>

    <form method="post" action="">
        <label for="input">Masukkan Nama:</label><br>
        <input type="text" name="input" id="input">
        <br><br>
        <label for="email">Masukkan Email:</label><br>
        <input type="text" name="email" id="email" required>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];

        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        echo "<h3>Hasil Input Aman:</h3>";
        echo "<p>$input</p>";

        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>emaiL: " . htmlspecialchars($email) . "</p>";
        } else {
            echo "<p>Email tidak valid! Harap masukkan format email yang benar.</p>";
        }
    }
    ?>
</body>
</html>
