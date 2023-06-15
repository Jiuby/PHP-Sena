<html>
    <head>
        <title>Descuento Manzanas</title>
    </head>
    <body>
        <h1>Descuento Manzanas</h1>
        <?php 
        echo $_GET["nombre"];
        $canManzanas =$_GET["canManz"];
        $valUnitario =$_GET["valunit"];
        //echo $valUnitario;
        $valParcial=($canManzanas*$valUnitario);
        $pordesc=0; $desc=0; $valPago=0;
        if (($canManzanas==0)|($canManzanas<=2))
        {
            
            $desc=0; $valPago=$valParcial-$desc;
        }
        else if(($canManzanas >= 2.01)&($canManzanas<=5)){
            $pordesc=10; 
            $desc = ($valParcial*$pordesc/100);
            $valPago=$valParcial-$desc;
        }
        else if(($canManzanas == 5.01)&($canManzanas<=10)){
            $pordesc=15; $desc = ($valParcial*$pordesc/100);
            $valPago=$valParcial-$desc;
        }
        else if($canManzanas > 10.01){
            $pordesc=20; $desc = ($valParcial*$pordesc/100);
            $valPago=$valParcial-$desc;
        }
        ?>
        Su valor a pagar es <?php echo $valPago?>
        discriminando así: Cantidad de kilos comprados: <?php echo $canManzanas?>,
        Descuento obtenido <?php echo $pordesc. "% ". $desc?>
        <br>
    </body>
</html>