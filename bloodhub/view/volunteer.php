<?php
 include "db_conn.php";
 
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>volunteer</title>
	<link rel="stylesheet"  href="./../style/volunteer.css">
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
                    <li><a href="#">LIVE FEED</a></li>
					<li><a href="sign.php">SIGN UP</a></li>
					<li><a href="login.php">LOGIN</a></li>
                </ul>
            </nav>
        </div>
	
	</header>
	
	<div class = "volunteer">
		<h1>Volunteer Blood Donors</h1>
	</div>
	
	
	<div class="box">
		<h3>Our super heroes are our volunteer blood donors</h3>
		<div class="box2">
			<table class="table_vol">
				<thead>
					<th>Name</th>
					<th>Location</th>
					<th>Blood_Group</th>
				</thead>
			
		<?php
				
				$query = "select * from sign";
				$result = mysqli_query($conn, $query);
				while($res = mysqli_fetch_array($result)){
		?>
			<tbody>
				
				<tr>
				<td><?php echo $res['full_name']?></td>
				<td><?php echo $res['city']?></td>
				<td><?php echo $res['blood_group']?></td>
				</tr>
			</tbody>
				<?php }?>	
			</table>
		</div><br>
		<br>
		<div class="box3">
			<h5>Filter Results</h5>
			<input type='radio' name="bld_group" value="A+"> A+&nbsp;
			<input type='radio' name="bld_group" value="A-">A-&nbsp;
			<input type='radio' name="bld_group" value="AB+">AB+&nbsp;
			<input type='radio' name="bld_group" value="AB-">AB-&nbsp;
			<input type='radio' name="bld_group" value="B+">B+&nbsp;
			<input type='radio' name="bld_group" value="B-">B-&nbsp;
			<input type='radio' name="bld_group" value="O+">O+&nbsp;
			<input type='radio' name="bld_group" value="O-">O-&nbsp;
			<input type='radio' name="bld_group" value="OH+">OH+&nbsp;
			<br>
			<button class='box3_btn'>Filter</button>
		</div>
		
		<h3>Our active volunteer blood donors</h3>
		<p>
		We depend on volunteers! Volunteers make 
		up 96% of our total workforce and carry 
		on our humanitarian work. Blood donation 
		is healthy, our volunteers are available 24/7 
		to help and donate blood. Blood banks store 
		blood bags but our volunteers are there with 
		you in an emergency for a blood transfusion 
		real time.
		</p>
		<p>
		Donating blood or platelets can be intimidating
		and even scary for many people. Time to put 
		those hesitations and fears aside. 
		Learn from Save Life Connect blood and
		platelet donors how simple and easy 
		it is to roll up a sleeve and help save lives.
		</p>	
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