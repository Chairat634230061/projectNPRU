<div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="bubu">
                <h3>ข้อมูลผู้ดูแล</h3>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">เพิ่มข้อมูลผู้ดูแล</button>
                </div>
                <br>
                <table id="example" class="table">
                    <thead class="table-dark">
                        <tr>
                        <th>ID</th>
                        <th>ชื่อกิจกรรม</th>
                        <th>จำนวนชั่วโมงทั้งหมด</th>
                        <th>สถานที่</th>
                        <th>ผู้ดูแลกิจกรรม</th>
                        <th>แก้ไข</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    //คิวรี่ข้อมูลมาแสดงในตาราง
                    require_once 'server.php';
                    $stmt = $conn->prepare("SELECT * FROM podo");
                    $stmt->execute();
                    $result = $stmt->fetchAll();
                    foreach($result as $k) {
                    ?>

                    <tr>
                    <td><?php echo $k['id']; ?></td>
                    <td><?php echo $k['name_activity']; ?></td>
                    <td><?php echo $k['collect_hours']; ?></td>
                    <td><?php echo $k['name_location']; ?></td>
                    <td><?php echo $k['name_teacher']; ?></td>
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