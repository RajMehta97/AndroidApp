<?php
$db_name="a1698527_tapnget";
$mysql_user="a1698527_raj";
$mysql_pass="raj123";
$server_name="mysql13.000webhost.com";
$con=mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
    
    $college_id = $_POST["College_id"];
    $password = $_POST["Password"];
    
    $statement = mysqli_prepare($con, "SELECT `Full Name`,`Username`,`College_id`,`Number`,`Password`,`Balance` FROM `user_info` 
	WHERE `College_id`='$college_id' AND `Password`='$password'");
    mysqli_stmt_bind_param($statement, "ss", $college_id, $password);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $id, $username, $college_id, $number, $password,$balance);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["Username"] = $username;
        $response["College_id"] = $college_id;
        $response["Number"] = $number;
        $response["Password"] = $password;
		$response["Balance"] = $balance;
    }
    
    echo json_encode($response);
?>
