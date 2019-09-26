<?php

$radius = $_GET['radius'];
$height = $_GET['height'];

$volume = 1/3 * 3.14 * $radius * $radius * $height;

$l = sqrt($height * $height + $radius * $radius);
$surface = 3.14 * $radius * $radius + 3.14 * $radius * $l;

echo("Objętość stożka wynosi: " . $volume . "<br>Pole powierzchni stożka wynosi: " . $surface );

?>