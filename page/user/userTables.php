</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <h3>ข้อมูลกิจกรรม</h3>
                <table id="example" class="table">
                    <thead>
                        <tr>
                        <th>ชื่อกิจกรรม</th>
                        <th>ชื่อผู้ดูแล</th>
                        <th>ชั่วโมงทั้งหมด</th>
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
    
                    <td><?php echo $k['name_activity']; ?></td>
                    <td><?php echo $k['name_teacher']; ?></td>
                    <td><?php echo $k['collect_hours']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
