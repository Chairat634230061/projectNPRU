<?php 
    session_start();
    require_once "server.php" ;


?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- ฟอน -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@500&family=Josefin+Sans&family=Prompt:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="login-box">
        <img src="./img/logo.png" alt="Logo" class = "logo">
        

        <div class="login_regi">
            <button button type="submit" name='login_user' class="btn"><a href="login_user.php">เข้าสู่ระบบนักศึกษา</a></button>
            <button button type="submit" name='login_user' class="btn"><a href="login_admin.php">เข้าสู่ระบบผู้ดูแล</a></button>
        </div>
    
    


        <!-- ฟอน -->
    <style>
     @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@500&family=Josefin+Sans&family=Prompt:wght@300&display=swap');
    </style>
</body>
</html>