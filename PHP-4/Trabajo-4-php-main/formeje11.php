<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="ejercicio_11.php" method="POST">
  <label>Nombre del primer trabajador:</label>
  <input type="text" name="nombre1" required><br><br>
  <label>Salario bruto del primer trabajador:</label>
  <input type="number" name="bruto1" required><br><br>
  <label>Deducciones del primer trabajador:</label>
  <input type="number" name="deducciones1" required><br><br>
  <label>Bonificaciones del primer trabajador:</label>
  <input type="number" name="bonificaciones1" required><br><br>
  <label>Nombre del segundo trabajador:</label>
  <input type="text" name="nombre2" required><br><br>
  <label>Salario bruto del segundo trabajador:</label>
  <input type="number" name="bruto2" required><br><br>
  <label>Deducciones del segundo trabajador:</label>
  <input type="number" name="deducciones2" required><br><br>
  <label>Bonificaciones del segundo trabajador:</label>
  <input type="number" name="bonificaciones2" required><br><br>
  <input type="submit" value="Calcular salario neto">
</form>

</body>
</html>