<?php

require_once "init.php";

$college_id=$_POST["college_id"];
$originalname=$_POST["displayname"];

while(($checking=$_POST["encodestring"])!="*****"){
	$encodedDoc.=$checking;
}


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
$decodedDoc= base64_decode[$encodedDoc];

$newpath ="tapnget.co.in/documents".$str.$originalname;
if(file_put_contents[$newpath,$decodedDoc]){
	echo "File Uploaded";
}
else{
	echo "File Upload Error. Try again.";
}

$query = "INSERT INTO `tapnget_docs`(`user_college_id`,`Document`,`Ref_Code`,`Original_Name`) VALUES('$college_id','$newpath','$str','$originalname')";

mysqli_query($con,$query);



?>