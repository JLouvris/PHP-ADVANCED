<!DOCTYPE html>
<html lang="en">

<?php 
echo "<body style= \"background-color:".$_POST['color'].";\" >";
?>
Voornaam : <?php  echo $_POST["voornaam"]; ?> <br>
Achternaam:<?php echo $_POST["achternaam"];?><br>
Klas: <?php echo $_POST["klas"];?> <br>
Leeftijd: <?php echo $_POST["leeftijd"];?> <br>
Adres: <?php echo$_POST["adres"];  ?> <br>
Plaatsnaam :<?php echo $_POST["plaatsnaam"];?> <br>
<?php echo$_POST["geslacht"];?> <br>
<?php echo $_POST["color"];?>

</body>
</html> 

