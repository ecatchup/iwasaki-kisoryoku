<?php
    $text = '';
    $language = "Japanese";

    if($language == "Japanese"){
        $text = '公用語は日本語です';
    }elseif($language == "English"){
        $text = '公用語は英語です';
    }else{
        $text = '公用語は不明です';
    }

    $arr = ["tanaka","sato","honda","yamada"];
    $arrLength = count($arr);

    $colors = array("red","blue","yellow","green","purple","orange","brown");

    $programmingLanguage = "java";


    $teams = array(1=>"nu-toba-",2=>"kondo",3=>"ootani",4=>"yoshida",5=>"okamoto",6=>"maki",7=>"murakami");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php for($i=0;$i<$arrLength;$i++): ?>
        <div>
            <?php echo $arr[$i] ?>
            <?php echo $text ?>
        </div>  
    <?php endfor ?>

    <?php foreach($colors as $color):?>
        <p><?php echo $color ?></p>
    <?php endforeach ?>


    <?php   
        switch($programmingLanguage){
            case "C";
                $message = "彼はC言語が得意です";
            break;

            case "python";
                $message = "彼はpython言語が得意です";
            break;

            case "java";
                $message = "彼はJava言語が得意です";
            break;

            default;
                $message = "彼が得意な言語はありません";
            break;
        }

        echo $message;
     ?>

    <?php foreach($teams as $key => $value):?>
        <li><?php echo $value ?></li>
        <?php if($value=="yoshida"){
            $value = "suzuki";
        } ?>
        <li><?php echo $value ?></li>
    <?php endforeach ?>
 

</body>
</html>