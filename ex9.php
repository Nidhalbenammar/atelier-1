<?php
$nombre = 15; 

if ($nombre % 3 == 0 && $nombre % 5 == 0) {
    echo "Le nombre est à la fois un multiple de 3 et de 5.";
} else {
    echo "Le nombre n'est pas à la fois un multiple de 3 et de 5.";
}