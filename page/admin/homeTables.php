<?php include './page/admin/homeEdit.php'?> 
<div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="bubu">
                <h3>ข้อมูลรายละเอียดการเข้าร่วมกิจกรรมของนักศึกษา</h3>
                </div>
                <br>
                <table id="example" class="table">
                    <thead class="table-dark">
                        <tr>
                        <th>ลำดับ</th>
                        <th>ชื่อกิจกรรม</th>
                        <th>รหัสนักศึกษา</th>
                        <th>จำนวนชั่วโมง</th>
                        <th>วันที่บันทึกมา</th>
                        <th>รูปภาพ</th>
                        <th>รายละเอียด</th>
                        <th>สถานนะ</th>
                        <th>แก้ไข</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    //คิวรี่ข้อมูลมาแสดงในตาราง
                    require_once 'server.php';
                    $stmt = $conn->prepare("SELECT * FROM info_student");
                    $stmt->execute();
                    $result = $stmt->fetchAll();
                    foreach($result as $k) {
                    ?>

                    <tr>
                    <td><?php echo $k['id']; ?></td>
                    <td><?php echo $k['user_activity']; ?></td>
                    <td><?php echo $k['studentID']; ?></td>
                    <td><?php echo $k['collect_hours']; ?></td>
                    <td><?php echo $k['name_time']; ?></td>
                    <td width="150px" ><img class="rounded" width="100%"  src="uploadsIMG/<?php echo $k['img']; ?>" alt=""></td>
                    <td><?php echo $k['name_message']; ?></td>
                    <td><?php echo $k['user_status']; ?></td>
                    <td>
                    <a data-bs-toggle="modal" data-bs-target="#editUserModal" href="#<?php echo $k['id']; ?>" class="btn btn-warning">Edit</a>
                    <a data-id="<?= $k['id']; ?>" href="?delete=<?= $k['id']; ?>" class="btn btn-danger delete-btn">Delete</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>