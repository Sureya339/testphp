<?php
$h=$_POST['hid'];
$n=$_POST['sname'];
$p=$_POST['phone'];
$pwd=$_POST['password'];
$e=$_POST['email'];
$a=$_POST['address'];
include "connectdb.php";
$sql="UPDATE tb_student set std_name='$n',std_mobile='$p',std_address='$a',std_email='$e',std_password='$pwd' where std_id='$h'";
$res=mysqli_query($con,$sql);
mysqli_close($con);
header("Location:showstd.php")
?>      