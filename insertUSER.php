<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php 
session_start();
require_once "server.php";

if (isset($_POST['submituser'])) {
    $user_activity = $_POST['user_activity'];
    $studentID = $_POST['studentID'];
    $collect_hours = $_POST['collect_hours'];
    $name_message = $_POST['name_message'];
    $img = $_FILES['img'];

    $allow = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    $extension = explode(".", $img['name']);
    $fileActExt = strtolower(end($extension));
    $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
    $filePath = 'uploadsIMG/'.$fileNew;

    if (in_array($fileActExt, $allow)) {
        if ($img['size'] > 0 && $img['error'] == 0) {
            if (move_uploaded_file($img['tmp_name'], $filePath)) {

    $sql = $conn->prepare("INSERT INTO info_student(user_activity, studentID, collect_hours, img, name_message) 
    VALUES(:user_activity, :studentID, :collect_hours, :img, :name_message)");
    $sql->bindParam(":user_activity", $user_activity);
    $sql->bindParam(":studentID", $studentID);
    $sql->bindParam(":collect_hours", $collect_hours);
    $sql->bindParam(":img", $fileNew);
    $sql->bindParam(":name_message", $name_message);
    $sql->execute();

        if ($sql) {
            $_SESSION['success'] = "Data has been inserted succesfully";
            echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        title: 'เพิ่มข้อมูลเรียบร้อย',
                        icon: 'success',
                        timer: 5000,
                       showConfimButton: false,
                    });
                })
            </script>";
            header("refresh:2; url=uhot.php");
        } else {
            $_SESSION['error'] = "Data has not been inserted succesfully";
            echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        title: 'เพิ่มข้อมูลไม่สำเร็จ',
                        icon: 'error',
                        timer: 5000,
                       showConfimButton: false,
                    });
                })
            </script>";
            header("refresh:2; url=uhot.php");
        }
    }
        }
    }
}
?>