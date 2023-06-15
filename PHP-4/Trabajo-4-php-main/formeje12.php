<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="ejercicio_12.php" method="POST">
  <label>Placa del primer bus:</label>
  <input type="text" name="placa1" required><br><br>
  <label>Número de pasajeros transportados por el primer bus:</label>
  <input type="number" name="pasajeros1" required><br><br>
  <label>Valor del pasaje del primer bus:</label>
  <input type="number" name="valor1" required><br><br>
  <label>Placa del segundo bus:</label>
  <input type="text" name="placa2" required><br><br>
  <label>Número de pasajeros transportados por el segundo bus:</label>
  <input type="number" name="pasajeros2" required><br><br>
  <label>Valor del pasaje del segundo bus:</label>
  <input type="number" name="valor2" required><br><br>
  <input type="submit" value="Calcular bus con más dinero recogido">
</form>

</body>
</html>