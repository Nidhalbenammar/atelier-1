<?php
$a = 5 ; 
if(is_integer($a) && ($a<10 && $a>5) &&  ($a%2==0)) 
echo "VRAI" ; 
else echo "fAUX" ;
 
//Résultat = fAUX

$b="TRUE";  
$c=FALSE;
echo($b AND $c)?1:0;

//Résultat = fAUX0

echo ($b OR $c)?1:0;

//Résultat = fAUX01

$nom=""; 
$sexe="M";

echo($nom=="")?"inconnu":$nom; 

//Résultat = inconnu

echo (($sexe=="F")?"Madame":"Monsieur");

//Résultat = Monsieur

$nom= "Cherif"

echo $nom ?? "inconnu" 
echo "bonjour".($prenom ??"inconnu") 
echo "bonjour".($prenom ?? $nom ?? "inconnu") 





