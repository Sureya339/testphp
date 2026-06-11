<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $n=$_GET['id'];
    include "connectdb.php";
    $sql="SELECT * FROM `tb_student` where std_id='$n'";
    $res=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($res);
    ?>
    <form action="updatestd.php" method="post">
    <table border=1 align='center'>
        <tr>
            <td colspan="2" align="center"><b>แก้ไขข้อมูลลูกค้า</b></td>
        </tr>
        <tr>
            <td>ชื่อ</td><td><input type="text" name="sname" required value="<?php echo $row['std_name'];?>"></td>
        </tr>
        <tr>
            <td>เบอร์โทร</td><td><input type="text" name="phone" required value="<?php echo $row['std_mobile'];?>"></td>
        </tr>
        <tr>
            <td>อีเมล์</td><td><input type="email" name="email" required value="<?php echo $row['std_email'];?>"></td>
        </tr>
        <tr>
            <td>ที่อยู่</td><td><input type="text" name="address" required value="<?php echo $row['std_address'];?>"></td>
        </tr>
        <tr>
            <td>รหัสผ่าน</td><td><input type="password" name="password" required value="<?php echo $row['std_password'];?>"></td>
        </tr>
        <input type="hidden" name="hid" value="<?php echo $row['std_id']?>">
        <tr>
            <td><input type="submit" value="ปรับปรุงข้อมูล"></td>
            <td>
                <input type="reset" value="ลบข้อมูล">
                <a href="showstd.php">กลับ</a>
        </td>
        </tr>
    </table>
    </form>
</body>
</html>