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

    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="login-box">
        <img src="./img/logo.png" alt="Logo" class = "logo">
        <?php if(isset($_SESSION['error'])) { ?>
                <div class="error" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="success" role="alert">
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['warning'])) { ?>
                <div class="alert alert-warning" role="alert">
                    <?php 
                        echo $_SESSION['warning'];
                        unset($_SESSION['warning']);
                    ?>
                </div>
            <?php } ?>

   <form action="admin_db.php" method="post">
  
        <div class="user-box">
            <input type="text" name='email'>
            <label for="email">Email</label>
        </div>

        <div class="user-box">
            <input type="password" name='password'>
            <label for="password">Password</label>

        <div class="login_regi">
            <button type="submit" name='login_admin' class="btt22">เข้าสู่ระบบผู้ดูแล</button>
            
        </div>

    </form>
    
</body>
</html>