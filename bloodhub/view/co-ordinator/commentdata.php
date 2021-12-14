
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="./../../style/co_ordinator.css">

	<title>Co-Ordinator</title>
</head>
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
		<form action="" method="POST" class="form">
		
			<div id="main"></div>
			<div class="input-group">
				<button id="user" class="btn"> Users Information</button>
			
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
			
				
				<button id="comments" class="btn"> Comments Information</button>
				
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
			
			
			<div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
			</div>
		</form>
		
	</div>
</body>
</html>