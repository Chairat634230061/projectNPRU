<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
    require_once "server.php";
    session_start();
    if (!isset($_SESSION['admin_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: login_admin.php');
    }

     /* ---delete---  */ 

     if (isset($_GET['delete'])) {
        $delete_id = $_GET['delete'];
        $deletestmt = $conn->query("DELETE FROM studentuser WHERE id = $delete_id");
        $deletestmt->execute();

        if ($deletestmt) {
            $_SESSION['success'] = "Data has been deleted successfully";
            echo "<script>
            $(document).ready(function() {
                Swal.fire({
                    title: 'ลบข้อมูลนี้เรียบร้อย',
                    icon: 'success',
                    timer: 5000,

                });
            })
        </script>";
        header("refresh:10; url=adminActivity.php");
           
        
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./page/css/admin.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#example').DataTable();
        } );
    </script>
     <!-- ฟอน -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@500&family=Josefin+Sans&family=Prompt:wght@300&display=swap" rel="stylesheet">
   
    <?php include './page/admin/adminBa.php'?>
    </head>
<body>
<div class = 'conta'>

<div class = 'stdeber'>
<p>เมนู</p>
<a href="adminActivity.php" class ="Databutton" >กิจกรรม</a>
        <a href="adminTeacher.php" class ="Databutton" >ผู้ดูแล</a>
        <a href="adminStudent.php" class ="Databutton" >นักศึกษา</a>
        
        <br>
        <hr noshade>
    <div >
  
    <button class = "Databutton"><a href="adminHome.php">ข้อมูลรอยืนยัน</a></button> 
  </div>

    </div>
    <?php include './page/admin/studentModal.php'?> 
    
    </div>



















 <!-- jquery -->
 <script> src="https://code.jquery.com/jquery-3.7.0.min.js"</script>
    <script> src= "https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"</script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- ฟอน -->
    <style>
     @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@500&family=Josefin+Sans&family=Prompt:wght@300&display=swap');
    </style>
    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- โชว์ตัวอย่างรูป -->
<script>
        let imgInput = document.getElementById('imgInput');
        let previewImg = document.getElementById('previewImg');

        imgInput.onchange = evt => {
            const [file] = imgInput.files;
                if (file) {
                    previewImg.src = URL.createObjectURL(file)
            }
        }

    </script>

</body>
</html>