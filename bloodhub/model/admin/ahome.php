<?php
 include "../db_conn.php";
 
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./../../view/ahome1.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>
<body>
	<div class="head">
		<h1>Welcome Admin</h1><button><li><a href="../alogout.php">Logout</a></li><br></button>
	</div>
  <div class="box">
		
	<div class="box2">
			<table class="table_vol">
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Password</th>
					<th>Gender</th>
					<th>Phone Number</th>
					<th>Location</th>
					<th>Blood_Group</th>
					<th>Action</th>
				</thead>
			
		<?php
				
				$query = "select * from sign";
				$result = mysqli_query($conn, $query);
				while($res = mysqli_fetch_array($result)){
		?>
			
				<tr>
				<td><?php echo $res['ID']?></td>
				<td><?php echo $res['full_name']?></td>
				<td><?php echo $res['email']?></td>
				<td><?php echo $res['password']?></td>
				<td><?php echo $res['gender']?></td>
				<td><?php echo $res['phone_number']?></td>
				<td><?php echo $res['city']?></td>
				<td><?php echo $res['blood_group']?></td>
				
				<form action="delete.php" method="post">
					<input type="hidden" name="id" value="<?php echo $res['ID']?>">
					<th><input type="submit" name="delete" class="btn btn-danger"value="Delete"></th>
				</form>
				</tr>
		
				<?php }?>	
			</table>
		</div>
		</div><br>
		<br>
	
</body>
</html>
