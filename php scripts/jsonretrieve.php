<?php
require "init.php";

$college_id=$_POST["user_user_name"];
$user_pass=$_POST["user_user_password"];
$query = "SELECT * FROM `user_info` WHERE `College_id`='$college_id' AND `Password`='$user_pass'";

$result=mysqli_query($con,$query);

    $response = array(); 
    
    while($rows = mysqli_fetch_array($result)){
        
		array_push($response,array("username"=>$rows[1],"college_id"=>$rows[2],"number"=>$rows[3],"password"=>$rows[4],"balance"=>$rows[5],));
		
	}
    
    echo json_encode(array("server_response"=>$response));

	
?>