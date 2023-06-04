<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
    session_start();
    require_once ("server.php");

    if (isset($_POST['signupadmin'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        $urole = 'admin';

        if (empty($firstname)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อ';
            header("location: adminTeacher.php");
        } else if (empty($lastname)) {
            $_SESSION['error'] = 'กรุณากรอกนามสกุล';
            header("location: adminTeacher.php");
        } else if (empty($number)) {
            $_SESSION['error'] = 'กรุณากรอกเบอร์';
            header("location: adminTeacher.php");
        } else if (empty($email)) {
            $_SESSION['error'] = 'กรุณากรอกอีเมล';
            header("location: adminTeacher.php");
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = 'รูปแบบอีเมลไม่ถูกต้อง';
            header("location: adminTeacher.php");
        } else if (empty($password)) {
            $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
            header("location: adminTeacher.php");
        } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
            $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวระหว่าง 5 ถึง 20 ตัวอักษร';
            header("location: adminTeacher.php");
        } else if (empty($c_password)) {
            $_SESSION['error'] = 'กรุณายืนยันรหัสผ่าน';
            header("location: adminTeacher.php");
        } else if ($password != $c_password) {
            $_SESSION['error'] = 'รหัสผ่านไม่ตรงกัน';
            header("location: adminTeacher.php");
        } else {
            try {

                $check_email = $conn->prepare("SELECT email FROM user WHERE email = :email");
                $check_email->bindParam(":email", $email);
                $check_email->execute();
                $row = $check_email->fetch(PDO::FETCH_ASSOC);
                
               

                if ($row['email'] == $email) {
                    $_SESSION['warning'] = "มีอีเมลนี้อยู่ในระบบแล้ว";
                    echo "<script>
                        $(document).ready(function() {
                            Swal.fire({
                                title: 'มีอีเมลนี้อยู่ในระบบแล้ว',
                                icon: 'error',
                                timer: 5000,
                               showConfimButton: false,
                            });
                        })
                    </script>";
                    header("refresh:2; url=adminTeacher.php");
                    
                } else if (!isset($_SESSION['error'])) {
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $conn->prepare("INSERT INTO user(number, firstname, lastname, email, password, urole) 
                                            VALUES(:number, :firstname, :lastname, :email, :password, :urole)");
                    $stmt->bindParam(":number", $number);
                    $stmt->bindParam(":firstname", $firstname);
                    $stmt->bindParam(":lastname", $lastname);
                    $stmt->bindParam(":email", $email);
                    $stmt->bindParam(":password", $passwordHash);
                    $stmt->bindParam(":urole", $urole);
                    $stmt->execute();
                    $_SESSION['success'] = "สมัครสมาชิกเรียบร้อยแล้ว!";
                    echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                            title: 'เพิ่มสมาชิกเรียบร้อยแล้ว',
                            icon: 'success',
                            timer: 5000,
                           showConfimButton: false,
                        });
                    })
                </script>";
                header("refresh:2; url=adminTeacher.php");
                    
                } else {
                    $_SESSION['error'] = "มีบางอย่างผิดพลาด";
                    echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                            title: 'มีบางอย่างผิดพลาด',
                            icon: 'error',
                            timer: 5000,
                           showConfimButton: false,
                        });
                    })
                </script>";
                header("refresh:2; url=adminTeacher.php");
                }
            
        
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
    


?>
