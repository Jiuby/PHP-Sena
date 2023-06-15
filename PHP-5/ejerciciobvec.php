<?php

$animal[] =  "León";
$animal[] =  "Gato";
$animal[] =  "Jirafa";
$animal[] =  "Perro";
$animal[] =  "Mutria";
$animal[] =  "Pantera";
$n = count($animal);
echo "Número de Elementos ".$n;
for($i=0;$i<$n;$i++)
echo"<br> Animal $i <h1> ".$animal[$i]."</h1>";

?>
