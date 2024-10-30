<?php
    $arr_empry = array();
    var_dump($arr_empry);

    $arr = array("大谷","ベッツ","フリーマン");
    var_dump($arr);

    array_push($arr,"ヘルナンデス");
    var_dump($arr);

    array_pop($arr);
    var_dump($arr);

    array_unshift($arr,"山本");
    var_dump($arr);

    array_shift($arr);
    var_dump($arr);

    $key = array_search("ベッツ",$arr);
    var_dump($key);

    $team = array("17"=>"大谷","50"=>"ベッツ","5"=>"フリーマン","18"=>"山本","22"=>"カーショー");
    var_dump($team);


    $uniformNumber = array_keys($team);
    var_dump($uniformNumber);

    $name = array_values($team);
    var_dump($team);

    $teams = $team;
    foreach($teams as $key => $value){
        echo $value;
    }
?>