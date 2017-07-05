<?php
require "init.php";

$college_id=$_POST["user_user_name"];
$user_pass=$_POST["user_user_password"];
$name=$_POST["name"];
$num =$_POST["user_number"];
   
$sql = "UPDATE `user_info` SET `Username`='$name', `Number` = '$num'  WHERE `College_id`='$college_id' AND `Password`='$user_pass'";

$check = mysqli_query($con,$sql);

if($check){
	echo "UPDATED";
}
else{
	echo "Could not Update";
}

?>	