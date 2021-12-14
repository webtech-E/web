<?php
 include "db_conn.php";
 
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Live Feed</title>
	<link rel="stylesheet"  href="./../style/lives.css">
	
	
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head>

<body>
	<header>
        <div class="container">
            <nav class="nav_checkbox">
                <a href="#" class="logo"><h2>BLOOD HUB</h2></a>
                <input type="checkbox" id="tab-nav" class="tab-nav">
                <label for="tab-nav" class="label">
                    <div class="burger"></div>
                    <div class="burger"></div>
                    <div class="burger"></div>
                </label>
                <ul class="content_nav">
                    <li><a href="./../index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="volunteer.php">OUR VOLUNTEERS</a></li>
                    <li><a href="find_blood.php">FIND BLOOD</a></li>
                    <li><a href="live_feed.php">LIVE FEED</a></li>
					<li><a href="sign.php">SIGN UP</a></li>
					<li><a href="login.php">LOGIN</a></li>
                </ul>
            </nav>
        </div>
	
	</header>
	
	<div class = "volunteer">
		<h1>Live Network Statistics</h1>
	</div>
	
	
	<div class="box">
		<h3>Our Volunteer Network Statistics</h3>
		<div class="box2">
			<table class="table_vol">
			<thead>
					<th>Name</th>
					<th>Post</th>
					
				</thead>
		<?php
				$query = "select * from comments";
				$result = mysqli_query($conn, $query);
				while($res = mysqli_fetch_array($result)){
		?>
			<tbody>
				
				<tr>
				<td><?php echo $res['name']?></td>
				<td><?php echo $res['comments']?></td>
				</tr>
			</tbody>
				<?php }?>	
			</table>
		</div><br>
		<br>
		<div class="box3">
			<h5>Urgent Blood Request&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="user" style="color:red;"> News</button><div id="main"></div>
						
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
			<form action="commentsval.php" method="POST" class="form">
		
				<label for="name">Name</label>
				
				<input type="text" name="name" id="name" placeholder="Enter your Name" required><br>
				<br><label for="email">Email</label>
				
				<input type="email" name="email" id="email" placeholder="Enter your Email" required><br>
				
				<br><label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Enter your Comment"  rows="5" cols="40" required></textarea>
			
				<br ><br><button name="submit" class="btn">Post Comment</button>
			
		</h5>
			</form>
						
	
		</div>
		
		
    </div>
	<footer class="footer">
  	 <div class="container1">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Blood Hub</h4>
  	 			<ul>
  	 				<li><a href="about.php">about us</a></li>
  	 				<li><a href="https://play.google.com/store/apps/details?id=com.savelife.connect.app"target="_blank" >our services</a></li>
  	 				<li><a href="./../index.php">privacy policy</a></li>
  	 			</ul>
  	 		</div>
  	 		
  	 		
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
  	 				<a href="https://www.instagram.com/accounts/emailsignup/?hl=bn" target="_blank"><i class="fab fa-instagram"></i></a>
  	 				<a href="https://www.linkedin.com/signup/cold-join?trk=guest_homepage-basic_nav-header-join"target="_blank" ><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
	
	
	
</body>
</html>