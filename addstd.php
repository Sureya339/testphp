<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="card">
    <form action="savestd.php" method="post">
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
        </div>
    </form>
    </div>

</body>
</html>