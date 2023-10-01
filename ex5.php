<?php
echo "<h1>Calcul sur les variables</h1>";
$TVA=0.2;
$PRIX=150;
$NOMBRE=10;
$ph=$PRIX/(1+$TVA);
$pht=$ph*$NOMBRE;
$ttc=$PRIX*$NOMBRE;
echo "<p>le HT est : $pht";
echo "<br>";
echo "<p>le TTC est : $ttc";

