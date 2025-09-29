<?php

$loremIpsum = "blablablablablablablablablablablablabla.
saya capek banget hari ini guyss, yallah peningnya tapi gaapa namanya hidup
seperti roda berputar kadang diatas kadang kadang kempes atau bocor,
yaudah lah semoga ada hal baik yang akan datang";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum). "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum). "<br>";
echo "<p>". strtoupper($loremIpsum). "</p>";
echo "<p>". strtolower($loremIpsum). "</p>";
?>