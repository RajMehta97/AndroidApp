<?php
require "init.php";

$college_id=$_POST["user_user_name"];
$user_pass=$_POST["user_user_password"];
   
$sql = "UPDATE `user_info` SET `Password`='$user_pass' WHERE `College_id`='$college_id'";

$check = mysqli_query($con,$sql);

if($check){
	echo "UPDATED";
}
else{
	echo "Could not Update";
}