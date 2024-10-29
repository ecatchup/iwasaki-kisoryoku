<?php
    $number1 = '';
    $number2 = '';
    $symbol = '';
    $ans = '';
    $error = '';
    $symbols_pre = array("+","-","*","/");
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if(!empty($_POST["number1"]) && !empty($_POST["number2"]) && !empty($_POST["symbol"])){
            if(!is_numeric($_POST["number1"])||!is_numeric($_POST["number2"])){
                $error = "数字以外が入力されています";
            }else{
                $number1 = htmlspecialchars($_POST["number1"]);
                $number2 = htmlspecialchars($_POST["number2"]);
                $symbol = $_POST["symbol"];
                
                switch($symbol){
                    case "+":
                        $ans = $number1 + $number2;
                    break;
    
                    case "-":
                        $ans = $number1 - $number2;
                    break;
    
                    case "*":
                        $ans = $number1 * $number2;
                    break;
    
                    case "/":
                        $ans = $number1 / $number2;
                        $ans = round($ans,2);
                    break;
                }
            }
        }else{
            $error =  '入力が足りません';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>四則演算</title>
</head>
<body>
    <?php if($_SERVER["REQUEST_METHOD"]==="POST"): ?>
        <form action="./103.php" method="post">
            <input type="text" name="number1"  value="<?php echo $_POST["number1"] ?>">
            <select name="symbol" id="">
                <?php foreach($symbols_pre as $symbol_pre) :?>
                    <?php if($_POST["symbol"]===$symbol_pre): ?>
                        <option value="<?php echo $symbol_pre ?>" selected><?php echo $symbol_pre ?></option>
                    <? else: ?>
                        <option value="<?php echo $symbol_pre ?>"><?php echo $symbol_pre ?></option>
                    <?php endif ?>
                <?php endforeach ?>
            </select>
            <input type="text" name="number2" value="<?php echo $_POST["number2"] ?>">
            <input type="submit" value="送信">
        </form>
        <?php if($error) :?>
            <p><?php echo $error ?></p>
        <?php else: ?>
            <p>計算結果は<span><?php echo $ans ?></span></p>
        <?php endif ?>
    <?php else: ?>
        <form action="./103.php" method="post">
            <input type="text" name="number1">
            <select name="symbol" id="">
                <?php foreach($symbols_pre as $symbol_pre) :?>
                    <option value="<?php echo $symbol_pre ?>"><?php echo $symbol_pre ?></option>
                <?php endforeach ?>
            </select>
            <input type="text" name="number2">
            <input type="submit" value="送信">
        </form>
        <p>数字を入力してください</p>
    <?php endif ?>
</body>
</html>


