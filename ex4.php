<?php
$nom="Ben Ammar";
$prenom="Nidhal";
echo $nom." ".$prenom;
echo "<br>";
echo $nom ."<br>". $prenom;
echo "<br>";
echo "<table border='1'>
        <tr>
        <td>Nom</td>
        <td>Prénom</td>
        </tr>
        <td>$nom</td>
        <td>$prenom</td>
        </tr>
        </table>";
echo "<br>";
$info=$nom.$prenom;
echo "<script>
    alert('$info');
    </script>
";

