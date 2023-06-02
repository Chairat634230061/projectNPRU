<div class = "conta">
    <div class ="stdeber">
        <p class = "pBA">เมนู</p>
        <a href="adminStudent.php" class ="stdeber-student" >รายชื่อนักศึกษา</a>
        <a href="adminHome.php" class ="stdeber-student" >ย้อนกลับ</a>
        <br>
        
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">เพิ่มข้อมูลนักศึกษาเข้าระบบ</button>
    
        <div class = "crud1">
        
        <div class = "crud2">
           
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มข้อมูลนักศึกษา</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

      <div class="modal-body">
        <form action ="register_db.php" method="post" enctype="multipart/form-data"> <!--enctype เพิ่มรุปภาพ -->
        <div class="mb-3">
          <label for="studentID" class="col-form-label">รหัสนักศึกษา</label>
          <input type="text" class="form-control" name="studentID" required>
        </div>
          <div class="mb-3">
            <label for="firstname" class="col-form-label">ชื่อจริงนักศึกษา</label>
            <input type="text" class="form-control" name="firstname" required>
          </div>
          <div class="mb-3">
            <label for="lastname" class="col-form-label">นามสกุลนักศึกษา</label>
            <input type="text" class="form-control" name="lastname" required>
          </div>
          <div class="mb-3">
            <label for="email" class="col-form-label">อีเมล</label>
            <input type="text" class="form-control" name="email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="col-form-label">รหัสผ่าน</label>
            <input type="password" class="form-control" name="password" required>
          </div>
          <div class="mb-3">
            <label for="c_password" class="col-form-label">ยืนยันรหัสผ่าน</label>
            <input type="password" class="form-control" name="c_password" required>
          </div>
         
         

         <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <button type="submit" name ="signup" class="btn btn-primary">เพิ่มข้อมูล</button>
      </div>
        </form>
    </div>
    </div>
</div>
</div>
</div>

    <div class="TBN">
    <?php include './page/admin/tablesNEW.php'?>
    </div>
</div>


     
</div>
 
</div>


</div>