<head>
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
<?php
$y = $_POST['a'];
$z = $_POST['b'];
if (isset ($_POST['btsuma'])){
    $c = $y + $z; 
    echo " $y + $z es ".$c;
}
if (isset ($_POST['btresta'])){
    $c = $y - $z; 
    echo " $y - $z es ".$c;
}
if (isset ($_POST['btmult'])){
    $c = $y * $z; 
    echo " $y * $z es ".$c;
}
if (isset ($_POST['btdiv'])){
    if($z != 0) $c = $y / $z;
    else $c = 0; 
    echo " $y ÷ $z es ".$c;
}

?>

<form name="calc" action="ejerciciovec6.php" method="POST">
A: <input type="text" name="a" size="10" value="<?php echo $y; ?>">
B: <input type="text" name="b" size="10" value="<?php echo $z; ?>">

<br>
<input type="submit" value="Suma" name="btsuma">
<input type="submit" value="Resta" name="btresta">
<input type="submit" value="Mult" name="btmult">
<input type="submit" value="División" name="btdiv">

</form>
</body>
</html>