<?php
$x = 75;
$y = 25;

function additional() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

additional();
echo $z;
?>