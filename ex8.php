<?php
echo "<form method='POST'>
    <input type='text' name='champ'>
    <input type='submit' value='tester'>
    </form>";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $champ=$_POST["champ"];
    if($champ%2==0){
        echo "<p>Ce nombre est pair</p>";
    }
    else{
        echo "<p>Ce nombre n'est pas pair</p>";
    }
}
