<!DOCTYPE html>
<html>

<?php

$gegevens = array ("voornaam" => "Jurgen", "Achternaam" => "Louvris", "Leeftijd" => "17", "klas" => "1C");
echo "Gegevens van Jurgen:";
echo "<br>";
echo "Voornaam : ". $gegevens["voornaam"];
echo "<br>";
echo "Achternaam : ". $gegevens["Achternaam"];
echo "<br>";
echo "Leeftijd : " . $gegevens["Leeftijd"]. " jaar " ;
echo "<br>";
echo "Klas : ", $gegevens["klas"];
?>

</body>
</html>