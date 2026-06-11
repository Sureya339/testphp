<?php
include "connectdb.php";
$id=$_GET['did'];
//echo $id;
$sql="DELETE FROM tb_student WHERE `tb_student`.`std_id` = $id";
mysqli_query($con,$sql);
mysqli_close($con);
header('Location:showstd.php')
?>