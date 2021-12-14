<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$password = validate($_POST['password']);

	if (empty($email)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		
		$sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
		$sql_s = "SELECT * FROM sign WHERE email='$email' AND password='$password'";
		
		$result = mysqli_query($conn, $sql);
		$result_s = mysqli_query($conn, $sql_s);
		
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
            	$_SESSION['email'] = $row['email'];
            	//$_SESSION['name'] = $row['name'];
            	$_SESSION['password'] = $row['password'];
            	header("Location: co-ordinator/commentdata.php");
				//header("Location: admin/ahome.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorect Email or password");
		        exit();
			}
		  }
		}
	
}else{
	header("Location: login.php");
	exit();
}
?>