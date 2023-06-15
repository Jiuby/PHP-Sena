<?php

$meses[0]="Enero";
$meses[1]="Febrero";
$meses[2]="Marzo";
$meses[3]="Abril";
$meses[4]="Mayo";
$meses[5]="Junio";
$meses[6]="Julio";
$meses[7]="Agosto";
$meses[8]="Septiembre";
$meses[9]="Octubre";
$meses[10]="Noviembre";
$meses[11]="Diciembre";

?>
<select name="combo">
<option value="0">Selecciones el mes</option>

<?php
for ($z=0; $z<count($meses);$z++){
?>
<option value="<?php echo $meses[$z]?>" title="<?php echo $meses[$z]?>">
<?php echo $meses[$z]?>

</option>
<?php

}

?>

</select>

