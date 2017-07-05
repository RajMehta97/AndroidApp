<?php
require "init.php";

/**$mail_id=$_POST["user_user_name"];
$mail_id="2014ucp1005";
$mail_id.="@mnit.ac.in";
echo $mail_id;
FUNCTION TO GENERATE A RANDOM PASSWORD  **/

function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//GETTING THE NEWLY CREATED PASSWORD
$newString = generateRandomString();

//UPDATING THE NEWLY CREATED PASSWORD TO THE DATABASE
$sql = "UPDATE `user_info` SET `Password`='$newString' WHERE `College_id`='$college_id'";
$check = mysqli_query($con,$sql);


//THE MESSAGE VARIABLE THIS IS THE BODY OF THE MESSAGE
$mssg = "NEW LOGIN CREDENTIALS \n"+"USERNAME: "+$college_id+"\nPASSWORD: "+$newString;

//WRITING HEADERS FOR THE MAIL
$headers = "From: tapnget <tapnget.co.in>";

//SENDING THE MAIL
if(mail($mail_id,"Change Password Request",$mssg,$headers)){
	echo"Email has been sent to".$mail_id;
}
else{
	echo"There was an error sending the email".$mail_id;
}
?>