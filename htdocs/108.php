<?php
    session_start();
    $hands = array('1'=>'グー','2'=>'チョキ','3'=>'パー');
    if(!isset($_SESSION['count'])){
        $_SESSION['count']=0;
        $_SESSION['win'] = 0;
        $_SESSION['draw'] = 0;
        $_SESSION['lose'] = 0;
    }else{
        $_SESSION['count']++;
    }

    // 結果は２回目から出したいので$_SESSIONを２にする
    if($_SESSION['count']>=2){ 
        $your = $_POST['your_Hands'];
        $enemy = array_rand($hands,1);

        if($your == $enemy){
            $result = "あいこ!";
            $_SESSION['draw']++;
        }elseif($your==0&&$enemy==1 || $your==1&&$enemy==2 || $your==2&&$enemy==0){
            $result = "勝ち!";
            $_SESSION['win']++;
        }else{
            $result = "お前の負け!";
            $_SESSION['lose']++;
        }
       
    }
    // sessionが４回目はresultなので、5回目以降がないようにsessionを破棄する
    if($_SESSION['count']>=4){
        session_destroy();
    }   
    
    ?>

    



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>じゃんけん３連勝負</title>
    </head>
    <body>
        <!-- sessionが０の時はタイトルを出す -->
         <?php if(($_SESSION['count'])==0): ?>
            <h3>じゃんけんゲーム！</h3>
            <form action="./108.php" method="post">
            <button type="submit">あそぶ</button>
            </form>
         <?php endif ?>

        <!-- session4がの時はリザルトを出す -->
         <?php if(($_SESSION['count'])==4): ?>
            <h3>結果発表！</h3>
            <p>あなたは<?php echo $_SESSION['win']?>勝<?php echo $_SESSION['lose'] ?>敗<?php echo $_SESSION['draw'] ?>分</p>
            <form action="./108.php" method="post">
                <button type="submit">またあそんでね</button>
            </form>
         <?php endif ?>


         <!-- sessionが1~3のときは結果付きのじゃんけんをさせる -->
          <?php if($_SESSION['count']!=0 && $_SESSION['count']!=4): ?>
            <form action="./108.php" method="post">
                <?php foreach($hands as $key => $value): ?>
                    <button type="submit" name="your_Hands" value="<?php echo $key ?>"><?php echo $value ?></button>
                <?php endforeach ?>
            </form>
             <div>
             </div>
          <?php endif ?>
    </body>
</html>