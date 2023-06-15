<!DOCTYPE html>
<html>
<head>
	<title>Cálculo de dinero recolectado</title>
</head>
<body>
	<h1>Cálculo de dinero recolectado en una ruta de bus</h1>
	<form action="ejercicio16.php" method="post">
		<label for="placa">Placa del bus:</label>
		<input type="text" name="placa" id="placa" required><br><br>
		<label for="pasajeros">Número de pasajeros:</label>
		<input type="number" name="pasajeros" id="pasajeros" required><br><br>
		<label for="ruta">Ruta:</label>
		<select name="ruta" id="ruta" required>
			<option value="">Seleccione una opción</option>
			<option value="A">Ruta A</option>
			<option value="B">Ruta B</option>
		</select><br><br>
		<input type="submit" value="Calcular">
	</form>
</body>
</html>
