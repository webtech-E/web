<?php
 include "db_conn.php";
 
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Find Blood</title>
	<link rel="stylesheet"  href="./../style/find_blood.css">
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
	
	<div class = "find_blood">
		<h1>Find blood donors in your area</h1>
	</div>
	
	
	<div class="box">
		<h3>Notice!</h3>
		<p>
		For a better experience blood requests can only
		be posted through our mobile app, 
		please download to continue.
	
		</p>
		
		<a href="https://play.google.com/store/apps/details?id=com.savelife.connect.app" target="_blank"><img class ="pic_playstore"src="./../image/Google-Play-Store.jpg" alt="Picture Not Find"></a>
		<a href="https://www.apple.com/store" target="_blank"><img class ="pic_playstore"src="./../image/apple app.png" alt="Picture Not Find"></a>
		
		<h3>Download Mobile App to contact Blood Donors
		in your area!</h3>
		<p>
		Our mobile app is fully automated. It will 
		automatically contact blood donors in your area 
		asking for their help and eventually gets
		you in touch with them.<br>
		Posting a request is very easy, <b class='text'>download the app</b> now
		</p>
		
		<video width="500px" height="500px" controls="controls"/>   
        <source src="./../image/Save Life Connect.mp4" type="video/mp4"> 
		</video> 
	
	
		<h3>Get connected with local blood donors</h3>
		<p>
		<b style= 'color:green'>Note</b>: Blood requests can only be posted through 
		our mobile app, please download to continue.
		</p>
		
		<a href="https://play.google.com/store/apps/details?id=com.savelife.connect.app" target="_blank"><img class ="pic_playstore"src="./../image/Google-Play-Store.jpg" alt="Picture Not Find"></a>
		<a href="https://www.apple.com/store" target="_blank"><img class ="pic_playstore"src="./../image/apple app.png" alt="Picture Not Find"></a>
		
		
    </div>
	<footer class="footer">
  	 <div class="container1">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>Blood Hub</h4>
  	 			<ul>
  	 				<li><a href="about.php">about us</a></li>
  	 				<li><a href="https://play.google.com/store/apps/details?id=com.savelife.connect.app">our services</a></li>
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


