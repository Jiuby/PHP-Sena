    <?php

    $vector = range(1, 150);


    shuffle($vector);

    foreach ($vector as $value) {
        echo $value . PHP_EOL. "<br>";
    }
