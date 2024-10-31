<?php
    $numbers = array(1,2,3,4,5,6,7,8,9);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    table,td,th{
        border: 1px solid #000 ;
        border-collapse:collapse;
        padding: 3px;
        text-align: center;
    }

    td,th{
        font-size: 24px;
        min-width: 30px;
    }
</style>

<body>
    <table>
        <tr>
            <th>X</th>
            <?php foreach ($numbers as $number): ?>
                <th> <?php echo $number ?>  </th>
            <?php endforeach ?>
        </tr>

        <?php foreach ($numbers as $number): ?>
        <tr>
            <th><?php echo $number ?></th>
            <?php foreach ($numbers as $number2): ?>
                <td><?php echo $number * $number2 ?></td>
            <?php endforeach ?>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>