
<?php
 include "db_conn.php";
 
	if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO comments (name, email, comments)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
		header("Location: live_feed.php");
	} 
	else {
		echo "<script>alert('Comment does not add.')</script>";
			
	}
}



?>