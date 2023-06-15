
<?php

		$placa = $_POST["placa"];
		$pasajeros = $_POST["pasajeros"];
		$ruta = $_POST["ruta"];

		if (empty($placa) || empty($pasajeros) || empty($ruta)) {
			echo "<p>Debe ingresar todos los datos.</p>";
		} else {

			if ($ruta == "A") {
				$precio_pasaje = 1200;
			} else {
				$precio_pasaje = 1000;
			}
			$dinero_recolectado = $precio_pasaje * $pasajeros;

			echo "<p>Placa del bus: $placa</p>";
			echo "<p>Número de pasajeros: $pasajeros</p>";
			echo "<p>Ruta: $ruta</p>";
			echo "<p>Precio del pasaje: $precio_pasaje</p>";
			echo "<p>Dinero recolectado: $dinero_recolectado</p>";
		}
	?>
