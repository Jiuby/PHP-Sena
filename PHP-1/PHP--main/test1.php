<?php

$base = 20; 
$altura = 5; 
$area = ($base * $altura) / 2; 
echo "El área del triángulo es: " . $area . "<br>";

$radio = 5; 
$area = pi() * pow($radio, 2); 
echo "El área del círculo es: " . $area . "<br>";

$lado = 5; 
$areaA = $lado * $lado; 
echo "El área del cuadrado es: " . $areaA . "<br>";


if ($area > $areaA) {
    echo "El área del círculo es mayor que el área del cuadrado";
} else {
     echo "El área del círculo es menor que el área del cuadrado";
}
echo "<br>";

$sexo = "Pescado";

switch ($sexo) {
  case "Masculino":
    echo "La persona es de sexo masculino.";
    break;
  case "Femenino":
    echo "La persona es de sexo femenino.";
    break;
  default:
    echo "El valor ingresado no es válido.";
    break;
}



?>
