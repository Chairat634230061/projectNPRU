<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">เลือกข้อมูลกิจกรรม</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action ="insertUSER.php" method="post" enctype="multipart/form-data"> <!--enctype เพิ่มรุปภาพ -->
        <select  class="form-select" aria-label="Default select example" name="user_activity"required>
        <option selected>กรุณาเลือก</option required>
        <?php       
                    $stmt = $conn->prepare("SELECT * FROM podo");
                    $stmt->execute();
                    $result = $stmt->fetchAll();
                    foreach($result as $k) {
        ?>
            
            <option value="<?php echo $k['name_activity']; ?>"><?php echo $k['name_activity']; ?></option>
          <?php } ?>
        </select>
          <div class="mb-3">
            <label for="studentID" class="col-form-label">รหัสนักศึกษา</label>
            <input type="text" class="form-control" name="studentID" required>
          </div>
          <div class="mb-3">
            <label for="collect_hours" class="col-form-label">ชั่วโมง</label>
            <input type="text" class="form-control" name="collect_hours" required>
          </div>
          <div class="mb-3">
            <label for="img" class="col-form-label">รูปภาพ</label>
            <input type="file" class="form-control" id="imgInput" name="img" >
            <img width = "100%" id="previewImg" alt="">
          </div>
          <div class="mb-3">
            <label for="message" class="col-form-label">อธิบายรายละเอียดการเข้าร่วม</label>
            <textarea class="form-control" id="message-text" name="name_message"></textarea>
          </div>

         <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <button type="submituser" name ="submituser" class="btn btn-success" value="submituser">เพิ่มข้อมูล</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
 
<!-- edit -->

<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ยืนยัน</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action ="editHome.php" method="post" enctype="multipart/form-data"> <!--enctype เพิ่มรุปภาพ -->
       <?php if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $stmt = $conn->prepare("SELECT * FROM info_student WHERE id = $id");
                        $stmt->execute();
                        $result = $stmt->fetchAll();
                        foreach($result as $k) {
       }
      }
       ?>

       <div class="mb-3">
           <label for="id" class="col-form-label">ลำดับ</label>
           <input type="text" value="<?php echo $k['id']; ?>" class="form-control" name="id" required>
         </div>
       <div class="mb-3">
           <label for="user_status" class="col-form-label">ยืนยันสถานะ</label>
           <input type="text"  class="form-control" name="user_status" required>
         </div>
         

         <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>