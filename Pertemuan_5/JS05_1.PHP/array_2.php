<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="array_2.css">
    <title></title>
</head>
<body>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis kelamin' => 'Perempuan'
    ];
    echo "<table>";
    echo "<tr>
        <th>Data</th>
        <th>Keterangan</th>
        </tr>";
    foreach ($Dosen as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";   
    ?>
</body>
</html>