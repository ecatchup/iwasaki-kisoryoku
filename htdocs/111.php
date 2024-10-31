<?php
    $text = "Hello";
    $text2 = "World";
    $text3 = "110";

    $number = 101;
    $number2 = 199;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文字の接続とキャスト</title>
</head>
<body>
    <p>Hello.World</p>
    <p><?php echo $text . $text2 ?></p>

    <p>Hello.101(int)</p>
    <p><?php echo $text . $number ?></p>

    <p>101(int)+199(int)</p>
    <p><?php echo $number + $number2 ?></p>

    <p>101(int).199(int)</p>
    <p><?php echo $number.$number2?></p>

    <p>101(int)+110(str)</p>
    <p><?php echo $number + $text3 ?></p>
</body>
</html>