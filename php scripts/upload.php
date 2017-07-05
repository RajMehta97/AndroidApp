<?php
require_once "init.php";

$college_id=$_POST["college_id"];
$originalname=$_POST["displayname"];
$encodedDoc=$_POST["encodestring"];

function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$str = generateRandomString();
$decodedDoc= base64_decode["$encodedDoc"];

$newpath ="tapnget.co.in/documents".$str.$originalname;
if(file_put_contents[$newpath,$decodedDoc]){
	echo "File Uploaded";
}
else{
	echo "File Upload Error. Try again.";
}

$query = "INSERT INTO `tapnget_docs`(`user_college_id`,`Document`,`Ref_Code`,`Original_Name`) VALUES('$college_id','$newpath','$str','$originalname')";

mysqli_query($con,$query);
  
  ($con,$query);

/**
require "init.php";
function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


$str = generateRandomString();   
$file_path ="tapnget.co.in/documents";
     
    $file_path = $file_path .$str. basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) {
        echo "success";
    } else{
        echo "fail";
    }
	
	$query = "INSERT INTO `tapnget_docs`(`user_college_id`,`Document`,`Ref_Code`,`Original_Name`) VALUES('$college_id','$newpath','$str','')";

mysqli_query
**/
?>
