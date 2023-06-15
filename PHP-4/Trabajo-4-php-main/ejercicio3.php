<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$cant_taxis = $_POST["cant_taxis"] ?? 0;
	$cant_buses = $_POST["cant_buses"] ?? 0;
	$cant_particulares = $_POST["cant_particulares"] ?? 0;
	$cant_motos = $_POST["cant_motos"] ?? 0;

	$precio_taxi = 3000;
	$precio_bus = 10000;
	$precio_particular = 5000;
	$precio_moto = 2000;

	$total_taxi = $cant_taxis * $precio_taxi;
	$total_bus = $cant_buses * $precio_bus;
	$total_particular = $cant_particulares * $precio_particular;
	$total_moto = $cant_motos * $precio_moto;

	$total_lavadero = $total_taxi + $total_bus + $total_particular + $total_moto;

	echo "<h2>Resultados:</h2>";
	echo "Total recaudado por taxis: $total_taxi<br>";
	echo "Total recaudado por buses: $total_bus<br>";
	echo "Total recaudado por particulares: $total_particular<br>";
	echo "Total recaudado por motos: $total_moto<br>";
	echo "Total recaudado en el lavadero: $total_lavadero";
}
?>
