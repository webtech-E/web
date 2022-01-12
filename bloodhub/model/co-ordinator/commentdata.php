<?php
 include "../db_conn.php";
 
?>


<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="./../../view/co_ordinator.css">

	<title>Co-Ordinator</title>
</head>
<style>
	
	.box2{
	
	display: grid;
	max-width: 1000px;
	text-decoration: none;
	height:60vh;
	max-width:200vh;
	box-shadow: 0px 0px 20px #8A8C9D;
	border-radius: 20px;
	box-sizing: 20%;
	margin: auto;
	overflow:hidden;
	text-align: justify;
	background-color: white;
 

}
	
	.table_vol{
		
		border-collapse: collapse;
		margin:25px,0;
		font-size: 0.9em;
		min-width: 1000px;
		
		
	}
	.table_vol thead tr{
		
		background-color: #5D91C8 ;
		color: #ffffff;
		font-weight: bold;
		font-size: 1.3em;
		
	}
	.table_vol  th,
	.table_vol td{
		text-align: center;
		padding: 12px 15px;	
	}
	.table_vol tbody tr{
		
		border-bottom: 1px solid #5D91C8;
	}
.table-vol tr:hover{
	color: #ffffff;
	padding-left:4px;
}
</style>
<body>
	<header>
        <div class="container">
            <nav class="nav_checkbox">
                <h2 style="color: white;">BLOOD HUB</h2>
                <ul class="content_nav"> 
                    <li><a href="#">Welcome Co-Ordinator</a></li>
                    <li><a href="../alogout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
	
	</header>
	
	
			
			<br><br><div>
				<input type = "text" id = "search" placeholder=" Blood Search....." autocomplete="off">
			
			</div>
			<div id="livesearch"></div>
					
			<script src="../jquery.js"></script>
				<script type="text/javascript">
					$(document).ready(function(){
						$("#search").keyup(function(){
							var input = $(this).val();
							//alert(input);
							
							if(input != ""){
							$.ajax({
								url:"search.php",
								type:"POST",
								data:{input:input},
								
								success:function(data){
									$("#livesearch").html(data);
									$("#livesearch").css("display","block");
								}
							});
					}else{
						$("#livesearch").css("display","none");
					}
						});
					});
				</script>
			


	<div class="wrapper">
		<div  class="form">
		
			<div id="main"></div>
			
			<div class="input-group">
				<button id="user"  class="btn"> Users Information</button>
			
			<script src="../jquery.js"></script>
			<script>
				$(document).ready(function(){
					$("#user").on("click",function(e){
						$.ajax({
							url:"userinfo.php",
							type:"POST",
							success:function(data){
								$("#main").html(data);
							}
						});
					});
					
				});
			</script>
			
				
			<button id="comments" class="btn"> Comments Information</button><br>
				
				<script src="../jquery.js"></script>
				<script>
					$(document).ready(function(){
						$("#comments").on("click",function(e){
							$.ajax({
								url:"comments.php",
								type:"POST",
								success:function(data){
									$("#main").html(data);
								}
							});
						});
					});
				</script>
			
			
			
			<br>
			</div>
			
		</div>
		
	</div>
	
	
	
	<div class="box2">
			<table class="table_vol">
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>comments</th>
					<th>Action</th>
				</thead>
			
		<?php
				
				$query = "select * from comments";
				$result = mysqli_query($conn, $query);
				while($res = mysqli_fetch_array($result)){
		?>
			
				<tr>
				<td><?php echo $res['ID']?></td>
				<td><?php echo $res['name']?></td>
				<td><?php echo $res['email']?></td>
				<td><?php echo $res['comments']?></td>
				
				
				<form action="delete.php" method="post">
					<input type="hidden" name="id" value="<?php echo $res['ID']?>">
					<th><input type="submit" name="delete" class="btn btn-danger"value="Delete"></th>
				</form>
				</tr>
		
				<?php }?>	
			</table>
		</div>
		</div><br>
	
</body>
</html>