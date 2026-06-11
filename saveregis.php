<?php
    $name=$_POST['std_name'];
    $address=$_POST['std_address'];
    $mobile=$_POST['std_mobile'];
    $email=$_POST['std_email'];
    $password=$_POST['std_password'];

    include "connectdb.php";
    $sql = "insert into tb_student (std_name,std_address,std_mobile,std_email,std_password)values('$name','$address','$mobile','$email','$password')";
    $result=mysqli_query($con,$sql);
    $con->close();


    header("Location: login.php");
?>