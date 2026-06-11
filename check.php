<?php
session_start();
$p=$_POST['email'];
$pwd=$_POST['password'];
include "connectdb.php";
$sql="select * from tb_student where std_email='$p' and std_password='$pwd'";
$res=mysqli_query($con,$sql);
$n=mysqli_num_rows($res);
if ($n==1){
    $row=mysqli_fetch_assoc($res);
    $_SESSION['uid']=$row['std_id'];
    header("Location:showstd.php");
}else{
    echo '<script> alert("ข้อมูลผิดพลาด"); </script>';
    echo "<meta http-equiv='refresh' content='0;URL=login.php'>/";
}

?>