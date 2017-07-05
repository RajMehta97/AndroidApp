<?php
require "init.php";
$user_name=$_POST["user_name"];
$user_uname=$_POST["user_uname"];
$user_pass=$_POST["user_pass"];
	
$q = "SELECT * FROM `user_info` WHERE `College_id`='$college_id'";

$res=mysqli_query($con,$q);

if(mysqli_num_rows($res)>0){
	echo "Registration Failed. User Exists";
}
else{
$query="INSERT INTO `user_info`(`Username`,`College_id`,`Number`, `Password`,`Balance`) VALUES('$user_name','$college_id','$number','$pass','0')";


if(mysqli_query($con,$query)){
	echo"Registration Success";
}
else{
	echo "Data insertion error...".mysqli_error($con);
}	

}
?>