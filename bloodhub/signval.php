<?php 
//session_start(); 
include "db_conn.php";

if (isset($_POST["full_name"]) && isset($_POST["email"])&&isset($_POST['password']) &&isset($_POST['c_password'])  &&isset($_POST['gender'])  &&isset($_POST['phone_number']) &&isset($_POST['city'])  &&isset($_POST['blood_group'])    ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$full_name= validate($_POST['full_name']);
	$email = validate($_POST['email']);
	$password = validate($_POST['password']);
	$c_password = validate($_POST['c_password']); 
	$gender =  validate($_POST['gender']);
	$phone_number = validate($_POST['phone_number']);
	$city = validate($_POST['city']);
	$blood_group= validate($_POST['blood_group']);

	if (empty($full_name)) {
		header("Location: sign1.php?error=Name is required");
	    exit();
	}else if(empty($email)){
        header("Location: sign1.php?error= Email is required");
	    exit();
	}
	else if(empty($password)){
        header("Location: sign1.php?error=Password is required");
	    exit();
	}
	else if(empty($c_password)){
        header("Location: sign1.php?error=Confrim password is required");
	    exit();
	}else if(empty($gender)){
        header("Location: sign1.php?error=Gender is required");
	    exit();
	}else if(empty($phone_number)){
        header("Location: sign1.php?error=Phone Number is required");
	    exit();
	}else if(empty($city)){
        header("Location: sign1.php?error=City is required");
	    exit();
	}else if(empty($blood_group)){
        header("Location: sign1.php?error=Blood Group is required");
	    exit();
	}

	
}else{
	header("Location: sign1.php");
	exit();
}
?>