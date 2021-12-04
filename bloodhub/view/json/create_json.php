<?php
	
	
	function get_data(){
		include "../db_conn.php";
		
		$sql = "SELECT * FROM comments";
	$result = mysqli_query($conn, $sql);
	$all_comments = array();
	while($row = mysqli_fetch_array($result))
	{
		$all_comments[] = array(
			
			'name' => $row["name"],
			'email'=> $row["email"], 
			'comment'=> $row["comments"]
			
		);
	}
		return json_encode($all_comments);
			
}
	$file_name = date('d-m-y').'.json';
	
	if(file_put_contents($file_name, get_data()))
	{
		echo $file_name.'file Created';
		
	}
	else
	{
		echo $file_name.'File Not Created';
		
	}
	
 ?>