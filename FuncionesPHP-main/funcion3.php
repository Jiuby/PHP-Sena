<body>
	<h1>Mi primera función</h1>
	<?php etiqueta_html('P', 'Estoy estudiando funciones de php en el Sena');?>
</body>

<?php
	function etiqueta_html($etiqueta, $contenido){
		echo "<$etiqueta>$contenido</$etiqueta>";
	}
?>