<?php 

include("../db_conn.php");

  if(isset($_POST['input']))//this will tell us what to do if some data has been post through form with button.  
{  
    $input=$_POST['input'];
	
	$query = "SELECT * FROM sign WHERE blood_group LIKE '{$input}%'";
	
	$res = mysqli_query($conn, $query);
	
	if(mysqli_num_rows($res) >0){?>
		 
		 <table>
			<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>Blood</th>
			</tr>
			</thead>
			
			<tbody>
				<?php
				while($row = mysqli_fetch_assoc($res)){
					
						$ID = $row['ID'];
						$name = $row['full_name'];
						$email= $row['email'];
						$phone = $row['phone_number'];
						$blood = $row['blood_group'];
						
						
				?>
				<tr>
					<td><?php echo $ID;?></td>
					<td><?php echo $name;?></td>
					<td><?php echo $email;?></td>
					<td><?php echo $phone;?></td>
					<td><?php echo $blood;?></td>
					
				</tr>
				<?php
				}
				 
				?>
				
			</tbody>
		 </table>
		 
		 <?php
		
		
	}else{
		
		
		
	}
	
}
?> 