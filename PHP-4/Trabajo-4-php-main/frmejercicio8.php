<!DOCTYPE html>
<html>
<head>
	<title>Factura de servicios públicos</title>
</head>
<body>
	<h2>Factura de servicios públicos</h2>
	<form action="ejercicio8.php" method="post">
		<label for="energia">Total de KV de energía:</label>
		<input type="number" name="energia" required><br><br>
		<label for="valorK">Valor del K:</label>
		<input type="number" name="valorK" required><br><br>
		<label for="agua">Total de M3 de agua:</label>
		<input type="number" name="agua" required><br><br>
		<label for="valorM3">Valor del M3:</label>
		<input type="number" name="valorM3" required><br><br>
		<label for="impulsos">Total de impulsos telefónicos:</label>
		<input type="number" name="impulsos" required><br><br>
		<label for="valorImpulso">Valor del impulso:</label>
		<input type="number" name="valorImpulso" required><br><br>
		<input type="submit" value="Calcular factura">
	</form>
</body>
</html>
