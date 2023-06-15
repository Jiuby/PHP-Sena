<?php
$vector = array();

for ($num = -5; $num <= 10; $num++) {
    $vector[] = $num;
}
?>

<table>
    <tr>
        <th>Número</th>
    </tr>
    <?php foreach ($vector as $num) { ?>
        <tr>
            <td><?php echo $num; ?></td>
        </tr>
    <?php } ?>
</table>