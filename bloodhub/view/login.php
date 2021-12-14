 <!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="./../style/log.css">
	
</head>
<body>
     <form action="logval.php" name ="form" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email</label>
     	<input type="text" name="email" placeholder="Email"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
		       
	
		<a href="./../index.php"><button type="button" class="back-btn" onclick="back()">Back</button></a>
     	<button type="submit" class="log-btn" name= "log" onclick="log()">Login</button>
     </form>
</body>
</html>

<script type="text/javascript">    
	   function log() {    
		  var Yes= confirm("Are you sure..?");    
		  var check = new Boolean(Yes);    
		  if (check == true) {    
			 alert('want to continue Yes');    
			 return true;    
		  }    
		  else {    
			 alert('user dont continue');    
			 return false;    
		  }    
	   }  

	   function back() {    
		  alert('Are you sure!!');
	   }  
	</script> 