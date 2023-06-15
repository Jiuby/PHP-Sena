<?php
		// Obtener los valores ingresados por el usuario
		$altura = $_POST['altura'];
		$base = $_POST['base'];
		$radio = $_POST['radio'];

		// Calcular el área del triángulo
		$area_tri = ($base * $altura) / 2;

		// Calcular el área del círculo
		$area_circ = pi() * pow($radio, 2);

		// Mostrar los resultados en pantalla
		echo "<p>El área del triángulo es: $area_tri</p>";
		echo "<p>El área del círculo es: $area_circ</p>";
	?>

