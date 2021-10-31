<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style/log.css">
</head>
<body>
     <form action="logval.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email</label>
     	<input type="text" name="email" placeholder="Email"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
		       
	
		<a href="index.php"><button type="button" class="back-btn">Back</button></a>
     	<button type="submit" class="log-btn">Login</button>
     </form>
</body>
</html>