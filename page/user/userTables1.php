<div class="userUP">
    <?php include './page/user/userModal.php'?> 
    <div class="col-md-12"> 
        <table id="example" class="table">
            <thead class="table-dark">
                <tr>
                <th>ลำดับ</th>
                <th>ชื่อกิจกรรม</th>
                <th>รหัสนักศึกษา</th>
                <th>ชั่วโมงทั้งหมด</th>
                <th>วัน/เวลาที่บันทึก</th>
                <th>รูปภาพ</th>
                <th>อธิบายรายละเอียด</th>
                <th>สถานนะรอยืนยัน</th>
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
        </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
</div>
</div>
</body>
</html>
