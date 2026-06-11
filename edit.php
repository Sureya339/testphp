<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bs5/css/bootstrap.min.css">
    <script src="bs5/css/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <?php
    $n = $_GET['id'];
    include "connectdb.php";
    $sql = "SELECT * FROM `tb_student` where std_id='$n'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="updatestd.php" method="post" class="form-control shadow">
                    <div class="h3 p-1 bg-secondary rounded w-100 text-light d-flex justify-content-between">
                            <div>
                            แก้ไขข้อมูลลูกค้า
                            </div>
                            <div class="mt-3 text-light h3">
                                <a href="showstd.php" class="btn-close text-light"></a>
                            </div>
                    </div>
                    <div class="mt-2 p-1">
                        <div class="form-label">
                            ชื่อ 
                        </div>
                        <input type="text" name="sname" required value="<?php echo $row['std_name']; ?>" class="form-control p-2">
                    </div>
                    <div class="mt-2 p-1">
                        <div class="form-label">
                            เบอร์โทร
                        </div>
                        <input type="text" name="phone" required value="<?php echo $row['std_mobile']; ?>" class="form-control p-2">
                    </div>
                    <div class="mt-2 p-1">
                        <div class="form-label">
                            อีเมล์  
                        </div>
                        <input type="email" name="email" required value="<?php echo $row['std_email']; ?>" class="form-control p-2">
                    </div>
                    <div class="mt-2 p-1">
                        <div class="form-label">
                            ที่อยู่ 
                        </div>
                        <input type="text" name="address" required value="<?php echo $row['std_address']; ?>" class="form-control p-2">
                    </div>
                    <div class="mt-2 p-1">
                        <div class="form-label">
                            รหัสผ่าน 
                        </div>
                        <input type="password" name="password" required value="<?php echo $row['std_password']; ?>" class="form-control p-2">
                    </div>
                    
                    <input type="hidden" name="hid" value="<?php echo $row['std_id'] ?>">

                    <div class="btn-group w-100 mt-5">
                        <input type="submit" value="ปรับปรุงข้อมูล" class="btn btn-primary w-100">
                        <input type="reset" value="ลบข้อมูล" class="btn btn-danger w-100">
                    </div>
                </form>
            </div>
            <div class="col-4"></div>
        </div>

    </div>
</body>

</html>