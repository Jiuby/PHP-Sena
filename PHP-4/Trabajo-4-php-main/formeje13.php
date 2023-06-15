<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="ejercicio_13.php" method="POST">
  <label>Tipo de trabajador:</label>
  <select name="tipo" required>
    <option value="FIJO">FIJO</option>
    <option value="TEMPORAL">TEMPORAL</option>
  </select><br><br>
  <label>Nombre:</label>
  <input type="text" name="nombre" required><br><br>
  <label>Número de horas trabajadas:</label>
  <input type="number" name="horas" required><br><br>
  <label>Salario básico hora:</label>
  <input type="number" name="salario" value="6000" readonly><br><br>
  <label>Total de deducciones:</label>
  <input type="number" name="deducciones" value="0"><br><br>
  <label>Total de bonificaciones:</label>
  <input type="number" name="bonificaciones" value="0"><br><br>
  <input type="submit" value="Calcular salario neto">
</form>

</body>
</html>