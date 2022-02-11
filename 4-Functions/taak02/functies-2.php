<!DOCTYPE html>
<html lang="en">

<body>

<?php  function rekenUit(  $a,  $b, $c ){
$abc = $a + $b + $c;
return $abc;
}
echo "Als ik de getallen 5,5 en 5 bij elkaar optel, is de uitkomst"." " .rekenUit(5,5,5);
echo "<br><br>";
echo "Als ik de getallen 10,20 en 30 bij elkaar optel, is de uitkomst". " " .rekenUit(10,20,30);
echo "<br><br>";
echo "Als ik de getallen 40,50 en 60 bij elkaar optel, is de uitkomst"." ".rekenUit(40,50,60);

?>
</body>

</html>