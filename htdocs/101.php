<?php
   $text = "Hello World"
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <p class="text"><?php echo $text ?></p>
</body>
</html>

<style>
    .text{
        text-align: center;
        font-size: 70px;
        font-weight: bold;
        -webkit-background-clip: text;
        color: transparent;
        background-image: linear-gradient(45deg,#00c3ff 0%,#ffff1c 33%,#90D7EC 66%);
        display: block;
    }
</style>