<?php
while (true) {
    $nombre = rand(); 
    if ($nombre % 2 == 0) {
        echo "Le premier entier pair obtenu par tirage aléatoire est : $nombre";
        break; 
    }
}