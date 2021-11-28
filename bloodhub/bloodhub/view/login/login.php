
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
	<form  id="form" class="form"  >
		
		<div class="form-control">
			<label for="username">Email</label>
			<input type="email" placeholder="sunny@gmail.com"   id="email" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Password</label>
			<input type="password" placeholder="Password"   id="password"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		
		<button type="submit" class="log-btn" >Login</button>

		<script src="login.js" type="text/javascript"></script>
	</form>
</div>