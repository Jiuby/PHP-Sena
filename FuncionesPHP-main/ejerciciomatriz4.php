<meta charset="UTF-8">
<?php
echo "Produccion del cafe 2004-2007";
$Array=array(
array("Costa rica", 456.4, 7845.12,7888.45,7451.23),
array("region oriental",3007.6,500.4,456.42,745.12),
array("region sierra",5612.2,7854.7,30518,745.41),
array("Total",456.4+3007.6+5612.2,7845.12+500.4+7854.7,7888.45+456.42+30518,8950.76));
echo "<table border='3'>";

echo"<thead> <tr> <th> Descripcion </th>
<th> 2004</th>
<th> 2005 </th>
<th> 2006 </th>
<th> 2007 </th> </tr> </thead>";

foreach ($Array as $key => $value) {

	foreach ($value as $key1 => $value1){
		echo  "<td>".$value1."</td>";
	}
	echo "</tr>";
}
echo"</table>"."<br>";
echo "El valor del año 2004, de la region de la costa es: ".$Array[0][1]."<br>";
echo "El total del año 2007, de la region de la Sierra es: ".$Array[3][4]."<br>";
echo "El valor del año 2006, de la region de la Oriental es: ".$Array[1][3]."<br>";
echo "El valor del año 2005, de la region de la costa es: ".$Array[0][2]."<br>";
echo "El valor del año 2004, de la region de la Oriental es: ".$Array[1][1]."<br>";
?>