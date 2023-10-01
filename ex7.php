<?php
$a=10;
$b=10;

$operateurcomb=$a<=>$b;

switch ($operateurcomb){
    case -1:
        echo $a." est inférieur a ".$b;
        break;
    case 0 :
        echo $a." et ".$b." sont égaux";
        break;
    case 1 :
        echo $a." est supérieur a".$b;
        break;
}