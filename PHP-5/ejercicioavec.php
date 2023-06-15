
<select name="combo">
    <option value="0">Selecciona el año</option>

    <?php
    $arreglo = array();
    for ($i = 1950; $i <= 2023; $i++) {
        $arreglo[] = $i;
    }

    for ($z = 0; $z < count($arreglo); $z++) {
        ?>
        <option value="<?php echo $arreglo[$z]; ?>" title="<?php echo $arreglo[$z]; ?>">
            <?php echo $arreglo[$z]; ?>
        </option>
        <?php
    }
    ?>

</select>






