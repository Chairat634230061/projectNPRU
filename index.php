<?php 
    session_start();
    

    if (!isset($_SESSION['email'])) {  /*ถ้าไม่มีการล็อคอินเข้ามาให้ไปที่หน้าล็อคอืน*/ 
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {    /*ถ้ามีการกดล็อคเอ้าจะกลับไปหาล็อคอิน*/ 
        session_destroy();
        unset($_SESSION['email']);
        header('location: login.php');
    }

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="homeheader">
        <h2>Home Page</h2>
    </div>

    <div class="homecontent">
        <?php if(isset($_SESSION['username'])) : ?>   <!--เช็คแจ้งเตือนด้วย isset-->
            <div class = "success">
            <h3>
                <?php
                    echo $_SESSION['success'];
                    unset ($_SESSION['success']);
                ?>
            </h3>
            </div>
            <?php endif ?>

        <?php if (isset($_SESSION['username'])) : ?> 
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="index.php?logout='1'" style = "color: red;">ออกจากระบบ</a></p>
        <?php  endif ?>
    </div>
    
</body>
</html>