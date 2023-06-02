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
        <h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มข้อมูลกิจกรรม</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action ="insert.php" method="post" enctype="multipart/form-data"> <!--enctype เพิ่มรุปภาพ -->
          <div class="mb-3">
            <label for="name_activity" class="col-form-label">ชื่อกิจกรรม</label>
            <input type="text" class="form-control" name="name_activity" required>
          </div>
          <div class="mb-3">
            <label for="collect_hours" class="col-form-label">ชั่วโมง</label>
            <input type="text" class="form-control" name="collect_hours" required>
          </div>
          <div class="mb-3">
            <label for="img" class="col-form-label">รูป</label>
            <input type="file" class="form-control" id="imgInput" name="img" >
            <img width = "100%" id="previewImg" alt="">
          </div>

         <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <button type="submit" name ="submit" class="btn btn-success">เพิ่มข้อมูล</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
 
 
 