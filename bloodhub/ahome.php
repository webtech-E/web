
<?php 
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['password'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style/ahom.css">
</head>
<body>
     <header>
        <div class="container">
				<img class ="logopic"src="admin.gif" alt="Logo Not Find">
                <a href="#" class="logo"><h2>BLOOD HUB</h2></a>
                
                <ul class="content_nav">
                    <li><a href="#"><img class ="donorpic" src="donor.jpg" alt="Donor pic not found">Doner</a></li><br>
                    <li><a href="#">Receiver</a></li><br>
                    <li><a href="#">Search</a></li><br>
                    <li><a href="#">Upadte System</a></li><br>
					<li><a href="#">Modify</a></li><br>
					 <li><a href="alogout.php"><img class ="logoutpic" src="logout.png" alt="Logout pic not found">Logout</a></li><br>
                </ul>
           
        </div>
		
    </header >
	
</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>