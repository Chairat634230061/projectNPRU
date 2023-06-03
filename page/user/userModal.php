<div class = "crud1">
    <h3>&nbsp;กิจกรรมอาสา</h3>
    

<div class = "crud2">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">เพิ่มข้อมูล</button>
</div>
</div>
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
 

 