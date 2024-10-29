<?php
    $msg = "じゃんけん勝負！　好きな手を出してね";
    $hands = array("グー","チョキ","パー");
      

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $your = $_POST["your_Hands"];
        $enemy = array_rand($hands,1);  


        switch($enemy){
            case "0";
                $enemy_hands = "じゃんけん グー！";
            break;

            case "1";
                $enemy_hands = "じゃんけん チョキ!";
            break;

            case "2";
                $enemy_hands = "じゃんけん パー!";
            break;
        }

        if($your == $enemy){
            $result = "あいこ!";
            $msg = "もう１回勝負!";
        }elseif($your==0&&$enemy==1 || $your==1&&$enemy==2 || $your==2&&$enemy==0){
            $result = "勝ち!";
            $msg = "やるじゃん";
        }else{
            $result = "お前の負け!";
            $msg = "出直してこい";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>じゃんけん</title>
</head>
<body>
    <div class="main">
        <?php if($_SERVER["REQUEST_METHOD"] === "POST") :?>
            <p>
                <?php echo $enemy_hands ?>
                <?php echo $result ?>
                <?php echo $msg ?>
            </p>
        <?php else: ?>
            <p><?php echo $msg ?></p>
        <?php endif ?>
        
        <form action="./105.php" method="POST">
            <?php foreach($hands as $key => $value): ?>
                <button type="submit" name="your_Hands" value="<?php echo $key ?>"><?php echo $value ?></button>
            <?php endforeach ?>
        </form>
    </div>
</body>
</html>

<style>
    .main{
        max-width: 400px;
        margin: 0 auto;
        margin-top: 20vh;
    }
</style>