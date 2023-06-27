<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);
echo "<br/>";

var_dump($numero1 < $numero2);
echo "<br/>";

var_dump($numero1 >= $numero2);
echo "<br/>";

var_dump($numero1 <= $numero2);
echo "<br/>";

// Verificar si el valor es igual, independientemente de que tipo de dato sea
var_dump($numero2 == $numero3);
echo "<br/>";

var_dump($numero2 == $numero4);
echo "<br/>";


// Realizar verificacion de igualdad por valor y tipo de dato
var_dump($numero2 === $numero4);
echo "<br/>";

// -1 Si Izquierda es menor, 0 Si es igual, 1 Si izquierda es mayor
var_dump($numero1 <=> $numero2);
echo "<br/>";

var_dump($numero2 <=> $numero3);
echo "<br/>";

var_dump($numero2 <=> $numero1);
echo "<br/>";

include 'includes/footer.php';