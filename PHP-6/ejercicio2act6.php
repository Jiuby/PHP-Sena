<?php

$paises = array(
    0 => "Colombia",
    1 => "Chile",
    2 => "Nicaragua",
    3 => "Perú",
    4 => "Mexico",
    5 => "Venezuela",
    6 => "Ecuador"
);

// Devolver un vector con todos los valores
$valores = array_values($paises);
print_r($valores);
echo "<br>";

// Ordenar los valores en forma descendente
rsort($paises);
foreach ($paises as $indice => $valor) {
    echo "países[$indice] = $valor <br>";
}

echo "<br>";

// Ordenar los valores en forma ascendente
sort($paises);
foreach ($paises as $indice => $valor) {
    echo "países[$indice] = $valor <br>";
}

echo "<br>";

// Ordenar clave-valor según "valor" de forma descendente
arsort($paises);
foreach ($paises as $clave => $valor) {
    echo "$clave = $valor <br>";
}

?>

