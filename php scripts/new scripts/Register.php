<?php
$db_name="a1698527_tapnget";
$mysql_user="a1698527_raj";
$mysql_pass="raj123";
$server_name="mysql13.000webhost.com";
$con=mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
    
    $username = $_POST["username"];
    $college_id = $_POST["college_id"];
    $number = $_POST["number"];
    $password = $_POST["password"];
    $statement = mysqli_prepare($con, "INSERT INTO `user_info`(`Username`,`College_id`,`Number`, `Password`) VALUES('$username','$college_id','$number','$password'");
    mysqli_stmt_bind_param($statement, "ssss",$username, $college_id, $number, $password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>