<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "bloodhub";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if ($conn) {
	
	echo "Connection Successful!";
}
else{
	
	echo "Connection Failed!";
}
/*
if ($conn-> connect_error) {
	die( "Connection failed!".$conn-> connect_error);
	
}

else
*/

?>