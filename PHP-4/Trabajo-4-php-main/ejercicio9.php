<?php
$mil = $_POST["mil"];
$dosmil = $_POST["dosmil"];
$cincomil = $_POST["cincomil"];
$diezmil = $_POST["diezmil"];
$veintemil = $_POST["veintemil"];
$cincuentamil = $_POST["cincuentamil"];

$total = $mil*1000 + $dosmil*2000 + $cincomil*5000 + $diezmil*10000 + $veintemil*20000 + $cincuentamil*50000;

echo "El total de dinero que posee es: $" . $total . "<br>";

if ($mil > 0) {
  $billete_mas_pequeno = 1000;
}
if ($dosmil > 0) {
  $billete_mas_pequeno = 2000;
}
if ($cincomil > 0) {
  $billete_mas_pequeno = 5000;
}
if ($diezmil > 0) {
  $billete_mas_pequeno = 10000;
}
if ($veintemil > 0) {
  $billete_mas_pequeno = 20000;
}
if ($cincuentamil > 0) {
  $billete_mas_pequeno = 50000;
}

echo "El billete más pequeño que tiene es de $" . $billete_mas_pequeno;
?>
