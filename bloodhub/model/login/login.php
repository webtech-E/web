
<!DOCTYPE html>
<html lang="en">
<head>
	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet"  type="text/css" href="login.css">
    <title>login</title>
</head>

<div class="container">
	<div class="header">
		<h2>Login</h2>
	</div>
	<form    action="logval.php" method= "post"  class="form" id="form"  >
		
		<div class="form-control">
			<label for="username">Email</label>
			<input type="email" placeholder="sunny@gmail.com"  id="email" name="email"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Password</label>
			<input type="password" placeholder="Password"  name="password" id="password">
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
	
		
		<button type="submit" class="log-btn" >Login</button>
		<a  href="./../../index.php"><button type="button" class="back-btn" onclick="back()">Back</button></a>

		
		<script src="login.js" type="text/javascript"></script>
	</form>
</div>

<script type="text/javascript">    
	  
	   function back() {    
		  alert('Are you sure!!');
	   }  
	</script> 