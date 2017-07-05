<?php
$db_name="justb4jc_tapnget";
$mysql_user="justb4jc_root";
$mysql_pass="root1234";
$server_name="localhost";
$con=mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
if(!$con){
	die("Error in connection\t". mysqli_connect_error());
}
else{
	//echo"<h3>Database Connection Success... </h3>";
}
?>

