</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="bubu">
                <h3>ข้อมูลนักศึกษา</h3>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">เพิ่มข้อมูลนักศึกษา</button>
                </div>
                <br>
                <table id="example" class="table">
                    <thead class="table-dark">
                        <tr>
                        <th>รหัสนักศึกษา</th>
                        <th>ชื่อจริงนักศึกษา</th>
                        <th>นามสกุลนักศึกษา</th>
                        <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    //คิวรี่ข้อมูลมาแสดงในตาราง
                    require_once 'server.php';
                    $stmt = $conn->prepare("SELECT * FROM studentuser");
                    $stmt->execute();
                    $result = $stmt->fetchAll();
                    foreach($result as $k) {
                    ?>

                    <tr>
                    <td><?php echo $k['studentID']; ?></td>
                    <td><?php echo $k['firstname']; ?></td>
                    <td><?php echo $k['lastname']; ?></td>
                    <td><?php echo $k['email']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>