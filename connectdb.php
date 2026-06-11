<?php
$con=mysqli_connect("localhost","root","")or die("error1");
mysqli_select_db($con,"db_016")or die ("error2");
mysqli_query($con,"SET NAMES utf8");

?>