<?php 
    session_start();
    require_once "server.php"   /* เชื่อม server  */


?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="login-box">
        <img src="./img/logo.png" alt="Logo" class = "logo">
        
        <form action="register_db.php" method="post">
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
                <div class="success" role="alert">
                    <?php 
                        echo $_SESSION['warning'];
                        unset($_SESSION['warning']);
                    ?>
                </div>
            <?php } ?>

            <div class="user-box">
                <input type="text" class="form-control" name="firstname" aria-describedby="firstname">
                <label for="firstname" class="form-label">First name</label>
            </div>
            <div class="user-box">
                <input type="text" class="form-control" name="lastname" aria-describedby="lastname">
                <label for="lastname" class="form-label">Last name</label>
            </div>
            <div class="user-box">
                <input type="email" class="form-control" name="email" aria-describedby="email">
                <label for="email" class="form-label">Email</label>
            </div>
            <div class="user-box">
                <input type="password" class="form-control" name="password">
                <label for="password" class="form-label">Password</label>
            </div>
            <div class="user-box">
                <input type="password" class="form-control" name="c_password">
                <label for="confirm password" class="form-label">Confirm Password</label>
            </div>

            <div class="login_regi">
            <button type="submit" name="signup" class="bn30">ยืนยัน</button>
            <button class="bn31"><a href="login.php">ย้อนกลับ</a></button>
            </div>
        </form>
    
</body>
</html>