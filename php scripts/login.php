<?php
require "init.php";

$college_id=$_POST["user_user_name"];
$user_pass=$_POST["user_user_password"];

$query = "SELECT * FROM `user_info` WHERE `College_id`='$college_id' AND `Password`='$user_pass'";

$result=mysqli_query($con,$query);

if(mysqli_num_rows($result)>0){
	echo "Login Success...";
}
else{
	echo"Login Failed... Try again!";
}

?>