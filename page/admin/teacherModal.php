
<?php include './page/admin/teacherTables.php'?> 

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มข้อมูลผู้ดูแล</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action ="insert.php" method="post" enctype="multipart/form-data"> <!--enctype เพิ่มรุปภาพ -->
          <div class="mb-3">
            <label for="firstname" class="col-form-label">ชื่อจริงผู้ดูแล</label>
            <input type="text" class="form-control" name="firstname" required>
          </div>
          <div class="mb-3">
            <label for="lastname" class="col-form-label">นามสกุลผู้ดูแล</label>
            <input type="text" class="form-control" name="lastname" required>
          </div>
          <div class="mb-3">
            <label for="email" class="col-form-label">Email</label>
            <input type="text" class="form-control" name="email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="col-form-label">รหัสผ่าน</label>
            <input type="text" class="form-control" name="password" required>
          </div>
          <div class="mb-3">
            <label for="c_password" class="col-form-label">ยืนยันรหัสผ่าน</label>
            <input type="text" class="form-control" name="c_password" required>
          </div>

         
         <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <button type="submit" name ="signup" class="btn btn-success">เพิ่มข้อมูล</button>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">แก้ไขข้อมูลกิจกรรม</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action ="editActivity.php" method="post" enctype="multipart/form-data"> <!--enctype เพิ่มรุปภาพ -->
       <?php if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $stmt = $conn->prepare("SELECT * FROM podo WHERE id = $id");
                        $stmt->execute();
                        $result = $stmt->fetchAll();
                        foreach($result as $k) {
       }
      }
       ?>

       <div class="mb-3">
           <label for="id" class="col-form-label">ID</label>
           <input type="text" value="<?php echo $k['id']; ?>" class="form-control" name="id" required>
         </div>
       <div class="mb-3">
           <label for="name_activity" class="col-form-label">ชื่อกิจกรรม</label>
           <input type="text" value="<?php echo $k['name_activity']; ?>" class="form-control" name="name_activity" required>
         </div>
          <div class="mb-3">
            <label for="collect_hours" class="col-form-label">จำนวนชั่วโมงทั้งหมด</label>
            <input type="text" value="<?php echo $k['collect_hours']; ?>"  class="form-control" name="collect_hours" required>
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

 
 
 