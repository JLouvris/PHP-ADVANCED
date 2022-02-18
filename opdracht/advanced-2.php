<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eindopdracht Jurgen</title>
</head>
<body>
<center>

<?php 

echo"Tekst Kleur is --> " .$_POST['textkleur'];
echo"<br/>";
echo"<br/>";
echo"Achtergrond Kleur is --> " .$_POST['achterkleur'];

?>

    <style>
     body {
        background-color: <?php echo $_POST["achterkleur"];?>;
    }
    </style>

    <style>
    body {
        color: <?php echo $_POST["textkleur"];?>;
    }
    </style>

<br/>

    <style>
    table, tr, td {
    border: <?php echo $_POST["tabelrand"]; ?>px solid black;
    padding: <?php echo $_POST["padding"]; ?>px solid black;
    text-align: center;
}
    </style>

<br/>
<br/>
  
  <?php
  echo "<table>";
    $informatie = array(
        "Key"           =>      "Value",
        "Naam"          =>      "Jurgen Louvris",
        "Leeftijd"      =>      "17",
        "Klas"          =>      "1C",
        "Muziek"        =>      "KA",
        "Merk scooter"  =>      "Mio",
        "Woonplaats"    =>      "Mijdrecht",
        "Eten"          =>      "Grieks"
    );

    function maakRij($keys, $value){
        echo"<tr>";
        echo"<td>";
        echo"$keys";
        echo"</td>";
        echo"<td>";
        echo"$value";
        echo"</td>";
        echo"</tr>";
    
    }
    foreach ($informatie as $keys => $value) {
        maakRij($keys, $value);
    }

    echo"</table>";
    ?>
</table>

<center/>
</body>
</html>