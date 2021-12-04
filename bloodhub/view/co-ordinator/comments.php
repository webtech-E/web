<?php
 include "../db_conn.php";
 
?>


<div class="box">
		
	<div class="box2">
			<table style=" border-collapse: separate; border-spacing: 25px;">
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>comments</th>
					<!--<th>Action</th>-->
				</thead>
			
		<?php
				
				$query = "select * from comments";
				$result = mysqli_query($conn, $query);
				while($res = mysqli_fetch_array($result)){
		?>
			
				<tr>
				<td ><?php echo $res['ID']?></td>
				<td><?php echo $res['name']?></td>
				<td><?php echo $res['email']?></td>
				<td><?php echo $res['comments']?></td>
				
			<!--	<form action="com_delete.php" method="POST">
					<input type="hidden" name="id" value="<?php// echo $res['ID']?>">
					<th><input type="submit" name="delete" class="btn btn-danger"value="Delete"></th>
				</form>-->
				</tr>   
		
				<?php }?>
			</table>
		</div>
		</div><br>
		<br>