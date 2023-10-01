<?php
echo "<form method='POST'>
    <input type='text' size='3' name='n1'>
    <label for='plus'>+<label>
    <input type='text' size='3' name='n2'>
    <input type='submit' value='Calculer'>";
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $nombre1=$_POST["n1"];
        $nombre2=$_POST["n2"];
        $somme=$nombre1+$nombre2;
        echo "<p>la somme est : $somme";
    }
    
