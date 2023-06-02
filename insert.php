<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php 
session_start();
require_once "server.php";

/*if (isset($_POST['submit'])) {
    $name_activity = $_POST['name_activity'];
    $collect_hours = $_POST['collect_hours'];
    $img = $_FILES['img'];

        $allow = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        $extension = explode(".", $img['name']);
        $fileActExt = strtolower(end($extension));
        $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
        $filePath = 'uploadsIMG/'.$fileNew;

        if (in_array($fileActExt, $allow)) {
            if ($img['size'] > 0 && $img['error'] == 0) {
                if (move_uploaded_file($img['tmp_name'], $filePath)) {
                    $sql = $conn->prepare("INSERT INTO podo(name_activity, collect_hours, img) VALUES(:name_activity, :collect_hours, :img)");
                    $sql->bindParam(":name_activity", $name_activity);
                    $sql->bindParam(":collect_hours", $collect_hours);
                    $sql->bindParam(":img", $fileNew);
                    $sql->execute();

                    if ($sql) {
                        $_SESSION['success'] = "Data has been inserted successfully";
                        header("location: adminActivity.php");
                    } else {
                        $_SESSION['error'] = "Data has not been inserted successfully";
                        header("location: adminActivity.php");
                    }
                }
            }
        }
}


?>*/

/*if (isset($_POST['submit'])) {
    $name_activity = $_POST['name_activity'];
    $collect_hours = $_POST['collect_hours'];
    $img = $_FILES['img'];
    $allow = array('jpg', 'png', 'jpeg', 'gif', 'pdf');

if (is_uploaded_file($_FILES['img']['tmp_name'])) {
    $new_image_name = 'pro_'.uniqid().".".pathinfo(basename($_FILES['img']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "uploadsIMG/".$new_image_name;
    move_uploaded_file($_FILES['img']['tmp_name'],$image_upload_path);
    } else {
    $new_image_name = "";
    }

    $sql="INSERT INTO podo(name_activity, collect_hours, img) VALUES('$name_activity', '$collect_hours', '$img')" ;
    if ($result) {
        echo "<script> alert('บันทึก');</script>";
        echo "<script> window.location= adminActivity.php;</script>";
    }else{
        echo "<script> alert('ไม่บันทึก');</script>";
    }
}
?>*/

if (isset($_POST['submit'])) {
    $name_activity = $_POST['name_activity'];
    $collect_hours = $_POST['collect_hours'];
   

    $sql = $conn->prepare("INSERT INTO podo(name_activity, collect_hours) VALUES(:name_activity, :collect_hours)");
    $sql->bindParam(":name_activity", $name_activity);
    $sql->bindParam(":collect_hours", $collect_hours);
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
            header("refresh:2; url=adminActivity.php");
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
            header("refresh:2; url=adminActivity.php");
        }
    }

?>