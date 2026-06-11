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
    <div class="container-md pt-5 ">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-5">
                <div class="bg-light rounded p-md-3 d-flex shadow">
                    <div class="info ">
                        <img src="img/tiktok.png" alt="" class="rounded-circle w-25 h-25">
                        <h1 class="title text-secondary me-sm-2">Register</h1>
                    </div>
                    <form action="saveregis.php" method="post" class="form-control flex-fill align-self-stretch">
                        <div class="mt-sm-1">
                            Name
                            <input type="text" name="std_name" class="form-control" placeholder="นางสาวบิ๊ก">
                        </div>
                        <div class="mt-sm-1">
                            Address
                            <input type="text" name="std_address" class="form-control" placeholder="อยู่ไหน">
                        </div>
                        <div class="mt-sm-1">
                            Mobile
                            <input type="text" name="std_mobile" class="form-control" placeholder="09611115870">
                        </div>
                        <div class="mt-sm-1">
                            Email
                            <input type="text" name="std_email" class="form-control" placeholder="name@example.com">
                        </div>
                        <div class="mt-sm-1">
                            Password
                        </div>
                        <div class="mt-sm-1">
                            <input type="password" name="std_password" class="form-control"
                                placeholder="Enter your password">
                        </div>
                        <div class="mt-sm-3 align-middle">
                            <div class="row">
                                <div class="col-6"><input type="submit" value="Register" class="btn btn-primary w-100">
                                </div>
                                <div class="col-6"><input type="reset" value="Reset" class="btn btn-danger w-100"></div>
                            </div>
                        </div>
                        <div class="mt-sm-1">
                            <a href="register.php" class="">register</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>










    <!-- <div class="card">
    <form action="saveregis.php" method="post">
        <div class="input">
        <h3>ชื่อ</h3>
        <input type="text" name="std_name" required>
        <h3>ที่อยู่</h3>
        <input type="text" name="std_address" required>
        <h3>เบอร์โทร</h3>
        <input type="text" name="std_mobile" required>
        <h3>อีเมล์</h3>
        <input type="text" name="std_email" required>
        <h3>รหัสผ่าน</h3>
        <input type="password" name="std_password" required>
        </div>

        <div class="bt">
        <input type="submit" value="บันทึกข้อมูล">
        <input type="reset" value="ยกเลิก">
        <a href="login.php">กลับ</a>
        </div>
    </form>
    </div> -->

</body>
</html>