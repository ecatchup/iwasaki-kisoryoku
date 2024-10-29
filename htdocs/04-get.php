<?php
    $userName = '';
    $password = '';
    if ($_SERVER["REQUEST_METHOD"] === "GET") {
        if(isset($_GET["username"])){
            $userName = $_GET["username"];
        }

        if(isset($_GET["password"])){
            $password = $_GET["password"];
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" rel="stylesheet">
    <title>get</title>
</head>
<body>
    <div class="form">
        <h3> Login </h3>
        <form action="./04-get.php" method="get" autocomplete="off">

            <div class="input username">
                <i class="fa-regular fa-user"></i>
                <input type="text" name="username" placeholder="username">
            </div>
            
            <div class="input password">
                <i class="fa-solid fa-lock"></i>
                <input type="text" name="password" placeholder="password">
            </div>

            <div class="submit">
                <button type="submit">送信</button>
            </div>
           
        </form>
    </div>
   
</body>
</html>


<style>
    body{
        background-color: #F4F5F7;
    }

    input {
        outline: none;
        background-color: #F4F5F7;
    }

    i{
        opacity: 0.4;
        margin-right: 4px;
    }

    button{
        padding: 0;
        border: none;
        outline: none;
        font: inherit;
        color: inherit;
        background: none
    }

    .form{
        max-width: 350px;
        margin: 0 auto;
        margin-top: 20vh;
        border: 1px solid #000;
        display: flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
    }

    .input{
        width: 200px;
        margin-top: 10px;
        outline: none;
    }

    .form input[type="text"]{
        border: 0;
    }

    .input::after{
        content: '';
        display: block;
        width: 100%;
        border-style: solid;
        border-color: #000;
    }

    .submit {
        margin-top: 30px;
        margin-bottom: 10px;
        text-align: center;
        width: 100%;
        padding: 3px;
        background-color: #EAEAEA;
    }

    .submit:hover{
        background-color: #D1D1D1;
    }

</style>